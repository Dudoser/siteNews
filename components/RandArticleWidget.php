<?php
	namespace app\components;

	use Yii;
	use yii\base\Widget;
	use app\models\Article;
	use app\models\Category;
	use app\models\User;

	class RandArticleWidget extends Widget {

		function run() {

			// $query = "SELECT * FROM `article` WHERE date > CURRENT_DATE - INTERVAL 7 DAY";

			// $articles = Yii::$app->db->createCommand('SELECT article.id, article.image, article.title, article.date, user.f_name, user.l_name, category.name FROM article LEFT JOIN category ON article.category_id = category.id LEFT JOIN user ON article.user_id = user.id WHERE article.date BETWEEN '2018-01-14' AND '2018-01-28' ORDER BY article.date DESC LIMIT 7')->queryAll();

			
			$articles = Yii::$app->db->createCommand('SELECT article.id, article.image, article.title, article.date, user.f_name, user.l_name, category.name FROM article LEFT JOIN category ON article.category_id = category.id LEFT JOIN user ON article.user_id = user.id ORDER BY article.id DESC LIMIT 7')->queryAll();

			// $article = Article::find()->where('date > CURRENT_DATE - INTERVAL 7 DAY')->orderBy('id')->limit(7)->all();

			// $artic = getRandArticle(7);


		/*$article = new Article();

		$query = Article::find()->joinWith(['author','category']);
		// $query->andWhere(['user.f_name'=>'Вася']);

		$category = $article;
		// $user = $model->author;*/

			return $this->render('randArticle', compact('articles'));
		}
	}
?>