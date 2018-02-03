<?php
	
	namespace app\components;

	use Yii;
	use yii\base\Widget; 
	use app\models\Category;
	use app\models\Article;
	use app\models\User;

	class RightColWidget extends Widget {

		function run () {

			$categories = Yii::$app->db->createCommand('SELECT DISTINCT category.id, category.name, category.description, (SELECT COUNT(category_id) FROM article WHERE category.id = category_id) count FROM category LEFT JOIN article ON category.id = article.category_id')->queryAll();

			$admin = Yii::$app->db->createCommand('SELECT * FROM `user` WHERE user.id = 1')->queryAll();

			$mostView = Yii::$app->db->createCommand('SELECT a.id, a.title, a.date, a.image, category.name, user.f_name,user.l_name FROM article a LEFT JOIN category ON a.category_id = category.id LEFT JOIN user ON a.user_id = user.id WHERE a.category_id IN(7,9,11) ORDER BY a.hits DESC LIMIT 4')->queryAll();

			// $mostViewCat = Yii::$app->db->createCommand()->queryAll();



			return $this->render('rightCol', compact('categories', 'admin', 'mostView'));
		}
	}

?>