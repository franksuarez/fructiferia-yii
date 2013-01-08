<?php

/**
 * This is the model class for table "configuracion".
 *
 * The followings are the available columns in table 'configuracion':
 * @property string $configuracion_id
 * @property string $configuracion_nombre
 * @property string $configuracion_descripcion
 * @property string $configuracion_valor
 */
class Configuracion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Configuracion the static model class
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
		return 'configuracion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('configuracion_nombre, configuracion_descripcion, configuracion_valor', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('configuracion_id, configuracion_nombre, configuracion_descripcion, configuracion_valor', 'safe', 'on'=>'search'),
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
			'configuracion_id' => 'Configuracion',
			'configuracion_nombre' => 'Configuracion Nombre',
			'configuracion_descripcion' => 'Configuracion Descripcion',
			'configuracion_valor' => 'Configuracion Valor',
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

		$criteria->compare('configuracion_id',$this->configuracion_id,true);
		$criteria->compare('configuracion_nombre',$this->configuracion_nombre,true);
		$criteria->compare('configuracion_descripcion',$this->configuracion_descripcion,true);
		$criteria->compare('configuracion_valor',$this->configuracion_valor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}