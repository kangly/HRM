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
<div class="m-20">
    <p>欢迎管理员！</p>
    <p><a href="javascript:void(0);" onclick="_signOut()">退出</a></p>
</div>
<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function _signOut(){
        if(confirm('确认登出吗？')){
            $.get('/home/sign_out', {}, function(data) {
                if(data=='success'){
                    location.href = '/';
                }else{
                    alert('操作失败！');
                }
            });
        }
    }
</script>
</body>
</html>