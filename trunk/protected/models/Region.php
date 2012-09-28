<?php

/**
 * This is the model class for table "region".
 *
 * The followings are the available columns in table 'region':
 * @property integer $region_id
 * @property string $region_nombre
 * @property integer $region_numero
 * @property string $region_numero_romano
 * @property string $region_descripcion
 *
 * The followings are the available model relations:
 * @property Provincia[] $provincias
 */
class Region extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Region the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array( array('region_numero', 'numerical', 'integerOnly' => true), array('region_nombre, region_descripcion', 'length', 'max' => 255), array('region_numero_romano', 'length', 'max' => 10),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('region_id, region_nombre, region_numero, region_numero_romano, region_descripcion', 'safe', 'on' => 'search'), );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('provincias' => array(self::HAS_MANY, 'Provincia', 'region_id'), );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array('region_id' => 'Region', 'region_nombre' => 'Region Nombre', 'region_numero' => 'Region Numero', 'region_numero_romano' => 'Region Numero Romano', 'region_descripcion' => 'Region Descripcion', );
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria -> compare('region_id', $this -> region_id);
		$criteria -> compare('region_nombre', $this -> region_nombre, true);
		$criteria -> compare('region_numero', $this -> region_numero);
		$criteria -> compare('region_numero_romano', $this -> region_numero_romano, true);
		$criteria -> compare('region_descripcion', $this -> region_descripcion, true);

		return new CActiveDataProvider($this, array('criteria' => $criteria, ));
	}

}
