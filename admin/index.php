<!-- 
<?php 
 require_once('../connection.php');
 
//  getting the current term
 $getting_term  = mysqli_query($con,"SELECT `term_id`, `term_name` FROM `term` WHERE 1");
    while($row = mysqli_fetch_assoc($getting_term)){
        $term_id = $row['term_id'];
    }
    


    





    // getting all the dept and batch
    $getting_all_deptID = [];
    $getting_deptID  = mysqli_query($con,"SELECT `department_id` FROM `department` WHERE 1 ");
    while($row = mysqli_fetch_assoc($getting_deptID)){
        $department_id = $row['department_id'];
        array_push($getting_all_deptID,$department_id);
    }





    // predefined dept are 9
    

    
    // getting all the period id in this term(current session)
    // and filling them in their respective arrays
        


    // getting all the ids(related info dept) 
    function fill($dept,$t_id,$cn){
        // echo $dept,sizeof($arr),$t_id;
        $arr = '';
        $asds = [];
        $getting_PID  = mysqli_query($cn,"SELECT `period_id`,`dept_id`, `section`,  `term_id`,   `batch_id`,  `subject_id`  FROM `period_table_normal` WHERE dept_id = '$dept'");
        while($row = mysqli_fetch_assoc($getting_PID)){
            $data = $row['period_id']."_".$row['dept_id']."_".$row['batch_id']."_".$row['subject_id']."_".$row['term_id']."_".$row['section'];
            array_push($asds,$data);
        }
        return $asds;
    }
    
    
    // getting number of missed classes 
    function getting_missed($arr,$cn){
        $number_of_missed_classes = 0;
        foreach($arr as $idstring){
            $idarr = explode('_',$idstring);
            $id = $idarr[0];
            // echo $id;
            $getting_lectureID_missed  = mysqli_query($cn,"SELECT `lecture_id` FROM `lecture_details` WHERE period_id = '$id' and class_type = 'x'");
            while($row = mysqli_fetch_assoc($getting_lectureID_missed)){
                $number_of_missed_classes +=1;
                
            }

        }
        return $number_of_missed_classes;
    }







    // getting id
    $ar_id = fill('ar',$term_id,$con);
    $ch_id = fill('ch',$term_id,$con);
    $cs_id = fill('cs',$term_id,$con);
    $ee_id = fill('ee',$term_id,$con);
    $es_id = fill('es',$term_id,$con);
    $in_id = fill('in',$term_id,$con);
    $mm_id = fill('mm',$term_id,$con);
    $pg_id = fill('pg',$term_id,$con);
    $te_id = fill('te',$term_id,$con);
    // classes not conducted
    $ar_id_missed = getting_missed($ar_id,$con);
    $ch_id_missed = getting_missed($ch_id,$con);
    $cs_id_missed = getting_missed($cs_id,$con);
    $ee_id_missed = getting_missed($ee_id,$con);
    $es_id_missed = getting_missed($es_id,$con);
    $in_id_missed = getting_missed($in_id,$con);
    $mm_id_missed = getting_missed($mm_id,$con);
    $te_id_missed = getting_missed($te_id,$con);
    $pg_id_missed = getting_missed($pg_id,$con);






    // now getting all the attendance


    $total_present = 0;
    $total_absent = 0;



    foreach($cs_id as $idstring){
        $idarr = explode('_',$idstring);
        $id = $idarr[0];
        $lecture_id = [];
        $get_lecture_ids = mysqli_query($con,"SELECT `lecture_id` from `lecture_details` where period_id = '$id'");
        while($row = mysqli_fetch_assoc($get_lecture_ids)){
        $id_lecture = $row['lecture_id'];
        array_push($lecture_id,$id_lecture);
        }
        $id_details = $id."_";
        $id_details_get = explode($id_details,$idstring);
        $table_name = $id_details_get[1]."_attendance";
        foreach($lecture_id as $l_id){
            for($i=1;$i<151;$i++){
                $roll_number = 'a'.(string)$i;
                $get_present = mysqli_query($con,"SELECT `$roll_number` from `$table_name` where lecture_id = '$l_id'");
                while($row = mysqli_fetch_assoc($get_present)){
                    
                    if($row[$roll_number]== "present"){
                        $total_present += 1;
                    }
                    if($row[$roll_number]== "absent"){
                        $total_absent += 1;
                    }        
                }
            }
        }
        

    }

    $total = $total_present + $total_absent;
    echo ($total_present/$total)*100;









    





    // $getting_lectureID_missed  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_id = '1' and class_type = 'x'");
    // while($row = mysqli_fetch_assoc($getting_lectureID_missed)){
    //     echo $row['lecture_id'];
    // }

     


    





?>
 -->

<!-- ///////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////// -->


<!--  








// require_once('../connection.php');
// session_start();
// if(isset($_SESSION['User']))
// {}
// //    $username = $_SESSION['User'];
// //    $user_level_Q  = mysqli_query($con,"SELECT `user_level` FROM `login_info` WHERE username = '$username'");
//  //   while($row = mysqli_fetch_assoc($user_level_Q)){
//  //       $user_level = $row['user_level'];
//  //   }
// //    if($user_level != '1'){
// //        header('location:../wellcome.php');
// //    }

// //    $username_T = "usertype_".$user_level."_info";
    
// // $username_Q  = mysqli_query($con,"SELECT `username_name` FROM $username_T WHERE username = '$username'");
// //    while($row = mysqli_fetch_assoc($username_Q)){
//         $username_name = $row['username_name'];
// //    }






//     // getting the name of all department and putting them in array
//     $department = [];
//     $get_department_Q  = mysqli_query($con,"SELECT `dept_id` FROM `department` WHERE 1");
//         while($row = mysqli_fetch_assoc($get_department_Q)){
//             array_push($department,$row['dept_id']);
//         }



//     // getting the name of all department and putting them in array
//     $batch = [];
//     $batch_ids = [];
//     $get_batch_Q  = mysqli_query($con,"SELECT `batch_name`,`batch_id` FROM `batch` WHERE 1");
//         while($row = mysqli_fetch_assoc($get_batch_Q)){
//             $batch_name = $row['batch_name'];
//             $batch_id = $row['batch_id'];
//             $batcha = explode('-',$batch_name);
//             $batch_name = $batcha[1];
//             array_push($batch,$batch_name);
//             array_push($batch_ids,$batch_id);
//         }
    



//     // department and batch combo ++ classes
//     $classes = [];
//     for($i=0;$i<sizeof($department);$i++){
//         for($j=0;$j<sizeof($batch);$j++){
//            $class= $department[$i].'_'.$batch[$j]."<br>";
//             array_push($classes,$class);
//         }
        
//     }




//     $batch_17 = $batch_ids[0];
//     $batch_18 = $batch_ids[1];
//     $batch_19 = $batch_ids[2];
//     $batch_20 = $batch_ids[3];

//     // getting all the period ids of each class 




//     // cs

//     $dept_cs_17_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_17'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_cs_17_ids,$period_table_id);
//     }
//     $dept_cs_18_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_18'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_cs_18_ids,$period_table_id);
//     }
//     $dept_cs_19_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_19'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_cs_19_ids,$period_table_id);
//     }
//     $dept_cs_20_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'cs' and batch_id = '$batch_20'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_cs_20_ids,$period_table_id);
//     }
    
