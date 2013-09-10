<?php

/**
 * This is the model class for table "talk".
 *
 * The followings are the available columns in table 'talk':
 * @property integer $id
 * @property string $title
 * @property integer $speaker_id
 * @property string $summary
 * @property integer $event_id
 */
class Talk extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Talk the static model class
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
		return 'talk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id,title, summary, event_id', 'required'),
			array('event_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, speaker_id, summary, event_id', 'safe', 'on'=>'search'),
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
			'speakers'=>array(self::HAS_MANY, 'speaker', 'talk_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url_id'=>'Video URL ID',
			'title' => 'Title',
			'speaker_summary' => 'Speaker Summary',
			'speakers'=>'Speakers',
			'summary' => 'Summary',
			'event_id' => 'Event',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('speaker_id',$this->speaker_id);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('event_id',$this->event_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function getSpeakersOptions()
	{
		return CHtml::listData(Speaker::findAllByEvent(array('require_talk'=>true)), 'id', 'name');
	}

	public function getSpeaker()
	{
		return $this->speakers[0];
	}
}