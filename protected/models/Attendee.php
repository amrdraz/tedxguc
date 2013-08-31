<?php

/**
 * This is the model class for table "attendee".
 *
 * The followings are the available columns in table 'attendee':
 * @property integer $id
 * @property integer $event_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $birth_year
 * @property string $home_address
 * @property integer $gucian
 * @property string $gucian_other
 * @property integer $bus_number
 * @property string $email
 * @property string $phone
 * @property integer $education_level
 * @property string $job_title
 * @property string $tedx_info
 * @property integer $how_many
 * @property integer $how_much
 * @property integer $how_did
 * @property string $how_other
 * @property string $about_theme
 * @property string $speaker_choice
 * @property integer $excpect_talks
 * @property string $intresting_talk
 * @property integer $waiting_list
 */
class Attendee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Attendee the static model class
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
		return 'attendee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, middle_name, last_name, birth_year, home_address, email, phone, education_level, how_many, how_much, how_did, about_theme, speaker_choice, excpect_talks, intresting_talk', 'required'),
			array('event_id, gucian, bus_number, education_level, how_many, how_much, how_did, excpect_talks, waiting_list', 'numerical', 'integerOnly'=>true),
			array('first_name, middle_name, last_name, job_title, how_other', 'length', 'max'=>30),
			array('birth_year', 'length', 'max'=>4),
			array('home_address', 'length', 'max'=>120),
			array('gucian_other', 'length', 'max'=>50),
			array('email', 'length', 'max'=>60),
			array('phone', 'length', 'max'=>20),
			array('tedx_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, event_id, first_name, middle_name, last_name, birth_year, home_address, gucian, gucian_other, bus_number, email, phone, education_level, job_title, tedx_info, how_many, how_much, how_did, how_other, about_theme, speaker_choice, excpect_talks, intresting_talk, waiting_list', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'event_id' => 'Event',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'birth_year' => 'Birth Year',
			'home_address' => 'Home Address',
			'gucian' => 'Are you a Gucian?',
			'gucian_other' => 'Gucian Other',
			'bus_number' => 'If you’re a GUCian, please indicate your bus number',
			'email' => 'Email',
			'phone' => 'Mobile Phone',
			'education_level' => 'Education Level',
			'job_title' => 'If you are a graduate, please write down your job title.',
			'tedx_info' => 'If you have attended a TEDx event, where was it? And what was your impression about it?',
			'how_many' => 'How many TEDx talks have you watched?',
			'how_much' => 'How much do you know about TED?',
			'how_did' => 'How did you know about TEDxGUCs event?',
			'how_other' => 'How Other',
			'about_theme' => 'What do you know about the theme Synergizers? ',
			'speaker_choice' => 'If you are to choose a speaker for this event, who would it be?',
			'excpect_talks' => 'How many talks do you expect to listen to? ',
			'intresting_talk' => 'From your point of view what makes a talk interesting?',
			'waiting_list' => 'If there are no more available invitations, would you like your name to be put on the waiting list for the event day?',
		);
	}
/*
	public function getAttributeLabel($value)
	{
		$ar = $this->attributeLabels();
		return $ar[$value];
	}
*/

	/**
	* generates the list used in the How did you know about the envent question
	* used in aplication and create
	*/
	public function getHowDidOptions()
	{
		return array('On Campus', 'Our facebook page', 'Our twitter account', 'Through another person', 'Through another TEDx organization', 'Other');
	}

	public function getHowDid()
	{
		return $this->howDidOptions[$this->how_did];
	}

	/**
	* generates the list used in the How much do you know about TED question
	* used in aplication and create
	*/
	public function getHowMuchOptions()
	{
		return array('Nothing', 'Not much knowledge', 'Relatively sufficiant knowledge', 'Almost everything');
	}
	public function getHowMuch()
	{
		return $this->howMuchOptions[$this->how_much];
	}


	/**
	* generates the list used in the How many TEDx talks have you watched question
	* used in aplication and create
	*/
	public function getHowManyOptions()
	{
		return array('None', '1-10', '11-30', '31-50', '51+');
	}
	public function getHowMany()
	{
		return $this->howManyOptions[$this->how_many];
	}

	/**
	* generates the list used in the Educaton Level question
	* used in aplication and create
	*/
	public function getEducationLevelOptions()
	{
		return array('School', 'Highschool', 'University', 'Graduate');
	}
	public function getEducationLevel()
	{
		return $this->educationLevelOptions[$this->education_level];
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

		$criteria->compare('id',$this->id);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('birth_year',$this->birth_year,true);
		$criteria->compare('home_address',$this->home_address,true);
		$criteria->compare('gucian',$this->gucian);
		$criteria->compare('gucian_other',$this->gucian_other,true);
		$criteria->compare('bus_number',$this->bus_number);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('education_level',$this->education_level);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('tedx_info',$this->tedx_info,true);
		$criteria->compare('how_many',$this->how_many);
		$criteria->compare('how_much',$this->how_much);
		$criteria->compare('how_did',$this->how_did);
		$criteria->compare('how_other',$this->how_other,true);
		$criteria->compare('about_theme',$this->about_theme,true);
		$criteria->compare('speaker_choice',$this->speaker_choice,true);
		$criteria->compare('excpect_talks',$this->excpect_talks);
		$criteria->compare('intresting_talk',$this->intresting_talk,true);
		$criteria->compare('waiting_list',$this->waiting_list);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getName()
	{
		return $this->first_name." ".$this->middle_name." ".$this->last_name;
	}

	public function isGucan()
	{
		return $this->gucian?'No':'Yes';
	}

	public function isWating()
	{
		return $this->waiting_list?'No':'Yes';
	}
}