
<?php
require_once('../connection.php');
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





    $department = [];
    $get_department_Q  = mysqli_query($con,"SELECT `department_id` FROM `department` WHERE 1");
        while($row = mysqli_fetch_assoc($get_department_Q)){
            array_push($department,$row['department_id']);
        }

        $id= array();

    $term_Q  = mysqli_query($con,"SELECT `term_id` FROM `term` WHERE 1");
        while($row = mysqli_fetch_assoc($term_Q)){
            $term = $row['term_id'];
        }
        
        foreach($department as $dept_id){
            // echo $dept_id;
            $temp = "";
        $period_id_Q  = mysqli_query($con,"SELECT `period_id` FROM `period_table_normal` WHERE dept_id = '$dept_id' and term_id = '$term'");
        while($row = mysqli_fetch_assoc($period_id_Q)){
            $temp .= "-".(string)$row['period_id'];
        }
        array_push($id,$temp);

    }
   

    $ar = [];
    $ch = [];
    $cs = [];
    $ee = [];
    $es = [];
    $mm = [];
    $te = [];
    $in = [];
    $pg = [];
    foreach($id as $i){
        $ids = explode('-',$i);
        foreach($ids as $id){
            $period_id_Q  = mysqli_query($con,"SELECT `dept_id`,`batch_id`,`subject_id`,`section` FROM `period_table_normal` WHERE period_id = '$id'");
            while($row = mysqli_fetch_assoc($period_id_Q)){
                $depart = $row['dept_id']; 
                $batch_id = $row['batch_id'];
                $subject_id = $row['subject_id'];
                $section = $row['section'];
                switch($depart){
                    case 'ar':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($ar,$ida);
                    break;
                    case 'ch':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($ch,$ida);
                    break;
                    case 'cs':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($cs,$ida);
                    break;
                    case 'mm':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($mm,$ida);
                    break;
                    case 'pg':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($pg,$ida);
                    break;
                    case 'in':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($in,$ida);
                    break;
                    case 'te':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($te,$ida);
                    break;
                    case 'ee':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($ee,$ida);
                    break;
                    case 'es':
                        $ida =  $depart."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
                        array_push($es,$ida);
                    break;
                }
            }
        }
       
    }

    // initialize
    $present = 0;
    $absent = 0;
    $range = range(1,120);

    $mm_17_stat = 0;
    $mm_18_stat = 0;
    $mm_19_stat = 0;
    $mm_20_stat = 0;
    $mm_17_stat_a = 0;
    $mm_18_stat_a = 0;
    $mm_19_stat_a = 0;
    $mm_20_stat_a = 0;

    foreach($mm as $m){
        $temp = explode('_',$m);
        $batch = $temp[1];
        echo $batch;
        if($batch=='2'){
            foreach($range as $counter){
                $counter = "a".$counter;
             $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
             if(!is_bool($get_att)){
                 while($row = mysqli_fetch_assoc($get_att)){
                     $status = $row[$counter];
                     if($status == 'present'){
                         $present += 1;
                         $mm_17_stat += 1;
                     }
                     else if($status == 'absent'){
                         $absent += 1;
                         $mm_17_stat_a  += 1;
                     }
                 }
             }
            
             $counter ="";
            }
          $m = '';
        }
        else if($batch=='3'){
            foreach($range as $counter){
                $counter = "a".$counter;
             $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
             if(!is_bool($get_att)){
                 while($row = mysqli_fetch_assoc($get_att)){
                     $status = $row[$counter];
                     if($status == 'present'){
                         $present += 1;
                         $mm_18_stat += 1;
                     }
                     else if($status == 'absent'){
                         $absent += 1;
                         $mm_18_stat_a  += 1;
                     }
                 }
             }
            
             $counter ="";
            }
          $m = '';
        }
        else if($batch=='4'){
            foreach($range as $counter){
                $counter = "a".$counter;
             $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
             if(!is_bool($get_att)){
                 while($row = mysqli_fetch_assoc($get_att)){
                     $status = $row[$counter];
                     if($status == 'present'){
                         $present += 1;
                         $mm_19_stat += 1;
                     }
                     else if($status == 'absent'){
                         $absent += 1;
                         $mm_19_stat_a  += 1;
                     }
                 }
             }
            
             $counter ="";
            }
          $m = '';
        }
        else if($batch=='5'){
            foreach($range as $counter){
                $counter = "a".$counter;
             $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
             if(!is_bool($get_att)){
                 while($row = mysqli_fetch_assoc($get_att)){
                     $status = $row[$counter];
                     if($status == 'present'){
                         $present += 1;
                        //  echo "TRigeerred";
                         $mm_20_stat += 1;
                     }
                     else if($status == 'absent'){
                         $absent += 1;
                         $mm_20_stat_a  += 1;
                     }
                 }
             }
            
             $counter ="";
            }
          $m = '';
        }
       
    }   
    // echo $mm_17_stat;

    foreach($cs as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
      $m = '';
    }    
    foreach($ch as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
      $m = '';
    }  
    foreach($mm as $m){
       foreach($range as $counter){
           $counter = "a".$counter;
        $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
        if(!is_bool($get_att)){
            while($row = mysqli_fetch_assoc($get_att)){
                $status = $row[$counter];
                if($status == 'present'){
                    $present++;
                }
                else if($status == 'absent'){
                    $absent++;
                }
            }
        }
       
        $counter ="";
       }
     $m = '';
    }    
    foreach($in as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
    }    
    foreach($pg as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
      $m = '';
    }    
    foreach($te as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
      $m = '';
    }    
    foreach($es as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
      $m = '';
    }
    foreach($ee as $m){
        foreach($range as $counter){
            $counter = "a".$counter;
         $get_att  = mysqli_query($con,"SELECT `$counter` FROM `$m` WHERE 1");
         if(!is_bool($get_att)){
             while($row = mysqli_fetch_assoc($get_att)){
                 $status = $row[$counter];
                 if($status == 'present'){
                     $present++;
                 }
                 else if($status == 'absent'){
                     $absent++;
                 }
             }
         }
        
         $counter ="";
        }
      $m = '';
    }






    function num_of_lec($dept,$batch,$con){
        $mm_lectures = 0; 
        $period_id_Q  = mysqli_query($con,"SELECT `period_id` FROM `period_table_normal` WHERE dept_id = '$dept' and batch_id = '$batch'");
        while($row = mysqli_fetch_assoc($period_id_Q)){
            $period_id = $row['period_id']; 
            $lecture_id  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_id = '$period_id'");
            while($row = mysqli_fetch_assoc($lecture_id)){
            $mm_lectures+= 1;
            }
        }
           
        return $mm_lectures; 
    }
    




    function num_of_subject($arr,$string){
        $subject = 0;
        foreach($arr as $m){
            if(strpos($m,$string) !== false){
                $subject++;
            }
        }
        return $subject;
    }




