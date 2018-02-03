<<<<<<< HEAD
<?php
	
	namespace app\models;

	use yii\base\Model;

	class CommentForm extends Model {

		public $comment;

		public function rules() {
			return [
				[['parent_id', 'user_id', 'article_id', 'like', ], 'integer'],
				['date', 'date'],
				['comment_text', 'required'],
				[['comment_text'], 'string', 'length' => [3,500]],
			];
		}
	}

=======
<?php
	
	namespace app\models;

	use yii\base\Model;

	class CommentForm extends Model {

		public $comment;

		public function rules() {
			return [
				[['parent_id', 'user_id', 'article_id', 'like', ], 'integer'],
				['date', 'date'],
				['comment_text', 'required'],
				[['comment_text'], 'string', 'length' => [3,500]],
			];
		}
	}

>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
?>