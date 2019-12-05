<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operaciones".
 *
 * @property int $operacion_id
 * @property string $operacion_nombre
 * @property string $tipo_operacion 1:administrativo, 2:agrario
 * @property string $estado 1:Activo, 0:Inactivo
 *
 * @property AgricultoresFinca[] $agricultoresFincas
 */
class Operaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['operacion_nombre', 'tipo_operacion', 'estado'], 'required'],
            [['operacion_nombre'], 'string', 'max' => 120],
            [['tipo_operacion', 'estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'operacion_id' => 'Operacion ID',
            'operacion_nombre' => 'Operacion Nombre',
            'tipo_operacion' => 'Tipo Operacion',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgricultoresFincas()
    {
        return $this->hasMany(AgricultoresFinca::className(), ['operacion_id' => 'operacion_id']);
    }
}
