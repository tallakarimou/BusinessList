@extends('dashboard')

@section('content')

   <form action="{{ route('listings.update',[$listing->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="text-center">
            <div class="form-group block">
                <label for="name" class="form-label">Name:</label><br>
                <input type="text" id="name" name="name" class="form-input px-4 py-3 rounded form-control" value="{{ $listing->name }}"><br>
            </div>

            <label for="lname">Email:</label><br>
            <input type="text" id="email" name="email" class="form-input px-4 py-3 rounded" value="{{ $listing->email }}"><br>

            <label for="web">website:</label><br>
            <input type="text" id="web" name="web" class="form-input px-4 py-3 rounded" value="{{ $listing->web }}"><br>

            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone" class="form-input px-4 py-3 rounded" value="{{ $listing->phone }}"><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" class="form-input px-4 py-3 rounded" value="{{ $listing->address }}"><br>

            <label for="bio">Bio:</label><br>
            <textarea name="bio" id="" cols="30" rows="10" class="form-input px-4 py-3 rounded">{{ $listing->bio }}</textarea><br>


            <button type="submit" class="bg-green-700 rounded"> submit</button><br>
        </div>
  </form>

@endsection
