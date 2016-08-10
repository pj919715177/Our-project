<!DOCTYPE html>
<html>
<head>
    <title>欢迎注册PHPFun</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl ?>/images/logo-a.png"/>
    <link href="<?php echo Yii::app()->request->baseUrl ?>/css/register_style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.i18n.properties-1.0.9.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/md5.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/page_regist.js?lang=zh"></script>

    <!--[if IE]>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 6]>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/DD_belatedPNG_0.0.8a-min.js" language="javascript"></script>
    <script>
        DD_belatedPNG.fix('div,li,a,h3,span,img,.png_bg,ul,input,dd,dt');
    </script>
    <![endif]-->
</head>
<body class="loginbody">
<div class="dataEye">
    <div class="loginbox registbox">
        <div class="logo-a">
            <a href="" title="js代码网">
                <img src="<?php echo Yii::app()->request->baseUrl ?>/images/logo-a.png">
            </a>
        </div>
        <div class="login-content reg-content">
            <div class="loginbox-title">
                <h3>注册</h3>
            </div>
            <?php $form = $this->beginWidget('CActiveForm',array('id'=>'signupForm')) ?>
                <div class="login-error"></div>
                <div class="row">
                    <label class="field" for="contact">账户名</label>
                    <?php echo $form->textField($registerModel, 'name', array('id' => 'contact','class'=>'input-text-user noPic input-click')) ?>
                    <?php echo $form->error($registerModel,'name') ?>
                </div>
                <div class="row" style="margin-top:10px">
                    <label class="field" for="password">密码</label>
                    <?php echo $form->passwordField($registerModel, 'password', array('id' => 'password','class'=>'input-text-password noPic input-click')) ?>
                    <?php echo $form->error($registerModel,'password') ?>
                </div>
                <div class="row" style="margin-top:10px">
                    <label class="field" for="passwordAgain">确认密码</label>
                    <?php echo $form->passwordField($registerModel, 'passwordAgain', array('id' => 'passwordAgain','class'=>'input-text-password noPic input-click')) ?>
                    <?php echo $form->error($registerModel,'passwordAgain') ?>
                </div>
                <div class="row tips" style="margin-top:10px">
                    <input type="checkbox" id="checkBox">
                    <label>
                        我已阅读并同意
                        <a href="#" target="_blank">隐私政策、服务条款</a>
                    </label>
                </div>
                <div class="row btnArea">
                    <button type="submit" class="btn btn-sm btn-info"><span
                            class="glyphicon glyphicon-off"></span> 注册
                    </button>
                </div>
            <?php $this->endWidget() ?>
        </div>
    </div>

    <div id="footer">

    </div>
</div>
<div class="loading">
    <div class="mask">
        <div class="loading-img">
            <img src="<?php echo Yii::app()->request->baseUrl ?>/images/loading.gif" width="31" height="31">
        </div>
    </div>
</div>
<
</body>
</html>

