<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%ActorName}}".
 *
 * @property integer $id
 * @property string $actorName
 *
 * @property Actor[] $actors
 * @property Film[] $films
 */
class ActorName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ActorName}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actorName'], 'required'],
            [['actorName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'actorName' => 'Actor Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActors()
    {
        return $this->hasMany(Actor::className(), ['actorId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'filmId'])->viaTable('{{%Actor}}', ['actorId' => 'id']);
    }
}
