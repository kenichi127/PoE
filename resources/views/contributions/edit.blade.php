@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                edit page
            </h1>

            <form action="/contribution/{{$contribution->id}}/update">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            title
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') ?: $contribution->title }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="content">
                            contents
                        </label>

                        <textarea
                            id="content"
                            name="content"
                            class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}"
                            rows="5"
                        >{{ old('content') ?: $contribution->content }}</textarea>
                        @if ($errors->has('content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="/contribution">
                            cancel
                        </a>

                        <button type="submit" class="btn btn-primary">
                            edit
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection