<?php

namespace app\controllers;

use Yii;
use common\models\Rezhiser;
use common\models\RezhiserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RezhiserController implements the CRUD actions for Rezhiser model.
 */
class RezhiserController extends Controller
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
     * Lists all Rezhiser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RezhiserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rezhiser model.
     * @param integer $filmId
     * @param integer $rezhiserId
     * @return mixed
     */
    public function actionView($filmId, $rezhiserId)
    {
        return $this->render('view', [
            'model' => $this->findModel($filmId, $rezhiserId),
        ]);
    }

    /**
     * Creates a new Rezhiser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rezhiser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'rezhiserId' => $model->rezhiserId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Rezhiser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $filmId
     * @param integer $rezhiserId
     * @return mixed
     */
    public function actionUpdate($filmId, $rezhiserId)
    {
        $model = $this->findModel($filmId, $rezhiserId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'rezhiserId' => $model->rezhiserId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Rezhiser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $filmId
     * @param integer $rezhiserId
     * @return mixed
     */
    public function actionDelete($filmId, $rezhiserId)
    {
        $this->findModel($filmId, $rezhiserId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rezhiser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $filmId
     * @param integer $rezhiserId
     * @return Rezhiser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($filmId, $rezhiserId)
    {
        if (($model = Rezhiser::findOne(['filmId' => $filmId, 'rezhiserId' => $rezhiserId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
