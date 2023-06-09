<?php

namespace app\controllers;

use app\models\Cliente;
use app\models\ClienteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClientesController implements the CRUD actions for Cliente model.
 */
class ClientesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Cliente models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ClienteSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cliente model.
     * @param int $ID_EXTERNO Id Externo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_EXTERNO)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_EXTERNO),
        ]);
    }

    /**
     * Creates a new Cliente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Cliente();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $existingModel = Cliente::findOne(['Cedula' => $model->Cedula]);
                if ($existingModel !== null) {
                    $model->addError('Cedula', 'La cédula ya existe en la base de datos');
                }else
                {
                    if($model->save()){
                        return $this->redirect(['/camposextra/view', 'ID_EXTERNO' => $model->ID_EXTERNO]);
                    }
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            //'ID_EXTERNO' => $model->ID_EXTERNO,
        ]);
    }

    /*public function actionCreate2()
    {
        $model = new Cliente();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_EXTERNO' => $model->ID_EXTERNO]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create2', [
            'model' => $model,
            'ID_EXTERNO' => $model->ID_EXTERNO,
        ]);

    }*/






    /**
     * Updates an existing Cliente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_EXTERNO Id Externo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionUpdate($ID_EXTERNO)
    {
        $model = $this->findModel($ID_EXTERNO);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_EXTERNO' => $model->ID_EXTERNO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }*/

    /**
     * Deletes an existing Cliente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_EXTERNO Id Externo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionDelete($ID_EXTERNO)
    {
        $this->findModel($ID_EXTERNO)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the Cliente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_EXTERNO Id Externo
     * @return Cliente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_EXTERNO)
    {
        if (($model = Cliente::findOne(['ID_EXTERNO' => $ID_EXTERNO])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
