@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 text-center mb-5">
			<h2 class="heading-section">Users</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-wrap">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th>ID no.</th>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Email</th>
				    </tr>
				  </thead>
				  <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td> {{$user->id}} </td>
                            <td> {{$user->Nom}} </td>
                            <td> {{$user->prenom}} </td>
                            <td> {{$user->email}} </td>
                        </tr>
                    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection