@extends('layouts.app')
@section('content')
<div class="container py-5 ">
    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="background-color: white; border-top-left-radius:5px; border-top-right-radius:5px;">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="true">Payment Method</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
        </li>
      </ul>
      <div class="tab-content p-3" id="pills-tabContent" style="background-color: white; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">
        <div class="tab-pane fade show active" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">

            <div class="row w-100 m-0">
                <div class="col-11 col-md-8 col-lg-6 m-auto my-3 p-0">
                    @if ($cardexists)
                    <div class="py-2 alert-primary d-flex justify-content-between align-items-center" role="alert" style="border-radius: 5px">
                        <div class="d-flex justify-content-center align-items-center ms-2">
                            <i class="far fa-credit-card h1 mb-0 me-2"></i>
                            <span class="h6 mb-0">**** **** **** {{substr($card_number,12,16)}} </span>
                        </div>
                        <form action="/creditcard/{{$card_id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger me-2"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                    @else
                        <form action="/creditcard" method="POST" >
                            @csrf
                            <div class="form-group my-2"> <label for="name">
                                <h6>Card Owner</h6>
                                </label><input type="name" name="card_owner" id="card_owner" placeholder="Card Owner Name" required class="form-control ">
                                    <strong class="text-danger" id="card_owner_error"></strong>
                            </div>
                            <div class="form-group my-2"> <label for="card_number">
                                    <h6>Card number</h6>
                                </label>
                                <div class="input-group h-auto"> <input type="number" name="card_number" id="card_number" placeholder="VISA / MASTERCARD" class="form-control " required>
                                    <div class="input-group-append"> 
                                        <span class="input-group-text"> <i class="fab fa-cc-visa m-1"></i><i class="fab fa-cc-mastercard"></i></span> 
                                    </div>
                                </div>
                                
                                    <strong class="text-danger" id="card_number_error"></strong>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group"> <label><span class="hidden-xs">
                                                <h6>Expiration Date</h6>
                                            </span></label>
                                        <div class="input-group"> <input type="number" placeholder="MM" name="MM" id="MM" class="form-control" required> <input type="number" placeholder="YY" name="YY" id="YY" class="form-control" required> </div>
                                        <span class="mx-1">
                                            <strong class="text-danger" id="MM_YY_error"></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-4">
                                        <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                            <h6>CVV {{-- <i class="fa fa-question-circle d-inline"> --}}</i></h6>
                                        </label> <input type="number" name="CVV" id="CVV" required class="form-control">
                                            <strong class="text-danger" id="CVV_error"></strong>
                                    </div>
                                    </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg fw-bold mt-3" type="submit" onclick = "return cardValidator.validated();">Save Card</button>
                            </div>                                    
                        </form>
                    @endif
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
                <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto" style="border: none">
                    <div class="card-body p-md-5 mx-md-4">
                        <i class="fas fa-user text-primary text-center w-100" style="font-size: 80px;"></i>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item"><strong class="me-2">Name:</strong>{{$user->name}}</li>
                            <li class="list-group-item"><strong class="me-2">Email Address:</strong>{{$user->email}}</li>
                            <li class="list-group-item"><strong class="me-2">Member since:</strong>{{$user->created_at}}</li>
                          </ul>
                      </div>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

@section('script')
    <script>
        const cardValidator = (function(){
            
            function validatedCardOwner(cardOwner){
                if(cardOwner == ""){
                    $('#card_owner_error').text('Card owner is required')
                    return false
                }
                else{
                    $('#card_owner_error').text('')
                    return true
                }
            }

            function validatedCardNumber(cardNumber){
                const size = cardNumber.length
                if(cardNumber == ""){
                    $('#card_number_error').text('Card number is required')
                    return false
                }
                if(size != 16){
                    $('#card_number_error').text('Card number invalid size')
                    return false
                }
                if(size == 16){
                    if(cardNumber.substr(0,1) == '4'){
                        $('#card_number_error').text('')
                        return true
                    }
                    if(cardNumber.substr(0,1) == '5'){
                        $('#card_number_error').text('')
                        return true
                    }
                    else{
                        $('#card_number_error').text('Card number invalid')
                        return false
                    }
                }
            }

            function validatedExpirationDate(MM,YY){
                sizeM = MM.length
                sizeY = YY.length
                const day = new Date()
                const year = parseInt(day.getFullYear().toString().substr(2,2), 10)
                const month = day.getMonth()+1

                if(sizeM <1 || sizeY <1){
                    $('#MM_YY_error').text('Expiration date is required')
                    return false
                }
                if(sizeM !=2 || sizeY !=2){
                    $('#MM_YY_error').text('Format invalid, example: 01/24')
                    return false
                }
                if(MM > 12 || MM < 1){
                    $('#MM_YY_error').text('The month must be between 1 and 12')
                    return false
                }
                if(YY == year){
                    if(MM<=month){
                        $('#MM_YY_error').text('Your card has expired')
                        return false
                    }
                    else{
                        $('#MM_YY_error').text('')
                        return true
                    }
                }
                if(YY < year){
                    $('#MM_YY_error').text('Your card has expired')
                    return false;
                }
                else{
                    $('#MM_YY_error').text('')
                    return true
                }
                
            }

            function validatedCVV(CVV){
                let size = CVV.length
                if(size < 1){
                    $('#CVV_error').text('CVV is required')
                    return false
                }
                if(size < 3 || size > 3){
                    $('#CVV_error').text('Valid CVV is 3 digits ')
                    return false
                }
                else{
                    $('#CVV_error').text('')
                    return true
                }
            }

            function validated(){
                const cardOwner = $('#card_owner').val()
                const cardNumber = $('#card_number').val()
                const MM = $('#MM').val()
                const YY = $('#YY').val()
                const CVV = $('#CVV').val()

                let fl1 = validatedCardOwner(cardOwner)
                let fl2 = validatedCardNumber(cardNumber)
                let fl3 = validatedExpirationDate(MM,YY)
                let fl4 = validatedCVV(CVV)

                if(fl1 && fl2 && fl3 && fl4){
                    return true
                }
                else{
                    return false
                }
            }
            return {validated}
        })()
        
    </script>
@endsection