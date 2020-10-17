<?php 

include_once('../connection.php');

$teacher_id= "38";


class Teacher{
    public $dept = [];
    public $batch = [];
    public $subject= [];
    public $section= [];
    public $period = [];
    public $data = [];
    public $present_percent = [];
    public $absent_percent = [];
    public $number_of_classes = [];

    public $class_conducted = [];
    public $class_missed = [];
    public $class_compensated = [];
    
// setting
    function set_dept($dept){
       array_push(($this->dept),$dept); 
    }
    function set_batch($batch){
        array_push(($this->batch),$batch); 
    }
    function set_subject($subject){
        array_push(($this->subject),$subject); 
    }
    function set_section($section){
        array_push(($this->section),$section); 
    } 
    function set_data($data){
        array_push(($this->data),$data); 
     }
     function set_period($period){
        array_push(($this->period),$period); 
     }


     function set_present($present){
        array_push(($this->present_percent),$present); 
    } 
    function set_absent($absent){
        array_push(($this->absent_percent),$absent); 
     }
     function set_num_of_classes($number_of_classes){
        array_push(($this->number_of_classes),$number_of_classes); 
     }



     function set_class_conducted($class_conducted){
        array_push(($this->class_conducted),$class_conducted); 
    } 
    function set_class_missed($class_missed){
        array_push(($this->class_missed),$class_missed); 
     }
     function set_class_compensated($class_compensated){
        array_push(($this->class_compensated),$class_compensated); 
     }
    

// getting
    function get_dept(){
       return $this->dept;
    }
    function get_batch(){
       return $this->batch;
    }
    function get_subject(){
       return $this->subject;
    }
    function get_section(){
        return $this->section;
     }
     function get_data(){
        return $this->data;
     }
     function get_period(){
        return $this->period;
     }
     function get_class_conducted(){
        return $this->number_of_classes;
     } function get_class_missed(){
        return $this->class_missed;
     }
}




$teacher = new Teacher();

function fill_teacher($class,$id,$con){
    $get_teacher_data  = mysqli_query($con,"SELECT `period_id`, `section`, `dept_id`, `batch_id`,`subject_id` FROM `period_table_normal` WHERE teacher_id = '$id'");
    while($row = mysqli_fetch_assoc($get_teacher_data)){
        
        $period_id = $row['period_id']; 
        $section = $row['section'];
        $dept_id = $row['dept_id']; 
        $batch_id = $row['batch_id'];
        $subject_id = $row['subject_id'];

        $class->set_dept($dept_id);
        $class->set_batch($batch_id);
        $class->set_section($section);
        $class->set_subject($subject_id);
        $class->set_period($period_id);
    }
    for($i=0;$i<sizeof(($class->get_dept()));$i++){
        $data =  ($class->get_dept()[$i])."_".($class->get_batch()[$i])."_".($class->get_subject()[$i])."_1_".($class->get_section()[$i])."_attendance";
        $class->set_data($data);
        
    }
}

fill_teacher($teacher,$teacher_id,$con);





    $table =  $teacher->get_data()[0];
    $get_teacher_data  = mysqli_query($con,"SELECT `period_id`, `section`, `dept_id`, `batch_id`,`subject_id` FROM `period_table_normal` WHERE teacher_id = '$teacher_id'");
    while($row = mysqli_fetch_assoc($get_teacher_data)){
        $period_id = $row['period_id']; 
        $section = $row['section'];
    }








function get_over($class,$con){
    $number_of_class = 0;
    for($i=0;$i<sizeof(($class->get_data()));$i++){
        // echo $i;
        $table_name =  $class->get_data()[$i];
        // echo $table_name."<br>";
        $number_of_class ++;
        $present = 0;
        $absent = 0;
        $count=0;$countreverse=0;
        for($a=1;$a<121;$a++){
            $id = "a".$a;
            $get_attendance = mysqli_query($con,"SELECT `$id` FROM `$table_name` WHERE 1");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$id];
               if($status== "present"){
                   if($id === 'a1'){
                       $count++;
                   }
                    $present= $present +1;
               }
               else if($status == "absent"){
                if($id === 'a1'){
                    $count++;
                }
                $absent=$absent+1;
                } else if($status == null){
                    if($id === 'a1'){
                        $countreverse++;
                    }
                    // $absent=$absent+1;
               }
            }        
        
        }
        // echo $countreverse."<br>";
        $class->set_class_missed($countreverse);
        $class->set_num_of_classes($count);
        $class->set_present($present);
        $class->set_absent($absent);
    }
  
}


get_over($teacher,$con);
?>