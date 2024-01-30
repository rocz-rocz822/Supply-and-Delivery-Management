<!DOCTYPE html>
<html>
<head>
<title>COMET.AL</title>
    <link rel="shortcut icon" href="admin/images/logo/comet_al logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Glacial+Indifference&display=swap">
    <style>
        body {
            font-family: 'Glacial Indifference', sans-serif;
            margin: 0;
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ring1, .ring2, .ring3 {
            position: fixed;
            background-size: contain;
            background-repeat: no-repeat;
            z-index: -1;
        }
        .ring1 {
            margin-top: -39vh;
            margin-left: -10vh;
            width: 100%;
            height: 100%;
            background-image: url('admin/images/logo/ring1.png');
            background-size: 35%;
            animation: floatAnimationRing1 5s ease-in-out infinite alternate;
        }
        .ring2 {
            top: 30%;
            left: 33.5%;
            width: 100%;
            height: 100%;
            background-image: url('admin/images/logo/ring2.png');
            background-size: 35%;
            animation: floatAnimationRing2 5s ease-in-out infinite alternate;
        }
        .ring3 {
            bottom: -50%;
            left: -5%;
            width: 100%;
            height: 100%;
            background-image: url('admin/images/logo/ring3.png');
            background-size: 35%;
            animation: floatAnimationRing3 5s ease-in-out infinite alternate;
        }
        @keyframes floatAnimationRing1 {
            50% {
                transform: translateY(-10px);
            }
            50% {
                transform: translateY(20px);
            }
        }

        @keyframes floatAnimationRing2 {
            50% {
                transform: translateY(20px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes floatAnimationRing3 {
            50% {
                transform: translateY(20px);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        .left-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .logo img {
            width: 350px;
            height: auto;
            margin-left: 150px;
            margin-top: -17vh;
            margin-bottom: -10vh;
        }
        .tagline {
            margin: 0;
            padding-left: 150px;
            font-size: 20px;
            text-align: center;
        }
        .login-form {
            background-color: #9CB2CE;
            padding: 20px;
            border-radius: 8px;
            margin-left: 14%;
            height: 80vh;
            width: 35%;
            box-shadow: 0px 0px 15px 8px rgba(156, 178, 206, 0.3);
        }
        .welcome {
            font-size: 30px;
            text-align: center;
            padding-left: 10px;
            margin-top: 10vh;
            margin-bottom: 0vh;
        }
        .tl {
            font-size: 14px;
            text-align: center;
            margin-top: 1vh;
        }
        .email{
            font-size: 18px;
            margin-top: 8vh;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 6px;
            font-size: 14px;
            border: 0.1px solid black;
            border-radius: 8px;
            margin-top: 1vh;
        }
        input[type="text"],
        input[type="password"]:focus {
            border-color: black;
            box-shadow: 0 0 5px rgba(152, 221, 202, 0.5);
        }
        .password{
            font-size: 18px;
            margin-top: 3vh;
        }
        .password-toggle {
            position: relative;
            top: -26px;
            right: -92%;
            cursor: pointer;
            font-size: 16px;
        }
        .login button {
            background-color: #FFFFFF;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
            margin-left: 43%;
            margin-top: 10vh;
        }
        .login button:hover {
            background-color: #FBE0CD;
        }
    </style>
</head>
<body>
<div class="ring1"></div>
<div class="ring2"></div>
<div class="ring3"></div>
<div class="left-side">
    <div class="logo">
        <img src="admin/images/logo/comet.al_logo1.png" alt="Logo">
        <p class="tagline">Discover your own comet's trail</p>
    </div>
</div>
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <h2 class="welcome">WELCOME</h2>
            <p class="tl">Enter your email and password</p>
        </div>
        <div class="email">
            <label for="email">Email</label>
        </div>
        <div>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="password">
            <label for="password">Password</label>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <span class="password-toggle" onclick="togglePassword()">
                <i id="toggleIcon" class="material-icons">visibility</i>
            </span>
        </div>

        <div class="login">
            <button type="submit">Log in</button>
        </div>
        
    </form>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var icon = document.getElementById("toggleIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.textContent = "visibility_off"; // Change icon to hide password
        } else {
            passwordField.type = "password";
            icon.textContent = "visibility"; // Change icon to show password
        }
    }
</script>
</body>
</html>
