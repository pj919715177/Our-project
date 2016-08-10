<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHPFun登录</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/css/form-elements.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>PHPFun</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>欢迎来到 PHPFun 资讯平台</h3>
                            <p>请 输 入 账 户 名 和 密 码 登 录:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <?php $form =$this->beginWidget('CActiveForm') ?>
                            <div class="form-group">
                                <label >用户名</label>
                                <?php echo $form->textField($loginForm,'username',array('id'=>'userName')) ?>
                            </div>
                            <div class="form-group">
                                <label >密 码</label>
                                <?php echo $form->passwordField($loginForm,'password',array('id'=>'password')) ?>
                            </div>
                            <div class="form-group">
                                <label >验证码</label>
                                <?php echo $form->textField($loginForm,'captcha',array('id'=>'verify')) ?>

                            </div>
                            <div class="form-group">
                            <?php $this->widget('CCaptcha',array('showRefreshButton'=>true,
                                'imageOptions'=>array('alt'=>'点击换图','
                                title'=>'点击换图','style'=>'cursor:pointer'))); ?>
                            </div>
                            <button type="submit" class="btn">登录</button>
                        <?php $this->endWidget() ?>
                    </div>
                    <ul id="username">
                        <li class="error"><?php echo $form->error($loginForm,'username') ?></li>
                    </ul>
                    <ul id="psd">
                        <li class="error"><?php echo $form->error($loginForm,'password') ?></li>
                    </ul>
                    <ul id="ver">
                        <li class="error"><?php echo $form->error($loginForm,'captcha') ?></li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 social-login">
                    <h3>其他账号登录</h3>
                    <div class="social-login-buttons">
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-weibo"></i> 微博
                        </a>
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-qq"></i> QQ
                        </a>
                        <a class="btn btn-link-2" href="#">
                            <i class="fa fa-weixin"></i>微信
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/js/jquery.backstretch.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="<?php echo Yii::app()->request->baseUrl ?>/protected/views/login/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>