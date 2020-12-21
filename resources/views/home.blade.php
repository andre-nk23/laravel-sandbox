@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <div class="title m-b-md">
                                D-R-001: The Lions
                            </div>
                            @foreach ($member as $value)
                                @if ($loop->last)
                                    <div class="catalog">
                                        <a href="/profiles/{{ $value->id }}">{{ $value->name }}</a>
                                    </div>
                                @else
                                    <div class="catalog">
                                        <a href="/profiles/{{ $value->id }}">{{ $value->name }}</a>
                                    </div>
                                @endif
                            @endforeach
                            <a href="/create">Report vampire's identity</a>
                            <p class="mssg"> {{ session('mssg') }} </p>
                        </div>
                    </div>

                    {{-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
