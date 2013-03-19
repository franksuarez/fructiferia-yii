<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $cliente_id
 * @property string $cliente_nombre
 * @property string $cliente_ape_paterno
 * @property string $cliente_ape_materno
 * @property string $cliente_email
 * @property string $cliente_telefono
 * @property string $cliente_telefono_movil
 * @property string $cliente_password
 */
class Cliente extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Cliente the static model class
     */
    public $password_repeat;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cliente';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cliente_nombre, cliente_ape_paterno, cliente_ape_materno, cliente_email, cliente_password', 'length', 'max' => 255),
            array('cliente_nombre, cliente_ape_paterno, cliente_ape_materno, cliente_email, cliente_telefono, cliente_telefono_movil, cliente_password, password_repeat', 'required', 'message' => 'El campo {attribute} no puede estar en blanco.'),
            array('cliente_telefono', 'length', 'max' => 7, 'message' => 'El largo para el campo teléfono es de 7 números.'),
            array('cliente_telefono_movil', 'length', 'max' => 8, 'message' => 'El largo para el campo teléfono móvil es de 8 números.'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('cliente_id, cliente_nombre, cliente_ape_paterno, cliente_ape_materno, cliente_email, cliente_telefono, cliente_telefono_movil, cliente_password', 'safe', 'on' => 'search'),
            array('cliente_email', 'email', 'message' => 'El E-Mail ingresado es incorrecto.'),
            array('cliente_password', 'compare', 'compareAttribute' => 'password_repeat', 'message' => 'Los campos de passoword deben ser iguales.'),
            array('password_repeat', 'compare', 'compareAttribute' => 'cliente_password', 'message' => 'Los campos de passoword deben ser iguales.'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'cliente_id' => 'ID',
            'cliente_nombre' => 'Nombre',
            'cliente_ape_paterno' => 'Apellido Paterno',
            'cliente_ape_materno' => 'Apellido Materno',
            'cliente_email' => 'E-mail',
            'cliente_telefono' => 'Teléfono',
            'cliente_telefono_movil' => 'Teléfono Móvil',
            'cliente_password' => 'Password',
            'password_repeat' => 'Confirmar Password',
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

        $criteria->compare('cliente_id', $this->cliente_id, true);
        $criteria->compare('cliente_nombre', $this->cliente_nombre, true);
        $criteria->compare('cliente_ape_paterno', $this->cliente_ape_paterno, true);
        $criteria->compare('cliente_ape_materno', $this->cliente_ape_materno, true);
        $criteria->compare('cliente_email', $this->cliente_email, true);
        $criteria->compare('cliente_telefono', $this->cliente_telefono, true);
        $criteria->compare('cliente_telefono_movil', $this->cliente_telefono_movil, true);
        $criteria->compare('cliente_password', $this->cliente_password, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function getNombreCompleto() {
        return $this->cliente_nombre . ' ' . $this->cliente_ape_paterno;
    }

}