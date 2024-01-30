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

            @if(Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ Session::get('message') }}</li>
                </ul>
            </div>
            @endif

            <!-- start: sv card-body -->
            <a href="{{  route('student.regissv') }}" class="fw-bold btn btn-primary mt-4">สร้างแบบสำรวจ</a>
            <div class="card border-0 shadow-sm mt-2">
                <div class="card-body">
                    <h5 class="fw-bold">แบบสำรวจสหกิจ</h5>
                    <table class="table table-bordered" id="svTable">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>สถานประกอบการ</th>
                                <th>ดาวน์โหลด</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($form_surveys as $key => $form_survey)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $form_survey->company_name }}</td>
                                <td>
                                    <button class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0" />
                                        </svg>
                                        Download
                                    </button>
                                </td>
                                <td>
                                    @if($form_survey->status == 'wait')
                                    <span class="badge bg-warning">{{ $form_survey->status }}</span>
                                    @elseif($form_survey->status == 'approve')
                                    <span class="badge bg-success">{{ $form_survey->status }}</span>
                                    @else($form_survey->status == 'not approve')
                                    <span class="badge bg-danger">{{ $form_survey->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: sv card-body -->

            <!-- start: regis card-body -->
            <a href="{{ route('student.regiscoop') }}" class="fw-bold btn btn-primary mt-4">สร้างใบสมัคร</a>
            <div class="card border-0 shadow-sm mt-2">
                <div class="card-body">
                    <h5 class="fw-bold">แบบสมัครสหกิจ</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>สถานประกอบการ</th>
                                <th>ดาวน์โหลด</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($form_regis as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->company_name }}</td>
                                <td>
                                    <button class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0" />
                                        </svg>
                                        Download
                                    </button>
                                </td>
                                <td>
                                    @if($item->status == 'wait')
                                    <span class="badge bg-warning">{{ $item->status }}</span>
                                    @elseif($item->status == 'approve')
                                    <span class="badge bg-success">{{ $item->status }}</span>
                                    @else($form_survey->status == 'not approve')
                                    <span class="badge bg-danger">{{ $item->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: regis card-body -->
        </div>
    </main>
    <!-- end: Main -->

    </main>
</x-app-layout>