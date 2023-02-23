<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="db_contact";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//check the connection
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());

}
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $umessage=$_POST['umessage'];
    $sql_query = "INSERT INTO details(fname,phone,email,umessage)
    VALUES('$fname','$phone','$email','$umessage')";
    if(mysqli_query($conn,$sql_query))
    {
        echo"New details entry inserted successfully!";

    }
    else{
        echo"Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>