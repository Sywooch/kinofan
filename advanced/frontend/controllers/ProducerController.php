<?php

namespace frontend\controllers;

use Yii;
use common\models\Producer;
use common\models\ProducerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProducerController implements the CRUD actions for Producer model.
 */
class ProducerController extends Controller
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
     * Lists all Producer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProducerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Producer model.
     * @param integer $filmId
     * @param integer $producerId
     * @return mixed
     */
    public function actionView($filmId, $producerId)
    {
        return $this->render('view', [
            'model' => $this->findModel($filmId, $producerId),
        ]);
    }

    /**
     * Creates a new Producer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Producer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'producerId' => $model->producerId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Producer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $filmId
     * @param integer $producerId
     * @return mixed
     */
    public function actionUpdate($filmId, $producerId)
    {
        $model = $this->findModel($filmId, $producerId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'producerId' => $model->producerId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Producer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $filmId
     * @param integer $producerId
     * @return mixed
     */
    public function actionDelete($filmId, $producerId)
    {
        $this->findModel($filmId, $producerId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Producer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $filmId
     * @param integer $producerId
     * @return Producer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($filmId, $producerId)
    {
        if (($model = Producer::findOne(['filmId' => $filmId, 'producerId' => $producerId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
