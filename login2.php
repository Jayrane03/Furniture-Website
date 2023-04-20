<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location : index.php");
    exit;
}
include '_db.php';
$username = $password = "";
$err = "";
// if request method is post
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if (empty($err)) {
        $sql = "SELECT  id , username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                         header("location: index.php");
                        exit;
                    }
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Document</title>
    <style>
        /* #login_body {
            background: linear-gradient(120deg, #2980b9, #8e44ad);
        } */

        .alert {
            position: absolute;
            top: 0;
            background-color: #d1e7dd;
            color: #0f5132;
            border-color: #badbcc;
            padding: 1rem 1rem;
            border-radius: .25rem;
            width: 50%;
            text-align: center;
            margin-top: 8px;
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
            border-radius: .25rem;
            padding: 1rem 1rem;
            width: 50%;
            text-align: center;
            margin-top: 8px;
        }

        @import url("https://fonts.googleapis.com/css2?family=Muli&display=swap");

        * {
            box-sizing: border-box;
        }

        @media(max-width : 700px) {
            .container {
                height: 67vh;
                width: 90vw;
                padding: 24px 23px;
                ;
            }

            .form-control input {
                width: 100%;
                font-size: 17px;
            }


        }

        body {

            font-family: "Muli", sans-serif;
            /* background-color: black; */
            color: antiquewhite;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
            height: 100vh;
            overflow: hidden;
            margin: 0;

        }

        .contain {
            margin: auto;
    background-color: #1f1f26;
    padding: 57px 116px;
    border-radius: 8px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 7px;
    -o-border-radius: 8px;
        }

        .contain h1 {
            text-align: center;
            margin-bottom: 30px;

        }

        .contain a {
            text-decoration: none;
            color: aquamarine;
        }

        .btn {
            cursor: pointer;
            display: inline-block;
            width: 100%;
            background-color: aquamarine;
            padding: 12px;
            font-family: inherit;
            font-size: 16px;
            border: 0;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        .btn:focus {
            outline: 0;
        }

        .btn:active {
            transform: scale(0.98);
            -webkit-transform: scale(0.98);
            -moz-transform: scale(0.98);
            -ms-transform: scale(0.98);
            -o-transform: scale(0.98);
        }

        .text {
            margin-top: 30px;

        }

        .form-control {
            position: relative;
    margin: 20px 0 40px;
    width: 338px;
        }

        .form-control input {
            background-color: transparent;
            border: 0;
            border-bottom: 2px #fff solid;
            display: block;
            width: 100%;
            padding: 10px 0;
            font-size: 17px;
            color: #fff;
        }

        .form-control input:focus,
        .form-control input:valid {
            outline: 0;
            border-bottom-color: aquamarine;
        }

        .form-control label {
            position: absolute;
            top: 16px;
            left: 0;
            pointer-events: none;

        }

        .form-control label {
            display: inline-block;
            font-size: 17px;
            min-width: 5px;
            transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -ms-transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -o-transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .form-control input:focus+label,
        .form-control input:valid+label {
            color: aquamarine;
           display:none;

        }
    </style>
</head>

<body id="login_body">




    <div class="contain">
        <h1>Log In</h1>
        <form action"" method="post">
            <div class="form-control">
                <input type="username" id="username" name="username" required />
                <label for="username">Enter your username</label>
                <div class="error" id="usernameError"></div>

            </div>
            <div class="form-control">
                <input type="password" id="password" name="password" required />
                <label for="password">Enter Password</label>
                <div class="error" id="passwordError"></div>

            </div>

            <button id="ca" class="btn  myButton" type="submit">Login In</button>
            <p class="text">Don't have a account</p>
            <a href="signup.php">Create Account</a><br> <br>
            <a href="./index.php">Home Page</a>



        </form>
    </div>
    <script>
        const labels = document.querySelectorAll(".form-control label");
        labels.forEach((label) => {
            label.innerHTML = label.innerText.split("").map((letter, idx) =>
                `<span style="transition-delay:$(idx * 50)ms">${letter}</span>`
            ).join("");
        });
        //  let ca  = document.getElementById('ca');
        // ca.addEventListener('click',()=>{
        //     window.alert("Your account is created successfully")
        // });
    </script>
</body>

</html>