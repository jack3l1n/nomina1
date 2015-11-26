<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property integer $Cedula
 * @property string $Nombre
 * @property string $Apellido
 * @property integer $Edad
 * @property string $Fecha_Nacimiento
 * @property string $Direccion
 * @property integer $Telefono_Fijo
 * @property integer $Celular
 * @property string $Email
 * @property string $Foto
 * @property string $id_Cargo
 * @property string $id_Sucursal
 */
class Empleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Nombre, Apellido, Edad, Fecha_Nacimiento, Direccion, Telefono_Fijo, Celular, Email, Foto, id_Cargo, id_Sucursal', 'required'),
			array('Cedula, Edad, Telefono_Fijo, Celular', 'numerical', 'integerOnly'=>true),
			array('Nombre, Apellido, Direccion, Email, id_Sucursal', 'length', 'max'=>30),
			array('Fecha_Nacimiento', 'length', 'max'=>15),
			array('id_Cargo', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cedula, Nombre, Apellido, Edad, Fecha_Nacimiento, Direccion, Telefono_Fijo, Celular, Email, Foto, id_Cargo, id_Sucursal', 'safe', 'on'=>'search'),
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
			'Cedula' => 'Cedula',
			'Nombre' => 'Nombre',
			'Apellido' => 'Apellido',
			'Edad' => 'Edad',
			'Fecha_Nacimiento' => 'Fecha Nacimiento',
			'Direccion' => 'Direccion',
			'Telefono_Fijo' => 'Telefono Fijo',
			'Celular' => 'Celular',
			'Email' => 'Email',
			'Foto' => 'Foto',
			'id_Cargo' => 'Id Cargo',
			'id_Sucursal' => 'Id Sucursal',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Cedula',$this->Cedula);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('Edad',$this->Edad);
		$criteria->compare('Fecha_Nacimiento',$this->Fecha_Nacimiento,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono_Fijo',$this->Telefono_Fijo);
		$criteria->compare('Celular',$this->Celular);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Foto',$this->Foto,true);
		$criteria->compare('id_Cargo',$this->id_Cargo,true);
		$criteria->compare('id_Sucursal',$this->id_Sucursal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
