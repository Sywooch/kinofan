<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%StudioName}}".
 *
 * @property integer $id
 * @property string $studioName
 *
 * @property FStudio[] $fStudios
 * @property UserSeting[] $users
 * @property Studio[] $studios
 * @property Film[] $films
 */
class StudioName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%StudioName}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['studioName'], 'required'],
            [['studioName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'studioName' => 'Studio Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFStudios()
    {
        return $this->hasMany(FStudio::className(), ['studioId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(UserSeting::className(), ['userId' => 'userId'])->viaTable('{{%FStudio}}', ['studioId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudios()
    {
        return $this->hasMany(Studio::className(), ['studioId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'filmId'])->viaTable('{{%Studio}}', ['studioId' => 'id']);
    }
}
