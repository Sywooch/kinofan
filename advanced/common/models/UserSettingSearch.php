<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserSeting;

/**
 * UserSettingSearch represents the model behind the search form about `common\models\UserSeting`.
 */
class UserSettingSearch extends UserSeting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId'], 'integer'],
            [['genres', 'countrys', 'yearS', 'yearF', 'producers', 'actors', 'studios', 'rezhesers'], 'safe'],
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
        $query = UserSeting::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'userId' => $this->userId,
            'yearS' => $this->yearS,
            'yearF' => $this->yearF,
        ]);

        $query->andFilterWhere(['like', 'genres', $this->genres])
            ->andFilterWhere(['like', 'countrys', $this->countrys])
            ->andFilterWhere(['like', 'producers', $this->producers])
            ->andFilterWhere(['like', 'actors', $this->actors])
            ->andFilterWhere(['like', 'studios', $this->studios])
            ->andFilterWhere(['like', 'rezhesers', $this->rezhesers]);

        return $dataProvider;
    }
}
