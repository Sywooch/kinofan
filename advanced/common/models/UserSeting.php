<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%UserSeting}}".
 *
 * @property integer $userId
 * @property string $genres
 * @property string $countrys
 * @property string $years
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
            [['userId', 'genres', 'countrys', 'years', 'producers', 'actors', 'studios', 'rezhesers'], 'required'],
            [['userId'], 'integer'],
            [['genres', 'countrys', 'years', 'producers', 'actors', 'studios', 'rezhesers'], 'string']
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
            'years' => 'Years',
            'producers' => 'Producers',
            'actors' => 'Actors',
            'studios' => 'Studios',
            'rezhesers' => 'Rezhesers',
        ];
    }
}
