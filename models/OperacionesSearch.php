<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Operaciones;

/**
 * OperacionesSearch represents the model behind the search form of `app\models\Operaciones`.
 */
class OperacionesSearch extends Operaciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['operacion_id'], 'integer'],
            [['operacion_nombre', 'tipo_operacion', 'estado'], 'safe'],
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
        $query = Operaciones::find();

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
            'operacion_id' => $this->operacion_id,
        ]);

        $query->andFilterWhere(['like', 'operacion_nombre', $this->operacion_nombre])
            ->andFilterWhere(['like', 'tipo_operacion', $this->tipo_operacion])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
