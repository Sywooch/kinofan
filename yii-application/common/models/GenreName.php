<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%GenreName}}".
 *
 * @property integer $id
 * @property string $genreName
 *
 * @property Genre[] $genres
 * @property Film[] $films
 */
class GenreName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%GenreName}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['genreName'], 'required'],
            [['genreName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genreName' => 'Genre Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['genreId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'filmId'])->viaTable('{{%Genre}}', ['genreId' => 'id']);
    }
}
