<?php session_start();
    $db['db_host']="localhost";
    $db['db_user']="root";
    $db['db_pass']="";
    $db['db_name']="sih";
 
    foreach($db as $key => $value){
	   define(strtoupper($key),$value);
	
    }   


    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


    if(!$conn){
        echo "Cannot connect to the database";
    }
    /*else {
        echo "Connected!";
    }*/
    
    if(isset($_POST['alogin'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);


        //$username = string_check($username);
        //$password = string_check($password);



        $query = "SELECT * FROM admin where username = '$username'";

        $select_admin_query = mysqli_query($conn,$query);


        if(!$select_admin_query){
            die("Error ocurred ".mysqli_error($conn));
        }

        while($row = mysqli_fetch_array($select_admin_query)){
                $user_name=$row['username'];
                $user_password = $row['password'];
                $fname = $row['fname'];
                $location = $row['currAddress'];
                //$user_image = $row['image'];
                //$dept = $row['branch'];
                //$pre = $row['prefix'];

            }


            $password = crypt($password,$user_password);
            $password = substr($password,0,50);
            echo $password."<br>";


            if($password !== $user_password || $username !== $user_name){
                header("Location:alogin.php");
                echo "Invalid username or password";
            }



            else	if($password == $user_password && $username == $user_name){


                    /*$_SESSION['userId'] = x;
                    $_SESSION['firstname'] = $fname;*/
                    $_SESSION['currAddress'] = $location;

                    /*$_SESSION['user_email'] = $email;
                    $_SESSION['uimage'] = $user_image;
                    $_SESSION['br'] = $dept;
                    $_SESSION['pre'] = $pre;
*/





                    echo"<br> password";
                    header("Location:../dashboard/index.php");
                }

                else{
                    echo"<br>invalid password";
                }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="" method="post">
                <span class="login100-form-title p-b-37">
                    Admin Login
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100" type="text" name="username" placeholder="username or email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input class="login100-form-btn" type="submit" name="alogin" value="Login">
                
                </div>
                <br><br>
                <div class="text-center">
                    <a href="#" class="txt2 hov1">
                        Forgot password?
                    </a>
                </div>

                <!--	<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div> -->
            </form>


        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
