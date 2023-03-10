@extends('dashboard')

@section('content')

<div class="">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div class="p-6 bg-white border-b border-gray-200">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-1 col-end-3 ...">
            <h1 class="bg-blue-500 rounded text-center" >Listings</h1>


        </div>


    </div>
</div>

        @if(count($listings)>0)



        <table class="table table-light ">

                <div class="grid grid-cols-6">
                    <div class="col-span-5 text-center">

                           <strong>
                            Compagny
                            </strong>

                    </div>



                    @foreach($listings as $listing)

                        <div class="col-start-3 col-span-4 ">
                            <a  href="{{ route('listings.show',[$listing->id]) }}">
                                <span class='box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 rounded'>
                                    {{$listing->name}}
                                </span>
                            </a>
                        </div>


                    @endforeach

                </div>



        @else
        <div class="p-6 bg-white border-b border-gray-200">
                <p> Listing not find</p>
        </div>
        @endif

@endsection
