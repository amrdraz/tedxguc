<?php

/**
 * This is the model class for table "speaker".
 *
 * The followings are the available columns in table 'speaker':
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $occupation
 * @property string $phone
 * @property string $email
 * @property string $cv
 * @property string $fb_link
 * @property string $tw_link
 * @property string $ln_link
 * @property string $prev_talk_url
 * @property string $prev_events
 * @property string $fav_talks
 * @property string $video_url
 */
class Speaker extends CActiveRecord
{
	public $cv_file;
	public $img_file;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Speaker the static model class
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
		return 'speaker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, age, occupation, phone, email, cv, fav_talks, video_url', 'required','on'=>'application'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('name, occupation', 'length', 'max'=>60),
			array('phone', 'length', 'max'=>15),
			array('email', 'length', 'max'=>70),
			array('cv, fb_link, tw_link, ln_link, prev_talk_url, video_url', 'length', 'max'=>120),
			array('cv_file', 'file', 'types' => 'doc,docx,odt,txt,pdf', 'allowEmpty'=>true),
			array('img_file', 'file', 'types' => 'jpg,jpeg,png,gif', 'allowEmpty'=>true),
            array('email', 'email'),
            //array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
            
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, age, occupation, phone, email, cv, fb_link, tw_link, ln_link, prev_talk_url, prev_events, fav_talks, video_url', 'safe', 'on'=>'search'),
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
			'event'=>array(self::BELONGS_TO, 'event', 'event_id'),
			'talk'=>array(self::BELONGS_TO, 'talk', 'talk_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'age' => 'Age',
			'occupation' => 'Occupation',
			'phone' => 'Phone',
			'email' => 'Email',
			'cv' => 'C.V.',
			'file_types' => 'doc,docx,odt,txt,pdf',
			'image_types' => 'jpeg, jpg, png, gif',
			'fb_link' => 'Facebook',
			'tw_link' => 'Twitter',
			'ln_link' => 'Other',
			'prev_talk_url' => 'link to prev talk',
			'prev_events' => 'Events Attended',
			'fav_talks' => 'Favorit Talks',
			'video_url' => 'Video Url',
			'img'=>'Image',
			'event'=>'Event'
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cv',$this->cv,true);
		$criteria->compare('fb_link',$this->fb_link,true);
		$criteria->compare('tw_link',$this->tw_link,true);
		$criteria->compare('ln_link',$this->ln_link,true);
		$criteria->compare('prev_talk_url',$this->prev_talk_url,true);
		$criteria->compare('prev_events',$this->prev_events,true);
		$criteria->compare('fav_talks',$this->fav_talks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getEventsOptions()
	{
		return CHtml::listData(Event::model()->findAll(), 'id', 'title');
	}

	public static function findAllByEvent($url='')
	{
		if(!empty($url)) {
			$event_id = Event::model()->find('url="'.$url.'"')->id;
			return Speaker::model()->findAll('event_id = '.$event_id);
		} else {
			return Speaker::model()->findAll('event_id > 0 and event_id is not null');
		}
	}

	//from http://stackoverflow.com/questions/4258557/limit-text-length-in-php-and-provide-read-more-link with modification
	public function getShortSummary($size=200) {
		// strip tags to avoid breaking any html
		$string = strip_tags($this->summary);

		if (strlen($string) > $size) {

		    // truncate string
		    $stringCut = substr($string, 0, $size);

		    // make sure it ends in a word so assassinate doesn't become ass...
		    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
		}
		return $string;
	}
}