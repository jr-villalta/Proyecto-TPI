@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card my-3 p-2 p-md-5">
            <table class="table table-bordered table-responsive display nowrap" id="users" class="display"  cellspacing="0" style="width:100%;">
                <thead>
                    <tr>
                        <th data-priority="2">Id</th>
                        <th data-priority="1">Name</th>
                        <th data-priority="2">Email</th>
                        <th data-priority="1">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:5rem;">
                                        <li><a class="dropdown-item text-primary" href="user/{{$user->id}}"><i class="far fa-eye me-1"></i>Details</a></li>
                                        <form action="/user/roleUpdate/{{$user->id}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if ($user->is_admin == 1)
                                                <button class="dropdown-item text-warning" type="submit" onclick="return confirm('Are you sure to demote the admin?')"><i class="far fa-user me-1"></i>Demote</button>
                                            @else
                                                <button class="dropdown-item text-warning" type="submit" onclick="return confirm('Are you sure to promote the user?')"><i class="fas fa-shield-alt "></i>Promote</button>    
                                            @endif
                                        </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
@endsection
@section('script')
	<script>
		$(document).ready( function () {
    		$('#users').DataTable({
                responsive: true,
            })
		})	
	</script>	
@endsection