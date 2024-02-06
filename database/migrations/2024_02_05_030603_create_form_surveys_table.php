<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_surveys', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
	    $table->integer('year');
            $table->longText('rest')->nullable()->comment('ที่พัก');
            $table->string('company_name')->nullable()->comment('ชื่อสถานประกอบการ');
            $table->longText('address')->nullable()->comment('ที่อยู่');
            $table->text('type')->nullable()->comment('ประเภท');
            $table->integer('employee_ammount')->nullable()->comment('จำนวนพนักงาน');
            $table->integer('week_ammount')->nullable()->comment('จำนวนวันทำงานต่อสัปดาห์');
            $table->integer('working_ammount')->nullable()->comment('จำนวนชั่วโมงต่อสัปดาห์');
            $table->string('day_start')->nullable()->comment('วันเริ่มต้น');
            $table->string('day_end')->nullable()->comment('วันสุดท้าย');
            $table->string('job_position')->nullable()->comment('ตำแหน่งงาน');
            $table->longText('job_description')->nullable()->comment('รายละเอียดงาน');
            $table->string('mentor_name')->nullable()->comment('ชื่อพี่เลี้ยง');
            $table->string('mentor_phone')->nullable()->comment('เบอร์โทรศัพท์พี่เลี้ยง');
            $table->string('mentor_position')->nullable()->comment('ตำแหน่งพี่เลี้ยง');
            $table->integer('number_care')->nullable()->comment('จำนวนที่ดูแล');
            $table->integer('salary')->nullable()->comment('ค่าตอบแทน');
            $table->string('salary_type')->nullable()->comment('ประเภทค่าตอบแทน');
            $table->string('rest_option')->nullable()->comment('ตัวเลือกที่พัก');
            $table->integer('rent_ammount')->nullable()->comment('ค่าเช่า');
            $table->boolean('is_shuttle')->nullable()->comment('รถรับส่ง');
            $table->longText('benefit')->nullable()->comment('สวัสดิการอื่นๆ');
            $table->json('gallery')->nullable()->comment('รูปสถานประกอบการ');
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_surveys');
    }
};
