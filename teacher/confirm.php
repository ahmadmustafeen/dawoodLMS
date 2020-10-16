 <?php 



require_once('../connection.php');
session_start();
if(isset($_SESSION['User']))
{    


    // if(isset($_POST['autoa'])){
        ?>
    
<?php



        $get_recent_term_Q  = mysqli_query($con,"SELECT `term_name`,`term_id` FROM `term` WHERE 1");
        while($row = mysqli_fetch_assoc($get_recent_term_Q)){
            $term_name = $row['term_name'];
            $term_id = $row['term_id'];
        }
        $term =  $term_id;
        $period_ida = $_POST['period_id'];
        $period_name_Qa  = mysqli_query($con,"SELECT  * FROM `period_table_normal` WHERE period_id = '$period_ida'");
     
        while($row = mysqli_fetch_assoc($period_name_Qa)){
            $period_id = $row['timing_id'];
            $dept_id = $row['dept_id'];
            $batch_id = $row['batch_id'];
            $subject_id = $row['subject_id'];
            $section = $row['section'];
           
           
        }
        $batch_name_Q  = mysqli_query($con,"SELECT `batch_name` FROM `batch` WHERE batch_id = '$batch_id'");
        while($row = mysqli_fetch_assoc($batch_name_Q)){
            $batch_name = $row['batch_name'];
        }
        $subject_name_get  = mysqli_query($con,"SELECT `subject_name` FROM `subject` WHERE subject_id = '$subject_id'");

        while($row = mysqli_fetch_assoc($subject_name_get)){
            $subject_name = $row['subject_name'];
        }
    
        $table_name = $dept_id."_".$batch_id."_".$subject_id."_".$term."_".$section."_attendance";
        $student_table = $dept_id."_".$batch_id."_".$term."_".$section."_students";





    include("../Classes/PHPExcel/IOFactory.php");  

    $allowed = array('.xlsx');
    $filename = $_FILES['excelFile']['name'];
    $file = explode(".",$filename);
    $filename = $file[1];
   

    if(isset($_FILES['excelFile']) && !empty($_FILES['excelFile']['tmp_name'])){
        
        
        
        






        // //////////////////////////////////////////////////
        /////////////////////////////////////////////////////
        /////////////////////////////////////////////////////
        ////////////////////////////////////////////////////







        // $date = date('Y-m-d');
        $date = $_POST['date'];
        // echo $date;



        /////////////////////////////////////////////////
        /////////////////////////////////////////////////
    



        $queryinsert = "INSERT INTO `lecture_details`( `period_id`, `lecture_date`) VALUES ('$period_ida','$date')";
        $con -> query($queryinsert);

        $getting_lecture_id  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_id = '$period_ida' and lecture_date = '$date'" );
        while($row = mysqli_fetch_assoc($getting_lecture_id)){
            $lecture_id = $row['lecture_id'];
        }



    
        
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
        $creating_a_class = "INSERT INTO `$table_name` (`lecture_id`) VALUES ('$lecture_id')";
        if($con -> query($creating_a_class)){
        }
        else{
        }
    
        for($i=0;$i<$highestRow;$i++){
            if(isset($getsheet[$i][2])){
            $get_roll = explode("@",$getsheet[$i][2]);  
            $student_username = $get_roll[0];
            // echo $student_username;
            if(strtoupper($student_username) == ""){
            break;
            }
            $roll_number = 'D-'.strtoupper($student_username);
            $get_roll = explode("@",$getsheet[$i][3]);  
            $student_status = strtoupper($get_roll[0]);
            if($student_status == 'P' || $student_status == 'PRESENT'){
                $status = "present";
            }
            if($student_status == 'A' || $student_status == 'ABSENT'){
                $status = "absent";
            }
           
            $get_roll  = mysqli_query($con,"SELECT `student_rollnumber` FROM `$student_table` WHERE student_id = '$roll_number'");
            while($row = mysqli_fetch_assoc($get_roll)){
                $student_rollnumber = $row['student_rollnumber'];
                $student_rollnumber = 'a'.(string)$student_rollnumber;
               
                $query = "UPDATE `$table_name` SET `$student_rollnumber`='$status' where lecture_id = '$lecture_id'";
                if($con ->query($query)){
                   
                }
                else{
                   
                }
            }
            

        }
        }

            
           

        }
    }



        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assests/style/dashboard-index.css">
    <link rel="stylesheet" href="../assests/style/teacher-portal.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Dashboard</title>
