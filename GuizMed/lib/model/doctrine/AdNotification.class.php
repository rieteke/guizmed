<?php

/**
 * AdNotification
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class AdNotification extends BaseAdNotification
{
    function getOldUser(){
        $q = Doctrine_Query::create()->from('AdUser au')->where('au.user_id = ?',$this->getPrevUserId())->execute();
        return $q[0];
    }
    function getNewUser(){
        $q = Doctrine_Query::create()->from('AdUser au')->where('au.user_id = ?',$this->getNewUserId())->execute();
        return $q[0];
    }
//    function getPatient(){
//        $patients = Doctrine_Query::create()->from('AdPatient ap')->where('ap.patient_id = ?',$this->getPatiendId())->execute();
//        return $patients[0];
//    }
}