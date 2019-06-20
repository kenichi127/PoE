@extends('layouts.app')
<?php
$share_url   = 'http:http://poe-i.herokuapp.com/';
$share_title_world = 'Area:{$searchplace}%0aDate:{$searchyear}/{$searchmonth}/{$searchday}%0aThe%20possibility%20of%20an%20earthquakes%20is%20{$worldpercentage}%0a';
$share_title = 'Area:{$searchplace}%0aDate:{$searchyear}/{$searchmonth}/{$searchday}%0aThe%20possibility%20of%20anearthquakes%20is%20{$percentage}%0a';
?>
@section('content')
@if($searchyear === '2020' or $searchyear === '2024' or $searchyear === '2028' or $searchyear === '2032' or $searchyear === '2036' or $searchyear === '2040' or $searchyear === '2044' or $searchyear === '2048' or $searchyear === '2052' or $searchyear === '2056' or $searchyear === '2060' or $searchyear === '2064' or $searchyear === '2068')
  @if($searchmonth==='2')
    @if($searchday === '30' or $searchday === '31')
    <h1>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }} is not exist.</h1>
    <a href="/home"><button class="btn btn-info">back</button></a>   
    @else
    <div class='row'>
    <div class='col-sm-4'>
    <h4>Search area:{{ $searchplace }}</h4>
    <h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
    </div>
    <div class='col-sm-8'>
    <h3>The possibility of an earthquake is</h3>
      @if($searchplace == 'world')
        @if($worldpercentage >= '80')
        <h1 class='.bg-danger'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '60')
        <h1 class='.bg-warning'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '20')
        <h1 class='.bg-info'>
        {{ $worldpercentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $worldpercentage }}%
        </h1>
        @endif
      @else
        @if($percentage >= '80')
        <h1 class='.bg-danger'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '60')
        <h1 class='.bg-warning'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '20')
        <h1 class='.bg-info'>
        {{ $percentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $percentage }}%
        </h1>
        @endif
      @endif
    </div>
    </div>
  <div class='row'>
    <div class='col-sm-8'></div>
    <div class='col-sm-4'>
      @if($searchplace == 'world')
      <a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
      <button class='btn btn-info'>Twitter</button> 
      </a>
      <a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a> 
      @else
      <a href='https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}'>
      <button class='btn btn-info'>Twitter</button>
      </a>
      <a href='//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}'>
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a>
      @endif
    </div>
  </div>
    @endif
    </div>
  @elseif($searchmonth === '4' or $searchmonth === '6' or $searchmonth === '9' or $searchmonth === '11')
    @if($searchday==='31')
    <p>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }} is not exit.</p>
    <a href="/home"><button class="btn btn-info">back</button></a>
    @else
    <div class='row'>
    <div class='col-sm-4'>
    <h4>Search area:{{ $searchplace }}</h4>
    <h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
    </div>
    <div class='col-sm-8'>
    <h3>The possibility of an earthquake is</h3>
      @if($searchplace == 'world')
        @if($worldpercentage >= '80')
        <h1 class='.bg-danger'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '60')
        <h1 class='.bg-warning'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '20')
        <h1 class='.bg-info'>
        {{ $worldpercentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $worldpercentage }}%
        </h1>
        @endif
      @else
        @if($percentage >= '80')
        <h1 class='.bg-danger'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '60')
        <h1 class='.bg-warning'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '20')
        <h1 class='.bg-info'>
        {{ $percentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $percentage }}%
        </h1>
        @endif
      @endif
    </div>
    </div>
  <div class='row'>
    <div class='col-sm-8'></div>
    <div class='col-sm-4'>
      @if($searchplace == 'world')
      <a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
      <button class='btn btn-info'>Twitter</button> 
      </a>
      <a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a> 
      @else
      <a href='https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}'>
      <button class='btn btn-info'>Twitter</button>
      </a>
      <a href='//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}'>
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a>
      @endif
    </div>
  </div>
    @endif
  @else
  <div class='row'>
    <div class='col-sm-4'>
    <h4>Search area:{{ $searchplace }}</h4>
    <h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
    </div>
    <div class='col-sm-8'>
    <h3>The possibility of an earthquake is</h3>
      @if($searchplace == 'world')
        @if($worldpercentage >= '80')
        <h1 class='.bg-danger'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '60')
        <h1 class='.bg-warning'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '20')
        <h1 class='.bg-info'>
        {{ $worldpercentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $worldpercentage }}%
        </h1>
        @endif
      @else
        @if($percentage >= '80')
        <h1 class='.bg-danger'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '60')
        <h1 class='.bg-warning'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '20')
        <h1 class='.bg-info'>
        {{ $percentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $percentage }}%
        </h1>
        @endif
      @endif
    </div>
    </div>
  <div class='row'>
    <div class='col-sm-8'></div>
    <div class='col-sm-4'>
      @if($searchplace == 'world')
      <a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
      <button class='btn btn-info'>Twitter</button> 
      </a>
      <a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a> 
      @else
      <a href='https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}'>
      <button class='btn btn-info'>Twitter</button>
      </a>
      <a href='//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}'>
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a>
      @endif
    </div>
  </div>
  @endif
