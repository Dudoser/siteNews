
<?php

  use yii\helpers\Html;
  use yii\helpers\Url;
  use app\models\Category;
?>

<div class="col-md-3 hidden-xs hidden-md visible-lg b-sidebar">
  <div class="b-block">
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="b-item-icons-sidebar">
          <ul>
            <li><a class="face" href="<?= Yii::$app->params['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter-2" href="<?= Yii::$app->params['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a class="google" href="<?= Yii::$app->params['google'] ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="inst" href="<?= Yii::$app->params['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
            <!-- <li><a class="tumbl" href="homepage4.html#"><i class="fa fa-tumblr"></i></a></li> -->
            <li><a class="rss" href="<?= Yii::$app->params['rss'] ?>"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="b-block">
    <a href="https://themeforest.net/user/alfa-themes"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/bansidebar.jpg"></a>
  </div>
  <div class="b-block">
    <div class="b-title b-title-relative">Popular video
      <div class="selector">
        <form id="form-select" name="form-select" method="GET" action="homepage4.html"><a class="slct" id="scheme" href="javascript:void(0);">Week</a><i class="fa fa-sort-desc" aria-hidden="true"></i>
          <ul class="drop dropdown">
            <li> New</li>
            <li> Week</li>
            <li> Month</li>
            <li> Year</li>
          </ul> 
          <input type="hidden"/>
        </form>
      </div>
    </div>
    <div class="b-video">
      <div class="b-item ">
        <div class="b-item-details">
          <div class="b-term"><a href="homepage4.html#">Sport</a>
          </div>
          <div class="b-item-title"><a href="homepage4.html#"><span>People are complaining about the LG G5, and that's not good for modular phones</span></a>
          </div>
          <div class="b-item-stars"><span class="stars"></span></div>
        </div>
        <div class="b-item-img"><a class="video" href="homepage4.html#"><img width="322" height="200" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/sidebar/video.jpg" alt=""></a></div>
      </div>
    </div>
  </div>
  <div class="b-block">
    <div class="b-title">Категории</div>
    <div class="b-categories">
      <?php
        for ($i=0; $i < count($categories); $i++) { 
            echo "
                <div class=\"b-item \">
                  <div class=\"b-item-details\">
                    <div class=\"b-item-title\">
                      <a href=\"homepage4.html#\">" . $categories[$i]['name'] . "</a>
                    </div>
                    <div class=\"b-item-count\">" . $categories[$i]['count'] . "</div>
                  </div>
                </div>
            ";
      }
      ?>
  </div>
  <!-- widget start -->
  <div class="b-block">
    <div class="b-about-me">
      <?= Html::img("web/img/users/{$admin[0]['image']}", ['class' => 'b-about-me-img']) ?>
      <!-- <img class="b-about-me-img" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/sidebar/author.jpg" alt=""/> -->
      <div class="b-title">Обо мне</div>
      <div class="b-about-me-text"><?= Yii::$app->params['about'] ?></div>
      <div class="b-article-social-icons">
          <ul>
            <li class="google-plus"><a href="<?= Yii::$app->params['google'] ?>"><i class="fa fa-google-plus"></i></a></li>
            <li class="twitter"><a href="<?= Yii::$app->params['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook"><a href="<?= Yii::$app->params['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
            <li class="linkedin"><a href="<?= Yii::$app->params['linkedin'] ?>"><i class="fa fa-linkedin"></i></a></li>
          </ul>
      </div>
    </div>
</div>
  <!-- widget end -->
  <div class="b-block">
    <div class="b-title">Интересные
      <div class="b-title-tabs hidden-xs hidden-md visible-lg">
        <ul class="menu">
          
          <!-- <?php
            for ($i=0; $i < 3; $i++) { 
              echo "<li class=\"b-title-tab\"> <a href=\"homepage4.html#\">" . $mostView[$i]['name'] . "</a></li>";
            }
          ?> -->

          <li class="b-title-tab"> <a href="homepage4.html#">IT</a></li>
          <li class="b-title-tab"> <a href="homepage4.html#">Политика</a></li>
          <li class="b-title-tab"><a href="homepage4.html#">Бизнес</a></li>
        </ul>
      </div>
    </div>
    <div class="b-thumbnail-1">
    <?php for ($i=0; $i < 4; $i++) : ?>
      <div class="row">
        <div class="col-sm-12">
          <div class="b-item b-item-b">
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="b-item-img"><a href="homepage4.html#">
                <?= Html::img("web/img/articles/{$mostView[$i]['image']}") ?></a></div>
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span><?= $mostView[$i]['title'] ?></span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $mostView[$i]['f_name'] . " " . $mostView[$i]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $mostView[$i]['date'] ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endfor;?>
<!--       <div class="row">
  <div class="col-sm-12">
    <div class="b-item b-item-b">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
          <div class="b-item-img"><a href="homepage4.html#"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/sidebar/most/2.jpg" alt=""></a></div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
          <div class="b-item-details">
            <div class="b-item-title"><a href="homepage4.html#"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit?1890</span></a>
            </div>
            <div class="b-item-stars"><span class="stars"></span></div>
            <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">William Thompson</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">22-Mar-2016</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="b-item b-item-b">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
          <div class="b-item-img"><a href="homepage4.html#"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/sidebar/most/3.jpg" alt=""></a></div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
          <div class="b-item-details">
            <div class="b-item-title"><a href="homepage4.html#"><span>Simone Biles will be the U.S. flag bearer at the Olympics closing ceremonyHomeAway is renting out the Eiffel Tower for the first time ever</span></a>
            </div>
            <div class="b-item-stars"><span class="stars"></span></div>
            <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">Constance Caldwell</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">21-Sep-2016</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="b-item b-item-b">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
          <div class="b-item-img"><a href="homepage4.html#"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/sidebar/most/4.jpg" alt=""></a></div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
          <div class="b-item-details">
            <div class="b-item-title"><a href="homepage4.html#"><span>Feds say courts' bail-or-jail policies are unfair to the poor</span></a>
            </div>
            <div class="b-item-stars"><span class="stars"></span></div>
            <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">Margaret Dillon</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">2-Aug-2016</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
    </div>
  </div>
  </div>