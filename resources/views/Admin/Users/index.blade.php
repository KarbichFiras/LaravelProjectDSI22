@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 text-center mb-5">
			<h2 class="heading-section">Users</h2>
		</div>
		<a href="{{ route('Admin.create') }}" class="btn btn-outline-primary float-right" >aad a new user</a>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="table-wrap">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th>user id</th>
					  <th>Last Name</th>
				      <th>first Name</th>
				      <th>Email</th>
					  <th>delete/update</th>
				    </tr>
				  </thead>
				  <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td> {{$key}} </td>
                            <td> {{$user->nom}} </td>
                            <td> {{$user->prenom}} </td>
                            <td> {{$user->email}} </td>
							<td><a href = ""><button >Delete</button></a>
								<a href = "{{ route('Admin.edit', [$user -> id]) }}"><button >Edit</button></a>
								<a href = "{{ route('Admin.show', [$user -> id]) }}"><button >Show</button></a></td>
                        	</tr>
                    @endforeach
				  </tbody>
				</table>
				<div class="text-center">
					{{$users->links()}}
				</div>
				
		</div>
	</div>
</div>
@endsection