// ar
$total_subject_ar_17 =  num_of_subject($ar,'ar_2');
$total_subject_ar_18 =  num_of_subject($ar,'ar_3');
$total_subject_ar_19 =  num_of_subject($ar,'ar_4');
$total_subject_ar_20 =  num_of_subject($ar,'ar_5');

// number of conducted lectures
$ar_17 =  num_of_lec('ar',2,$con);
$ar_18 = num_of_lec('ar',3,$con);
$ar_19 = num_of_lec('ar',4,$con);
$ar_20 = num_of_lec('ar',5,$con);


// ch
$total_subject_ch_17 =  num_of_subject($ch,'ch_2');
$total_subject_ch_18 =  num_of_subject($ch,'ch_3');
$total_subject_ch_19 =  num_of_subject($ch,'ch_4');
$total_subject_ch_20 =  num_of_subject($ch,'ch_5');

// number of conducted lectures
$ch_17 =  num_of_lec('ch',2,$con);
$ch_18 = num_of_lec('ch',3,$con);
$ch_19 = num_of_lec('ch',4,$con);
$ch_20 = num_of_lec('ch',5,$con);

// cs
$total_subject_cs_17 =  num_of_subject($cs,'cs_2');
$total_subject_cs_18 =  num_of_subject($cs,'cs_3');
$total_subject_cs_19 =  num_of_subject($cs,'cs_4');
$total_subject_cs_20 =  num_of_subject($cs,'cs_5');

