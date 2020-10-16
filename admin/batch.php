<?php

require_once('../connection.php');
session_start();
if(isset($_SESSION['User']))
{

   
    $username = $_SESSION['User'];
    $user_level_Q  = mysqli_query($con,"SELECT `user_level` FROM `login_info` WHERE username = '$username'");
    while($row = mysqli_fetch_assoc($user_level_Q)){
        $user_level = $row['user_level'];
    }
    if($user_level != '1'){
        header('location:../wellcome.php');
    }

    $username_T = "usertype_".$user_level."_info";
    
 $username_Q  = mysqli_query($con,"SELECT `username_name` FROM $username_T WHERE username = '$username'");
    while($row = mysqli_fetch_assoc($username_Q)){
        $username_name = $row['username_name'];
    }






    // getting the name of all department and putting them in array
    $department = [];
    $get_department_Q  = mysqli_query($con,"SELECT `dept_id` FROM `department` WHERE 1");
        while($row = mysqli_fetch_assoc($get_department_Q)){
            array_push($department,$row['dept_id']);
        }



    // getting the name of all department and putting them in array
    $batch = [];
    $batch_ids = [];
    $get_batch_Q  = mysqli_query($con,"SELECT `batch_name`,`batch_id` FROM `batch` WHERE 1");
        while($row = mysqli_fetch_assoc($get_batch_Q)){
            $batch_name = $row['batch_name'];
            $batch_id = $row['batch_id'];
            $batcha = explode('-',$batch_name);
            $batch_name = $batcha[1];
            array_push($batch,$batch_name);
            array_push($batch_ids,$batch_id);
        }
    



    // department and batch combo ++ classes
    $classes = [];
    for($i=0;$i<sizeof($department);$i++){
        for($j=0;$j<sizeof($batch);$j++){
           $class= $department[$i].'_'.$batch[$j]."<br>";
            array_push($classes,$class);
        }
        
    }




    $batch_17 = $batch_ids[0];
    $batch_18 = $batch_ids[1];
    $batch_19 = $batch_ids[2];
    $batch_20 = $batch_ids[3];

    // getting all the period ids of each class 




    // cs

    $dept_cs_17_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_17'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_cs_17_ids,$period_table_id);
    }
    $dept_cs_18_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_18'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_cs_18_ids,$period_table_id);
    }
    $dept_cs_19_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_19'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_cs_19_ids,$period_table_id);
    }
    $dept_cs_20_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_20'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_cs_20_ids,$period_table_id);
    }
    
    // es
    $dept_es_17_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_17'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_es_17_ids,$period_table_id);
    }
    $dept_es_18_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_18'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_es_18_ids,$period_table_id);
    }
    $dept_es_19_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_19'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_es_19_ids,$period_table_id);
    }
    $dept_es_20_ids = [];
    $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_20'");
    while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
        $period_table_id = $row['period_table_id'];
        array_push($dept_es_20_ids,$period_table_id);
    }



     // te
     $dept_te_17_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_17'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_te_17_ids,$period_table_id);
     }
     $dept_te_18_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_18'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_te_18_ids,$period_table_id);
     }
     $dept_te_19_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_19'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_te_19_ids,$period_table_id);
     }
     $dept_te_20_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_20'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_te_20_ids,$period_table_id);
     }


      // mm
      $dept_mm_17_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_17'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_mm_17_ids,$period_table_id);
      }
      $dept_mm_18_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_18'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_mm_18_ids,$period_table_id);
      }
      $dept_mm_19_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_19'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_mm_19_ids,$period_table_id);
      }
      $dept_mm_20_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_20'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_mm_20_ids,$period_table_id);
      }



     // ee
     $dept_ee_17_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_17'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ee_17_ids,$period_table_id);
     }
     $dept_ee_18_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_18'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ee_18_ids,$period_table_id);
     }
     $dept_ee_19_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_19'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ee_19_ids,$period_table_id);
     }
     $dept_ee_20_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_20'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ee_20_ids,$period_table_id);
     }




      // in
      $dept_in_17_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_17'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_in_17_ids,$period_table_id);
      }
      $dept_in_18_ids = [];
        $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_18'");
        while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
            $period_table_id = $row['period_table_id'];
            array_push($dept_in_18_ids,$period_table_id);
        }
        $dept_in_19_ids = [];
        $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_19'");
        while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
            $period_table_id = $row['period_table_id'];
            array_push($dept_in_19_ids,$period_table_id);
        }
        $dept_in_20_ids = [];
        $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_20'");
        while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
            $period_table_id = $row['period_table_id'];
            array_push($dept_in_20_ids,$period_table_id);
        }





     // ar
     $dept_ar_17_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_17'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ar_17_ids,$period_table_id);
     }
     $dept_ar_18_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_18'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ar_18_ids,$period_table_id);
     }
     $dept_ar_19_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_19'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ar_19_ids,$period_table_id);
     }
     $dept_ar_20_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_20'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ar_20_ids,$period_table_id);
     }





      // pg
      $dept_pg_17_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_17'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_pg_17_ids,$period_table_id);
      }
      $dept_pg_18_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_18'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_pg_18_ids,$period_table_id);
      }
      $dept_pg_19_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_19'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_pg_19_ids,$period_table_id);
      }
      $dept_pg_20_ids = [];
      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_20'");
      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
          $period_table_id = $row['period_table_id'];
          array_push($dept_pg_20_ids,$period_table_id);
      }
        






     // ch
     $dept_ch_17_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_17'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ch_17_ids,$period_table_id);
     }
     $dept_ch_18_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_18'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ch_18_ids,$period_table_id);
     }
     $dept_ch_19_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_19'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ch_19_ids,$period_table_id);
     }
     $dept_ch_20_ids = [];
     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_20'");
     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
         $period_table_id = $row['period_table_id'];
         array_push($dept_ch_20_ids,$period_table_id);
     }
 
    



     
// //////////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////
// /////////////////////////////////////////
// /////////////////////////
// ///////////////                                                    LECTURE IDS
// /////////////////////////
// //////////////////////////////////////
// /////////////////////////////////////////////////
// //////////////////////////////////////////////////////////////////////

// ////////getting all the lecture ids





// looping for each period id













































