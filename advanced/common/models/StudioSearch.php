<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Studio;

/**
 * StudioSearch represents the model behind the search form about `common\models\Studio`.
 */
class StudioSearch extends Studio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'studioId'], 'integer'],
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
        $query = Studio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'filmId' => $this->filmId,
            'studioId' => $this->studioId,
        ]);

        return $dataProvider;
    }
}
