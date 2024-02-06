<x-app-layout>
    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            @if(Session::has('message'))
            <div class="alert alert-success mt-2">
                <ul>
                    <li>{{ Session::get('message') }}</li>
                </ul>
            </div>
            @endif

            <!-- start: sv card-body -->
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

                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0" />
                                        </svg>
                                        Download
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: sv card-body -->

            <!-- start: regis card-body -->
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0" />
                                        </svg>
                                        Download
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: regis card-body -->
        </div>
    </main>
    <!-- end: Main -->
</x-app-layout>