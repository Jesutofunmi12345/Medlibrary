<?php
session_start(); // Starting Session


$error=''; // Variable To Store Error Message

if (isset($_POST['login_u'])) {
if (empty($_POST['uname']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
} 
else
{
// Define $username and $password
$uname=$_POST['uname'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connect.php';
$conn = Connect();

//$_SESSION['login_user3'] = $_POST['uname'];

$usersql = "SELECT * FROM users WHERE username = '$uname' AND password = '$password'";
            $userresult = $conn->query($usersql);

            if ($userresult->num_rows == 1) {
                // output data of each row
                $user = $userresult->fetch_assoc();

                    //$_SESSION['userid'] = $user['user_id'];
                    $_SESSION['login_user3'] = $user['email'];
                    $_SESSION['fname'] = $user['fname'];
                    //$_SESSION['contact'] = $user['contact'];
                    //$_SESSION['address'] = $user['address'];

                    header("location: user/mypage.php"); // Redirecting To Other Page

                     //echo '<script>alert("You have successfully logged in")</script>';
                    //echo '<script>window.location="dairy.php"</script>';
            } else {

            
                 
                header("location:login-failed.php");
            }

// SQL query to fetch information of registerd users and finds user match.
//$query = "SELECT username, password FROM CUSTOMER WHERE username=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
/*
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
	extract($stmt);
	$_SESSION['fname']=$fullname; // Initializing Session
	$_SESSION['login_user2']=$username;
	$_SESSION['customer_id']=$customer_id;
	$_SESSION['userphone']=$contact;

	header("location: member-index.php"); // Redirecting To Other Page
} else {
header("location:login-failed.php");
}
*/
mysqli_close($conn); // Closing Connection
}
}
?>
<?php 
	/*	require("session.php");
        require("functions.php");
		require("connect.php");




        if (isset($_POST['login'])) {

            $email = $_POST['email'];
            $password = sha1($_POST['password']);

            $usersql = "SELECT * FROM ffb_user WHERE email = '$email' AND password = '$password'";
            $userresult = $conn->query($usersql);

            if ($userresult->num_rows ==1) {
                // output data of each row
                $user = $userresult->fetch_assoc();

                    $_SESSION['userid'] = $user['user_id'];
                    $_SESSION['myusername'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['phone_number'] = $user['phone_number'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['last_name'] = $user['last_name'];


                    header("LOCATION: ../user");
                    
                
            } else {
                 //echo "Error: " . $usersql . "<br>" . mysqli_error($conn);
                 header("LOCATION: ../index.php?loginreturn=error");
            }
            $conn->close();
            
            


        }

*/
?>