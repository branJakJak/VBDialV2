<?php

/**
 * This is the model class for table "vicidial_remote_agents".
 *
 * The followings are the available columns in table 'vicidial_remote_agents':
 * @property integer $remote_agent_id
 * @property string $user_start
 * @property integer $number_of_lines
 * @property string $server_ip
 * @property string $conf_exten
 * @property string $status
 * @property string $campaign_id
 * @property string $closer_campaigns
 * @property string $extension_group
 * @property string $extension_group_order
 * @property string $on_hook_agent
 * @property integer $on_hook_ring_time
 * @property string $included
 */
class VicidialRemoteAgents extends CActiveRecord
{
    const INACTIVE_STATUS = "INACTIVE";
    const ACTIVE_STATUS = "ACTIVE";
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vicidial_remote_agents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('server_ip', 'required'),
			array('number_of_lines, on_hook_ring_time', 'numerical', 'integerOnly'=>true),
			array('user_start, conf_exten, extension_group, extension_group_order, included', 'length', 'max'=>20),
			array('server_ip', 'length', 'max'=>15),
			array('status, campaign_id', 'length', 'max'=>8),
			array('on_hook_agent', 'length', 'max'=>1),
			array('closer_campaigns', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('remote_agent_id, user_start, number_of_lines, server_ip, conf_exten, status, campaign_id, closer_campaigns, extension_group, extension_group_order, on_hook_agent, on_hook_ring_time, included', 'safe', 'on'=>'search'),
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
			'remote_agent_id' => 'Remote Agent',
			'user_start' => 'User Start',
			'number_of_lines' => 'Number Of Lines',
			'server_ip' => 'Server Ip',
			'conf_exten' => 'Conf Exten',
			'status' => 'Status',
			'campaign_id' => 'Campaign',
			'closer_campaigns' => 'Closer Campaigns',
			'extension_group' => 'Extension Group',
			'extension_group_order' => 'Extension Group Order',
			'on_hook_agent' => 'On Hook Agent',
			'on_hook_ring_time' => 'On Hook Ring Time',
			'included' => 'Included',
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

		$criteria->compare('remote_agent_id',$this->remote_agent_id);
		$criteria->compare('user_start',$this->user_start,true);
		$criteria->compare('number_of_lines',$this->number_of_lines);
		$criteria->compare('server_ip',$this->server_ip,true);
		$criteria->compare('conf_exten',$this->conf_exten,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('campaign_id',$this->campaign_id,true);
		$criteria->compare('closer_campaigns',$this->closer_campaigns,true);
		$criteria->compare('extension_group',$this->extension_group,true);
		$criteria->compare('extension_group_order',$this->extension_group_order,true);
		$criteria->compare('on_hook_agent',$this->on_hook_agent,true);
		$criteria->compare('on_hook_ring_time',$this->on_hook_ring_time);
		$criteria->compare('included',$this->included,true);
		$criteria->addNotInCondition("t.campaign_id",array("REMINDER"));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VicidialRemoteAgents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getDbConnection()
	{
		return Yii::app()->asterisk_db;
	}
}