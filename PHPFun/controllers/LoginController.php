<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/8/9
 * Time: 9:41
 */
class Logincontroller extends Controller{
    public function actionIndex(){
        $loginForm=new LoginForm();
        if(isset($_POST['LoginForm'])){
            $loginForm->attributes=$_POST['LoginForm'];
            if($loginForm->validate() &&$loginForm->login()){
                echo Yii::app()->user->name;
            }
        }
        $this->render('index',array('loginForm'=>$loginForm));
    }
    public function actions(){
        return array(
            'captcha' =>array(
                'class'=>'system.web.widgets.captcha.CCaptchaAction',
                'height'=>40,
                'width'=>100,
                'minLength'=>4,
                'maxLength'=>4
            ),
        );
    }
}