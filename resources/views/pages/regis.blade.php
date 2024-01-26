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
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($form_surveys as $key => $form_survey)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $form_survey->company_name }}</td>
                                <td>
                                    @if($form_survey->status == 'wait')
                                    <span class="badge bg-warning">{{ $form_survey->status }}</span>
                                    @elseif($form_survey->status == 'approve')
                                    <span class="badge bg-success">{{ $form_survey->status }}</span>
                                    @else
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
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($form_regis as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->company_name }}</td>
                                <td>
                                    @if($item->status == 'wait')
                                    <span class="badge bg-warning">{{ $item->status }}</span>
                                    @elseif($item->status == 'approve')
                                    <span class="badge bg-success">{{ $item->status }}</span>
                                    @else
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