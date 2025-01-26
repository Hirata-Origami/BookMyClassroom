<?php
    session_start();
    include('../includes/dbconn.php');
    if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    //$password = md5($password);
    $stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
        $stmt->bind_param('sss',$username,$username,$password);
        $stmt->execute();
        $stmt -> bind_result($username,$username,$password,$id);
        $rs=$stmt->fetch();
        $_SESSION['id']=$id;
        if($rs){
            header("location:dashboard.php");
                } else {
                    echo "<script>alert('Invalid Username/Email or password');</script>";
                }
    }
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>BookMyClassroom</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">
    function valid() {
    if(document.registration.password.value!= document.registration.cpassword.value){
        alert("Password and Re-Type Password Field do not match  !!");
    document.registration.cpassword.focus();
    return false;
        }
    return true;
        }
    </script>

</script>

<style>
    *{
margin: 0px;
padding: 0px;
box-sizing: border-box;
font-family: 'Quicksand', sans-serif;
}

body{
display:flex;
justify-content:center;
align-items:center;
min-height: 100vh;
background-color:black; 
}

section{
position:absolute;
width:100vw;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
gap:2px;
flex-wrap: wrap;
overflow:hidden;
}

section::before{
content: '';
position: absolute;
width: 100%;
height: 100%;
background: linear-gradient(#000,aqua,#000);
animation: animate 5s linear infinite;
}

@keyframes animate
{
0%
{
 transform: translateY(-100%);
}
100%
{
 transform: translateY(100%);
}  
}
section span{
position:relative;
display: block;
width: calc(6.25vw - 2px);
height: calc(6.25vw - 2px);
background: #181818;
z-index: 2;
transition: 1.5s;

}

section span:hover
{
background-color:aqua;
transition: 0s;
}

section .signin{
position: absolute;
width: 400px;
background-color: #222;
z-index: 1000;
display:flex;
justify-content: center;
align-items: center;
padding:40px;
border-radius: 4px;
box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}

section .signin .content{
position: relative;
width: 100%;
display:flex;
justify-content: center;
align-items: center;
flex-direction: column;
gap: 40px;
}

section .signin .content h2
{
font-size : 2em;
color: aqua;
text-transform: uppercase;
}

section .signin .content .form{
width:100%;
display:flex;
flex-direction:column;
gap: 25px;
}

section .signin .content .form .inputBx
{
position: relative;
width :100%;
}

section .signin .content .form .inputBx input
{
position: relative;
width: 100%;
background: #aaa;
border:none;
outline:none;
padding: 25px 10px 7.5px;
border-radius: 4px;
color: whitesmoke;
font-weight:500;
font-size:1em;
}

section .signin .content .form .inputBx  i
{
position: absolute;
left: 0px;
padding: 15px 10px;
font-style: normal;
color: gainsboro;
transition: 0.5s;
pointer-events: none;
}

section .signin .content .form .inputBx input:focus ~i
{
transform: translateY(-7.5px);
font-size: 0.8em;
color: whitesmoke;  
}

.signin .content .form .links
{
position:relative;
width:100%;
display: flex;
justify-content:  space-between;
}

.signin .content .form .links a
{
color:whitesmoke;
text-decoration:none;

}

.signin .content .form .links a:nth-child(2)
{
color:aqua;
font-weight: 600;
}

.signin .content .form .inputBx input[type="submit"]
{
padding:10px;
background: aqua;
color:black;
font-weight: 600;
font-size: 1.25em;
letter-spacing: 0.05em;
cursor: pointer;
}


@media (max-width: 900px)
{
section span{
    width: calc(10vw - 2px);
    height: calc(10vw - 2px);

}

}

@media (max-width: 600px)
{
section span{
    width: calc(20vw - 2px);
    height: calc(20vw - 2px);

}

}


</style>

</head>

<body>
    <section>
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
    <div class="main-wrapper signin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="">
            <div class="content">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Admin Login</h2>
                        
                        <form class="mt-4" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="" for="uname">Email or Username</label>
                                        <input class="form-control" name="username" id="uname" type="text"
                                            placeholder="Email or Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="" for="pwd">Password</label>
                                        <input class="form-control" name="password" id="pwd" type="password"
                                            placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 inputBx">
                                    <div class="form-group">
                                        <label class="" for="">Demo Account :- <br>Username : admin <br>Password : admin123</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="login" class="btn btn-block btn-danger">LOGIN</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                   <a href="../index.php" class="text-danger">Go Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    </section>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    
</body>

</html>