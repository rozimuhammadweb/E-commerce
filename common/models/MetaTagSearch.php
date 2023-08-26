<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MetaTag;

/**
 * MetaTagSearch represents the model behind the search form of `common\models\MetaTag`.
 */
class MetaTagSearch extends MetaTag
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id'], 'integer'],
            [['title', 'description', 'keywords', 'og_title', 'og_description', 'og_image_url', 'twitter_title', 'twitter_description', 'twitter_image_url', 'canonical_url'], 'safe'],
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
        $query = MetaTag::find();

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
            'product_id' => $this->product_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'og_title', $this->og_title])
            ->andFilterWhere(['like', 'og_description', $this->og_description])
            ->andFilterWhere(['like', 'og_image_url', $this->og_image_url])
            ->andFilterWhere(['like', 'twitter_title', $this->twitter_title])
            ->andFilterWhere(['like', 'twitter_description', $this->twitter_description])
            ->andFilterWhere(['like', 'twitter_image_url', $this->twitter_image_url])
            ->andFilterWhere(['like', 'canonical_url', $this->canonical_url]);

        return $dataProvider;
    }
}
