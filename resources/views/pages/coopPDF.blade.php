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
        @endforeach
     </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop2.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 

        @endforeach
    </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop3.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 

        @endforeach
    </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop4.jpg' )}}" alt="">
        @foreach ($form_registers as $item) 

        @endforeach
    </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formcoop5.jpg' )}}" alt="">
        @foreach ($form_registers as $item)

        @endforeach
    </section>
</body>

</html>
