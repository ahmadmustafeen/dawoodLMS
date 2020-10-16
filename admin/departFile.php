<?php
require_once('../connection.php');





class Room{
    public $dept = "";
    public $batch = "";
    public $subject= "";
    public $section= "";
    public $period = [];
    public $data = [];
    

    function set_dept($dept){
        $this->dept = $dept; 
    }
    function set_batch($batch){
        $this->batch = $batch; 
    }
    function set_subject($subject){
        $this->subject = $subject; 
    }
    function set_section($section){
        $this->section = $section; 
    } 
    function set_data($data){
        $this->data = $data; 
    }
  
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
}




// Architecture Depart
$ar_16 = new Room();
$ar_17 = new Room();
$ar_18 = new Room();
$ar_19 = new Room();
$ar_20 = new Room();


// Chemical
$ch_17 = new Room();
$ch_18 = new Room();
$ch_19 = new Room();
$ch_20 = new Room();


// Computer System
$cs_17 = new Room();
$cs_18 = new Room();
$cs_19 = new Room();
$cs_20 = new Room();


// Electronics
$es_17 = new Room();
$es_18 = new Room();
$es_19 = new Room();
$es_20 = new Room();



// Energy and Environment
$ee_17 = new Room();
$ee_18 = new Room();
$ee_19 = new Room();
$ee_20 = new Room();



// Industrial
$in_17 = new Room();
$in_18 = new Room();
$in_19 = new Room();
$in_20 = new Room();



// metallurgy
$mm_17 = new Room();
$mm_18 = new Room();
$mm_19 = new Room();
$mm_20 = new Room();



// petroleum
$pg_17 = new Room();
$pg_18 = new Room();
$pg_19 = new Room();
$pg_20 = new Room();



// telecom
$te_17 = new Room();
$te_18 = new Room();
$te_19 = new Room();
$te_20 = new Room();



$ar_16->set_dept('ar');
$ar_17->set_dept('ar');
$ar_18->set_dept('ar');
$ar_19->set_dept('ar');
$ar_20->set_dept('ar');




$ch_17->set_dept('ch');
$ch_18->set_dept('ch');
$ch_19->set_dept('ch');
$ch_20->set_dept('ch');




$cs_17->set_dept('cs');
$cs_18->set_dept('cs');
$cs_19->set_dept('cs');
$cs_20->set_dept('cs');




$ee_17->set_dept('ee');
$ee_18->set_dept('ee');
$ee_19->set_dept('ee');
$ee_20->set_dept('ee');




$es_17->set_dept('es');
$es_18->set_dept('es');
$es_19->set_dept('es');
$es_20->set_dept('es');



$mm_17->set_dept('mm');
$mm_18->set_dept('mm');
$mm_19->set_dept('mm');
$mm_20->set_dept('mm');





$in_17->set_dept('in');
$in_18->set_dept('in');
$in_19->set_dept('in');
$in_20->set_dept('in');





$pg_17->set_dept('pg');
$pg_18->set_dept('pg');
$pg_19->set_dept('pg');
$pg_20->set_dept('pg');




$te_17->set_dept('te');
$te_18->set_dept('te');
$te_19->set_dept('te');
$te_20->set_dept('te');





$ar_16->set_batch('1');
$ar_17->set_batch('2');
$ar_18->set_batch('3');
$ar_19->set_batch('4');
$ar_20->set_batch('5');




$ch_17->set_batch('2');
$ch_18->set_batch('3');
$ch_19->set_batch('4');
$ch_20->set_batch('5');




$cs_17->set_batch('2');
$cs_18->set_batch('3');
$cs_19->set_batch('4');
$cs_20->set_batch('5');




$ee_17->set_batch('2');
$ee_18->set_batch('3');
$ee_19->set_batch('4');
$ee_20->set_batch('5');




$es_17->set_batch('2');
$es_18->set_batch('3');
$es_19->set_batch('4');
$es_20->set_batch('5');



$mm_17->set_batch('2');
$mm_18->set_batch('3');
$mm_19->set_batch('4');
$mm_20->set_batch('5');





$in_17->set_batch('2');
$in_18->set_batch('3');
$in_19->set_batch('4');
$in_20->set_batch('5');





$pg_17->set_batch('2');
$pg_18->set_batch('3');
$pg_19->set_batch('4');
$pg_20->set_batch('5');




$te_17->set_batch('2');
$te_18->set_batch('3');
$te_19->set_batch('4');
$te_20->set_batch('5');




function main($class,$con){
    $dept = $class->get_dept();
    $batch = $class->get_batch();
    $period_id_arr = [];
    $section_id_arr = [];
    $subject_id_arr = [];
    $get_subject_and_section  = mysqli_query($con,"SELECT `period_id`, `section`,  `subject_id` FROM `period_table_normal` WHERE dept_id = '$dept' and batch_id = '$batch'");
    while($row = mysqli_fetch_assoc($get_subject_and_section)){
        $period_id = $row['period_id']; $section = $row['section']; $subject_id = $row['subject_id'];
        array_push($period_id_arr,$period_id);array_push($section_id_arr,$section);array_push($subject_id_arr,$subject_id);
    }
    $all = [];
    array_push($all,$period_id_arr);
    array_push($all,$section_id_arr);
    array_push($all,$subject_id_arr);
    $class->set_data($all);

}

main($ar_16,$con);
main($ar_17,$con);
main($ar_18,$con);
main($ar_19,$con);
main($ar_20,$con);



main($ch_17,$con);
main($ch_18,$con);
main($ch_19,$con);
main($ch_20,$con);


main($cs_17,$con);
main($cs_18,$con);
main($cs_19,$con);
main($cs_20,$con);

main($ee_17,$con);
main($ee_18,$con);
main($ee_19,$con);
main($ee_20,$con);

main($es_17,$con);
main($es_18,$con);
main($es_19,$con);
main($es_20,$con);

main($mm_17,$con);
main($mm_18,$con);
main($mm_19,$con);
main($mm_20,$con);

main($in_17,$con);
main($in_18,$con);
main($in_19,$con);
main($in_20,$con);

main($pg_17,$con);
main($pg_18,$con);
main($pg_19,$con);
main($pg_20,$con);

main($te_17,$con);
main($te_18,$con);
main($te_19,$con);
main($te_20,$con);




















?>