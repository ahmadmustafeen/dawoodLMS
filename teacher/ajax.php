<?php

require_once('../connection.php');
if(isset($_POST['id'])){
        $get_recent_term_Q  = mysqli_query($con,"SELECT `term_name`,`term_id` FROM `term` WHERE 1");
    while($row = mysqli_fetch_assoc($get_recent_term_Q)){
        $term_name = $row['term_name'];
        $term_id = $row['term_id'];
    }
    $term =  $term_id;
    $period_ID = $_POST['id'];
    $period_ID_Q  = mysqli_query($con,"SELECT `dept_id`,`batch_id`,`section` FROM `period_table_normal` WHERE period_id = '$period_ID'");
    while($row = mysqli_fetch_assoc($period_ID_Q)){
        $dept_id = $row['dept_id'];
        $batch_id = $row['batch_id'];
        $section = $row['section'];
    }
    $batch_name_Q  = mysqli_query($con,"SELECT `batch_name` FROM `batch` WHERE batch_id = '$batch_id'");
    while($row = mysqli_fetch_assoc($batch_name_Q)){
        $batch_name = $row['batch_name'];
    }
    $table_name =  $dept_id.'_'.$batch_id.'_'.$term.'_'.$section.'_students';
    // $table_name = 'cs_4_1_a_students';
    
    
    echo "<tr><td class='table-name'>Student Name</td><td>Student ID</td><td>Status</td></tr>";
    $student_name_ID  = mysqli_query($con,"SELECT `student_name`,`student_id`,`student_rollnumber` FROM `$table_name` WHERE 1");
    while($row = mysqli_fetch_assoc($student_name_ID)){
        $student_name = ucwords($row['student_name']);
        $student_id = $row['student_id'];
        $student_roll_number = $row['student_rollnumber'];
       echo "<tr >
       <td class='table-name'>
       $student_name
       </td><td>
       $student_id</td>
       <td class='get_ID'>
       <div class='attendance-switch'>
       <input type='checkbox'  id='$student_roll_number' onclick='get(this.id)' value='$student_roll_number' name='$student_roll_number'>
       <label for='$student_roll_number'>
       <span class='attendance-track students_changed' id='bustton-color'>
       </span>  </label></div></td></tr></td>";
       
    }
?>
<script>
       var student_length = <?php echo $student_roll_number ?>;
        document.getElementById('totalnumberofstudents').value = student_length;
</script>   

<?php 
}



?>