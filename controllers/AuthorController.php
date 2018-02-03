<<<<<<< HEAD
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
=======
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
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
?>