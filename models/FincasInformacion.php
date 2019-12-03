<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fincas_informacion".
 *
 * @property int $finca_id
 * @property string $tipo_documento
 * @property string $documento_finca
 * @property string $nombre_finca
 * @property string $telefono_finca
 * @property string $direccion_finca
 * @property int $usuario_id Almacena el id del usuario que crea la finca
 *
 * @property AgricultoresFinca[] $agricultoresFincas
 * @property TiposDocumentos $tipoDocumento
 * @property Usuarios $usuario
 */
class FincasInformacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fincas_informacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_documento', 'documento_finca', 'nombre_finca', 'telefono_finca', 'direccion_finca', 'usuario_id'], 'required'],
            [['usuario_id'], 'integer'],
            [['tipo_documento'], 'string', 'max' => 3],
            [['documento_finca', 'telefono_finca'], 'string', 'max' => 20],
            [['nombre_finca', 'direccion_finca'], 'string', 'max' => 120],
            [['tipo_documento'], 'exist', 'skipOnError' => true, 'targetClass' => TiposDocumentos::className(), 'targetAttribute' => ['tipo_documento' => 'tipo_documento']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'finca_id' => 'Finca ID',
            'tipo_documento' => 'Tipo Documento',
            'documento_finca' => 'Documento Finca',
            'nombre_finca' => 'Nombre Finca',
            'telefono_finca' => 'Telefono Finca',
            'direccion_finca' => 'Direccion Finca',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgricultoresFincas()
    {
        return $this->hasMany(AgricultoresFinca::className(), ['finca_id' => 'finca_id']);
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
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['usuario_id' => 'usuario_id']);
    }

   
}
