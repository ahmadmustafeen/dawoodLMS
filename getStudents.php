<?php
require_once("./connection.php");
if(isset($_POST)){
    $dept=  $_POST['dept'];
    $batch =  $_POST['batch'];
    $section = 'a';
    $term = 1;
    $table_name = $dept."_".$batch."_".$term."_".$section."_students";
    
    $get_details  = mysqli_query($con,"SELECT `student_id`,`student_name` FROM `$table_name` WHERE 1");
        switch($batch){
            case 1:
                $batch_s = '16';
            break;
            case 2:
                $batch_s = '17';
            break;
            case 3:
                $batch_s = '18';
            break;
            case 4:
                $batch_s = '19';
            break;
            case 5:
                $batch_s = '20';
            break;
        }
    ?>
    <h2>
        <?php echo"Department: $dept " ?>
        <?php echo"Batch: $batch_s " ?>
    </h2>
    <table>
    <?php
    while($row = mysqli_fetch_assoc($get_details)){
        $student_id = $row['student_id'];
        $student_name = $row['student_name'];
            
           ?>
        <tr>
        <td>
            <?php echo $student_id; ?>
        </td>  <td>
            <?php echo $student_name; ?>
        </td>
    </tr><?php

        }
        ?>
        
        </table>

<?php

}
else{
    header("location:studentcheck.html");
}

?>