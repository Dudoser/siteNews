<?php
	
	namespace app\models;

	use Yii;

	class Article extends \yii\db\ActiveRecord {

		public static function tableName() {
			return 'article';
		}

		public function rules() {
			return [
				[['user_id', 'category_id', 'title', 'full_text'], 'required'],
				[['user_id', 'category_id', 'hits'], 'integer'],
				['image', 'default', 'value' => 'no-img.jpg'],
				['date', 'date'],
				[['title', 'full_text', 'image', 'teg'], 'string', 'max' => 255],
			];
		}

		public function attributeLabels() {
			return [
				'id' => 'ID',
				'user_id' => 'User ID',
				'category_id' => 'Категория',
				'title' => 'Заголовок',
				'full_text' => 'Текст статьи',
				'teg' => 'Теги',
				'hits' => 'Hits',
				'image' => 'Картинка',
				'date' => 'Дата',
			];
		}

		public function getComment() {
			return $this->hasmany(Comment::classname(), ['article_id' => 'id']);
		}
	}

?>