//     // es
//     $dept_es_17_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_17'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_es_17_ids,$period_table_id);
//     }
//     $dept_es_18_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_18'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_es_18_ids,$period_table_id);
//     }
//     $dept_es_19_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_19'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_es_19_ids,$period_table_id);
//     }
//     $dept_es_20_ids = [];
//     $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'es' and batch_id = '$batch_20'");
//     while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//         $period_table_id = $row['period_table_id'];
//         array_push($dept_es_20_ids,$period_table_id);
//     }



//      // te
//      $dept_te_17_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_17'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_te_17_ids,$period_table_id);
//      }
//      $dept_te_18_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_18'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_te_18_ids,$period_table_id);
//      }
//      $dept_te_19_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_19'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_te_19_ids,$period_table_id);
//      }
//      $dept_te_20_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'te' and batch_id = '$batch_20'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_te_20_ids,$period_table_id);
//      }


//       // mm
//       $dept_mm_17_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_17'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_mm_17_ids,$period_table_id);
//       }
//       $dept_mm_18_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_18'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_mm_18_ids,$period_table_id);
//       }
//       $dept_mm_19_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_19'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_mm_19_ids,$period_table_id);
//       }
//       $dept_mm_20_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'mm' and batch_id = '$batch_20'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_mm_20_ids,$period_table_id);
//       }



//      // ee
//      $dept_ee_17_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_17'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ee_17_ids,$period_table_id);
//      }
//      $dept_ee_18_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_18'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ee_18_ids,$period_table_id);
//      }
//      $dept_ee_19_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_19'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ee_19_ids,$period_table_id);
//      }
//      $dept_ee_20_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ee' and batch_id = '$batch_20'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ee_20_ids,$period_table_id);
//      }




//       // in
//       $dept_in_17_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_17'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_in_17_ids,$period_table_id);
//       }
//       $dept_in_18_ids = [];
//         $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_18'");
//         while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//             $period_table_id = $row['period_table_id'];
//             array_push($dept_in_18_ids,$period_table_id);
//         }
//         $dept_in_19_ids = [];
//         $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_19'");
//         while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//             $period_table_id = $row['period_table_id'];
//             array_push($dept_in_19_ids,$period_table_id);
//         }
//         $dept_in_20_ids = [];
//         $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'in' and batch_id = '$batch_20'");
//         while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//             $period_table_id = $row['period_table_id'];
//             array_push($dept_in_20_ids,$period_table_id);
//         }





//      // ar
//      $dept_ar_17_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_17'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ar_17_ids,$period_table_id);
//      }
//      $dept_ar_18_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_18'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ar_18_ids,$period_table_id);
//      }
//      $dept_ar_19_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_19'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ar_19_ids,$period_table_id);
//      }
//      $dept_ar_20_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ar' and batch_id = '$batch_20'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ar_20_ids,$period_table_id);
//      }





//       // pg
//       $dept_pg_17_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_17'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_pg_17_ids,$period_table_id);
//       }
//       $dept_pg_18_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_18'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_pg_18_ids,$period_table_id);
//       }
//       $dept_pg_19_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_19'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_pg_19_ids,$period_table_id);
//       }
//       $dept_pg_20_ids = [];
//       $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'pg' and batch_id = '$batch_20'");
//       while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//           $period_table_id = $row['period_table_id'];
//           array_push($dept_pg_20_ids,$period_table_id);
//       }
        






//      // ch
//      $dept_ch_17_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_17'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ch_17_ids,$period_table_id);
//      }
//      $dept_ch_18_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_18'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ch_18_ids,$period_table_id);
//      }
//      $dept_ch_19_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_19'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ch_19_ids,$period_table_id);
//      }
//      $dept_ch_20_ids = [];
//      $get_period_id_depart_wise  = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE dept_id = 'ch' and batch_id = '$batch_20'");
//      while($row = mysqli_fetch_assoc($get_period_id_depart_wise)){
//          $period_table_id = $row['period_table_id'];
//          array_push($dept_ch_20_ids,$period_table_id);
//      }
 
    



     
// // //////////////////////////////////////////////////////////////////////
// // /////////////////////////////////////////////////////////////////
// // ////////////////////////////////////////////////////
// // /////////////////////////////////////////
// // /////////////////////////
// // ///////////////                                                    LECTURE IDS
// // /////////////////////////
// // //////////////////////////////////////
// // /////////////////////////////////////////////////
// // //////////////////////////////////////////////////////////////////////

// // ////////getting all the lecture ids





// // looping for each period id













































// // CH
// $total_class_cs_17 = 0;
// $attendance_batch_cs_17_P = 0;
// $attendance_batch_cs_17_A = 0;
// for($i=0;$i<sizeof($dept_cs_17_ids);$i++){
//     $period_id = $dept_cs_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'cs_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_cs_17+=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_cs_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_cs_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_cs_17_T = $attendance_batch_cs_17_A + $attendance_batch_cs_17_P;
// if($attendance_batch_cs_17_T){
//     $attendance_batch_cs_17_PER =  round(($attendance_batch_cs_17_P/$attendance_batch_cs_17_T)*100);
// }
// else{
//     $attendance_batch_cs_17_PER = 0;
// }



// // CH
// $total_class_cs_18=0;
// $attendance_batch_cs_18_P = 0;
// $attendance_batch_cs_18_A = 0;
// for($i=0;$i<sizeof($dept_cs_18_ids);$i++){
//     $period_id = $dept_cs_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'cs_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $total_class_cs_18+=1;
//             $lecture_id = $row['lecture_id'];
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_cs_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_cs_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_cs_18_T = $attendance_batch_cs_18_A + $attendance_batch_cs_18_P;
// if($attendance_batch_cs_18_T){
//     $attendance_batch_cs_18_PER =  round(($attendance_batch_cs_18_P/$attendance_batch_cs_18_T)*100);
// }
// else{
//     $attendance_batch_cs_18_PER = 0;
// }




// // CH
// $total_class_cs_19 = 0;
// $attendance_batch_cs_19_P = 0;
// $attendance_batch_cs_19_A = 0;
// for($i=0;$i<sizeof($dept_cs_19_ids);$i++){
//     $period_id = $dept_cs_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'cs_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $total_class_cs_19+=1;
//             $lecture_id = $row['lecture_id'];
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_cs_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_cs_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_cs_19_T = $attendance_batch_cs_19_A + $attendance_batch_cs_19_P;
// if($attendance_batch_cs_19_T){
//     $attendance_batch_cs_19_PER =  round(($attendance_batch_cs_19_P/$attendance_batch_cs_19_T)*100);
// }
// else{
//     $attendance_batch_cs_19_PER = 0;
// }





// // CH
// $total_class_cs_20 =0;
// $attendance_batch_cs_20_P = 0;
// $attendance_batch_cs_20_A = 0;
// for($i=0;$i<sizeof($dept_cs_20_ids);$i++){
//     $period_id = $dept_cs_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'cs_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_cs_20 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_cs_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_cs_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_cs_20_T = $attendance_batch_cs_20_A + $attendance_batch_cs_20_P;
// if($attendance_batch_cs_20_T){
//     $attendance_batch_cs_20_PER =  round(($attendance_batch_cs_20_P/$attendance_batch_cs_20_T)*100);
// }
// else{
//     $attendance_batch_cs_20_PER = 0;
// }





































