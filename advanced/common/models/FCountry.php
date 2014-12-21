<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FCountry}}".
 *
 * @property integer $userId
 * @property integer $countyId
 *
 * @property UserSeting $user
 * @property CountryName $county
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
    public function getUser()
    {
        return $this->hasOne(UserSeting::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCounty()
    {
        return $this->hasOne(CountryName::className(), ['id' => 'countyId']);
    }
}
