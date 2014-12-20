<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\View;

/**
 * ViewSearch represents the model behind the search form about `common\models\View`.
 */
class ViewSearch extends View
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'filmId', 'estimation', 'status'], 'integer'],
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
        $query = View::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'userId' => $this->userId,
            'filmId' => $this->filmId,
            'estimation' => $this->estimation,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
