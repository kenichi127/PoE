@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                edit food data
            </h1>

            <form action="/food/{{ $food->id }}/update">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="foodname">
                            Food name
                        </label>
                        <input
                            id="foodname"
                            name="foodname"
                            class="form-control {{ $errors->has('foodname') ? 'is-invalid' : '' }}"
                            value="{{ old('foodname') ?: $food->foodname }}"
                            type="text"
                        >
                        @if ($errors->has('foodname'))
                            <div class="invalid-feedback">
                                {{ $errors->first('foodname') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date">
                        Consumption date
                        </label>

                        <input
                            id="date"
                            name="date"
                            class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}"
                            value="{{ old('date') ?: $food->date }}"
                            type="date"
                        >
                        @if ($errors->has('date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="/food">
                            cancel
                        </a>

                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection 