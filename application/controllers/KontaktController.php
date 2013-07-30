<?php

class KontaktController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		$fKontakt = new Application_Form_Kontakt();
		$this->view->fKontakt = $fKontakt;
	}

	public function sendAction()
	{
		
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender(TRUE);

		$smtoOptions= array(
				'auth' 		=> 	'login',
				'username'	=> 	'rafal@manka.info',
				'password'	=>	'rafman2012',
				'ssl'		=>	'ssl',
				'port'		=>	465
				);
		
		$transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $smtoOptions);
		
		$mail = new Zend_Mail('utf-8');
		$mail
		->addTo('rafal@manka.info','rafal@manka.info')
		->setFrom($_POST['field1'],'Użytkownik portalu rafalmanka.pl')
		->setSubject('Wiadomość wysłana z portalu rafalmanka.pl')
		->setBodyText($_POST['field3'])
		->send($transport);
		
	echo 'Wiadomość wysłana pomyślnie. Postaram się jak najszybciej na nią odpowiedzieć.'; 		
 	
	}
}