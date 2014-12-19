<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Studio}}".
 *
 * @property integer $filmId
 * @property integer $studioId
 *
 * @property StudioName $studio
 * @property Film $film
 */
class Studio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Studio}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'studioId'], 'required'],
            [['filmId', 'studioId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'studioId' => 'Studio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudio()
    {
        return $this->hasOne(StudioName::className(), ['id' => 'studioId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'filmId']);
    }
}
