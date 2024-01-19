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
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">สมัครโครงการสหกิจ</h5>
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
        </div>


        <form>
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
                                <input type="text" class="form-control" id="name" value="" disabled>
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label">รหัสประจำตัว:</label>
                                <input type="text" class="form-control" id="esta" value="" disabled>
                                <input type="hidden" name="studentid" value="">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label">ที่พักขณะปฏิบัติงาน:</label>
                            <textarea name="rest" id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label">สถานประกอบการ:</label>
                            <input type="text" name="estra" class="form-control" id="esta" oninput="this.className = 'form-control'">
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label">ที่อยู่:</label>
                            <textarea name="location" id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label">ประเภทกิจการ / ธุรกิจ / ผลิตภัณฑ์:</label>
                            <input type="text" name="type" class="form-control" id="esta" oninput="this.className = 'form-control'">
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="" class="col-form-label mt-2">จำนวนพนักงานรวม:</label>
                                <input type="text" name="employee_no" class="form-control" id="" oninput="this.className = 'form-control'">
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label mt-2">จำนวนวันในการทำงานต่อสัปดาห์:</label>
                                <input type="text" name="std_work_date" class="form-control" id="" oninput="this.className = 'form-control'">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="" class="col-form-label mt-2">จำนวนชั่วโมงการทำงาน:</label>
                                <div class="input-group">
                                    <input type="text" name="std_work_hour" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" oninput="this.className = 'form-control'">
                                    <span class="input-group-text" id="basic-addon2">ชั่วโมง/สัปดาห์</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label mt-2">วัน:</label>
                                <input type="date" name="start_date" class="form-control" id="" oninput="this.className = 'form-control'">
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label mt-2">ถึง:</label>
                                <input type="date" name="end_date" class="form-control" id="" oninput="this.className = 'form-control'">
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label">ตำแหน่งงานที่นักศึกษาปฏิบัติ:</label>
                            <input type="text" name="position" class="form-control" id="" oninput="this.className = 'form-control'">
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label">ลักษณะงานที่นักศึกษาปฏิบัติ:</label>
                            <textarea name="job_des" id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="" class="col-form-label mt-2">ชื่อพี่เลี้ยงที่สถานประกอบการจัดให้ดูแลนักศึกษา:</label>
                                <input type="text" name="mentor_name" class="form-control" id="" oninput="this.className = 'form-control'">
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label mt-2">เบอร์โทรศัพท์:</label>
                                <input type="text" name="mentor_phone" class="form-control" id="" oninput="this.className = 'form-control'">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="" class="col-form-label mt-2">ตำแหน่งพี่เลี้ยง:</label>
                                <input type="text" name="mentor_position" class="form-control" id="">
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label mt-2">จำนวนนักศึกษาที่พี่เลี้ยงรับผิดชอบ:</label>
                                <input type="text" name="mentor_std_no" class="form-control" id="">
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
                        <label for="" class="col-form-label">ค่าตอบแทน:</label>
                        <div class="input-group">
                            <input type="text" class="form-control income" aria-label="Text input with dropdown button" name="income" oninput="this.className = 'form-control'">
                            <div class="input-group-append">
                                <select class="form-select" name="income_type" required>
                                    <option selected disabled>เลือก</option>
                                    <option value="บาท/วัน">บาท/วัน</option>
                                    <option value="บาท/เดือน">บาท/เดือน</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="esta-phoneno" class="col-form-label">ที่พัก:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rest_choice" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย</label>
                            </div><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="rest_choice" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio1">สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย จำนวน:</label>
                            </div>
                            <div class="input-group">
                                <input type="text" name="rest_payment_est" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" oninput="this.className = 'form-control'">
                                <span class="input-group-text" id="basic-addon2">บาท/เดือน</span>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="rest_choice" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio1">นักศึกษารับผิดชอบค่าใช้จ่ายเอง:</label>
                            </div>
                            <div class="input-group">
                                <input type="text" name="rest_payment_std" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" oninput="this.className = 'form-control'">
                                <span class="input-group-text" id="basic-addon2">บาท/เดือน</span>
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="esta-phoneno" class="col-form-label">รถรับส่งไป-กลับระหว่างสถานประกอบการ ที่พัก หรือชุมชนใกล้เคียง:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bus" id="bus1" value="1">
                                <label class="form-check-label" for="inlineRadio1">มี</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bus" id="bus2" value="2">
                                <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="" class="col-form-label">สวัสดิการอื่น ๆ (ระบุ เช่น อาหาร ชุดทำงาน ประกันอุบัติเหตุ ฯลฯ):</label>
                            <textarea name="benefit" id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>

                        <div class="mt-2">
                            <label for="image" class="col-form-label">ภาพถ่ายสถานประกอบการจำนวน 4 ภาพ:</label><br>
                            <input type="file" class="form-control" id="image" name="images" multiple accept="image/png, image/jpeg" required>
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
    </main>
</x-app-layout>