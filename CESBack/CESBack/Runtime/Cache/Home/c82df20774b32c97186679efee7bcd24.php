<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Custom Theme">
    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/Azure/CESBack/Public/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>CES - 课程评价系统登录界面</title>

    <link href="/Azure/CESBack/Public/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Azure/CESBack/Public/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Azure/CESBack/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- 字体 CSS -->
    <link href="/Azure/CESBack/Public/css/style.css" rel="stylesheet"><!-- 主题 CSS -->
    <link href="/Azure/CESBack/Public/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/Azure/CESBack/Public/css/sco.message.css" rel="stylesheet">

    <script src="/Azure/CESBack/Public/js/md5.js" type="text/javascript"></script>
    <script src="/Azure/CESBack/Public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="/Azure/CESBack/Public/js/sco.message.js" type="text/javascript"></script>
    <script src="/Azure/CESBack/Public/js/index/login.js"></script>
    <!--[if lt IE 9]>
    <script src="/Azure/CESBack/Public/js/html5shiv.js"></script>
    <script src="/Azure/CESBack/Public/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

    </script>
</head>
<script type="text/javascript">
    var HOST = "http://scce.chinacloudsites.cn/";
</script>

<body class="login-screen">
<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">
            CES登录
        </h2>

        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="请输入用户名" autofocus id="user_name">
            <input type="password" class="form-control" placeholder="请输入密码" id="user_pass">
            <label class="checkbox">
                <input type="checkbox" value="1">
                记住账号
            <span class="pull-right">
              <a data-toggle="modal" href="#myModal">
                  忘记密码?
              </a>
            </span>
            </label>
            <input class="btn btn-lg btn-login btn-block" type="button" value="登录" onclick="login()"/>
        </div>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title">
                            忘记密码?
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            请输入您的电话，以方便您找回密码.
                        </p>
                        <input type="text" name="email" placeholder="手机号" autocomplete="off"
                               class="form-control placeholder-no-fix">
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">
                            取消
                        </button>
                        <button class="btn btn-success" type="button">
                            确认
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--<script src="/Azure/CESBack/Public/js/jquery.js" ></script>&lt;!&ndash; BASIC JQUERY LIB. JS &ndash;&gt;-->
<script src="/Azure/CESBack/Public/js/bootstrap.min.js"></script><!-- BOOTSTRAP JS -->
</body>
</html>