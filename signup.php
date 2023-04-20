<?php
// session_start();
    include '_db.php';
// $showAlert = false;
// $showError = false;
$username = $email =$password   = "";
$username_err = $email_err= $password_err = "";
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
  
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
   else{
    //prepare statement
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn , $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "s", $param_username);
          // Set the value of param username
          $param_username = trim($_POST['username']);

          // Try to execute this statement
          if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
              if(mysqli_stmt_num_rows($stmt) == 1)
              {
                  $username_err = "This username is already taken"; 
              }
              else{
                  $username = trim($_POST['username']);
              }
          }
          else{
              echo "Something went wrong";
          }
    }
   }
   mysqli_stmt_close($stmt);

// check for email
   if(empty(trim($_POST['email']))){
    $email_err = "Email cannot be blank";
}
else{
    $email = trim($_POST['email']);
}


// check for password

   if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}





// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($email_err) && empty($password_err))
{
    $sql = "INSERT INTO users (username,email,password) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username ,$param_email,$param_password);

        // Set these parameters
        $param_username = $username;
        $param_email = $email;
        // $param_password = $password;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            // echo "<script>window.open('login2.php''_self')</script>";
            // header("refresh:5;url=login2.php");
            echo'<div class="alert " role="alert">Success! Your registration is complete. Go and Login!</div>';
        }
        else{
            echo '<div class="alert-danger" role="alert">Success! Your registration is complete.</div>';
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Register Yourself</title>
    <style>
         /* #regi_body{
        background: linear-gradient(120deg,#2980b9, #8e44ad);
       } */
     .alert{
        position:absolute;
        top:0;
        background-color: #d1e7dd;
        color:#0f5132;
        border-color:#badbcc;
        padding:1rem 1rem;
        border-radius:.25rem;
        width: 50%;
    text-align: center;
    margin-top: 8px;
     }
     .alert-danger{
        color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
    border-radius:.25rem;
    padding:1rem 1rem;
        width: 50%;
    text-align: center;
    margin-top: 8px;
     }
     @import url("https://fonts.googleapis.com/css2?family=Muli&display=swap");
*{
    box-sizing: border-box;
}
@media(max-width : 700px){
    .container{
        height: 67vh;
        width: 90vw;
      padding: 24px 23px;;
    }
    .form-control input{
        width: 100%;
        font-size: 17px;
    }
   

}
body{
    font-family: "Muli",sans-serif;
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
.contain{
    margin: auto;
    background-color: #1f1f26;
    padding: 57px 116px;
    border-radius: 8px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
}
.contain h1{
    text-align: center;
    margin-bottom: 30px;
    
}
.contain a{
    text-decoration: none;
    color: aquamarine;
}
.btn{
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
.btn:focus{
    outline: 0;
}
.btn:active{
    transform: scale(0.98);
    -webkit-transform: scale(0.98);
    -moz-transform: scale(0.98);
    -ms-transform: scale(0.98);
    -o-transform: scale(0.98);
}
.text{
    margin-top: 30px;

}
.form-control{
    position: relative;
    margin: 20px 0 40px;
    width: 338px;   
}
.form-control input{
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
.form-control input:valid{
    outline: 0;
    border-bottom-color:aquamarine ;
}
.form-control label{
    position: absolute;
    top: 16px;
    left: 0;
    pointer-events: none;

}
.form-control label{
    display: inline-block;
    font-size: 17px;
    min-width: 5px;
    transition: 0.3s cubic-bezier(0.68,-0.55,0.265,1.55);
    -webkit-transition: 0.3s cubic-bezier(0.68,-0.55,0.265,1.55);
    -moz-transition: 0.3s cubic-bezier(0.68,-0.55,0.265,1.55);
    -ms-transition: 0.3s cubic-bezier(0.68,-0.55,0.265,1.55);
    -o-transition: 0.3s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-control input:focus+label,
        .form-control input:valid+label {
            color: aquamarine;
           display:none;

        }


   </style>
</head>
<body id="regi_body">
   
 

    
    <div class="contain">
        <h1>Register</h1>
        <form action="" method="post">
         <div class="form-control">
            <input type="text"id="name" name="username" required/>
            <label for="name">Enter your name</label>
            <div class="error" id="usernameError"></div>
         </div>
         <div class="form-control">
            <input type="email" id="email" name="email" required/>
            <label for="email">Enter your email</label>
            <div class="error" id="email_Error"></div>

         </div>
         <div class="form-control">
            <input type="password" id="password"name="password"  required />
            <label for="password">Create Password</label>
            <div class="error" id="passwordError"></div>

         </div>
         
         <button id = "ca"class="btn  myButton" type="submit">Create Account</button>
         <p class="text">Already have a account</p>
         <a href="login2.php">Login here</a>
         


        </form>
</div>
    <script>
     


        const labels = document.querySelectorAll(".form-control label");
     labels.forEach((label)=>{
        label.innerHTML = label.innerText.split("").map((letter , idx) =>
            `<span style="transition-delay:$(idx * 50)ms">${letter}</span>`
        ).join("");
     });
    
</script>

</body>

</html>