<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Rezhiser;

/**
 * RezhiserSearch represents the model behind the search form about `common\models\Rezhiser`.
 */
class RezhiserSearch extends Rezhiser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'rezhiserId'], 'integer'],
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
        $query = Rezhiser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'filmId' => $this->filmId,
            'rezhiserId' => $this->rezhiserId,
        ]);

        return $dataProvider;
    }
}
