<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdUser', 'doctrine');

/**
 * BaseAdUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string $uname
 * @property string $passw
 * @property string $phone
 * @property integer $ad_role_id
 * @property integer $ad_function_id
 * @property string $unlock_code
 * @property string $token
 * @property Doctrine_Collection $AdLog
 * @property AdRole $AdRole
 * @property AdFunction $AdFunction
 * @property Doctrine_Collection $AdNotification
 * @property Doctrine_Collection $AdNotification_3
 * @property Doctrine_Collection $AdUserPatient
 * @property Doctrine_Collection $AdUserPatient_3
 * 
 * @method integer             getUserId()           Returns the current record's "user_id" value
 * @method string              getFname()            Returns the current record's "fname" value
 * @method string              getLname()            Returns the current record's "lname" value
 * @method string              getEmail()            Returns the current record's "email" value
 * @method string              getUname()            Returns the current record's "uname" value
 * @method string              getPassw()            Returns the current record's "passw" value
 * @method string              getPhone()            Returns the current record's "phone" value
 * @method integer             getAdRoleId()         Returns the current record's "ad_role_id" value
 * @method integer             getAdFunctionId()     Returns the current record's "ad_function_id" value
 * @method string              getUnlockCode()       Returns the current record's "unlock_code" value
 * @method string              getToken()            Returns the current record's "token" value
 * @method Doctrine_Collection getAdLog()            Returns the current record's "AdLog" collection
 * @method AdRole              getAdRole()           Returns the current record's "AdRole" value
 * @method AdFunction          getAdFunction()       Returns the current record's "AdFunction" value
 * @method Doctrine_Collection getAdNotification()   Returns the current record's "AdNotification" collection
 * @method Doctrine_Collection getAdNotification3()  Returns the current record's "AdNotification_3" collection
 * @method Doctrine_Collection getAdUserPatient()    Returns the current record's "AdUserPatient" collection
 * @method Doctrine_Collection getAdUserPatient3()   Returns the current record's "AdUserPatient_3" collection
 * @method AdUser              setUserId()           Sets the current record's "user_id" value
 * @method AdUser              setFname()            Sets the current record's "fname" value
 * @method AdUser              setLname()            Sets the current record's "lname" value
 * @method AdUser              setEmail()            Sets the current record's "email" value
 * @method AdUser              setUname()            Sets the current record's "uname" value
 * @method AdUser              setPassw()            Sets the current record's "passw" value
 * @method AdUser              setPhone()            Sets the current record's "phone" value
 * @method AdUser              setAdRoleId()         Sets the current record's "ad_role_id" value
 * @method AdUser              setAdFunctionId()     Sets the current record's "ad_function_id" value
 * @method AdUser              setUnlockCode()       Sets the current record's "unlock_code" value
 * @method AdUser              setToken()            Sets the current record's "token" value
 * @method AdUser              setAdLog()            Sets the current record's "AdLog" collection
 * @method AdUser              setAdRole()           Sets the current record's "AdRole" value
 * @method AdUser              setAdFunction()       Sets the current record's "AdFunction" value
 * @method AdUser              setAdNotification()   Sets the current record's "AdNotification" collection
 * @method AdUser              setAdNotification3()  Sets the current record's "AdNotification_3" collection
 * @method AdUser              setAdUserPatient()    Sets the current record's "AdUserPatient" collection
 * @method AdUser              setAdUserPatient3()   Sets the current record's "AdUserPatient_3" collection
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_user');
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('fname', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('lname', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('email', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 80,
             ));
        $this->hasColumn('uname', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'unique' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('passw', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('phone', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('ad_role_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ad_function_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('unlock_code', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('token', 'string', 45, array(
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
        $this->hasMany('AdLog', array(
             'local' => 'user_id',
             'foreign' => 'ad_user_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('AdRole', array(
             'local' => 'ad_role_id',
             'foreign' => 'role_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('AdFunction', array(
             'local' => 'ad_function_id',
             'foreign' => 'function_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('AdNotification', array(
             'local' => 'user_id',
             'foreign' => 'new_user_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('AdNotification as AdNotification_3', array(
             'local' => 'user_id',
             'foreign' => 'prev_user_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('AdUserPatient', array(
             'local' => 'user_id',
             'foreign' => 'user_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('AdUserPatient as AdUserPatient_3', array(
             'local' => 'user_id',
             'foreign' => 'prev_user_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));
    }
}