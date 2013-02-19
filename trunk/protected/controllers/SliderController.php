<?php

class SliderController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'agregarImagenSlider', 'agregarImagenSliderBd', 'eliminarImagenSliderBd'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Slider;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Slider'])) {
            $model->attributes = $_POST['Slider'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->slider_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Slider'])) {
            $model->attributes = $_POST['Slider'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->slider_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Slider');
        $this->redirect(array('agregarImagenSlider'), array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Slider('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Slider']))
            $model->attributes = $_GET['Slider'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionAgregarImagenSlider() {
        $model = new ImagenSlider;
        $sliders = Slider::model()->findAll();

        $this->render(
            'agregarImagenSlider', array(
            'model' => $model,
            'sliders' => $sliders
        ));
    }
    
    public function actionAgregarImagenSliderBd() {
        $slider = new Slider;
        $ruta = new Configuracion;

        if (isset($_POST['ImagenSlider'])) {
            //echo "<pre>"; print_r($_FILES); exit();
            if ($slider->save()) {
                $imagen_nombre = 'S-' . str_pad($slider->slider_id, 6, "0", STR_PAD_LEFT) . '-' . str_replace(' ', '_', $_FILES["ImagenSlider"]["name"]['archivo']);
                $slider->slider_titulo = $_POST['ImagenSlider']['titulo'];
                $slider->slider_nombre_imagen = $imagen_nombre;

                if ($slider->save()) {
                    if (move_uploaded_file($_FILES["ImagenSlider"]["tmp_name"]['archivo'], $ruta->findByPk(2)->configuracion_valor . '\\' . $imagen_nombre)) {
                        $this->redirect(array('agregarImagenSlider'));
                    }
                }
            }
        }
    }
    
    public function actionEliminarImagenSliderBd($id) {
        $slider = Slider::model()->findByPk($id);
        
        @unlink(Configuracion::model()->findByPk(2)->configuracion_valor . '\\' . $slider->slider_nombre_imagen);
        $slider->delete();
        
        $this->redirect(array('agregarImagenSlider'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Slider::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'slider-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
