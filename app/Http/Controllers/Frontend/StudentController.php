<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Repositories\ReportRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Validator;
use App\Repositories\FormSurveyRepository;
use App\Repositories\FormRegisterRepository;

class StudentController extends Controller
{
    protected $student_repo;
    protected $company_repo;
    protected $formsurvey_repo;
    protected $formregister_repo;
    protected $report_repo;

    public function __construct(
        StudentRepository $studentRepository,
        CompanyRepository $companyRepository,
        FormSurveyRepository $formSurveyRepository,
        FormRegisterRepository $formRegisterRepository,
        ReportRepository $reportRepository
    ) {
        $this->student_repo = $studentRepository;
        $this->company_repo = $companyRepository;
        $this->formsurvey_repo = $formSurveyRepository;
        $this->formregister_repo = $formRegisterRepository;
        $this->report_repo = $reportRepository;
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
        $data = [];
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
            $data = $this->formsurvey_repo->valiable($data, $request);
        } else {
            $data = $this->formsurvey_repo->store($request);
        }
        return redirect()->route('student.regissv', ['id' => $data->id])->with('message', 'บันทึกสำเร็จ');
    }

    public function regiscoop(Request $request)
    {
        $data = [];
        if (!empty($request->id)) {
            $data = $this->formregister_repo->findById($request->id);
        }
        return view('pages.regiscoop', compact('data'));
    }

    public function storeRegiscoop(Request $request)
    {
        if ($request->hasFile('map')) {
            $file_map =   Str::random() . '.' . $request->map->extension();
            $request->map = $request->map->storeAs('regis_profile', $file_map);
        }
        if ($request->hasFile('student_image')) {
            $file =   Str::random() . '.' . $request->student_image->extension();
            $request->student_image = $request->student_image->storeAs('regis_profile', $file);
        }

        $request->student_id = Auth::guard('student')->id();
        $request->status = 'wait';

        // dd($request->map);
        if (!empty($request->id)) {
            $data = $this->formregister_repo->findById($request->id);
            $data = $this->formregister_repo->valiable($data, $request);
        } else {
            $data = $this->formregister_repo->store($request);
        }
        return redirect()->route('student.regis', ['id' => $data->id])->with('message', 'บันทึกสำเร็จ');
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
        $form_surveys = $this->formsurvey_repo->getById(Auth::guard('student')->id());
        $form_regis = $this->formregister_repo->getById(Auth::guard('student')->id());
        return view('pages.regis', compact('form_surveys', 'form_regis'));
    }

    public function report()
    {
        $reports = $this->report_repo->getById(Auth::guard('student')->id());
        return view('pages.report', compact('reports'));
    }

    public function storeReport(Request $request)
    {
        if ($request->hasFile('report')) {
            $file =   Str::random() . '.' . $request->report->extension();
            $request->report = $request->report->storeAs('report', $file);
        }

        $request->student_id = Auth::guard('student')->id();

        if (!empty($request->id)) {
            $data = $this->report_repo->findById($request->id);
            $data = $this->report_repo->valiable($data, $request);
        } else {
            $data = $this->report_repo->store($request);
        }

        return redirect()->route('student.report')->with('message', 'อัปโหลดสำเร็จ');
    }

    public function deleteImage(Request $request)
    {

        $id = $request->id;
        $model = $request->model;
        $column = $request->column;
        $name = $request->name;
        $multi = $request->multi;
        $key = $request->key;
        $data = app($model)->query()->find($id);
        $myArray = null;
        if (!empty($multi)) {
            $myArray = Arr::except($data->gallery, [$key]);
        }
        $data->{$column} = $myArray;
        $data->save();
        return redirect()->back();
    }
}
