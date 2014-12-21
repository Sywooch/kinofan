<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%UserSeting}}".
 *
 * @property integer $userId
 * @property string $genres
 * @property string $countrys
 * @property string $yearS
 * @property string $yearF
 * @property string $producers
 * @property string $actors
 * @property string $studios
 * @property string $rezhesers
 */
class UserSeting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%UserSeting}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId'], 'required'],
            [['userId'], 'integer'],
            [['genres', 'countrys', 'producers', 'actors', 'studios', 'rezhesers'], 'string'],
            [['yearS', 'yearF'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'genres' => 'Genres',
            'countrys' => 'Countrys',
            'yearS' => 'Year S',
            'yearF' => 'Year F',
            'producers' => 'Producers',
            'actors' => 'Actors',
            'studios' => 'Studios',
            'rezhesers' => 'Rezhesers',
        ];
    }
}
