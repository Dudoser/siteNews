<<<<<<< HEAD
<?php

namespace app\controllers;
use app\models\Category;
use app\models\Articles;
use yii\web\Controller;
use Yii;


class CategoryController extends Controller
{

    public function actionIndex() {
        $this->layout = 'page';

        // $article = Articles::findOne($id);
        // $this->setMeta('Статья | ' . $article->title, $article->keywords, $article->description);

        

        return $this->render('category');
    }

}

?>
=======
<?php

namespace app\controllers;
use app\models\Category;
use app\models\Articles;
use yii\web\Controller;
use Yii;


class CategoryController extends Controller
{

    public function actionIndex() {
        $this->layout = 'page';

        // $article = Articles::findOne($id);
        // $this->setMeta('Статья | ' . $article->title, $article->keywords, $article->description);

        return $this->render('category');
    }

}

?>
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
