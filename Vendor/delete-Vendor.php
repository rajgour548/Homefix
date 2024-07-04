
<?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='d'){
            header("location: ../login.php");
        }else{
            $useremail=$_SESSION["user"];
        }

    }else{
        header("location: ../login.php");
    }
    

    
    include("../connection.php");
    $userrow = $database->query("select * from Vendor where docemail='$useremail'");
    $userfetch=$userrow->fetch_assoc();
    $userid= $userfetch["docid"];
    $username=$userfetch["docname"];

    
    if($_GET){
        
        include("../connection.php");
        $id=$_GET["id"];
        $result001= $database->query("select * from Vendor where docid=$id;");
        $email=($result001->fetch_assoc())["docemail"];
        $sql= $database->query("delete from webuser where email='$email';");
        $sql= $database->query("delete from Vendor where docemail='$email';");
       
        header("location: ../logout.php");
    }


?>