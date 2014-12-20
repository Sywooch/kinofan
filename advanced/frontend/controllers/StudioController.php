<?php

namespace frontend\controllers;

use Yii;
use common\models\Studio;
use common\models\StudioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudioController implements the CRUD actions for Studio model.
 */
class StudioController extends Controller
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
     * Lists all Studio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Studio model.
     * @param integer $filmId
     * @param integer $studioId
     * @return mixed
     */
    public function actionView($filmId, $studioId)
    {
        return $this->render('view', [
            'model' => $this->findModel($filmId, $studioId),
        ]);
    }

    /**
     * Creates a new Studio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Studio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'studioId' => $model->studioId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Studio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $filmId
     * @param integer $studioId
     * @return mixed
     */
    public function actionUpdate($filmId, $studioId)
    {
        $model = $this->findModel($filmId, $studioId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'studioId' => $model->studioId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Studio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $filmId
     * @param integer $studioId
     * @return mixed
     */
    public function actionDelete($filmId, $studioId)
    {
        $this->findModel($filmId, $studioId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Studio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $filmId
     * @param integer $studioId
     * @return Studio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($filmId, $studioId)
    {
        if (($model = Studio::findOne(['filmId' => $filmId, 'studioId' => $studioId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
