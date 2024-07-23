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
            background: url('data:image/jpeg;base64,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');
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
    <form action="{{ url('login') }}" method="POST" class="form-containet">
        @csrf
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
                    @error('username')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="password" class="input-fields" placeholder="Password" name="password" required=""><i class='bx bx-lock-alt icon'></i>
                </div>
                <div class="forget-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="input-box">
                    <button class="input-submit" type="submit" name="submit" value="login" >
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
</form>
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


