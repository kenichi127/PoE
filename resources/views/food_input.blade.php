@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
        <form method="post" action="{{ route('fpost') }}">
        @csrf
        <div class="form-group row">
            <label for="foodname" class="col-md-4 col-form-label text-md-right">food name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control {{ $errors->has('foodname') ? ' is-invalid' : '' }}"
                     name="foodname" value="foodname">
                    @if ($errors->has('foodname'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('foodname') }}</strong>
                    </span>
                    @endif
                </div>
        </div>
        <div class="form-group row">
        <label for="date" class="col-md-4 col-form-label text-md-right">Consumption period</label>
            <div class="col-md-6">
            <input type="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}"
            name="date" value="yyyy/mm/dd">
            @if ($errors->has('date'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('date') }}</strong>
            </span>
            @endif
        <a href="/food/inputdata"><button class="btn btn-info">Input</button></a>
        </form>
        <a href="/food"><button class="btn btn-warning">back</button></a>
        </div>
    </div>
</div>
@endsection
                    