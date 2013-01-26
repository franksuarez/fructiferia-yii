<?php

/**
 * This is the model class for table "menu_panel_control_cliente".
 *
 * The followings are the available columns in table 'menu_panel_control_cliente':
 * @property string $menu_panel_control_cliente_id
 * @property string $menu_panel_control_cliente_nombre
 * @property string $menu_panel_control_cliente_url
 */
class MenuPanelControlCliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuPanelControlCliente the static model class
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
		return 'menu_panel_control_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_panel_control_cliente_nombre, menu_panel_control_cliente_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('menu_panel_control_cliente_id, menu_panel_control_cliente_nombre, menu_panel_control_cliente_url', 'safe', 'on'=>'search'),
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
			'menu_panel_control_cliente_id' => 'Menu Panel Control Cliente',
			'menu_panel_control_cliente_nombre' => 'Menu Panel Control Cliente Nombre',
			'menu_panel_control_cliente_url' => 'Menu Panel Control Cliente Url',
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

		$criteria->compare('menu_panel_control_cliente_id',$this->menu_panel_control_cliente_id,true);
		$criteria->compare('menu_panel_control_cliente_nombre',$this->menu_panel_control_cliente_nombre,true);
		$criteria->compare('menu_panel_control_cliente_url',$this->menu_panel_control_cliente_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}