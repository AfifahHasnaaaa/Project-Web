<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <title>Log In</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        :root{
            --background: #1634c99db;
            --text: #fff;
            --text2: #000;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body {
            background: url(https://png.pngtree.com/thumb_back/fw800/background/20231102/pngtree-aesthetic-depiction-of-a-somber-and-muted-cement-wall-with-concrete-image_13800912.png);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 0 20px;
        }
        .form-containet{
            display: flex;
            width: 1000px;
            height: 600px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            backdrop-filter: blur(20px);
            overflow: hidden;
        }
        .col-1{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 55%;
            background: rgba(255, 255,  255, 0.3);
            background-repeat: blur(30px);
            border-radius: 0 30% 20% 0;
            transition: border-radius .3s;
        }
        .image-layer{
            position: relative;
        }
        .form-image-main{
            width: 600px;
            animation: scale-up 3s ease-in-out alternate infinite;
        }
        .fi-2{
            animation: up-down 3s ease-in-out alternate infinite;
        }
        @keyframes up-down{
            to{
                transform: translateX(20px);
            }
        }
        @keyframes up-down{
            to{
                transform: translateY(20px);
            }
        }
        .col-2{
            position: relative;
            width: 45%;
            padding: 20px;
            overflow: hidden;
        }
        .btn-box{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn{
            font-weight: 500;
            padding: 5px 30px;
            border: none;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.2);
            color: var(--text);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .btn:hover{
            opacity: 0.85;
        }
        .login-form{
            position: absolute;
            left: 2%;
            /* transform: translate(-50x); */
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 0 4vw;
            transition: .3s;
        }
        .login-form .form-title{
            margin-block: 40px 20px;
        }
        .form-title{
            margin: 40px 0;
            color: var(--text);
            font-size: 28px;
            font-weight: 600;
        }
        .form-inputs{
            width: 100%;
        }
        .input-box{
            position: relative;
        }
        .input-fields{
            width: 100%;
            height: 55px;
            padding: 0 15px;
            margin: 10px 0;
            color: var(--text);
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 10px;
            
        }

        ::placeholder{
            color: var(--text);
            font-size: 15px;
        }
        .input-box .icon{
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: var(--text);
        }
        .forget-pass{
            display: flex;
            justify-content: right;
            gap: 14px;
        }
        .forget-pass a{
            color: var(--text);
            text-decoration: none;
            font-size: 14px;
        }
        .forget-pass a:hover{
            text-decoration: underline;
        }
        .input-submit{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            height: 55px;
            padding: 0 15px;
            margin: 10px 0;
            color: var(--text);
            background: var(--background);
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: .3s;
        }
        .input-submit:hover{
            gap:15px;
        }
        .social-login{
            display: flex;
            gap: 20px;
            margin-top: 20px;
            align-items: center;
            justify-content: center;
        }
        .social-login i{
            display: flex;
            object-position: center;
            align-items: center;
            justify-content: center;
            height: 40px;
            width: 40px;
            color: var(--text);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: .2s;
        }
        .social-login i:hover{
            transform: scale(0.8);
        }
        @media(max-width: 892px){
            .form-containet{
                width: 80%;
            }
            .col-1{
                display: none;
            }
            .col-2{
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="form-containet" action="<?php echo e(url('login')); ?>" method="POST">
    <div class="col col-1">
        <div class="image-layer">
            <img src="assets/images/hodii1.png" class="form-image-main fi-2">
        </div>
    </div>
    <div class="col col-2">
        <div class="btn-box">
            <a href="login.blade.php"><button class="btn btn-1" id="login">Sign In</button></a>
            <a href="register.blade.php"><button class="btn btn-2" id="register" >Sign Up</button></a>
        </div>
        <!-- Login -->
        <div class="login-form">
            <div class="form-title">
                <span>Sign In</span>
            </div>
            <div class="form-inputs">
                <div class="input-box">
                    <input type="text" class="input-fields" placeholder="User Name" name="username"  required=""><i class='bx bx-user icon'></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-fields" placeholder="Password" name="password" required=""><i class='bx bx-lock-alt icon'></i>
                </div>
                <div class="forget-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="input-box">
                    <button class="input-submit" type="submit" name="submit" value="login" href="../home_user.blade.php">
                        <span >Sign In</span>
                        <i class="bx bx-right-arrow-alt"></i>
                    </button>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const loginBtn = document.querySelector("#login");
    // const loginForm = document.querySelector(".login-form");

    loginBtn.addEventListener('click',()=>{
        loginBtn.style.backgroundColor="#21264D";
        registerBtn.style.backgroundColor="rgba(255, 255, 255, 0.2)";

        loginForm.style.left ="100%";
        registerForm.style.left ="-50%";

        loginForm.style.opacity ="1";
        registerForm.style.opacity ="0";

        document.querySelector(".col-1").style.borderRadius="0 30% 20% 0";
    })

</script>

</body>
</html>
<?php /**PATH C:\DATAKU\Hodieku\resources\views/login/form.blade.php ENDPATH**/ ?>