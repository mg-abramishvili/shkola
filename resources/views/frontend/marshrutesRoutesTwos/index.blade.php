@extends('layouts.frontend')
@section('content')

<body class="body-events">

    <div class="wrapper">
    
        <ul class="events-cats" style="width: 490px;">
            @forelse($marshrutesRoutesTwos as $key => $marshrutesRouteTwo)
                <li>
                    <a class="btn btn-xs btn-primary" href="/front/marshrutes-routes-twos/{{ $marshrutesRouteTwo->id }}">
                        {{ $marshrutesRouteTwo->marshrutesroutes_title ?? '' }}
                    </a>
                </li>
                @empty
                <li>Маршрутов нет.</li>
            @endforelse
        </ul>

        <a href="/" class="backbutton">МЕНЮ</a>

    </div>


@endsection
@section('scripts')
@parent
<script>

</script>
@endsection