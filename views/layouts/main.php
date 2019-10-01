<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?= Html::csrfMetaTags() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.9.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<link rel="shortcut icon" href="looks/images/ds-358x255.png" type="image/x-icon">
<body>
<?php $this->beginBody() ?>

<section class="menu cid-rhlsWTeWPT" once="menu" id="menu2-0">

    <link rel="shortcut icon" href="resources/images/logo-200x200.png" type="image/x-icon">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?= Url::toRoute(['site/index'])?>">
                        <img src="looks/images/ds-358x255.png" alt="Dnevnik Studenta" title="" style="height: 8rem;">
                    </a>
                </span>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <?php if(Yii::$app->user->isGuest):?>
                    <li class="nav-item"><a class="nav-link link text-black display-5" href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-5" href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                <?php else: ?>
                    <?= Html::beginForm(['/auth/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->name . ')',
                        ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                    )
                    . Html::endForm() ?>
                <?php endif;?>
            </ul>

        </div>
    </nav>
</section>

<br>


<?= $content ?>


<section class="cid-rhlzEARSLj" id="footer1-4">





    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="<?= Url::toRoute(['site/index'])?>">
                        <img src="looks/images/ds-270x192.png" alt="Dnevnik Studenta" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-10">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">Tom Mboya Street,<br>Nairobi.</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-10">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: <a href="mailto:theophilusamadi@gmail.com" class="text-primary">info@dnevnikstudenta.com</a>
                    <br>Phone: <a href="tel:+254 712 207 362">+254 712 207 362</a>&nbsp;<br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-10">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="https://vk.com/id283254610" target="_blank" class="text-primary">Smarts Web Developers</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-10">
                        © Copyright 2019 Dnevnik Studenta - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>.fb-livechat,.fb-widget{display:none}.ctrlq.fb-button,.ctrlq.fb-close{position:fixed;right:24px;cursor:pointer}.ctrlq.fb-button{z-index:1;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;width:60px;height:60px;text-align:center;bottom:24px;border:0;outline:0;border-radius:60px;-webkit-border-radius:60px;-moz-border-radius:60px;-ms-border-radius:60px;-o-border-radius:60px;box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16);-webkit-transition:box-shadow .2s ease;background-size:80%;transition:all .2s ease-in-out}.ctrlq.fb-button:focus,.ctrlq.fb-button:hover{transform:scale(1.1);box-shadow:0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)}.fb-widget{background:#fff;z-index:2;position:fixed;width:360px;height:435px;overflow:hidden;opacity:0;bottom:0;right:24px;border-radius:6px;-o-border-radius:6px;-webkit-border-radius:6px;box-shadow:0 5px 40px rgba(0,0,0,.16);-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16);-moz-box-shadow:0 5px 40px rgba(0,0,0,.16);-o-box-shadow:0 5px 40px rgba(0,0,0,.16)}.fb-credit{text-align:center;margin-top:8px}.fb-credit a{transition:none;color:#bec2c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;text-decoration:none;border:0;font-weight:400}.ctrlq.fb-overlay{z-index:0;position:fixed;height:100vh;width:100vw;-webkit-transition:opacity .4s,visibility .4s;transition:opacity .4s,visibility .4s;top:0;left:0;background:rgba(0,0,0,.05);display:none}.ctrlq.fb-close{z-index:4;padding:0 6px;background:#365899;font-weight:700;font-size:11px;color:#fff;margin:8px;border-radius:3px}.ctrlq.fb-close::after{content:'x';font-family:sans-serif}</style>

<div class="fb-livechat">
    <div class="ctrlq fb-overlay"></div>
    <div class="fb-widget">
        <div class="ctrlq fb-close"></div>
        <div class="fb-page" data-href="https://www.facebook.com/digital.inspiration/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">
            <blockquote cite="https://www.facebook.com/digital.inspiration/" class="fb-xfbml-parse-ignore"> </blockquote>
        </div>
        <div class="fb-credit">
            <a href="https://www.labnol.org/software/facebook-messenger-chat-widget/9583/" target="_blank">Facebook Chat Widget by Digital Inspiration</a>
        </div>
        <div id="fb-root"></div>
    </div>
    <a href="https://m.me/digital.inspiration" title="Send us a message on Facebook" class="ctrlq fb-button"></a>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
