<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MedFormBonding', 'doctrine');

/**
 * BaseMedFormBonding
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $med_form_bonding_id
 * @property integer $med_form_id
 * @property integer $med_chem_bonding_id
 * @property integer $med_ki_val_id
 * @property MedForm $MedForm
 * @property MedKiVal $MedKiVal
 * @property MedChemBonding $MedChemBonding
 * 
 * @method integer        getMedFormBondingId()    Returns the current record's "med_form_bonding_id" value
 * @method integer        getMedFormId()           Returns the current record's "med_form_id" value
 * @method integer        getMedChemBondingId()    Returns the current record's "med_chem_bonding_id" value
 * @method integer        getMedKiValId()          Returns the current record's "med_ki_val_id" value
 * @method MedForm        getMedForm()             Returns the current record's "MedForm" value
 * @method MedKiVal       getMedKiVal()            Returns the current record's "MedKiVal" value
 * @method MedChemBonding getMedChemBonding()      Returns the current record's "MedChemBonding" value
 * @method MedFormBonding setMedFormBondingId()    Sets the current record's "med_form_bonding_id" value
 * @method MedFormBonding setMedFormId()           Sets the current record's "med_form_id" value
 * @method MedFormBonding setMedChemBondingId()    Sets the current record's "med_chem_bonding_id" value
 * @method MedFormBonding setMedKiValId()          Sets the current record's "med_ki_val_id" value
 * @method MedFormBonding setMedForm()             Sets the current record's "MedForm" value
 * @method MedFormBonding setMedKiVal()            Sets the current record's "MedKiVal" value
 * @method MedFormBonding setMedChemBonding()      Sets the current record's "MedChemBonding" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedFormBonding extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('med_form_bonding');
        $this->hasColumn('med_form_bonding_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
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
        $this->hasColumn('med_chem_bonding_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('med_ki_val_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MedForm', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id'));

        $this->hasOne('MedKiVal', array(
             'local' => 'med_ki_val_id',
             'foreign' => 'med_ki_val_id'));

        $this->hasOne('MedChemBonding', array(
             'local' => 'med_chem_bonding_id',
             'foreign' => 'med_chem_bonding_id'));
    }
}