<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;

use App\Traits\Common;

class Subjectcontroller extends Controller
{
    use Common;
    public function index(){
        $subjects =Subject::get();
        return view('admin.subjects',compact('subjects'));
            }
        
        public function create()
            {
                $teachers=Teacher::get();
                return view('admin.addsubject', compact('teachers'));
            }
        
        
        public function store(Request $request)
            {
        $messages = $this->messages();
                $data = $request ->validate ([
                    'subjectname'=>'required|string|max:50',
                    'age'=>'required',
                    'image' => 'required|mimes:png,jpg,jpeg|max:2048',

                    'time' =>'required',
                    'capacity' =>'required',
                    'price' =>'required',
                    'teacher_id'=>'required',
                ], $messages);
                $fileName = $this->uploadFile($request->image, 'assets/img');
                $data['image'] = $fileName; 
                $data['published']=isset($request->published);
                Subject::create($data);
                return redirect('subject/subjects');
            }
        
         public function show(string $id)
            {
                $subject=Subject::findOrFail($id);
                return view('admin.showsubject', compact('subject'));
            }
        
        public function edit(string $id)
            {
                $subject=Subject::findOrFail($id);
                $teachers = Teacher::get();
                return view('admin.updatesubject', compact('subject','teachers'));
        }
        public function update(Request $request, string $id)
            {
         $messages = $this->messages();
                $data = $request->validate([
                    'subjectname'=>'required|string|max:50',
                    'age'=>'required',
                    'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',

                    'time' =>'required',
                    'capacity' =>'required',
                    'price' =>'required',
                    'teacher_id'=>'required',
                    
                    ], $messages);
        
                    if($request->hasFile('image')){
                        $fileName = $this->uploadFile($request->image, 'assets/img');    
                        $data['image'] = $fileName;
                    }
                    
                    $data['published'] = isset($request->published);
                    Subject::where('id', $id)->update($data);
                    return redirect('subject/subjects');
         }
            public function destroy(string $id)
            {
                Subject::where('id', $id)->delete();
                return redirect('subject/subjects');
            }
            public function trashed()
            {
                $subjects=Subject::onlyTrashed()->get();
                return view('admin.trashedsubject', compact('subjects'));
            }
        
            public function forceDelete(string $id)
            {
                Subject::where('id', $id)->forceDelete();
                return redirect('subject/subjects');
            }
        
            public function restore(string $id)
            {
                Subject::where('id', $id)->restore();
                return redirect('subject/subjects');
            }
        
            public function messages(){
                return[
                        'subjectname.required'=>'الاسم مطلوب',
                        'subjectname.string'=>'Should be string',
                        'time.required'=> 'time is required',
                        'image.required'=> 'Please be sure to select an image',
                        'image.mimes'=> 'Incorrect image type',
                        'image.max'=> 'Max file size exceeded',
                        'age.required'=>'age is required',
                        'capacity.required'=>'capacity is required ',
                        'price.required'=>'price is required ',
                        'teacher_id'=>'teacher name is required'
                ];
            } 

}
