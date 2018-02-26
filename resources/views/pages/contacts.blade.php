@extends('layot')
@section('title', 'Контакти')
@section('content')
    <div class="bg-info wow bounceInRight" data-wow-delay="1.3s">
        <div class="container justify-content-center text-white">
            <div class="row">
                <h2>Контакти</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-y wow bounceInLeft" data-wow-delay="1.3s">
        <div class="row justify-content-center  pt-5 pb-5">
            <div class="col-lg-4 col-md-8 col-sm-12 text-white bg-info rounded-left">
                <h4>Адресса:</h4>
                <h5>ТОВ "КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ"</h5>

                <p>Код ЄДРПОУ 40791358</p>
                <p>Украина, м. Київ,</p>
                <p>вул. Б.Хмельницького, </p>
                <p>буд.16-22, оф.301.</p>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-12 text-info rounded-right border border-info">

                <h4>Телефон:</h4>

                <p><a href="tel:+380442287854">(044) 228 78 54</a></p>
                <p><a href="tel:+380952867080">(095) 286 70 80</a></p>
                <p><a href="tel:+380676294480">(067) 629 44 80</a></p>
                <p><a href="tel:+380938844231">(093) 884 42 31</a></p>

                <h4>Email:</h4>

                <p><a href="mailto:cc.radzivill@gmail.com">cc.radzivill@gmail.com</a></p>

            </div>


        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="map" class="col wow pulse" data-wow-delay="1.5s"></div>
        </div>
    </div>



@endsection