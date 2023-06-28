<?php
        include 'patientInfo.php';
             
        if(isset($_POST['dueDate']) && isset($_POST['sex'])){
            $in_dueDate = $_POST['dueDate'];
            $in_sex=$_POST['sex'];
            $in_query="insert into pregnancies values($patientID,'$in_dueDate','$in_sex')";
            if($conn->query($in_query)){
                header("Location: pregnancies.php");   
            }
        }
 ?>