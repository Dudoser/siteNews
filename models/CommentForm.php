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

?>