// // CH
// $total_class_ch_17 = 0;
// $attendance_batch_ch_17_P = 0;
// $attendance_batch_ch_17_A = 0;
// for($i=0;$i<sizeof($dept_ch_17_ids);$i++){
//     $period_id = $dept_ch_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ch_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ch_17 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ch_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ch_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ch_17_T = $attendance_batch_ch_17_A + $attendance_batch_ch_17_P;
// if($attendance_batch_ch_17_T){
//     $attendance_batch_ch_17_PER =  round(($attendance_batch_ch_17_P/$attendance_batch_ch_17_T)*100);
// }
// else{
//     $attendance_batch_ch_17_PER = 0;
// }



// // CH
// $total_class_ch_18 = 0;
// $attendance_batch_ch_18_P = 0;
// $attendance_batch_ch_18_A = 0;
// for($i=0;$i<sizeof($dept_ch_18_ids);$i++){
//     $period_id = $dept_ch_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ch_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ch_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ch_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ch_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ch_18_T = $attendance_batch_ch_18_A + $attendance_batch_ch_18_P;
// if($attendance_batch_ch_18_T){
//     $attendance_batch_ch_18_PER =  round(($attendance_batch_ch_18_P/$attendance_batch_ch_18_T)*100);
// }
// else{
//     $attendance_batch_ch_18_PER = 0;
// }





// // CH

// $total_class_ch_19 = 0;
// $attendance_batch_ch_19_P = 0;
// $attendance_batch_ch_19_A = 0;
// for($i=0;$i<sizeof($dept_ch_19_ids);$i++){
//     $period_id = $dept_ch_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ch_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
            
// $total_class_ch_19 += 1;
            
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ch_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ch_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ch_19_T = $attendance_batch_ch_19_A + $attendance_batch_ch_19_P;
// if($attendance_batch_ch_19_T){
//     $attendance_batch_ch_19_PER =  round(($attendance_batch_ch_19_P/$attendance_batch_ch_19_T)*100);
// }
// else{
//     $attendance_batch_ch_19_PER = 0;
// }





// // CH
// $total_class_ch_20 = 0;
// $attendance_batch_ch_20_P = 0;
// $attendance_batch_ch_20_A = 0;
// for($i=0;$i<sizeof($dept_ch_20_ids);$i++){
//     $period_id = $dept_ch_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ch_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ch_20 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ch_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ch_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ch_20_T = $attendance_batch_ch_20_A + $attendance_batch_ch_20_P;
// if($attendance_batch_ch_20_T){
//     $attendance_batch_ch_20_PER =  round(($attendance_batch_ch_20_P/$attendance_batch_ch_20_T)*100);
// }
// else{
//     $attendance_batch_ch_20_PER = 0;
// }

















































// // ar
// $total_class_ar_17 = 0;
// $attendance_batch_ar_17_P = 0;
// $attendance_batch_ar_17_A = 0;
// for($i=0;$i<sizeof($dept_ar_17_ids);$i++){
//     $period_id = $dept_ar_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ar_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ar_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ar_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ar_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ar_17_T = $attendance_batch_ar_17_A + $attendance_batch_ar_17_P;
// if($attendance_batch_ar_17_T){
//     $attendance_batch_ar_17_PER =  round(($attendance_batch_ar_17_P/$attendance_batch_ar_17_T)*100);
// }
// else{
//     $attendance_batch_ar_17_PER = 0;
// }







   
// // ar
// $total_class_ar_18 = 0;
// $attendance_batch_ar_18_P = 0;
// $attendance_batch_ar_18_A = 0;
// for($i=0;$i<sizeof($dept_ar_18_ids);$i++){
//     $period_id = $dept_ar_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ar_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ar_18 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ar_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ar_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ar_18_T = $attendance_batch_ar_18_A + $attendance_batch_ar_18_P;
// if($attendance_batch_ar_18_T){
//     $attendance_batch_ar_18_PER =  round(($attendance_batch_ar_18_P/$attendance_batch_ar_18_T)*100);
// }
// else{
//     $attendance_batch_ar_18_PER = 0;
// }







   
// // ar
// $total_class_ar_19 = 0;
// $attendance_batch_ar_19_P = 0;
// $attendance_batch_ar_19_A = 0;
// for($i=0;$i<sizeof($dept_ar_19_ids);$i++){
//     $period_id = $dept_ar_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ar_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $total_class_ar_19 +=1;
//             $lecture_id = $row['lecture_id'];
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ar_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ar_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ar_19_T = $attendance_batch_ar_19_A + $attendance_batch_ar_19_P;
// if($attendance_batch_ar_19_T){
//     $attendance_batch_ar_19_PER =  round(($attendance_batch_ar_19_P/$attendance_batch_ar_19_T)*100);
// }
// else{
//     $attendance_batch_ar_19_PER = 0;
// }





   
// // ar
// $attendance_batch_ar_20_P = 0;
// $total_class_ar_20 = 0;
// $attendance_batch_ar_20_A = 0;
// for($i=0;$i<sizeof($dept_ar_20_ids);$i++){
//     $period_id = $dept_ar_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ar_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ar_20 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ar_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ar_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ar_20_T = $attendance_batch_ar_20_A + $attendance_batch_ar_20_P;
// if($attendance_batch_ar_20_T){
//     $attendance_batch_ar_20_PER =  round(($attendance_batch_ar_20_P/$attendance_batch_ar_20_T)*100);
// }
// else{
//     $attendance_batch_ar_20_PER = 0;
// }







   











// // ee
// $total_class_ee_17 = 0;
// $attendance_batch_ee_17_P = 0;
// $attendance_batch_ee_17_A = 0;
// for($i=0;$i<sizeof($dept_ee_17_ids);$i++){
//     $period_id = $dept_ee_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ee_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ee_17 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ee_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ee_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ee_17_T = $attendance_batch_ee_17_A + $attendance_batch_ee_17_P;
// if($attendance_batch_ee_17_T){
//     $attendance_batch_ee_17_PER =  round(($attendance_batch_ee_17_P/$attendance_batch_ee_17_T)*100);
// }
// else{
//     $attendance_batch_ee_17_PER = 0;
// }




// // ee
// $total_class_ee_18 = 0;
// $attendance_batch_ee_18_P = 0;
// $attendance_batch_ee_18_A = 0;
// for($i=0;$i<sizeof($dept_ee_18_ids);$i++){
//     $period_id = $dept_ee_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ee_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ee_18 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ee_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ee_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ee_18_T = $attendance_batch_ee_18_A + $attendance_batch_ee_18_P;
// if($attendance_batch_ee_18_T){
//     $attendance_batch_ee_18_PER =  round(($attendance_batch_ee_18_P/$attendance_batch_ee_18_T)*100);
// }
// else{
//     $attendance_batch_ee_18_PER = 0;
// }







// // ee
// $total_class_ee_19 = 0;
// $attendance_batch_ee_19_P = 0;
// $attendance_batch_ee_19_A = 0;
// for($i=0;$i<sizeof($dept_ee_19_ids);$i++){
//     $period_id = $dept_ee_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ee_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ee_19 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ee_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ee_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ee_19_T = $attendance_batch_ee_19_A + $attendance_batch_ee_19_P;
// if($attendance_batch_ee_19_T){
//     $attendance_batch_ee_19_PER =  round(($attendance_batch_ee_19_P/$attendance_batch_ee_19_T)*100);
// }
// else{
//     $attendance_batch_ee_19_PER = 0;
// }





