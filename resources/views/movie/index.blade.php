@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/movie/create" class="btn btn-primary m-auto">Add movie</a>
        <div class="card my-3 p-2 p-md-5">
            <table class="table table-bordered table-responsive" id="movies" class="display" style="width:100%;">
                <thead>
                    <tr>
                        <th data-priority="2">Id</th>
                        <th data-priority="1">Title</th>
                        <th data-priority="2">Stock</th>
                        <th data-priority="1">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{$movie->id}}</td>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->stock}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:5rem;">
                                        <li><a class="dropdown-item text-primary" href="movie/{{$movie->id}}"><i class="far fa-eye me-1"></i>Details</a></li>
                                        <li><a class="dropdown-item text-warning" href="movie/{{$movie->id}}/edit"><i class="far fa-edit me-1"></i>Edit</a></li>
                                        <form action="/movie/{{$movie->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item text-danger" type="submit" onclick="return confirm('Confirm delete?')"><i class="far fa-trash-alt me-1"></i>Delete</button>
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
    		$('#movies').DataTable({
                responsive: true,
            })
		})	
	</script>	
@endsection

{{-- columnDefs: [{responsivePriority: 2,targets: 0,visible: true,searchable: true}] --}}