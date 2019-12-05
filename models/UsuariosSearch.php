<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form of `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'rol_id'], 'integer'],
            [['usuario', 'contrasena', 'fecha_registro', 'estado', 'foto_usuario', 'sexo_descripcion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuarios::find();

        // add conditions that should always apply here
        $query->joinWith(['sexo']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['sexo_descripcion'] = [
            'asc' => ['sexo_descripcion' => SORT_ASC],
            'desc' => ['sexo_descripcion' => SORT_DESC],
        ];            
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'usuario_id' => $this->usuario_id,
            'fecha_registro' => $this->fecha_registro,
            'rol_id' => $this->rol_id,
        ]);

        $query->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'contrasena', $this->contrasena])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'sexo_descripcion', $this->sexo_descripcion])
            ->andFilterWhere(['like', 'foto_usuario', $this->foto_usuario]);

        return $dataProvider;
    }
}
