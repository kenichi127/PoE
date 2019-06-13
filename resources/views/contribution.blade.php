@extends('layouts.app')

@section('title', 'Contribution')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="/contribution/add">
                <div class="form-group">
                    {{ csrf_field() }}
                    <p class="ext-monospace">Title</p>
                    <input type="text" name="title" class="form-control" 
                    value="{{old('title')}}">
                    @if ($errors->has('title'))
                    <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                    @endif
                    <p class="ext-monospace">Content</p>
                    <input type="text" name="content" class=form-control value="{{old('content')}}">
                    @if ($errors->has('content'))
                    <span class="invalid-feedback">{{ $errors->first('content') }}</span>
                    @endif
                    <br>
                    <input type="submit" value="Post" class="btn btn-default">
                    
                </div>
            </form>

        </div>
    </div>
    <div class="mx-auto" style="width: 450px;">
        <div class="row">
            <div class="col-sm-12">
                @foreach($contributions as $contribution)
                    <div class="card border-primary mb-4" style="max-width: 30rem;">
                    <div class="card-body text-primary">
                        <h5 class="card-title">{{$contribution->title}}</h5>
                        <p class="card-text">{{$contribution->content}} </p>
                        @if(auth()->user()->id == 1)
                            @if($contribution->user_id == 1)
                            <a href="/contribution/{{$contribution->id}}/edit">
                            <input type="submit" value="edit" class="btn btn-info btn-sm">
                            </a>
                            @endif
                        <form method="post" action="/contribution/{{$contribution->id}}/delete">
                        {{ csrf_field() }}
                        <input type="submit" value="delete" class="btn btn-danger btn-sm" 
                        onclick='return confirm("Delete this article OK??");'>
                        </form>
                           
                        @elseif(auth()->user()->id == $contribution->user_id)
                        <a href="/contribution/{{$contribution->id}}/edit">
                        <input type="submit" value="edit" class="btn btn-info btn-sm">
                        </a>
                        <form method="post" action="/contribution/{{$contribution->id}}/delete">
                        {{ csrf_field() }}
                        <input type="submit" value="delete" class="btn btn-danger btn-sm"
                         onclick='return confirm("Delete this article OK??");'>
                        </form>
                        @endif
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
