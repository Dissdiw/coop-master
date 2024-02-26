<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("{{asset('fonts/THSarabunNew.ttf')}}") format('truetype');
        }
        @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src: url("{{asset('fonts/THSarabunNew Bold.ttf')}}") format('truetype');
        }
        @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src: url("{{asset('fonts/THSarabunNew Italic.ttf')}}") format('truetype');
        }
        @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src: url("{{asset('fonts/THSarabunNew BoldItalic.ttf')}}") format('truetype');
        }
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
            font-family: "THSarabunNew";
            font-size: 20px
        }
        .fix{
            position: absolute;
        }
        .year{
            top: 94px;
            right: 370px;
            font-weight: bold;
        }
        .name{
            top: 167px;
            left: 180px;
        }
        .student_code{
            top: 167px;
            right: 150px;
        }
        .rest{
            top: 205px;
            left: 55px;
            line-height: 0.8;
            text-indent: 130px;
        }
        .company_name{
            top: 252px;
            left: 273px;
        }
        .address{
            top: 280px;
            left: 94px;
        }
        .type{
            top: 310px;
            left: 270px;
        }
        .employee_ammount{
            top: 338px;
            left: 240px;
        }
        .week_ammount{
            top: 338px;
            right: 140px;
        }
        .working_ammount{
            top: 367px;
            left: 230px;
        }
        .day_start{
            top: 367px;
            left: 430px;
        }
        .day_end{
            top: 367px;
            left: 630px;
        }
        .job_position{
            top: 395px;
            left: 330px;
        }
        .job_description{
            top: 433px;
            left: 56px;
            line-height: 0.8;
            text-indent: 310px;
        }
        .mentor_name{
            top: 537px;
            left: 345px;
        }
        .mentor_phone{
            top: 537px;
            left: 600px;
        }
        .mentor_position{
            top: 566px;
            left: 170px;
        }
        .number_care{
            top: 566px;
            right: 120px;
        }
        .salary{
            top: 641px;
            left: 140px;
        }
        .salary2{
            top: 641px;
            left: 360px;
        }
        .rest_option1{
            top: 667px;
            left: 95px;
        }
        .rest_option2{
            top: 695px;
            left: 95px;
        }
        .rent_ammount1{
            top: 695px;
            right: 320px;
        }
        .rest_option3{
            top: 723px;
            left: 95px;
        }
        .rent_ammount2{
            top: 723px;
            right: 445px;
        }
        .is_shuttle{
            bottom: 308px;
            left: 95px;
        }
        .is_shuttle2{
            bottom: 308px;
            left: 255px;
        }
        .benefit{
            bottom: 251px;
            left: 55px;
        }
        .gallery{
            bottom: 251px;
            left: 55px;
        }
    </style>
</head>

<body>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formsv1.jpg' )}}" alt="">
        <div class="fix year">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->year;
            }
            ?>
        </div>
        <div class="fix name">
             {{ @$data->student->firstname ?? Auth::guard('student')->user()->firstname }} {{ @$data->student->lastname ?? Auth::guard('student')->user()->lastname }}
        </div>
        <div class="fix student_code">
            {{ @$data->student->student_code ?? Auth::guard('student')->user()->student_code }}
        </div>
        <div class="fix rest">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->rest;
            }
            ?>
        </div>
        <div class="fix company_name">
             <?php
            foreach ($form_surveys as $item) {
                echo $item->company_name;
            }
            ?>
        </div>    
        <div class="fix address">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->address;
            }
            ?>
        </div>
        <div class="fix type">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->type;
            }
            ?>
        </div>
        <div class="fix employee_ammount">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->employee_ammount;
            }
            ?>
        </div>
        <div class="fix week_ammount">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->week_ammount;
            }
            ?>
        </div>
        <div class="fix working_ammount">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->working_ammount;
            }
            ?>
        </div>
        <div class="fix day_start">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->day_start;
            }
            ?>
        </div>
        <div class="fix day_end">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->day_end;
            }
            ?>
        </div>
        <div class="fix job_position">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->job_position;
            }
            ?>
        </div>
        <div class="fix job_description">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->job_description;
            }
            ?>
        </div>
        <div class="fix mentor_name">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->mentor_name;
            }
            ?>
        </div>
        <div class="fix mentor_phone">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->mentor_phone;
            }
            ?>
        </div>
        <div class="fix mentor_position">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->mentor_position;
            }
            ?>
        </div>
        <div class="fix number_care">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->number_care;
            }
            ?>
        </div>
        @foreach ($form_surveys as $item) 
        @if ($item->salary_type == 'day')
        <div id="salary" class="fix salary">
            <?php
                echo $item->salary;
            ?>
        </div>
        @else
        <div id="salary2" class="fix salary2">
            <?php
                echo $item->salary;
            ?>
        </div>
        @endif

        @if ($item->rest_option == 'สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย')
        <div class="fix rest_option1">
            x
        </div>
        @elseif ($item->rest_option == 'สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย')
        <div class="fix rest_option2">
            x
        </div>
        <div class="fix rent_ammount1">
            {{ $item->rent_ammount }}
        </div>
         @else
         <div class="fix rest_option3">
            x
         </div>
         <div class="fix rent_ammount2">
            {{ $item->rent_ammount }}
        </div>
        @endif
        @if ($item->is_shuttle == '1')
        <div class="fix is_shuttle">
            x
        </div>
        @else
        <div class="fix is_shuttle2">
            x
        </div>
        @endif
        @endforeach
        <div class="fix benefit">
            <?php
            foreach ($form_surveys as $item) {
                echo $item->benefit;
            }
            ?>
        </div>


     </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formsv2.jpg' )}}" alt="">
        @foreach ($form_surveys as $item) 
        <div>
            {{ $item->gallery }}
        </div>
        @endforeach
    </section>
</body>

</html>
