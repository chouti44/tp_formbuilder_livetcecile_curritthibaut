<?php
namespace FormBuilder;

class Form{
	/** declare var */
	private $elements;
	private $method;
	private $action;
	private $submit;

	/**
	 * Construct
	 * @param string $action
	 * @param string $method
	 * @return void
	 */
	public function __construct($action, $method = "POST"){
		$this->setAction($action);
		$this->setMethod($method);
		$this->setSubmit("Go");
		$this->elements = [];
	}

	/**
	 * Instanciate an input and add it to the form
	 * @param string $label
	 * @param string $name
	 * @param boolean $required
	 * @param string $type
	 * @return Form Return
	 */
	public function addInput($label, $name, $required = true, $type = "text"){
		$input = new Input($label, $name, $required, $type);
		$this->addElement($input);
		return $this;
	}

	/**
	 * Instanciate a textarea and add it to the form
	 * @param string $label
	 * @param string $name
	 * @param string $required
	 * @return Form Return
	 */
	public function addTextarea($label, $name, $required = true){
		$textarea = new Textarea($label, $name, $required);
		$this->addElement($textarea);
		return $this;
	}

	/**
	 * Instanciate a select input and add it to the form
	 * @param string $label
	 * @param string $name
	 * @param array $options
	 */
	public function addSelect($label, $name, $options){
		$select = new Select($label, $name, $options);
		$this->addElement($select);
		return $this;
	}

	/**
	 * This method draws (in HTML) the full form. It calls all the draw
	 * methods of its elements
	 * @return void
	 */
	public function draw(){
		echo "<form class=\"fb-form\" method=\"$this->method\" action=\"$this->action\">";
		echo "<div>";
		foreach($this->getElements() as $element){
			echo "<div>";
			$element->draw();
			echo "</div>";
		}
		echo "<button type=\"submit\">$this->submit</button>";
		echo "</div>";
		echo "</form>";
	}

    //----- beginning get and setter of properties ---//
    public function setSubmit($name){
		$this->submit = $name;
		return $this;
	}

	public function setAction($action){
		$this->action = $action;
		return $this;
	}

	public function setMethod($method){
		$this->method = $method;
		return $this;
	}

	public function addElement(IElement $element){
		$this->elements[] = $element;
		$element->setForm($this);
	}

	public function getElements(){
		return $this->elements;
	}

	public function getElement($name){
		foreach($this->elements as $element){
			if($element->getName() === $name){
				return $element;
			}
		}
		return null;
	}

	/**
	 * Remove an element from the form
	 * @param  Element $element
	 * @return void
	 */
	public function removeElement(IElement $element){
		$index = array_search($element, $this->elements);
		$ok = array_splice($this->elements, $index, 1);
		if(!is_null($ok)){
			$element->setForm(null);
		}
	}

}
