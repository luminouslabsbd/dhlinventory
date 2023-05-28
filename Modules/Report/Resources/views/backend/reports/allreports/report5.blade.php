@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">{{ __($module_action) }}</small>

            <x-slot name="subtitle">
                Receipt by vendor (central store only)
            </x-slot>
            <x-slot name="toolbar">
                @can('add_'.$module_name)
                <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}" />
                @endcan

                @can('restore_'.$module_name)
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='{{ route("backend.$module_name.trashed") }}'>
                                <i class="fas fa-eye-slash"></i> @lang("View trash")
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </div>
                @endcan
            </x-slot>
        </x-backend.section-header>

        <style>
            .report-table-box {
                position: relative;
                margin: 20px auto;
            }

            .report-table-filter {
                position: relative;
                margin: 30px auto;
            }
        </style>
      
        <div class="reports-table-wrapper">
            <div class="report-table-filter">
                <div class="row">
                    <div class="col-2">
                        <div class="stf-group">
                            <div class="form-group">
                                <label for="">Start Date</label> 
                                <input type="date" id="end-date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="stf-group">
                            <div class="form-group">
                                <label for="">End Date</label> 
                                <input type="date" id="end-date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="stf-group">
                            <div class="form-group">
                                <label for="">Category </label>
                                <select name="" id="" class="form-control">
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="stf-group">
                            <div class="form-group">
                                <label for="">Item Code</label>
                                <input type="text" class="form-control" placeholder="Item Code">
                            </div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="stf-group">
                            <div class="form-group">
                                <label for="">Item Name</label>
                                <input type="text" class="form-control" placeholder="Item Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="report-table-box">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Vendor Code</th>
                                    <th>Vendor Name</th>
                                    
                                    <th>Product category</th>
                                    <th>Product sub-category</th>
                                    <th>Product Name</th>
                                    <th>UoM</th> 
                                    <th>Rate (BDT)</th>
                                    <th>Quantity (Qty)</th>
                                    <th>Total Amount (BDT)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>02/05/2023</td>
                                    <td>14</td>
                                    <td>Vendor 1</td>
                                    <td>Category 1</td>
                                    <td>Sub Cat 1</td>
                                    <td>Product 1</td>
                                    
                                    <td>7</td>
                                    <td>6</td>
                                    <td>76</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {{-- Total {{ $$module_name->total() }} {{ ucwords($module_name) }} --}}
                </div>
            </div>
            <div class="col-5">
                <div class="float-end">
                    {!! $$module_name->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection