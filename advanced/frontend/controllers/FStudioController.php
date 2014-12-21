<?php

namespace frontend\controllers;

use Yii;
use common\models\FStudio;
use common\models\FStudioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FStudioController implements the CRUD actions for FStudio model.
 */
class FStudioController extends Controller
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
     * Lists all FStudio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FStudioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FStudio model.
     * @param integer $userId
     * @param integer $studioId
     * @return mixed
     */
    public function actionView($userId, $studioId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $studioId),
        ]);
    }

    /**
     * Creates a new FStudio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FStudio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'studioId' => $model->studioId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FStudio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $studioId
     * @return mixed
     */
    public function actionUpdate($userId, $studioId)
    {
        $model = $this->findModel($userId, $studioId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'studioId' => $model->studioId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FStudio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $studioId
     * @return mixed
     */
    public function actionDelete($userId, $studioId)
    {
        $this->findModel($userId, $studioId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FStudio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $studioId
     * @return FStudio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $studioId)
    {
        if (($model = FStudio::findOne(['userId' => $userId, 'studioId' => $studioId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
