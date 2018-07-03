
@extends('layouts/app')

@section('content')

    <div class="jombotron text-center">
        <?php echo $pavadinimas; ?>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
	
@endsection
