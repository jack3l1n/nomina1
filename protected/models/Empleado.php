<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property string $cedula
 * @property string $nombre
 * @property string $apellido
 * @property integer $edad
 * @property string $fecha_nacimiento
 * @property string $direccion
 * @property integer $telefono
 * @property integer $celular
 * @property string $email
 * @property string $Imagen
 * @property string $cargo
 * @property string $sucursal
 *
 * The followings are the available model relations:
 * @property InformacionEmpleado[] $informacionEmpleados
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
			array('cedula, edad, fotoprincipal', 'required'),
			array('edad, telefono, celular', 'numerical', 'integerOnly'=>true),
			array('cedula', 'length', 'max'=>50),
			array('nombre, apellido, direccion, email, cargo, sucursal', 'length', 'max'=>45),
			array('fecha_nacimiento', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula, nombre, apellido, edad, fecha_nacimiento, direccion, telefono, celular, email, fotoprincipal, cargo, sucursal', 'safe', 'on'=>'search'),
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
			'informacionEmpleados' => array(self::HAS_MANY, 'InformacionEmpleado', 'cedula_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cedula',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'edad' => 'Edad',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
			'fotoprincipal' => 'Fotoprincipal',
			'cargo' => 'Cargo',
			'sucursal' => 'Sucursal',
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

		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('celular',$this->celular);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('Fotoprincipal',$this->Fotoprincipal,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('sucursal',$this->sucursal,true);

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
