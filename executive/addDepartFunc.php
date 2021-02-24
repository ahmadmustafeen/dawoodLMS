
<?php

require_once('../connection.php');




    if(!isset($_POST['deptS'])){
        header("location:./automatic.php");
    }

    include("../Classes/PHPExcel/IOFactory.php");  

    $allowed = array('.xlsx');
    $filename = $_FILES['excelFile']['name'];
    $file = explode(".",$filename);
    $filename = $file[1];
   


    if(isset($_FILES['excelFile']) && !empty($_FILES['excelFile']['tmp_name'])){
        $excelObject = PHPExcel_IOFactory::load($_FILES['excelFile']['tmp_name']);
        $getsheet = $excelObject->getActiveSheet()->toArray(null);
        // echo "<pre>";
        $file = $_FILES['excelFile']['tmp_name'];
        $readerType = 'Excel2007';
        $reader = PHPExcel_IOFactory::createReader($readerType);
        $PHPExcel = $reader->load($file);
        $sheet = $PHPExcel->getSheet(0);
        
        $highestRow = $sheet->getHighestRow();
        $counter = 1;
        for($i=0;$i<$highestRow;$i++){
            $get_roll = explode("@",$getsheet[$i][0]);  
            $roll_number = $get_roll[0];
            echo $roll_number;
            
            $subject_query = "INSERT INTO `subject`( `subject_name`, `subject_type`) VALUES ('$roll_number','theory')";
            if($con -> query($subject_query)){
                echo $roll_number;
            }            
        }
        
        



    }
       

        
           






