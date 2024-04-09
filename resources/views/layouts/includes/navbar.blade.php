            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">ขั้นตอนสหกิจศึกษา</h5>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">{{ Auth::guard('student')->user()->full_name }}</span>
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
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img class="edit-profile" src="{{ @$data->student->image ?? Auth::guard('student')->user()->image }}" alt="image">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input type="file" id="profile" name="profile" accept="">
                                    </div>
                                    <div class="duo">
                                        <div class="me-4 mb-3">
                                            <label for="firstname" class="col-form-label">ชื่อ:</label>
                                            <input type="text" class="form-control" id="firstname" value="{{ @$data->student->firstname ?? Auth::guard('student')->user()->firstname }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastname" class="col-form-label">นามสกุล:</label>
                                            <input type="text" class="form-control" id="lastname" value="{{ @$data->student->lastname ?? Auth::guard('student')->user()->lastname }}">
                                        </div>
                                    </div>
                                    <div class="duo">
                                        <div class="me-4 mb-3">
                                            <label for="student_code" class="col-form-label">รหัสประจำตัว:</label>
                                            <input type="text" class="form-control" name="student_code" id="student_code" value="{{ @$data->student->student_code ?? Auth::guard('student')->user()->student_code }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="col-form-label">Password:</label>
                                            <input type="text" class="form-control" name="password" id="password" value="">
                                        </div>
                                    </div>
                                    <div class="duo">
                                        <div class="me-4 mb-3">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" name="email" id="email" value="{{ @$data->student->email ?? Auth::guard('student')->user()->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="col-form-label">เบอร์โทรศัพท์:</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="{{ @$data->student->phone ?? Auth::guard('student')->user()->phone }}">
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
                                <form action="{{ route('student.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: logout Modal -->
            </nav>
            <!-- end: Navbar -->