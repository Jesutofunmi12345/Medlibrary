<?php 
session_start();

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'fct_library');

// variable declaration
$school_id = "";
$email= "";
$firstname = "";
$lastname= "";
$phonenumber= "";
$address= "";
$password= "";
$confirm_password= "";
$type= "";
$level= "";
$user_type = "";

$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['reg_user'])) {
    register();

}
// REGISTER USER
function register(){
  // call these variables with the global keyword to make them available in function
  global $db, $errors, $firstname, $lastname, $password , $confirm_password, $school_id, $phonenumber, $email,  $address, 
        $type, $level, $user_type;

  // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $firstname  =  e($_POST['firstname']);
    $lastname  =  e($_POST['lastname']);
    $school_id    =  e($_POST['school_id']);
    $phonenumber  =  e($_POST['phonenumber']);
    $password  =  e($_POST['password']);
    $confirm_password  = e($_POST['confirm_password']);
    $email = e($_POST['email']);
    $address = e($_POST['address']);
    $type = e($_POST['type']);
    $level = e($_POST['level']);
    $user_type = e($_POST['user_type']);


  // form validation: ensure that the form is correctly filled
  if (empty($school_id)) { 
    array_push($errors, "School_ID is required"); 
  }
  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }
  if (empty($firstname)) { 
    array_push($errors, "Firstname is required"); 
  }
  if (empty($lastname)) { 
    array_push($errors, "Lastname is required"); 
  }
  if (empty($address)) { 
    array_push($errors, "Address is required"); 
  }
  if (empty($phonenumber)) { 
    array_push($errors, "Phonenumber is required"); 
  }
  if (empty($type)) { 
    array_push($errors, "Type is required"); 
  }
  if (empty($level)) { 
    array_push($errors, "Level is required"); 
  }

  if (empty($user_type)) { 
    array_push($errors, "User_type is required"); 
  }
  if (empty($password)) { 
    array_push($errors, "Password is required"); 
  }
  if ($password != $confirm_password) {
    array_push($errors, "The two passwords do not match");
  }



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE school_id='$school_id' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['school_id'] === $school_id) {
      array_push($errors, "school_id already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  // register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($confirm_password);//encrypt the password before saving in the database

   $query = "INSERT INTO users (school_id, email, firstname, lastname, user_type, password, address, type, level) 
          VALUES('$school_id', '$email','$firstname','$lastname', '$user_type', '$password', '$address', '$type', '$level')";
      mysqli_query($db, $query);

      $_SESSION['school_id'] = $school_id;

      $_SESSION['success']  = "Registration Successful";


       header('location: index.php');
     }

    else {
      echo "Registration unsuccessful";       
    }

   
}




// return user array from their id
function getUserById($id){
  global $db;
  $query = "SELECT * FROM users WHERE id=" . $id;
  $result = mysqli_query($db, $query);

  $user = mysqli_fetch_assoc($result);
  return $user;
}

// escape string
function e($val){
  global $db;
  return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
  global $errors;

  if (count($errors) > 0){
    echo '<div class="error">';
      foreach ($errors as $error){
        echo $error .'<br>';
      }
    echo '</div>';
  }
}
function isLoggedIn()
{
  if (isset($_SESSION['user'])) {
    return true;
  }else{
    return false;
  }
}


/*
// call the login() function if register_btn is clicked
if (isset($_POST['login_user'])) {
  login();
}

// LOGIN USER
function login(){
  global $db, $school_id, $password, $errors;

  // grap form values
  $school_id = e($_POST['school_id']);
  $password = e($_POST['password']);

  // make sure form is filled properly
  if (empty($school_id)) {
    array_push($errors, "School_ID is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  // attempt login if no errors on form
  if (count($errors) == 0) {
    $password = md5($password);
  

    $query = "SELECT * FROM users WHERE school_id='$school_id' AND password='$password' LIMIT 1";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) { // user found
      // check if user is admin or user
      $logged_in_user = mysqli_fetch_assoc($results);
      if ($logged_in_user['user_type'] == 'admin') {

        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: admin.php');     
      }
      elseif ($logged_in_user['user_type'] == 'user')
       {
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: new.php');
      }

   }
    else {
      array_push($errors, "Wrong username/password combination");
    }
  }

  }


/*function isAdmin()
{
  if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
    return true;
  }else{
    return false;
  }
}*/
?>