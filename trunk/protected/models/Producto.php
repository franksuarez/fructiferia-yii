<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property string $producto_id
 * @property string $producto_codigo
 * @property string $producto_nombre
 * @property string $producto_descripcion
 * @property integer $producto_precio
 * @property string $producto_fecha_ingreso
 * @property string $producto_fecha_modificacion
 * @property string $categoria_id
 * @property string $unidad_venta_id
 *
 * The followings are the available model relations:
 * @property Categoria $categoria
 * @property UnidadVenta $unidadVenta
 */
class Producto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
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
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('producto_nombre, producto_precio, categoria_id, unidad_venta_id', 'required'),
			array('producto_precio', 'numerical', 'integerOnly'=>true),
			array('producto_codigo, categoria_id, unidad_venta_id', 'length', 'max'=>20),
			array('producto_nombre, producto_descripcion', 'length', 'max'=>255),
			array('producto_fecha_ingreso, producto_fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('producto_id, producto_codigo, producto_nombre, producto_descripcion, producto_precio, producto_fecha_ingreso, producto_fecha_modificacion, categoria_id, unidad_venta_id', 'safe', 'on'=>'search'),
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
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_id'),
			'unidadVenta' => array(self::BELONGS_TO, 'UnidadVenta', 'unidad_venta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'producto_id' => 'Producto',
			'producto_codigo' => 'Producto Codigo',
			'producto_nombre' => 'Producto Nombre',
			'producto_descripcion' => 'Producto Descripcion',
			'producto_precio' => 'Producto Precio',
			'producto_fecha_ingreso' => 'Producto Fecha Ingreso',
			'producto_fecha_modificacion' => 'Producto Fecha Modificacion',
			'categoria_id' => 'Categoria',
			'unidad_venta_id' => 'Unidad Venta',
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

		$criteria->compare('producto_id',$this->producto_id,true);
		$criteria->compare('producto_codigo',$this->producto_codigo,true);
		$criteria->compare('producto_nombre',$this->producto_nombre,true);
		$criteria->compare('producto_descripcion',$this->producto_descripcion,true);
		$criteria->compare('producto_precio',$this->producto_precio);
		$criteria->compare('producto_fecha_ingreso',$this->producto_fecha_ingreso,true);
		$criteria->compare('producto_fecha_modificacion',$this->producto_fecha_modificacion,true);
		$criteria->compare('categoria_id',$this->categoria_id,true);
		$criteria->compare('unidad_venta_id',$this->unidad_venta_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}