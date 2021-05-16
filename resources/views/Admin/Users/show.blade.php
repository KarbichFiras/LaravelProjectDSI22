@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 text-center mb-5">
			<h2 class="heading-section">user details</h2>
		</div>
	</div>
	<div class="card text-center">
	  <div class="card-header">
	  {{ $user->nom . ' ' . $user->prenom }}
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">{{ $user->email }}</h5>
	    <a href="#" class="btn btn-primary">Go somewhere</a>
		<a href="#" class="btn btn-primary">Go somewhere</a>
	  </div>
	</div>
	
</div>
@endsection