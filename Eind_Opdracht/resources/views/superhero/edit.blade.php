@extends('superhero.layout')

@section('content')

<div class="max-w-4xl mx-auto mt-8">

    <div class="mb-4">
        <h1 class="text-3xl font-bold">
            Edit Superhero
        </h1>
        <div class="flex justify-end mt-5">
            <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600"
                href="{{ route('superhero.index') }}">
                < Back</a>
        </div>
    </div>

    <div class="flex flex-col mt-5">
        <div class="flex flex-col">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                @if ($errors->any())
                <div class="p-5 rounded bg-red-500 text-white m-3">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                    <form action="{{ route('superhero.update',$superhero->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">Name:</label>
                            <input type="text" name="name" value="{{ $superhero->name }}"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Name">
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-bold text-gray-700" for="title">Publisher:</label>
                            <textarea
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="publisher" placeholder="Publisher">{{ $superhero->publisher }}</textarea>
                        </div>
                        <div class="mt-4">
                            <div class="form-group mt-2">
                                <input type="file" class="form-control" name="image" placeholder="Image"></input>
                                <img class="w-3/12 mt-2" src="/images/{{ $superhero->image }}">
                            </div>
                        </div>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <button type="submit"
                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection