@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-4">
<h4>Search area:{{ $searchplace }}</h4>
<h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
</div>
<div class="col-sm-8">
<h3>The possibility of an earthquake is</h3>
@if($searchplace == 'world')
    @if($worldpercentage >= '80')
    <h1 class=".bg-danger">
    {{ $worldpercentage }}%
    </h1>
    @elseif($worldpercentage >= '60')
    <h1 class=".bg-warning">
    {{ $worldpercentage }}%
    </h1>
    @elseif($worldpercentage >= '20')
    <h1 class=".bg-info">
    {{ $worldpercentage }}%
    </h1>
    @else
    <h1 class=".bg-primary">
    {{ $worldpercentage }}%
    </h1>
    @endif
@else
    @if($percentage >= '80')
    <h1 class=".bg-danger">
    {{ $percentage }}%
    </h1>
    @elseif($percentage >= '60')
    <h1 class=".bg-warning">
    {{ $percentage }}%
    </h1>
    @elseif($percentage >= '20')
    <h1 class=".bg-info">
    {{ $percentage }}%
    </h1>
    @else
    <h1 class=".bg-primary">
    {{ $percentage }}%
    </h1>
    @endif
@endif
</div>
</div>
<div class="row">
<div class="col-sm-8"></div>
<div class="col-sm-4">
<?php
  $share_url   = "http://192.168.99.100:8085/";
  $share_title_world = "Area:{$searchplace}%0aDate:{$searchyear}/{$searchmonth}/{$searchday}%0aThe%20possibility%20of%20an%20earthquakes%20is%20{$worldpercentage}%0a";
  $share_title = "Area:{$searchplace}%0aDate:{$searchyear}/{$searchmonth}/{$searchday}%0aThe%20possibility%20of%20anearthquakes%20is%20{$percentage}%0a";
?>
@if($searchplace == 'world')
<a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
<button>Twitter</button> 
</a>
<a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
<button>Facebook</button>
</a>
<a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
<button>LINE</button>
</a>
@else
<a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}">
<button>Twitter</button>
</a>
<a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}">
<button>Facebook</button>
</a>
<a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
<button>LINE</button>
</a>
@endif
</div>
</div>
@endsection