</head>

<body style="background-color: #e0e0e0;">
    <div class="dashboard">
        <div class="sidebar">
        <div class="sidebar-inner " id="sidebar-inner">
                <p>D.A.M.S</p>
                <hr>
                <div class="row-sidebar profile">

                    <i class="far fa-user-circle icon-sidebar"></i>
                    <div class="row-sidebar-text name-bar ">
                         <?php echo $teacher_name; ?> 
                        
                    </div>
                </div>
                <div id="drop-down-profile" class="row-sidebar-profile">
                    <div class="row-sidebar">
                        <a href="">
                            <i class="fas fa-address-card icon-sidebar"></i>
                            <div class="row-sidebar-text ">
                                View Profile
                            </div>
                        </a>

                    </div>
                    <div class="row-sidebar">
                        <a href="">
                        <i class="fas fa-unlock-alt icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Change Password
                        </div>
                        </a>
                        
                    </div>

                </div>
                <hr>
                <div class="row-sidebar selected-sidebar">


                    <i class="fas fa-file-upload icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Upload Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <a href="./attendance-eng.html">

                        <i class="fas fa-file-upload icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Upload Engaged Attendance
                        </div>
                    </a>
                </div>
                <div class="row-sidebar">
                    <i class="far fa-calendar-alt icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        View Timetable
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-users icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Remaining Scheduled Classes
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fab fa-stack-overflow icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Student Attendance Statistics
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fab fa-stack-overflow icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Classes Conducted Statistics
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-download icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        PDF Report Download
                    </div>
                </div>
                <div class="row-sidebar">
                    <a href="../logout.php" class='row-sidebar' style='width:100%'>
                        <i class="fas fa-sign-out-alt icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Logout
                        </div>
                    </a>
                </div>


            </div>   
        </div>
  
        <div class="dashboard-inner " id="main-bar">
            <div class="dashboard-inner-top">
                <h2>
                    Attendance of Batch <b style="font-weight:bolder">
                    <?php echo $batch_name ?> <br>
                    </b> and Subject <strong style="font-weight:bolder"><?php echo ucfirst($subject_name)  ?></strong><br> is submitted Successfully.
                </h2>
                <div class="button-col">
                <a href="./index.php">
                    <button>Back To Dashboard</button>
                </a>
                <a href="../logout.php">
                    <button>Logout</button>
                </a>
                </div>
                
            </div>
          
            
          
        </div>
     

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="../assests/script/dashbaord.js"></script>

</html>

<?php
    // }



    // else{


//         $username = $_SESSION['User'];
//         $user_level_Q  = mysqli_query($con,"SELECT `user_type` FROM `login_info` WHERE username = '$username'");
//         while($row = mysqli_fetch_assoc($user_level_Q)){
//             $user_level = $row['user_type'];
//         }
//         if($user_level != '3'){
//             header('location:../wellcome.php');
//         }
    
//         $username_T = "usertype_".$user_level."_info";
        
    
    
    
    
//         // section 1
//         $teacherID_Q  = mysqli_query($con,"SELECT `user_teacherid` FROM $username_T WHERE username = '$username'");
//         while($row = mysqli_fetch_assoc($teacherID_Q)){
//             $teacher_id = $row['user_teacherid'];
//         }
    
//         // section 2
//         $teacherNAME_Q  = mysqli_query($con,"SELECT `teacher_name` FROM `teacher` WHERE teacher_id = '$teacher_id'");
//         while($row = mysqli_fetch_assoc($teacherNAME_Q)){
//             $teacher_name = $row['teacher_name'];
//         }
   

