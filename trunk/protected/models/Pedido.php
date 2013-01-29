<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property string $pedido_id
 * @property string $pedido_fecha
 * @property string $pedido_cliente_nombre
 * @property string $pedido_cliente_direccion
 * @property string $pedido_cliente_comuna
 * @property string $pedido_cliente_provincia
 * @property string $pedido_cliente_telefono
 * @property string $pedido_cliente_telefono_movil
 * @property string $cliente_id
 * @property string $forma_pago_id
 *
 * The followings are the available model relations:
 * @property Cliente $cliente
 * @property FormaPago $formaPago
 * @property PedidoDetalle[] $pedidoDetalles
 */
class Pedido extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Pedido the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'pedido';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('pedido_fecha, pedido_cliente_nombre, pedido_cliente_direccion, pedido_cliente_comuna, pedido_cliente_telefono, pedido_cliente_telefono_movil', 'required'),
            array('pedido_cliente_nombre, pedido_cliente_direccion, pedido_cliente_comuna, pedido_cliente_provincia, pedido_cliente_telefono, pedido_cliente_telefono_movil', 'length', 'max' => 255),
            array('cliente_id, forma_pago_id', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('pedido_id, pedido_fecha, pedido_cliente_nombre, pedido_cliente_direccion, pedido_cliente_comuna, pedido_cliente_provincia, pedido_cliente_telefono, pedido_cliente_telefono_movil, cliente_id, forma_pago_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'cliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id'),
            'formaPago' => array(self::BELONGS_TO, 'FormaPago', 'forma_pago_id'),
            'pedidoDetalles' => array(self::HAS_MANY, 'PedidoDetalle', 'pedido_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pedido_id' => 'Pedido',
            'pedido_fecha' => 'Pedido Fecha',
            'pedido_cliente_nombre' => 'Pedido Cliente Nombre',
            'pedido_cliente_direccion' => 'Pedido Cliente Direccion',
            'pedido_cliente_comuna' => 'Pedido Cliente Comuna',
            'pedido_cliente_provincia' => 'Pedido Cliente Provincia',
            'pedido_cliente_telefono' => 'Pedido Cliente Telefono',
            'pedido_cliente_telefono_movil' => 'Pedido Cliente Telefono Movil',
            'cliente_id' => 'Cliente',
            'forma_pago_id' => 'Forma Pago',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('pedido_id', $this->pedido_id, true);
        $criteria->compare('pedido_fecha', $this->pedido_fecha, true);
        $criteria->compare('pedido_cliente_nombre', $this->pedido_cliente_nombre, true);
        $criteria->compare('pedido_cliente_direccion', $this->pedido_cliente_direccion, true);
        $criteria->compare('pedido_cliente_comuna', $this->pedido_cliente_comuna, true);
        $criteria->compare('pedido_cliente_provincia', $this->pedido_cliente_provincia, true);
        $criteria->compare('pedido_cliente_telefono', $this->pedido_cliente_telefono, true);
        $criteria->compare('pedido_cliente_telefono_movil', $this->pedido_cliente_telefono_movil, true);
        $criteria->compare('cliente_id', $this->cliente_id, true);
        $criteria->compare('forma_pago_id', $this->forma_pago_id, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}