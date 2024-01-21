<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;

class Teachercontroller extends Controller
{
    use Common;
    public function index(){
        $teachers =Teacher::get();
        return view('admin.teachers',compact('teachers'));
            }
        
        public function create()
            {
                return view('admin.addteacher');
            }
        
        
        public function store(Request $request)
            {
        $messages = $this->messages();
                $data = $request ->validate ([
                    'name'=>'required|string|max:50',
                    'designation'=>'required',
                    'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                    'facebook' =>'required',
                    'twitter' =>'required',
                    'instagram' =>'required',
        
                ], $messages);
                $fileName = $this->uploadFile($request->image, 'assets/img');
                $data['image'] = $fileName;
                $data['published']=isset($request->published);
                Teacher::create($data);
                return redirect('teacher/teachers');
            }
        
         public function show(string $id)
            {
                $teacher=Teacher::findOrFail($id);
                return view('admin.showteacher', compact('teacher'));
            }
        
        public function edit(string $id)
            {
                $teacher=Teacher::findOrFail($id);
                return view('admin.updateteacher', compact('teacher'));
        }
        public function update(Request $request, string $id)
            {
         $messages = $this->messages();
                $data = $request->validate([
                    'name'=>'required|string|max:50',
                    'designation'=>'required',
                    'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
                    'facebook' =>'required',
                    'twitter' =>'required',
                    'instagram' =>'required',
                    ], $messages);
        
                    if($request->hasFile('image')){
                        $fileName = $this->uploadFile($request->image, 'assets/img');    
                        $data['image'] = $fileName;
                    }
                    
                    $data['published'] = isset($request->published);
                    Teacher::where('id', $id)->update($data);
                    return redirect('teacher/teachers');
         }
            public function destroy(string $id)
            {
                Teacher::where('id', $id)->delete();
                return redirect('teacher/teachers');
            }
            public function trashed()
            {
                $teachers=Teacher::onlyTrashed()->get();
                return view('admin.trashedteacher', compact('teachers'));
            }
        
            public function forceDelete(string $id)
            {
                Teacher::where('id', $id)->forceDelete();
                return redirect('teacher/teachers');
            }
        
            public function restore(string $id)
            {
                Teacher::where('id', $id)->restore();
                return redirect('teacher/teachers');
            }
        
            public function messages(){
                return[
                        'name.required'=>'الاسم مطلوب',
                        'name.string'=>'Should be string',
                        'designation.required'=> 'should be date',
                        'image.required'=> 'Please be sure to select an image',
                        'image.mimes'=> 'Incorrect image type',
                        'image.max'=> 'Max file size exceeded',
                        'facebook.required'=>'facebook required',
                        'twitter.required'=>'twitter required ',
                        'instagram.required'=>'instagram required ',
                ];
            } 
}
