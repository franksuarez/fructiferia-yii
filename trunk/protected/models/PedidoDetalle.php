<?php

/**
 * This is the model class for table "pedido_detalle".
 *
 * The followings are the available columns in table 'pedido_detalle':
 * @property string $pedido_detalle_id
 * @property string $pedido_detalle_descripcion
 * @property integer $pedido_detalle_precio
 * @property integer $pedido_detalle_cantidad
 * @property integer $pedido_detalle_total
 * @property string $pedido_id
 *
 * The followings are the available model relations:
 * @property Pedido $pedido
 */
class PedidoDetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PedidoDetalle the static model class
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
		return 'pedido_detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedido_detalle_precio, pedido_detalle_cantidad, pedido_detalle_total', 'numerical', 'integerOnly'=>true),
			array('pedido_detalle_descripcion', 'length', 'max'=>255),
			array('pedido_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pedido_detalle_id, pedido_detalle_descripcion, pedido_detalle_precio, pedido_detalle_cantidad, pedido_detalle_total, pedido_id', 'safe', 'on'=>'search'),
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
			'pedido' => array(self::BELONGS_TO, 'Pedido', 'pedido_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pedido_detalle_id' => 'Pedido Detalle',
			'pedido_detalle_descripcion' => 'Pedido Detalle Descripcion',
			'pedido_detalle_precio' => 'Pedido Detalle Precio',
			'pedido_detalle_cantidad' => 'Pedido Detalle Cantidad',
			'pedido_detalle_total' => 'Pedido Detalle Total',
			'pedido_id' => 'Pedido',
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

		$criteria->compare('pedido_detalle_id',$this->pedido_detalle_id,true);
		$criteria->compare('pedido_detalle_descripcion',$this->pedido_detalle_descripcion,true);
		$criteria->compare('pedido_detalle_precio',$this->pedido_detalle_precio);
		$criteria->compare('pedido_detalle_cantidad',$this->pedido_detalle_cantidad);
		$criteria->compare('pedido_detalle_total',$this->pedido_detalle_total);
		$criteria->compare('pedido_id',$this->pedido_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}