// // ee
// $total_class_ee_20 = 0;
// $attendance_batch_ee_20_P = 0;
// $attendance_batch_ee_20_A = 0;
// for($i=0;$i<sizeof($dept_ee_20_ids);$i++){
//     $period_id = $dept_ee_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'ee_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_ee_20 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_ee_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_ee_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_ee_20_T = $attendance_batch_ee_20_A + $attendance_batch_ee_20_P;
// if($attendance_batch_ee_20_T){
//     $attendance_batch_ee_20_PER =  round(($attendance_batch_ee_20_P/$attendance_batch_ee_20_T)*100);
// }
// else{
//     $attendance_batch_ee_20_PER = 0;
// }











// // es
// $total_class_es_17 = 0;
// $attendance_batch_es_17_P = 0;
// $attendance_batch_es_17_A = 0;
// for($i=0;$i<sizeof($dept_es_17_ids);$i++){
//     $period_id = $dept_es_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'es_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_es_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_es_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_es_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_es_17_T = $attendance_batch_es_17_A + $attendance_batch_es_17_P;
// if($attendance_batch_es_17_T){
//     $attendance_batch_es_17_PER =  round(($attendance_batch_es_17_P/$attendance_batch_es_17_T)*100);
// }
// else{
//     $attendance_batch_es_17_PER = 0;
// }


// // es
// $total_class_es_18 = 0;
// $attendance_batch_es_18_P = 0;
// $attendance_batch_es_18_A = 0;
// for($i=0;$i<sizeof($dept_es_18_ids);$i++){
//     $period_id = $dept_es_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'es_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_es_18 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_es_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_es_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_es_18_T = $attendance_batch_es_18_A + $attendance_batch_es_18_P;
// if($attendance_batch_es_18_T){
//     $attendance_batch_es_18_PER =  round(($attendance_batch_es_18_P/$attendance_batch_es_18_T)*100);
// }
// else{
//     $attendance_batch_es_18_PER = 0;
// }

// // es
// $total_class_es_19 = 0;
// $attendance_batch_es_19_P = 0;
// $attendance_batch_es_19_A = 0;
// for($i=0;$i<sizeof($dept_es_19_ids);$i++){
//     $period_id = $dept_es_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'es_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_es_19 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_es_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_es_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_es_19_T = $attendance_batch_es_19_A + $attendance_batch_es_19_P;
// if($attendance_batch_es_19_T){
//     $attendance_batch_es_19_PER =  round(($attendance_batch_es_19_P/$attendance_batch_es_19_T)*100);
// }
// else{
//     $attendance_batch_es_19_PER = 0;
// }

// // es
// $total_class_es_20 = 0;
// $attendance_batch_es_20_P = 0;
// $attendance_batch_es_20_A = 0;
// for($i=0;$i<sizeof($dept_es_20_ids);$i++){
//     $period_id = $dept_es_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'es_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_es_20 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_es_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_es_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_es_20_T = $attendance_batch_es_20_A + $attendance_batch_es_20_P;
// if($attendance_batch_es_20_T){
//     $attendance_batch_es_20_PER =  round(($attendance_batch_es_20_P/$attendance_batch_es_20_T)*100);
// }
// else{
//     $attendance_batch_es_20_PER = 0;
// }
























// // in
// $total_class_in_17 = 0;
// $attendance_batch_in_17_P = 0;
// $attendance_batch_in_17_A = 0;
// for($i=0;$i<sizeof($dept_in_17_ids);$i++){
//     $period_id = $dept_in_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'in_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_in_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_in_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_in_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_in_17_T = $attendance_batch_in_17_A + $attendance_batch_in_17_P;
// if($attendance_batch_in_17_T){
//     $attendance_batch_in_17_PER =  round(($attendance_batch_in_17_P/$attendance_batch_in_17_T)*100);
// }
// else{
//     $attendance_batch_in_17_PER = 0;
// }
// // in

// $total_class_in_18 = 0;
// $attendance_batch_in_18_P = 0;
// $attendance_batch_in_18_A = 0;
// for($i=0;$i<sizeof($dept_in_18_ids);$i++){
//     $period_id = $dept_in_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'in_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_in_18 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_in_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_in_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_in_18_T = $attendance_batch_in_18_A + $attendance_batch_in_18_P;
// if($attendance_batch_in_18_T){
//     $attendance_batch_in_18_PER =  round(($attendance_batch_in_18_P/$attendance_batch_in_18_T)*100);
// }
// else{
//     $attendance_batch_in_18_PER = 0;
// }
// // in

// $total_class_in_19 = 0;
// $attendance_batch_in_19_P = 0;
// $attendance_batch_in_19_A = 0;
// for($i=0;$i<sizeof($dept_in_19_ids);$i++){
//     $period_id = $dept_in_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'in_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_in_19 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_in_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_in_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_in_19_T = $attendance_batch_in_19_A + $attendance_batch_in_19_P;
// if($attendance_batch_in_19_T){
//     $attendance_batch_in_19_PER =  round(($attendance_batch_in_19_P/$attendance_batch_in_19_T)*100);
// }
// else{
//     $attendance_batch_in_19_PER = 0;
// }




// // in
// $total_class_in_20 = 0;
// $attendance_batch_in_20_P = 0;
// $attendance_batch_in_20_A = 0;
// for($i=0;$i<sizeof($dept_in_20_ids);$i++){
//     $period_id = $dept_in_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'in_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_in_20 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_in_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_in_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_in_20_T = $attendance_batch_in_20_A + $attendance_batch_in_20_P;
// if($attendance_batch_in_20_T){
//     $attendance_batch_in_20_PER =  round(($attendance_batch_in_20_P/$attendance_batch_in_20_T)*100);
// }
// else{
//     $attendance_batch_in_20_PER = 0;
// }














// // mm
// $total_class_mm_17 = 0;
// $attendance_batch_mm_17_P = 0;
// $attendance_batch_mm_17_A = 0;
// for($i=0;$i<sizeof($dept_mm_17_ids);$i++){
//     $period_id = $dept_mm_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'mm_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_mm_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_mm_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_mm_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_mm_17_T = $attendance_batch_mm_17_A + $attendance_batch_mm_17_P;
// if($attendance_batch_mm_17_T){
//     $attendance_batch_mm_17_PER =  round(($attendance_batch_mm_17_P/$attendance_batch_mm_17_T)*100);
// }
// else{
//     $attendance_batch_mm_17_PER = 0;
// }

// // mm
// $total_class_mm_18 = 0;
// $attendance_batch_mm_18_P = 0;
// $attendance_batch_mm_18_A = 0;
// for($i=0;$i<sizeof($dept_mm_18_ids);$i++){
//     $period_id = $dept_mm_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'mm_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_mm_18 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_mm_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_mm_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_mm_18_T = $attendance_batch_mm_18_A + $attendance_batch_mm_18_P;
// if($attendance_batch_mm_18_T){
//     $attendance_batch_mm_18_PER =  round(($attendance_batch_mm_18_P/$attendance_batch_mm_18_T)*100);
// }
// else{
//     $attendance_batch_mm_18_PER = 0;
// }

// // mm
// $total_class_mm_19 = 0;
// $attendance_batch_mm_19_P = 0;
// $attendance_batch_mm_19_A = 0;
// for($i=0;$i<sizeof($dept_mm_19_ids);$i++){
//     $period_id = $dept_mm_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'mm_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_mm_19 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_mm_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_mm_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_mm_19_T = $attendance_batch_mm_19_A + $attendance_batch_mm_19_P;
// if($attendance_batch_mm_19_T){
//     $attendance_batch_mm_19_PER =  round(($attendance_batch_mm_19_P/$attendance_batch_mm_19_T)*100);
// }
// else{
//     $attendance_batch_mm_19_PER = 0;
// }

