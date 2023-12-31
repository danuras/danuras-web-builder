<!DOCTYPE html>
<html>

<head>
    <title>Standard Operating Procedure (SOP) Proses Pemesanan Produk {{ $web_attribute->title }}</title>
    <meta charset="utf-8">
    <meta name="description" content="{{ $contact->info_contact }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bagian Header -->
    @include('components.small-heading-web', [
        'web_attribute' => $web_attribute,
        'navigations' => $navigations,
        'card_boxes' => $card_boxes,
        'color' => $color,
    ])

    <div class="wrapper row3" id="customers">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Standard Operating Procedure (SOP) Proses Pemesanan Produk
                    {{ $web_attribute->title }}
                </h3>
                <br><br>
                @for ($i = 0; $i < sizeof($order_steps) / 4; $i++)
                    <div class="group btmspace-50 demo">
                        @if (isset($order_steps[$i * 4]))
                            <div class="one_quarter first">
                                <figure><img class="circle" src="{{ asset($order_steps[$i * 4]->icon) }}" alt="">
                                </figure>
                                <br>
                                <p>{{ $i * 4 + 1 }}. {{ $order_steps[$i * 4]->value }}</p>
                            </div>
                        @else
                            <div class="one_quarter first">
                            </div>
                        @endif
                        @if (isset($order_steps[$i * 4 + 1]))
                            <div class="one_quarter">
                                <figure><img class="circle" src="{{ asset($order_steps[$i * 4 + 1]->icon) }}"
                                        alt=""></figure>
                                <br>
                                <p>{{ $i * 4 + 2 }}. {{ $order_steps[$i * 4 + 1]->value }}</p>
                            </div>
                        @else
                            <div class="one_quarter">
                            </div>
                        @endif
                        @if (isset($order_steps[$i * 4 + 2]))
                            <div class="one_quarter">
                                <figure><img class="circle" src="{{ asset($order_steps[$i * 4 + 2]->icon) }}"
                                        alt=""></figure>
                                <br>
                                <p>{{ $i * 4 + 3 }}. {{ $order_steps[$i * 4 + 2]->value }}</p>
                            </div>
                        @else
                            <div class="one_quarter">
                            </div>
                        @endif
                        @if (isset($order_steps[$i * 4 + 3]))
                            <div class="one_quarter">
                                <figure><img class="circle" src="{{ asset($order_steps[$i * 4 + 3]->icon) }}"
                                        alt=""></figure>
                                <br>
                                <p>{{ $i * 4 + 4 }}. {{ $order_steps[$i * 4 + 3]->value }}</p>
                            </div>
                        @else
                            <div class="one_quarter">
                            </div>
                        @endif
                    </div>
                @endfor

            </div>

            <div class="clear"></div>
        </main>
    </div>

    @include('components.footer', [
        'web_attribute' => $web_attribute,
        'contact' => $contact,
        'navigations' => $navigations,
        'social_media' => $social_media,
    ])

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
