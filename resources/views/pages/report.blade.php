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
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">รายงานปฏิบัติงานสหกิจ</h5>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">cccc ccc</span>
                        <img class="navbar-profile-image" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
                </div>

                <!-- start: profile Modal -->
                <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="profileModalLabel">Profile</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex justify-content-center mb-3">
                                    <img class="edit-profile" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="image">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <!-- <button class="btn btn-primary mb-2">Browse</button> -->
                                    <input type="file" id="file" name="file" accept="application/zip,application/x-rar-compressed" required>
                                </div>
                                <form>
                                    <div class="duo">
                                        <div class="me-4 mb-3">
                                            <label for="firstname" class="col-form-label">ชื่อ:</label>
                                            <input type="text" class="form-control" id="firstname" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastname" class="col-form-label">นามสกุล:</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="duo">
                                        <div class="me-4 mb-3">
                                            <label for="personnelid" class="col-form-label">รหัสประจำตัว:</label>
                                            <input type="text" class="form-control" id="personnelid" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="col-form-label">Password:</label>
                                            <input type="text" class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="duo">
                                        <div class="me-4 mb-3">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="phoneno" class="col-form-label">เบอร์โทรศัพท์:</label>
                                            <input type="text" class="form-control" id="phoneno">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: profile Modal -->

                <!-- start: logout Modal -->
                <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="logoutModalLabel">Logout</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ต้องการ Logout ใช่หรือไม่?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Logout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: logout Modal -->
            </nav>
            <!-- end: Navbar -->

            <!-- start: rp card-body -->
            <div class="d-flex justify-content-center">
                <div class="card border-0 shadow-sm mt-4 col-6">
                    <div class="card-body">
                        <form action="upload_rp.php" method="POST" enctype="multipart/form-data">
                            <div class="duo">
                                <label class="col-4" for="esta">ชื่อสถานประกอบการ</label>
                                <input type="text" class="form-control" id="esta" value="#" disabled>
                            </div>
                            <div class="duo mt-3">
                                <label class="col-4 " for="fn-ln">ชื่อ-นามสกุล นักศึกษา</label>
                                <input type="text" class="form-control me-2" id="firstname" value="" disabled>
                                <input type="text" class="form-control" id="lastname" value="" disabled>
                            </div>
                            <label for="esta-phoneno" class="col-form-label col-4 mt-3">รายงานปฏิบัติงานสหกิจ:</label>
                            <div class="form-check form-check-inline col-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">ภาคการศึกษา 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">ภาคการศึกษา 2</label>
                            </div>
                            <div class="mt-3">
                                <label for="images" class="drop-container">
                                    <span class="drop-title">Drop files here</span>
                                    <input type="file" id="file" name="file" accept="application/zip,application/x-rar-compressed" required>
                                </label>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="fw-bold btn btn-primary" name="submit">Upload</button>
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
                            <th>ลำดับ</th>
                            <th>รายงานปฏิบัติงานสหกิจ</th>
                            <th>รอบที่</th>
                            <th>จัดการ</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button class="fw-bold btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบ</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: table card-body -->
        </div>
    </main>
    <!-- end: Main -->

    <!-- start: delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ต้องการ Delete ใช่หรือไม่?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end: delete Modal -->


</x-app-layout>