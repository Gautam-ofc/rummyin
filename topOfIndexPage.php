<?php
session_start();
if (isset($_SESSION['user'])) {
    session_unset();
}
include_once './Controller.php';
if (isset($_REQUEST['register'])) {
    include_once './Controller.php';
    $controller = new Controller();
   
    if ($_REQUEST['password'] == $_REQUEST['password']) {
      
        $result = $controller->SignUp($_REQUEST);
 //print_r( $_SESSION['user'] );
        if ($result != false) {
            $_SESSION['user'] = $result[0];
            echo '<script> location.href  = "Profile.php";</script>';
        } else {
            echo '<script>alert("You enter wrong credentials. Try again!");'.$result.'</script>';
        }
    } else {
        echo '<script>alert("Confirm Password is not match.");</script>';
    }
}

?>