<?php

/**
 * patienten actions.
 *
 * @package    GuizMed
 * @subpackage patienten
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class patientenActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $user = new AdUser();
      if($user->isAllowed($_POST['token'], $_POST['user_id'])){
		$this->ad_patients = Doctrine_Core::getTable('adPatient')
		  ->createQuery('a')
		  ->execute();
		$log = new AdLog();
		$log->setAction('Er is gekeken naar de patienten.');
		$log->setAdUserId($_POST['user_id']);
		$log->setDate(date('y-m-d H:m:s'));
		$log->save();
      }else{
              $this->redirect('users/error?message=Not logged in!&title=Error&type=error');
      }
  }

  public function executeIndexAdmin(sfWebRequest $request)
  {
      $user = new AdUser();
      if($user->isAllowed($_POST['token'])){
    $this->ad_patients = Doctrine_Core::getTable('adPatient')
      ->createQuery('a')
      ->execute();
    $log = new AdLog();
    $log->setAction('Er is gekeken naar de patienten.');
    $log->setAdUserId(1);
    $log->setDate(date('y-m-d H:m:s'));
    $log->save();
      }else{
              $this->redirect('users/error?message=Not logged in!&title=Error&type=error');
      }
  }

  public function executeShow(sfWebRequest $request)
  {
	$user = new AdUser();
      if($user->isAllowed($_POST['token'], $_POST['user_id'])){
		$this->ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id')));
		$this->prescriptions = $this->ad_patient->getPrescriptions($this->ad_patient->getPatientId());
		$this->forward404Unless($this->ad_patient);
		$this->nonPsychos = $this->ad_patient->getNonPsycho();
		$log = new AdLog();
		$log->setAction('Er is gekeken naar patient: '. $this->ad_patient->getFname() . ' ' . $this->ad_patient->getLname());
		$log->setAdUserId($_POST['user_id']);
		$log->setDate(date('y-m-d H:m:s'));
		$log->save();
	  }else{
		$this->redirect('users/error?message=Not logged in!&title=Error&type=error');
	  }
  }
  public function executeShowAdmin(sfWebRequest $request)
  {
	$user = new AdUser();
	if($user->isAllowed($_POST['token'], $_POST['user_id'])){
		$this->ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id')));
		$this->prescriptions = $this->ad_patient->getPrescriptions($this->ad_patient->getPatientId());
		$this->forward404Unless($this->ad_patient);
		$this->nonPsychos = $this->ad_patient->getNonPsycho();
		$log = new AdLog();
		$log->setAction('De beheerder heeft de lijst met patienten bekeken.');
		$log->setAdUserId($_POST['user_id']);
		$log->setDate(date('y-m-d H:m:s'));
		$log->save();
	}else{
		$this->redirect('users/error?message=Not logged in!&title=Error&type=error');
	}
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new adPatientForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
	$user = new AdUser();
	if($user->isAllowed($_POST['token'], $_POST['user_id'])){
      if(isset($_POST['fName'])){
        $patient = new AdPatient();
        $patient->setFname($_POST['fName']);
        $patient->setLname($_POST['lName']);
        $patient->setBdate($_POST['bDate']);
        $patient->setSex($_POST['sex']);
        $patient->setPatientSince(date('y-m-d H:m:s'));
        $patient->save();
		$log = new AdLog();
		$log->setAction('Een nieuwe patient is toegevoegd: ' . $patient->getFname . ' ' . $patient->getLname);
		$log->setAdUserId($_POST['user_id']);
		$log->setDate(date('y-m-d H:m:s'));
		$log->save();
        $this->redirect('show_patient',array('patient_id'=>$patient->getPatientId()));
      }else{
         $this->forward404('er is een fout gebeurd bij het invullen van de gegevens');
      }
	}else{
		$this->redirect('users/error?message=Not logged in!&title=Error&type=error');
	}
#    $this->forward404Unless($request->isMethod(sfRequest::POST));
#    $this->form = new adPatientForm();
#    $this->processForm($request, $this->form);
#    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id'))), sprintf('Object ad_patient does not exist (%s).', $request->getParameter('patient_id')));
    $this->form = new adPatientForm($ad_patient);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id'))), sprintf('Object ad_patient does not exist (%s).', $request->getParameter('patient_id')));
    $this->form = new adPatientForm($ad_patient);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id'))), sprintf('Object ad_patient does not exist (%s).', $request->getParameter('patient_id')));
    $ad_patient->delete();

    $this->redirect('patienten/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ad_patient = $form->save();

      $this->redirect('patienten/edit?patient_id='.$ad_patient->getPatientId());
    }
  }
}
