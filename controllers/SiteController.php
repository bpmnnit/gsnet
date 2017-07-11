<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'pages' => [
                'class' => 'yii\web\ViewAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionProcessing()
    {
        return $this->render('processing');
    }
    public function actionAcqchennai()
    {
        return $this->render('acqchennai');
    }
    public function actionAcqdehradun()
    {
        return $this->render('acqdehradun');
    }
    public function actionAcqjorhat()
    {
        return $this->render('acqjorhat');
    }
    public function actionAcqkolkata()
    {
        return $this->render('acqkolkata');
    }
    public function actionAcqmumbai()
    {
        return $this->render('acqmumbai');
    }
    public function actionAcqvadodara()
    {
        return $this->render('acqvadodara');
    }

    public function actionHse()
    {
        return $this->render('hse');
    }
    public function actionGallery()
    {
        return $this->render('gallery');
    }
    public function actionAchievement()
    {
        return $this->render('achievement');
    }

    public function actionProchennai()
    {
        return $this->render('prochennai');
    }
    public function actionProjorhat()
    {
        return $this->render('projorhat');
    }
    public function actionProkolkata()
    {
        return $this->render('prokolkata');
    }
    public function actionPromumbai()
    {
        return $this->render('promumbai');
    }
    public function actionProvadodara()
    {
        return $this->render('provadodara');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHelloWorld() {
        $nameToDisplay = Yii::$app->request->get('nameToDisplay');
        return $this->render('helloWorld', ['nameToDisplay' => $nameToDisplay]);
    }
}
