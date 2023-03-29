<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::where('deleted_at', null)->orderBy('created_at', 'desc')->simplePaginate(10);
        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $request->validate([
            'teacher_name' => 'required|max:120|min:5|regex:/^[ا-ی\-۰-۹ء-ي ]+$/u',
            'teacher_phone' => 'required|digits:11',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'teacher_description' => 'required|max:400|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
        ]);
        
        $file = $request->file('image');
        $image = "";
        if(!empty($file)){
            $image = time().".".$file->getClientOriginalExtension();
            $file->move('admin/images', $image);
        }

         $teacher = Teacher::create([
             'image'=>$image,
             'teacher_name'=>$request->teacher_name,
             'teacher_phone'=>$request->teacher_phone,
             'teacher_description'=>$request->teacher_description,
         ]);
         return redirect()->route('teacher.index')->with('success','ثبت استاد با موفقیت انجام شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->destroy($id);
        return redirect()->route('teacher.index');
    }
}
