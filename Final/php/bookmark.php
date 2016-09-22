<?php
require 'connect.inc.php';
?>

<?php
//$num = $_GET['num'];
//if(isset($_SESSION['username'])){
    //echo 'You are Logged as '.$_SESSION['username'].'<br/>';
    //echo 'You are Logged as '.$_SESSION['user_id'].'<br/>';
//}
$addr = $_GET['addr'];
$name = $_GET['name'];
$aindex = $_GET['aindex'];
$user_ID = $_GET['user_ID'];
//$con = mysql_connect("localhost","root","");
$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
 
$sql_bookMarkReduplication = "SELECT * from user_bookmark where user_id = 'user_ID' and business_name = '$name' and business_address = '$addr'"; 
$data_bookMarkReduplication = mysqli_query($dbc,$sql_bookMarkReduplication);
$num_bookMarkReduplication = mysqli_num_rows($data_bookMarkReduplication);
if($num_bookMarkReduplication)
            {
                echo "<script>alert('You have Saved this service provider before!'); </script>";
            }
//mysql_select_db("a_database", $con);
else{
$sql_insert = "insert into user_bookmark(bookmark_id,business_name,business_address,user_id) values('null','$name','$addr','$user_ID')";
echo "<script type='text/javascript'>console.log('This Service Provider has been SAVED!');</script>";
}
//$res_insert = mysqli_query($dbc,$sql_insert); 

//$sql0s = "SELECT * FROM `good` where `id` = ".$aindex;
//$sql0 = mysql_query($sql0s);
 
//if($_GET['flag'] == 0){
// while($row = mysql_fetch_array($sql0)){
// echo $row['value'];
// }
//}
//else if($_GET['flag'] == 1){
 //$sql="UPDATE `good` SET `value` = '".$num."' WHERE `good`.`id` = ".$aindex;
 //$res_insert = mysqli_query($dbc,$sql_insert); 
  
 if (!mysqli_query($dbc,$sql_insert)){
 die('Error: asdsadasd' . mysql_error());
 }
 //echo $num;
//}

?>