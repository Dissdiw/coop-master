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
            top: 143px;
            right: 290px;
            font-weight: bold;
        }
        .student_code{
            top: 290px;
            right: 120px;
        }
        .company_name{
            top: 353px;
            left: 250px;
        }
        .job_position{
            top: 400px;
            left: 180px;
        }
        .expected_work_from{
            top: 11.80cm;
            left: 9.56cm;
        }
        .expected_work_until{
            top: 11.80cm;
            right: 4.90cm;
        }
        .firstname{
            top: 14.74cm;
            left: 4.17cm;
        }
        .lastname{
            top: 14.74cm;
            right: 6.25cm;
        }
        .firstname_en{
            top: 15.93cm;
            left: 4.65cm;
        }
        .lastname_en{
            top: 15.93cm;
            right: 6.25cm;
        }
        .gender{
            top: 17.20cm;
            left: 4.65cm;
        }
        .gender2{
            top: 17.20cm;
            left: 9.15cm;
        }
        .birthday{
            top: 18.40cm;
            left: 4.30cm;
        }
        .weight{
            top: 18.40cm;
            left: 13.65cm;
        }
        .height{
            top: 18.40cm;
            right: 2.16cm;
        }
        .id_card{
            top: 19.64cm;
            left: 5.95cm;
        }
        .place_of_issue{
            top: 19.64cm;
            right: 6.70cm;
        }
        .due_date{
            top: 19.64cm;
            right: 1.50cm;
        }
        .race{
            top: 20.86cm;
            left: 3.10cm;
        }
        .nationality{
            top: 20.86cm;
            left: 10.65cm;
        }
        .religion{
            top: 20.86cm;
            right: 3.34cm;
        }
        .address_current{
            top: 22.10cm;
            left: 3.46cm;
        }
        .phone1{
            top: 23.30cm;
            left: 3.43cm;
        }
        .mobilephone{
            top: 23.30cm;
            right: 7.50cm;
        }
        .email{
            top: 23.30cm;
            right: 2cm;
        }
        .email{
            top: 23.30cm;
            right: 2cm;
        }
        .permanent_address{
            top: 24.56cm;
            left: 4.70cm;
        }
        .phone2{
            top: 25.77cm;
            left: 3cm;
        }
        .emergency_contact{
            top: 26.99cm;
            left: 7.28cm;
        }
        .emergency_phone{
            top: 26.99cm;
            right: 3.34cm;
        }
        .father_name{
            top: 1.74cm;
            left: 3.78cm;
        }
        .father_occupation{
            top: 1.74cm;
            left: 13.31cm;
        }
        .father_place_work{
            top: 2.94cm;
            left: 3.86cm;
        }
        .father_phone{
            top: 4.13cm;
            left: 3.33cm;
        }
        .mother_name{
            top: 5.44cm;
            left: 4.30cm;
        }
        .mother_occupation{
            top: 5.44cm;
            left: 13.67cm;
        }
        .mother_place_work{
            top: 6.57cm;
            left: 3.94cm;
        }
        .mother_phone{
            top: 7.80cm;
            left: 3.16cm;
        }
        .siblings_no{
            top: 9cm;
            left: 4.58cm;
        }
        .you_are_the{
            top: 9cm;
            left: 16.59cm;
        }
        .GPA{
            top: 13.85cm;
            left: 5.93cm;
        }
        .is_drive_car {
            top: 16.60cm;
            left: 4.90cm;
        }
        .is_drive_motorcycle {
            top: 17.83cm;
            left: 4.90cm;
        }
        .diver_license_car {
            top: 16.62cm;
            left: 12.93cm;
        }
        .diver_license_motorcycle {
            top: 17.88cm;
            left: 12.93cm;
        }
        .sports {
            top: 19.07cm;
            left: 2.84cm;
        }
        .hobbies {
            top: 19.07cm;
            left: 12.44cm;
        }
        .introduct {
            top: 22.29cm;
            left: 1.84cm;
        }
        .interest {
            top: 25.61cm;
            left: 1.84cm;
        }
        .sickness {
            top: 1.55cm;
            left: 4.79cm;
        }
        .sickness_describe {
            top: 1.55cm;
            left: 13.41cm;
        }
        .map{
            top: 7.31cm;
            left: 3.50cm;
        }
    </style>
</head>

