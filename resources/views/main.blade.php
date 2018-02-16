<!doctype html>
<html lang="ru">
<head>
    <title><?=$title?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=base_url()?>img/icon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

<!-- *****************Header************** -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-b ">

        <a href="<?=base_url()?>home" class="navbar-brand wow bounceInLeft">
            <figure>
                <img src="<?=base_url()?>img/logo.png" alt="ТОВ КОНСАЛТІНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="280" height="100">
            </figure>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle naviagation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li <?if($active=='home'):?> class="nav-item active"<?else:?> class="nav-item"<?endif?>>
                    <a href="<?=base_url()?>home" class="nav-link wow bounceInLeft" data-wow-delay="0.2s">Головна</a>
                </li>
                <li <?if($active=='accounting' or $active=='juristic' or $active=='personnel' or $active=='development'or $active=='holidays'):?> class="nav-item dropdown active"<?else:?> class="nav-item dropdown"<?endif?>>
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-delay="0.4s" href="<?=base_url()?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Послуги
                    </a>
                    <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item blue-bg" href="<?=base_url()?>accounting">Бухгалтерскі послуги</a>
                        <a class="dropdown-item blue-bg" href="<?=base_url()?>juristic">Юридичні послуги</a>
                    <!-- <a class="dropdown-item blue-bg" href="<?=base_url()?>personnel">Підбір персоналу</a> -->
                    <!-- <a class="dropdown-item blue-bg" href="<?=base_url()?>development">Розробка сайтів</a> -->
                        <a class="dropdown-item blue-bg" href="<?=base_url()?>holidays">Відпустка на 1-2-3!</a>
                    </div>
                </li>
                <li <?if($active=='courses'):?> class="nav-item active"<?else:?> class="nav-item"<?endif?>>
                    <a href="<?=base_url()?>courses" class="nav-link wow bounceInLeft" data-wow-delay="0.6s">Курси бухгалтерів</a>
                </li>
                <li <?if($active=='contacts'):?> class="nav-item active"<?else:?> class="nav-item"<?endif?>>
                    <a href="<?=base_url()?>contacts" class="nav-link wow bounceInLeft" data-wow-delay="0.8s">Контакти</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">
              <button type="button" class="btn btn-outline-warning my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Залишити Заявку</button>
            </form> -->
        </div>
    </nav>
</header>
<!-- ********************Modal Window*********************** -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ваша Заявка</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('sendMail')?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше Ім'я">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Ваш Email">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="massage" rows="5" name="massage" placeholder="Повідомлення"></textarea>
                    </div>

                </form>
                <div class="modal-footer"><button type="submit" id="send" name="send_message" class="btn btn-info">Відправити</button></div>
            </div>
        </div>
    </div>
</div>


<!-- ***************content****************************** -->
<main>

    <? include $contentPage.".php"; ?>

</main>
<!-- ******************footer************************ -->
<footer>
    <div class="footer" id="footer">
        <div class="container justify-content-end">
            <div class="row justify-content-between align-items-center">
                <!-- <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

                  </ul>
                </div>
                <div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

                  </ul>
                </div>
                <div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

                  </ul>
                </div>
                <div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

                  </ul>
                </div> -->
                <div class="col-lg-3 wow zoomInLeft" data-wow-offset="50">
                    <h3> Мы у  соцмережах </h3>
                    <ul class="social ">
                        <li id="faceB"> <a  target="_blank" href="https://www.facebook.com/OlgaRadzivill1"><i class=" fa fa-facebook">   </i> </a> </li>
                        <li id="skype"> <a href="skype:radzivill777"><i class="fa fa-skype">   </i> </a>

                            <div id="SkypeButton_Call_radzivill777_1">
                            </div>
                        </li>
                        <li id="google"> <a href="mailto:cc.radzivill@gmail.com"><i class="fa fa-google-plus">   </i> </a> </li>
                    </ul>
                </div>
                <!--  <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">
               <button type="button" class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Залишити Заявку</button>
             </form> -->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom bg-info">
        <div class="container text-right text-white wow bounceInRight">
            <p> © Всі права захищені - Разроблено компанієй <a href="#" class="text-white h5">WF dev.</a></p>

        </div>
    </div>
    <!--/.footer-bottom-->
</footer>

<link rel="stylesheet" href="<?=base_url()?>css/style.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
<!-- fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Animate CSS + WoW.JS -->
<link rel="stylesheet" href="<?=base_url()?>css/animate.css">
<script src="<?=base_url()?>js/wow.min.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url()?>js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/script.js"></script>
<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcQMSM28AVgOM92kGziX8UQjjBO5AhqEU&callback=initMap"
        async defer></script>

</body>
</html>