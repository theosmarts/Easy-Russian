<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 05/02/19
 * Time: 23:06
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php

                foreach($articles as $article):?>
                    <article class="post post-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="post-thumb">
                                    <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt="" class="pull-left"></a>

                                    <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">View Post</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <header class="entry-header text-uppercase">
                                        <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id]);?>"> <?= $article->category->title?></a></h6>

                                        <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><?= $article->title?></a></h1>
                                    </header>
                                    <div class="entry-content">
                                        <p><?= $article->description?>
                                        </p>
                                    </div>
                                    <div class="social-share">
                                        <span class="social-share-title pull-left text-capitalize">By <?= $article->author->name;?> On <?= $article->getDate();?></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach;?>

                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]);?>
        </div>
    </div>
</div>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>

<!-- end main content-->