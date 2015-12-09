<?php

namespace app\controllers;

use Yii;
use app\models\TareasHasRecursoHumano;
use app\models\TareasHasRecursoHumanoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TareasHasRecursoHumanoController implements the CRUD actions for TareasHasRecursoHumano model.
 */
class TareasHasRecursoHumanoController extends Controller
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
     * Lists all TareasHasRecursoHumano models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TareasHasRecursoHumanoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TareasHasRecursoHumano model.
     * @param integer $tareas_idtareas
     * @param integer $recurso_humano_idrecurso_humano
     * @return mixed
     */
    public function actionView($tareas_idtareas, $recurso_humano_idrecurso_humano)
    {
        return $this->render('view', [
            'model' => $this->findModel($tareas_idtareas, $recurso_humano_idrecurso_humano),
        ]);
    }

    /**
     * Creates a new TareasHasRecursoHumano model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TareasHasRecursoHumano();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tareas_idtareas' => $model->tareas_idtareas, 'recurso_humano_idrecurso_humano' => $model->recurso_humano_idrecurso_humano]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TareasHasRecursoHumano model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $tareas_idtareas
     * @param integer $recurso_humano_idrecurso_humano
     * @return mixed
     */
    public function actionUpdate($tareas_idtareas, $recurso_humano_idrecurso_humano)
    {
        $model = $this->findModel($tareas_idtareas, $recurso_humano_idrecurso_humano);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tareas_idtareas' => $model->tareas_idtareas, 'recurso_humano_idrecurso_humano' => $model->recurso_humano_idrecurso_humano]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TareasHasRecursoHumano model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $tareas_idtareas
     * @param integer $recurso_humano_idrecurso_humano
     * @return mixed
     */
    public function actionDelete($tareas_idtareas, $recurso_humano_idrecurso_humano)
    {
        $this->findModel($tareas_idtareas, $recurso_humano_idrecurso_humano)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TareasHasRecursoHumano model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $tareas_idtareas
     * @param integer $recurso_humano_idrecurso_humano
     * @return TareasHasRecursoHumano the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tareas_idtareas, $recurso_humano_idrecurso_humano)
    {
        if (($model = TareasHasRecursoHumano::findOne(['tareas_idtareas' => $tareas_idtareas, 'recurso_humano_idrecurso_humano' => $recurso_humano_idrecurso_humano])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
