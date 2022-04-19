<?php
    include "config.php";
    session_start();
if(!empty($_POST))
{
	
	
    if($_POST['med1']=="UPDATE")
    {
        if(($_POST['hour1'] == NULL) || ($_POST['minute1'] == NULL) || ($_POST['am1'] == NULL)){
            echo '<script>alert("please enter details correctly");</script>';
        }
        else{
            $sql = mysqli_query($con,"UPDATE scheduling SET hour='".$_POST['hour1']."', minutes='".$_POST['minute1']."', ampm='".$_POST['am1']."' WHERE id=1");
        }
    }
    

    
    
    if($_POST['med2']=="UPDATE")
    {
        if(($_POST['hour2'] == NULL) && ($_POST['minute2'] == NULL) && ($_POST['am2'] == NULL)){
            echo '<script>alert("please enter details correctly");</script>';
        }
        else{
            $sql = mysqli_query($con,"UPDATE scheduling SET hour='".$_POST['hour2']."', minutes='".$_POST['minute2']."', ampm='".$_POST['am2']."' WHERE id=2");
        }
    }
    
    
    
  
    if($_POST['med3']=="UPDATE")
    {
        if(($_POST['hour3'] == NULL) && ($_POST['minute3'] == NULL) && ($_POST['am3'] == NULL)){
            echo '<script>alert("please enter details correctly");</script>';
        }
        else{
            $sql = mysqli_query($con,"UPDATE scheduling SET hour='".$_POST['hour3']."', minutes='".$_POST['minute3']."', ampm='".$_POST['am3']."' WHERE id=3");
        }
    }
   
 
   
   
    if($_POST['med4']=="UPDATE")
    {
        if(($_POST['hour4'] == NULL) && ($_POST['minute4'] == NULL) && ($_POST['am4'] == NULL)){
            echo '<script>alert("please enter details correctly");</script>';
        }
        else{
            $sql = mysqli_query($con,"UPDATE scheduling SET hour='".$_POST['hour4']."', minutes='".$_POST['minute4']."', ampm='".$_POST['am4']."' WHERE id=4");
        }
    }
    
    
}


       header("Location: welcome.php");
?>