<?php
include 'connect.php';
$myusername =$_POST['username'];
$mypassword =$_post['password'];

$query ="select password from login where id=\"$myusername\"";
$result = mysqli_query($dbh,$query)
 or die('error executing the query' .mysqli_error($dbh));
$row =mysqli_fetch array($result);
if($row['password']==$mypassword)
{
 echo('successfully connected')
}
