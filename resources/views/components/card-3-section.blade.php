<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body id="top">
    <div class="wrapper {{ $rank % 2 == 1 ? 'row3' : 'row4' }}" id = "{{ $cb->title }}">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">{{ $cb->title }}</h3>
                <p>{{ $cb->info }}</p>
            </div>
            @for ($i = 0; $i < sizeof($cb->cards) / 4; $i++)
                <ul class="nospace clear services">
                    @if (isset($cb->cards[$i * 4]))
                        <li class="one_quarter first">
                            <figure><img src="{{ asset($cb->cards[$i * 4]->image_url) }}" alt="">
                                <figcaption>{{ $cb->cards[$i * 4]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <li class="one_quarter first">
                        </li>
                    @endif
                    @if (isset($cb->cards[$i * 4 + 1]))
                        <li class="one_quarter">
                            <figure><img src="{{ asset($cb->cards[$i * 4 + 1]->image_url) }}" alt="">
                                <figcaption>{{ $cb->cards[$i * 4 + 1]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <li class="one_quarter ">
                        </li>
                    @endif
                    @if (isset($cb->cards[$i * 4 + 2]))
                        <li class="one_quarter">
                            <figure><img src="{{ asset($cb->cards[$i * 4 + 2]->image_url) }}" alt="">
                                <figcaption>{{ $cb->cards[$i * 4 + 2]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <div class="one_quarter ">
                        </div>
                    @endif
                    @if (isset($cb->cards[$i * 4 + 3]))
                        <li class="one_quarter">
                            <figure><img src="{{ asset($cb->cards[$i * 4 + 3]->image_url) }}" alt="">
                                <figcaption>{{ $cb->cards[$i * 4 + 3]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <li class="one_quarter ">
                        </li>
                    @endif
                </ul>
            @endfor
            <p class="center"><a class="{{ $rank % 2 == 1 ? 'btn' : 'btn inverse' }}" href="{{route('card-box', [$cb->title, $cb->card_type, $cb->id])}}">Tampilkan Semua</a></p>
        </main>
    </div>
</body>

</html>
