<?php
     class Textarea extends Element{
     	private $required;

     	public function __construct($label, $name, $required = true) {
		    parent::__construct($label, $name);
		    $this->setRows($required);
		}

		public function draw()
		{
		echo '<label>'.$this->getLabel().'</label>';
		echo '<textarea name="' . $this->getName() . '" '.($this->required?"required":"").' placeholder="' .$this->getLabel(). '">';
		echo '</textarea>';
		}


     	public function getrequired()
    	{
        return $this->required;
    	}

    	public function setrequired($required)
    	{
        $this->required= $required;
    	}

}
?>
