@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <h4 class="mt-2 mb-3 pb-1 text-primary h2" style="font-weight: 700;">Edit Movie</h4>
                    </div>
                    <form method="POST" action="/movie/{{$movie->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="" placeholder="Title" name="title" value="{{ old('title',$movie->title) }}" required autofocus>
                          @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <textarea class="form-control @error('description') is-invalid @enderror" id="" rows="4"  placeholder="Description" name="description" value="" required autofocus style="resize: none;">{{ old('description',$movie->description) }}</textarea>
                          @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <input class="form-control @error('stock') is-invalid @enderror" type="number" name="stock" id="" placeholder="Stock" min="0" value="{{ old('stock',$movie->stock) }}" required autofocus>
                          @error('stock')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <input class="form-control @error('rental_price') is-invalid @enderror" type="number" name="rental_price" id="" placeholder="Rental price" min="0" step="0.01" value="{{ old('rental_price',$movie->rental_price) }}" required autofocus>
                          @error('rental_price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <input class="form-control  @error('sale_price') is-invalid @enderror" type="number" name="sale_price" id="" placeholder="Sale Price" min="0" step="0.01" value="{{ old('sale_price',$movie->sale_price) }}" required autofocus>
                          @error('sale_price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <select class="form-select @error('availability') is-invalid @enderror" name="availability" id="" value="{{ old('availability',$movie->availability) }}" required autofocus>
                            @if($movie->availability == 1)
                              <option value="1" selected>Available</option>
                              <option value="0">Not available</option> 
                            @else
                              <option value="1">Available</option>
                              <option value="0" selected>Not available</option>
                            @endif
                          </select>
                          @error('availability')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="mb-4">
                          <input class="form-control @error('image') is-invalid @enderror" type="file" id="" name="image" value="{{ old('image',$movie->image) }}" required autofocus>
                          @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      
                      <div class="d-grid">
                        <button class="btn btn-primary btn-lg fw-bold mt-3" type="submit">Save</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
@endsection