<?php
namespace FormBuilder;

abstract class Element implements IElement{
	/** declare var */
	private $label;
	private $name;
	private $form;

    //----- beginning get and setter of properties ---//
    public function __construct($label, $name){
		$this->setLabel($label);
		$this->setName($name);
	}

	public function getLabel(){
		return $this->label;
	}

	public function setLabel($label){
		$this->label = $label;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getForm(){
		return $this->form;
	}

	public function setForm(Form $form){
		$this->form = $form;
	}
}
