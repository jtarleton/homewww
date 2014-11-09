<?php

/**
 * main actions.
 *
 * @package    homewww
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   	$this->data = array('foo'); // $this->forward('default', 'module');
  }
  public function execute2colsleft(sfWebRequest $request){
  }

  public function executeAbout(){

    //$this->setLayout('layout-2col-left');
  }

  public function executeProjects(){

    //$this->setLayout('layout-2col-left');
  }

  public function executeRaces(){

    //$this->setLayout('layout-2col-left');
  }

  public function executeContact(sfWebRequest $request){

    $this->form = new JtContactForm;
    if($request->isMethod('post'))
    {
      $this->form->bind( $request->getPostParameters());
      
     
      if($this->form->isValid())
      {
        

        // The message
$message = 'Email: '
.$this->form['email']->getValue() 
."\r\n"
. 'Date sent: '
. date('Y-m-d H:i:s')
."\r\n"
.' IP: '
.$_SERVER['REMOTE_ADDR']
."\r\n"
."\r\n"
.'Msg: '
. $this->form['msg']->getValue();

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('jamestarleton@icloud.com', 'Contact Form Submission', $message);


        exit;
      }
    }

    //$this->setLayout('layout-2col-left');
  }


}
