<?php

	namespace app\controllers;
	use app\models\Category;
	use app\models\Article;
	use yii\web\Controller;
	use yii;

	class AuthorController extends Controller {

		public function actionIndex() {

			$this->layout = 'page';

			return $this->render('author');
		}
	}
?>