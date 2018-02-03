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

?>