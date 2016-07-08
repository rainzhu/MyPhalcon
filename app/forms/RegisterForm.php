<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class RegisterForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        // Name
        $name = new Text('name');
        $name->setLabel('你的全名');
        $name->setFilters(array('striptags', 'string'));
        $name->addValidators(array(
            new PresenceOf(array(
                'message' => '名字必填'
            ))
        ));
        $this->add($name);

        // Name
        $name = new Text('username');
        $name->setLabel('用户名');
        $name->setFilters(array('alpha'));
        $name->addValidators(array(
            new PresenceOf(array(
                'message' => '请输入你希望使用的用户名'
            ))
        ));
        $this->add($name);

        // Email
        $email = new Text('email');
        $email->setLabel('邮箱');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => '邮箱必填'
            )),
            new Email(array(
                'message' => '邮箱不正确'
            ))
        ));
        $this->add($email);

        // Password
        $password = new Password('password');
        $password->setLabel('密码');
        $password->addValidators(array(
            new PresenceOf(array(
                'message' => '密码必填'
            ))
        ));
        $this->add($password);

        // Confirm Password
        $repeatPassword = new Password('repeatPassword');
        $repeatPassword->setLabel('重复密码');
        $repeatPassword->addValidators(array(
            new PresenceOf(array(
                'message' => '必须确认密码'
            ))
        ));
        $this->add($repeatPassword);
    }
}