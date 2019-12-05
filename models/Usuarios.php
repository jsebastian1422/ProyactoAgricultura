<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $usuario_id
 * @property string $usuario
 * @property string $contrasena
 * @property string $fecha_registro
 * @property string $estado
 * @property string $foto_usuario
 * @property int $rol_id
 * @property string $documento
 * @property string $tipo_documento
 * @property string $nombre
 * @property int $edad
 * @property string $sexo_id
 * @property string $celular
 * @property string $direccion
 * @property string $eps
 *
 * @property AgricultoresFinca[] $agricultoresFincas
 * @property FincasInformacion[] $fincasInformacions
 * @property Roles $rol
 * @property TiposDocumentos $tipoDocumento
 * @property Sexo $sexo
 * @property UsuariosInformacion[] $usuariosInformacions
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario', 'contrasena', 'estado', 'foto_usuario', 'rol_id', 'documento', 'tipo_documento', 'nombre', 'edad', 'sexo_id', 'celular', 'direccion', 'eps'], 'required'],
            [['fecha_registro'], 'safe'],
            [['rol_id', 'edad'], 'integer'],
            [['eps'], 'string'],
            [['usuario', 'contrasena', 'foto_usuario', 'nombre', 'direccion'], 'string', 'max' => 120],
            [['estado', 'sexo_id'], 'string', 'max' => 1],
            [['documento', 'celular'], 'string', 'max' => 20],
            [['tipo_documento'], 'string', 'max' => 3],
            [['rol_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['rol_id' => 'rol_id']],
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
            'usuario_id' => 'Usuario ID',
            'usuario' => 'Usuario',
            'contrasena' => 'Contrasena',
            'fecha_registro' => 'Fecha Registro',
            'estado' => 'Estado',
            'foto_usuario' => 'Foto Usuario',
            'rol_id' => 'Rol ID',
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
    public function getAgricultoresFincas()
    {
        return $this->hasMany(AgricultoresFinca::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFincasInformacions()
    {
        return $this->hasMany(FincasInformacion::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRol()
    {
        return $this->hasOne(Roles::className(), ['rol_id' => 'rol_id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariosInformacions()
    {
        return $this->hasMany(UsuariosInformacion::className(), ['usuario_id' => 'usuario_id']);
    }
}
