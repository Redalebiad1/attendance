<?php
    require_once 'db/conn.php'; 
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php'; 
        header("Location: viewrecords.php");
    }else{
        //GET ID values
        $id = $_GET['id'];
        //call Delete function
        $result = $crud->deleteAttendee($id);
        //Redirect to List 
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php'; 
        }
    }
    


?>