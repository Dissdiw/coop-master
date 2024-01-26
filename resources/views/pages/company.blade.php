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
            <li class="sidebar-menu-item active">
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

            <!-- start: card-body -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered" id="estaTable">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>สถานประกอบการ</th>
                                <th>ที่อยู่สถานประกอบการ</th>
                                <th>ค่าตอบแทน</th>
                                <th>รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $key => $company)

                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $company->name }}</td>
                                <td class="col-6">{{ $company->address }}</td>
                                <td>{{ $company->is_allowance ? "มี" : "ไม่มี"}}</td>
                                <td>
                                    <button class="fw-bold btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal{{ $company->id }}">รายละเอียด</button>
                                </td>

                                <!-- start: detail Modal -->
                                <div class="modal fade" id="detailModal{{ $company->id }}" tabindex="-1" aria-labelledby="detailModal{{ $company->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="detailModal{{ $company->id }}">รายละเอียด</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex justify-content-center mb-3">
                                                    {!! $company->location !!}
                                                </div>
                                                <form>
                                                    <div class="mb-2">
                                                        <label for="esta" class="col-form-label">สถานประกอบการ:</label>
                                                        <input type="text" class="form-control" id="esta" value="{{ $company->name }}" disabled>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="esta-address" class="col-form-label">ที่อยู่สถานประกอบการ:</label>
                                                        <textarea class="form-control" id="esta-address" disabled>{!! $company->address !!}</textarea>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="esta-phoneno" class="col-form-label">เบอร์โทรศัพท์:</label>
                                                        <input type="text" class="form-control" id="esta-phoneno" value="{{ $company->contact }}" disabled>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="esta-phoneno" class="col-form-label">ค่าตอบแทน:</label>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label" for="inlineRadio1">{{ $company->is_allowance ? "มี" : "ไม่มี"}}</label>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: detail Modal -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: card-body -->

        </div>
    </main>
    <!-- end: Main -->
    @push('js')
    <script>
        $('#estaTable').DataTable({
            "pageLength": 50
        });
    </script>
    @endpush



</x-app-layout>