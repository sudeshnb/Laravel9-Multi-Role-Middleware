@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Products</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection
@section('body')
    
   <!-- Main content -->
   <section class="content">
    <!-- Default box -->
    <div class="card">
      
      <div class="card-body">
        <table id="product-table" class="table table-bordered table-striped">
        
            <thead>
                <tr>
                    <th style="width: 2%">Id</th>
                    <th style="width: 20%">Product Name</th>
                    <th style="width: 10%">Product Image</th>
                    <th style="width: 30%">Product description</th>
                    <th style="width: 10%" >Product price</th>
                    <th style="width: 8%" class="text-center">Status</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            
            <tbody >
                @for ($i = 0; $i < 50; $i++)
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td>
                        <a>Product Name </a><br>
                        <small>Product category</small>
                    </td>
                    <td>
                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                    </td>
                    <td ><small>57% Complete</small></td>
                    <td class="text-right">1500.00</td>
                    <td class="project-state text-center">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder"></i>   View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt"></i>   Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"></i>    Delete
                        </a>
                    </td>
                </tr>
                @endfor
                
                
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
  <!-- /.content -->
  
@endsection