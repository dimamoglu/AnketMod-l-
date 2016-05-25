<?php

namespace frontend\modules\admin\controllers;

use yii\web\Controller;
use frontend\models\User;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return [Yii::$app->response->redirect('http://localhost/advanced/frontend/web/index.php?r=admin/default/liste', 301)->send()];
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
	public function actionListe()
	{
		$provider=new \yii\data\ActiveDataProvider([
		'query'=>User::find(),
		'pagination'=>[
		'pageSize'=>10,
		],
		]);
		return $this->render('liste',['provider'=>$provider]);
	}
}
