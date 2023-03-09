@extends('roles.admin.index')

@section('content-header')
<div class="app-page-title">
  <div class="page-title-wrapper">
      <div class="page-title-heading">
          <div class="page-title-icon">
              <i class="pe-7s-car icon-gradient bg-mean-fruit">
              </i>
          </div>
          <div>Show Product
              <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
              </div>
          </div>
      </div>   
  </div>
</div> 
@endsection


@section('body')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>