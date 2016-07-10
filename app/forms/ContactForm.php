<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class ContactForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        // Name
        $name = new Text('name');
        $name->setLabel('你的全名');
        $name->setFilters(array('striptags', 'string'));
        $name->addValidators(array(
            new PresenceOf(array(
                'message' => '名字是必填的'
            ))
        ));
        $this->add($name);

        // Email
        $email = new Text('email');
        $email->setLabel('邮件');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => '邮件是必填的'
            )),
            new Email(array(
                'message' => 'E-mail is not valid'
            ))
        ));
        $this->add($email);

        $comments = new TextArea('comments');
        $comments->setLabel('建议');
        $comments->setFilters(array('striptags', 'string'));
        $comments->addValidators(array(
            new PresenceOf(array(
                'message' => '建议是必填的'
            ))
        ));
        $this->add($comments);
    }
}