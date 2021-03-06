<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdPrescription', 'doctrine');

/**
 * BaseAdPrescription
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ad_presc_id
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property timestamp $presc_date
 * @property string $dose
 * @property string $frequency
 * @property integer $user_patient_id
 * @property integer $med_form_id
 * @property blob $comment
 * @property timestamp $stop_date
 * @property string $stop_reason
 * @property AdUserPatient $AdUserPatient
 * @property MedForm $MedForm
 * 
 * @method integer        getAdPrescId()       Returns the current record's "ad_presc_id" value
 * @method timestamp      getStartDate()       Returns the current record's "start_date" value
 * @method timestamp      getEndDate()         Returns the current record's "end_date" value
 * @method timestamp      getPrescDate()       Returns the current record's "presc_date" value
 * @method string         getDose()            Returns the current record's "dose" value
 * @method string         getFrequency()       Returns the current record's "frequency" value
 * @method integer        getUserPatientId()   Returns the current record's "user_patient_id" value
 * @method integer        getMedFormId()       Returns the current record's "med_form_id" value
 * @method blob           getComment()         Returns the current record's "comment" value
 * @method timestamp      getStopDate()        Returns the current record's "stop_date" value
 * @method string         getStopReason()      Returns the current record's "stop_reason" value
 * @method AdUserPatient  getAdUserPatient()   Returns the current record's "AdUserPatient" value
 * @method MedForm        getMedForm()         Returns the current record's "MedForm" value
 * @method AdPrescription setAdPrescId()       Sets the current record's "ad_presc_id" value
 * @method AdPrescription setStartDate()       Sets the current record's "start_date" value
 * @method AdPrescription setEndDate()         Sets the current record's "end_date" value
 * @method AdPrescription setPrescDate()       Sets the current record's "presc_date" value
 * @method AdPrescription setDose()            Sets the current record's "dose" value
 * @method AdPrescription setFrequency()       Sets the current record's "frequency" value
 * @method AdPrescription setUserPatientId()   Sets the current record's "user_patient_id" value
 * @method AdPrescription setMedFormId()       Sets the current record's "med_form_id" value
 * @method AdPrescription setComment()         Sets the current record's "comment" value
 * @method AdPrescription setStopDate()        Sets the current record's "stop_date" value
 * @method AdPrescription setStopReason()      Sets the current record's "stop_reason" value
 * @method AdPrescription setAdUserPatient()   Sets the current record's "AdUserPatient" value
 * @method AdPrescription setMedForm()         Sets the current record's "MedForm" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdPrescription extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_prescription');
        $this->hasColumn('ad_presc_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('start_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('presc_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('dose', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('frequency', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('user_patient_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('med_form_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('comment', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('stop_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('stop_reason', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdUserPatient', array(
             'local' => 'user_patient_id',
             'foreign' => 'user_patient_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('MedForm', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));
    }
}