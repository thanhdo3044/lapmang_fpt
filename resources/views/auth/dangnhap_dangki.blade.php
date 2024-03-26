<!DOCTYPE html>
<html lang="en">

<head>
   

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="lắp mạng fpt, lắp đặt internet fpt, cáp quang fpt, lắp wifi fpt, tổng đài fpt, giá cước internet fpt, đăng ký mạng fpt, khuyến mại FPT">
    <meta name="description"
        content="Công ty cổ phần viễn thông FPT - Website cập nhật khuyến mại mới nhất về lắp đặt Internet cáp quang FPT, Truyền hình FPT -  Miễn phí 100% lắp đặt - Miễn phí thiết bị modem wifi thế hệ mới nhất - khảo sát và tư vấn tại nhà khách hàng hoàn toàn miễn phí">
    <link rel="icon" href="{{ asset('nguoi_dung/img/FPT_logo_2010.svg.ico') }}">
    <title>{{ isset($data->title) ? $data->title : '' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Công ty cổ phần viễn thông FPT | FPT Telecom | Lắp mạng internet cáp quang FPT">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/0.3.7/awesome-bootstrap-checkbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Varela);
        .login{
            /* background-color: #680d60 */
        }
        html {
            height: 100%;
        }

        body {
            font-family: 'Varela', sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333;
            min-height: 100%;
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-image: url('{{ asset('nguoi_dung/img/i1.jpg') }}');
            background-color: #680d60;
            background-size: cover;
            /* background-blend-mode: saturation; */
        }

        label {
            margin-bottom: 0;
        }

        a {
            color: #e1e1e1;
        }

        a:focus,
        a:hover {
            color: #008080;
        }

        .checkbox-inline+.checkbox-inline,
        .radio-inline+.radio-inline {
            margin-top: 6px;
        }

        body.login {
            /* background: rgba(255, 255, 255, 1); */

        }

        .relative {
            position: relative;
        }

        .switcher {
            margin-bottom: 70px;
        }

        ul.switcher li {
            list-style-type: none;
            width: 50%;
            position: absolute;
            top: 0;
        }

        .first {
            left: 0;
        }

        .second {
            right: 0;
        }
        .backgroud-body{

        }
        .login-container-wrapper {
            max-width: 400px;
            margin: 2% auto 5%;
            padding: 40px;
            box-sizing: border-box;
            background: #187ffcb2;
            position: relative;
            border: 1px solid #008749;
            /* box-shadow: 0px 30px 60px -5px #000; */
            /* background-image: url('https://images.unsplash.com/photo-1567359781514-3b964e2b04d6?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ'); */
            background-size: cover;
            background-blend-mode: saturation;
        }

        .login-container-wrapper .logo,
        .login-container-wrapper .welcome {
            font-size: 16px;
            letter-spacing: 1px;
        }

        .login-container-wrapper li {
            text-align: center;
            padding: 0 15px;
            background-color: #fff;
            height: 50px;
            line-height: 50px;
            box-shadow: inset 0 -2px 0 0 #ccc;
            cursor: pointer;
        }

        .login-container-wrapper li a {
            color: #000;
            font-weight: bolder;
        }

        .login-container-wrapper li a:hover {
            color: #000000;
            text-decoration: none;
        }

        .login-container-wrapper li a:active,
        .login-container-wrapper li a:focus {
            color: #000;
            text-decoration: none;
        }

        .login-container-wrapper li.active {
            background-color: transparent;
            box-shadow: none;
        }

        .login-container-wrapper li.active a {
            border-bottom: 2px solid #fff;
            padding-bottom: 5px;
        }

        .login input:focus+.fa {
            color: #25a08d;
        }

        .login-form .form-group {
            margin-right: 0;
            margin-left: 0;
        }

        .login-form i {
            position: absolute;
            top: 0;
            left: 19px;
            line-height: 52px;
            color: rgba(40, 52, 67, 1);
            z-index: 100;
            font-size: 16px;
        }

        .login-form .input-lg {
            font-size: 16px;
            height: 52px;
            padding: 10px 25px;
            border-radius: 0;
        }

        .login input[type="number"],
        .login input[type="password"],
        .login input[type="text"],
        .login input:focus {
            /* background-color: rgba(40, 52, 67, 0.75); */
            border: 0px solid #4a525f;
            color: #000000;
            border-left: 45px solid #EF8300;
            border-radius: 40px;
        }

        .login input:focus {
            border-left: 45px solid #eee;
        }

        input:-webkit-autofill,
        textarea:-webkit-autofill,
        select:-webkit-autofill {
            background-color: rgba(40, 52, 67, 0.75) !important;
            background-image: none;
            color: rgb(0, 0, 0);
            border-color: #FAFFBD;
        }

        .login .checkbox label,
        .login .checkbox a {
            color: #ddd;
            vertical-align: top;
        }

        input[type="checkbox"]:checked+label::before,
        .checkbox-success input[type="radio"]:checked+label::before {
            background-color: #25a08d !important;
        }

        .btn-success {
            background-color: #25a08d;
            background-image: none;
            padding: 8px 50px;
            margin-top: 20px;
            border-radius: 40px;
            border: 1px solid #25a08d;
            -webkit-transition: all ease 0.8s;
            -moz-transition: all ease 0.8s;
            transition: all ease 0.8s;
        }

        .btn-success:focus,
        .btn-success:hover,
        .btn-success.active,
        .btn-success.active:hover,
        .btn-success:active:hover,
        .btn-success:active:focus,
        .btn-success:active {
            background-color: #25a08d;
            border-color: #25a08d;
            box-shadow: 0px 5px 35px -5px #25a08d;
            text-shadow: 0 0 8px #fff;
            color: #FFF;
            outline: none;
        }
    </style>


</head>

<body class="login">
    <div class="container">
        <div class="backgroud-body">

            <div class="login-container-wrapper clearfix">
                <ul class="switcher clearfix">
                    <li class="first logo active" data-tab="login">
                        <a>Đăng Nhập</a>
                    </li>
                    <li class="second logo" data-tab="sign_up">
                        <a>Đăng kí</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="login">
                        <form class="form-horizontal login-form" action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <div class="form-group relative">
                                <input class="form-control input-lg" id="login_user" placeholder="Số điện thoại"
                                    required="" type="text" name="phone"> <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <small id="result_NumberHelp" class="form-text text-muted text-danger" style="font-weight: bolder"></small>
                                </div>
                            <div class="form-group relative">
                                <input class="form-control input-lg" id="login_password" placeholder="Mật khẩu"
                                    required="" type="password" name="password"> <i class="fa fa-lock"></i>
                                    <small id="result_PasswordHelp" class="form-text text-muted text-danger" style="font-weight: bolder;"></small>
                                </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Đăng nhập</button>
                            </div>
                            <hr />
                        </form>
                    </div>
                    <div class="tab-pane" id="sign_up">
                        <form class="form-horizontal login-form" action="{{ route('auth.signup') }}" method="post">
                            @csrf
                            <div class="form-group relative">
                                <input class="form-control input-lg" id="login_username" placeholder="Họ tên"
                                    required="" type="text" name="name"> <i class="fa fa-user"></i>
                                    <small id="result_NamedHelp" class="form-text text-muted text-danger" style="font-weight: bolder;"></small>
                                </div>
                            <div class="form-group relative">
                                <input class="form-control input-lg" id="login_email" placeholder="Nhập email(không bắt buộc)"
                                    required="" type="text" name="email"> <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                    <small id="result_EmaildHelp" class="form-text text-muted text-danger" style="font-weight: bolder;"></small>
                                </div>
                            <div class="form-group relative">
                                <input class="form-control input-lg" id="sign_user" placeholder="Số điện thoại"
                                    required="" type="text" required name="phone"> <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <small id="result_SignHelp" class="form-text text-muted text-danger" style="font-weight: bolder"></small>
                                </div>
                            <div class="form-group relative">
                                <input class="form-control input-lg" id="sign_pass" placeholder="Mật khẩu"
                                    required="" type="password" required name="password"> <i class="fa fa-lock"></i>
                                    <small id="result_PassHelp" class="form-text text-muted text-danger" style="font-weight: bolder;"></small>
                                </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Đăng ký</button>
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {

            $('ul.switcher li').click(function() {
                var tab_id = $(this).attr('data-tab');

                $('li').removeClass('active');
                $('div.tab-pane').removeClass('active');

                $(this).addClass('active');
                $("#" + tab_id).addClass('active');
            })

            $('#login_user').on('input',function() {
                let login_user = $(this).val();
                let isValidPhoneNumber = /^\d{10}$/.test(login_user);
                $('#result_NumberHelp').text(isValidPhoneNumber ? '' : 'Vui lòng nhập đúng thông tin !')
            })
            // $('#login_password').on('input',function() {
            //     let password = $(this).val();
            //     let isValidPhoneNumber = /^(?=.*[A-Za-z])(?=.*\d).{8,}$/.test(password);
            //     $('#result_PasswordHelp').text(isValidPhoneNumber ? '' : 'Vui lòng nhập mật khẩu bao gồm 8 ký tự có chữ và số !')
            // })
            $('#login_username').on('input',function() {
                let name = $(this).val();
                let isValidPhoneNumber = /^\D*$/.test(name);
                $('#result_NamedHelp').text(isValidPhoneNumber ? '' : 'Vui lòng nhập đúng tên của bạn !')
            })
            $('#login_email').on('input',function() {
                let name = $(this).val();
                let isValidPhoneNumber = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(name);
                $('#result_EmaildHelp').text(isValidPhoneNumber ? '' : 'Vui lòng nhập đúng mail bạn đang sử dụng !')
            })
            $('#sign_user').on('input',function() {
                let name = $(this).val();
                let isValidPhoneNumber = /^\d{10}$/.test(name);
                $('#result_SignHelp').text(isValidPhoneNumber ? '' : 'Vui lòng nhập đúng thông tin !')
            })
            // $('#sign_pass').on('input',function() {
            //     let name = $(this).val();
            //     let isValidPhoneNumber = /^(?=.*[A-Za-z])(?=.*\d).{8,}$/.test(name);
            //     $('#result_PassHelp').text(isValidPhoneNumber ? '' : 'Vui lòng nhập mật khẩu bao gồm 8 ký tự có chữ và số !')
            // }) 
        })
    </script>
</body>

</html>
