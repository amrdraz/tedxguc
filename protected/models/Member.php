<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $id
 * @property string $name
 * @property string $role
 * @property string $major
 * @property string $skills
 * @property string $talents
 * @property string $achievments
 * @property string $why
 * @property string $past_experience
 * @property string $facebook
 * @property string $website
 * @property integer $points
 * @property string $img
 * @property string $favorit_talk
 * @property string $email
 */
class Member extends CActiveRecord
{
	public $img_file;


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email', 'required'),
			array('points', 'numerical', 'integerOnly'=>true),
			array('name, major, facebook, website, img, email', 'length', 'max'=>120),
			array('role', 'length', 'max'=>60),
			array('img_file', 'file', 'types' => 'jpg,jpeg,png,gif', 'allowEmpty'=>true),
			array('skills, talents, achievments, why, past_experience, favorit_talk', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, role, major, skills, talents, achievments, why, past_experience, facebook, website, points, img, favorit_talk, email', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'role' => 'Role',
			'major' => 'Major',
			'skills' => 'Skills',
			'talents' => 'Talents',
			'achievments' => 'Achievments',
			'why' => 'Why',
			'past_experience' => 'Past Experience',
			'facebook' => 'Facebook',
			'website' => 'Website',
			'points' => 'Points',
			'img' => 'Img',
			'favorit_talk' => 'Favorit Talks',
			'email' => 'Email',
			'image_types' => 'jpeg, jpg, png, gif',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('skills',$this->skills,true);
		$criteria->compare('talents',$this->talents,true);
		$criteria->compare('achievments',$this->achievments,true);
		$criteria->compare('why',$this->why,true);
		$criteria->compare('past_experience',$this->past_experience,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('points',$this->points);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('favorit_talk',$this->favorit_talk,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