// // mm
// $total_class_mm_20 = 0;
// $attendance_batch_mm_20_P = 0;
// $attendance_batch_mm_20_A = 0;
// for($i=0;$i<sizeof($dept_mm_20_ids);$i++){
//     $period_id = $dept_mm_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'mm_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_mm_20 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_mm_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_mm_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_mm_20_T = $attendance_batch_mm_20_A + $attendance_batch_mm_20_P;
// if($attendance_batch_mm_20_T){
//     $attendance_batch_mm_20_PER =  round(($attendance_batch_mm_20_P/$attendance_batch_mm_20_T)*100);
// }
// else{
//     $attendance_batch_mm_20_PER = 0;
// }





// // pg
// $total_class_pg_17 = 0;
// $attendance_batch_pg_17_P = 0;
// $attendance_batch_pg_17_A = 0;
// for($i=0;$i<sizeof($dept_pg_17_ids);$i++){
//     $period_id = $dept_pg_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'pg_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_pg_17 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_pg_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_pg_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_pg_17_T = $attendance_batch_pg_17_A + $attendance_batch_pg_17_P;
// if($attendance_batch_pg_17_T){
//     $attendance_batch_pg_17_PER =  round(($attendance_batch_pg_17_P/$attendance_batch_pg_17_T)*100);
// }
// else{
//     $attendance_batch_pg_17_PER = 0;
// }







// $total_class_pg_18 = 0;
// $attendance_batch_pg_18_P = 0;
// $attendance_batch_pg_18_A = 0;
// for($i=0;$i<sizeof($dept_pg_18_ids);$i++){
//     $period_id = $dept_pg_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'pg_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_pg_18 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_pg_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_pg_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_pg_18_T = $attendance_batch_pg_18_A + $attendance_batch_pg_18_P;
// if($attendance_batch_pg_18_T){
//     $attendance_batch_pg_18_PER =  round(($attendance_batch_pg_18_P/$attendance_batch_pg_18_T)*100);
// }
// else{
//     $attendance_batch_pg_18_PER = 0;
// }




// $total_class_pg_19 = 0;
// $attendance_batch_pg_19_P = 0;
// $attendance_batch_pg_19_A = 0;
// for($i=0;$i<sizeof($dept_pg_19_ids);$i++){
//     $period_id = $dept_pg_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'pg_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_pg_19 +=1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_pg_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_pg_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_pg_19_T = $attendance_batch_pg_19_A + $attendance_batch_pg_19_P;
// if($attendance_batch_pg_19_T){
//     $attendance_batch_pg_19_PER =  round(($attendance_batch_pg_19_P/$attendance_batch_pg_19_T)*100);
// }
// else{
//     $attendance_batch_pg_19_PER = 0;
// }







// $total_class_pg_20 = 0;
// $attendance_batch_pg_20_P = 0;
// $attendance_batch_pg_20_A = 0;
// for($i=0;$i<sizeof($dept_pg_20_ids);$i++){
//     $period_id = $dept_pg_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'pg_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_pg_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_pg_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_pg_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_pg_20_T = $attendance_batch_pg_20_A + $attendance_batch_pg_20_P;
// if($attendance_batch_pg_20_T){
//     $attendance_batch_pg_20_PER =  round(($attendance_batch_pg_20_P/$attendance_batch_pg_20_T)*100);
// }
// else{
//     $attendance_batch_pg_20_PER = 0;
// }









// // te
// $total_class_te_17 = 0;
// $attendance_batch_te_17_P = 0;
// $attendance_batch_te_17_A = 0;
// for($i=0;$i<sizeof($dept_te_17_ids);$i++){
//     $period_id = $dept_te_17_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'te_17_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_te_17 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_te_17_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_te_17_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_te_17_T = $attendance_batch_te_17_A + $attendance_batch_te_17_P;
// if($attendance_batch_te_17_T){
//     $attendance_batch_te_17_PER =  round(($attendance_batch_te_17_P/$attendance_batch_te_17_T)*100);
// }
// else{
//     $attendance_batch_te_17_PER = 0;
// }



// $total_class_te_18 = 0;
// $attendance_batch_te_18_P = 0;
// $attendance_batch_te_18_A = 0;
// for($i=0;$i<sizeof($dept_te_18_ids);$i++){
//     $period_id = $dept_te_18_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'te_18_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_te_18 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_te_18_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_te_18_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_te_18_T = $attendance_batch_te_18_A + $attendance_batch_te_18_P;
// if($attendance_batch_te_18_T){
//     $attendance_batch_te_18_PER =  round(($attendance_batch_te_18_P/$attendance_batch_te_18_T)*100);
// }
// else{
//     $attendance_batch_te_18_PER = 0;
// }



// $total_class_te_19 = 0;
// $attendance_batch_te_19_P = 0;
// $attendance_batch_te_19_A = 0;
// for($i=0;$i<sizeof($dept_te_19_ids);$i++){
//     $period_id = $dept_te_19_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'te_19_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_te_19 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_te_19_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_te_19_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_te_19_T = $attendance_batch_te_19_A + $attendance_batch_te_19_P;
// if($attendance_batch_te_19_T){
//     $attendance_batch_te_19_PER =  round(($attendance_batch_te_19_P/$attendance_batch_te_19_T)*100);
// }
// else{
//     $attendance_batch_te_19_PER = 0;
// }



// $total_class_te_20 = 0;
// $attendance_batch_te_20_P = 0;
// $attendance_batch_te_20_A = 0;
// for($i=0;$i<sizeof($dept_te_20_ids);$i++){
//     $period_id = $dept_te_20_ids[$i];
//     $subject_id_get  = mysqli_query($con,"SELECT distinct `subject_id` FROM `period_table` WHERE period_table_id = '$period_id'");
//     while($row = mysqli_fetch_assoc($subject_id_get)){
//         $subject_id = $row['subject_id']; 
//         $table_name = 'te_20_'.$subject_id.'_attendance';
//         $get_lecture_id_period_wise  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_id' order by lecture_date DESC");
//         while($row = mysqli_fetch_assoc($get_lecture_id_period_wise)){
//             $lecture_id = $row['lecture_id'];
//             $total_class_te_20 += 1;
//             for($k=1;$k<121;$k++){
//                 $roll = 'a'.$k;
//             $get_attendance = mysqli_query($con,"SELECT `$roll` FROM `$table_name` where lecture_id = '$lecture_id'");
//             while($row = mysqli_fetch_assoc($get_attendance)){
//                 $status = $row[$roll];
//                 $status = strtolower($status);
//                 if($status == 'present' || $status == 'p'){
//                     $attendance_batch_te_20_P +=1;
//                 }
//                 if($status == 'absent' || $status == 'a'){
//                     $attendance_batch_te_20_A +=1;
//                 }
//             }    
//         }
//     }
// }
// }
// $attendance_batch_te_20_T = $attendance_batch_te_20_A + $attendance_batch_te_20_P;
// if($attendance_batch_te_20_T){
//     $attendance_batch_te_20_PER =  round(($attendance_batch_te_20_P/$attendance_batch_te_20_T)*100);
// }
// else{
//     $attendance_batch_te_20_PER = 0;
// }





// // TOTALLING




// $attendance_batch_17_PER = (
// $attendance_batch_in_17_PER +
// $attendance_batch_ar_17_PER+
// $attendance_batch_cs_17_PER +
// $attendance_batch_ch_17_PER+
// $attendance_batch_ee_17_PER +
// $attendance_batch_es_17_PER+
// $attendance_batch_pg_17_PER +
// $attendance_batch_mm_17_PER+
// $attendance_batch_te_17_PER)/9;


