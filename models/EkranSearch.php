<?php

namespace kouosl\Yemekhane\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\Yemekhane\models\Ekran;

/**
 * EkranSearch represents the model behind the search form about `kouosl\Yemekhane\models\Ekran`.
 */
class EkranSearch extends Ekran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'yemek_id', 'menu_id', 'kalori'], 'integer'],
            [['yemek_adi', 'yemek_tip', 'tarih'], 'safe'],
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
        $query = Ekran::find();

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
            'yemek_id' => $this->yemek_id,
            'menu_id' => $this->menu_id,
            'kalori' => $this->kalori,
            'tarih' => $this->tarih,
        ]);

        $query->andFilterWhere(['like', 'yemek_adi', $this->yemek_adi])
            ->andFilterWhere(['like', 'yemek_tip', $this->yemek_tip]);

        return $dataProvider;
    }
}
