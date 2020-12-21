@extends('layouts.layout');

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                D-R-001: The Lions
            </div>

            {{-- <p>{{ $leader }} - Leader</p> --}}
            <p>
                @foreach ($member as $value)
                    @if ($loop->last)
                        {{ $value->name }}

                        || {{ $value->user }}
                    @else
                        {{ $value->name }}

                        -
                    @endif
                @endforeach

            </p>
            {{-- <p>
                @foreach ($member->bloodtype as $bloodytype)
                    {{ $bloodytype }}
                @endforeach
            </p> --}}
            <p class="mssg"> {{ session('mssg') }} </p>
        </div>
    </div>
@endsection