// $attendance_batch_18_PER = (
//     $attendance_batch_in_18_PER +
//     $attendance_batch_ar_18_PER+
//     $attendance_batch_cs_18_PER +
//     $attendance_batch_ch_18_PER+
//     $attendance_batch_ee_18_PER +
//     $attendance_batch_es_18_PER+
//     $attendance_batch_pg_18_PER +
//     $attendance_batch_mm_18_PER+
//     $attendance_batch_te_18_PER)/9;


    
// $attendance_batch_19_PER = (
//     $attendance_batch_in_19_PER +
//     $attendance_batch_ar_19_PER+
//     $attendance_batch_cs_19_PER +
//     $attendance_batch_ch_19_PER+
//     $attendance_batch_ee_19_PER +
//     $attendance_batch_es_19_PER+
//     $attendance_batch_pg_19_PER +
//     $attendance_batch_mm_19_PER+
//     $attendance_batch_te_19_PER)/9;


    
// $attendance_batch_20_PER = (
//     $attendance_batch_in_20_PER +
//     $attendance_batch_ar_20_PER+
//     $attendance_batch_cs_20_PER +
//     $attendance_batch_ch_20_PER+
//     $attendance_batch_ee_20_PER +
//     $attendance_batch_es_20_PER+
//     $attendance_batch_pg_20_PER +
//     $attendance_batch_mm_20_PER+
//     $attendance_batch_te_20_PER)/9;

// $attendance_total_uni = ($attendance_batch_17_PER+$attendance_batch_18_PER+$attendance_batch_19_PER+$attendance_batch_20_PER)/4;


// $total_classes_te = $total_class_te_17 + $total_class_te_18 + $total_class_te_19 + $total_class_te_20;
// $total_classes_cs = $total_class_cs_17 + $total_class_cs_18 + $total_class_cs_19 + $total_class_cs_20;
// $total_classes_ch = $total_class_ch_17 + $total_class_ch_18 + $total_class_ch_19 + $total_class_ch_20;

// $total_classes_ee = $total_class_ee_17 + $total_class_ee_18 + $total_class_ee_19 + $total_class_ee_20;
// $total_classes_mm = $total_class_mm_17 + $total_class_mm_18 + $total_class_mm_19 + $total_class_mm_20;
// $total_classes_in = $total_class_in_17 + $total_class_in_18 + $total_class_in_19 + $total_class_in_20;

// $total_classes_pg = $total_class_pg_17 + $total_class_pg_18 + $total_class_pg_19 + $total_class_pg_20;
// $total_classes_es = $total_class_es_17 + $total_class_es_18 + $total_class_es_19 + $total_class_es_20;
// $total_classes_ar = $total_class_ar_17 + $total_class_ar_18 + $total_class_ar_19 + $total_class_ar_20;

// $total_classes = 
// $total_classes_ch+
// $total_classes_cs+
// $total_classes_es+
// $total_classes_te+
// $total_classes_pg+
// $total_classes_ar+
// $total_classes_in+
// $total_classes_mm+
// $total_classes_ee;



// $get_period_id = mysqli_query($con,"SELECT distinct `period_name_id`,`lecture_date` FROM `lecture_details` WHERE 1 order by lecture_date ASC");
//     while($row = mysqli_fetch_array($get_period_id)){
//         $period_name_id = $row['period_name_id'];
//         $lecture_date = $row['lecture_date'];
//     }


//     $period_id_list_last = [];
//     $lecture_id_last = []; 
//     $get_period_id = mysqli_query($con,"SELECT distinct `period_name_id`FROM `lecture_details` WHERE lecture_date = '$lecture_date'");
//     while($row = mysqli_fetch_array($get_period_id)){
//         $period_name_id = $row['period_name_id'];
//         array_push($period_id_list_last,$period_name_id);       
//     }
//     for($i = 0;$i<sizeof($period_id_list_last);$i++){
//         $period_name_id = $period_id_list_last[$i];
//         $get_lecture_id = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_name_id = '$period_name_id' and lecture_date = '$lecture_date'");
//         while($row = mysqli_fetch_array($get_lecture_id)){
//             $lecture_id = $row['lecture_id'];
//             array_push($lecture_id_last,$lecture_id);       
//         }
//     }
    





//     // ////////////////////////////////////////////////////////////////////////////////////////
// $present_last=1;
// $absent_last=1;
// $number_of_classes_last= 0;
// for($i = 0 ;$i<sizeof($lecture_id_last);$i++){
// $lecture_id = $lecture_id_last[$i];
// // echo $lecture_id;
// $get_period_id = mysqli_query($con,"SELECT `period_name_id` FROM `lecture_details` WHERE lecture_id = '$lecture_id' order by lecture_id ASC");
// while($row = mysqli_fetch_array($get_period_id)){
//     $period_name_id = $row['period_name_id'];
//     $get_extra_info = mysqli_query($con,"SELECT  `dept_id`,  `batch_id`, `subject_id` FROM `period_table` WHERE period_table_id = '$period_name_id' ");
//     while($row = mysqli_fetch_array($get_extra_info)){
//         $dept_id = $row['dept_id'];$batch_id = $row['batch_id'];$subject_id = $row['subject_id'];
//             $get_batch_info = mysqli_query($con,"SELECT  `batch_name` FROM `batch` WHERE batch_id = '$batch_id' ");
//             while($row = mysqli_fetch_array($get_batch_info)){
//                 $batch_name = $row['batch_name'];
//             }
//             $batch_na = explode ("-",$batch_name);
//             $batch_name = $batch_na[1]; 
//             $table_attendance_name =  $dept_id."_".$batch_name."_".$subject_id."_attendance";
//             $number_of_classes_last = $number_of_classes_last +1;
//                 for($j=1;$j<121;$j++){
//                         $b= "a".(string)$j;
//                         $get_attendance = mysqli_query($con,"SELECT $b FROM `$table_attendance_name` WHERE lecture_id = '$lecture_id'");
//                         while($row = mysqli_fetch_array($get_attendance)){
//                             $status = $row[$b];
//                             $status = strtolower($status);
//                             if($status == "present" ||$status == "p"  ){
//                                 $present_last = $present_last + 1;
                                
//                             }
//                             else if($status == "absent" || $status == "a" ){
//                                 $absent_last = $absent_last +1;
//                             }
//                         }
//                         $b= "";
//                     }
//     }
// }
// }
// if($present_last>1){
//     $present_last = $present_last -1;
// }
// else{
//     $lecture_date = "0000-00-00";
// }
// if($absent_last>1){
//     $absent_last = $absent_last -1;
// }
// $total_last = $present_last + $absent_last;
// $present_last_percent = ($present_last/$total_last)*100;
// $present_last_percent =  round($present_last_percent);
// $absent_last_percent = 100 - $present_last_percent;

// // ///////////////////////////////////////////////////////////////////////////////////
// $lecture_id_arr_lastweek = [];
// $period_ids = [];
// $get_period_id = mysqli_query($con,"SELECT `period_table_id` FROM `period_table` WHERE 1");
// while($row = mysqli_fetch_array($get_period_id)){
//     $period_table_id = $row['period_table_id'];
//     array_push($period_ids,$period_table_id);
// }  
// $date = date('Y-m-d');
//     $lecture_id_arr_lastmonth = [];

