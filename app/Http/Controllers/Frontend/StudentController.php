<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Repositories\CompanyRepository;
use App\Repositories\FormSurveyRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    protected $student_repo;
    protected $company_repo;
    protected $formsurvey_repo;

    public function __construct(
        StudentRepository $studentRepository,
        CompanyRepository $companyRepository,
        FormSurveyRepository $formSurveyRepository
    ) {
        $this->student_repo = $studentRepository;
        $this->company_repo = $companyRepository;
        $this->formsurvey_repo = $formSurveyRepository;
    }

    public function signup()
    {
        return view('pages.signup');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image',
            'firstname' => 'required|max:255|min:2',
            'lastname' => 'required|max:255|min:2',
            'firstname_en' => 'required|max:255|min:2',
            'lastname_en' => 'required|max:255|min:2',
            'gender' => 'required',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|max:20|min:10',
            'student_code' => 'required|max:13|min:13|unique:students,student_code',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            $file =   Str::random() . '.' . $request->image->extension();
            $request->image = $request->image->storeAs('profile', $file);
        }

        $this->student_repo->store($request);

        return redirect()->route('student.signin');
    }

    public function signin()
    {
        return view('pages.signin');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_code' => 'required|max:13|min:13',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::guard('student')->attempt(['student_code' => $request->student_code, 'password' => $request->password])) {
            return redirect()->route('student.stepcoop');
        }

        return redirect()
            ->back()
            ->withErrors(['login_fail' => 'รหัสนักศึกษาหรือรหัสผ่านไม่ถูกต้อง !!!'])
            ->withInput();
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.signin');
    }

    public function forgotpass()
    {
        return view('pages.forgotpass');
    }

    public function regissv(Request $request)
    {
        $data = collect();
        if (!empty($request->id)) {
            $data = $this->formsurvey_repo->findById($request->id);
        }
        return view('pages.regissv', compact('data'));
    }

    public function storeRegissurvey(Request $request)
    {
        $galleries = [];
        if (!empty($request->gallery)) {
            foreach ($request->gallery as $gallery) {
                $file =   Str::random() . '.' . $gallery->extension();
                $galleries[] = $gallery->storeAs('survey', $file);
            }
        }

        $request->student_id = Auth::guard('student')->id();
        $request->gallery = $galleries;
        $request->status = 'wait';

        // dd($request->gallery);
        if (!empty($request->id)) {
            $data = $this->formsurvey_repo->findById($request->id);
            $data = $this->formsurvey_repo->valiable($data,$request);
        } else {
            $data = $this->formsurvey_repo->store($request);
        }
        return redirect()->route('student.regissv', ['id' => $data->id])->with('message', 'บันทึกสำเร็จ');
    }

    public function regiscoop()
    {
        $data = collect();
        if (!empty($request->id)) {
            $data = $this->formsurvey_repo->findById($request->id);
        }
        return view('pages.regiscoop', compact('data'));
    }

    public function storeRegiscoop(Request $request)
    {
        $galleries = [];
        if (!empty($request->gallery)) {
            foreach ($request->gallery as $gallery) {
                $file =   Str::random() . '.' . $gallery->extension();
                $galleries[] = $gallery->storeAs('survey', $file);
            }
        }

        $request->student_id = Auth::guard('student')->id();
        $request->gallery = $galleries;
        $request->status = 'wait';

        // dd($request->gallery);
        if (!empty($request->id)) {
            $data = $this->formsurvey_repo->findById($request->id);
            $data = $this->formsurvey_repo->valiable($data,$request);
        } else {
            $data = $this->formsurvey_repo->store($request);
        }
        return redirect()->route('student.regiscoop', ['id' => $data->id])->with('message', 'บันทึกสำเร็จ');
    }


    public function stepcoop()
    {
        return view('pages.stepcoop');
    }

    public function company()
    {
        $companies = $this->company_repo->getAll();
        return view('pages.company', compact('companies'));
    }

    public function regis()
    {
        return view('pages.regis');
    }

    public function report()
    {
        return view('pages.report');
    }
}
