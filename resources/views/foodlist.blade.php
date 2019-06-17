@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm-3">
        <a href="/food/input"><button class="btn btn-info">input</button></a>
    </div>
</div>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <table class="table table-striped table-bordered">
        <tr>
            <th>food</th>
            <th>Consumption date</th>
            <th></th>
        </tr>
        @foreach($foods as $food)
        <tr>
            <td>{{ $food->foodname }}</td>
            <td>{{ $food->date }}</td>
            <td><a href="food/{{ $food->id }}/edit"><button class="btn btn-primary">edit</button></a>
            <a href="food/{{ $food->id }}/delete"><button class="btn btn-danger">delete</button></a></td>
            </tr>
        @endforeach
    </table>
    </div>
    <div class="col-sm-3">
    </div>
</div>
@endsection