//     for($i = 0; $i<sizeof($period_ids);$i++){
//                     $period_table_id = $period_ids[$i];
//                     // echo $period_table_id;
//                     $get_lecture_id = mysqli_query($con,"SELECT `lecture_id`,`lecture_date` FROM `lecture_details` WHERE period_name_id = '$period_table_id' order by lecture_id ASC");
//                     while($row = mysqli_fetch_array($get_lecture_id)){
//                         $lecture_id = $row['lecture_id'];
//                         $lecture_date = $row['lecture_date'];
//                         $datetime1 = date_create($lecture_date);
//                         $datetime2 = date_create($date);
//                         $interval = date_diff($datetime2, $datetime1); 
//                         $interva =  $interval->format('%a') . "\n";
//                         $interva = (int)$interva;
//                         if($interva < 7){                         
//                             array_push($lecture_id_arr_lastweek,$lecture_id);       
//                             } 
//                         if($interva < 30){                         
//                             array_push($lecture_id_arr_lastmonth,$lecture_id);       
//                             }
//                         // array_push($lecture_id_arr,$lecture_id);       
                            
                
//             }
           

// }
// $present_lastmonth=1;
// $absent_lastmonth=1;
// $number_of_classes_lastmonth= 0;
// for($i = 0 ;$i<sizeof($lecture_id_arr_lastmonth);$i++){
// $lecture_id = $lecture_id_arr_lastmonth[$i];
// // echo $lecture_id;
// $get_period_id = mysqli_query($con,"SELECT `period_name_id` FROM `lecture_details` WHERE lecture_id = '$lecture_id' order by lecture_id ASC");
// while($row = mysqli_fetch_array($get_period_id)){
//     $period_name_id = $row['period_name_id'];
//     $get_extra_info = mysqli_query($con,"SELECT  `dept_id`,  `batch_id`, `subject_id` FROM `period_table` WHERE period_table_id = '$period_name_id' ");
//     while($row = mysqli_fetch_array($get_extra_info)){
//         $dept_id = $row['dept_id'];$batch_id = $row['batch_id'];$subject_id = $row['subject_id'];
//             $get_batch_info = mysqli_query($con,"SELECT  `batch_name` FROM `batch` WHERE batch_id = '$batch_id' ");
//             while($row = mysqli_fetch_array($get_batch_info)){
//                 $batch_name = $row['batch_name'];
//             }
//             $batch_na = explode ("-",$batch_name);
//             $batch_name = $batch_na[1]; 
//             $table_attendance_name =  $dept_id."_".$batch_name."_".$subject_id."_attendance";
//             $number_of_classes_lastmonth = $number_of_classes_lastmonth +1;
//                 for($j=1;$j<121;$j++){
//                         $b= "a".(string)$j;
//                         $get_attendance = mysqli_query($con,"SELECT $b FROM `$table_attendance_name` WHERE lecture_id = '$lecture_id'");
//                         while($row = mysqli_fetch_array($get_attendance)){
//                             $status = $row[$b];
//                             $status = strtolower($status);
//                             if($status == "present" ||$status == "p"  ){
//                                 $present_lastmonth = $present_lastmonth +1;
//                             }
//                             else if($status == "absent" || $status == "a" ){
//                                 $absent_lastmonth = $absent_lastmonth +1;
//                             }
//                         }
//                         $b= "";
//                     }
//     }
// }


// }
// $total_lastmonth = $present_lastmonth + $absent_lastmonth;
// $present_lastmonth_percent = ($present_lastmonth/$total_lastmonth)*100;
// $present_lastmonth_percent =  round($present_lastmonth_percent);
// $absent_lastmonth_percent = 100 - $present_lastmonth_percent;

// ////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////



// $present_lastweek=1;
// $absent_lastweek=1;
// $number_of_classes_lastweek= 0;
// for($i = 0 ;$i<sizeof($lecture_id_arr_lastweek);$i++){
// $lecture_id = $lecture_id_arr_lastweek[$i];
// // echo $lecture_id;
// $get_period_id = mysqli_query($con,"SELECT `period_name_id` FROM `lecture_details` WHERE lecture_id = '$lecture_id' order by lecture_id ASC");
// while($row = mysqli_fetch_array($get_period_id)){
//     $period_name_id = $row['period_name_id'];
//     $get_extra_info = mysqli_query($con,"SELECT  `dept_id`,  `batch_id`, `subject_id` FROM `period_table` WHERE period_table_id = '$period_name_id' ");
//     while($row = mysqli_fetch_array($get_extra_info)){
//         $dept_id = $row['dept_id'];$batch_id = $row['batch_id'];$subject_id = $row['subject_id'];
//             $get_batch_info = mysqli_query($con,"SELECT  `batch_name` FROM `batch` WHERE batch_id = '$batch_id' ");
//             while($row = mysqli_fetch_array($get_batch_info)){
//                 $batch_name = $row['batch_name'];
//             }
//             $batch_na = explode ("-",$batch_name);
//             $batch_name = $batch_na[1]; 
//             $table_attendance_name =  $dept_id."_".$batch_name."_".$subject_id."_attendance";
//             $number_of_classes_lastweek = $number_of_classes_lastweek +1;
//                 for($j=1;$j<121;$j++){
//                         $b= "a".(string)$j;
//                         $get_attendance = mysqli_query($con,"SELECT $b FROM `$table_attendance_name` WHERE lecture_id = '$lecture_id'");
//                         while($row = mysqli_fetch_array($get_attendance)){
//                             $status = $row[$b];
//                             $status = strtolower($status);
//                             if($status == "present" ||$status == "p"  ){
//                                 $present_lastweek = $present_lastweek +1;
//                             }
//                             else if($status == "absent" || $status == "a" ){
//                                 $absent_lastweek = $absent_lastweek +1;
//                             }
//                         }
//                         $b= "";
//                     }
//     }
// }


// }
// $total_lastweek = $present_lastweek + $absent_lastweek;
// $present_lastweek_percent = ($present_lastweek/$total_lastweek)*100;
// $present_lastweek_percent =  round($present_lastweek_percent);
// $absent_lastweek_percent = 100 - $present_lastweek_percent;







?>
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assests/style/dashboard-index.css">
    <script src="../assests/script/dashbaord.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>




