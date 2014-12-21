<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FActor;

/**
 * FActorSearch represents the model behind the search form about `common\models\FActor`.
 */
class FActorSearch extends FActor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'actorId'], 'integer'],
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
        $query = FActor::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'userId' => $this->userId,
            'actorId' => $this->actorId,
        ]);

        return $dataProvider;
    }
}
