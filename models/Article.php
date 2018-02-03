<?php
	
	namespace app\models;

	use Yii;
	use app\models\Category;
	use app\models\User;

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
			return $this->hasMany(Comment::classname(), ['article_id' => 'id']);
		}

		public function getAuthor() {
			return $this->hasOne(User::classname(), ['id' => 'user_id']);
		}

		public function getCategory(){
			return $this->hasOne(Category::classname(),['id'=>'category_id']);
		}	
/*
		public function getRandArticle($arg) {
			$articles = Yii::$app->db->createCommand('SELECT article.id, article.image, article.title, article.date, user.f_name, user.l_name, category.name FROM article LEFT JOIN category ON article.category_id = category.id LEFT JOIN user ON article.user_id = user.id WHERE article.date > CURRENT_DATE - INTERVAL 7 DAY ORDER BY article.id DESC LIMIT $arg')->queryAll();
			return $articles;
		}*/
	}

?>