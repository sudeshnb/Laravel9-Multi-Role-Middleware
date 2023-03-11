@php
$current_route = request()->route()->getName();
@endphp


<div class="app-sidebar sidebar-shadow">
  <div class="app-header__logo">
      <div class="logo-src"></div>
      <div class="header__pane ml-auto">
          <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
  </div>
  <div class="app-header__mobile-menu">
      <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
              </span>
          </button>
      </div>
  </div>
  <div class="app-header__menu">
      <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
          </button>
      </span>
  </div>    <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
          <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading"> Home</li>
              <li>
                  <a href="{{route('home.admin')}}" class="{{$current_route=='home.admin'?'mm-active':''}} ">
                      <i class="metismenu-icon pe-7s-rocket"></i>
                      Dashboard
                  </a>
              </li>
              <li class="app-sidebar__heading">Products Management</li>
              @if ($current_route=='admin.product')
              <li class="mm-active">
             @elseif ($current_route=='products.create')
             <li class="mm-active">
              @else
              <li>
             @endif
                  <a href="#">
                      <i class="metismenu-icon pe-7s-diamond"></i>
                      Product
                      <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  @if ($current_route=='admin.product')
                  <ul class="mm-show">
                  @else
                  <ul>
                  @endif
                      <li>
                          <a href="{{route('admin.product')}}"  class="{{$current_route=='admin.product'?'mm-active':''}} ">
                              <i class="metismenu-icon"></i>
                              List  Products 
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('products.create') }}" class="{{$current_route=='products.create'?'mm-active':''}} >
                              <i class="metismenu-icon">
                              </i>Add Products
                          </a>
                      </li>
                  </ul>
              </li>
              <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                    Category
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.product')}}"  class="{{$current_route=='admin.product'?'mm-active':''}} ">
                            <i class="metismenu-icon"></i>
                          Add  Category
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.create') }}">
                            <i class="metismenu-icon">
                            </i>List Category
                        </a>
                    </li>
                </ul>
            </li>
              <li>
                  <a href="#">
                      <i class="metismenu-icon pe-7s-car"></i>
                      Customer
                      <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul>
                      <li>
                          <a href="">
                              <i class="metismenu-icon">
                              </i>Add Customer
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <i class="metismenu-icon">
                              </i>List Customer
                          </a>
                      </li>
                  </ul>
              </li>
              <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-car"></i>
                    Report
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="">
                            <i class="metismenu-icon">
                            </i>Product Report
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="metismenu-icon">
                            </i>Customer Report
                        </a>
                    </li>
                    <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Sales Report
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Purchase Report
                      </a>
                  </li>
                  <li>
                    <a href="">
                        <i class="metismenu-icon">
                        </i>Expense Report
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="metismenu-icon">
                        </i>Supplier Report
                    </a>
                </li>
                <li>
                  <a href="">
                      <i class="metismenu-icon">
                      </i>Purchase/Sales Report
                  </a>
              </li>
              <li>
                  <a href="">
                      <i class="metismenu-icon">
                      </i>Purchase Return Report
                  </a>
              </li>
              <li>
                <a href="">
                    <i class="metismenu-icon">
                    </i>Sales Return Report
                </a>
            </li><li>
              <a href="">
                  <i class="metismenu-icon">
                  </i>Close Register Report
              </a>
          </li>
                </ul>
            </li>
              <li  >
                  <a href="">
                      <i class="metismenu-icon pe-7s-display2"></i>
                      Sales
                      <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul>
                    <li>
                        <a href="">
                            <i class="metismenu-icon">
                            </i>POS
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="metismenu-icon">
                            </i>Add Return Invoice
                        </a>
                    </li>
                    <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Ledger Invoice
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Bill To Bill Invoice
                      </a>
                  </li>
                  <li>
                    <a href="">
                        <i class="metismenu-icon">
                        </i>All Invoice
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="metismenu-icon">
                        </i>List Return Invoice
                    </a>
                </li>
                </ul>
              </li>
              {{-- <li class="app-sidebar__heading">Widgets</li> --}}
              <li>
                  <a href="">
                      <i class="metismenu-icon pe-7s-display2"></i>
                      Receipt
                      <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul>
                    <li>
                        <a href="">
                            <i class="metismenu-icon">
                            </i>List Receipt
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="metismenu-icon">
                            </i>Add Receipt
                        </a>
                    </li>
                  </ul>
              </li>
              {{-- <li class="app-sidebar__heading">Forms</li> --}}
              <li>
                <a href="">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Supplier
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                  <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>List Supplier
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Add Supplier
                      </a>
                  </li>
                </ul>
            </li>
              {{-- <li class="app-sidebar__heading">Charts</li> --}}
              <li  >
                <a href="">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Purchase
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                  <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Add Purchase
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="metismenu-icon">
                          </i>Add Return Purchase
                      </a>
                  </li>
                <li>
                  <a href="">
                      <i class="metismenu-icon">
                      </i>List Purchase
                  </a>
              </li>
              <li>
                  <a href="">
                      <i class="metismenu-icon">
                      </i>List Return Purchase
                  </a>
              </li>
              </ul>
            </li>
            <li>
              <a href="">
                  <i class="metismenu-icon pe-7s-display2"></i>
                  Payment
                  <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
              </a>
              <ul>
                <li>
                    <a href="">
                        <i class="metismenu-icon">
                        </i>List Payment
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="metismenu-icon">
                        </i>Add Payment
                    </a>
                </li>
              </ul>
          </li>
          <li>
            <a href="">
                <i class="metismenu-icon pe-7s-display2"></i>
                Inventory Adjustment
                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
              <li>
                  <a href="">
                      <i class="metismenu-icon">
                      </i>List Inventory Adjustment
                  </a>
              </li>
              <li>
                  <a href="">
                      <i class="metismenu-icon">
                      </i>Add Inventory Adjustment
                  </a>
              </li>
            </ul>
        </li>
        <li>
          <a href="">
              <i class="metismenu-icon pe-7s-display2"></i>
              Employee
              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul>
            <li>
                <a href="">
                    <i class="metismenu-icon">
                    </i>List Employee
                </a>
            </li>
            <li>
                <a href="">
                    <i class="metismenu-icon">
                    </i>Add Employee
                </a>
            </li>
            <li>
              <a href="">
                  <i class="metismenu-icon">
                  </i>Update Employee Salary
              </a>
          </li>
          <li>
              <a href="">
                  <i class="metismenu-icon">
                  </i>Salary Amount List
              </a>
          </li>
          <li>
            <a href="">
                <i class="metismenu-icon">
                </i>Employee Records
            </a>
        </li>
        <li>
            <a href="">
                <i class="metismenu-icon">
                </i>Add Employee
            </a>
        </li>
          </ul>
      </li>
              <li>
                <a href="">
                    <i class="metismenu-icon pe-7s-graph2">
                    </i>All Invoice
                </a>
            </li>
          </ul>
      </div>
  </div>

</div>