// CH
$total_class_cs_17 = 0;
$attendance_batch_cs_17_P = 0;
$attendance_batch_cs_17_A = 0;
for($i=0;$i<sizeof($dept_cs_17_ids);$i++){
    $period_id = $dept_cs_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'cs_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_cs_17+=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_cs_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_cs_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_cs_17_T = $attendance_batch_cs_17_A + $attendance_batch_cs_17_P;
if($attendance_batch_cs_17_T){
    $attendance_batch_cs_17_PER =  round(($attendance_batch_cs_17_P/$attendance_batch_cs_17_T)*100);
}
else{
    $attendance_batch_cs_17_PER = 0;
}



// CH
$total_class_cs_18=0;
$attendance_batch_cs_18_P = 0;
$attendance_batch_cs_18_A = 0;
for($i=0;$i<sizeof($dept_cs_18_ids);$i++){
    $period_id = $dept_cs_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'cs_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $total_class_cs_18+=1;
            $lecture_id = $row['lecture_id'];
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_cs_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_cs_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_cs_18_T = $attendance_batch_cs_18_A + $attendance_batch_cs_18_P;
if($attendance_batch_cs_18_T){
    $attendance_batch_cs_18_PER =  round(($attendance_batch_cs_18_P/$attendance_batch_cs_18_T)*100);
}
else{
    $attendance_batch_cs_18_PER = 0;
}




// CH
$total_class_cs_19 = 0;
$attendance_batch_cs_19_P = 0;
$attendance_batch_cs_19_A = 0;
for($i=0;$i<sizeof($dept_cs_19_ids);$i++){
    $period_id = $dept_cs_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'cs_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $total_class_cs_19+=1;
            $lecture_id = $row['lecture_id'];
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_cs_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_cs_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_cs_19_T = $attendance_batch_cs_19_A + $attendance_batch_cs_19_P;
if($attendance_batch_cs_19_T){
    $attendance_batch_cs_19_PER =  round(($attendance_batch_cs_19_P/$attendance_batch_cs_19_T)*100);
}
else{
    $attendance_batch_cs_19_PER = 0;
}





// CH
$total_class_cs_20 =0;
$attendance_batch_cs_20_P = 0;
$attendance_batch_cs_20_A = 0;
for($i=0;$i<sizeof($dept_cs_20_ids);$i++){
    $period_id = $dept_cs_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'cs_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_cs_20 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_cs_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_cs_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_cs_20_T = $attendance_batch_cs_20_A + $attendance_batch_cs_20_P;
if($attendance_batch_cs_20_T){
    $attendance_batch_cs_20_PER =  round(($attendance_batch_cs_20_P/$attendance_batch_cs_20_T)*100);
}
else{
    $attendance_batch_cs_20_PER = 0;
}





































// CH
$total_class_ch_17 = 0;
$attendance_batch_ch_17_P = 0;
$attendance_batch_ch_17_A = 0;
for($i=0;$i<sizeof($dept_ch_17_ids);$i++){
    $period_id = $dept_ch_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ch_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ch_17 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ch_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ch_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ch_17_T = $attendance_batch_ch_17_A + $attendance_batch_ch_17_P;
if($attendance_batch_ch_17_T){
    $attendance_batch_ch_17_PER =  round(($attendance_batch_ch_17_P/$attendance_batch_ch_17_T)*100);
}
else{
    $attendance_batch_ch_17_PER = 0;
}



// CH
$total_class_ch_18 = 0;
$attendance_batch_ch_18_P = 0;
$attendance_batch_ch_18_A = 0;
for($i=0;$i<sizeof($dept_ch_18_ids);$i++){
    $period_id = $dept_ch_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ch_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ch_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ch_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ch_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ch_18_T = $attendance_batch_ch_18_A + $attendance_batch_ch_18_P;
if($attendance_batch_ch_18_T){
    $attendance_batch_ch_18_PER =  round(($attendance_batch_ch_18_P/$attendance_batch_ch_18_T)*100);
}
else{
    $attendance_batch_ch_18_PER = 0;
}





// CH

$total_class_ch_19 = 0;
$attendance_batch_ch_19_P = 0;
$attendance_batch_ch_19_A = 0;
for($i=0;$i<sizeof($dept_ch_19_ids);$i++){
    $period_id = $dept_ch_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ch_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            
$total_class_ch_19 += 1;
            
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ch_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ch_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ch_19_T = $attendance_batch_ch_19_A + $attendance_batch_ch_19_P;
if($attendance_batch_ch_19_T){
    $attendance_batch_ch_19_PER =  round(($attendance_batch_ch_19_P/$attendance_batch_ch_19_T)*100);
}
else{
    $attendance_batch_ch_19_PER = 0;
}





// CH
$total_class_ch_20 = 0;
$attendance_batch_ch_20_P = 0;
$attendance_batch_ch_20_A = 0;
for($i=0;$i<sizeof($dept_ch_20_ids);$i++){
    $period_id = $dept_ch_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ch_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ch_20 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ch_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ch_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ch_20_T = $attendance_batch_ch_20_A + $attendance_batch_ch_20_P;
if($attendance_batch_ch_20_T){
    $attendance_batch_ch_20_PER =  round(($attendance_batch_ch_20_P/$attendance_batch_ch_20_T)*100);
}
else{
    $attendance_batch_ch_20_PER = 0;
}

















































// ar
$total_class_ar_17 = 0;
$attendance_batch_ar_17_P = 0;
$attendance_batch_ar_17_A = 0;
for($i=0;$i<sizeof($dept_ar_17_ids);$i++){
    $period_id = $dept_ar_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ar_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ar_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ar_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ar_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ar_17_T = $attendance_batch_ar_17_A + $attendance_batch_ar_17_P;
if($attendance_batch_ar_17_T){
    $attendance_batch_ar_17_PER =  round(($attendance_batch_ar_17_P/$attendance_batch_ar_17_T)*100);
}
else{
    $attendance_batch_ar_17_PER = 0;
}







   
// ar
$total_class_ar_18 = 0;
$attendance_batch_ar_18_P = 0;
$attendance_batch_ar_18_A = 0;
for($i=0;$i<sizeof($dept_ar_18_ids);$i++){
    $period_id = $dept_ar_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ar_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ar_18 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ar_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ar_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ar_18_T = $attendance_batch_ar_18_A + $attendance_batch_ar_18_P;
if($attendance_batch_ar_18_T){
    $attendance_batch_ar_18_PER =  round(($attendance_batch_ar_18_P/$attendance_batch_ar_18_T)*100);
}
else{
    $attendance_batch_ar_18_PER = 0;
}







   
// ar
$total_class_ar_19 = 0;
$attendance_batch_ar_19_P = 0;
$attendance_batch_ar_19_A = 0;
for($i=0;$i<sizeof($dept_ar_19_ids);$i++){
    $period_id = $dept_ar_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ar_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $total_class_ar_19 +=1;
            $lecture_id = $row['lecture_id'];
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ar_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ar_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ar_19_T = $attendance_batch_ar_19_A + $attendance_batch_ar_19_P;
if($attendance_batch_ar_19_T){
    $attendance_batch_ar_19_PER =  round(($attendance_batch_ar_19_P/$attendance_batch_ar_19_T)*100);
}
else{
    $attendance_batch_ar_19_PER = 0;
}





   
// ar
$attendance_batch_ar_20_P = 0;
$total_class_ar_20 = 0;
$attendance_batch_ar_20_A = 0;
for($i=0;$i<sizeof($dept_ar_20_ids);$i++){
    $period_id = $dept_ar_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ar_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ar_20 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ar_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ar_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ar_20_T = $attendance_batch_ar_20_A + $attendance_batch_ar_20_P;
if($attendance_batch_ar_20_T){
    $attendance_batch_ar_20_PER =  round(($attendance_batch_ar_20_P/$attendance_batch_ar_20_T)*100);
}
else{
    $attendance_batch_ar_20_PER = 0;
}







   











// ee
$total_class_ee_17 = 0;
$attendance_batch_ee_17_P = 0;
$attendance_batch_ee_17_A = 0;
for($i=0;$i<sizeof($dept_ee_17_ids);$i++){
    $period_id = $dept_ee_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ee_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ee_17 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ee_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ee_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ee_17_T = $attendance_batch_ee_17_A + $attendance_batch_ee_17_P;
if($attendance_batch_ee_17_T){
    $attendance_batch_ee_17_PER =  round(($attendance_batch_ee_17_P/$attendance_batch_ee_17_T)*100);
}
else{
    $attendance_batch_ee_17_PER = 0;
}




// ee
$total_class_ee_18 = 0;
$attendance_batch_ee_18_P = 0;
$attendance_batch_ee_18_A = 0;
for($i=0;$i<sizeof($dept_ee_18_ids);$i++){
    $period_id = $dept_ee_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ee_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ee_18 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ee_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ee_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ee_18_T = $attendance_batch_ee_18_A + $attendance_batch_ee_18_P;
if($attendance_batch_ee_18_T){
    $attendance_batch_ee_18_PER =  round(($attendance_batch_ee_18_P/$attendance_batch_ee_18_T)*100);
}
else{
    $attendance_batch_ee_18_PER = 0;
}







// ee
$total_class_ee_19 = 0;
$attendance_batch_ee_19_P = 0;
$attendance_batch_ee_19_A = 0;
for($i=0;$i<sizeof($dept_ee_19_ids);$i++){
    $period_id = $dept_ee_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ee_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ee_19 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ee_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ee_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ee_19_T = $attendance_batch_ee_19_A + $attendance_batch_ee_19_P;
if($attendance_batch_ee_19_T){
    $attendance_batch_ee_19_PER =  round(($attendance_batch_ee_19_P/$attendance_batch_ee_19_T)*100);
}
else{
    $attendance_batch_ee_19_PER = 0;
}





// ee
$total_class_ee_20 = 0;
$attendance_batch_ee_20_P = 0;
$attendance_batch_ee_20_A = 0;
for($i=0;$i<sizeof($dept_ee_20_ids);$i++){
    $period_id = $dept_ee_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'ee_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_ee_20 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_ee_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_ee_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_ee_20_T = $attendance_batch_ee_20_A + $attendance_batch_ee_20_P;
if($attendance_batch_ee_20_T){
    $attendance_batch_ee_20_PER =  round(($attendance_batch_ee_20_P/$attendance_batch_ee_20_T)*100);
}
else{
    $attendance_batch_ee_20_PER = 0;
}











// es
$total_class_es_17 = 0;
$attendance_batch_es_17_P = 0;
$attendance_batch_es_17_A = 0;
for($i=0;$i<sizeof($dept_es_17_ids);$i++){
    $period_id = $dept_es_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'es_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_es_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_es_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_es_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_es_17_T = $attendance_batch_es_17_A + $attendance_batch_es_17_P;
if($attendance_batch_es_17_T){
    $attendance_batch_es_17_PER =  round(($attendance_batch_es_17_P/$attendance_batch_es_17_T)*100);
}
else{
    $attendance_batch_es_17_PER = 0;
}


// es
$total_class_es_18 = 0;
$attendance_batch_es_18_P = 0;
$attendance_batch_es_18_A = 0;
for($i=0;$i<sizeof($dept_es_18_ids);$i++){
    $period_id = $dept_es_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'es_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_es_18 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_es_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_es_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_es_18_T = $attendance_batch_es_18_A + $attendance_batch_es_18_P;
if($attendance_batch_es_18_T){
    $attendance_batch_es_18_PER =  round(($attendance_batch_es_18_P/$attendance_batch_es_18_T)*100);
}
else{
    $attendance_batch_es_18_PER = 0;
}

// es
$total_class_es_19 = 0;
$attendance_batch_es_19_P = 0;
$attendance_batch_es_19_A = 0;
for($i=0;$i<sizeof($dept_es_19_ids);$i++){
    $period_id = $dept_es_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'es_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_es_19 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_es_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_es_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_es_19_T = $attendance_batch_es_19_A + $attendance_batch_es_19_P;
if($attendance_batch_es_19_T){
    $attendance_batch_es_19_PER =  round(($attendance_batch_es_19_P/$attendance_batch_es_19_T)*100);
}
else{
    $attendance_batch_es_19_PER = 0;
}

// es
$total_class_es_20 = 0;
$attendance_batch_es_20_P = 0;
$attendance_batch_es_20_A = 0;
for($i=0;$i<sizeof($dept_es_20_ids);$i++){
    $period_id = $dept_es_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'es_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_es_20 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_es_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_es_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_es_20_T = $attendance_batch_es_20_A + $attendance_batch_es_20_P;
if($attendance_batch_es_20_T){
    $attendance_batch_es_20_PER =  round(($attendance_batch_es_20_P/$attendance_batch_es_20_T)*100);
}
else{
    $attendance_batch_es_20_PER = 0;
}
























// in
$total_class_in_17 = 0;
$attendance_batch_in_17_P = 0;
$attendance_batch_in_17_A = 0;
for($i=0;$i<sizeof($dept_in_17_ids);$i++){
    $period_id = $dept_in_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'in_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_in_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_in_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_in_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_in_17_T = $attendance_batch_in_17_A + $attendance_batch_in_17_P;
if($attendance_batch_in_17_T){
    $attendance_batch_in_17_PER =  round(($attendance_batch_in_17_P/$attendance_batch_in_17_T)*100);
}
else{
    $attendance_batch_in_17_PER = 0;
}
// in

$total_class_in_18 = 0;
$attendance_batch_in_18_P = 0;
$attendance_batch_in_18_A = 0;
for($i=0;$i<sizeof($dept_in_18_ids);$i++){
    $period_id = $dept_in_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'in_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_in_18 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_in_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_in_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_in_18_T = $attendance_batch_in_18_A + $attendance_batch_in_18_P;
if($attendance_batch_in_18_T){
    $attendance_batch_in_18_PER =  round(($attendance_batch_in_18_P/$attendance_batch_in_18_T)*100);
}
else{
    $attendance_batch_in_18_PER = 0;
}
// in

$total_class_in_19 = 0;
$attendance_batch_in_19_P = 0;
$attendance_batch_in_19_A = 0;
for($i=0;$i<sizeof($dept_in_19_ids);$i++){
    $period_id = $dept_in_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'in_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_in_19 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_in_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_in_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_in_19_T = $attendance_batch_in_19_A + $attendance_batch_in_19_P;
if($attendance_batch_in_19_T){
    $attendance_batch_in_19_PER =  round(($attendance_batch_in_19_P/$attendance_batch_in_19_T)*100);
}
else{
    $attendance_batch_in_19_PER = 0;
}




// in
$total_class_in_20 = 0;
$attendance_batch_in_20_P = 0;
$attendance_batch_in_20_A = 0;
for($i=0;$i<sizeof($dept_in_20_ids);$i++){
    $period_id = $dept_in_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'in_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_in_20 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_in_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_in_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_in_20_T = $attendance_batch_in_20_A + $attendance_batch_in_20_P;
if($attendance_batch_in_20_T){
    $attendance_batch_in_20_PER =  round(($attendance_batch_in_20_P/$attendance_batch_in_20_T)*100);
}
else{
    $attendance_batch_in_20_PER = 0;
}














// mm
$total_class_mm_17 = 0;
$attendance_batch_mm_17_P = 0;
$attendance_batch_mm_17_A = 0;
for($i=0;$i<sizeof($dept_mm_17_ids);$i++){
    $period_id = $dept_mm_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'mm_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_mm_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_mm_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_mm_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_mm_17_T = $attendance_batch_mm_17_A + $attendance_batch_mm_17_P;
if($attendance_batch_mm_17_T){
    $attendance_batch_mm_17_PER =  round(($attendance_batch_mm_17_P/$attendance_batch_mm_17_T)*100);
}
else{
    $attendance_batch_mm_17_PER = 0;
}

// mm
$total_class_mm_18 = 0;
$attendance_batch_mm_18_P = 0;
$attendance_batch_mm_18_A = 0;
for($i=0;$i<sizeof($dept_mm_18_ids);$i++){
    $period_id = $dept_mm_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'mm_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_mm_18 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_mm_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_mm_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_mm_18_T = $attendance_batch_mm_18_A + $attendance_batch_mm_18_P;
if($attendance_batch_mm_18_T){
    $attendance_batch_mm_18_PER =  round(($attendance_batch_mm_18_P/$attendance_batch_mm_18_T)*100);
}
else{
    $attendance_batch_mm_18_PER = 0;
}

// mm
$total_class_mm_19 = 0;
$attendance_batch_mm_19_P = 0;
$attendance_batch_mm_19_A = 0;
for($i=0;$i<sizeof($dept_mm_19_ids);$i++){
    $period_id = $dept_mm_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'mm_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_mm_19 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_mm_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_mm_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_mm_19_T = $attendance_batch_mm_19_A + $attendance_batch_mm_19_P;
if($attendance_batch_mm_19_T){
    $attendance_batch_mm_19_PER =  round(($attendance_batch_mm_19_P/$attendance_batch_mm_19_T)*100);
}
else{
    $attendance_batch_mm_19_PER = 0;
}

// mm
$total_class_mm_20 = 0;
$attendance_batch_mm_20_P = 0;
$attendance_batch_mm_20_A = 0;
for($i=0;$i<sizeof($dept_mm_20_ids);$i++){
    $period_id = $dept_mm_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'mm_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_mm_20 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_mm_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_mm_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_mm_20_T = $attendance_batch_mm_20_A + $attendance_batch_mm_20_P;
if($attendance_batch_mm_20_T){
    $attendance_batch_mm_20_PER =  round(($attendance_batch_mm_20_P/$attendance_batch_mm_20_T)*100);
}
else{
    $attendance_batch_mm_20_PER = 0;
}





// pg
$total_class_pg_17 = 0;
$attendance_batch_pg_17_P = 0;
$attendance_batch_pg_17_A = 0;
for($i=0;$i<sizeof($dept_pg_17_ids);$i++){
    $period_id = $dept_pg_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'pg_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_pg_17 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_pg_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_pg_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_pg_17_T = $attendance_batch_pg_17_A + $attendance_batch_pg_17_P;
if($attendance_batch_pg_17_T){
    $attendance_batch_pg_17_PER =  round(($attendance_batch_pg_17_P/$attendance_batch_pg_17_T)*100);
}
else{
    $attendance_batch_pg_17_PER = 0;
}







$total_class_pg_18 = 0;
$attendance_batch_pg_18_P = 0;
$attendance_batch_pg_18_A = 0;
for($i=0;$i<sizeof($dept_pg_18_ids);$i++){
    $period_id = $dept_pg_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'pg_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_pg_18 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_pg_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_pg_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_pg_18_T = $attendance_batch_pg_18_A + $attendance_batch_pg_18_P;
if($attendance_batch_pg_18_T){
    $attendance_batch_pg_18_PER =  round(($attendance_batch_pg_18_P/$attendance_batch_pg_18_T)*100);
}
else{
    $attendance_batch_pg_18_PER = 0;
}




$total_class_pg_19 = 0;
$attendance_batch_pg_19_P = 0;
$attendance_batch_pg_19_A = 0;
for($i=0;$i<sizeof($dept_pg_19_ids);$i++){
    $period_id = $dept_pg_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'pg_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_pg_19 +=1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_pg_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_pg_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_pg_19_T = $attendance_batch_pg_19_A + $attendance_batch_pg_19_P;
if($attendance_batch_pg_19_T){
    $attendance_batch_pg_19_PER =  round(($attendance_batch_pg_19_P/$attendance_batch_pg_19_T)*100);
}
else{
    $attendance_batch_pg_19_PER = 0;
}







$total_class_pg_20 = 0;
$attendance_batch_pg_20_P = 0;
$attendance_batch_pg_20_A = 0;
for($i=0;$i<sizeof($dept_pg_20_ids);$i++){
    $period_id = $dept_pg_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'pg_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_pg_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_pg_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_pg_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_pg_20_T = $attendance_batch_pg_20_A + $attendance_batch_pg_20_P;
if($attendance_batch_pg_20_T){
    $attendance_batch_pg_20_PER =  round(($attendance_batch_pg_20_P/$attendance_batch_pg_20_T)*100);
}
else{
    $attendance_batch_pg_20_PER = 0;
}









// te
$total_class_te_17 = 0;
$attendance_batch_te_17_P = 0;
$attendance_batch_te_17_A = 0;
for($i=0;$i<sizeof($dept_te_17_ids);$i++){
    $period_id = $dept_te_17_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'te_17_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_te_17 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_te_17_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_te_17_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_te_17_T = $attendance_batch_te_17_A + $attendance_batch_te_17_P;
if($attendance_batch_te_17_T){
    $attendance_batch_te_17_PER =  round(($attendance_batch_te_17_P/$attendance_batch_te_17_T)*100);
}
else{
    $attendance_batch_te_17_PER = 0;
}



$total_class_te_18 = 0;
$attendance_batch_te_18_P = 0;
$attendance_batch_te_18_A = 0;
for($i=0;$i<sizeof($dept_te_18_ids);$i++){
    $period_id = $dept_te_18_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'te_18_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_te_18 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_te_18_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_te_18_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_te_18_T = $attendance_batch_te_18_A + $attendance_batch_te_18_P;
if($attendance_batch_te_18_T){
    $attendance_batch_te_18_PER =  round(($attendance_batch_te_18_P/$attendance_batch_te_18_T)*100);
}
else{
    $attendance_batch_te_18_PER = 0;
}



$total_class_te_19 = 0;
$attendance_batch_te_19_P = 0;
$attendance_batch_te_19_A = 0;
for($i=0;$i<sizeof($dept_te_19_ids);$i++){
    $period_id = $dept_te_19_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'te_19_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_te_19 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_te_19_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_te_19_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_te_19_T = $attendance_batch_te_19_A + $attendance_batch_te_19_P;
if($attendance_batch_te_19_T){
    $attendance_batch_te_19_PER =  round(($attendance_batch_te_19_P/$attendance_batch_te_19_T)*100);
}
else{
    $attendance_batch_te_19_PER = 0;
}



$total_class_te_20 = 0;
$attendance_batch_te_20_P = 0;
$attendance_batch_te_20_A = 0;
for($i=0;$i<sizeof($dept_te_20_ids);$i++){
    $period_id = $dept_te_20_ids[$i];
    $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
    while($row = mysqli_fetch_assoc($subject_id_get)){
        $subject_id = $row['subject_id']; 
        $table_name = 'te_20_'.$subject_id.'_attendance';
        $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
        while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
            $lecture_id = $row['lecture_id'];
            $total_class_te_20 += 1;
            for($k=1;$k<121;$k++){
                $roll = 'a'.$k;
            $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
            while($row = mysqli_fetch_assoc($get_attendance)){
                $status = $row[$roll];
                $status = strtolower($status);
                if($status == 'present' || $status == 'p'){
                    $attendance_batch_te_20_P +=1;
                }
                if($status == 'absent' || $status == 'a'){
                    $attendance_batch_te_20_A +=1;
                }
            }    
        }
    }
}
}
$attendance_batch_te_20_T = $attendance_batch_te_20_A + $attendance_batch_te_20_P;
if($attendance_batch_te_20_T){
    $attendance_batch_te_20_PER =  round(($attendance_batch_te_20_P/$attendance_batch_te_20_T)*100);
}
else{
    $attendance_batch_te_20_PER = 0;
}





// TOTALLING




$attendance_batch_17_PER = (
$attendance_batch_in_17_PER +
$attendance_batch_ar_17_PER+
$attendance_batch_cs_17_PER +
$attendance_batch_ch_17_PER+
$attendance_batch_ee_17_PER +
$attendance_batch_es_17_PER+
$attendance_batch_pg_17_PER +
$attendance_batch_mm_17_PER+
$attendance_batch_te_17_PER)/9;


$attendance_batch_18_PER = (
    $attendance_batch_in_18_PER +
    $attendance_batch_ar_18_PER+
    $attendance_batch_cs_18_PER +
    $attendance_batch_ch_18_PER+
    $attendance_batch_ee_18_PER +
    $attendance_batch_es_18_PER+
    $attendance_batch_pg_18_PER +
    $attendance_batch_mm_18_PER+
    $attendance_batch_te_18_PER)/9;


    
$attendance_batch_19_PER = (
    $attendance_batch_in_19_PER +
    $attendance_batch_ar_19_PER+
    $attendance_batch_cs_19_PER +
    $attendance_batch_ch_19_PER+
    $attendance_batch_ee_19_PER +
    $attendance_batch_es_19_PER+
    $attendance_batch_pg_19_PER +
    $attendance_batch_mm_19_PER+
    $attendance_batch_te_19_PER)/9;


    
$attendance_batch_20_PER = (
    $attendance_batch_in_20_PER +
    $attendance_batch_ar_20_PER+
    $attendance_batch_cs_20_PER +
    $attendance_batch_ch_20_PER+
    $attendance_batch_ee_20_PER +
    $attendance_batch_es_20_PER+
    $attendance_batch_pg_20_PER +
    $attendance_batch_mm_20_PER+
    $attendance_batch_te_20_PER)/9;

$attendance_total_uni = ($attendance_batch_17_PER+$attendance_batch_18_PER+$attendance_batch_19_PER+$attendance_batch_20_PER)/4;


$total_classes_te = $total_class_te_17 + $total_class_te_18 + $total_class_te_19 + $total_class_te_20;
$total_classes_cs = $total_class_cs_17 + $total_class_cs_18 + $total_class_cs_19 + $total_class_cs_20;
$total_classes_ch = $total_class_ch_17 + $total_class_ch_18 + $total_class_ch_19 + $total_class_ch_20;

$total_classes_ee = $total_class_ee_17 + $total_class_ee_18 + $total_class_ee_19 + $total_class_ee_20;
$total_classes_mm = $total_class_mm_17 + $total_class_mm_18 + $total_class_mm_19 + $total_class_mm_20;
$total_classes_in = $total_class_in_17 + $total_class_in_18 + $total_class_in_19 + $total_class_in_20;

$total_classes_pg = $total_class_pg_17 + $total_class_pg_18 + $total_class_pg_19 + $total_class_pg_20;
$total_classes_es = $total_class_es_17 + $total_class_es_18 + $total_class_es_19 + $total_class_es_20;
$total_classes_ar = $total_class_ar_17 + $total_class_ar_18 + $total_class_ar_19 + $total_class_ar_20;

$total_classes = 
$total_classes_ch+
$total_classes_cs+
$total_classes_es+
$total_classes_te+
$total_classes_pg+
$total_classes_ar+
$total_classes_in+
$total_classes_mm+
$total_classes_ee;



$get_period_id = mysqli_query($con,"SELECT distinct `period_name_id`,`lecture_date` FROM `lecture_details` WHERE 1 order by lecture_date ASC");
    while($row = mysqli_fetch_array($get_period_id)){
        $period_name_id = $row['period_name_id'];
        $lecture_date = $row['lecture_date'];
    }


    $period_id_list_last = [];
    $lecture_id_last = []; 
    $get_period_id = mysqli_query($con,"SELECT distinct `period_name_id`FROM `lecture_details` WHERE lecture_date = '$lecture_date'");
    while($row = mysqli_fetch_array($get_period_id)){
        $period_name_id = $row['period_name_id'];
        array_push($period_id_list_last,$period_name_id);       
    }
    for($i = 0;$i<sizeof($period_id_list_last);$i++){
        $period_name_id = $period_id_list_last[$i];
        $get_lecture_id = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_name_id' and lecture_date = '$lecture_date'");
        while($row = mysqli_fetch_array($get_lecture_id)){
            $lecture_id = $row['lecture_id'];
            array_push($lecture_id_last,$lecture_id);       
        }
    }
    





    // ////////////////////////////////////////////////////////////////////////////////////////
$present_last=1;
$absent_last=1;
$number_of_classes_last= 0;
for($i = 0 ;$i<sizeof($lecture_id_last);$i++){
$lecture_id = $lecture_id_last[$i];
// echo $lecture_id;
$get_period_id = mysqli_query($con,"SELECT `period_name_id` FROM `lecture_details` WHERE lecture_id = '$lecture_id' order by lecture_id ASC");
while($row = mysqli_fetch_array($get_period_id)){
    $period_name_id = $row['period_name_id'];
    $get_extra_info = mysqli_query($con,"SELECT  `dept_id`,  `batch_id`, `subject_id` FROM `period_table` WHERE period_table_id = '$period_name_id' ");
    while($row = mysqli_fetch_array($get_extra_info)){
        $dept_id = $row['dept_id'];$batch_id = $row['batch_id'];$subject_id = $row['subject_id'];
            $get_batch_info = mysqli_query($con,"SELECT  `batch_name` FROM `batch` WHERE batch_id = '$batch_id' ");
            while($row = mysqli_fetch_array($get_batch_info)){
                $batch_name = $row['batch_name'];
            }
            $batch_na = explode ("-",$batch_name);
            $batch_name = $batch_na[1]; 
            $table_attendance_name =  $dept_id."_".$batch_name."_".$subject_id."_attendance";
            $number_of_classes_last = $number_of_classes_last +1;
                for($j=1;$j<121;$j++){
                        $b= "a".(string)$j;
                        $get_attendance = mysqli_query($con,"SELECT $b FROM `$table_attendance_name` WHERE lecture_id = '$lecture_id'");
                        while($row = mysqli_fetch_array($get_attendance)){
                            $status = $row[$b];
                            $status = strtolower($status);
                            if($status == "present" ||$status == "p"  ){
                                $present_last = $present_last + 1;
                                
                            }
                            else if($status == "absent" || $status == "a" ){
                                $absent_last = $absent_last +1;
                            }
                        }
                        $b= "";
                    }
    }
}
}
if($present_last>1){
    $present_last = $present_last -1;
}
else{
    $lecture_date = "0000-00-00";
}
if($absent_last>1){
    $absent_last = $absent_last -1;
}
$total_last = $present_last + $absent_last;
$present_last_percent = ($present_last/$total_last)*100;
$present_last_percent =  round($present_last_percent);
$absent_last_percent = 100 - $present_last_percent;

// ///////////////////////////////////////////////////////////////////////////////////
$lecture_id_arr_lastweek = [];
$period_ids = [];
$get_period_id = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE 1");
while($row = mysqli_fetch_array($get_period_id)){
    $period_table_id = $row['period_table_id'];
    array_push($period_ids,$period_table_id);
}  
$date = date('Y-m-d');
    $lecture_id_arr_lastmonth = [];

    for($i = 0; $i<sizeof($period_ids);$i++){
                    $period_table_id = $period_ids[$i];
                    // echo $period_table_id;
                    $get_lecture_id = mysqli_query($con,"SELECT `lecture_id`,`lecture_date` FROM `lecture_details` WHERE period_name_id = '$period_table_id' order by lecture_id ASC");
                    while($row = mysqli_fetch_array($get_lecture_id)){
                        $lecture_id = $row['lecture_id'];
                        $lecture_date = $row['lecture_date'];
                        $datetime1 = date_create($lecture_date);
                        $datetime2 = date_create($date);
                        $interval = date_diff($datetime2, $datetime1); 
                        $interva =  $interval->format('%a') . "\n";
                        $interva = (int)$interva;
                        if($interva < 7){                         
                            array_push($lecture_id_arr_lastweek,$lecture_id);       
                            } 
                        if($interva < 30){                         
                            array_push($lecture_id_arr_lastmonth,$lecture_id);       
                            }
                        // array_push($lecture_id_arr,$lecture_id);       
                            
                
            }
           

}
$present_lastmonth=1;
$absent_lastmonth=1;
$number_of_classes_lastmonth= 0;
for($i = 0 ;$i<sizeof($lecture_id_arr_lastmonth);$i++){
$lecture_id = $lecture_id_arr_lastmonth[$i];
// echo $lecture_id;
$get_period_id = mysqli_query($con,"SELECT `period_name_id` FROM `lecture_details` WHERE lecture_id = '$lecture_id' order by lecture_id ASC");
while($row = mysqli_fetch_array($get_period_id)){
    $period_name_id = $row['period_name_id'];
    $get_extra_info = mysqli_query($con,"SELECT  `dept_id`,  `batch_id`, `subject_id` FROM `period_table` WHERE period_table_id = '$period_name_id' ");
    while($row = mysqli_fetch_array($get_extra_info)){
        $dept_id = $row['dept_id'];$batch_id = $row['batch_id'];$subject_id = $row['subject_id'];
            $get_batch_info = mysqli_query($con,"SELECT  `batch_name` FROM `batch` WHERE batch_id = '$batch_id' ");
            while($row = mysqli_fetch_array($get_batch_info)){
                $batch_name = $row['batch_name'];
            }
            $batch_na = explode ("-",$batch_name);
            $batch_name = $batch_na[1]; 
            $table_attendance_name =  $dept_id."_".$batch_name."_".$subject_id."_attendance";
            $number_of_classes_lastmonth = $number_of_classes_lastmonth +1;
                for($j=1;$j<121;$j++){
                        $b= "a".(string)$j;
                        $get_attendance = mysqli_query($con,"SELECT $b FROM `$table_attendance_name` WHERE lecture_id = '$lecture_id'");
                        while($row = mysqli_fetch_array($get_attendance)){
                            $status = $row[$b];
                            $status = strtolower($status);
                            if($status == "present" ||$status == "p"  ){
                                $present_lastmonth = $present_lastmonth +1;
                            }
                            else if($status == "absent" || $status == "a" ){
                                $absent_lastmonth = $absent_lastmonth +1;
                            }
                        }
                        $b= "";
                    }
    }
}


}
$total_lastmonth = $present_lastmonth + $absent_lastmonth;
$present_lastmonth_percent = ($present_lastmonth/$total_lastmonth)*100;
$present_lastmonth_percent =  round($present_lastmonth_percent);
$absent_lastmonth_percent = 100 - $present_lastmonth_percent;

////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////



$present_lastweek=1;
$absent_lastweek=1;
$number_of_classes_lastweek= 0;
for($i = 0 ;$i<sizeof($lecture_id_arr_lastweek);$i++){
$lecture_id = $lecture_id_arr_lastweek[$i];
// echo $lecture_id;
$get_period_id = mysqli_query($con,"SELECT `period_name_id` FROM `lecture_details` WHERE lecture_id = '$lecture_id' order by lecture_id ASC");
while($row = mysqli_fetch_array($get_period_id)){
    $period_name_id = $row['period_name_id'];
    $get_extra_info = mysqli_query($con,"SELECT  `dept_id`,  `batch_id`, `subject_id` FROM `period_table` WHERE period_table_id = '$period_name_id' ");
    while($row = mysqli_fetch_array($get_extra_info)){
        $dept_id = $row['dept_id'];$batch_id = $row['batch_id'];$subject_id = $row['subject_id'];
            $get_batch_info = mysqli_query($con,"SELECT  `batch_name` FROM `batch` WHERE batch_id = '$batch_id' ");
            while($row = mysqli_fetch_array($get_batch_info)){
                $batch_name = $row['batch_name'];
            }
            $batch_na = explode ("-",$batch_name);
            $batch_name = $batch_na[1]; 
            $table_attendance_name =  $dept_id."_".$batch_name."_".$subject_id."_attendance";
            $number_of_classes_lastweek = $number_of_classes_lastweek +1;
                for($j=1;$j<121;$j++){
                        $b= "a".(string)$j;
                        $get_attendance = mysqli_query($con,"SELECT $b FROM `$table_attendance_name` WHERE lecture_id = '$lecture_id'");
                        while($row = mysqli_fetch_array($get_attendance)){
                            $status = $row[$b];
                            $status = strtolower($status);
                            if($status == "present" ||$status == "p"  ){
                                $present_lastweek = $present_lastweek +1;
                            }
                            else if($status == "absent" || $status == "a" ){
                                $absent_lastweek = $absent_lastweek +1;
                            }
                        }
                        $b= "";
                    }
    }
}


}
$total_lastweek = $present_lastweek + $absent_lastweek;
$present_lastweek_percent = ($present_lastweek/$total_lastweek)*100;
$present_lastweek_percent =  round($present_lastweek_percent);
$absent_lastweek_percent = 100 - $present_lastweek_percent;

































?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assests/style/dashboard-index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar " id="sidebar">
            <div class="sidebar-inner " id="sidebar-inner">
                <p>D.A.M.S</p>
                <hr>
                <div class="row-sidebar profile">
                    <i class="far fa-user-circle icon-sidebar"></i>
                    <div class="row-sidebar-text name-bar ">
                        Engr. Fahad Iqbal
                    </div>
                </div>
                <div id="drop-down-profile"class="row-sidebar-profile">
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                           View Profile
                        </div>
                    </div>
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                           Change Password
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row-sidebar selected-sidebar">
                    <i class="fas fa-university icon-sidebar "></i>
                    <div class="row-sidebar-text ">
                        Overall Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-building icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Department Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-users icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Batch Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-user-friends icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Class Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-book icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Subject Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-chart-line icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Class Conducted Statistics
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-user-tie icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Teacher Wise Attendance
                    </div>
                </div>

                <div class="row-sidebar">
                    <i class="fas fa-download icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        PDF Report Download
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-sign-out-alt icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                      Logout
                    </div>
                </div>
               

            </div>











        </div>
        <div class="dashboard-inner " id="main-bar">
            <div class="floating-menu">
                <button id="floating">X</button>
            </div>

            <div class="dashboard-inner-teacher-top">
                <h2>Batch's Progress</h2>
            </div>



            <!-- batch selection -->
            <div class="dashboard-inner-teacher" >
                <div class="dit-heading">
                    <table>
                        <tr>
                            <td>
                                <h3 id='d'>Select Department</h3>
                            </td>
                            <td>
                                <Select name="selectDeparta" id="selectDeparta">
                                 <?php $get_department_Q  = mysqli_query($con,"SELECT `dept_id`, `dept_name` FROM `department` WHERE 1");
   
                                  while($row = mysqli_fetch_assoc($get_department_Q)){
                                    $dept_id = $row['dept_id'];
                                    $dept_name = $row['dept_name'];
                                   ?>
                                   
                                   <option value="<?php echo $dept_id ?>" name="selectDeparta"><?php echo $dept_name ?></option>
                                   <?php
                                }

                                ?>
                                </Select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Select Batch</h3>
                            </td>
                            <td>
                                <Select id="select_batch" name='select_batch'>
                                    <?php

$get_batch_Q  = mysqli_query($con,"SELECT `batch_name`,`batch_id` FROM `batch` WHERE 1");
while($row = mysqli_fetch_assoc($get_batch_Q)){
    $batch_name = $row['batch_name'];
    $batch_id = $row['batch_id'];
    ?>
    <option value="<?php echo $row['batch_id']?>" name='select_batch'><?php echo $batch_name ?></option>
    <?php
 }

 ?>
                                </Select>
                            </td>
                        </tr>
                      
                    </table>
                </div>
            </div>

            <h2 id="best-batch-heading">
                Batch of the Week: <br>
                <span class="dit-best-span">
                20-August-2020 - 27-August-2020
                </span>
            </h2>

            <!-- best batch -->
            <div class="dit-best best-batch" id="best-batch-div">
                <h2 style="text-align: center; margin-bottom: 5px;">D-18</h2>
                <span style=" margin-bottom: 15px;">Computer System Department</span> 
                <hr>
                    <table class="ditb-record">
                        <tr>
                            <td>
                                <h3>
                                    Total Classes Scheduled
                                    <span class="dit-best-span">
                                        43
                                    </span>
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    Total Classes Conducted
                                    <span class="dit-best-span">
                                        43
                                    </span>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>
                                    Total Classes Missed
                                    <span class="dit-best-span">
                                        43
                                    </span>
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    Compensated Classes
                                    <span class="dit-best-span">
                                        43
                                    </span>
                                </h3>
                            </td>
                        </tr>
                    </table>
            </div>




            <!-- batch heading query -->
            <div id="batch-heading-cs-17">
                <h2 >
                    Record Updated uptil: 
                </h2>
                <span class="dit-best-span">
                    27-August-2020
                </span>
            </div>

            <!--  batch query-->
            <section id="batch-div-cs-17" style='display:none'>
                <div class="dit-best" >
                    <h2 style="text-align: center; margin-bottom: 5px;">D-17</h2>
                    <span style=" margin-bottom: 15px;">Computer System Department</span>
                    <hr> 
                    
                        <table class="ditb-record">
                            <tr>
                                <td>
                                    <h3>
                                        Total Classes Scheduled
                                        <span class="dit-best-span">
                                            43
                                        </span>
                                    </h3>
                                </td>
                                <td>
                                    <h3>
                                        Total Classes Conducted
                                        <span class="dit-best-span">
                                            43
                                        </span>
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>
                                        Total Classes Missed
                                        <span class="dit-best-span">
                                            43
                                        </span>
                                    </h3>
                                </td>
                                <td>
                                    <h3>
                                        Compensated Classes
                                        <span class="dit-best-span">
                                            43
                                        </span>
                                    </h3>
                                </td>
                            </tr>
                        </table>
                </div>
    
                <h2 class="ditb-status-heading">
                    Analysis of Progress
                </h2>
    
                <div class="ditb-status">                    
                    <div class="ditb-status-left">
                        <h2 id="ditbsl-percent">
                            75% 
                          
                        </h2>  
                        <span>
                            Classes Conducted
                        </span>
                    </div>
                    <div class="ditb-status-right">
                       <h2>
                            You Are Performing
                       </h2> <span>Better</span> 
                       <h2>
                           than average
                       </h2> 
                        <span>
                            <!-- <i class="fas fa-arrow-down"></i> -->
                            <i class="fas fa-arrow-up"></i>
                            9%
                        </span>
                    </div>
    
                </div>


                <h2 class="ditb-status-heading">
                    Periodic Statistics
                </h2>


                <div class="ditb-stats">
                    <div class="ditb-stats-graph">
                        <canvas id="batch_17"></canvas>
                        <h2>Batch 17</h2>
                    </div>
                    <div class="ditb-stats-graph ditb-stats-graph-border">
                        <canvas id="batch_18"></canvas>
                        <h2>Batch 18</h2>
                    </div>
                    <div class="ditb-stats-graph ditb-stats-graph-border">
                        <canvas id="batch_19"></canvas>
                        <h2>Batch 19</h2>
                    </div>
                    <div class="ditb-stats-graph ditb-stats-graph-border">
                        <canvas id="batch_20"></canvas>
                        <h2>Batch 20</h2>
                    </div>

                </div>
            </section>




        </div>

</body>
<style>
    #batch-div-cs-17{
    /* display: none; */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-es{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-ch{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-ar{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-ee{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-es{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-mm{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
#batch-div-in{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
    #batch-div-pg{
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width:100%;
}
</style>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>

<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="../assests/script/dashbaord.js"></script>

</html>
?>

<script>

$('#select_batch').change(function(){
    batch_id = $(this).val();
    dept_id = $('#selectDeparta').val();
    dept_show_d = dept_id + "-"+ batch_id;
    alert(dept_show_d);
        $('batch-heading-cs-17').css('display','none');
        $('batch-div-cs-17').css('display','none');
    switch(dept_show_d){
        case 'cs-1':
            $('batch-heading-cs-17').css('display','flex !important');
            $('batch-div-cs-17').css('display','flex !important');
        break;
    }
    // if (dept_show_d == 'cs-1'){
    //     $('batch-heading-cs-17').css('display','flex');
    //     $('batch-div-cs-17').css('display','flex');
    // }
    
    $('#best-batch-heading').css('display','none');
    $('#best-batch-div').css('display','none');
});

var c =  document.getElementById('ditbsl-percent').innerHTML;
c= parseInt(c);
if(c < 75){
    $('#ditbsl-percent').css('color','red');
}
else{
    $('#ditbsl-percent').css('color','green');
}







// Batch 17
var batch_17 = document.getElementById('batch_17').getContext('2d');
var chart = new Chart(batch_17, {
    // The type of chart we want to create
    type: 'doughnut',
    // The data for our dataset
    data: {
        labels: ["Present", "Absent"],
        datasets: [{
            label: "Batch 17",
            backgroundColor: [
                "#00ACFF", "#DBECF8"
            ],
            data: [54, 46],
        }]
    },

    // Configuration options go here
    options: {
      legend: {
            display: false,
        },
      tooltips: {
            enabled: true,
            mode: 'index',
           callbacks: {
            label: function (tooltipItems, data) {
                var i, label = [], l = data.datasets.length;
                for (i = 0; i < l; i += 1) {
                    label[i] = data.datasets[i].label + ': ' + data.datasets[i].data[tooltipItems.index] + '%';
                }
                return label;
            }
        }
      }
    }
});


// Batch 18
var batch_18 = document.getElementById('batch_18').getContext('2d');
var chart = new Chart(batch_18, {
    // The type of chart we want to create
    type: 'doughnut',
    // The data for our dataset
    data: {
        labels: ["Present", "Absent"],
        datasets: [{
            label: "Batch 18",
            backgroundColor: [
                "#00ACFF", "#DBECF8"
            ],
            data: [54, 46],
        }]
    },

    // Configuration options go here
    options: {
      legend: {
            display: false,
        },
      tooltips: {
            enabled: true,
            mode: 'index',
           callbacks: {
            label: function (tooltipItems, data) {
                var i, label = [], l = data.datasets.length;
                for (i = 0; i < l; i += 1) {
                    label[i] = data.datasets[i].label + ': ' + data.datasets[i].data[tooltipItems.index] + '%';
                }
                return label;
            }
        }
      }
    }
});



// Batch 19
var batch_19 = document.getElementById('batch_19').getContext('2d');
var chart = new Chart(batch_19, {
    // The type of chart we want to create
    type: 'doughnut',
    // The data for our dataset
    data: {
        labels: ["Present", "Absent"],
        datasets: [{
            label: "Batch 17",
            backgroundColor: [
                "#00ACFF", "#DBECF8"
            ],
            data: [54, 46],
        }]
    },

    // Configuration options go here
    options: {
      legend: {
            display: false,
        },
      tooltips: {
            enabled: true,
            mode: 'index',
           callbacks: {
            label: function (tooltipItems, data) {
                var i, label = [], l = data.datasets.length;
                for (i = 0; i < l; i += 1) {
                    label[i] = data.datasets[i].label + ': ' + data.datasets[i].data[tooltipItems.index] + '%';
                }
                return label;
            }
        }
      }
    }
});


// Batch 20
var batch_20 = document.getElementById('batch_20').getContext('2d');
var chart = new Chart(batch_20, {
    // The type of chart we want to create
    type: 'doughnut',
    // The data for our dataset
    data: {
        labels: ["Present", "Absent"],
        datasets: [{
            label: "Batch 18",
            backgroundColor: [
                "#00ACFF", "#DBECF8"
            ],
            data: [54, 46],
        }]
    },

    // Configuration options go here
    options: {
      legend: {
            display: false,
        },
      tooltips: {
            enabled: true,
            mode: 'index',
           callbacks: {
            label: function (tooltipItems, data) {
                var i, label = [], l = data.datasets.length;
                for (i = 0; i < l; i += 1) {
                    label[i] = data.datasets[i].label + ': ' + data.datasets[i].data[tooltipItems.index] + '%';
                }
                return label;
            }
        }
      }
    }
});

</script>

<?php } ?>