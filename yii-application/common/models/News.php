<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%News}}".
 *
 * @property integer $filmId
 * @property string $title
 * @property string $text
 * @property string $datetime
 *
 * @property Film $film
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%News}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'title', 'text', 'datetime'], 'required'],
            [['filmId'], 'integer'],
            [['text'], 'string'],
            [['datetime'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'title' => 'Title',
            'text' => 'Text',
            'datetime' => 'Datetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'filmId']);
    }
}
