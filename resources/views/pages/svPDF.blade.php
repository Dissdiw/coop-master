<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
        }
        .fix{
            position: absolute;
        }
        .student_id{
            top: 180px;
            right: 100px;
        }
        .name{
            top: 180px;
            left: 165px;
        }
        .rest{
            top: 220px;
            left: 165px;
        }
        .company_name{
            top: 0px;
            left: 0px;
        }
    </style>
</head>

<body>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formsv1.jpg' )}}" alt="">
        <input type="hidden" name="id" value="{{ @$data->id ?? '' }}">
        <div class="fix name">
        <?php
        foreach ($form_surveys as $item) {
        echo $item->year;
        }
        ?>
        </div>



     </section>
    <section style="width: 21 cm; height: 29.7 cm; padding: 0px; margin: 0px">
        <img style="width: 100%; height: 100%; margin: 0px" src="{{ public_path('/pdf/formsv2.jpg' )}}" alt="">
    </section>
</body>

</html>
