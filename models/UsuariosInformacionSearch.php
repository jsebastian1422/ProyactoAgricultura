<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UsuariosInformacion;

/**
 * UsuariosInformacionSearch represents the model behind the search form of `app\models\UsuariosInformacion`.
 */
class UsuariosInformacionSearch extends UsuariosInformacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_info', 'usuario_id', 'edad'], 'integer'],
            [['documento', 'tipo_documento', 'nombre', 'sexo_id', 'celular', 'direccion', 'eps'], 'safe'],
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
        $query = UsuariosInformacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'usuario_info' => $this->usuario_info,
            'usuario_id' => $this->usuario_id,
            'edad' => $this->edad,
        ]);

        $query->andFilterWhere(['like', 'documento', $this->documento])
            ->andFilterWhere(['like', 'tipo_documento', $this->tipo_documento])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'sexo_id', $this->sexo_id])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'eps', $this->eps]);

        return $dataProvider;
    }
}
