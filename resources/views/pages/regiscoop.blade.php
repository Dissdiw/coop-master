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
            <form>
                <div class="d-flex justify-content-center">
                    <div class="card border-0 shadow-sm mt-3 col-10">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label">ชื่อสถานประกอบการที่ต้องการสมัคร:</label>
                                    <input type="text" class="form-control" id="esta" value="" disabled>
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label">สมัครงานในตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="postition">
                                </div>
                            </div>
                            <label for="" class="col-form-label mt-2">ระยะเวลาปฏิบัติงานสหกิจศึกษา (อย่างน้อย 10 เดือน):</label>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="" class="col-form-label">จาก</label>
                                    <input type="date" class="form-control" id="">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label">ถึง</label>
                                    <input type="date" class="form-control" id="">
                                </div>
                            </div>
                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ข้อมูลส่วนตัวนักศึกษา</h6>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label">ชื่อ (ภาษาไทย):</label>
                                    <input type="text" class="form-control" id="firstname" value="#" disabled>
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label">นามสกุล:</label>
                                    <input type="text" class="form-control" id="lastname" value="#" disabled>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label mt-2">ชื่อ (ภาษาอังกฤษ):</label>
                                    <input type="text" class="form-control" id="firstnameeng" disabled>
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">นามสกุล:</label>
                                    <input type="text" class="form-control" id="lastnameeng" disabled>
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="esta-phoneno" class="col-form-label">เพศ:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexRadioOptions" id="sexRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">ชาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexRadioOptions" id="sexRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">หญิง</label>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label ">วัน เดือน ปีเกิด:</label>
                                    <input type="date" class="form-control" id="dateofbirth">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label ">อายุ:</label>
                                    <input type="text" class="form-control" id="age">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label ">น้ำหนัก:</label>
                                    <input type="text" class="form-control" id="weight">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label">ส่วนสูง:</label>
                                    <input type="text" class="form-control" id="height">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label mt-2">บัตรประจำตัวประชาชนเลขที่:</label>
                                    <input type="text" class="form-control" id="idcardno">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">ออกให้ ณ:</label>
                                    <input type="text" class="form-control" id="placeofissue">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">วันหมดอายุ:</label>
                                    <input type="text" class="form-control" id="duedate">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label mt-2">เชื้อชาติ:</label>
                                    <input type="text" class="form-control" id="Race">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="Nationality">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">ศาสนา:</label>
                                    <input type="text" class="form-control" id="Religion">
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="" class="col-form-label">ที่อยู่ปัจจุบัน:</label>
                                <textarea name="" id="presentaddress" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label mt-2">โทรศัพท์:</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">โทรศัพท์เคลื่อนที่:</label>
                                    <input type="text" class="form-control" id="mobilephone">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">อีเมล์:</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="" class="col-form-label">ที่อยู่ตามทะเบียนบ้าน:</label>
                                <textarea name="" id="permanentaddress" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label for="name" class="col-form-label mt-2">โทรศัพท์:</label>
                                <input type="text" class="form-control" id="permanentphone">
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="name" class="col-form-label mt-2">บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน:</label>
                                    <input type="text" class="form-control" id="emergencycontact">
                                </div>
                                <div class="col">
                                    <label for="" class="col-form-label mt-2">โทรศัพท์:</label>
                                    <input type="text" class="form-control" id="emergencyphone">
                                </div>
                            </div>


                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ข้อมูลครอบครัว</h6>
                            <div class="row g-3">
                                <div class="col">
                                    <label class="col-form-label mt-2">ชื่อ-สกุลบิดา:</label>
                                    <input type="text" class="form-control" id="fathername">
                                </div>
                                <div class="col">
                                    <label class="col-form-label mt-2">อาชีพ:</label>
                                    <input type="text" class="form-control" id="fatheroccupation">
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="" class="col-form-label">สถานที่ทำงาน:</label>
                                <textarea name="" id="fatherplaceofwork" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label for="name" class="col-form-label mt-2">โทรศัพท์:</label>
                                <input type="text" class="form-control" id="fatherplaceofworkphone">
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label class="col-form-label mt-2">ชื่อ-สกุลมารดา:</label>
                                    <input type="text" class="form-control" id="mothername">
                                </div>
                                <div class="col">
                                    <label class="col-form-label mt-2">อาชีพ:</label>
                                    <input type="text" class="form-control" id="motheroccupation">
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="" class="col-form-label">สถานที่ทำงาน:</label>
                                <textarea name="" id="motherplaceofwork" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label for="name" class="col-form-label mt-2">โทรศัพท์:</label>
                                <input type="text" class="form-control" id="motherplaceofworkphone">
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label class="col-form-label mt-2">จำนวนพี่น้อง:</label>
                                    <input type="text" class="form-control" id="noofsiblings">
                                </div>
                                <div class="col">
                                    <label class="col-form-label mt-2">เป็นบุตรคนที่:</label>
                                    <input type="text" class="form-control" id="son">
                                </div>
                            </div>


                            <h6 class="fw-bold mt-4 d-flex justify-content-center">การศึกษา</h6>
                            <h6 class="mt-2">กำลังศึกษาในภาควิชาการจัดการเทคโนโลยีการผลิตและสารสนเทศ</h6>
                            <h6 class="mt-2">Department of Information and Product Technology Management</h6>
                            <h6 class="mt-4">วิทยาลัยเทคโนโลยีอุตสาหกรรม มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</h6>
                            <h6 class="mt-2">College of Industrial Technology King Mongkut's University of Technology North Bangkok</h6>
                            <div class="col">
                                <label class="col-form-label mt-2">ผลการเรียนสะสม:</label>
                                <input type="text" class="form-control" id="GPA">
                            </div>
                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ประวัติการศึกษา</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-2">ระดับ</th>
                                        <th>สถานศึกษา</th>
                                        <th>ปีที่เริ่ม</th>
                                        <th>ปีที่จบ</th>
                                        <th>วุฒิการศึกษา</th>
                                        <th>วิชาเอก</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>มัธยมต้น</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>มัธยมปลาย</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>อนุปริญญา</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th>ปริญญา</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ประวัติการฝึกอบรม</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>หัวข้อฝึกอบรม</th>
                                        <th>หน่วยงานที่ให้การอบรม</th>
                                        <th>ช่วงเวลาที่ฝึกอบรม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>


                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ประสบการณ์การปฏิบัติงานและกิจกรรมนักศึกษา</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ช่วงเวลา</th>
                                        <th>องค์กร/กิจกรรม</th>
                                        <th>ความรับผิดชอบ</th>
                                        <th>หมายเหตุ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ความสามารถทางภาษา</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ภาษา Language</th>
                                        <th>พูด (Speaking)</th>
                                        <th>ฟัง (Listening)</th>
                                        <th>อ่าน (Reading)</th>
                                        <th>เขียน (Writing)</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>อังกฤษ English</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enspeak" id="goodenspeak" value="goodenspeak">
                                                <label class="form-check-label" for="goodenspeak">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enspeak" id="fairenspeak" value="fairenspeak">
                                                <label class="form-check-label" for="fairenspeak">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enspeak" id="poorenspeak" value="poorenspeak">
                                                <label class="form-check-label" for="poorenspeak">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enlisten" id="goodenlisten" value="goodenlisten">
                                                <label class="form-check-label" for="goodenlisten">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enlisten" id="fairenlisten" value="fairenlisten">
                                                <label class="form-check-label" for="fairenlisten">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enlisten" id="poorenlisten" value="poorenlisten">
                                                <label class="form-check-label" for="poorenlisten">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enread" id="goodenread" value="goodenread">
                                                <label class="form-check-label" for="goodenread">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enread" id="fairenread" value="fairenread">
                                                <label class="form-check-label" for="fairenread">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enread" id="poorenread" value="poorenread">
                                                <label class="form-check-label" for="poorenread">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enwrite" id="goodenwrite" value="goodenwrite">
                                                <label class="form-check-label" for="goodenwrite">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enwrite" id="fairenwrite" value="fairenwrite">
                                                <label class="form-check-label" for="fairenwrite">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enwrite" id="poorenwrite" value="poorenwrite">
                                                <label class="form-check-label" for="poorenwrite">Poor</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>จีน Chinese</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnspeak" id="goodcnspeak" value="goodcnspeak">
                                                <label class="form-check-label" for="goodcnspeak">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnspeak" id="faircnspeak" value="faircnspeak">
                                                <label class="form-check-label" for="faircnspeak">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnspeak" id="poorcnspeak" value="poorcnspeak">
                                                <label class="form-check-label" for="poorcnspeak">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnlisten" id="goodcnlisten" value="goodcnlisten">
                                                <label class="form-check-label" for="goodcnlisten">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnlisten" id="faircnlisten" value="faircnlisten">
                                                <label class="form-check-label" for="faircnlisten">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnlisten" id="poorcnlisten" value="poorcnlisten">
                                                <label class="form-check-label" for="poorcnlisten">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnread" id="goodcnread" value="goodcnread">
                                                <label class="form-check-label" for="goodcnread">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnread" id="faircnread" value="faircnread">
                                                <label class="form-check-label" for="faircnread">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnread" id="poorcnread" value="poorcnread">
                                                <label class="form-check-label" for="poorcnread">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnwrite" id="goodcnwrite" value="goodcnwrite">
                                                <label class="form-check-label" for="goodcnwrite">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnwrite" id="faircnwrite" value="faircnwrite">
                                                <label class="form-check-label" for="faircnwrite">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnwrite" id="poorcnwrite" value="poorcnwrite">
                                                <label class="form-check-label" for="poorcnwrite">Poor</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>อื่นๆ Other</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otspeak" id="goodotspeak" value="goodotspeak">
                                                <label class="form-check-label" for="goodotspeak">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otspeak" id="fairotspeak" value="fairotspeak">
                                                <label class="form-check-label" for="fairotspeak">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otspeak" id="poorotspeak" value="poorotspeak">
                                                <label class="form-check-label" for="poorotspeak">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otlisten" id="goodotlisten" value="goodotlisten">
                                                <label class="form-check-label" for="goodotlisten">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otlisten" id="fairotlisten" value="fairotlisten">
                                                <label class="form-check-label" for="fairotlisten">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otlisten" id="poorotlisten" value="poorotlisten">
                                                <label class="form-check-label" for="poorotlisten">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otread" id="goodotread" value="goodotread">
                                                <label class="form-check-label" for="goodotread">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otread" id="fairotread" value="fairotread">
                                                <label class="form-check-label" for="fairotread">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otread" id="poorotread" value="poorotread">
                                                <label class="form-check-label" for="poorotread">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otwrite" id="goodotwrite" value="goodotwrite">
                                                <label class="form-check-label" for="goodotwrite">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otwrite" id="fairotwrite" value="fairotwrite">
                                                <label class="form-check-label" for="fairotwrite">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otwrite" id="poorotwrite" value="poorotwrite">
                                                <label class="form-check-label" for="poorotwrite">Poor</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h6 class="fw-bold mt-4 d-flex justify-content-center">ความสามารถพิเศษ</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Word</th>
                                        <th>Excel</th>
                                        <th>Powerpoint</th>
                                        <th>Internet</th>
                                        <th>Database</th>
                                        <th>อื่นๆ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>อังกฤษ English</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enspeak" id="goodenspeak" value="goodenspeak">
                                                <label class="form-check-label" for="goodenspeak">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enspeak" id="fairenspeak" value="fairenspeak">
                                                <label class="form-check-label" for="fairenspeak">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enspeak" id="poorenspeak" value="poorenspeak">
                                                <label class="form-check-label" for="poorenspeak">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enlisten" id="goodenlisten" value="goodenlisten">
                                                <label class="form-check-label" for="goodenlisten">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enlisten" id="fairenlisten" value="fairenlisten">
                                                <label class="form-check-label" for="fairenlisten">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enlisten" id="poorenlisten" value="poorenlisten">
                                                <label class="form-check-label" for="poorenlisten">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enread" id="goodenread" value="goodenread">
                                                <label class="form-check-label" for="goodenread">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enread" id="fairenread" value="fairenread">
                                                <label class="form-check-label" for="fairenread">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enread" id="poorenread" value="poorenread">
                                                <label class="form-check-label" for="poorenread">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enwrite" id="goodenwrite" value="goodenwrite">
                                                <label class="form-check-label" for="goodenwrite">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enwrite" id="fairenwrite" value="fairenwrite">
                                                <label class="form-check-label" for="fairenwrite">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="enwrite" id="poorenwrite" value="poorenwrite">
                                                <label class="form-check-label" for="poorenwrite">Poor</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>จีน Chinese</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnspeak" id="goodcnspeak" value="goodcnspeak">
                                                <label class="form-check-label" for="goodcnspeak">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnspeak" id="faircnspeak" value="faircnspeak">
                                                <label class="form-check-label" for="faircnspeak">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnspeak" id="poorcnspeak" value="poorcnspeak">
                                                <label class="form-check-label" for="poorcnspeak">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnlisten" id="goodcnlisten" value="goodcnlisten">
                                                <label class="form-check-label" for="goodcnlisten">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnlisten" id="faircnlisten" value="faircnlisten">
                                                <label class="form-check-label" for="faircnlisten">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnlisten" id="poorcnlisten" value="poorcnlisten">
                                                <label class="form-check-label" for="poorcnlisten">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnread" id="goodcnread" value="goodcnread">
                                                <label class="form-check-label" for="goodcnread">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnread" id="faircnread" value="faircnread">
                                                <label class="form-check-label" for="faircnread">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnread" id="poorcnread" value="poorcnread">
                                                <label class="form-check-label" for="poorcnread">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnwrite" id="goodcnwrite" value="goodcnwrite">
                                                <label class="form-check-label" for="goodcnwrite">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnwrite" id="faircnwrite" value="faircnwrite">
                                                <label class="form-check-label" for="faircnwrite">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cnwrite" id="poorcnwrite" value="poorcnwrite">
                                                <label class="form-check-label" for="poorcnwrite">Poor</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>อื่นๆ Other</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otspeak" id="goodotspeak" value="goodotspeak">
                                                <label class="form-check-label" for="goodotspeak">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otspeak" id="fairotspeak" value="fairotspeak">
                                                <label class="form-check-label" for="fairotspeak">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otspeak" id="poorotspeak" value="poorotspeak">
                                                <label class="form-check-label" for="poorotspeak">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otlisten" id="goodotlisten" value="goodotlisten">
                                                <label class="form-check-label" for="goodotlisten">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otlisten" id="fairotlisten" value="fairotlisten">
                                                <label class="form-check-label" for="fairotlisten">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otlisten" id="poorotlisten" value="poorotlisten">
                                                <label class="form-check-label" for="poorotlisten">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otread" id="goodotread" value="goodotread">
                                                <label class="form-check-label" for="goodotread">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otread" id="fairotread" value="fairotread">
                                                <label class="form-check-label" for="fairotread">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otread" id="poorotread" value="poorotread">
                                                <label class="form-check-label" for="poorotread">Poor</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otwrite" id="goodotwrite" value="goodotwrite">
                                                <label class="form-check-label" for="goodotwrite">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otwrite" id="fairotwrite" value="fairotwrite">
                                                <label class="form-check-label" for="fairotwrite">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otwrite" id="poorotwrite" value="poorotwrite">
                                                <label class="form-check-label" for="poorotwrite">Poor</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-between">
                                <label for="" class="col-form-label">Location (นำ iframe ใน Google Map มาใส่) :</label>
                                <label for="" class="col-form-label text-danger">* วิธีการใส่ iframe <a href="#">คลิกที่นี่</a></label>
                            </div>
                            <input type="text" class="form-control" id="esta" placeholder="<iframe>">
                            <div class="d-flex justify-content-center mt-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.331165951846!2d100.51171287480611!3d13.819142195731423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b877800c9af%3A0xd754c571fc7177b!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4Lie4Lij4Liw4LiZ4LiE4Lij4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1692607975929!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <hr>

                            <div class="d-flex ms-4 mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end: form-sv -->
        </div>
    </main>
</x-app-layout>