@extends('dashboard')

@section('content')

<div class="grid grid-cols-6 gap-4">
    <form action="{{ route('listings.store') }}" method="POST" class="col-start-3  col-span-2">
        @csrf
            <div >
                <div class="form-group block">
                    <label for="name" class="form-label">Name:</label><br>
                    <input type="text" id="name" name="name" class="form-input px-4 py-3 rounded form-control"><br>
                </div>
    
                <label for="lname">Email:</label><br>
                <input type="text" id="email" name="email" class="form-input px-4 py-3 rounded"><br>
    
                <label for="web">website:</label><br>
                <input type="text" id="web" name="web" class="form-input px-4 py-3 rounded"><br>
    
                <label for="phone">Phone:</label><br>
                <input type="text" id="phone" name="phone" class="form-input px-4 py-3 rounded"><br>
    
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" class="form-input px-4 py-3 rounded"><br>
    
                <label for="bio">Bio:</label><br>
                <textarea name="bio" id="" cols="30" rows="10" class="form-input px-4 py-3 rounded"></textarea><br>
    
    
                <button type="submit" class="bg-green-700 rounded"> submit</button><br>
            </div>
      </form>
</div>
  

@endsection
