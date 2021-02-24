<?php

require_once('../connection.php');

?>
<form action="./period-upload.php" method="post">
<select name="depart" id="depart">
<?php
    $get_dept_info = mysqli_query($con,"SELECT  `dept_id`,`dept_name` FROM `department` WHERE 1 ");
    while($row = mysqli_fetch_array($get_dept_info)){
        $dept_id = $row['dept_id'];
        $dept_name = $row['dept_name'];
      ?>
   <option type="text" value='<?php echo $dept_id ?>'><?php echo $dept_name ?></option>
<?php
    }
    ?>
</select>
<select name="batch" id="batch">
<?php
    $get_dept_info = mysqli_query($con,"SELECT  `batch_id`,`batch_name` FROM `batch` WHERE 1 ");
    while($row = mysqli_fetch_array($get_dept_info)){
        $batch_id = $row['batch_id'];
        $batch_name = $row['batch_name'];
      ?>
   <option type="text" value='<?php echo $batch_id ?>'><?php echo $batch_name ?></option>
<?php
    }
    ?>
</select>

<select name="teacher" id="teacher">
<?php
    $get_dept_info = mysqli_query($con,"SELECT  `teacher_id`,`teacher_name` FROM `teacher` WHERE 1 ");
    while($row = mysqli_fetch_array($get_dept_info)){
        $teacher_id = $row['teacher_id'];
        $teacher_name = $row['teacher_name'];
      ?>
   <option type="text" value='<?php echo $teacher_id ?>'><?php echo $teacher_name ?></option>
<?php
    }
    ?>
</select>
<select name="subject" id="subject">
<?php
    $get_dept_info = mysqli_query($con,"SELECT  `subject_id`,`subject_name` FROM `subject` WHERE 1 ");
    while($row = mysqli_fetch_array($get_dept_info)){
        $subject_id = $row['subject_id'];
        $subject_name = $row['subject_name'];
      ?>
   <option type="text" value='<?php echo $subject_id ?>'><?php echo $subject_name ?></option>
<?php
    }
    ?>
</select>
<select name="period" id="period">
<?php
    $get_dept_info = mysqli_query($con,"SELECT  `period_id`,`period_timing` FROM `period` WHERE 1 ");
    while($row = mysqli_fetch_array($get_dept_info)){
        $period_id = $row['period_id'];
        $period_timing = $row['period_timing'];
      ?>
   <option type="text" value='<?php echo $period_id ?>'><?php echo $period_timing ?></option>
<?php
    }
    ?>
</select>
<button type="submit">Submit</button>
</form>
<?php

if(isset($_POST['depart'])){
    $depart =$_POST['depart'];
    $batch = $_POST['batch'];
    $teahcer =  $_POST['teacher'];
    $period  = $_POST['period'];
    $subject =  $_POST['subject'];
    $section = 'A';
    $semester = '4';
    $room = '0';

    $insert = "INSERT INTO `period_table`(  `period_id`,`teacher_id`,`room_id`,`dept_id`,`semester_id`,`batch_id`,`subject_id`,`section`) VALUES   ('$period',    '$teahcer', '$room', '$dept_id','$semester', '$batch_id','$subject_id','$section')";


if($con-> query($insert)){
    echo "DONE";
}
else{
    echo "NOT DO";
}
}






?>