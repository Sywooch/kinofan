<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FStudio;

/**
 * FStudioSearch represents the model behind the search form about `common\models\FStudio`.
 */
class FStudioSearch extends FStudio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'studioId'], 'integer'],
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
        $query = FStudio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'userId' => $this->userId,
            'studioId' => $this->studioId,
        ]);

        return $dataProvider;
    }
}
