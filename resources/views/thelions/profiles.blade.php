@extends('layouts.app');

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                D-R-001-{{ $query->id }}: {{ $query->name }}
            </div>
            <p>
                @foreach ($query->bloodtype as $blood)
                    {{ $blood }}
                @endforeach
            </p>
            <form action="/profiles/{{ $query->id }}" method="POST">
                @csrf
                @method("DELETE")
                {{-- override method POST --}}
                <button class="de">Delete records</button>
            </form>
        </div>
    </div>
@endsection
