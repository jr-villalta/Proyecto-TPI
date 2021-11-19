@extends('layouts.app')
@section('content')
<div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-primary rounded shadow-sm pt-3 pl-2 pr-2 pb-3">
                            <!-- Credit card form tabs -->
                            <div class="mx-auto text-center text-light"> <i class="fas fa-credit-card mr-2"></i> Credit card registration </div>
                        </div> <!-- End -->
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-2">
                                <form action="" method="POST" enctype="multipart/form-data"">
                                    <div class="form-group my-2"> <label for="username">
                                        <h6>Card Owner</h6>
                                        </label><input type="text" name="username" placeholder="Card Owner Name" required class="form-control ">
                                    </div>
                                    <div class="form-group my-2"> <label for="cardNumber">
                                            <h6>Card number</h6>
                                        </label>
                                        <div class="input-group h-auto"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                            <div class="input-group-append"> 
                                                <span class="input-group-text text-muted"> <i class="fab fa-cc-visa m-1"></i> <i class="fab fa-cc-mastercard m-1"></i> <i class="fab fa-cc-amex m-1"></i> 
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                        <h6>Expiration Date</h6>
                                                    </span></label>
                                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input type="text" required class="form-control"> </div>
                                        </div>
                                    </div>
                                    <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Sign up </button>
                                </form>
                            </div>
                        </div> <!-- End -->
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script>

    </script>
@endsection