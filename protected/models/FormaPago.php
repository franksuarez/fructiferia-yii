<?php

/**
 * This is the model class for table "forma_pago".
 *
 * The followings are the available columns in table 'forma_pago':
 * @property string $forma_pago_id
 * @property string $forma_pago_nombre
 * @property string $forma_pago_descripcion
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 */
class FormaPago extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FormaPago the static model class
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
		return 'forma_pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forma_pago_nombre, forma_pago_descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('forma_pago_id, forma_pago_nombre, forma_pago_descripcion', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'forma_pago_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'forma_pago_id' => 'Forma Pago',
			'forma_pago_nombre' => 'Forma Pago Nombre',
			'forma_pago_descripcion' => 'Forma Pago Descripcion',
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

		$criteria->compare('forma_pago_id',$this->forma_pago_id,true);
		$criteria->compare('forma_pago_nombre',$this->forma_pago_nombre,true);
		$criteria->compare('forma_pago_descripcion',$this->forma_pago_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}