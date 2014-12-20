<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Rezhiser}}".
 *
 * @property integer $filmId
 * @property integer $rezhiserId
 *
 * @property Film $film
 * @property RezhiserName $rezhiser
 */
class Rezhiser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Rezhiser}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'rezhiserId'], 'required'],
            [['filmId', 'rezhiserId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'rezhiserId' => 'Rezhiser ID',
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
    public function getRezhiser()
    {
        return $this->hasOne(RezhiserName::className(), ['id' => 'rezhiserId']);
    }
}
