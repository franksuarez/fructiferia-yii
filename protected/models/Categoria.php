<?php

/**
 * This is the model class for table "categoria".
 *
 * The followings are the available columns in table 'categoria':
 * @property string $categoria_id
 * @property string $categoria_nombre
 * @property string $categoria_descripcion
 * @property string $categoria_padre
 */
class Categoria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categoria the static model class
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
		return 'categoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoria_nombre, categoria_descripcion', 'length', 'max'=>255),
			array('categoria_padre', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('categoria_id, categoria_nombre, categoria_descripcion, categoria_padre', 'safe', 'on'=>'search'),
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
			'categoria_id' => 'Categoria',
			'categoria_nombre' => 'Categoria Nombre',
			'categoria_descripcion' => 'Categoria Descripcion',
			'categoria_padre' => 'Categoria Padre',
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

		$criteria->compare('categoria_id',$this->categoria_id,true);
		$criteria->compare('categoria_nombre',$this->categoria_nombre,true);
		$criteria->compare('categoria_descripcion',$this->categoria_descripcion,true);
		$criteria->compare('categoria_padre',$this->categoria_padre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}