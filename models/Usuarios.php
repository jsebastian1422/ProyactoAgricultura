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
 *
 * @property Roles $rol
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
            [['usuario', 'contrasena', 'estado', 'foto_usuario', 'rol_id'], 'required'],
            [['fecha_registro'], 'safe'],
            [['rol_id'], 'integer'],
            [['usuario', 'contrasena', 'foto_usuario'], 'string', 'max' => 120],
            [['estado'], 'string', 'max' => 1],
            [['rol_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['rol_id' => 'rol_id']],
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
        ];
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
    public function getUsuariosInformacions()
    {
        return $this->hasMany(UsuariosInformacion::className(), ['usuario_id' => 'usuario_id']);
    }
}
