<?php

/**
 * This is the model class for table "dr_case".
 *
 * The followings are the available columns in table 'dr_case':
 * @property integer $id
 * @property string $title
 * @property string $thumb
 * @property string $url
 * @property string $summary
 * @property string $addtime
 */
class DrCase extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DrCase the static model class
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
		return 'dr_case';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('addtime', 'required'),
			array('title, thumb, url', 'length', 'max'=>250),
			array('summary', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, thumb, url, summary, addtime', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'thumb' => 'Thumb',
			'url' => 'Url',
			'summary' => 'Summary',
			'addtime' => 'Addtime',
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
		$criteria->compare('thumb',$this->thumb,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('addtime',$this->addtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}