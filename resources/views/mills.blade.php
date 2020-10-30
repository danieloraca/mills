@extends('layouts.app')

@section('content')
    <div class="row mt-1 mb-1">
        @foreach($mills as $key => $mill)
            @if($key % 10 == 0 && $key > 0)
                </div>
                <div class="row mt-1 mb-1">
            @endif
            <div class="col-sm p-1 ml-1 mr-1 card card-block bg-info">{{ $mill }}</div>
        @endforeach
    </div>
@endsection
