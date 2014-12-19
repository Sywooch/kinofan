<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Film}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $year
 * @property string $country
 *
 * @property ActorName[] $actors
 * @property Comment[] $comments
 * @property User[] $users
 * @property GenreName[] $genres
 * @property News $news
 * @property ProducerName[] $producers
 * @property RezhiserName[] $rezhisers
 * @property StudioName[] $studios
 * @property View[] $views
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Film}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'year', 'country'], 'required'],
            [['description'], 'string'],
            [['year'], 'safe'],
            [['title', 'country'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'year' => 'Year',
            'country' => 'Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActors()
    {
        return $this->hasMany(ActorName::className(), ['id' => 'actorId'])->viaTable('{{%Actor}}', ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'userId'])->viaTable('{{%View}}', ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(GenreName::className(), ['id' => 'genreId'])->viaTable('{{%Genre}}', ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducers()
    {
        return $this->hasMany(ProducerName::className(), ['id' => 'producerId'])->viaTable('{{%Producer}}', ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRezhisers()
    {
        return $this->hasMany(RezhiserName::className(), ['id' => 'rezhiserId'])->viaTable('{{%Rezhiser}}', ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudios()
    {
        return $this->hasMany(StudioName::className(), ['id' => 'studioId'])->viaTable('{{%Studio}}', ['filmId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViews()
    {
        return $this->hasMany(View::className(), ['filmId' => 'id']);
    }
}
