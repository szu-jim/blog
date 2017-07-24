<?php
namespace frontend\models;

use yii\base\Model;
use common\models\UserModel;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $rePassword;
    public $verifyCode;



    /**
     * @inheritdoc对应属性验证规则
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\UserModel', 'message' => /*Yii::t('common', 'This username has already been taken.')*/'用户名已存在！'],
            ['username', 'match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头。'],
            ['username', 'string', 'min' => 2, 'max' => 16],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\UserModel', 'message' => /*Yii::t('common','This email address has already been taken.')*/'邮箱已经被注册！'],

            [['password','rePassword'], 'required'],
            [['password','rePassword'], 'string', 'min' => 6],
            ['rePassword','compare','compareAttribute' => 'password','message' => /*Yii::t('common','Password not consitent.')*/'两次输入的密码不一致！'],

            ['verifyCode','captcha']
        ];
    }

    public function attributeLabels()
    {
        return[
            'username' => '用户名',
            'email' => '邮箱',
            'password' => '密码',
            'rePassword' => '重复密码',
            'verifyCode' => '验证码'
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new UserModel();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