//     $get_recent_term_Q  = mysqli_query($con,"SELECT `term_name`,`term_id` FROM `term` WHERE 1");
//     while($row = mysqli_fetch_assoc($get_recent_term_Q)){
//         $term_name = $row['term_name'];
//         $term_id = $row['term_id'];
//     }
//     $term =  $term_id;
// $period_ida =     $_POST['period_id'];
//     $period_name_Qa  = mysqli_query($con,"SELECT  * FROM `period_table_normal` WHERE period_id = '$period_ida'");

//     while($row = mysqli_fetch_assoc($period_name_Qa)){
//         $period_id = $row['timing_id'];
//         $dept_id = $row['dept_id'];
//         $batch_id = $row['batch_id'];
//         $section = $row['section'];
//         $subject_id = $row['subject_id'];
//         $batch_name_Q  = mysqli_query($con,"SELECT `batch_name` FROM `batch` WHERE batch_id = '$batch_id'");
//     }
//     $absent = [];
//     $present = [];
//     $term = 1;
//     $table_name =  $dept_id.'_'.$batch_id.'_'.$term.'_'.$section.'_students';
//     echo $table_name;

//     for($i=1;$i<151;$i++){
//         if(isset($_POST[$i])){
//             array_push($absent,$_POST[$i]);
//         }
//     }

//     $student_name_ID  = mysqli_query($con,"SELECT `student_name`,`student_id`,`student_rollnumber` FROM `$table_name` WHERE 1");
//     while($row = mysqli_fetch_assoc($student_name_ID)){
//     array_push($present,$row['student_rollnumber']);
//     }



//     for($i=0;$i<sizeof($present);$i++){     
//         for($j=0;$j<sizeof($absent);$j++){
//             if($present[$i] == $absent[$j]){
//                 array_splice($present,$i,1);
//             }
//         }   
//     }








  
    
?> 


<!-- <!DOCTYPE html>
<html lang="en"> -->

<!-- <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assests/style/dashboard-index.css">
    <link rel="stylesheet" href="../assests/style/teacher-portal.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Confirm Attendance</title>
</head> -->

<body>
    
