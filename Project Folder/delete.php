<?php
   include('session.php');

?>

<?php
if(isset($_POST['dlteBtn'])){
 $id=$_POST['itemid'];
 //delete query for row with id,  $id
   $sql = "DELETE FROM `class` WHERE id = '$id' ";
        $result=mysqli_query($conn,$sql);

        
 }
?>