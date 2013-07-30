<?php

class Application_Form_Kontakt extends Zend_Form
{

    public function init()
    {
        $name = new Zend_Form_Element_Text('name');
       $name
       ->setRequired(true);
       
       $email = new Zend_Form_Element_Text('email');
       $email
       ->addValidators(array('email'))
       ->setRequired(true);
       
       $subject = new Zend_Form_Element_Text('subject');
       $subject
       ->setRequired(true);
       
       $select = new Zend_Form_Element_Select('recipient');
       $select
       ->addMultiOptions(array(
       		'rafal@manka.info' => 'Rafał Mańka',
       		'rafal.manka.woa@gmail.com' => 'też ja'
       		));      
       
       $message = new Zend_Form_Element_Textarea('message');
       $message
       ->setRequired(true);
       
       $submit = new Zend_Form_Element_Submit('send');
       $submit
       ->setLabel('WYŚLIJ');
       
       $this
       ->setMethod('post')
       ->setAction('kontakt/send')
       ->addElements(array($name,$email,$subject,$select,$message,$submit));
    }
}