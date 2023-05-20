<?php
session_start();

require_once "db1.php";

if (isset($_SESSION['user_id']) != "") {
    header("Location: dashboard.php");
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tblusers WHERE email = '" . $email . "' and password = '" . md5($password) . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['uid'];
            $_SESSION['user_role'] = $row['RoleID'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_mobile'] = $row['mobile'];
            header("Location: dashboard.php");
        }
    }
    else {
        $error_message = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 30px;

        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        #bg {
            background: rgb(152, 225, 255);
            background: linear-gradient(90deg, rgba(152, 225, 255, 1) 0%, rgba(251, 251, 251, 1) 0%);
        }
    </style>
</head>

<body>
    <!-- login -->
    <div id="id01" class="modal">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form class="modal-content animate pt-4" id="bg"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                    style="border-radius:5px ; box-shadow:0px 10px 30px -5px; font-family:'Farro'">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">&times;</span>
                        <h2 class="text-center pb-1">Login Form</h2>
                        <p class="text-center pb-3">Please fill all fields in the form</p>

                    </div>
                    <div class="container">

                        <input type="email" placeholder="Email" name="email" class="form-control" value=""
                            maxlength="30" required=""><br>

                        <input type="password" placeholder="Password" name="password" class="form-control" value=""
                            maxlength="8" required="">
                        <label class="text-left">
                            <input type="checkbox" checked="checked" name="remember" class="mt-3 mb-3 text-left">
                            Remember me
                        </label>
                        <div>
                            <input type="submit" class="btn btn-primary form-control" name="login" value="submit">
                        </div><br>
                        <p class="text-center">Create a new account?<a style="width:auto;"
                                href="https://t.me/maosokheng22">Contact</a> </p>
                        <hr>
                        <div class="row pb-4" style="vertical-align:middle;">
                            <div class="col-lg-6 text-left">
                                <p>Forgot <a href="https://t.me/maosokheng22">password?</a></p>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 text-right">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                    class="cancelbtn btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>