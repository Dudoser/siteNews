<<<<<<< HEAD
<?php
	
	namespace app\models;

	use yii\db\Activerecord;

	class Category extends Activerecord {

		public static function tableName() {
			return 'category';
		}

		public function getArticle() {
			return $this->hasmany(Article::classname(), ['category_id' => 'id']);
		}
	}

=======
<?php
	
	namespace app\models;

	use yii\db\Activerecord;

	class Category extends Activerecord {

		public static function tableName() {
			return 'category';
		}

		public function getArticle() {
			return $this->hasmany(Article::classname(), ['category_id' => 'id']);
		}
	}

>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
?>