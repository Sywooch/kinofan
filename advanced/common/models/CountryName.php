<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CountryName}}".
 *
 * @property integer $id
 * @property string $countryName
 *
 * @property Country[] $countries
 * @property Film[] $films
 */
class CountryName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CountryName}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countryName'], 'required'],
            [['countryName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'countryName' => 'Country Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(Country::className(), ['countryId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'filmId'])->viaTable('{{%Country}}', ['countryId' => 'id']);
    }
}
