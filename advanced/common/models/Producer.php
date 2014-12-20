<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Producer}}".
 *
 * @property integer $filmId
 * @property integer $producerId
 *
 * @property Film $film
 * @property ProducerName $producer
 */
class Producer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Producer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'producerId'], 'required'],
            [['filmId', 'producerId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'producerId' => 'Producer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'filmId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(ProducerName::className(), ['id' => 'producerId']);
    }
}
