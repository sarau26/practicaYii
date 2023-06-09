<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Camposextra;

/**
 * CamposextraSearch represents the model behind the search form of `app\models\Camposextra`.
 */
class CamposextraSearch extends Camposextra
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'ID_EXTERNO'], 'integer'],
            [['Articulo', 'Metodo_pago', 'Motivo_negatividad'], 'safe'],
            [['Precio'], 'number'],
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
        $query = Camposextra::find();

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
            'ID' => $this->ID,
            'ID_EXTERNO' => $this->ID_EXTERNO,
            'Precio' => $this->Precio,
        ]);

        $query->andFilterWhere(['like', 'Articulo', $this->Articulo])
            ->andFilterWhere(['like', 'Metodo_pago', $this->Metodo_pago])
            ->andFilterWhere(['like', 'Motivo_negatividad', $this->Motivo_negatividad]);

        return $dataProvider;
    }
}
