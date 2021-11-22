@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card my-3 p-2 p-md-5">
            <table class="table table-bordered table-responsive" id="movies" class="display" style="width:100%;">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Estatus</th>
                        <th>Penalty fee</th>
                        <th>Rental price</th>
                        <th>Total</th>
                        <th>Rented date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rentals as $rental)
                        <tr>
                            <td>{{$rental->title}}</td>
                            <td>
                                @if($rental->active == 1)
                                    Active
                                @else
                                    Closed
                                @endif
                            </td>
                            <td>
                                ${{number_format($rental->penalty_fee,2,".",",")}}
                            </td>
                            <td>${{number_format($rental->rental_price,2,".",",")}}</td>
                            <td>${{number_format($rental->total,2,".",",")}}</td>
                            <td>{{$rental->created_at}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:5rem;">
                                        <li><a class="dropdown-item text-primary" href="/movie/details/{{$rental->movie_id}}"><i class="far fa-eye me-1"></i>Watch</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Estatus</th>
                        <th>Penalty fee</th>
                        <th>Rental price</th>
                        <th>Total</th>
                        <th>Rented date</th>
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