<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <div class="wrapper row3" id="blog">
        <section class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Blog</h3>
            </div>
            <div class="latest">
                <article class="clear">
                    <div class="one_half first"><a class="iblock borderedbox inspace-10" href=""><img src="{{asset($blogs[0]->image_url)}}" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">{{$blogs[0]->title}}</h3>
                        <ul class="nospace meta">
                            <li><time datetime="{{$blogs[0]->date_published}}">{{$blogs[0]->date_published}}</time></li>
                            <li>Oleh {{$blogs[0]->author}}</li>
                        </ul>
                        <p>{{substr($blogs[0]->text, 0, 400)}}&hellip;</p>
                        <footer>
                            <a class="btn" href="{{$blogs[0]->link}}">Baca</a>
                        </footer>
                    </div>
                </article>
                <article class="clear">
                    <div class="one_half first">
                        <h3 class="heading">{{$blogs[1]->title}}</h3>
                        <ul class="nospace meta">
                            <li><time datetime="{{$blogs[1]->date_published}}">{{$blogs[1]->date_published}}</time></li>
                            <li>Oleh {{$blogs[1]->author}}</li>
                        </ul>
                        <p>{{substr($blogs[1]->text, 0, 400)}}&hellip;</p>
                        <footer>
                            <a class="btn" href="{{$blogs[1]->link}}">Baca</a>
                        </footer>
                    </div>
                    <div class="one_half">
                        <a class="iblock borderedbox inspace-10" href="">
                            <img src="{{asset($blogs[1]->image_url)}}" alt="">
                        </a>
                    </div>
                </article>
            </div>
            <br><br>
            <p class="center"><a class="btn" href="blog">Tampilkan Semua</a></p>
            <div class="clear"></div>
        </section>
    </div>

    <!--JAVASCRIPTS -->
</body>

</html>