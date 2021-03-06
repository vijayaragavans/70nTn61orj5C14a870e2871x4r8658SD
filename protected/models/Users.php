<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_password
 * @property string $user_is_active
 * @property string $user_created_on
 */
class Users extends CActiveRecord
{


	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, user_email, user_password, user_created_on', 'required'),
			array('user_name, user_email, user_password', 'length', 'max'=>250),
			array('user_is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, user_email, user_password, user_is_active, user_created_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_name' => 'Username',
			'user_email' => 'Useremail',
			'user_password' => 'Password',
			'user_is_active' => 'User Is Active',
			'user_created_on' => 'User Created On',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_is_active',$this->user_is_active,true);
		$criteria->compare('user_created_on',$this->user_created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function register()
	{
		$command = Yii::app()->db->createCommand();	
		
		$current_date = date(' Y-m-d H:i:s');
		$pwd = md5($this->user_password);
		$command->insert('tbl_users', array(
		    'user_name'=>"$this->user_name",
		    'user_email'=>"$this->user_email",
		    'user_password'=>"$pwd",
		    'user_created_on'=>"$current_date"
		));

		return Yii::app()->db->getLastInsertID();
		
	}
}