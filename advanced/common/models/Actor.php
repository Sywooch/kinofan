<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Actor}}".
 *
 * @property integer $filmId
 * @property integer $actorId
 *
 * @property Film $film
 * @property ActorName $actor
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Actor}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'actorId'], 'required'],
            [['filmId', 'actorId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'actorId' => 'Actor ID',
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
    public function getActor()
    {
        return $this->hasOne(ActorName::className(), ['id' => 'actorId']);
    }
}
