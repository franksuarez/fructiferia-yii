<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->layout = 'sitio';

        $categorias = Categoria::model()->findAll();

        $this->render('index', array('categorias' => $categorias));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionCrearCuentaCliente() {
        $this->layout = 'sitio';
        $cliente = new Cliente;

        if (isset($_POST['Cliente'])) {
            $cliente->attributes = $_POST['Cliente'];
            if ($cliente->save()) {
                $_SESSION['Cliente']['cliente_id'] = $cliente->cliente_id;
                $_SESSION['Cliente']['cliente_nombre'] = $cliente->cliente_nombre;
                $_SESSION['Cliente']['cliente_ape_paterno'] = $cliente->cliente_ape_paterno;
                $_SESSION['Cliente']['cliente_ape_materno'] = $cliente->cliente_ape_materno;
                $_SESSION['Cliente']['cliente_email'] = $cliente->cliente_email;
                $_SESSION['Cliente']['cliente_telefono'] = $cliente->cliente_telefono;
                $_SESSION['Cliente']['cliente_telefono_movil'] = $cliente->cliente_telefono_movil;

                $this->redirect('panelControlCliente');
            }
        }

        $this->render('crearCuentaCliente', array('cliente' => $cliente));
    }

    public function actionPanelControlCliente() {
        $this->layout = 'sitio';

        $menuPanel = MenuPanelControlCliente::model()->findAll();

        $this->render('panelControlCliente'
                , array('menuPanel' => $menuPanel)
        );
    }

    public function actionListarProductosPorCategoria($id) {
        $this->layout = 'sitio';

        $categorias = Categoria::model()->findAll();
        $nombreCategoria = Categoria::model()->findByPk($id)->categoria_nombre;
        $productos = Producto::model()->with('categoria', 'unidadVenta', 'imagen')->findAll(array('order' => 'producto_nombre', 'condition' => 'categoria.categoria_id = ' . $id));

        $this->render('listarProductosPorCategoria', array(
            'productos' => $productos,
            'categorias' => $categorias,
            'nombreCategoria' => $nombreCategoria
        ));
    }

    public function actionIniciarSesion() {
        $this->layout = 'sitio';

        if (isset($_POST['Cliente'])) {
            $cliente = Cliente::model()->find("cliente_email = '" . $_POST['Cliente']['cliente_email'] . "' and cliente_password = '" . $_POST['Cliente']['cliente_password'] . "'");

            if (isset($cliente)) {
                $_SESSION['Cliente']['cliente_id'] = $cliente->cliente_id;
                $_SESSION['Cliente']['cliente_nombre'] = $cliente->cliente_nombre;
                $_SESSION['Cliente']['cliente_ape_paterno'] = $cliente->cliente_ape_paterno;
                $_SESSION['Cliente']['cliente_ape_materno'] = $cliente->cliente_ape_materno;
                $_SESSION['Cliente']['cliente_email'] = $cliente->cliente_email;
                $_SESSION['Cliente']['cliente_telefono'] = $cliente->cliente_telefono;
                $_SESSION['Cliente']['cliente_telefono_movil'] = $cliente->cliente_telefono_movil;

                $this->redirect('panelControlCliente');
            } else {
                $this->render('iniciarSesion');
            }
        } else {
            $this->render('iniciarSesion');
        }
    }

    public function actionCerrarSesion() {
        unset($_SESSION['Cliente']);

        $this->redirect(array('site/index'));
    }

    public function actionModificarDatosCliente() {
        $this->layout = 'sitio';

        $menuPanel = MenuPanelControlCliente::model()->findAll();
        $cliente = Cliente::model()->findByPk($_SESSION['Cliente']['cliente_id']);

        if (isset($_POST['Cliente'])) {
            $cliente->attributes = $_POST['Cliente'];

            $cliente->save();
        }

        $this->render('modificarDatosCliente', array('cliente' => $cliente, 'menuPanel' => $menuPanel));
    }

    public function actionMisDireccionesDeEnvio() {
        $this->layout = 'sitio';

        $menuPanel = MenuPanelControlCliente::model()->findAll();
        $cliente = Cliente::model()->findByPk($_SESSION['Cliente']['cliente_id']);
        $direcciones = Direccion::model()->with('comuna')->findALl('cliente_id = ' . $_SESSION['Cliente']['cliente_id']);

        $this->render(
                'direccionesDeEnvio',
                array(
                    'cliente' => $cliente,
                    'menuPanel' => $menuPanel,
                    'direcciones' => $direcciones));
    }
    
    public function actionHistorialDeMisPedidos() {
        $this->layout = 'sitio';
        
        $menuPanel = MenuPanelControlCliente::model()->findAll();
        
        $this->render(
                'historialDeMisPedidos',
                array(
                    'menuPanel' => $menuPanel
                ));
    }

    public function actionAgregarDireccionCliente() {
        $this->layout = 'ajax';

        $comunas = Comuna::model()->findAll();
        $direccion = new Direccion;
        
        if (isset($_POST['Direccion'])) {
            $direccion = new Direccion;
            $direccion->attributes = $_POST['Direccion'];
            $direccion->cliente_id = $_SESSION['Cliente']['cliente_id'];

            if ($direccion->save()) {
                $this->redirect(array('site/misDireccionesDeEnvio'));
            }
        }

        $this->render(
            'agregarDireccionCliente', array(
            'comunas' => $comunas,
            'direccion' => $direccion
        ));
    }

}