@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto">
                <div class="card-body p-md-5 mx-md-4">
                    <i class="fas fa-user text-primary text-center w-100" style="font-size: 80px;"></i>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong class="me-2">Name:</strong>{{$user->name}}</li>
                        <li class="list-group-item"><strong class="me-2">Email Address:</strong>{{$user->email}}</li>
                        <li class="list-group-item"><strong class="me-2">Role:</strong>
                            @if ($user->is_admin == 1)
                                {{ __('Admin') }}
                            @else
                                {{ __('User') }} 
                            @endif
                        </li>
                        <li class="list-group-item"><strong class="me-2">Member since:</strong>{{$user->created_at}}</li>
                        <li class="list-group-item text-center mt-2"><a href="/user" class="btn btn-primary px-4">Back</a></li>
                      </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection