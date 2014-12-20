<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Producer;

/**
 * ProducerSearch represents the model behind the search form about `common\models\Producer`.
 */
class ProducerSearch extends Producer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'producerId'], 'integer'],
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
        $query = Producer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'filmId' => $this->filmId,
            'producerId' => $this->producerId,
        ]);

        return $dataProvider;
    }
}