<body>
    <div class="dashboard">
        <div class="sidebar " id="sidebar">
            <div class="sidebar-inner " id="sidebar-inner">
                <p style="text-align:center">D.A.M.S</p>
                <hr>
                <div class="row-sidebar profile">
                    <i class="far fa-user-circle icon-sidebar"></i>
                    <div class="row-sidebar-text name-bar ">
                        <?php 
                        // echo $username_name ?>
                    </div>
                </div>
                <div id="drop-down-profile" class="row-sidebar-profile">
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
                    <a href="./index.php" style="color:#2ca8ff">
                        <i class="fas fa-university icon-sidebar "></i>
                        <div class="row-sidebar-text ">
                            Overall Performance
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                    <a href="./selectDept.html">
                        <i class="fas fa-building icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Department Wise Attendance
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                <a href="./selectBatch.html">
                        <i class="fas fa-users icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Batch Wise Attendance
                        </div>
                    </a>
                </div>
                <div class="row-sidebar">
                <a href="./selectClass.html">
                        <i class="fas fa-user-friends icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Class Wise Attendance
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                    <a href="./selectSubject.html">
                        <i class="fas fa-book icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Subject Wise Attendance
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                    <a href="./selectTeacher.html">
                        <i class="fas fa-user-tie icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Teacher Wise Attendance
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                    <a href="./selectConductedStatus.html">
                        <i class="fas fa-chart-line icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Class Conducted Statistics
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                    <a href="">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            PDF Report Download
                        </div>
                    </a>

                </div>
                <div class="row-sidebar">
                    <a href="../logout.php">
                        <i class="fas fa-sign-out-alt icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Logout
                        </div>
                    </a>
                </div>


            </div>











        </div>
        <div class="dashboard-inner " id="main-bar">
            <div class="floating-menu">
                <button id="floating">X</button>
            </div>

            <!-- top graph -->
            <div class="dashboard-inner-main-graph">

                <canvas id="overallstatsChart"></canvas>
            </div>




            <!-- main statistics -->
            <div class="dashboard-inner-main-stats">
                <div class="dims-inner dims-side">
                    <h3 class="avatar"
                        data-tooltip="Showing the attendance of the entire university of all departments">Overall
                        Attendance</h3>
                    <h4><?php echo round($attendance_total_uni) ?>%</h4>
                    <h5><?php echo $total_classes?> Classes</h5>
                </div>
                <div class="dims-inner dims-side">
                    <h3 class="avatar"
                        data-tooltip="Showing the last attendance uploaded in entire university 25-09-2020">Last
                        Attendance Uploaded</h3>
                    <h4><?php echo $present_last_percent?>%</h4>
                    <h5><?php echo $lecture_date?></h5>
                </div>
                <div class="dims-inner dims-side">
                    <h3 class="avatar" data-tooltip="Showing the last 7 days attendance uploaded in entire university">
                        Last 7 Days</h3>
                    <h4><?php echo $present_lastweek_percent ?>%</h4>
                    <h5><?php echo $number_of_classes_lastweek ?> Classes</h5>
                </div>
                <div class="dims-inner">
                    <h3 class="avatar" data-tooltip="Showing the last 30 days attendance uploaded in entire university">
                        Last 30 Days</h3>
                    <h4><?php echo  $present_lastmonth_percent ?>%</h4>
                    <h5><?php echo $number_of_classes_lastmonth ?> Classes</h5>
                </div>

            </div>


            <h2 class="dashboard-heading avatar" data-tooltip="Showing the performance of departments">
                Department Wise Attendance
            </h2>

            <!-- depart wise statistics -->
            <div class="dashboard-inner-main-departs">
                <div class="dimd-row">
                    <div class="dimd-inner">
                        <h2 class="avatar" data-tooltip="Showing the performance of Architecture Department">
                            Architecture and Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="CSEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Present Percentage</h2>
                                <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Conducted</h2>
                                <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Total No. of Classes</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2 class="avatar" data-tooltip="Showing the performance of Chemical Department">Chemical
                            Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="CSEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Present Percentage</h2>
                                <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Conducted</h2>
                                <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Total No. of Classes</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2 class="avatar" data-tooltip="Showing the performance of Computer Department">Computer System
                            Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="CSEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Present Percentage</h2>
                                <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Conducted</h2>
                                <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Total No. of Classes</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show" id="show">

                    <div class="dimd-row">
                        <div class="dimd-inner">
                            <h2>Energy and Environment Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CSEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Present Percentage</h2>
                                    <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Conducted</h2>
                                    <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Total No. of Classes</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Electronic Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CSEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Present Percentage</h2>
                                    <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Conducted</h2>
                                    <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Total No. of Classes</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Industrial Engineering and Management</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CSEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Present Percentage</h2>
                                    <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Conducted</h2>
                                    <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Total No. of Classes</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-row">
                        <div class="dimd-inner">
                            <h2>Petroluem and Gas Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CSEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Present Percentage</h2>
                                    <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Conducted</h2>
                                    <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Total No. of Classes</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Telecommunication Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CSEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Present Percentage</h2>
                                    <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Conducted</h2>
                                    <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Total No. of Classes</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Mettalurgy and Material Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CSEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Present Percentage</h2>
                                    <h3><?php echo $attendance_batch_cs_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Conducted</h2>
                                    <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Total No. of Classes</h2>
                                    <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text" id="text">
                    show all
                </div>
                <div class="text" id="texthide">
                    show less
                </div>
            </div>







        </div>
</body>

</html>

<style>
*,
*::before,
*::after {
    box-sizing: border-box
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.avatar {
    min-width: 200px;
    /* font-size: 14px !important; */
    width: fit-content;
    border-radius: 50%;
    background-size: cover;
    background-position: center;
    position: relative;
}

.avatar::before,
.avatar::after {
    --scale: 0;
    --arrow-size: 20px;
    --tooltip-color: #2196f3;

    position: absolute;
    z-index: 999;
    top: -.25rem;
    font-size: 18px !important;
    font-weight: 400 !important;
    left: 50%;
    transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
    transition: 150ms transform;
    transform-origin: bottom center;
}

.avatar::before {
    --translate-y: calc(-100% - var(--arrow-size));

    content: attr(data-tooltip);
    color: white;
    padding: .5rem;
    border-radius: .3rem;
    text-align: center;
    width: max-content;
    max-width: 100%;
    background: var(--tooltip-color);
}

.avatar:hover::before,
.avatar:hover::after {
    --scale: 1;
}

.avatar::after {
    --translate-y: calc(-1 * var(--arrow-size));

    content: '';
    border: var(--arrow-size) solid transparent;
    border-top-color: var(--tooltip-color);
    transform-origin: top center;
}
</style>

<script>
<?php 
// $time_line = ['week1','week2','week3','week4','week5','week6']; 
?>
    // var label = [];
    // <?php 
    // for($i=0;$i<sizeof($time_line);$i++){
    //     ?>

    //     label.push("<?php 
    // echo $time_line[$i] 
    ?>
    ");
//     <?php
// }
// ?>
// <?php 
// $data_set = ['22','11','32','14','17','11']; ?>
// var data = [];
// <?php
//  for($i=0;$i<sizeof($data_set);$i++){
// }
//     ?>

//data.push("<?php
//  echo $data_set[$i] ?>");
//     <?php
// }
// ?>
// overall university report
//     var overallstatsChart = document.getElementById("overallstatsChart").getContext('2d');
// var myChart = new Chart(overallstatsChart, {
//     type: 'line',
//     data: {
//         labels: label,
//         datasets: [{
//             label: 'University Attendance', // Name the series
//             data: data, // Specify the data values array
//             fill: false,
//             borderColor: '#2196f3', // Add custom color border (Line)
//             backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
//             borderWidth: 2 // Specify bar border width
//         }]},
//     options: {
//       responsive: true, // Instruct chart js to respond nicely.
//       maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
//     }
// });
if ($(window).width() > 768) {
    $('#sidebar').hover(function() {
            // alert("done");
            $(this).addClass('sidebar-opened');
            $(".row-sidebar-text").addClass('text-opened');
            $('.icon-sidebar').css('margin', '0px');
            $('.row-sidebar').css('padding', '0px 10px');
        },
        function() {
            $(this).removeClass('sidebar-opened');
            $(".row-sidebar-text").removeClass('text-opened');
            $(".dashboard-inner").removeClass('da');
            $('.icon-sidebar').css('margin', 'auto');
            $('.row-sidebar').css('padding', '0px');
        }
    );
}
</script>







<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>
</body>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<!-- <script src="../assests/script/dashbaord.js"></script> -->
<script src="./jquery.min.js"></script>

</html>


































<!-- 
//}
//else{
    // header("location:../index.php");
 //   echo "a";
//} -->
<!-- <?php 


?> -->