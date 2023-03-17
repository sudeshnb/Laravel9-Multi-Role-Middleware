@extends('roles.admin.index')

@section('content-header')
<div class="app-page-title">
  <div class="page-title-wrapper">
      <div class="page-title-heading">
          <div class="page-title-icon">
              <i class="pe-7s-car icon-gradient bg-mean-fruit">
              </i>
          </div>
          <div>Add New Product
              <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
              </div>
          </div>
      </div>   
  </div>
</div> 
@endsection


@section('body')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Grid</h5>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="position-relative row form-group">
                <label for="ProductName" class="col-sm-2 col-form-label">Name*</label>
                <div class="col-sm-10">
                    <input name="name" id="name" placeholder="with a Product Name" type="text" class="form-control" required>
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="price" class="col-sm-2 col-form-label">Price* </label>
                <div class="col-md-4">
                    <input name="price" id="price" placeholder="Product price" type="text" class="form-control">
                    @error('price')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <label for="price" class="col-sm-2 col-form-label">Quantity </label>
                <div class="col-md-4">
                    <input name="quantity" id="quantity" placeholder="Product quantity" type="text" class="form-control">
                    @error('quantity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Description*</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control"></textarea>
                    @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="category" class="col-sm-2 col-form-label">Select category*</label>
                <div class="col-sm-10">
                    <select name="category" id="category" class="form-control">
                        <option value="">Select</option>
                        <option value="Value 1">Value 1</option>
                        <option value="Value 2">Value 2</option>
                        <option value="Value 3">Value 3</option>
                        <option value="Value 4">Value 4</option>
                        <option value="Value 5">Value 5</option>
                    </select>
                </div>
                @error('category')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="position-relative row form-group">
                <label for="sub_category" class="col-sm-2 col-form-label">Sub Category </label>
                <div class="col-md-4">
                    <input name="sub_category" id="sub_category" placeholder="Product sub category" type="text" class="form-control">
                    @error('sub_category')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <label for="alert_quantity" class="col-sm-2 col-form-label">Alert Quantity </label>
                <div class="col-md-4">
                    <input name="alert_quantity" id="alert_quantity" placeholder="Product alert Quantity" type="text" class="form-control">
                    @error('alert_quantity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="position-relative row form-group">
                <label for="picture" class="col-sm-2 col-form-label">Product Picture*</label>
                <div class="col-sm-10">
                    <input name="picture" id="picture" type="file" class="form-control-file">
                    {{-- <input name="picture" id="picture" placeholder="Product Picture" type="text" class="form-control"> --}}

                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                @error('picture')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection