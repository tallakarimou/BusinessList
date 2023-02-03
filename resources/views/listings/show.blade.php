@extends('dashboard')

@section('content')

  <div class="grid grid-cols-6 gap-4">
    <div class="col-start-3 col-span-2 ">
        <div class="form-group block">
            <label class="bg-blue-500 rounded font-bold font-bold">Name:</label><br>
            <p>
                {{ $listing->name }}
            </p>
        </div>

        <label class="bg-blue-500 rounded font-bold">Email:</label><br>
        <p>
            {{ $listing->email }}
        </p>

        <label class="bg-blue-500 rounded font-bold">website:</label><br>
        
        <p>
            {{ $listing->web }}
        </p>

        <label class="bg-blue-500 rounded font-bold">Phone:</label><br>
        <p>
        {{ $listing->phone }}
        </p>
        <label class="bg-blue-500 rounded font-bold">address:</label><br>

        <p>
            {{ $listing->address }}
        </p>
        <label class="bg-blue-500 rounded font-bold">Bio:</label><br>

        <p>
           {{ $listing->bio }}    
        </p>  


 </div>
  </div>
        

@endsection
