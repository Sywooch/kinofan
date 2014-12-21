<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Country}}".
 *
 * @property integer $filmId
 * @property integer $countryId
 *
 * @property CountryName $country
 * @property Film $film
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Country}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filmId', 'countryId'], 'required'],
            [['filmId', 'countryId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filmId' => 'Film ID',
            'countryId' => 'Country ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(CountryName::className(), ['id' => 'countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'filmId']);
    }
}