// number of conducted lectures
$cs_17 =  num_of_lec('cs',2,$con);
$cs_18 = num_of_lec('cs',3,$con);
$cs_19 = num_of_lec('cs',4,$con);
$cs_20 = num_of_lec('cs',5,$con);

// ee
$total_subject_ee_17 =  num_of_subject($ee,'ee_2');
$total_subject_ee_18 =  num_of_subject($ee,'ee_3');
$total_subject_ee_19 =  num_of_subject($ee,'ee_4');
$total_subject_ee_20 =  num_of_subject($ee,'ee_5');

// number of conducted lectures
$ee_17 =  num_of_lec('ee',2,$con);
$ee_18 = num_of_lec('ee',3,$con);
$ee_19 = num_of_lec('ee',4,$con);
$ee_20 = num_of_lec('ee',5,$con);

// es
$total_subject_es_17 =  num_of_subject($es,'es_2');
$total_subject_es_18 =  num_of_subject($es,'es_3');
$total_subject_es_19 =  num_of_subject($es,'es_4');
$total_subject_es_20 =  num_of_subject($es,'es_5');

// number of conducted lectures
$es_17 =  num_of_lec('es',2,$con);
$es_18 = num_of_lec('es',3,$con);
$es_19 = num_of_lec('es',4,$con);
$es_20 = num_of_lec('es',5,$con);

// in
$total_subject_in_17 =  num_of_subject($in,'in_2');
$total_subject_in_18 =  num_of_subject($in,'in_3');
$total_subject_in_19 =  num_of_subject($in,'in_4');
$total_subject_in_20 =  num_of_subject($in,'in_5');

// number of conducted lectures
$in_17 =  num_of_lec('in',2,$con);
$in_18 = num_of_lec('in',3,$con);
$in_19 = num_of_lec('in',4,$con);
$in_20 = num_of_lec('in',5,$con);

// mm
$total_subject_mm_17 =  num_of_subject($mm,'mm_2');
$total_subject_mm_18 =  num_of_subject($mm,'mm_3');
$total_subject_mm_19 =  num_of_subject($mm,'mm_4');
$total_subject_mm_20 =  num_of_subject($mm,'mm_5');

// number of conducted lectures
$mm_17 =  num_of_lec('mm',2,$con);
$mm_18 = num_of_lec('mm',3,$con);
$mm_19 = num_of_lec('mm',4,$con);
$mm_20 = num_of_lec('mm',5,$con);

// pg
$total_subject_pg_17 =  num_of_subject($pg,'pg_2');
$total_subject_pg_18 =  num_of_subject($pg,'pg_3');
$total_subject_pg_19 =  num_of_subject($pg,'pg_4');
$total_subject_pg_20 =  num_of_subject($pg,'pg_5');

// number of conducted lectures
$pg_17 =  num_of_lec('pg',2,$con);
$pg_18 = num_of_lec('pg',3,$con);
$pg_19 = num_of_lec('pg',4,$con);
$pg_20 = num_of_lec('pg',5,$con);

// te
$total_subject_te_17 =  num_of_subject($te,'te_2');
$total_subject_te_18 =  num_of_subject($te,'te_3');
$total_subject_te_19 =  num_of_subject($te,'te_4');
$total_subject_te_20 =  num_of_subject($te,'te_5');

