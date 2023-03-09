@extends('roles.admin.index')

@section('content-header')
<div class="app-page-title">
  <div class="page-title-wrapper">
      <div class="page-title-heading">
          <div class="page-title-icon">
              <i class="pe-7s-car icon-gradient bg-mean-fruit">
              </i>
          </div>
          <div>Products Analytics
              <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
              </div>
          </div>
      </div>   
  </div>
</div> 
@endsection
@section('body')
    
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
  <li class="nav-item">
      <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
          <span>Card Tabs</span>
      </a>
  </li>
  <li class="nav-item">
      <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
          <span>Animated Lines</span>
      </a>
  </li>
  <li class="nav-item">
      <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
          <span>Basic</span>
      </a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
          <div class="col-md-6">
              <div class="main-card mb-3 card">
                  <div class="card-header">
                    <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Header with Tabs
                  </div>
                  <div class="card-body">
                  </div>
                  <div class="d-block text-right card-footer">
                      <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="mb-3 card">
                  <div class="card-header-tab card-header">
                      <div class="card-header-title">
                          <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                          Header Alternate Tabs
                      </div>              
                  </div>
                  <div class="card-body">                    
                  </div>
                  <div class="d-block text-right card-footer">
                      <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Delete</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
      <div class="row">
        <div class="col-md-6">
          <div class="main-card mb-3 card">
              <div class="card-header">
                <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Header with Tabs
              </div>
              <div class="card-body">
              </div>
              <div class="d-block text-right card-footer">
                  <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="mb-3 card">
              <div class="card-header-tab card-header">
                  <div class="card-header-title">
                      <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                      Header Alternate Tabs
                  </div>              
              </div>
              <div class="card-body">                    
              </div>
              <div class="d-block text-right card-footer">
                  <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Delete</a>
              </div>
          </div>
      </div>
      </div>

  </div>
  <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
      <div class="row">
        <div class="col-md-6">
          <div class="main-card mb-3 card">
              <div class="card-header">
                <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Header with Tabs
              </div>
              <div class="card-body">
              </div>
              <div class="d-block text-right card-footer">
                  <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="mb-3 card">
              <div class="card-header-tab card-header">
                  <div class="card-header-title">
                      <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                      Header Alternate Tabs
                  </div>              
              </div>
              <div class="card-body">                    
              </div>
              <div class="d-block text-right card-footer">
                  <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Delete</a>
              </div>
          </div>
      </div>
      </div>
  </div>
</div>
  
@endsection