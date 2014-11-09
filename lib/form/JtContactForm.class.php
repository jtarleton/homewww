<?php 

class JtContactForm extends BaseForm
{
  public function configure() 
  {
    $this->setWidgets(array(
      'email' => new sfWidgetFormInput(),
        'msg' => new sfWidgetFormTextarea(),
    ));
    
    $this->setValidators(array(
      'email' => new sfValidatorEmail(array('required'=>true)),
       'msg' => new sfValidatorString(array('max_length' => 255, 'required' => true)),
    ));
    
    $this->widgetSchema->setLabels(array(
      'email' => 'Your Email',
      'msg' => 'Your Message'
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
