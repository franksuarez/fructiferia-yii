<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $usuario_rut
 * @property string $usuario_dv
 * @property string $usuario_nombre
 * @property string $usuario_ape_paterno
 * @property string $usuario_ape_materno
 * @property string $usuario_mail
 * @property integer $usuario_activo
 * @property string $usuario_password
 *
 * The followings are the available model relations:
 * @property Permiso[] $permisos
 */
class Usuario extends CActiveRecord {
	
	public $usuario_password_repeat;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_rut, usuario_dv, usuario_nombre, usuario_ape_paterno, usuario_ape_materno, usuario_mail, usuario_activo, usuario_password, usuario_password_repeat', 'required'),
			array('usuario_rut, usuario_activo', 'numerical', 'integerOnly' => true),
			array('usuario_dv', 'length', 'max' => 1),
			array('usuario_nombre, usuario_ape_paterno, usuario_ape_materno, usuario_mail, usuario_password', 'length', 'max' => 255),
			array('usuario_password', 'compare'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usuario_rut, usuario_dv, usuario_nombre, usuario_ape_paterno, usuario_ape_materno, usuario_mail, usuario_activo, usuario_password, usuario_password_repeat', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('permisos' => array(self::MANY_MANY, 'Permiso', 'usuario_permiso(usuario_rut, permiso_id)'), );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'usuario_rut' => 'RUT',
			'usuario_dv' => 'Digito Verificador',
			'usuario_nombre' => 'Nombre',
			'usuario_ape_paterno' => 'Apellido Paterno',
			'usuario_ape_materno' => 'Apellido Materno',
			'usuario_mail' => 'Mail',
			'usuario_activo' => 'Activo',
			'usuario_password' => 'Password',
			'usuario_password_repeat' => 'Repetir Password',
		);
	}
	
	protected function afterValidate() {
		parent::afterValidate();
		$this->usuario_password = $this->encrypt($this->usuario_password);
	}
	
	public function encrypt($value) {
		return md5($value);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria -> compare('usuario_rut', $this -> usuario_rut);
		$criteria -> compare('usuario_dv', $this -> usuario_dv, true);
		$criteria -> compare('usuario_nombre', $this -> usuario_nombre, true);
		$criteria -> compare('usuario_ape_paterno', $this -> usuario_ape_paterno, true);
		$criteria -> compare('usuario_ape_materno', $this -> usuario_ape_materno, true);
		$criteria -> compare('usuario_mail', $this -> usuario_mail, true);
		$criteria -> compare('usuario_activo', $this -> usuario_activo);
		$criteria -> compare('usuario_password', $this -> usuario_password, true);

		return new CActiveDataProvider($this, array('criteria' => $criteria, ));
	}

}
