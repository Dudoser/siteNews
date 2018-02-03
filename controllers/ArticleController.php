<<<<<<< HEAD
<?php

namespace app\controllers;
use app\models\Category;
use app\models\Article;
use app\models\ArticleForm;
use yii\web\Controller;
use Yii;


class ArticleController extends Controller
{

    public function actionIndex() {
        $this->layout = 'page';

        // $article = Articles::findOne($id);
        // $this->setMeta('Статья | ' . $article->title, $article->keywords, $article->description);

        return $this->render('article');
    }

    public function actionCreate() {
    	$this->layout = 'page';

    	$model = new ArticleForm();

    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		

    		return $this->render('create', compact('model'));
    	}
    	else {

    		return $this->render('create', compact('model'));
    	}

    }

}

?>
=======
<?php

namespace app\controllers;
use app\models\Category;
use app\models\Article;
use app\models\ArticleForm;
use yii\web\Controller;
use Yii;


class ArticleController extends Controller
{

    public function actionIndex() {
        $this->layout = 'page';

        // $article = Articles::findOne($id);
        // $this->setMeta('Статья | ' . $article->title, $article->keywords, $article->description);

        return $this->render('article');
    }

    public function actionCreate() {
    	$this->layout = 'page';

    	$model = new ArticleForm();

    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		

    		return $this->render('create', compact('model'));
    	}
    	else {

    		return $this->render('create', compact('model'));
    	}

    }

}

?>
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
