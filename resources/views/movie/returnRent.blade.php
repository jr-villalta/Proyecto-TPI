@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto">
                <div class="p-md-3 mx-md-0 my-3 my-md-0 row">
                    <div class="col-12 mt-3 mt-sm-0 d-flex flex-column justify-content-center">
                        <div class="">
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class=" text-success">{{$rentl->title}}</strong>
                            </div>
                            <hr>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Rented date:<span class="mb-0 text-success ms-2">{{$rentl->created_at}}</span></strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Rented:<span class="mb-0 text-success ms-2">{{$rentl->days_rented}} days</span></strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                               <strong class="">Estimated return date:<span class="mb-0 text-success ms-2">{{($rentl->estimated_delivery_date)}}</span></strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Return date:<span class="mb-0 text-success ms-2">{{($rentl->delivery_date)->format('Y-m-d H:i:s')}}</span></strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Delay return:<span class="mb-0 text-success ms-2">{{abs($rentl->days_late)}} days</span></strong>
                            </div>
                            <hr>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Penalty fee:<span class="mb-0 text-success ms-2">${{number_format($rentl->penalty_fee,2,".",",")}}</span></strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Rental price:<span class="mb-0 text-success ms-2">${{number_format($rentl->rental_price,2,".",",")}}</span></strong>
                            </div>
                            <hr>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Total:</i><span class="mb-0 text-success ms-2">${{number_format($rentl->total,2,".",",")}}</span></strong>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/home" class="btn btn-primary w-100 mt-3 text-uppercase mx-auto" style="font-weight: 500">OK</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection