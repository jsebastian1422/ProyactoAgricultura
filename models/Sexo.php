<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sexo".
 *
 * @property string $sexo_id
 * @property string $sexo_descripcion
 * @property string $estado
 *
 * @property UsuariosInformacion[] $usuariosInformacions
 */
class Sexo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sexo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sexo_id', 'sexo_descripcion'], 'required'],
            [['sexo_id', 'estado'], 'string', 'max' => 1],
            [['sexo_descripcion'], 'string', 'max' => 120],
            [['sexo_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sexo_id' => 'Sexo ID',
            'sexo_descripcion' => 'Sexo Descripcion',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariosInformacions()
    {
        return $this->hasMany(UsuariosInformacion::className(), ['sexo_id' => 'sexo_id']);
    }
}
