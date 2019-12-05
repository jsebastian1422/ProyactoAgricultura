<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agricultores_finca".
 *
 * @property int $agricultor_finca_id
 * @property int $finca_id Almacena el identificador de la finca
 * @property int $usuario_id Almacena el identificador del usuario
 * @property int $operacion_id Almacena los tipos de operaciones
 *
 * @property FincasInformacion $finca
 * @property Usuarios $usuario
 * @property Operaciones $operacion
 */
class AgricultoresFinca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nombre;
    public $operacion_nombre;
    public $nombre_finca;

    public static function tableName()
    {
        return 'agricultores_finca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['finca_id', 'usuario_id', 'operacion_id'], 'required'],
            [['finca_id', 'usuario_id', 'operacion_id'], 'integer'],
            [['finca_id'], 'exist', 'skipOnError' => true, 'targetClass' => FincasInformacion::className(), 'targetAttribute' => ['finca_id' => 'finca_id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
            [['operacion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operaciones::className(), 'targetAttribute' => ['operacion_id' => 'operacion_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'agricultor_finca_id' => 'Agricultor Finca ID',
            'finca_id' => 'Finca ID',
            'usuario_id' => 'Usuario ID',
            'operacion_id' => 'Operacion ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinca()
    {
        return $this->hasOne(FincasInformacion::className(), ['finca_id' => 'finca_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperacion()
    {
        return $this->hasOne(Operaciones::className(), ['operacion_id' => 'operacion_id']);
    }

    public function selectAllInfo(){
        $sql = "SELECT 
                af.*,	
                u.nombre,	
                op.operacion,
                fi.nombre_finca
            FROM agricultores_finca af
            INNER JOIN usuarios u ON (af.usuario_id = u.usuario_id)
            INNER JOIN operaciones op ON (af.operacion_id = op.operacion_id)
            INNER JOIN fincas_informacion fi ON (af.finca_id = fi.finca_id)";
        return $this->findBySql($sql)->asArray()->all();
    }

    public function selectInfoView($usuario_id){
        $sql = "SELECT 
                af.*,	
                u.nombre,	
                op.operacion,
                fi.nombre_finca
            FROM agricultores_finca af
            INNER JOIN usuarios u ON (af.usuario_id = u.usuario_id)
            INNER JOIN operaciones op ON (af.operacion_id = op.operacion_id)
            INNER JOIN fincas_informacion fi ON (af.finca_id = fi.finca_id)";
        return $this->findBySql($sql)->asArray()->where(['u.usuario_id' => $usuario_id])->one();
    }
    
    
}
