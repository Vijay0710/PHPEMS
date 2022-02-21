<?php
    include_once("config.php");
    $emp_id = $_POST['empid'];
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];
    
    if(isset($_POST['Submit'])){
        $result = mysqli_query($mysqli,"INSERT INTO empdetails VALUES('$emp_id','$ename','$desig','$dept','$doj','$salary' )");
         echo "<h1 align='center'>Add Employee Details</h1>"; 
        echo "<hr />"; 
        echo "<font color='green'>Data added successfully."; 
        echo "<br/><a href='index.php'>View Result</a>"; 
    }
    ?>

