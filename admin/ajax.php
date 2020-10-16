<?php

require_once('../connection.php');
if(isset($_POST['id'])){
    $period_ID = $_POST['id'];
    $batch = $_POST['bat'];
    echo $period_ID.$batch;
}