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

        @if(Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{{ Session::get('message') }}</li>
            </ul>
        </div>
        @endif

        <form action="{{ route('student.regissv.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ @$data->id ?? '' }}">

            <!-- start: form-sv -->
            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body">
                        <h5 class="fw-bold">ส่วนที่ 1: ข้อมูลพื้นฐาน</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-3 col-10">
                    <div class="card-body">

                        <div class="row g-3">
                            <div class="col">
                                <label for="name" class="col-form-label">ชื่อ-นามสกุล:</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ Auth::guard('student')->user()->full_name }}" readonly>
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label">รหัสประจำตัว:</label>
                                <input type="text" class="form-control" id="" value="{{ Auth::guard('student')->user()->student_code }}" readonly>
                                <input type="hidden" name="studentid" value="">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="rest" class="col-form-label">ที่พักขณะปฏิบัติงาน:</label>
                            <textarea name="rest" id="rest" class="form-control" cols="30" rows="3">{{ $data->rest ?? '' }}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="company_name" class="col-form-label">สถานประกอบการ:</label>
                            <input type="text" name="company_name" class="form-control" id="company_name" value="{{ $data->company_name ?? old('company_name') }}">
                        </div>
                        <div class="mt-2">
                            <label for="address" class="col-form-label">ที่อยู่:</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="3">{{ $data->address ?? old('address') }}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="type" class="col-form-label">ประเภทกิจการ / ธุรกิจ / ผลิตภัณฑ์:</label>
                            <textarea name="type" id="type" class="form-control" cols="30" rows="3">{{ $data->type ?? old('type') }}</textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="employee_ammount" class="col-form-label mt-2">จำนวนพนักงานรวม:</label>
                                <input type="number" name="employee_ammount" class="form-control" id="employee_ammount" value="{{ $data->employee_ammount ?? old('employee_ammount') }}">
                            </div>
                            <div class="col">
                                <label for="week_ammount" class="col-form-label mt-2">จำนวนวันในการทำงานต่อสัปดาห์:</label>
                                <input type="number" name="week_ammount" class="form-control" id="week_ammount" value="{{ $data->week_ammount ?? old('week_ammount') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="working_ammount" class="col-form-label mt-2">จำนวนชั่วโมงการทำงาน:</label>
                                <div class="input-group">
                                    <input type="number" name="working_ammount" id="working_ammount" class="form-control" value="{{ $data->working_ammount ?? old('working_ammount') }}">
                                    <span class="input-group-text" id="basic-addon2">ชั่วโมง/สัปดาห์</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="day_start" class="col-form-label mt-2">วัน:</label>
                                <input type="text" name="day_start" class="form-control" id="day_start" value="{{ $data->day_start ?? old('day_start') }}">
                            </div>
                            <div class="col">
                                <label for="day_end" class="col-form-label mt-2">ถึง:</label>
                                <input type="text" name="day_end" class="form-control" id="day_end" value="{{ $data->day_end ?? old('day_end') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="job_position" class="col-form-label">ตำแหน่งงานที่นักศึกษาปฏิบัติ:</label>
                            <input type="text" name="job_position" class="form-control" id="job_position" value="{{ $data->job_position ?? old('job_position') }}">
                        </div>
                        <div class="mt-2">
                            <label for="job_description" class="col-form-label">ลักษณะงานที่นักศึกษาปฏิบัติ:</label>
                            <textarea name="job_description" id="job_description" class="form-control" cols="30" rows="3">{{ $data->job_description ?? old('job_description') }}</textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="mentor_name" class="col-form-label mt-2">ชื่อพี่เลี้ยงที่สถานประกอบการจัดให้ดูแลนักศึกษา:</label>
                                <input type="text" name="mentor_name" class="form-control" id="mentor_name" value="{{ $data->mentor_name ?? old('mentor_name') }}">
                            </div>
                            <div class="col">
                                <label for="mentor_phone" class="col-form-label mt-2">เบอร์โทรศัพท์:</label>
                                <input type="text" name="mentor_phone" class="form-control" id="mentor_phone" value="{{ $data->mentor_phone ?? old('mentor_phone') }}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="mentor_position" class="col-form-label mt-2">ตำแหน่งพี่เลี้ยง:</label>
                                <input type="text" class="form-control" name="mentor_position" id="mentor_position" value="{{ $data->mentor_position ?? old('mentor_position') }}">
                            </div>
                            <div class="col">
                                <label for="number_care" class="col-form-label mt-2">จำนวนนักศึกษาที่พี่เลี้ยงรับผิดชอบ:</label>
                                <input type="number" name="number_care" class="form-control" id="number_care" value="{{ $data->number_care ?? old('number_care') }}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body">
                        <h5 class="fw-bold">ส่วนที่ 2: สวัสดิการที่ได้รับจากสถานประกอบการ</h5>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-3 mb-4 col-10">
                    <div class="card-body">
                        <label for="salary" class="col-form-label">ค่าตอบแทน:</label>
                        <div class="input-group">
                            <input type="number" class="form-control income" aria-label="Text input with dropdown button" name="salary" value="{{ $data->salary ?? old('salary') }}">
                            <div class="input-group-append">
                                <select class="form-select" name="salary_type" required>
                                    <option>เลือก</option>
                                    <option value="day" {{ @$data->salary_type=='day' ? 'selected' : '' }}>บาท/วัน</option>
                                    <option value="month" {{ @$data->salary_type=='month' ? 'selected' : '' }}>บาท/เดือน</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="rest_option" class="col-form-label">ที่พัก:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rest_option" id="inlineRadio1" value="สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย" {{ @$data->rest_option == 'สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย</label>
                            </div><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="rest_option" id="inlineRadio2" value="สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย" {{ @$data->rest_option == 'สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย จำนวน:</label>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="rest_option" id="inlineRadio3" value="นักศึกษารับผิดชอบค่าใช้จ่ายเอง" {{ @$data->rest_option == 'นักศึกษารับผิดชอบค่าใช้จ่ายเอง' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">นักศึกษารับผิดชอบค่าใช้จ่ายเอง:</label>
                            </div>
                            <div class="input-group">
                                <input type="munber" class="form-control" name="rent_ammount" id="rent_ammount" value="{{ $data->rent_ammount ?? old('rent_ammount') }}">
                                <span class="input-group-text" id="rent_ammount">บาท/เดือน</span>
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="is_shuttle" class="col-form-label">รถรับส่งไป-กลับระหว่างสถานประกอบการ ที่พัก หรือชุมชนใกล้เคียง:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_shuttle" id="bus1" value="1" {{ @$data->is_shuttle == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">มี</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_shuttle" id="bus2" value="0" {{ @$data->is_shuttle == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="benefit" class="col-form-label">สวัสดิการอื่น ๆ (ระบุ เช่น อาหาร ชุดทำงาน ประกันอุบัติเหตุ ฯลฯ):</label>
                            <textarea name="benefit" id="benefit" class="form-control" cols="30" rows="3">{{ @$data->benefit ?? old('benefit') }}</textarea>
                        </div>

                        <div class="mt-2">
                            <label for="gallery" class="col-form-label">ภาพถ่ายสถานประกอบการจำนวน 4 ภาพ:</label><br>
                       
                            @if(!empty(@$data->gallery))
                            <div class="flex">
                                
                                @foreach(@$data->gallery as $key => $gallery)
                                <div class="flex">
                                    <img width="150" src="{{ Storage::url($gallery) }}" alt="">
                                    <button type="button" data-bs-whatever="{{ $gallery }}" data-bs-key="{{ $key }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                        </svg>
                                    </button>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            <input type="file" class="form-control" id="gallery" name="gallery[]" multiple accept="image/png, image/jpeg">
                            <label for="" class="text-danger mt-2">* อัปโหลดได้เฉพาะ .png , .jpg</label>
                        </div>

                    </div>

                    <hr>

                    <div class="d-flex ms-4 mb-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- end: form-sv -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('student.delete.image') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm to delete image</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="recipient-name" name="name">
                            <input type="hidden" class="form-control" name="model" value="App\Models\FormSurvey">
                            <input type="hidden" class="form-control" name="column" value="gallery">
                            <input type="hidden" class="form-control" name="multi" value="1">
                            <input type="hidden" class="form-control" name="key" id="key">
                            <input type="hidden" class="form-control" name="id" value="{{ @$data->id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" id="delete">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>

    @push('js')
    <script>
        var exampleModal = document.getElementById('exampleModal')
    
        exampleModal.addEventListener('show.bs.modal', function(event) {

            var button = event.relatedTarget

            var recipient = button.getAttribute('data-bs-whatever')             

            var key = button.getAttribute('data-bs-key')

            var modalBodyInput = exampleModal.querySelector('.modal-body input')

            var attr_key = document.getElementById('key')

            // var modalTitle = exampleModal.querySelector('.modal-body')

            // modalTitle.textContent = 'image name: ' + recipient
            modalBodyInput.value = recipient
            attr_key.value = key

        })
    </script>
    @endpush
</x-app-layout>