<header>
    <div class="line bg-primary">
        <div class="container pt-3 pb-2">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 wow bounceInLeft text-center" data-wow-delay="0.4s"><a class="text-white" href="tel:+380442287854"><i class="fa fa-phone" aria-hidden="true"></i> (044) 228 78
                        54</a></div>
                <div class="col-md-3 col-sm-6 wow bounceInLeft text-center" data-wow-delay="0.4s"><a class="text-white" href="tel:+380952867080"><i class="fa fa-phone" aria-hidden="true"></i>  (095) 286 70
                        80</a></div>
                <div class="col-md-3 col-sm-6 wow bounceInRight text-center" data-wow-delay="0.4s"><a class="text-white" href="tel:+380676294480"><i class="fa fa-phone" aria-hidden="true"></i>  (067) 629 44
                        80</a></div>
                <div class="col-md-3 col-sm-6 wow bounceInRight text-center" data-wow-delay="0.4s"><a class="text-white" href="tel:+380938844231"><i class="fa fa-phone" aria-hidden="true"></i>  (093) 884 42
                        31</a></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-b ">

        <a href="/" class="navbar-brand wow bounceInLeft">
            <figure>
                <img src='img/nlogo.png' alt="ТОВ КОНСАЛТІНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="290" height="100">
            </figure>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle naviagation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li <? if ($active == 'home'): ?> class="nav-item active" <? else: ?> class="nav-item"<? endif ?>>
                    <a href="/" class="nav-link wow bounceInLeft" data-wow-delay="0.2s">Головна</a>
                </li>
                <li <? if ($active == 'accounting' or $active == 'juristic' or $active == 'personnel' or $active == 'development' or $active == 'holidays'): ?> class="nav-item dropdown active"
                    <? else: ?> class="nav-item dropdown"<? endif ?>>
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-delay="0.4s" href="/"
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <li <? if ($active == 'courses'): ?> class="nav-item active" <? else: ?> class="nav-item"<? endif ?>>
                    <a href="courses" class="nav-link wow bounceInLeft" data-wow-delay="0.6s">Курси бухгалтерів</a>
                </li>
                <li <? if ($active == 'contacts'): ?> class="nav-item active" <? else: ?> class="nav-item"<? endif ?>>
                    <a href="contacts" class="nav-link wow bounceInLeft" data-wow-delay="0.8s">Контакти</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">
            <button type="button" class="btn btn-outline-warning my-2 my-sm-0" data-toggle="modal"
            data-target="#myModal">Залишити Заявку
            </button>
            </form>
        </div>
    </nav>
</header>
