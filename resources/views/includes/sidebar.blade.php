 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="{{ route('backend.dashboard') }}" class="brand-link">
         <img src="{{ asset('assets/dist/img/DHL-Logo.png') }}" alt="DHL Logo" class="elevation-2"
             style="height: 100px;width: 230px;">
         {{--      <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
     </a>
     <div class="sidebar">
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 @if (Auth::user()->hasRole('SuperAdmin'))
                     <li class="nav-item">
                         <a href="{{ route('backend.dashboard') }}"
                             class="nav-link {{ Route::is('backend.dashboard') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('backend.route') }}"
                             class="nav-link {{ Route::is('backend.route*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Route
                             </p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('backend.vendor') }}"
                             class="nav-link {{ Route::is('backend.vendor*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Vendor
                             </p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('backend.vehicle') }}"
                             class="nav-link {{ Route::is('backend.vehicle*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Vehicle
                             </p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('backend.request.product') }}"
                             class="nav-link {{ Route::is('backend.request.product') || Route::is('backend.request.product.status.active*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Product Approval
                             </p>
                         </a>
                     </li>
                     {{-- <li class="nav-item">
                         <a href="{{ route('backend.request.product.approved') }}"
                             class="nav-link {{ Route::is('backend.request.product.approved*') || Route::is('backend.request.product.qty.check*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Central Store
                             </p>
                         </a>
                     </li> --}}

                     {{-- menu-open --}}

                     <li
                         class="nav-item {{ Route::is('backend.category*') || Route::is('backend.sub.category*') || Route::is('backend.uom*') || Route::is('backend.product*') ? 'menu-open' : '' }}">
                         <a href="#"
                             class="nav-link {{ Route::is('backend.category*') || Route::is('backend.sub.category*') || Route::is('backend.uom*') || Route::is('backend.product*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Products
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('backend.category') }}"
                                     class="nav-link {{ Route::is('backend.category*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Category
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.sub.category') }}"
                                     class="nav-link {{ Route::is('backend.sub.category*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Sub Category
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.uom') }}"
                                     class="nav-link {{ Route::is('backend.uom*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         UOM
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.product') }}"
                                     class="nav-link {{ Route::is('backend.product*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Product
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>



                     <li
                         class="nav-item  {{ Route::is('backend.user.list*') || Route::is('backend.role.list*') ? 'menu-open' : '' }}">
                         <a href="#"
                             class="nav-link {{ Route::is('backend.user.list*') || Route::is('backend.role.list*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 User Management
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('backend.user.list') }}"
                                     class="nav-link {{ Route::is('backend.user.list*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>User List</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.role.list') }}"
                                     class="nav-link {{ Route::is('backend.role.list*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Create Role</p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li
                         class="nav-item {{ Route::is('backend.reports.packaging.material*') || Route::is('backend.reports.quantity.movement*') || Route::is('backend.reports.value.movement*') || Route::is('backend.reports.product.movement*') || Route::is('backend.reports.vendor*') || Route::is('backend.reports.request*') || Route::is('backend.reports.price.fluctuation*') || Route::is('backend.reports.stock*') || Route::is('backend.reports.analysis*') ? 'menu-open' : '' }}">
                         <a href="#"
                             class="nav-link {{ Route::is('backend.reports.packaging.material*') || Route::is('backend.reports.quantity.movement*') || Route::is('backend.reports.value.movement*') || Route::is('backend.reports.product.movement*') || Route::is('backend.reports.vendor*') || Route::is('backend.reports.request*') || Route::is('backend.reports.price.fluctuation*') || Route::is('backend.reports.stock*') || Route::is('backend.reports.analysis*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Reports
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.packaging.material') }}"
                                     class="nav-link {{ Route::is('backend.reports.packaging.material*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Packaging Material
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.quantity.movement') }}"
                                     class="nav-link {{ Route::is('backend.reports.quantity.movement*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Quantity Movement
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.value.movement') }}"
                                     class="nav-link {{ Route::is('backend.reports.value.movement*') ? 'active' : '' }}">

                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Value Movement
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.product.movement') }}"
                                     class="nav-link {{ Route::is('backend.reports.product.movement*') ? 'active' : '' }}">

                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Product Movement
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.vendor') }}"
                                     class="nav-link {{ Route::is('backend.reports.vendor*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Vendor
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.request') }}"
                                     class="nav-link {{ Route::is('backend.reports.request*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Request
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.price.fluctuation') }}"
                                     class="nav-link {{ Route::is('backend.reports.price.fluctuation*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Price Fluctuation
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.stock') }}"
                                     class="nav-link {{ Route::is('backend.reports.stock*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Stock
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('backend.reports.analysis') }}"
                                     class="nav-link {{ Route::is('backend.reports.analysis*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Free Analysis
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 @elseif (Auth::user()->hasRole('Requisition'))
                     <li class="nav-item">
                         <a href="{{ route('backend.dashboard') }}"
                             class="nav-link {{ Route::is('backend.dashboard') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>
                     <li class="nav-item {{ Route::is('backend.request.product.commercial') ? 'menu-open' : '' }}">
                         <a href="#"
                             class="nav-link {{ Route::is('backend.request.product.commercial*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Request Requisition
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">

                             <li class="nav-item">
                                 <a href="{{ route('backend.request.product.commercial') }}"
                                     class="nav-link {{ Route::is('backend.request.product.commercial*') || Route::is('backend.request.product.create*') ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Non Retail
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link ">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Retail
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link ">
                                     <i class="nav-icon fas fa-th"></i>
                                     <p>
                                         Service Center
                                     </p>
                                 </a>
                             </li>
                             {{-- <li class="nav-item">
                        <a href="{{route('backend.request.product')}}" class="nav-link {{Route::is('backend.request.product') || Route::is('backend.request.product.status.active*') ? "active" : ""}}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Product Review
                            </p>
                        </a>
                    </li> --}}
                             {{-- <li class="nav-item">
                        <a href="{{route('backend.request.product.approved')}}" class="nav-link {{Route::is('backend.request.product.approved*') || Route::is('backend.request.product.qty.check*') ? "active" : ""}}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                               Approved Product
                            </p>
                        </a>
                    </li> --}}
                         </ul>
                     </li>
                 @elseif (Auth::user()->hasRole('Central Store'))
                     <li class="nav-item">
                         <a href="{{ route('backend.dashboard') }}"
                             class="nav-link {{ Route::is('backend.dashboard') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('backend.request.product.approved') }}"
                             class="nav-link {{ Route::is('backend.request.product.approved*') || Route::is('backend.request.product.qty.check*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Central Store
                             </p>
                         </a>
                     </li>
                 @endif
             </ul>
         </nav>
     </div>
 </aside>
