<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AgricultoresFinca;

/**
 * AgricultoresFincaSearch represents the model behind the search form of `app\models\AgricultoresFinca`.
 */
class AgricultoresFincaSearch extends AgricultoresFinca
{   
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agricultor_finca_id', 'finca_id', 'usuario_id', 'operacion_id', 'nombre', 'nombre_finca', 'operacion_nombre'], 'integer'],
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
        $query = AgricultoresFinca::find();

        // add conditions that should always apply here
        $query->joinWith(['usuario', 'finca', 'operacion']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['nombre'] = [
            'asc' => ['nombre' => SORT_ASC],
            'desc' => ['nombre' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['nombre_finca'] = [
            'asc' => ['nombre_finca' => SORT_ASC],
            'desc' => ['nombre_finca' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['operacion_nombre'] = [
            'asc' => ['operacion_nombre' => SORT_ASC],
            'desc' => ['operacion_nombre' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'agricultor_finca_id' => $this->agricultor_finca_id,
            'finca_id' => $this->finca_id,
            'usuario_id' => $this->usuario_id,
            'operacion_id' => $this->operacion_id,
        ]);
        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'nombre_finca', $this->nombre_finca])
            ->andFilterWhere(['like', 'operacion_nombre', $this->operacion_nombre]);

        return $dataProvider;
    }
}
