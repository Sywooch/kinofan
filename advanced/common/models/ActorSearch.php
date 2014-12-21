<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Actor;

/**
 * ActorSearch represents the model behind the search form about `common\models\Actor`.
 */
class ActorSearch extends Actor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'actorId'], 'integer'],
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
        $query = Actor::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'filmId' => $this->filmId,
            'actorId' => $this->actorId,
        ]);

        return $dataProvider;
    }
}
