<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdNonPsychoPat', 'doctrine');

/**
 * BaseAdNonPsychoPat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $non_psycho_pat_id
 * @property integer $ad_patient_id
 * @property integer $non_psycho_id
 * @property timestamp $start_date
 * @property timestamp $stop_date
 * @property AdPatient $AdPatient
 * @property AdNonPsycho $AdNonPsycho
 * 
 * @method integer        getNonPsychoPatId()    Returns the current record's "non_psycho_pat_id" value
 * @method integer        getAdPatientId()       Returns the current record's "ad_patient_id" value
 * @method integer        getNonPsychoId()       Returns the current record's "non_psycho_id" value
 * @method timestamp      getStartDate()         Returns the current record's "start_date" value
 * @method timestamp      getStopDate()          Returns the current record's "stop_date" value
 * @method AdPatient      getAdPatient()         Returns the current record's "AdPatient" value
 * @method AdNonPsycho    getAdNonPsycho()       Returns the current record's "AdNonPsycho" value
 * @method AdNonPsychoPat setNonPsychoPatId()    Sets the current record's "non_psycho_pat_id" value
 * @method AdNonPsychoPat setAdPatientId()       Sets the current record's "ad_patient_id" value
 * @method AdNonPsychoPat setNonPsychoId()       Sets the current record's "non_psycho_id" value
 * @method AdNonPsychoPat setStartDate()         Sets the current record's "start_date" value
 * @method AdNonPsychoPat setStopDate()          Sets the current record's "stop_date" value
 * @method AdNonPsychoPat setAdPatient()         Sets the current record's "AdPatient" value
 * @method AdNonPsychoPat setAdNonPsycho()       Sets the current record's "AdNonPsycho" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdNonPsychoPat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_non_psycho_pat');
        $this->hasColumn('non_psycho_pat_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('ad_patient_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('non_psycho_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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
        $this->hasColumn('stop_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdPatient', array(
             'local' => 'ad_patient_id',
             'foreign' => 'patient_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('AdNonPsycho', array(
             'local' => 'non_psycho_id',
             'foreign' => 'ad_non_psycho_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));
    }
}