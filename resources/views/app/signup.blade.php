@extends('app.layout')
@section('title', 'Sign Up')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(58, 98, 215, 1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-top: 0;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container input[type="checkbox"] {
            margin-right: 5px;
        }
        .login-container .btn {
            background-color: rgba(83, 143, 209, 1);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container .btn:hover {
            background-color: rgba(58, 98, 215, 1);
        }
        .login-container a {
            text-decoration: none;
            color: #666;
        }
        .login-container a:hover {
            color:rgba(58, 98, 215, 1);
        }

          /************************/

          header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #dfdddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    padding: 5px;
}
header .logo img{
    width: 60px;
    flex: 2;
    margin-inline: 50px;
}
header .search-box{
    flex: 1;
    position: relative;
    margin-right: 90px;

}
.search-box input{
    width: 100%;
    height: 25px;
    border: none;
    outline: none;
    background: #cfc8c8;
    border-radius: 30px;
    color: gray;
    font-size: 16px;
    text-align: center;
}
.search-box button{
    cursor: pointer;
    width: 25px;
    height: 25px;
    border-radius: 30px;
    border: none;
    position: absolute;
    top: 0;
    right: 1px;
    transform: scale(0.9);
    background-color: rgb(85, 85, 85);
}
header .navbar a{
    color: #504e4e;
    font-size: 16px;
    margin: 0 10px;
    padding-left: 20px;
    border-left: 1px solid #837e7e;
    text-decoration: none;
}
header .navbar #n{
    border-left: none;
}

header .navbar a:hover{
    color: blue;
}
header .navbar input{
    padding: 3px 5px;
    margin-right: 20px;
    border : 1px solid #3A62D7;
    color: #3A62D7;
    margin-left: 20px;
}
header .navbar input:hover{
    background: #3A62D7;
    color: white;
}
#menu-bar{
    color: #474747;
    border: 1px solid #464545;
    border-radius: 5px;
    font-size: 24px;
    padding: 5px 10px;
    cursor: pointer;
    display: none;
}

@media (max-width:990px){
    #menu-bar{
        display: initial;
    }
    header .navbar{
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #e0dcdc;
        border-top: 1px solid rgba(196, 185, 185, 0.2);
        padding: 5px 10px;
        clip-path: polygon(0 0 , 100% 0 , 100% 0 , 0 0);
    }
    header .navbar.active{
        clip-path: polygon(0 0 , 100% 0 , 100% 100% , 0 100%);
    }

    header .navbar a{
        display: block;
        border-radius: 2px;
        padding: 7px;
        margin: 7px 0;
        background: #c5c5c5;
    }
    html{
        font-size: 50%;
    }
}

    </style>
    <div class="login-container">
        <h2>Welcome BOE</h2>
        @if(isset($error))
        <p style="color: red">{{ $error }}</p>
        @elseif (isset($success))
        <p style="color: green">{{ $success }}</p>
        @endif
        <form action="{{ route('app.proc.signup') }}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required minlength="6"><br>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember me</label><br><br>
            <a href="{{ route('app.login') }}">Sign up with Google</a><br><br>
            <a href="{{ route('app.login') }}">Already have an account? Login</a><br><br>
            <input type="checkbox" id="terms" name="terms" required>  
            <label for="terms">I agree to the <a href="#">Terms of Service</a></label><br><br>
            <input type="submit" value="sign up" class="btn">
        </form>
    </div>
@endsection