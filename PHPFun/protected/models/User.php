<?php

/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/8/8
 * Time: 14:50
 */
class User extends CActiveRecord
{
    public $passwordAgain;

    /**
     * 必不可缺的方法1，返回模型
     * @param string $className
     * @return CActiveRecord
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * 必不可缺的方法2，返回表名
     * @return string
     */
    public function tableName()
    {
        return 'user';
    }

    public function attributeLabels()
    {
        return array(
            'name' => '用户名',
            'password' => "用户密码",
            'passwordAgain' => "密码确认"
        );
    }

    public function rules(){
        return array(
            array('name', 'required','message'=>'用户名不能为空'),
            array('name', 'check_name'),
            array('password', 'required','message'=>'用户密码不能为空'),
            array('passwordAgain', 'required','message'=>'确认密码不能为空'),
            array('passwordAgain', 'compare','compareAttribute'=>'password','message'=>'密码不一致'),
        );
    }

    public function check_name(){
        $userInfo=User::model()->find('name=:name',array(':name'=>$this->name));
        if($userInfo!=NULL){
            $this->addError('name','用户名已存在');
        }
    }

}








