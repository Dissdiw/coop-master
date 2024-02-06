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
            <li class="sidebar-menu-item">
                <a href="{{ route('student.regis') }}">
                    <i class="ri-user-add-line sidebar-menu-item-icon"></i>
                    สมัครโครงการสหกิจ
                </a>
            </li>
            <li class="sidebar-menu-item active">
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
            <div class="alert alert-success mt-2">
                <ul>
                    <li>{{ Session::get('message') }}</li>
                </ul>
            </div>
            @endif

            <!-- start: rp card-body -->
            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-4 col-6">
                    <div class="card-body">
                        <form action="{{ route('student.report.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="duo">
                                <label class="col-4" for="esta">ชื่อสถานประกอบการ</label>
                                <input type="text" class="form-control" id="esta" value="#" readonly>
                            </div>
                            <div class="duo mt-3">
                                <label class="col-4 " for="fn-ln">ชื่อ-นามสกุล นักศึกษา</label>
                                <input type="text" class="form-control me-2" id="firstname" value="{{ @$data->student->firstname ?? Auth::guard('student')->user()->firstname }}" readonly>
                                <input type="text" class="form-control" id="lastname" value="{{ @$data->student->lastname ?? Auth::guard('student')->user()->lastname }}" readonly>
                            </div>
                            <label for="report" class="col-form-label col-4 mt-3">รายงานปฏิบัติงานสหกิจ:</label>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input" type="radio" name="semester" id="semester1" value="1" required>
                                <label class="form-check-label" for="semester1">ภาคการศึกษา 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="semester" id="semester2" value="2" required>
                                <label class="form-check-label" for="semester2">ภาคการศึกษา 2</label>
                            </div>
                            <div class="mt-3">
                                <label for="report" class="drop-container">
                                    <span class="drop-title">Drop files here</span>
                                    <input type="file" id="report" name="report" accept="application/zip,application/x-rar-compressed" required>
                                </label>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="fw-bold btn btn-primary" type="submit" name="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end: rp card-body -->

            <!-- start: table card-body -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>รายงานปฏิบัติงานสหกิจ</th>
                                <th>ภาคการศึกษา</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $key => $report)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><a href="{{ url('storage/' . $report->report) }}" download>{{$report->report }}</a></td>
                                <td>{{ $report->semester }}</td>
                                <td><button class="fw-bold btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบ</button></td>
                            </tr>
                            <!-- start: delete Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ต้องการ Delete ใช่หรือไม่ ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ url('report/'.$report->id).'/delete' }}" class="btn btn-danger" type="submit">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: delete Modal -->
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: table card-body -->
        </div>
    </main>
    <!-- end: Main -->


</x-app-layout>