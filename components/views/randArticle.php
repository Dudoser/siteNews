<?php
	use yii\helpers\Html;
	use yii\helpers\Url;

	$sides = [['widht' => 420, 'height' => 420], ['widht' => 420, 'height' => 240]];
	$center = ['widht' => 460, 'height' => 220];
?>

<div class="row">
  <div class="col-md-12">
    <div class="b-block">
      <div class="b-featured-7">
        <div class="row">
          <div class="col-md-12">

            <div class="b-featured-col b-featured-col-left">				
				<?php for ($i=0; $i < 2; $i++):?>
	              <div class="b-item b-item-c"><a class="b-item-link" href="<?= Url::to(['article/index'])?>"></a>
	                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("web/img/articles/{$articles[$i]['image']}", ['alt' => $articles[$i]['title'], 'width' => $sides[$i]['widht'], 'height' => $sides[$i]['height']])?></a>
	                </div>
	                <div class="b-term b-term-badge"><a href="123"><?= $articles[$i]['name'] ?></a>
	                </div>
	                <div class="b-item-details">
	                  <div class="b-item-title"><a href="123"><span><?= $articles[$i]['title'] ?></span></a>
	                  </div>
	                  <div class="b-item-stars"><span class="stars"></span></div>
	                  <div class="b-meta"><a class="b-meta-author" href="123"><?= $articles[$i]['f_name'] ?> <?= $articles[$i]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $articles[$i]['date'] ?></span>
	                  </div>
	                </div>
	              </div>
				<?php endfor; ?>
            </div>

            <div class="b-featured-col b-featured-col-center">
            	<?php for ($i=2; $i < 5; $i++):?>
	              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
	                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("web/img/articles/{$articles[$i]['image']}", ['alt' => $articles[$i]['title']/*, 'width' => $sides[$i]['widht'], 'height' => $sides[$i]['height']*/])?></a>
	                </div>
	                <div class="b-term b-term-badge"><a href="homepage4.html#"><?= $articles[$i]['name'] ?></a>
	                </div>
	                <div class="b-item-details">
	                  <div class="b-item-title"><a href="homepage4.html#"><span><?= $articles[$i]['title'] ?></span></a>
	                  </div>
	                  <div class="b-item-stars"><span class="stars"></span></div>
	                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $articles[$i]['f_name'] ?> <?= $articles[$i]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $articles[$i]['date'] ?></span>
	                  </div>
	                </div>
	              </div>
	          	<?php endfor;?>
            </div>
            
            <div class="b-featured-col b-featured-col-right">				
				<?php for($i = 5; $i < 7; $i++) : ?>
	              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
	                <div class="b-item-img"><a href="homepage4.html#"><?= Html::img("web/img/articles/{$articles[$i]['image']}", ['alt' => $articles[$i]['title'],/* 'width' => $sides[$i]['widht'], 'height' => $sides[$i]['height']*/])?></a>
	                </div>
	                <div class="b-term b-term-badge"><a href="homepage4.html#"><?= $articles[$i]['name'] ?></a>
	                </div>
	                <div class="b-item-details">
	                  <div class="b-item-title"><a href="homepage4.html#"><span><?= $articles[$i]['title'] ?></span></a>
	                  </div>
	                  <div class="b-item-stars"><span class="stars"></span></div>
	                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#"><?= $articles[$i]['f_name'] ?> <?= $articles[$i]['l_name'] ?></a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date"><?= $articles[$i]['date'] ?></span>
	                  </div>
	                </div>
	              </div>
				<?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>




<!-- <div class="row">
  <div class="col-md-12">
    <div class="b-block">
      <div class="b-featured-7">
        <div class="row">
          <div class="col-md-12">
            <div class="b-featured-col b-featured-col-left">
              <div class="b-item b-item-c"><a class="b-item-link" href="<?= Url::to(['article/index'])?>"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="420" height="420" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured1.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="123">Fashion</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="123"><span>The World's Highest-Paid Models 2016 by Forbes</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="123">Alban Scott</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">3-Dec-2016</span>
                  </div>
                </div>
              </div>
              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="420" height="240" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured2.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="homepage4.html#">Cars</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span>Engagement Ring Guidline &amp; Rules</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">Sandra Fox</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">12-Jun-2016</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="b-featured-col b-featured-col-center">
              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="460" height="220" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured3.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="homepage4.html#">Nightlife</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span>The World's 50 Best Night Clubs 2016: The Full Guide</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">Paul Miller</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">8-Feb-2016</span>
                  </div>
                </div>
              </div>
              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="460" height="220" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured4.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="homepage4.html#">World</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span>Remains of Huge, Ancient Coral Reef Discovered</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">William Thompson</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">10-Jun-2016</span>
                  </div>
                </div>
              </div>
              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="460" height="220" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured5.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="homepage4.html#">Travel</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span>World Travel Awards touches down at Maldives</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">William Thompson</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">19-Jan-2016</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="b-featured-col b-featured-col-right">
              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="420" height="240" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured6.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="homepage4.html#">Beauty</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span>16 Cheap Budget Wedding Ideas</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">Julian Ross</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">16-Jul-2016</span>
                  </div>
                </div>
              </div>
              <div class="b-item b-item-c"><a class="b-item-link" href="homepage4.html#"></a>
                <div class="b-item-img"><a href="homepage4.html#"><img width="420" height="420" src="https://s3.amazonaws.com/s3.alfanews.alfathemes.com/img/home4/featured7.jpg" alt=""/></a>
                </div>
                <div class="b-term b-term-badge"><a href="homepage4.html#">World</a>
                </div>
                <div class="b-item-details">
                  <div class="b-item-title"><a href="homepage4.html#"><span>The History of Hot Air Balloons on Weddings &amp; Events</span></a>
                  </div>
                  <div class="b-item-stars"><span class="stars"></span></div>
                  <div class="b-meta"><a class="b-meta-author" href="homepage4.html#">Alban Scott</a><span class="b-meta-separator"><i class="fa fa-square"></i></span><span class="b-meta-date">1-Nov-2016</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div> -->