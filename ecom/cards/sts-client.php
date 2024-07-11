  
<?php $con = mysqli_connect('localhost','root','','mini_projet') or die('error');

$num_result = mysqli_query($con,"SELECT count(*) as total_count from client ");
$row = mysqli_fetch_object($num_result);
$R=$row->total_count

?>

