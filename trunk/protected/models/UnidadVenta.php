<?php

/**
 * This is the model class for table "unidad_venta".
 *
 * The followings are the available columns in table 'unidad_venta':
 * @property integer $unidad_venta_id
 * @property string $unidad_venta_nombre
 */
class UnidadVenta extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UnidadVenta the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'unidad_venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array( array('unidad_venta_nombre', 'length', 'max' => 255),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('unidad_venta_id, unidad_venta_nombre', 'safe', 'on' => 'search'), );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array('unidad_venta_id' => 'ID', 'unidad_venta_nombre' => 'Nombre', );
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria -> compare('unidad_venta_id', $this -> unidad_venta_id);
		$criteria -> compare('unidad_venta_nombre', $this -> unidad_venta_nombre, true);

		return new CActiveDataProvider($this, array('criteria' => $criteria, ));
	}

}
