<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use app\models\Category;
use app\components\CategoryWidget;
use app\components\RandArticleWidget;
use app\components\BlockAdminWidget;
use app\components\RightColWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<section class="header">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-menu">
                <div class="menu-top">
                  <ul>
                    <li><a href="homepage4.html#">Forum</a></li>
                    <li><a href="homepage4.html#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="b-item-social-icons-header hidden-xs hidden-sm">
                <ul>
                  <li><a href="homepage4.html#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="homepage4.html#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="homepage4.html#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="homepage4.html#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="homepage4.html#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="homepage4.html#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner inner-mg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 hidden-xs hidden-sm">
              <div class="logo text-center"><a href="<?= Url::home() ?>"><?= Html::img("/web/img/logo2.png", ['alt' => 'logo'])?></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-menu">
                <div class="logo-menu hidden-lg"><a href="homepage4.html#"><?= Html::img("/web/img/logo2.png")?></a></div>
                <div class="header-navigation">
                  <div class="menu-navigation">
                    <div class="toggleMenu" id="nav-icon3"><span></span><span></span><span></span><span></span></div>
                    <ul class="nav" id="menu">
                      <li class="mg-left"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>home<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu-1">
                          <li><a href="index.html">Home page 1</a></li>
                          <li><a href="homepage2.html">Home page 2</a></li>
                          <li><a href="homepage3.html">Home page 3</a></li>
                          <li><a href="homepage4.html">Home page 4</a></li>
                          <li><a href="homepage5.html">Home page 5</a></li>
                          <li><a href="homepage6.html">Home page 6</a></li>
                        </ul>
                      </li>
                      <li><a href="homepage4.html#"><i class="fa fa-list"></i>Categories<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="sub-menu-1">
                          <li><a href="category.html">Category 1</a></li>
                          <li>   <a href="category2.html">Category 2</a></li>
                          <li><a href="category3.html">Category 3</a></li>
                          <li><a href="category4.html">Category 4</a></li>
                          <li><a href="category5.html">Category 5</a></li>
                          <li><a href="category6.html">Category 6</a></li>
                          <li><a href="category7.html">Category 7</a></li>
                          <li><a href="category8.html">Category 8</a></li>
                        </ul>
                      </li>
                      <li><a href="homepage4.html#"><i class="fa fa-file-code-o"></i>pages<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu-1">
                          <li><a href="404.html">
                               404<i class="fa fa-caret-right hidden-xs hidden-md visible-lg" aria-hidden="true"></i><i class="fa fa-caret-down hidden-lg" aria-hidden="true"></i></a>
                            <ul class="sub-menu-2">
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                            </ul>
                          </li>
                          <li><a href="contacts.html">Contact us</a></li>
                          <li><a href="shortcodes.html">Shortcodes</a></li>
                          <li><a href="typography.html">Typography</a></li>
                          <li><a href="author.html">Author page</a></li>
                          <li><a href="search-result.html">Search result</a></li>
                          <li><a href="homepage4.html#">Headers<i class="fa fa-caret-right hidden-xs hidden-md visible-lg" aria-hidden="true"></i><i class="fa fa-caret-down hidden-lg" aria-hidden="true"></i></a>
                            <ul class="sub-menu-2">
                              <li><a href="index.html">Header 1</a></li>
                              <li><a href="homepage2.html">Header 2</a></li>
                              <li><a href="homepage3.html">Header 3</a></li>
                              <li><a href="homepage4.html">Header 4</a></li>
                              <li><a href="homepage5.html">Header 5</a></li>
                              <li><a href="homepage6.html">Header 6</a></li>
                            </ul>
                          </li>
                          <li><a href="homepage4.html#">Child menu<i class="fa fa-caret-right hidden-xs hidden-md visible-lg" aria-hidden="true"></i><i class="fa fa-caret-down hidden-lg" aria-hidden="true"></i></a>
                            <ul class="sub-menu-2">
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                              <li><a href="homepage4.html#">Sub-child menu</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="position"><a class="drop" href="homepage4.html#"><i class="fa fa-paper-plane" aria-hidden="true"></i>mega menu<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="sub-menu-1 hidden-lg">
                          <li><a href="homepage4.html#">Entertaiment</a></li>
                          <li><a href="homepage4.html#">World</a></li>
                          <li><a href="homepage4.html#">Sport</a></li>
                          <li><a href="homepage4.html#">Movie</a></li>
                          <li><a href="homepage4.html#">Lifestyle</a></li>
                          <li><a href="homepage4.html#">Travel</a></li>
                          <li><a href="homepage4.html#">Beauty</a></li>
                          <li><a href="homepage4.html#">Food</a></li>
                        </ul>
                        <div class="dropdown-columns mega-menu-1">
                          <div class="menu-row">
                            <div class="menu-col">
                              <ul class="mega-menu">
                                <li><a href="homepage4.html#">Entertaiment</a></li>
                                <li><a href="homepage4.html#">World</a></li>
                                <li><a href="homepage4.html#">Sport</a></li>
                                <li><a href="homepage4.html#">Movie</a></li>
                                <li><a href="homepage4.html#">Lifestyle</a></li>
                                <li><a href="homepage4.html#">Travel</a></li>
                                <li><a href="homepage4.html#">Beauty</a></li>
                                <li><a href="homepage4.html#">Food</a></li>
                              </ul>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("/web/img/mega/1.jpg")?></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">The Valle d'Aosta and Its Castles</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("/web/img/mega/2.jpg")?></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a id="text-2" href="homepage4.html#">Explore Hobbiton Movie Set & Beyond The Scenes</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("/web/img/mega/3.jpg")?></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">Machu Picchu Visitor Guide For Best Experience Ever</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("/web/img/mega/4.jpg")?></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">Remains of Huge, Ancient Coral Reef Discovered</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- <li class="position"><a class="drop" href="homepage4.html#"><i class="fa fa-paper-plane" aria-hidden="true"></i>mega menu 2<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="sub-menu-1 hidden-lg">
                          <li><a href="homepage4.html#">Suicide Squad star Jared Leto Joins Blade Runner Sequel</a></li>
                          <li><a href="homepage4.html#">Two astronauts will take a walk in space Friday: Watch it live</a></li>
                          <li><a href="homepage4.html#">Simone Biles will be the U.S. flag bearer at the Olympics closing ceremonyHomeAway is renting out the Eiffel Tower for the first time ever</a></li>
                          <li><a href="homepage4.html#">Kanye gets deep with poem about McDonald's for Frank Ocean</a></li>
                          <li><a href="homepage4.html#">Twitter celebrates Obama hitting 10 million users with video highlights</a></li>
                        </ul>
                        <div class="dropdown-columns mega-menu-2">
                          <div class="menu-row">
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><img src="img/mega/1.jpg" alt=""></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">he Valle d'Aosta and Its Castles</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><img src="img/mega/2.jpg" alt=""></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a id="text-2" href="homepage4.html#">Explore Hobbiton Movie Set & Beyond The Scenes</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><img src="img/mega/3.jpg" alt=""></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">Machu Picchu Visitor Guide For Best Experience Ever</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><img src="img/mega/4.jpg" alt=""></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">Remains of Huge, Ancient Coral Reef Discovered</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="menu-col">
                              <div class="b-item">
                                <div class="b-item-img"><a href="homepage4.html#"><img src="img/mega/5.jpg" alt=""></a></div>
                                <div class="b-item-details">
                                  <div class="b-item-title"><a href="homepage4.html#">History of Day of the Dead & the Mexican Sugar Skull Tradition</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li> -->
                      <li><a href="homepage4.html#"><i class="fa fa-newspaper-o"></i>Post pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="sub-menu-1">
                          <li><a href="article1.html">Post page 1</a></li>
                          <li><a href="article2.html">Post page 2</a></li>
                          <li><a href="article3.html">Post page 3</a></li>
                          <li><a href="article4.html">Post page 4</a></li>
                          <li><a href="article5.html">Post page 5</a></li>
                          <li><a href="article6.html">Post page 6</a></li>
                          <li><a href="article7.html">Post page 7</a></li>
                          <li><a href="article8.html">Post page 8</a></li>
                          <li><a href="article9.html">Post page 9</a></li>
                          <li><a href="article10.html">Post page 10</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="b-item-search">
                    <div class="b-item-search-open"><i class="icons-search"></i></div>
                    <form class="b-item-search-form js-searchContent" action="homepage4.html" method="post">
                      <div class="mobile-menu">
                        <div class="input-group">
                          <input class="input-search" type="text" placeholder="Search"> <span class="input-group-button">
                            <button class="button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><span id="totop"> <i class="fa fa-arrow-up"></i></span>
    <section class="content">
      <div class="container">
        <?php if(Url::to() == "/"): ?>
          <?= RandArticleWidget::widget(); ?>
            
        <?php endif; ?>
    
        <?= $content ?>

          <?php if(Yii::$app->response->statusCode != 404): ?>
            <?= RightColWidget::widget(); ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="b-footer">
      <div class="b-footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="b-block">
                <div class="b-title b-footer-title">Alfa magazine</div>
                <div class="b-footer-about">If you have a story you think we might be interested to know about please email our news team at <a class="link" href="homepage4.html#">newsdesk@alfamagazine.com</a> or phone <a class="link" href="homepage4.html#">020 7005 2000</a> and ask to be put through to the Alfa Magazine.</div>
              </div>
              <div class="b-block b-block-so"><a class="link soc-item" href="https://www.google.ru/?gws_rd=ssl"><i class="fa fa-facebook"></i></a><a class="link soc-item" href="homepage4.html#"><i class="fa fa-twitter"></i></a><a class="link soc-item" href="homepage4.html#"><i class="fa fa-google"></i></a><a class="link soc-item" href="homepage4.html#"><i class="fa fa-youtube"></i></a><a class="link soc-item" href="homepage4.html#"><i class="fa fa-instagram"></i></a><a class="link soc-item" href="homepage4.html#"><i class="fa fa-rss"></i></a></div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="b-block b-block-tags">
                <div class="b-title b-footer-title">Tags</div>
                <ul class="menu b-tags-list">
                  <li class="b-tags-item"><a href="homepage4.html#">Beauty</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Culture</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Fashion</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Sport</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Formula 1</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">NBA</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Elections</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Australia</a></li>
                  <li class="b-tags-item"><a href="homepage4.html#">Business</a></li>
                </ul>
              </div>
              <div class="b-block b-block-subscribe">
                <div class="b-title b-footer-title">Subscribe</div>
                <form class="b-subscribe-form">
                  <input class="b-subscribe-input" placeholder="E-mail address" type="text"> 
                  <button class="b-btn b-subscribe-button" type="submit">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-5">
              <div class="b-block b-block-photo">
                <div class="b-title b-footer-title">Instagram feed</div>
                <ul class="menu b-photo-list">
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/1.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/2.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/3.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/4.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/5.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/6.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/7.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/8.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/9.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                  <li class="b-photo">
                    <div class="b-photo-item"><img width="110" height="100" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/insta/10.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
                  </li>
                </ul>
                <div class="b-btn-block"><a class="b-btn" href="homepage4.html">View all</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="b-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-5">
              <ul class="menu b-footer-bottom-left">
                <li><a href="homepage4.html#">Advertisment</a></li>
                <li><a href="homepage4.html#">Privacy Police</a></li>
                <li><a href="homepage4.html#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-xs-7">
              <div class="b-copyright">Copyright &copy; 2016 Alfa Magazine.</div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
