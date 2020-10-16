<?php
$i=0;
require_once('./departFile.php');



class lecture_details{
    public $lecture_ids = [];
    public $lecture_dates = [];
    function add_lecture_ids($lecture_id){
        array_push(($this->lecture_ids),$lecture_id);
    }  
    function add_lecture_date($lecture_date){
        array_push(($this->lecture_dates),$lecture_date);
    }
    function get_lecture_id(){
        return $this->lecture_ids;
    }
    function get_lecture_date(){
        return $this->lecture_dates;
    }
}




class class_attendance{
    public $number_of_class = 0;
    public $absent = 0;
    public $present= 0;
    function add_number_of_class(){
        $this->number_of_class++;
    }
    function get_number_of_class(){
        return $this->number_of_class++;
    }
    function add_present(){
        $this->present++;
    }
    function get_present(){
        return $this->present++;
    }function add_absent(){
        $this->absent++;
    }
    function get_absent(){
        return $this->absent++;
    }
}

 





// only for use for getting data suquential wise
function add_lecture($class,$second_class,$con){
    foreach(($class->get_data()[0]) as $period_id){
        $get_lecture_id_and_date  = mysqli_query($con,"SELECT `lecture_id`, `lecture_date` FROM `lecture_details` WHERE period_id = '$period_id'");
        while($row = mysqli_fetch_assoc($get_lecture_id_and_date)){
            $lecture_id = $row['lecture_id']; $lecture_date = $row['lecture_date'];
            $second_class->add_lecture_ids($lecture_id);$second_class->add_lecture_date($lecture_date);
        }
    }
}




// Architecture Depart
$ar_16_lectures = new lecture_details();
$ar_17_lectures = new lecture_details();
$ar_18_lectures = new lecture_details();
$ar_19_lectures = new lecture_details();
$ar_20_lectures = new lecture_details();



// Chemical
$ch_17_lectures = new lecture_details();
$ch_18_lectures = new lecture_details();
$ch_19_lectures = new lecture_details();
$ch_20_lectures = new lecture_details();


// Computer System
$cs_17_lectures = new lecture_details();
$cs_18_lectures = new lecture_details();
$cs_19_lectures = new lecture_details();
$cs_20_lectures = new lecture_details();


// Electronics
$es_17_lectures = new lecture_details();
$es_18_lectures = new lecture_details();
$es_19_lectures = new lecture_details();
$es_20_lectures = new lecture_details();



// Energy and Environment
$ee_17_lectures = new lecture_details();
$ee_18_lectures = new lecture_details();
$ee_19_lectures = new lecture_details();
$ee_20_lectures = new lecture_details();



// Industrial
$in_17_lectures = new lecture_details();
$in_18_lectures = new lecture_details();
$in_19_lectures = new lecture_details();
$in_20_lectures = new lecture_details();



// metallurgy
$mm_17_lectures = new lecture_details();
$mm_18_lectures = new lecture_details();
$mm_19_lectures = new lecture_details();
$mm_20_lectures = new lecture_details();


// petroleum
$pg_17_lectures = new lecture_details();
$pg_18_lectures = new lecture_details();
$pg_19_lectures = new lecture_details();
$pg_20_lectures = new lecture_details();



// telecom
$te_17_lectures = new lecture_details();
$te_18_lectures = new lecture_details();
$te_19_lectures = new lecture_details();
$te_20_lectures = new lecture_details();





// Architecture Depart
$ar_16_attendance = new class_attendance();
$ar_17_attendance = new class_attendance();
$ar_18_attendance = new class_attendance();
$ar_19_attendance = new class_attendance();
$ar_20_attendance = new class_attendance();



// Chemical
$ch_17_attendance = new class_attendance();
$ch_18_attendance = new class_attendance();
$ch_19_attendance = new class_attendance();
$ch_20_attendance = new class_attendance();


// Computer System
$cs_17_attendance = new class_attendance();
$cs_18_attendance = new class_attendance();
$cs_19_attendance = new class_attendance();
$cs_20_attendance = new class_attendance();


// Electronics
$es_17_attendance = new class_attendance();
$es_18_attendance = new class_attendance();
$es_19_attendance = new class_attendance();
$es_20_attendance = new class_attendance();



// Energy and Environment
$ee_17_attendance = new class_attendance();
$ee_18_attendance = new class_attendance();
$ee_19_attendance = new class_attendance();
$ee_20_attendance = new class_attendance();



// Industrial
$in_17_attendance = new class_attendance();
$in_18_attendance = new class_attendance();
$in_19_attendance = new class_attendance();
$in_20_attendance = new class_attendance();



// metallurgy
$mm_17_attendance = new class_attendance();
$mm_18_attendance = new class_attendance();
$mm_19_attendance = new class_attendance();
$mm_20_attendance = new class_attendance();


// petroleum
$pg_17_attendance = new class_attendance();
$pg_18_attendance = new class_attendance();
$pg_19_attendance = new class_attendance();
$pg_20_attendance = new class_attendance();



// telecom
$te_17_attendance = new class_attendance();
$te_18_attendance = new class_attendance();
$te_19_attendance = new class_attendance();
$te_20_attendance = new class_attendance();





function get_over($class,$class_2,$con){

    $dept = $class->get_dept();
    $batch = $class->get_batch(); 
    $table_name =  $dept."_".$batch."_".($class->get_data()[2][0])."_1_".($class->get_data()[1][0])."_attendance";
   
   for($a=1;$a<121;$a++){
       $id = "a".$a;
       $get_attendance = mysqli_query($con,"SELECT `$id` FROM `$table_name` WHERE 1");
    //    echo $table_name;
       while($row = mysqli_fetch_assoc($get_attendance)){
           $status = $row[$id];

          if($status== "present"){
                $class_2->add_present();
          }
          else if($status == "absent"){
              $class_2->add_absent();
          }
       }
   }


    
}





?>