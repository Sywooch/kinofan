<?php

namespace frontend\controllers;

use Yii;
use common\models\Actor;
use common\models\ActorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ActorController implements the CRUD actions for Actor model.
 */
class ActorController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Actor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ActorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Actor model.
     * @param integer $filmId
     * @param integer $actorId
     * @return mixed
     */
    public function actionView($filmId, $actorId)
    {
        return $this->render('view', [
            'model' => $this->findModel($filmId, $actorId),
        ]);
    }

    /**
     * Creates a new Actor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Actor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'actorId' => $model->actorId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Actor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $filmId
     * @param integer $actorId
     * @return mixed
     */
    public function actionUpdate($filmId, $actorId)
    {
        $model = $this->findModel($filmId, $actorId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'actorId' => $model->actorId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Actor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $filmId
     * @param integer $actorId
     * @return mixed
     */
    public function actionDelete($filmId, $actorId)
    {
        $this->findModel($filmId, $actorId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Actor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $filmId
     * @param integer $actorId
     * @return Actor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($filmId, $actorId)
    {
        if (($model = Actor::findOne(['filmId' => $filmId, 'actorId' => $actorId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
