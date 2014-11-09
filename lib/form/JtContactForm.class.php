<?php 

class JtContactForm extends sfForm
{
  public function configure() 
  {
    $this->setWidgets(array(
      'example_text' => new sfWidgetFormInput()
    ));
    
    $this->setValidators(array(
      'example_text' => new sfValidatorString(array('max_length' => 255, 'required' => true))
    ));
    
    $this->widgetSchema->setLabels(array(
      'example_text' => 'Example Text'
    ));

    // I had to specify this, there wasn't any formatting by default.
    $this->widgetSchema->setFormFormatterName('table');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    
    // Don't use $this->widgetSchema->setNameFormat()
    // unless you want to do some special parsing of $_POST data.
    // It's easier just to prefix your field names with something like
    // example_.
  }
}