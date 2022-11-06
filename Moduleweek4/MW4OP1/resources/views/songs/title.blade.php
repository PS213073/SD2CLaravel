@extends('layouts.app')
@section('content')

    {{-- @foreach($songs as $song)
    <div class="p-4 text-2xl"><a class="text-purple-500 hover:text-purple-800" href="/details/{{$song->id}}">{{$song->title}}</a></div> --}}

    <div class="flex flex-col items-center justify-center py-10">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="px-6 py-4 text-2xl font-bold text-left text-gray-900">
                          Song Names
                        </th>
                        @foreach ($songs as $song)
                        <tr class="border-b">
                            <td class="px-6 py-5 font-medium text-gray-900 text-centert-lg whitespace-nowrap">{{$song}}</td>
                        </tr>
                        @endforeach
                    </tr>
                </thead>
                    </table>
                </div>
              </div>
            </div>
          </div>
    {{-- @endforeach --}}
@endsection