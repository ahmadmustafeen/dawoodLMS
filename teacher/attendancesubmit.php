<?php
require_once('../connection.php');
session_start();
if(isset($_POST['submit'])){ 
    $get_recent_term_Q  = mysqli_query($con,"SELECT `term_name`,`term_id` FROM `term` WHERE 1");
    while($row = mysqli_fetch_assoc($get_recent_term_Q)){
        $term_name = $row['term_name'];
        $term_id = $row['term_id'];
    }
    $class_name =  $_POST['class_name'];
    $period_id =  $_POST['period_id'];
    
    $date = $_POST['date'];
    $period_name_Qa  = mysqli_query($con,"SELECT `subject_id`,`section` FROM `period_table_normal` WHERE period_id = '$period_id'");

    while($row = mysqli_fetch_assoc($period_name_Qa)){
        $subject_id = $row['subject_id'];
        $section = $row['section'];
    }



    $subject_name_get  = mysqli_query($con,"SELECT `subject_name` FROM `subject` WHERE subject_id = '$subject_id'");

    while($row = mysqli_fetch_assoc($subject_name_get)){
        $subject_name = $row['subject_name'];
    }


    // $term = 2;
    $term = 1;

    $attendance_table_name = $class_name.'_'.$subject_id.'_'.$term.'_'.$section.'_attendance';
    $class_name_student  = $class_name."_".$term_id."_".$section."_students";
    // echo $attendance_table_name;
    // echo $class_name_student;
    

    // inserting into lecture detail so a new id is generated and can be used to enter the attendance for that specific lecture
    // $date = date('Y-m-d');
    $queryinsert = "INSERT INTO `lecture_details`( `period_id`, `lecture_date`) VALUES ('$period_id','$date')";
    $con -> query($queryinsert);


    $id = [];
    $gettin_stud_id_Q  = mysqli_query($con,"SELECT * FROM `$class_name_student` WHERE 1" );
    while($row = mysqli_fetch_assoc($gettin_stud_id_Q)){
        $student_id = $row['student_id'];
        array_push($id,$student_id);
    }


    $batch_ida = explode('_',$class_name);
    $batch_id = $batch_ida[1];
    $dept_id = $batch_ida[0];
    $batch_name_get  = mysqli_query($con,"SELECT * FROM `batch` WHERE batch_id =  '$batch_id'" );
    while($row = mysqli_fetch_assoc($batch_name_get)){
        $batch_name = $row['batch_name'];
    }
    $dept_name_get  = mysqli_query($con,"SELECT * FROM `department` WHERE department_id =  '$dept_id'" );
    while($row = mysqli_fetch_assoc($dept_name_get)){
        $department_name = $row['department_name'];
    }





    // now getting the id just entered.
    $getting_lecture_id  = mysqli_query($con,"SELECT `lecture_id` FROM `lecture_details` WHERE period_id = '$period_id' and lecture_date = '$date'" );
    while($row = mysqli_fetch_assoc($getting_lecture_id)){
        $lecture_id = $row['lecture_id'];
    }
    // echo $lecture_id;

    $creating_a_class = "INSERT INTO `$attendance_table_name` (`lecture_id`) VALUES ('$lecture_id')";
    $con -> query($creating_a_class);
    
    for($i=0;$i<sizeof($id);$i++){
        if(isset($_POST[$id[$i]])){
            $statusget = strtoupper($_POST[$id[$i]]);
            $student_rollnumber = 'a'.((string)($i+1));
            if($statusget == 'ABSENT'){
                $query = "UPDATE `$attendance_table_name` SET `$student_rollnumber`='absent' where lecture_id = '$lecture_id'";
                if($con -> query($query)){
                    // echo "ABAS";
                }
            } 
            if($statusget == 'PRESENT'){
                $query = "UPDATE `$attendance_table_name` SET `$student_rollnumber`='present' where lecture_id = '$lecture_id'";
                $con -> query($query);
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
        <div class="sidebar " id="sidebar">
            <div class="sidebar-inner " id="sidebar-inner">
                <p>D.A.M.S</p>
                <hr>
                <div class="row-sidebar">
                    <a href="./index.html"> <i class="far fa-user-circle icon-sidebar"></i>
                        <div class="row-sidebar-text name-bar ">
                            Admin
                        </div>
                    </a>
                </div>
                <hr>
                <div class="row-sidebar selected-sidebar profile">
                    <i class="fas fa-university icon-sidebar "></i>
                    <div class="row-sidebar-text ">
                        ADD
                    </div>
                </div>
                <div id="drop-down-profile" class="row-sidebar-profile">
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Subject
                        </div>
                    </div>
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            User
                        </div>
                    </div>
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Student
                        </div>
                    </div>
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Department
                        </div>
                    </div>
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Batch
                        </div>
                    </div>

                </div>

                <div class="row-sidebar">
                    <i class="fas fa-building icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Upload Timetable
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-users icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Upload Compensated Table
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-user-friends icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Delete Subject
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-book icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Delete Teacher
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-download icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Delete Student
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-sign-out-alt icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Edit Profile
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
            <div class="dashboard-inner-top">
                <h2>
                    Attendance of Batch <b style="font-weight:bolder">
                        <?php echo $batch_name ?> <br>
                    </b> and Subject <strong
                        style="font-weight:bolder"><?php echo ucfirst($subject_name)  ?></strong><br> is submitted
                    Successfully.
                </h2>
                <div class="button-col">
                    <a href="./index.php">
                        <button>Back To Dashboard</button>
                    </a>
                </div>

            </div>



        </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>

<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="../assests/script/dashbaord.js"></script>

</html>

<script>
b = 'red';
status = [];
$('#selectDeparta').change(function() {
    // $('#best-batch-heading').css('display', 'none');
    // $('#best-batch-div').css('display', 'none');
    // $('#batch-heading').css('display', 'flex');
    // $('#batch-div').css('display', 'flex');
    $('#student_name_div').css('display', 'flex');
    number_of_students = document.getElementById('totalnumberofstudents').value;
    for (i = 0; i > number_of_students; i++) {
        status.push('present');
    }

});


$('#selectBatch').change(function() {
    $('#best-batch-heading').css('display', 'none');
    $('#best-batch-div').css('display', 'none');
    $('#batch-heading').css('display', 'flex');
    $('#batch-div').css('display', 'flex');
});

$('#chkTest').click(function() {
    if (b == 'red') {
        b = 'green';
    } else {
        b = 'red';
    }

});









// automaic
way = 'red';
$('#way').click(function() {
    if (way == 'red') {
        document.getElementById('manual').style.display = 'flex';
        document.getElementById('automatic').style.display = 'none';
        way = 'green';
    } else {
        document.getElementById('automatic').style.display = 'flex';
        document.getElementById('manual').style.display = 'none';
        way = 'red';
    }

});

// attendace template to be put in loop
var switchStatus = false;
$(".students_present").on('change', function() {
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
    } else {
        switchStatus = $(this).is(':checked');
    }
});


$("#selectDepart").change(function() {
    $('.dit-class-students').css('display', 'flex');

});
</script>

<!-- pop up code -->
<script>
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="./jquery.js"></script>





<script>
function get(ida) {
    alert(ida);
}
</script>

<script>
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>
<?php
}
else{
    header('location:./index.php');
}