<body>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop1.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 
        <div class="fix year">
            <?php
                echo $item->year;
            ?>
        </div>
        <div class="fix student_code">
            {{ @$data->student->student_code ?? Auth::guard('student')->user()->student_code }}
        </div>
        <div class="fix company_name">
            <?php
                echo $item->company_name;
            ?>
        </div>
        <div class="fix job_position">
            <?php
                echo $item->job_position;
            ?>
        </div>
        <div class="fix expected_work_from">
            <?php
                echo $item->expected_work_from;
            ?>
        </div>
        <div class="fix expected_work_until">
            <?php
                echo $item->expected_work_until;
            ?>
        </div>
        <div class="fix firstname">
            {{ @$data->student->firstname ?? Auth::guard('student')->user()->firstname }}
        </div>
        <div class="fix lastname">
            {{ @$data->student->lastname ?? Auth::guard('student')->user()->lastname }}
        </div>
        <div class="fix firstname_en">
            {{ @$data->student->firstname_en ?? Auth::guard('student')->user()->firstname_en }}
        </div>
        <div class="fix lastname_en">
            {{ @$data->student->lastname_en ?? Auth::guard('student')->user()->lastname_en }}
        </div>
        @if (@$data->student->gender ?? Auth::guard('student')->user()->gender == 'ชาย')
        <div class="fix gender">
            x
        </div>
        @else
        <div class="fix gender2">
            x
        </div>
        @endif
        <div class="fix birthday">
            {{ @$data->student->birthday ?? Auth::guard('student')->user()->birthday }}
        </div>
        <div class="fix weight">
            <?php
                echo $item->weight;
            ?>
        </div>
        <div class="fix height">
            <?php
                echo $item->height;
            ?>
        </div>
        <div class="fix id_card">
            <?php
                echo $item->id_card;
            ?>
        </div>
        <div class="fix place_of_issue">
            <?php
                echo $item->place_of_issue;
            ?>
        </div>
        <div class="fix due_date">
            <?php
                echo $item->due_date;
            ?>
        </div>
        <div class="fix race">
            <?php
                echo $item->race;
            ?>
        </div>
        <div class="fix nationality">
            <?php
                echo $item->nationality;
            ?>
        </div>
        <div class="fix religion">
            <?php
                echo $item->religion;
            ?>
        </div>
        <div class="fix address_current">
            <?php
                echo $item->address_current;
            ?>
        </div>
        <div class="fix phone1">
            <?php
                echo $item->phone1;
            ?>
        </div>
        <div class="fix mobilephone">
            <?php
                echo $item->mobilephone;
            ?>
        </div>
        <div class="fix email">
            <?php
                echo $item->email;
            ?>
        </div>
        <div class="fix permanent_address">
            <?php
                echo $item->permanent_address;
            ?>
        </div>
        <div class="fix phone2">
            <?php
                echo $item->phone2;
            ?>
        </div>
        <div class="fix emergency_contact">
            <?php
                echo $item->emergency_contact;
            ?>
        </div>
        <div class="fix emergency_phone">
            <?php
                echo $item->emergency_phone;
            ?>
        </div>
        @endforeach
     </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop2.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 
        <div class="fix father_name">
            <?php
                echo $item->father_name;
            ?>
        </div>
        <div class="fix father_occupation">
            <?php
                echo $item->father_occupation;
            ?>
        </div>
        <div class="fix father_place_work">
            <?php
                echo $item->father_place_work;
            ?>
        </div>
        <div class="fix father_phone">
            <?php
                echo $item->father_phone;
            ?>
        </div>
        <div class="fix mother_name">
            <?php
                echo $item->mother_name;
            ?>
        </div>
        <div class="fix mother_occupation">
            <?php
                echo $item->mother_occupation;
            ?>
        </div>
        <div class="fix mother_place_work">
            <?php
                echo $item->mother_place_work;
            ?>
        </div>
        <div class="fix mother_phone">
            <?php
                echo $item->mother_phone;
            ?>
        </div>
        <div class="fix siblings_no">
            <?php
                echo $item->siblings_no;
            ?>
        </div>
        <div class="fix you_are_the">
            <?php
                echo $item->you_are_the;
            ?>
        </div>
        <div class="fix GPA">
            <?php
                echo $item->GPA;
            ?>
        </div>

        @endforeach
    </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop3.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 
        @if($item->is_drive_car == '1')
        <div class="fix is_drive_car  ">
            x
        </div>
        @endif
        @if($item->is_drive_motorcycle == '1')
        <div class="fix is_drive_motorcycle">
            x
        </div>
        @endif
        <div class="fix diver_license_car ">
            <?php
                echo $item->diver_license_car ;
            ?>
        </div>
        <div class="fix diver_license_motorcycle ">
            <?php
                echo $item->diver_license_motorcycle ;
            ?>
        </div>
        <div class="fix sports  ">
            <?php
                echo $item->sports ;
            ?>
        </div>
        <div class="fix hobbies   ">
            <?php
                echo $item->hobbies  ;
            ?>
        </div>
        <div class="fix introduct   ">
            <?php
                echo $item->introduct  ;
            ?>
        </div>
        <div class="fix interest">
            <?php
                echo $item->interest  ;
            ?>
        </div>
        @endforeach
    </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop4.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 
        <div class="fix sickness">
            <?php
                echo $item->sickness ;
            ?>
        </div>
        <div class="fix sickness_describe">
            <?php
                echo $item->sickness_describe ;
            ?>
        </div>
        @endforeach
    </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop5.jpg' )}}" alt="">
        @foreach ($form_registers as $item)
        <div class="fix map ">
           <img src=" <?php echo $item->map; ?>" alt="">
        </div>
        @endforeach
    </section>
</body>

</html>
