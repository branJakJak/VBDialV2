<?php

/**
 * This is the model class for table "vicidial_server_carriers".
 *
 * The followings are the available columns in table 'vicidial_server_carriers':
 * @property string $carrier_id
 * @property string $carrier_name
 * @property string $registration_string
 * @property string $template_id
 * @property string $account_entry
 * @property string $protocol
 * @property string $globals_string
 * @property string $dialplan_entry
 * @property string $server_ip
 * @property string $active
 * @property string $carrier_description
 * @property string $user_group
 * @property string $api_username
 * @property string $api_password
 * @property string $api_mainpass
 * @property string $remote_user
 * @property double $api_balance
 */
class VicidialServerCarriers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vicidial_server_carriers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('carrier_id, carrier_name, template_id, server_ip', 'required'),
			array('api_balance', 'numerical'),
			array('carrier_id, template_id, server_ip', 'length', 'max'=>15),
			array('carrier_name', 'length', 'max'=>50),
			array('registration_string, globals_string, carrier_description', 'length', 'max'=>255),
			array('protocol', 'length', 'max'=>8),
			array('active', 'length', 'max'=>1),
			array('user_group, api_mainpass, remote_user', 'length', 'max'=>20),
			array('api_username, api_password', 'length', 'max'=>60),
			array('account_entry, dialplan_entry', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('carrier_id, carrier_name, registration_string, template_id, account_entry, protocol, globals_string, dialplan_entry, server_ip, active, carrier_description, user_group, api_username, api_password, api_mainpass, remote_user, api_balance', 'safe', 'on'=>'search'),
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
			'carrier_id' => 'Carrier',
			'carrier_name' => 'Carrier Name',
			'registration_string' => 'Registration String',
			'template_id' => 'Template',
			'account_entry' => 'Account Entry',
			'protocol' => 'Protocol',
			'globals_string' => 'Globals String',
			'dialplan_entry' => 'Dialplan Entry',
			'server_ip' => 'Server Ip',
			'active' => 'Active',
			'carrier_description' => 'Carrier Description',
			'user_group' => 'User Group',
			'api_username' => 'Api Username',
			'api_password' => 'Api Password',
			'api_mainpass' => 'Api Mainpass',
			'remote_user' => 'Remote User',
			'api_balance' => 'Api Balance',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('carrier_id',$this->carrier_id,true);
		$criteria->compare('carrier_name',$this->carrier_name,true);
		$criteria->compare('registration_string',$this->registration_string,true);
		$criteria->compare('template_id',$this->template_id,true);
		$criteria->compare('account_entry',$this->account_entry,true);
		$criteria->compare('protocol',$this->protocol,true);
		$criteria->compare('globals_string',$this->globals_string,true);
		$criteria->compare('dialplan_entry',$this->dialplan_entry,true);
		$criteria->compare('server_ip',$this->server_ip,true);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('carrier_description',$this->carrier_description,true);
		$criteria->compare('user_group',$this->user_group,true);
		$criteria->compare('api_username',$this->api_username,true);
		$criteria->compare('api_password',$this->api_password,true);
		$criteria->compare('api_mainpass',$this->api_mainpass,true);
		$criteria->compare('remote_user',$this->remote_user,true);
		$criteria->compare('api_balance',$this->api_balance);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VicidialServerCarriers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getDbConnection()
	{
		return Yii::app()->asterisk_db;
	}

	public function getViciUser()
	{
		$model = $this->getRemoteAgent();
		if ($model) {
			return $model->user_start;
		}else{
			return "";
		}
	}
	public function getNumberOfLines()
	{
		$model = $this->getRemoteAgent();
		if ($model) {
			return $model->number_of_lines;
		}else{
			return "";
		}
	}
	public function getServerIp()
	{
		$model = $this->getRemoteAgent();
		if ($model) {
			return $model->server_ip;
		}else{
			return "";
		}
	}
	public function getStatus()
	{
		$model = $this->getRemoteAgent();
		if ($model) {
			return $model->status;
		}else{
			return "";
		}
	}
	public function getCampaignId()
	{
		$model = $this->getRemoteAgent();
		if ($model) {
			return $model->campaign_id;
		}else{
			return "";
		}
	}
	public function getRemoteAgent()
	{
		return VicidialRemoteAgents::model()->findByAttributes(array('user_start'=>$this->remote_user));
	}
}