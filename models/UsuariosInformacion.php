<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios_informacion".
 *
 * @property int $usuario_info
 * @property int $usuario_id
 * @property string $documento
 * @property string $tipo_documento
 * @property string $nombre
 * @property int $edad
 * @property string $sexo_id
 * @property string $celular
 * @property string $direccion
 * @property string $eps
 *
 * @property Usuarios $usuario
 * @property TiposDocumentos $tipoDocumento
 * @property Sexo $sexo
 */
class UsuariosInformacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios_informacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'documento', 'tipo_documento', 'nombre', 'edad', 'sexo_id', 'celular', 'direccion', 'eps'], 'required'],
            [['usuario_id', 'edad'], 'integer'],
            [['eps'], 'string'],
            [['documento', 'celular'], 'string', 'max' => 20],
            [['tipo_documento'], 'string', 'max' => 3],
            [['nombre', 'direccion'], 'string', 'max' => 120],
            [['sexo_id'], 'string', 'max' => 1],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
            [['tipo_documento'], 'exist', 'skipOnError' => true, 'targetClass' => TiposDocumentos::className(), 'targetAttribute' => ['tipo_documento' => 'tipo_documento']],
            [['sexo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sexo::className(), 'targetAttribute' => ['sexo_id' => 'sexo_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usuario_info' => 'Usuario Info',
            'usuario_id' => 'Usuario ID',
            'documento' => 'Documento',
            'tipo_documento' => 'Tipo Documento',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'sexo_id' => 'Sexo ID',
            'celular' => 'Celular',
            'direccion' => 'Direccion',
            'eps' => 'Eps',
        ];
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
    public function getTipoDocumento()
    {
        return $this->hasOne(TiposDocumentos::className(), ['tipo_documento' => 'tipo_documento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSexo()
    {
        return $this->hasOne(Sexo::className(), ['sexo_id' => 'sexo_id']);
    }

    public function getAllTypesDocuments(){
        
    }
}
