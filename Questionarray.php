<?php
        $questions = array(
            array("1","1orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/qaZhHdm.png"),
            array("2","2orem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/MHDNmLM.png"),
            array("3","3orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other","https://i.imgur.com/TxtPvGk.png"),
            array("4","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("5","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("6","1orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/qaZhHdm.png"),
            array("7","2orem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/MHDNmLM.png"),
            array("8","3orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other","https://i.imgur.com/TxtPvGk.png"),
            array("9","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("10","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("11","1orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/qaZhHdm.png"),
            array("12","2orem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/MHDNmLM.png"),
            array("13","3orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other","https://i.imgur.com/TxtPvGk.png"),
            array("14","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("15","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("16","1orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/qaZhHdm.png"),
            array("17","2orem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/MHDNmLM.png"),
            array("18","3orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other","https://i.imgur.com/TxtPvGk.png"),
            array("19","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("20","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("21","1orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/qaZhHdm.png"),
            array("22","2orem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/MHDNmLM.png"),
            array("23","3orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other","https://i.imgur.com/TxtPvGk.png"),
            array("24","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("25","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("26","1orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/qaZhHdm.png"),
            array("27","2orem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua. ?","male","female","Other","https://i.imgur.com/MHDNmLM.png"),
            array("28","3orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other","https://i.imgur.com/TxtPvGk.png"),
            array("29","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),
            array("30","4orem ipsum dolor sit amet, or incididunt ut labore et dolore magna aliqua. ?","Male","Female","Other",""),

        );
        $total_noof_questions = 30;
        $answer_key = array(
            array("1","2"),
            array("2","3"),
            array("3","2"),
            array("4","2"),
            array("5", "1"),
            array("6","2"),
            array("7","3"),
            array("8","2"),
            array("9","2"),
            array("10", "1"),
            array("11","2"),
            array("12","3"),
            array("13","2"),
            array("14","2"),
            array("15", "1"),
            array("16","2"),
            array("17","3"),
            array("18","2"),
            array("19","2"),
            array("20", "1"),
            array("21","2"),
            array("22","3"),
            array("23","2"),
            array("24","2"),
            array("25", "1"),
            array("26","2"),
            array("27","3"),
            array("28","2"),
            array("29","2"),
            array("30", "1"),
        );

        date_default_timezone_set("Asia/Kolkata");
        $marks_of_each_qn = 4;
        $_SESSION['answer_of _questions'] = array();

        $allowed_schools = array("vnit","vit","iiit");

        $now = time();
        // echo date("d-m-y H:i:s", $now) . "<br>";







?>
