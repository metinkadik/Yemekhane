<?php

namespace kouosl\yemekhane\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Yemekler;

/**
 * YemeklerSearch represents the model behind the search form about `app\models\Yemekler`.
 */
class YemeklerSearch extends Yemekler
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kalori'], 'integer'],
            [['yemek_tip', 'yemek_adi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Yemekler::find();

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
            'id' => $this->id,
            'kalori' => $this->kalori,
        ]);

        $query->andFilterWhere(['like', 'yemek_tip', $this->yemek_tip])
            ->andFilterWhere(['like', 'yemek_adi', $this->yemek_adi]);

        return $dataProvider;
    }
}
