@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card my-3 p-2 p-md-5">
            <table class="table table-bordered table-responsive" id="movies" class="display" style="width:100%;">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Total</th>
                        <th>Acquisition date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shoppings as $shopping)
                        <tr>
                            <td>{{$shopping->title}}</td>
                            <td>{{$shopping->total}}</td>
                            <td>{{$shopping->created_at}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:5rem;">
                                        <li><a class="dropdown-item text-primary" href="/movie/details/{{$shopping->movie_id}}"><i class="far fa-eye me-1"></i>Watch</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Total</th>
                        <th>Acquisition date</th>
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