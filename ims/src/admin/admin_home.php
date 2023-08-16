<?php

    require "../classes/student.class.php";
    // $con=Structure::header('home');
?>
    <!-- Dashboard Title -->
    <div class="title">
        <i class="uil uil-estate"></i>
        <span class="text">Home</span>
    </div>
    <!-- Dashboard Title complete -->
    <!-- Dashboard Main content -->
    <div class="boxes">
        <div class="box box1">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="text">today Present</span>
            <span class="number"><?php
                $studen=new Student();
                $date = date('Y-m-d',time());
                $present=$studen->view_today_attend($date);
                echo $present['count(attend)'];
                
            ?></span>
        </div>
        <div class="box box2">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="text">Total Students</span>
            <span class="number">
            <?php 
                $total=$studen->count_std();
                echo $total['count(role)'];
            ?>
            </span>
        </div>
        <div class="box box3">
            <i class="fa fa-share" aria-hidden="true"></i>
            <span class="text">Total Inquiry</span>
            <span class="number"><?php
                // $studen=new Student();
                // $date = date('Y-m-d',time());
                // $present=$studen->count_inq($date);
                $count_inq=$studen->count_inq($date);
                // print_r($count_inq);
                echo $count_inq['count(inq_date)'];
            ?>
            </span>
        </div>
    </div>
</html>