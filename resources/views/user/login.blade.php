<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>RM admin template</title>
    <link href="/assets/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-wrapper">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="login-div">
                <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img src="/assets/images/logo.png" alt="logo" /></span>
                </div>
                <form class="form-horizontal m-t-20" id="login-form" method="post">
                    @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="用户名" aria-label="Username" aria-describedby="basic-addon1" id="username" required="">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="password" class="form-control form-control-lg" placeholder="密码" aria-label="Password" aria-describedby="basic-addon1" id="password" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20">
                                    <button class="btn btn-success float-right" type="button" onclick="go_login()">登录</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    function go_login(){
        var username = $.trim($('#username').val());
        if(username==''){
            alert('用户名不能为空！');
            return false;
        }
        var password = $.trim($('#password').val());
        if(password==''){
            alert('密码不能为空！');
            return false;
        }
        $.post('/user/login', {'_token':"{{ csrf_token() }}",'username':username,'password':password}, function(data) {
           if(data=='success'){
                location.href = '/home/index';
           }else{
               alert('登陆失败！');
           }
        });
    }
</script>
</body>
</html>