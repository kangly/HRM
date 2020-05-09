<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content=""/>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>RM admin template</title>
    <link type="text/css" rel="stylesheet" href="/assets/css/style.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/common.min.css">
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/merge.js"></script>
    <script type="text/javascript" src="/assets/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/assets/js/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="/assets/js/layer/layer.js"></script>
    <script type="text/javascript" src="/assets/js/common.js"></script>
    <script type="text/javascript">
        var urlLocation = function(url){
            if(url)
                setTimeout("location.href = '"+ url + "'", 500);
        };
        function _signOut(){
            layer.confirm('确认登出吗？',{icon:3,title:'系统提示'},function(index){
                $.get("{{ url('/home/sign_out') }}", {}, function(data) {
                    if(data=='success'){
                        location.href = '/';
                    }else{
                        layer.msg('操作失败！',{icon:"5",time:1000});
                    }
                });
                layer.close(index);
            });
        }
    </script>
</head>
<body>
<div id="main-wrapper" data-sidebartype="mini-sidebar" class="mini-sidebar">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <a class="navbar-brand" href="{{ url('/home/index') }}">
                    <b class="logo-icon p-l-10"><img src="/assets/images/logo-icon.png" class="light-logo" /></b>
                    <span class="logo-text"><img src="/assets/images/logo-text.png" class="light-logo" /></span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">便捷入口 <i class="fa fa-angle-down"></i></span>
                            <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" target="_blank" id="open_new_win" href="{{ url('/home/index') }}">新窗口</a>
                        </div>
                    </li>
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li id="top_loading_mark"><img class="m-t-25 m-r-20" src="/assets/images/loading.gif" /></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i></a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div>
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Event today</h5>
                                                    <span class="mail-desc">Just a reminder that event</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Settings</h5>
                                                    <span class="mail-desc">You can customize this template</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <div class="dw-user-box">
                                <div class="u-img"><img src="/assets/images/users/1.jpg" alt="user"></div>
                                <div class="u-text">
                                    <h4>{{ $adminInfo->english_name ?? '' }}</h4>
                                    <p class="text-muted">{{ $adminInfo->username ?? '' }}</p>
                                    <a href="javascript:void(0)" class="btn btn-rounded btn-success btn-sm">个人中心</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> 账号设置</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> 收件箱</a>
                            <a class="dropdown-item" href="javascript:void(0)" onclick="_signOut()"><i class="fa fa-power-off m-r-5 m-l-5"></i> 注销</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin5">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/home/index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">工作台</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">候选人管理 </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item m-l-5"><a href="{{ url('/cdd/index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> 候选人列表 </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-group"></i><span class="hide-menu">公司管理 </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item m-l-5"><a href="{{ url('/company/index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> 公司列表 </span></a></li>
                            <li class="sidebar-item m-l-5"><a href="{{ url('/company/job') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> 职位列表 </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">员工管理 </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item m-l-5"><a href="{{ url('/staff/index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> 员工列表 </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">系统管理 </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item m-l-5"><a href="{{ url('/system/index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> 系统设置 </span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer class="footer text-center"></footer>
    </div>
</div>
</body>
</html>