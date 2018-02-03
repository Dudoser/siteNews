<?php
	
	namespace app\models;

	use yii\base\Model;

	class ArticleForm extends Model {

		public $id;
		public $user_id;
		public $category_id;
		public $title;
		public $full_text;
		public $teg;
		public $hits;
		public $image;
		public $date;

		public function rules() {
			return [
				[['title', 'full_text', 'id', 'user_id', 'category_id'], 'required'],
				[['hits', 'id', 'user_id', 'category_id'], 'integer'],
				[['teg', 'title', 'full_text', 'image'], 'string', 'max' => 255],
				['date', 'date'],
			];
		}

		public function attributeLabels() {
			return [
				'id' => 'ID',
				'user_id' => 'user ID',
				'category_id' => 'category ID',
				'title' => 'Заголовок новости',
				'full_text' => 'Текст новости',
				'teg' => 'тег',
				'hits' => 'hits',
				'image' => 'Картинка',
				'date' => 'Дата',
			];
		}
	}
?>