<!-- <form action="./attendancesubmit.php" method="POST">
    <div class="dashboard">
        <div class="sidebar " id="sidebar">
        <div class="sidebar-inner " id="sidebar-inner">
                <p>D.A.M.S</p>
                <hr>
                <div class="row-sidebar profile">

                    <i class="far fa-user-circle icon-sidebar"></i>
                    <div class="row-sidebar-text name-bar ">
                         <?php echo $teacher_name; ?> 
                        
                    </div>
                </div>
                <div id="drop-down-profile" class="row-sidebar-profile">
                    <div class="row-sidebar">
                        <a href="">
                            <i class="fas fa-address-card icon-sidebar"></i>
                            <div class="row-sidebar-text ">
                                View Profile
                            </div>
                        </a>

                    </div>
                    <div class="row-sidebar">
                        <a href="">
                        <i class="fas fa-unlock-alt icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Change Password
                        </div>
                        </a>
                        
                    </div>

                </div>
                <hr>
                <div class="row-sidebar selected-sidebar">


                    <i class="fas fa-file-upload icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Upload Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <a href="./attendance-eng.html">

                        <i class="fas fa-file-upload icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Upload Engaged Attendance
                        </div>
                    </a>
                </div>
                <div class="row-sidebar">
                    <i class="far fa-calendar-alt icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        View Timetable
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-users icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Remaining Scheduled Classes
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fab fa-stack-overflow icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Student Attendance Statistics
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fab fa-stack-overflow icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Classes Conducted Statistics
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-download icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        PDF Report Download
                    </div>
                </div>
                <div class="row-sidebar">
                    <a href="../logout.php" class='row-sidebar' style='width:100%'>
                        <i class="fas fa-sign-out-alt icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Logout
                        </div>
                    </a>
                </div>


            </div>










        </div>
        <div class="dashboard-inner " id="main-bar"> -->
            <!-- <div class="floating-menu">
                <button id="floating">X</button>
            </div>
            <div class="dashboard-inner-teacher-top">
                <h2>Teacher's Dashboard (Review Attendance)</h2>
            </div>
            <br>
            <div class="dit-class-students confirm" >
                <h2>Absent Students</h2>
                <p>All the student who are absent</p>
                    <table id='students'>
                        <tr>
                            <td class='table-name'>Serial Number</td>
                            <td class='table-name'>Student Name</td>
                            <td>Student ID</td>
                            <td>Status</td>
                        </tr> -->
                        <?php
                    //     for($i=0;$i<sizeof($absent);$i++){
                    //         $student_roll_get = $absent[$i];
                    //         $student_name_IDs  = mysqli_query($con,"SELECT `student_name`,`student_id`,`student_rollnumber` FROM `$table_name` WHERE student_rollnumber = '$student_roll_get'");
                    //         ?>
                             <!-- <tr> -->
                              <?php
                    //         while($row = mysqli_fetch_assoc($student_name_IDs)){
                    //             $student_name = ucwords($row['student_name']);
                    //             $student_id = $row['student_id'];
                                ?>
                                <!-- <td class='table-name'><?php echo $i+1 ?></td>
                                <td class='table-name'><?php echo $student_name ?></td>
                                <td><?php echo $student_id ?></td>
                                <td style="background-color:#f5365c !important;color:white"><input  name="<?php echo $student_id ?>" id="<?php echo $student_id ?>" value="absent" style="display:none;">Absent</td>
                       
                            </tr> -->
                        <?php
                    //     }
                    // }
                        ?>
                        
                    <!-- </table> -->
                    

            <!-- </div>    -->
            <!-- <div class="dit-class-students confirm" >
                <h2>Present Students</h2>
                <p>All the student who are present</p>
                    <table id='students'>
                        <tr>
                            <td class='table-name'>Serial Number</td>
                            <td class='table-name'>Student Name</td>
                            <td>Student ID</td>
                            <td>Status</td>
                        </tr> -->
                        <?php
                        // for($j=0;$j<sizeof($present);$j++){
                        //     $student_roll_geta = $present[$j];
                        //     $student_name_IDs  = mysqli_query($con,"SELECT  `student_name`,`student_id`,`student_rollnumber` FROM `$table_name` WHERE student_rollnumber = '$student_roll_geta'");
                            ?>
                            <tr>
                                <?php
                            // while($row = mysqli_fetch_assoc($student_name_IDs)){
                            //     $student_name = ucwords($row['student_name']);
                                
                            //     $student_id = $row['student_id'];
                                ?>
                                <!-- <td class='table-name'><?php echo $j+1 ?></td>
                                <td class='table-name'><?php echo $student_name ?></td>
                                <td><?php echo $student_id ?></td>
                                <td style="background-color: #2dce89 !important;color:white"><input  name="<?php echo $student_id; ?>" value="present" id="<?php echo $student_id ?>" style="display:none;"><?php echo 'PRESENT'?></td> -->
                       
                           
                        <?php
                        // } 
                        ?>
                        </tr>
                   <?php 
                //    }
                        ?>
                        
                    <!-- </table>
                    
                    <input type="date" name="date" id='date' value="<?php  echo $date ?>" >
                            <input name="class_name" id='class_name' value="<?php  echo $dept_id.'_'.$batch_id ?>" style="display:none">
                            <input name="period_id" id='period_id' value="<?php  echo $period_ida ?>" style="display:none"> -->
                    <!-- </form> -->
                    <!-- <div style="display:flex;flex-direction:row;justify-content:space-between;width:50%">
                    
                    
                    <h2>Total Absent: <?php echo $i ?></h2>
                    <h2>Total Present: <?php echo $j ?></h2>    
                </div>
                    <div style="display:flex;flex-direction:row;justify-content:space-between;width:80%">
                <a href="./index.php">
                <button style='background-color:#f5365c; border:0;color:white'>Cancel</button>
                </a>
            <button style='background-color:#2dce89 !important; border:0;' name='submit'>Confirm</button>
                </div>
            </div>
            -->

        <!-- </div>
    </div>
                    </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script> -->

<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<!-- <script src="../assests/script/dashbaord.js"></script>
 -->
<!-- </html> -->
<?php 

                    // }
                // }

?>