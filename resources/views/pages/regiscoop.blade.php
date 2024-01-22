<x-app-layout>
    <!-- start sidebar -->

    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">iptm</a>
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item">
                <a href="{{ route('student.stepcoop') }}">
                    <i class="ri-flow-chart sidebar-menu-item-icon"></i>
                    ขั้นตอนสหกิจศึกษา
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="{{ route('student.company') }}">
                    <i class="ri-search-line sidebar-menu-item-icon"></i>
                    ค้นหาสถานประกอบการ
                </a>
            </li>
            <li class="sidebar-menu-item active">
                <a href="{{ route('student.regis') }}">
                    <i class="ri-user-add-line sidebar-menu-item-icon"></i>
                    สมัครโครงการสหกิจ
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="{{ route('student.report') }}">
                    <i class="ri-file-add-line sidebar-menu-item-icon"></i>
                    รายงานปฏิบัติงานสหกิจ
                </a>
            </li>
        </ul>
    </div>

    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            @include('layouts.includes.navbar')
        </div>
        <form action="{{ route('student.regiscoop.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ @$data->id ?? '' }}">
            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-3 col-10">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col">
                                <label for="student_image" class="col-form-label">รูปนักศึกษา:</label>
                                <input type="file" class="form-control" name="student_image" id="student_image" accept="image/png, image/jpeg">
                            </div>
                            <div class="col">
                                <label for="student_id" class="col-form-label">รหัสประจำตัว:</label>
                                <input type="text" class="form-control" name="student_id" id="student_id" value="{{ @$data->student->student_code ?? Auth::guard('student')->user()->student_code }}" disabled>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="company_name" class="col-form-label">ชื่อสถานประกอบการที่ต้องการสมัคร:</label>
                                <input type="text" class="form-control" name="company_name" id="company_name" value="{{ old('company_name') }}">
                            </div>
                            <div class="col">
                                <label for="job_position" class="col-form-label">สมัครงานในตำแหน่ง:</label>
                                <input type="text" class="form-control" name="job_position" id="job_position" value="{{ old('job_position') }}">
                            </div>
                        </div>
                        <label for="expected_work" class="col-form-label mt-2">ระยะเวลาปฏิบัติงานสหกิจศึกษา (อย่างน้อย 10 เดือน):</label>
                        <div class="row g-3">
                            <div class="col">
                                <label for="expected_work_from" class="col-form-label">จาก</label>
                                <input type="date" class="form-control" name="expected_work_from" id="expected_work_from" value="{{ old('expected_work_from') }}">
                            </div>
                            <div class="col">
                                <label for="expected_work_until" class="col-form-label">ถึง</label>
                                <input type="date" class="form-control" name="expected_work_until" id="expected_work_until" value="{{ old('expected_work_until') }}">
                            </div>
                        </div>
                        <h6 class="fw-bold mt-4 d-flex justify-content-center">ข้อมูลส่วนตัวนักศึกษา</h6>
                        <div class="row g-3">
                            <div class="col">
                                <label for="firstname" class="col-form-label">ชื่อ (ภาษาไทย):</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" value="{{ @$data->student->firstname ?? Auth::guard('student')->user()->firstname }}" readonly>
                            </div>
                            <div class="col">
                                <label for="lastname" class="col-form-label">นามสกุล (ภาษาไทย):</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value="{{ @$data->student->lastname ?? Auth::guard('student')->user()->lastname }}" readonly>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="firstname_en" class="col-form-label mt-2">ชื่อ (ภาษาอังกฤษ):</label>
                                <input type="text" class="form-control" name="firstname_en" id="firstname_en" value="{{ @$data->student->firstname_en ?? Auth::guard('student')->user()->firstname_en }}" readonly>
                            </div>
                            <div class="col">
                                <label for="lastname_en" class="col-form-label mt-2">นามสกุล (ภาษาอังกฤษ):</label>
                                <input type="text" class="form-control" name="lastname_en" id="lastname_en" value="{{ @$data->student->lastname_en ?? Auth::guard('student')->user()->lastname_en }}" readonly>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="gender" class="col-form-label">เพศ:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย">
                                <label class="form-check-label" for="male">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง">
                                <label class="form-check-label" for="female">หญิง</label>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="birthday" class="col-form-label ">วัน เดือน ปีเกิด:</label>
                                <input type="date" class="form-control" name="birthday" id="birthday" value="{{  @$data->student->birthday ?? Auth::guard('student')->user()->birthday }}" readonly>
                            </div>
                            <div class="col">
                                <label for="age" class="col-form-label ">อายุ:</label>
                                <input type="text" class="form-control" name="age" id="age" value="">
                            </div>
                            <div class="col">
                                <label for="weight" class="col-form-label ">น้ำหนัก:</label>
                                <input type="number" class="form-control" name="weight" id="weight" value="{{ old('weight') }}">
                            </div>
                            <div class="col">
                                <label for="height" class="col-form-label">ส่วนสูง:</label>
                                <input type="number" class="form-control" name="height" id="height" value="{{ old('height') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="id_card" class="col-form-label mt-2">บัตรประจำตัวประชาชนเลขที่:</label>
                                <input type="text" class="form-control" name="id_card" id="id_card" value="{{ old('id_card') }}">
                            </div>
                            <div class="col">
                                <label for="place_of_issue" class="col-form-label mt-2">ออกให้ ณ:</label>
                                <input type="text" class="form-control" name="place_of_issue" id="place_of_issue" value="{{ old('place_of_issue') }}">
                            </div>
                            <div class="col">
                                <label for="due_date" class="col-form-label mt-2">วันหมดอายุ:</label>
                                <input type="date" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="race" class="col-form-label mt-2">เชื้อชาติ:</label>
                                <input type="text" class="form-control" name="race" id="race" value="{{ old('race') }}">
                            </div>
                            <div class="col">
                                <label for="nationality" class="col-form-label mt-2">สัญชาติ:</label>
                                <input type="text" class="form-control" name="nationality" id="nationality" value="{{ old('nationality') }}">
                            </div>
                            <div class="col">
                                <label for="religion" class="col-form-label mt-2">ศาสนา:</label>
                                <input type="text" class="form-control" name="religion" id="religion" value="{{ old('religion') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="address_current" class="col-form-label">ที่อยู่ปัจจุบัน:</label>
                            <textarea class="form-control" cols="30" rows="3" name="address_current" id="address_current">{{ old('address_current') }}</textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="phone1" class="col-form-label mt-2">โทรศัพท์:</label>
                                <input type="text" class="form-control" name="phone1" id="phone1" value="{{ old('phone1') }}">
                            </div>
                            <div class="col">
                                <label for="mobilephone" class="col-form-label mt-2">โทรศัพท์เคลื่อนที่:</label>
                                <input type="text" class="form-control" name="mobilephone" id="mobilephone" value="{{ old('mobilephone') }}">
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label mt-2">อีเมล์:</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="permanent_address" class="col-form-label">ที่อยู่ตามทะเบียนบ้าน:</label>
                            <textarea class="form-control" cols="30" rows="3" name="permanent_address" id="permanent_address">{{ old('permanent_address') }}</textarea>
                        </div>
                        <div class="col">
                            <label for="phone2" class="col-form-label mt-2">โทรศัพท์:</label>
                            <input type="text" class="form-control" name="phone2" id="phone2" value="{{ old('phone2') }}">
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="emergency_contact" class="col-form-label mt-2">บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน:</label>
                                <input type="text" class="form-control" name="emergency_contact" id="emergency_contact" value="{{ old('emergency_contact') }}">
                            </div>
                            <div class="col">
                                <label for="emergency_phone" class="col-form-label mt-2">โทรศัพท์:</label>
                                <input type="text" class="form-control" name="emergency_phone" id="emergency_phone" value="{{ old('emergency_phone') }}">
                            </div>
                        </div>


                        <h6 class="fw-bold mt-4 d-flex justify-content-center">ข้อมูลครอบครัว</h6>
                        <div class="row g-3">
                            <div class="col">
                                <label for="father_name" class="col-form-label mt-2">ชื่อ-สกุลบิดา:</label>
                                <input type="text" class="form-control" name="father_name" id="father_name" value="{{ old('father_name') }}">
                            </div>
                            <div class="col">
                                <label for="father_occupation" class="col-form-label mt-2">อาชีพ:</label>
                                <input type="text" class="form-control" name="father_occupation" id="father_occupation" value="{{ old('father_occupation') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="father_place_work" class="col-form-label">สถานที่ทำงาน:</label>
                            <textarea class="form-control" cols="30" rows="3" name="father_place_work" id="father_place_work">{{ old('father_place_work') }}</textarea>
                        </div>
                        <div class="col">
                            <label for="father_phone" class="col-form-label mt-2">โทรศัพท์:</label>
                            <input type="text" class="form-control" name="father_phone" id="father_phone" value="{{ old('father_phone') }}">
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="mother_name" class="col-form-label mt-2">ชื่อ-สกุลมารดา:</label>
                                <input type="text" class="form-control" name="mother_name" id="mother_name" value="{{ old('mother_name') }}">
                            </div>
                            <div class="col">
                                <label for="mother_occupation" class="col-form-label mt-2">อาชีพ:</label>
                                <input type="text" class="form-control" name="mother_occupation" id="mother_occupation" value="{{ old('mother_occupation') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="mother_place_work" class="col-form-label">สถานที่ทำงาน:</label>
                            <textarea class="form-control" cols="30" rows="3" name="mother_place_work" id="mother_place_work">{{ old('mother_place_work') }}</textarea>
                        </div>
                        <div class="col">
                            <label for="mother_phone" class="col-form-label mt-2">โทรศัพท์:</label>
                            <input type="text" class="form-control" name="mother_phone" id="mother_phone" value="{{ old('mother_phone') }}">
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="siblings_no" class="col-form-label mt-2">จำนวนพี่น้อง:</label>
                                <input type="text" class="form-control" name="siblings_no" id="siblings_no" value="{{ old('siblings_no') }}">
                            </div>
                            <div class="col">
                                <label for="you_are_the" class="col-form-label mt-2">เป็นบุตรคนที่:</label>
                                <input type="text" class="form-control" name="you_are_the" id="you_are_the" value="{{ old('you_are_the') }}">
                            </div>
                        </div>

                        <h6 class="fw-bold mt-4 d-flex justify-content-center">การศึกษา</h6>
                        <h6 class="mt-2">กำลังศึกษาในภาควิชาการจัดการเทคโนโลยีการผลิตและสารสนเทศ</h6>
                        <h6 class="mt-2">Department of Information and Product Technology Management</h6>
                        <h6 class="mt-4">วิทยาลัยเทคโนโลยีอุตสาหกรรม มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</h6>
                        <h6 class="mt-2">College of Industrial Technology King Mongkut's University of Technology North Bangkok</h6>
                        <div class="col">
                            <label for="GPA" class="col-form-label mt-2">ผลการเรียนสะสม:</label>
                            <input type="text" class="form-control" name="GPA" id="GPA" value="{{ old('GPA') }}">
                        </div>

                        <label for="education_background" class="fw-bold mt-4 mb-2 d-flex justify-content-center">ประวัติการศึกษา</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-2">ระดับ</th>
                                    <th>สถานศึกษา</th>
                                    <th>ปีที่เริ่ม</th>
                                    <th>ปีที่จบ</th>
                                    <th>วุฒิการศึกษา</th>
                                    <th>วิชาเอก</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>มัธยมต้น</th>
                                    <td><input type="text" class="form-control" name="education_background[school][middle]" value="{{ $data->education_background->school->middle ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_start][middle]" value="{{ @$data->education_background->year_start->middle ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_end][middle]" value="{{ @$data->education_background->year_end->middle ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[qualification][middle]" value="{{ @$data->education_background->qualification->middle ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[major][middle]" value="{{ @$data->education_background->major->middle ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <th>มัธยมปลาย</th>
                                    <td><input type="text" class="form-control" name="education_background[school][high]" value="{{ @$data->education_background->school->high ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_start][high]" value="{{ @$data->education_background->year_start->high ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_end][high]" value="{{ @$data->education_background->year_end->high ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[qualification][high]" value="{{ @$data->education_background->qualification->high ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[major][high]" value="{{ @$data->education_background->major->high ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <th>อนุปริญญา</th>
                                    <td><input type="text" class="form-control" name="education_background[school][diploma]" value="{{ @$data->education_background->school->diploma ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_start][diploma]" value="{{ @$data->education_background->year_start->diploma ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_end][diploma]" value="{{ @$data->education_background->year_end->diploma ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[qualification][diploma]" value="{{ @$data->education_background->qualification->diploma ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[major][diploma]" value="{{ @$data->education_background->major->diploma ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <th>ปริญญา</th>
                                    <td><input type="text" class="form-control" name="education_background[school][degree]" value="{{ @$data->education_background->school->degree ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_start][degree]" value="{{ @$data->education_background->year_start->degree ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[year_end][degree]" value="{{ @$data->education_background->year_end->degree ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[qualification][degree]" value="{{ @$data->education_background->qualification->degree ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="education_background[major][degree]" value="{{ @$data->education_background->major->degree ?? '' }}"></td>
                                </tr>
                            </tbody>
                        </table>

                        <label for="training_background" class="fw-bold mt-4 mb-2 d-flex justify-content-center">ประวัติการฝึกอบรม</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>หัวข้อฝึกอบรม</th>
                                    <th>หน่วยงานที่ให้การอบรม</th>
                                    <th>ช่วงเวลาที่ฝึกอบรม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="training_background[title][]" value="{{ @$data->training_background->title[0] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[organize][]" value="{{ @$data->training_background->organize[0] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[time][]" value="{{ @$data->training_background->time[0] ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="training_background[title][]" value="{{ @$data->training_background->title[1] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[organize][]" value="{{ @$data->training_background->organize[1] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[time][]" value="{{ @$data->training_background->time[1] ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="training_background[title][]" value="{{ @$data->training_background->title[2] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[organize][]" value="{{ @$data->training_background->organize[2] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[time][]" value="{{ @$data->training_background->time[2] ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="training_background[title][]" value="{{ @$data->training_background->title[3] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[organize][]" value="{{ @$data->training_background->organize[3] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="training_background[time][]" value="{{ @$data->training_background->time[3] ?? '' }}"></td>
                                </tr>
                            </tbody>
                        </table>


                        <label for="student_activities" class="fw-bold mt-4 mb-2 d-flex justify-content-center">ประสบการณ์การปฏิบัติงานและกิจกรรมนักศึกษา</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ช่วงเวลา</th>
                                    <th>องค์กร/กิจกรรม</th>
                                    <th>ความรับผิดชอบ</th>
                                    <th>หมายเหตุ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="student_activities[time][]" value="{{ @$data->student_activities->time[0] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[organize][]" value="{{ @$data->student_activities->organize[0] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[responsibility][]" value="{{ @$data->student_activities->responsibility[0] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[note][]" value="{{ @$data->student_activities->note[0] ?? '' }}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="student_activities[time][]" value="{{ @$data->student_activities->time[1] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[organize][]" value="{{ @$data->student_activities->organize[1] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[responsibility][]" value="{{ @$data->student_activities->responsibility[1] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[note][]" value="{{ @$data->student_activities->note[1] ?? '' }}"></td>
                                </tr>
                                <tr>
                                <td><input type="text" class="form-control" name="student_activities[time][]" value="{{ @$data->student_activities->time[2] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[organize][]" value="{{ @$data->student_activities->organize[2] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[responsibility][]" value="{{ @$data->student_activities->responsibility[2] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[note][]" value="{{ @$data->student_activities->note[2] ?? '' }}"></td>
                                </tr>
                                <tr>
                                <td><input type="text" class="form-control" name="student_activities[time][]" value="{{ @$data->student_activities->time[3] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[organize][]" value="{{ @$data->student_activities->organize[3] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[responsibility][]" value="{{ @$data->student_activities->responsibility[3] ?? '' }}"></td>
                                    <td><input type="text" class="form-control" name="student_activities[note][]" value="{{ @$data->student_activities->note[3] ?? '' }}"></td>
                                </tr>
                            </tbody>
                        </table>

                        <label for="lan_ability" class="fw-bold mt-4 mb-2 d-flex justify-content-center">ความสามารถทางภาษา</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ภาษา Language</th>
                                    <th>พูด (Speaking)</th>
                                    <th>ฟัง (Listening)</th>
                                    <th>อ่าน (Reading)</th>
                                    <th>เขียน (Writing)</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>อังกฤษ English</th>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[speak]" id="en_speak1" value="Good" {{ @$data->lan_ability_english?->speak == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_speak1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[speak]" id="en_speak2" value="Fair" {{ @$data->lan_ability_english?->speak  == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_speak2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[speak]" id="en_speak3" value="Poor" {{ @$data->lan_ability_english?->speak  == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_speak3">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[listen]" id="en_listen1" value="Good" {{ @$data->lan_ability_english?->listen == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_listen1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[listen]" id="en_listen2" value="Fair" {{ @$data->lan_ability_english?->listen == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_listen2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[listen]" id="en_listen3" value="Poor" {{ @$data->lan_ability_english?->listen == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_listen3">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[read]" id="en_read1" value="Good" {{ @$data->lan_ability_english?->read == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_read1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[read]" id="en_read2" value="Fair" {{ @$data->lan_ability_english?->read == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_read2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[read]" id="en_read3" value="Poor" {{ @$data->lan_ability_english?->read == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_read3">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[write]" id="en_write1" value="Good" {{ @$data->lan_ability_english?->write == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_write1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[write]" id="en_write2" value="Fair" {{ @$data->lan_ability_english?->write == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_write2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_english[write]" id="en_write3" value="Poor" {{ @$data->lan_ability_english?->write == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="en_write3">Poor</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>จีน Chinese</th>
                                    <td>
        
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[speak]" id="ch_speak1" value="Good" {{ @$data->lan_ability_chinese?->speak == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_speak1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[speak]" id="ch_speak2" value="Fair" {{ @$data->lan_ability_chinese?->speak == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_speak2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[speak]" id="ch_speak3" value="Poor" {{ @$data->lan_ability_chinese?->speak == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_speak3">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[listen]" id="ch_listen1" value="Good" {{ @$data->lan_ability_chinese?->listen == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_listen1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[listen]" id="ch_listen2" value="Fair" {{ @$data->lan_ability_chinese?->listen == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_listen2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[listen]" id="ch_listen3" value="Poor" {{ @$data->lan_ability_chinese?->listen == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_listen3">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[read]" id="ch_read1" value="Good" {{ @$data->lan_ability_chinese?->read == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_read1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[read]" id="ch_read2" value="Fair" {{ @$data->lan_ability_chinese?->read == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_read2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[read]" id="ch_read3" value="Poor" {{ @$data->lan_ability_chinese?->read == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_read3">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[write]" id="ch_write1" value="Good" {{ @$data->lan_ability_chinese?->write == 'Good' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_write1">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[write]" id="ch_write2" value="Fair" {{ @$data->lan_ability_chinese?->write == 'Fair' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_write2">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="lan_ability_chinese[write]" id="ch_write3" value="Poor" {{ @$data->lan_ability_chinese?->write == 'Poor' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="ch_write3">Poor</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>อื่นๆ Other</th>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otspeak" id="goodotspeak" value="goodotspeak">
                                            <label class="form-check-label" for="goodotspeak">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otspeak" id="fairotspeak" value="fairotspeak">
                                            <label class="form-check-label" for="fairotspeak">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otspeak" id="poorotspeak" value="poorotspeak">
                                            <label class="form-check-label" for="poorotspeak">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otlisten" id="goodotlisten" value="goodotlisten">
                                            <label class="form-check-label" for="goodotlisten">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otlisten" id="fairotlisten" value="fairotlisten">
                                            <label class="form-check-label" for="fairotlisten">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otlisten" id="poorotlisten" value="poorotlisten">
                                            <label class="form-check-label" for="poorotlisten">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otread" id="goodotread" value="goodotread">
                                            <label class="form-check-label" for="goodotread">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otread" id="fairotread" value="fairotread">
                                            <label class="form-check-label" for="fairotread">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otread" id="poorotread" value="poorotread">
                                            <label class="form-check-label" for="poorotread">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otwrite" id="goodotwrite" value="goodotwrite">
                                            <label class="form-check-label" for="goodotwrite">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otwrite" id="fairotwrite" value="fairotwrite">
                                            <label class="form-check-label" for="fairotwrite">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otwrite" id="poorotwrite" value="poorotwrite">
                                            <label class="form-check-label" for="poorotwrite">Poor</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <label for="special_ability" class="fw-bold mt-4 mb-2 d-flex justify-content-center">ความสามารถพิเศษ</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Word</th>
                                    <th>Excel</th>
                                    <th>Powerpoint</th>
                                    <th>Internet</th>
                                    <th>Database</th>
                                    <th>อื่นๆ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enspeak" id="goodenspeak" value="goodenspeak">
                                            <label class="form-check-label" for="goodenspeak">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enspeak" id="fairenspeak" value="fairenspeak">
                                            <label class="form-check-label" for="fairenspeak">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enspeak" id="poorenspeak" value="poorenspeak">
                                            <label class="form-check-label" for="poorenspeak">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enspeak" id="goodenspeak" value="goodenspeak">
                                            <label class="form-check-label" for="goodenspeak">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enspeak" id="fairenspeak" value="fairenspeak">
                                            <label class="form-check-label" for="fairenspeak">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enspeak" id="poorenspeak" value="poorenspeak">
                                            <label class="form-check-label" for="poorenspeak">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enlisten" id="goodenlisten" value="goodenlisten">
                                            <label class="form-check-label" for="goodenlisten">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enlisten" id="fairenlisten" value="fairenlisten">
                                            <label class="form-check-label" for="fairenlisten">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enlisten" id="poorenlisten" value="poorenlisten">
                                            <label class="form-check-label" for="poorenlisten">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enread" id="goodenread" value="goodenread">
                                            <label class="form-check-label" for="goodenread">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enread" id="fairenread" value="fairenread">
                                            <label class="form-check-label" for="fairenread">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enread" id="poorenread" value="poorenread">
                                            <label class="form-check-label" for="poorenread">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enwrite" id="goodenwrite" value="goodenwrite">
                                            <label class="form-check-label" for="goodenwrite">Good</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enwrite" id="fairenwrite" value="fairenwrite">
                                            <label class="form-check-label" for="fairenwrite">Fair</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="enwrite" id="poorenwrite" value="poorenwrite">
                                            <label class="form-check-label" for="poorenwrite">Poor</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="text">
                                            <input type="text" class="my-2">
                                            <input type="text">
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <h6 class="fw-bold mt-4 d-flex justify-content-center">ความสามารถอื่นๆ</h6>
                        <div>
                            <label for="driving_license" class="col-form-label">ใบขับขี่</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="is_drive_car" id="is_drive_car" value="1" {{ @$data->is_drive_car == 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="is_drive_car">รถยนต์</label>
                        </div>
                        <div>
                            <label for="diver_license_car" class="col-form-label">ใบอนุญาตเลขที่:</label>
                            <input type="text" class="form-control" name="diver_license_car" id="diver_license_car" value="{{ old('diver_license_car') }}">
                        </div>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="checkbox" name="is_drive_motorcycle" id="is_drive_motorcycle" value="1" {{ @$data->is_drive_motorcycle == 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="is_drive_motorcycle">จักรยานยนต์</label>
                        </div>
                        <div>
                            <label for="diver_license_motorcycle" class="col-form-label">ใบอนุญาตเลขที่:</label>
                            <input type="text" class="form-control" name="diver_license_motorcycle" id="diver_license_motorcycle" value="{{ old('diver_license_motorcycle') }}">
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="sports" class="col-form-label mt-2">กีฬา:</label>
                                <input type="text" class="form-control" name="sports" id="sports" value="{{ old('sports') }}">
                            </div>
                            <div class="col">
                                <label for="hobbies" class="col-form-label mt-2">งานอดิเรก:</label>
                                <input type="text" class="form-control" name="hobbies" id="hobbies" value="{{ old('hobbies') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="introduct" class="col-form-label">โปรดอธิบายให้ผู้อื่นรู้จักตัวท่านดีขึ้น:</label>
                            <textarea class="form-control" cols="30" rows="3" name="introduct" id="introduct">{{ old('introduct') }}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="interest" class="col-form-label">ระบุสารงานและลักษณะงานอาชีพที่นักศึกษาสนใจ:</label>
                            <textarea class="form-control" cols="30" rows="3" name="interest" id="interest">{{ old('interest') }}</textarea>
                        </div>

                        <h6 class="fw-bold mt-4 d-flex justify-content-center">อื่นๆ</h6>
                        <div class="row g-3">
                            <div class="col">
                                <label for="sickness" class="col-form-label">ท่านเคยป่วยหนักเมื่อ:</label>
                                <input type="text" class="form-control" name="sickness" id="sickness" value="{{ old('sickness') }}">
                            </div>
                            <div class="col">
                                <label for="sickness_describe" class="col-form-label">ด้วยโรค:</label>
                                <input type="text" class="form-control" name="sickness_describe" id="sickness_describe" value="{{ old('sickness_describe') }}">
                            </div>
                        </div>

                        <h6 class="fw-bold mt-4 d-flex justify-content-center">รายละเอียดสถานประกอบการ</h6>
                        <div>
                            <label for="company_name2" class="col-form-label">ชื่อสถานประกอบการ:</label>
                            <input type="text" class="form-control" name="company_name2" id="company_name2" value="{{ old('company_name2') }}">
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="company_contact" class="col-form-label">บุคคลที่สามารถติดต่อได้ (สถานประกอบการ):</label>
                                <input type="text" class="form-control" name="company_contact" id="company_contact" value="{{ old('company_contact') }}">
                            </div>
                            <div class="col">
                                <label for="company_contact_phone1" class="col-form-label">โทรศัพท์:</label>
                                <input type="text" class="form-control" name="company_contact_phone1" id="company_contact_phone1" value="{{ old('company_contact_phone1') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="company_address" class="col-form-label">ที่ตั้ง:</label>
                                <input type="text" class="form-control" name="company_address" id="company_address" value="{{ old('company_address') }}">
                            </div>
                            <div class="col">
                                <label for="company_contact_phone2" class="col-form-label">โทรศัพท์:</label>
                                <input type="text" class="form-control" name="company_contact_phone2" id="company_contact_phone2" value="{{ old('company_address') }}">
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-form-label">ชื่อ-สกุล นักศึกษาที่ออกปฏิบัติงาน:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ Auth::guard('student')->user()->full_name }}">
                        </div>
                        <div class="mt-2">
                            <label for="map" class="col-form-label">แผนที่ตั้งสถานประกอบการ:</label><br>
                            <input type="file" class="form-control" name="map" id="map" accept="image/png, image/jpeg">
                            <label for="" class="text-danger mt-2">* อัปโหลดได้เฉพาะ .png , .jpg</label>
                        </div>

                        <div>
                            <div class="d-flex justify-content-between">
                                <label for="" class="col-form-label">Location (นำ iframe ใน Google Map มาใส่) :</label>
                                <label for="" class="col-form-label text-danger">* วิธีการใส่ iframe <a href="#">คลิกที่นี่</a></label>
                            </div>

                            <input type="text" class="form-control" id="esta" placeholder="<iframe>">

                            <hr>

                            <div class="d-flex ms-4 mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end: form-sv -->
    </main>
</x-app-layout>