// number of conducted lectures
$te_17 =  num_of_lec('te',2,$con);
$te_18 = num_of_lec('te',3,$con);
$te_19 = num_of_lec('te',4,$con);
$te_20 = num_of_lec('te',5,$con);





//    echo  $c_left_in_17 = $number_of_week - $in_17;
    







//  echo    $present." ".$absent;


    



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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<head>
    <script>
        $('.profile').click(function () {
    if(  
        $("#drop-down-profile").hasClass('row-sidebar-profile')){
        $("#drop-down-profile").addClass('row-sidebar-profile-display');
        $("#drop-down-profile").removeClass('row-sidebar-profile');
    }
    else{
        $("#drop-down-profile").addClass('row-sidebar-profile');
        $("#drop-down-profile").removeClass('row-sidebar-profile-display');
    }
});

// hover function only if width is above 768px
if( $( window ).width()>768){
    $('#sidebar').hover(function () {
        // alert("done");
       $(this).addClass('sidebar-opened');
       $(".row-sidebar-text").addClass('text-opened');
       $('.icon-sidebar').css('margin','0px');
       $('.row-sidebar').css('padding','0px 10px');
       }
      ,
      function (){
       $(this).removeClass('sidebar-opened');
       $(".row-sidebar-text").removeClass('text-opened');
       $(".dashboard-inner").removeClass('da');
       $('.icon-sidebar').css('margin','auto');
       $('.row-sidebar').css('padding','0px');
      } 
    );
       }



    </script>
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
                        <?php echo $username_name ?>
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
                <div class="row-sidebar">
                    <i class="fas fa-university icon-sidebar "></i>
                    <div class="row-sidebar-text ">
                        Overall Attendance
                    </div>
                </div>
                <div class="row-sidebar  selected-sidebar">
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

             <!-- top graph -->
            <div class="dashboard-inner-main-graph depart-admin">
                <h2>
                    Department Wise Attendance
                  <?php echo   $mm_17_stat;?>
                </h2>
                <canvas id="overallstatsChart"></canvas>
            </div>


            <div class="depart-admin">
                <h2>
                    Department Wise Attendance
                </h2>
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


            <h2 class="dashboard-heading avatar"
                data-tooltip="Showing the last 30 days attendance uploaded in entire university">
                Department Wise Attendance
            </h2>

            <!-- depart wise statistics -->
            <div class="dashboard-inner-main-departs">
                <div class="dimd-row">
                    <div class="dimd-inner">
                        <h2>Computer System Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="CSEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 17</h2>
                                <h3><?php echo $dept_cs_17_ids ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 18</h2>
                                <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 19</h2>
                                <h3><?php echo $attendance_batch_cs_19_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Batch 20</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2>Electronic Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="ESOverall"></canvas>

                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 17</h2>
                                <h3><?php echo $attendance_batch_es_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 18</h2>
                                <h3><?php echo $attendance_batch_es_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 19</h2>
                                <h3><?php echo $attendance_batch_es_19_PER  ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Batch 20</h2>
                                <h3><?php echo $attendance_batch_es_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2>Energy and Environment Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="EEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 17</h2>
                                <h3><?php echo $attendance_batch_ee_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 18</h2>
                                <h3><?php echo $attendance_batch_ee_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 19</h2>
                                <h3><?php echo $attendance_batch_ee_19_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Batch 20</h2>
                                <h3><?php echo $attendance_batch_ee_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show" id="show">

                    <div class="dimd-row">
                        <div class="dimd-inner">
                            <h2>Industrial Engineering and Management</h2>
                            <div class="dimd-inner-top" id="chartContainer">

                                <canvas id="INOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_in_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_in_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_in_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_in_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Architectural Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">

                                <canvas id="AROverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_ar_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_ar_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_ar_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_ar_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Material and Mettalurgy Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">

                                <canvas id="MMOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_mm_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_mm_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_mm_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_mm_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-row">
                        <div class="dimd-inner">
                            <h2>Telecommunication Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="TEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_te_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_te_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_te_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_te_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Petroluem and Gas Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="PGOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_pg_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_pg_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_pg_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_pg_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Chemical Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CHOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_ch_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_ch_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_ch_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_ch_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text" id="text">
                    show all...
                </div>
                <div class="text" id="texthide">
                    show less...
                </div>
            </div>


            <h2 class="dashboard-heading avatar"
                data-tooltip="Showing the number of classes conducted/uploaded in entire university">
                Class Conduction Status
            </h2>



            <!-- classes conducted records -->
            <div class="dashboard-inner-main-departs">
                <div class="dimd-row">
                    <div class="dimc-inner">
                        <h2>Computer System Engineering</h2>
                        <div class="dimc-inner-top">
                            <h2>100%</h2>
                        </div>
                        <div class="dimc-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Expected</h2>
                                <h3><?php echo $total_subject_cs_17 * 8 ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Uploaded</h2>
                                <h3><?php echo $cs_17+$cs_18+$cs_19+$cs_20 ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3><?php echo ($total_subject_cs_17 * 8)-$cs_17 ?></h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Classes compensated</h2>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimc-inner">
                        <h2>Electronic Engineering</h2>
                        <div class="dimc-inner-top">
                            <h2>100%</h2>
                        </div>
                        <div class="dimc-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Expected</h2>
                                <h3><?php echo $total_classes_es ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Uploaded</h2>
                                <h3><?php echo $total_classes_es ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3>0</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Classes compensated</h2>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimc-inner">
                        <h2>Energy and Environment Engineering</h2>
                        <div class="dimc-inner-top">
                            <h2>100%</h2>
                        </div>
                        <div class="dimc-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Expected</h2>
                                <h3><?php echo $total_classes_ee ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Uploaded</h2>
                                <h3><?php echo $total_classes_es ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3>0</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Classes compensated</h2>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show" id="showclass">
                    <div class="dimd-row">
                        <div class="dimc-inner">
                            <h2>Industrial Engineering and Management</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_in ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_in ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Architectural Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_ar ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_ar ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Material and Mettalurgy Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_mm ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_mm?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-row">
                        <div class="dimc-inner">
                            <h2>Telecommunication Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_te ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_te ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Petroluem and Gas Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_pg ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_pg ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Chemical Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_ch ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_ch ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text" id="textclass">
                    show all...
                </div>
                <div class="text" id="textclasshide">
                    show less...
                </div>
            </div>







        </div> 
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
                /* width: fit-content; */
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

            <!-- // <?php $time_line = ['week1','week2','week3','week4','week5','week6']; ?>
            // var label = [];
            // <?php for($i=0;$i<sizeof($time_line);$i++){
            //     ?>

            //     label.push("<?php echo $time_line[$i] ?>");
            //     <?php
            // }
            // ?>
            // <?php $data_set = ['22','11','32','14','17','11']; ?>
            // var data = [];
            // <?php for($i=0;$i<sizeof($data_set);$i++){
            //     ?>

            //     data.push("<?php echo $data_set[$i] ?>");
            //     <?php
            }
        }
            // ?>
            // overall university report
            var overallstatsChart = document.getElementById("overallstatsChart").getContext('2d');
            var myChart = new Chart(overallstatsChart, {
                type: 'line',
                data: {
                    labels: label,
                    datasets: [{
                        label: 'University Attendance', // Name the series
                        data: data, // Specify the data values array
                        fill: false,
                        borderColor: '#2196f3', // Add custom color border (Line)
                        backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                        borderWidth: 2 // Specify bar border width
                    }]
                },
                options: {
                    responsive: true, // Instruct chart js to respond nicely.
                    maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                }
            });

        </script> -->






<!-- 
        <script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<!-- <script src="../assests/script/dashbaord.js"></script>

</html> -->


























