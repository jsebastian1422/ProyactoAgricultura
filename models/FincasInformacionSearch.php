<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FincasInformacion;

/**
 * FincasInformacionSearch represents the model behind the search form of `app\models\FincasInformacion`.
 */
class FincasInformacionSearch extends FincasInformacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['finca_id', 'usuario_id'], 'integer'],
            [['tipo_documento', 'documento_finca', 'nombre_finca', 'telefono_finca', 'direccion_finca'], 'safe'],
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
        $query = FincasInformacion::find();

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
            'finca_id' => $this->finca_id,
            'usuario_id' => $this->usuario_id,
        ]);

        $query->andFilterWhere(['like', 'tipo_documento', $this->tipo_documento])
            ->andFilterWhere(['like', 'documento_finca', $this->documento_finca])
            ->andFilterWhere(['like', 'nombre_finca', $this->nombre_finca])
            ->andFilterWhere(['like', 'telefono_finca', $this->telefono_finca])
            ->andFilterWhere(['like', 'direccion_finca', $this->direccion_finca]);

        return $dataProvider;
    }
}
