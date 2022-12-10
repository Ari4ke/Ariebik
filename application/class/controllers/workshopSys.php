<?php
include("../../database/database.php");

if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])){
        $dbCheckbox = implode(',',$_POST['check_list']);
        $comments = $_POST['comments'];
        $bike_id = $_POST['bike_id'];
        $user_id = $_POST['user_id'];
        
        $sql = "INSERT INTO bike_incidence VALUES ('','$dbCheckbox',
                '$comments','$bike_id','','$user_id','')";

        $result=mysqli_query($conn,$sql);
        var_Dump($sql);
        if($result){
            header("location: ../views/panel.php");
        }

}
}
?>