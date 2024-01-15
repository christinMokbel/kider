<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;


class Testimonialcontroller extends Controller
{
    use Common;
    public function index(){
        $testimonials =Testimonial::get();
        return view('admin.testimonials',compact('testimonials'));
            }
        
        public function create()
            {
                return view('admin.addtestimonial');
            }
        
        
        public function store(Request $request)
            {
        $messages = $this->messages();
                $data = $request ->validate ([
                    'name'=>'required|string|max:50',
                    'description'=>'required|string',
                    'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                    'profession' =>'required|string',
        
                ], $messages);
                $fileName = $this->uploadFile($request->image, 'assets/img');
                $data['image'] = $fileName;
                $data['published']=isset($request->published);
                Testimonial::create($data);
                return redirect('testimonial/testimonials');
            }
        
         public function show(string $id)
            {
                $testimonial=Testimonial::findOrFail($id);
                return view('admin.showtestimonial', compact('testimonial'));
            }
        
        public function edit(string $id)
            {
                $testimonial=Testimonial::findOrFail($id);
                return view('admin.updatetestimonial', compact('testimonial'));
        }
        public function update(Request $request, string $id)
            {
         $messages = $this->messages();
                $data = $request->validate([
                     'name'=>'required|string|max:50',
                     'description'=> 'required|string',
                     'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
                     'profession'=>'required',
                    ], $messages);
        
                    if($request->hasFile('image')){
                        $fileName = $this->uploadFile($request->image, 'assets/img');    
                        $data['image'] = $fileName;
                    }
                    
                    $data['published'] = isset($request->published);
                    Testimonial::where('id', $id)->update($data);
                    return redirect('testimonial/testimonials');
         }
            public function destroy(string $id)
            {
                Testimonial::where('id', $id)->delete();
                return redirect('testimonial/testimonials');
            }
            public function trashed()
            {
                $testimonials=Testimonial::onlyTrashed()->get();
                return view('admin.trashedtestimonial', compact('testimonials'));
            }
        
            public function forceDelete(string $id)
            {
                Testimonial::where('id', $id)->forceDelete();
                return redirect('testimonial/testimonials');
            }
        
            public function restore(string $id)
            {
                Testimonial::where('id', $id)->restore();
                return redirect('testimonial/testimonials');
            }
        
            public function messages(){
                return[
                        'name.required'=>'الاسم مطلوب',
                        'name.string'=>'Should be string',
                        'description.required'=> 'should be text',
                        'image.required'=> 'Please be sure to select an image',
                        'image.mimes'=> 'Incorrect image type',
                        'image.max'=> 'Max file size exceeded',
                ];
            }
        
}
