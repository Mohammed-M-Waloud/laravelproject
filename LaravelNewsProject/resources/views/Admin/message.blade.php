@if (Session::has('success'))
    <h2 class='text-success'>success {{ Session::get('success') }}</h2>
@endif
@if ($errors->any())
    <h2 class='text-danger'>errore <br>
        @foreach ($errors->all() as $error )
            {{$error}}
            <br>
        @endforeach
    </h2>
@endif