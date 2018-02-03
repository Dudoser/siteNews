<?php

/* @var $this yii\web\View */

    use yii\helpers\Html;
    use yii\helpers\Url;

$this->title = 'Главная';
?>
<div class="row">
<div class="col-sm-12 col-md-9">
    <div class="b-block">
      <div class="b-title">Новости в мире
        <div class="b-title-tabs hidden-xs hidden-md visible-lg">
          <ul class="menu">
            <li class="b-title-tab"> <a href="homepage4.html#">Все</a></li>
  <li class="b-title-tab"><a href="homepage4.html#">Бизнес</a></li>
  <li class="b-title-tab"> <a href="homepage4.html#">Политика</a></li>
            <li class="b-title-tab"> <a href="homepage4.html#">Страны</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-7">
          <div class="b-standard-1">
            <div class="b-item ">
              <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("web/img/articles/{$worldnews[0]['image']}", ['alt' => $worldnews[0]['title'], 'width' => '480', 'height' => '280']) ?></a>
              </div>
              <div class="b-item-details">
                <div class="b-term"><a href="homepage4.html#"><?= $worldnews[0]['name'] ?></a>
                </div>
                <div class="b-item-title"><a href="homepage4.html#"><span><?= $worldnews[0]['title'] ?></span></a>
                </div>
                <div class="b-item-stars"><span class="stars"></span></div>
                <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $worldnews[0]['f_name'] . " " . $worldnews[0]['l_name']?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $worldnews[0]['date'] ?></span>
                </div>
                <div class="b-item-description"><?= $intro_text?> ...</div>
                <div class="b-item-footer"><a class="b-item-read-more b-btn" href="homepage4.html#">Читать далее</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-5">
          <div class="b-thumbnail-1">
            <?php for($i = 1; $i < count($worldnews); $i++) :?>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="b-item b-item-b">
                      <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="b-item-img"><a href="homepage4.html#">
                            <?= Html::img("web/img/articles/{$worldnews[$i]['image']}", ["alt" => $worldnews[$i]['title'], 'width' => '145', 'height' => '132'])?></a>
                          </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8">
                          <div class="b-item-details">
                            <div class="b-item-title"><a href="homepage4.html#"><span><?= $worldnews[$i]['title'] ?></span></a>
                            </div>
                                      <div class="b-item-stars"><span class="stars" style="width:100%"></span></div>
                            <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $worldnews[$i]['f_name'] . " " . $worldnews[$i]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $worldnews[$i]['date'] ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
      <div class="b-paginator">
        <div class="pagination">
          <li><a href="homepage4.html#">1</a></li>
          <li><a href="homepage4.html#">2</a></li>
          <li><a href="homepage4.html#">3</a></li>
          <li><a href="homepage4.html#">4</a></li>
          <li><a href="homepage4.html#">5</a></li>
        </div>
      </div>
    </div>
    <div class="b-block">
      <div class="b-title">Образ жизни</div>
      <div class="b-mix-1">
        <div class="row">
        <?php for($i = 0; $i < 6; $i += 3) :?>
          <div class="col-sm-12 col-md-6">
            <div class="b-col-1">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="b-item ">
                    <div class="b-item-img">
                        <a href="homepage4.html#">
                            <?= Html::img("web/img/articles/{$lifeStyle[$i]['image']}", ["alt" => $lifeStyle[$i]['title'], 'width' => '310', 'height' => '180'])?>
                            
                        </a>
                    </div>
                    <div class="b-item-details">
                      <div class="b-term"><a href="homepage4.html#"><?= $lifeStyle[$i]['name'] ?></a>
                      </div>
                      <div class="b-item-title"><a href="homepage4.html#"><span><?= $lifeStyle[$i]['title'] ?></span></a>
                      </div>
                      <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $lifeStyle[$i]['f_name'] . " " . $lifeStyle[$i]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $lifeStyle[$i]['date'] ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php for($j = $i + 1; $j < 6; $j++) : ?>
            <div class="b-list-2">
              <div class="row">
                <div class="col-md-12">
                  <div class="b-item ">
                    <div class="b-term"><a href="homepage4.html#"><?= $lifeStyle[$j]['name'] ?></a>
                    </div>
                    <div class="b-item-details">
                      <div class="b-item-title"><a href="homepage4.html#"><span><?= $lifeStyle[$j]['title'] ?></span></a>
                      </div>
                      <div class="b-item-stars"><span class="stars"></span></div>
                      <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $lifeStyle[$j]['f_name'] . " " . $lifeStyle[$j]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $lifeStyle[$j]['date'] ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
                if ($j == 2 || $j == 6) {
                    break;
                }
            ?>
            <?php endfor; ?>
          </div>
        <?php endfor; ?>      
        </div>
      </div>
    </div>
    <div class="b-block">
      <div class="b-title">Спорт</div>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="b-standard-1">
            <div class="b-item ">
              <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("web/img/articles/{$sport[4]['image']}", ["alt" => $sport[0]['title'], 'width' => '480', 'height' => '280']) ?></a>
              </div>
              <div class="b-item-details">
                <div class="b-term"><a href="homepage4.html#"><?= $sport[4]['name'] ?></a>
                </div>
                <div class="b-item-title"><a href="homepage4.html#"><span><?= $sport[4]['title'] ?></span></a>
                </div>
                <div class="b-item-stars"><span class="stars"></span></div>
                <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $sport[4]['f_name'] . " " . $sport[4]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $sport[0]['date'] ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="b-thumbnail-2">
            <?php $counter1 = 0; ?>
            <?php $res = 2; ?>
            <?php for ($i=1; $i < 3; $i++) :?>
            <div class="row">
                <?php $res += $counter1; ?>
                <?php for ($counter1; $counter1 < $res; $counter1++) :?>
                  <div class="col-sm-6">
                    <div class="b-item b-item-b">
                      <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("web/img/articles/{$sport[$counter1]['image']}", ["alt" => $sport[0]['title'], 'width' => '480', 'height' => '280']) ?></a>
                      </div>
                      <div class="b-item-details">
                        <div class="b-item-title"><a href="homepage4.html#"><span><?= $sport[$counter1]['title'] ?></span></a>
                        </div>
                        <div class="b-item-stars"><span class="stars"></span></div>
                        <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $sport[$counter1]['f_name'] . " " . $sport[$counter1]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $sport[$counter1]['date'] ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>
            </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="b-block hidden-xs hidden-md visible-lg">
      <div class="b-title">Popular photos</div>
      <div class="b-block-image">
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/1.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/2.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/3.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/4.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos hidden-xs"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/5.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
      </div>
      <div class="b-block-image">
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/6.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/7.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/8.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/9.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
        <div class="b-item-photos hidden-xs"><img src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/best-photos/10.jpg" alt=""> <a class="effect" href="homepage4.html#"><img class="item-photos-icon" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/plus.png" alt=""></a></div>
      </div>
      <div class="b-btn-block"><a class="b-btn" href="homepage4.html#">View all photos</a></div>
    </div> -->
    <div class="b-block">
      <div class="b-title">Последние новости</div>
      <div class="b-col-1">
        <?php $counter = 0; ?>
        <?php for($i=0; $i < 2; $i++): ?>
        <div class="row">
        <?php for($counter; $counter < 6; $counter++): ?>
          <div class="col-sm-4 col-md-4">
            <div class="b-item ">
              <div class="b-item-img"><a href="homepage4.html#">
              <?= Html::img("web/img/articles/{$lastNews[$counter]['image']}") ?>
              <!-- <img width="310" height="180" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/latest/1.jpg" alt=""/> --></a>
              </div>
              <div class="b-item-details">
                <div class="b-term b-term-badge"><a href="homepage4.html#"><?= $lastNews[$counter]['name'] ?></a>
                </div>
                <div class="b-item-title"><a href="homepage4.html#"><span><?= $lastNews[$counter]['title'] ?></span></a>
                </div>
                <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $lastNews[$counter]['f_name'] . " " . $lastNews[$counter]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $lastNews[$counter]['date'] ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
        <?php endfor; ?>
      </div>
      <div class="b-btn-block"><a class="b-btn" href="homepage4.html#">Load More</a></div>
    </div>
  </div>