@else
  @if($searchmonth==='2')
    @if($searchday === '29' or $searchday === '30' or $searchday === '31')
    <p>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }} is not exist.</p>
    <a href="/home"><button class="btn btn-info">back</button></a>
    @else
    <div class='row'>
    <div class='col-sm-4'>
    <h4>Search area:{{ $searchplace }}</h4>
    <h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
    </div>
    <div class='col-sm-8'>
    <h3>The possibility of an earthquake is</h3>
      @if($searchplace == 'world')
        @if($worldpercentage >= '80')
        <h1 class='.bg-danger'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '60')
        <h1 class='.bg-warning'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '20')
        <h1 class='.bg-info'>
        {{ $worldpercentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $worldpercentage }}%
        </h1>
        @endif
      @else
        @if($percentage >= '80')
        <h1 class='.bg-danger'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '60')
        <h1 class='.bg-warning'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '20')
        <h1 class='.bg-info'>
        {{ $percentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $percentage }}%
        </h1>
        @endif
      @endif
    </div>
    </div>
  <div class='row'>
    <div class='col-sm-8'></div>
    <div class='col-sm-4'>
      @if($searchplace == 'world')
      <a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
      <button class='btn btn-info'>Twitter</button> 
      </a>
      <a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a> 
      @else
      <a href='https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}'>
      <button class='btn btn-info'>Twitter</button>
      </a>
      <a href='//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}'>
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a>
      @endif
    </div>
  </div>
    @endif
  @elseif($searchmonth === '4' or $searchmonth === '6' or $searchmonth === '9' or $searchmonth === '11')
    @if($searchday==='31')
    <p>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }} is not exit.</p>
    <a href="/home"><button class="btn btn-info">back</button></a>
    @else
    <div class='row'>
    <div class='col-sm-4'>
    <h4>Search area:{{ $searchplace }}</h4>
    <h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
    </div>
    <div class='col-sm-8'>
    <h3>The possibility of an earthquake is</h3>
      @if($searchplace == 'world')
        @if($worldpercentage >= '80')
        <h1 class='.bg-danger'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '60')
        <h1 class='.bg-warning'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '20')
        <h1 class='.bg-info'>
        {{ $worldpercentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $worldpercentage }}%
        </h1>
        @endif
      @else
        @if($percentage >= '80')
        <h1 class='.bg-danger'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '60')
        <h1 class='.bg-warning'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '20')
        <h1 class='.bg-info'>
        {{ $percentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $percentage }}%
        </h1>
        @endif
      @endif
    </div>
    </div>
  <div class='row'>
    <div class='col-sm-8'></div>
    <div class='col-sm-4'>
      @if($searchplace == 'world')
      <a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
      <button class='btn btn-info'>Twitter</button> 
      </a>
      <a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a> 
      @else
      <a href='https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}'>
      <button class='btn btn-info'>Twitter</button>
      </a>
      <a href='//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}'>
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a>
      @endif
    </div>
  </div>
    @endif  
  @else
  <div class='row'>
    <div class='col-sm-4'>
    <h4>Search area:{{ $searchplace }}</h4>
    <h4>{{ $searchyear }}/{{ $searchmonth }}/{{ $searchday }}</h4>
    </div>
    <div class='col-sm-8'>
    <h3>The possibility of an earthquake is</h3>
      @if($searchplace == 'world')
        @if($worldpercentage >= '80')
        <h1 class='.bg-danger'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '60')
        <h1 class='.bg-warning'>
        {{ $worldpercentage }}%
        </h1>
        @elseif($worldpercentage >= '20')
        <h1 class='.bg-info'>
        {{ $worldpercentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $worldpercentage }}%
        </h1>
        @endif
      @else
        @if($percentage >= '80')
        <h1 class='.bg-danger'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '60')
        <h1 class='.bg-warning'>
        {{ $percentage }}%
        </h1>
        @elseif($percentage >= '20')
        <h1 class='.bg-info'>
        {{ $percentage }}%
        </h1>
        @else
        <h1 class='.bg-primary'>
        {{ $percentage }}%
        </h1>
        @endif
      @endif
    </div>
    </div>
  <div class='row'>
    <div class='col-sm-8'></div>
    <div class='col-sm-4'>
      @if($searchplace == 'world')
      <a href="https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title_world}}">
      <button class='btn btn-info'>Twitter</button> 
      </a>
      <a href="//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title_world}}">
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title_world}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a> 
      @else
      <a href='https://twitter.com/intent/tweet?url={{$share_url}}&text={{$share_title}}'>
      <button class='btn btn-info'>Twitter</button>
      </a>
      <a href='//www.facebook.com/sharer.php?src=bm&u={{$share_url}}&t={{$share_title}}'>
      <button class='btn btn-primary'>Facebook</button>
      </a>
      <a href="//line.me/R/msg/text/?{{$share_title}}.'%0A'.{{$share_url}}">
      <button class='btn btn-success'>LINE</button>
      </a>
      @endif
    </div>
  </div>
  @endif
@endif
@endsection