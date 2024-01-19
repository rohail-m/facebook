<?php
    session_start();

    include './config.php';
    
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $m_mail = $_POST['m_mail'];
    $password = $_POST['password'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];

    $insert = "INSERT INTO registration (f_name, l_name, m_mail, password, day, month, year, gender) VALUES ('{$f_name}','{$l_name}','{$m_mail}','{$password}',$day,'{$month}',$year,'{$gender}')";

    $result = mysqli_query($connection,$insert);

    if($result){
        $_SESSION['check_logged'] = $f_name;
        header("Location: $baseurl/home.php");
    }else{
        echo "Please try again";
    }
?>