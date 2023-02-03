@if(count($errors)>0)

        @foreach ( $errors->all() as $error)
        <div>
            <span class="bg-red-500 rounded">
                {{ $error }}
            </span>
        </div>
        @endforeach
@endif

@if(session('success'))
  <div >
    <span class="bg-green-500 rounded">
        {{ session('success') }}
    </span>
   </div>
@endif

@if(session('error'))
<div>
    <span class="bg-red-500 rounded">
        {{ session('error') }}
    </span>
   </div>
@endif
