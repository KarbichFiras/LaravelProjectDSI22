@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 text-center mb-5">
			<h2 class="heading-section">users roles</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-wrap">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th>ID no.</th>
				      <th>Name</th>
				    </tr>
				  </thead>
				  <tbody>
                    @foreach($user_roles as $user_role)
                        <tr>
                            <td> {{$user_role->user_id}} </td>
                            <td> {{$user_role->role_id}} </td>
                        </tr>
                    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection