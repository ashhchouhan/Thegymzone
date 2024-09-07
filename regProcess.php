
<?php
include 'database.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email =$_POST['email'];
$password = $_POST['password'];

if( empty($firstName)  || empty($lastName)    || empty($email)|| empty($password))
{
    // echo "<script>window.open('_self')</script>";

}

else if(isset($_POST['submit']))
{
    $name=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into userdata(firstName,lastName,email,password)values('$firstName','$lastName','$email','$password')";
    if(mysqli_query($conn,$sql))
    {
                echo "<script>window.open('schedules.php','_self')</script>";
    
    }
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
 