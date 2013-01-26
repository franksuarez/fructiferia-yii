<?php

/**
 * This is the model class for table "direccion".
 *
 * The followings are the available columns in table 'direccion':
 * @property string $direccion_id
 * @property string $direccion_descripcion
 * @property string $comuna_id
 * @property string $cliente_id
 *
 * The followings are the available model relations:
 * @property Cliente $cliente
 * @property Comuna $comuna
 */
class Direccion extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Direccion the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'direccion';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('direccion_descripcion', 'length', 'max' => 255),
            array('comuna_id, cliente_id', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('direccion_id, direccion_descripcion, comuna_id, cliente_id', 'safe', 'on' => 'search'),
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
            'comuna' => array(self::BELONGS_TO, 'Comuna', 'comuna_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'direccion_id' => 'Direccion',
            'direccion_descripcion' => 'Direccion',
            'comuna_id' => 'Comuna',
            'cliente_id' => 'Cliente',
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

        $criteria->compare('direccion_id', $this->direccion_id, true);
        $criteria->compare('direccion_descripcion', $this->direccion_descripcion, true);
        $criteria->compare('comuna_id', $this->comuna_id, true);
        $criteria->compare('cliente_id', $this->cliente_id, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}