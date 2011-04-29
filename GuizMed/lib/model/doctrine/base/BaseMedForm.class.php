<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MedForm', 'doctrine');

/**
 * BaseMedForm
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $med_form_id
 * @property integer $med_base_id
 * @property integer $med_magister_form_id
 * @property string $dose
 * @property string $bioavailability
 * @property string $proteine_binding
 * @property string $t_max_h
 * @property string $hlf
 * @property string $ddd
 * @property MedBaseId $MedBaseId
 * @property MedMagisterForm $MedMagisterForm
 * @property Doctrine_Collection $AdPrescription
 * @property Doctrine_Collection $IntInteraction
 * @property Doctrine_Collection $MedBnfMedicine
 * @property Doctrine_Collection $MedFormBonding
 * 
 * @method integer             getMedFormId()            Returns the current record's "med_form_id" value
 * @method integer             getMedBaseId()            Returns the current record's "med_base_id" value
 * @method integer             getMedMagisterFormId()    Returns the current record's "med_magister_form_id" value
 * @method string              getDose()                 Returns the current record's "dose" value
 * @method string              getBioavailability()      Returns the current record's "bioavailability" value
 * @method string              getProteineBinding()      Returns the current record's "proteine_binding" value
 * @method string              getTMaxH()                Returns the current record's "t_max_h" value
 * @method string              getHlf()                  Returns the current record's "hlf" value
 * @method string              getDdd()                  Returns the current record's "ddd" value
 * @method MedBaseId           getMedBaseId()            Returns the current record's "MedBaseId" value
 * @method MedMagisterForm     getMedMagisterForm()      Returns the current record's "MedMagisterForm" value
 * @method Doctrine_Collection getAdPrescription()       Returns the current record's "AdPrescription" collection
 * @method Doctrine_Collection getIntInteraction()       Returns the current record's "IntInteraction" collection
 * @method Doctrine_Collection getMedBnfMedicine()       Returns the current record's "MedBnfMedicine" collection
 * @method Doctrine_Collection getMedFormBonding()       Returns the current record's "MedFormBonding" collection
 * @method MedForm             setMedFormId()            Sets the current record's "med_form_id" value
 * @method MedForm             setMedBaseId()            Sets the current record's "med_base_id" value
 * @method MedForm             setMedMagisterFormId()    Sets the current record's "med_magister_form_id" value
 * @method MedForm             setDose()                 Sets the current record's "dose" value
 * @method MedForm             setBioavailability()      Sets the current record's "bioavailability" value
 * @method MedForm             setProteineBinding()      Sets the current record's "proteine_binding" value
 * @method MedForm             setTMaxH()                Sets the current record's "t_max_h" value
 * @method MedForm             setHlf()                  Sets the current record's "hlf" value
 * @method MedForm             setDdd()                  Sets the current record's "ddd" value
 * @method MedForm             setMedBaseId()            Sets the current record's "MedBaseId" value
 * @method MedForm             setMedMagisterForm()      Sets the current record's "MedMagisterForm" value
 * @method MedForm             setAdPrescription()       Sets the current record's "AdPrescription" collection
 * @method MedForm             setIntInteraction()       Sets the current record's "IntInteraction" collection
 * @method MedForm             setMedBnfMedicine()       Sets the current record's "MedBnfMedicine" collection
 * @method MedForm             setMedFormBonding()       Sets the current record's "MedFormBonding" collection
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedForm extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('med_form');
        $this->hasColumn('med_form_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('med_base_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('med_magister_form_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('dose', 'string', 55, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 55,
             ));
        $this->hasColumn('bioavailability', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('proteine_binding', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('t_max_h', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('hlf', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('ddd', 'string', 45, array(
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
        $this->hasOne('MedBaseId', array(
             'local' => 'med_base_id',
             'foreign' => 'med_base_id'));

        $this->hasOne('MedMagisterForm', array(
             'local' => 'med_magister_form_id',
             'foreign' => 'med_magister_form_id'));

        $this->hasMany('AdPrescription', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id'));

        $this->hasMany('IntInteraction', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id'));

        $this->hasMany('MedBnfMedicine', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id'));

        $this->hasMany('MedFormBonding', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id'));
    }
}