@extends('layouts.layout');

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                D-R-001: The Lions
            </div>

            <p>{{ $leader }} - Leader</p>
            {{-- @if ($leader == 'Vampire God')
                <p> The first and strongest pure blooded vampire ever lived. </p>
            @elseif( $leader == "Song Ahyeong")
                <p> The strongest mind control and transfiguration female vampire ever lived. </p>
            @else
                <p> No sufficient data </p>
            @endif --}}
            <p>
                @foreach ($member as $value)
                    @if ($loop->last)
                        @if ($value == 'Lucy' || $value == 'Shin Geunwoo')
                            {{ $value }} is deceased
                        @else
                            {{ $value }}
                        @endif
                    @else
                        @if ($value == 'Lucy' || $value == 'Shin Geunwoo')
                            {{ $value }} is deceased -
                        @else
                            {{ $value }} -
                        @endif
                    @endif

                @endforeach
            </p>

        </div>
    </div>
@endsection
