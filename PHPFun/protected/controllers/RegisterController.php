<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/8/10
 * Time: 14:57
 */
class Registercontroller extends Controller{
    public function actionIndex(){
        $registerModel = new User();
        if(isset($_POST['User'])){

            $registerModel->attributes=$_POST['User'];
            $registerModel->password=md5($registerModel->password);
            $registerModel->passwordAgain=md5($registerModel->passwordAgain);
            if($registerModel->validate()){
                if($registerModel->save()){
                    $this->redirect(array('login/index'));
                }
            }
        }
        $this->render('index',array('registerModel'=>$registerModel));
    }

}