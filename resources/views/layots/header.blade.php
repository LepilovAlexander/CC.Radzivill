<!-- *****************Header************** -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-b ">

        <a href="home" class="navbar-brand wow bounceInLeft">
            <figure>
                <img src='img/logo.png' alt="ТОВ КОНСАЛТІНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="280" height="100">
            </figure>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle naviagation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="home" class="nav-link wow bounceInLeft" data-wow-delay="0.2s">Головна</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-delay="0.4s" href="/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Послуги
                    </a>
                    <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item blue-bg" href="accounting">Бухгалтерскі послуги</a>
                        <a class="dropdown-item blue-bg" href="juristic">Юридичні послуги</a>
                        <a class="dropdown-item blue-bg" href="personnel">Підбір персоналу</a>
                        <!-- <a class="dropdown-item blue-bg" href="development">Розробка сайтів</a> -->
                        <a class="dropdown-item blue-bg" href="holidays">Відпустка на 1-2-3!</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="courses" class="nav-link wow bounceInLeft" data-wow-delay="0.6s">Курси бухгалтерів</a>
                </li>
                <li class="nav-item">
                    <a href="contacts" class="nav-link wow bounceInLeft" data-wow-delay="0.8s">Контакти</a>
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
                <form method="post">
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