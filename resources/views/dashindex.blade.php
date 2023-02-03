@extends('dashboard')

@section('content')

<div class="p-6 bg-white border-b border-gray-200">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-1 col-end-3 ...">
            <h1>Listings</h1>


        </div>
        <div class="col-end-7 col-span-2">
            <button class="bg-green-500 rounded"><a href="{{ route('listings.create') }}"> ADD LISTING</a></button>
        </div>


    </div>
</div>

        @if(count($listings)>0)



        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Compagny</th>
                    <th>phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listings as $listing)
                <tr>
                    <td>{{$listing->name}}</td>
                    <td>{{$listing->phone}}</td>
                    <td><a href="{{ route('listings.edit',[$listing->id]) }}" class="bg-blue-500 rounded">EDIT</a></td>
                    <td>
                        <form action="{{ route('listings.destroy',[$listing->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 rounded">
                                DELETE
                            </button>
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>

        @else
        <div class="p-6 bg-white border-b border-gray-200">
                <p> Listing not find</p>
        </div>
        @endif

@endsection
