<<<<<<< HEAD
<?php
	
	namespace app\models;

	use yii\db\Activerecord;

	class Comment extends Activerecord {

		public static function tableName() {
			return 'comment';
		}

		public function rules() {
			return [
				[['parent_id', 'user_id', 'article_id', 'like'], 'integer'],
				['date', 'date'],
				[['comment_text', 'user_id', 'article_id'], 'required'],
			];
		}
		public function attributeLabels() {
			'id' => 'ID',
			'parent_id' => 'parent ID',
			'user_id' => 'user ID',
			'article_id' => 'article ID',
			'comment_text' => 'Текст комментария',
			'like' => 'like',
			'date' => 'дата',
		}
	}
=======
<?php
	
	namespace app\models;

	use yii\db\Activerecord;

	class Comment extends Activerecord {

		public static function tableName() {
			return 'comment';
		}

		public function rules() {
			return [
				[['parent_id', 'user_id', 'article_id', 'like'], 'integer'],
				['date', 'date'],
				[['comment_text', 'user_id', 'article_id'], 'required'],
			];
		}
		public function attributeLabels() {
			'id' => 'ID',
			'parent_id' => 'parent ID',
			'user_id' => 'user ID',
			'article_id' => 'article ID',
			'comment_text' => 'Текст комментария',
			'like' => 'like',
			'date' => 'дата',
		}
	}
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
?>