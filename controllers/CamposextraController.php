<?php

namespace app\controllers;

use app\models\Camposextra;
use app\models\CamposextraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CamposextraController implements the CRUD actions for Camposextra model.
 */
class CamposextraController extends Controller
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
     * Lists all Camposextra models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CamposextraSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Camposextra model.
     * @param int $ID ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_EXTERNO)
    {
        $model = new Camposextra();
    
        return $this->render('view', [
            'model' => $model,
            'ID' => $ID_EXTERNO,
        ]);
    }

    /**
     * Creates a new Camposextra model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */

    
        public function actionCreate($ID_EXTERNO)
        {
            $model = new Camposextra();
        
            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    if ($this->request->isAjax) {
                        return $this->renderPartial('_form2', [
                            'model' => $model,
                            'ID' => $ID_EXTERNO,
                        ]);
                    } else {
                        return $this->redirect(['/site/index']);
                    }
                }
            } else {
                $model->loadDefaultValues();
            }
        
            // Renderiza la vista 'create' normalmente para las solicitudes no AJAX
            return $this->render('create', [
                'model' => $model,
                'ID' => $ID_EXTERNO,
            ]);
        }

        public function actionCreate2($ID_EXTERNO)
        {
            $model = new Camposextra();
        
            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {  
                    if ($this->request->isAjax) {
                        
                        return $this->renderPartial('_form3', [
                            'model' => $model,
                            'ID' => $ID_EXTERNO,
                        ]);
                    } else {
                        return $this->redirect(['/site/index']);
                    }
                }
            } else {
                $model->loadDefaultValues();
            }
        
            
            return $this->render('create2', [
                'model' => $model,
                'ID' => $ID_EXTERNO,
            ]);
        }


    /**
     * Updates an existing Camposextra model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    
    /*public function actionUpdate($ID)
    {
        $model = $this->findModel($ID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }*/

    /**
     * Deletes an existing Camposextra model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionDelete($ID)
    {
        $this->findModel($ID)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the Camposextra model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID ID
     * @return Camposextra the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID)
    {
        if (($model = Camposextra::findOne(['ID' => $ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
