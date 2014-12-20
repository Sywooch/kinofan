<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Genre}}".
 *
 * @property integer $filmId
 * @property integer $genreId
 *
 * @property Film $film
 * @property GenreName $genre
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Genre}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'genreId'], 'required'],
            [['filmId', 'genreId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'genreId' => 'Genre ID',
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
    public function getGenre()
    {
        return $this->hasOne(GenreName::className(), ['id' => 'genreId']);
    }
}
