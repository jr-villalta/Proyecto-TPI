@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <h4 class="mt-2 mb-3 pb-1 text-primary h2" style="font-weight: 700;">Add Movie</h4>
                    </div>
                    <form method="POST" action="">
                        @csrf
                        <input type="text" class="form-control mb-4" id="" placeholder="Title" name="title" value="{{ old('title') }}" required autofocus>
                    
                        <textarea class="form-control mb-4" id="" rows="4"  placeholder="Description" name="description" value="{{ old('description') }}" required autofocus style="resize: none;"></textarea>
                        
                        <input class="form-control mb-4" type="number" name="stock" id="" placeholder="Stock" min="0" value="{{ old('stock') }}" required autofocus>

                        <input class="form-control mb-4" type="number" name="retal_price" id="" placeholder="Rental price" min="0" step="0.01" value="{{ old('retal_price') }}" required autofocus>

                        <input class="form-control mb-4" type="number" name="sale_price" id="" placeholder="Sale Price" min="0" step="0.01" value="{{ old('sale_price') }}" required autofocus>
                        
                        <select class="form-select mb-4" name="availability" id="" value="{{ old('sale_price') }}" required autofocus>
                            <option value="1">Available</option>
                            <option value="0">Not available</option>
                        </select>

                        <input class="form-control mb-4" type="file" id="" name="image" value="{{ old('image') }}" required autofocus>
                      
                      <div class="d-grid">
                        <button class="btn btn-primary btn-lg fw-bold mt-3" type="submit">Save</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
@endsection