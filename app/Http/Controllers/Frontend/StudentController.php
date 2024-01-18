<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    protected $student_repo;

    public function __construct(StudentRepository $studentRepository){
        $this->student_repo = $studentRepository;
    }

    public function signup(){
        return view('pages.signup');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'image'=>'required|image',
            'firstname'=>'required|max:255|min:2',
            'lastname'=>'required|max:255|min:2',
            'firstname_en'=>'required|max:255|min:2',
            'lastname_en'=>'required|max:255|min:2',
            'gender'=>'required',
            'birthday'=>'required|date',
            'email'=>'required|email|unique:students,email',
            'phone'=>'required|max:20|min:10',
            'student_code'=>'required|max:13|min:13|unique:students,student_code',
            'password'=>'required|confirmed|min:6',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                         ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->hasFile('image')){
            $file =   Str::random().'.'.$request->image->extension();
           $request->image = $request->image->storeAs('profile', $file);
        }

        $this->student_repo->store($request);

        return redirect()->route('student.signin') ;
    }

    public function signin(){
        return view('pages.signin');
    }

    public function forgotpass(){
        return view('pages.forgotpass');
    }

}
