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

  public function executeContact(){

    $this->form = new JtContactForm;
    if(!empty($_POST))
    {
      $this->form->bind($_POST);
      
      if($this->form->isValid())
      {
        var_dump($this->form->getValues());    
        exit;
      }
    }

    //$this->setLayout('layout-2col-left');
  }


}
