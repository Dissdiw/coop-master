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
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">สถานประกอบการ</h5>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">ccc ccc</span>
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

            <!-- start: card-body -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered" id="estaTable">
                        <thead>
                            <th>ลำดับ</th>
                            <th>สถานประกอบการ</th>
                            <th>ที่อยู่สถานประกอบการ</th>
                            <th>ค่าตอบแทน</th>
                            <th>รายละเอียด</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="col-6"></td>
                                <td></td>
                                <td>
                                    <button class="fw-bold btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">รายละเอียด</button>
                                </td>

                                <!-- start: detail Modal -->
                                <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="detailModalLabel">รายละเอียด</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex justify-content-center mb-3">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.331165951846!2d100.51171287480611!3d13.819142195731423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b877800c9af%3A0xd754c571fc7177b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4Lie4Lij4Liw4LiZ4LiE4Lij4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1692517936607!5m2!1sth!2sth" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                                <form>
                                                    <div class="mb-2">
                                                        <label for="esta" class="col-form-label">สถานประกอบการ:</label>
                                                        <input type="text" class="form-control" id="esta" value="" disabled>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="esta-address" class="col-form-label">ที่อยู่สถานประกอบการ:</label>
                                                        <textarea class="form-control" id="esta-address" disabled></textarea>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="esta-phoneno" class="col-form-label">เบอร์โทรศัพท์:</label>
                                                        <input type="text" class="form-control" id="esta-phoneno" value="" disabled>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="esta-phoneno" class="col-form-label">ค่าตอบแทน:</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pay" id="" value="มี" disabled>
                                                            <label class="form-check-label" for="inlineRadio1">มี</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pay" id="" value="ไม่มี" disabled>
                                                            <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
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
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: card-body -->

        </div>
    </main>
    <!-- end: Main -->

</x-app-layout>