<?php

/**
 * This is the model class for table "pagina".
 *
 * The followings are the available columns in table 'pagina':
 * @property string $pagina_id
 * @property string $pagina_nombre
 * @property string $pagina_titulo
 * @property string $pagina_texto
 */
class Pagina extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagina the static model class
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
		return 'pagina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pagina_nombre, pagina_titulo', 'length', 'max'=>255),
			array('pagina_texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pagina_id, pagina_nombre, pagina_titulo, pagina_texto', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pagina_id' => 'Pagina',
			'pagina_nombre' => 'Pagina Nombre',
			'pagina_titulo' => 'Pagina Titulo',
			'pagina_texto' => 'Pagina Texto',
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

		$criteria->compare('pagina_id',$this->pagina_id,true);
		$criteria->compare('pagina_nombre',$this->pagina_nombre,true);
		$criteria->compare('pagina_titulo',$this->pagina_titulo,true);
		$criteria->compare('pagina_texto',$this->pagina_texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}