<?php
        $questions = array(
            array("1","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other"),
            array("2","Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other"),
            array("3","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other"),
            array("4","Lorem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other"),
        );
        $total_noof_questions = 4;
        $answer_key = array(
            array("1","2"),
            array("2","3"),
            array("3","2"),
            array("4","2"),
        );

        date_default_timezone_set("Asia/Kolkata");
        $marks_of_each_qn = 4;
        $_SESSION['answer_of _questions'] = array();

        $allowed_schools = array("vnit","vit","iiiit");

        $now = time();
        // echo date("d-m-y H:i:s", $now) . "<br>";







?>
