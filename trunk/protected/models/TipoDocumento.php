<?php

/**
 * This is the model class for table "tipo_documento".
 *
 * The followings are the available columns in table 'tipo_documento':
 * @property string $tipo_documento_id
 * @property string $tipo_documento_nombre
 * @property string $tipo_documento_descripcion
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 */
class TipoDocumento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoDocumento the static model class
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
		return 'tipo_documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_documento_nombre, tipo_documento_descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tipo_documento_id, tipo_documento_nombre, tipo_documento_descripcion', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'tipo_documento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_documento_id' => 'Tipo Documento',
			'tipo_documento_nombre' => 'Tipo Documento Nombre',
			'tipo_documento_descripcion' => 'Tipo Documento Descripcion',
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

		$criteria->compare('tipo_documento_id',$this->tipo_documento_id,true);
		$criteria->compare('tipo_documento_nombre',$this->tipo_documento_nombre,true);
		$criteria->compare('tipo_documento_descripcion',$this->tipo_documento_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}