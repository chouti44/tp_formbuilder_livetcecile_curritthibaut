<?php
namespace FormBuilder;


/**
 * This class allows you to generate some forms.
 * @package FormBuilder
 */
class FormBuilder{

	/**
	 * Create a new Form and retur it
	 * @return Form The form object
	 */
	public function buildContactForm(){
		$form = new Form("traitement.php");
		$form->addInput("Motif", "motif")
			->addInput("Mail", "mail", true, "mail")
			->addTextarea("Message", "message")
			->addSelect("Destinataire", "destinataire", ["Administration", "Formateurs", "Réseau"])
			->setSubmit("Valider");

		return $form;
	}

	public function buildLoginForm(){
		$form = new Form("login.php", "GET");
		$form->addInput("Login", "login")
			->addInput("Password", "password", "password")
			->setSubmit("Go");
		return $form;	
	}
}
