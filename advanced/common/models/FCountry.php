<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FCountry}}".
 *
 * @property integer $userId
 * @property integer $countyId
 *
 * @property CountryName $county
 * @property User $user
 */
class FCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FCountry}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'countyId'], 'required'],
            [['userId', 'countyId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'countyId' => 'County ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCounty()
    {
        return $this->hasOne(CountryName::className(), ['id' => 'countyId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
