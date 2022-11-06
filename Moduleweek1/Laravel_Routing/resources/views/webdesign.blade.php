@extends('layouts.default')

@section('page-content')


    <h1 class="flex items-center justify-center text-5xl h-80 font-semiboldtext-gray-700">
        Web Design
    </h1>
    <div>
    @foreach ($designs as $design)

    <li class="flex items-center justify-center text-lg underline list-none font-semiboldtext-gray-700">{{$design}}</li>

    @endforeach
</div>
   


@endsection