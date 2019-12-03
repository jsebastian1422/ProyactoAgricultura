<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_documentos".
 *
 * @property string $tipo_documento
 * @property string $tipo_documento_nombre
 * @property string $descripcion
 *
 * @property FincasInformacion[] $fincasInformacions
 * @property UsuariosInformacion[] $usuariosInformacions
 */
class TiposDocumentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipos_documentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_documento', 'tipo_documento_nombre', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['tipo_documento'], 'string', 'max' => 3],
            [['tipo_documento_nombre'], 'string', 'max' => 120],
            [['tipo_documento'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tipo_documento' => 'Tipo Documento',
            'tipo_documento_nombre' => 'Tipo Documento Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFincasInformacions()
    {
        return $this->hasMany(FincasInformacion::className(), ['tipo_documento' => 'tipo_documento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariosInformacions()
    {
        return $this->hasMany(UsuariosInformacion::className(), ['tipo_documento' => 'tipo_documento']);
    }
}
