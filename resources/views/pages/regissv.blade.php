<x-app-layout>
    <main class="bg-light">
        <div class="p-2">
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

        </div>
        <!-- end: form-sv -->
    </main>
</x-app-layout>