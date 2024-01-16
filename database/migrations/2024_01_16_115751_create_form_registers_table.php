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
        Schema::create('form_registers', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('student_image')->nullable();
            $table->string('company_name')->nullable()->comment('ชื่อสถานประกอบการ');
            $table->string('job_position')->nullable()->comment('ตำแหน่งงาน');
            $table->string('expected_work_from')->nullable()->comment('ระยะเวลาทำงานจาก');
            $table->string('expected_work_until')->nullable()->comment('ระยะเวลาทำงานถึง');
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->string('id_card')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->date('due_date')->nullable();
            $table->string('race')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->longText('address_current')->nullable();
            $table->string('phone1')->nullable();
            $table->string('mobilephone')->nullable();
            $table->string('email')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->string('phone2')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_phone')->nullable();


            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_place_work')->nullable();
            $table->string('father_phone')->nullabl();;
            $table->string('mother_name')->nullabl();;
            $table->string('mother_occupation')->nullabl();;
            $table->string('mother_place_work')->nullabl();;
            $table->string('mother_phone')->nullable();

            $table->string('siblings_no',2)->nullable();
            $table->string('you_are_the',2)->nullable();


            $table->decimal('GPA',8,2)->nullable();

            $table->json('education_background')->nullable();
            $table->json('training_background')->nullable();
            $table->json('student_activities')->nullable();


            $table->string('lan_ability_english')->nullable();
            $table->string('lan_ability_chinese')->nullable();
            $table->string('lan_ability_other')->nullable();

            $table->json('special_ability')->nullable();

            $table->boolean('is_drive_car')->nullable();
            $table->boolean('is_drive_motorcycle')->nullable();
            $table->string('diver_license_car')->nullable();
            $table->string('diver_license_motorcycle')->nullable();

            $table->longText('sports')->nullable();
            $table->longText('hobbies')->nullable();

            $table->longText('introduct')->nullable()->comment('อธิบายรายละเอียด');
            $table->longText('interest')->nullable()->comment('อธิบายงานที่สนใจ');


            $table->longText('sickness')->nullable();
            $table->longText('sickness_describe')->nullable();


            $table->string('company_name2')->nullable();
            $table->string('company_contact')->nullable();
            $table->string('company_contact_phone1')->nullable();
            $table->string('company_contact_phone2')->nullable();
            $table->string('company_address')->nullable();
            

            $table->string('map')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_registers');
    }
};
