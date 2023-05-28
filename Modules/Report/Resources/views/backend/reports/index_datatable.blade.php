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
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
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
            ul.grl-list {
                position: relative;
                padding: 0px;
                margin: 0px auto;
                list-style-type: none;
            }

            ul.grl-list li {
                position: relative;
                margin-bottom: 10px;
            }

            .generated-reports-lists {
                position: relative;
                border: 1px solid #fc0;
                margin: 10px auto;
                padding: 20px;
                border-radius: 5px;
            }

            ul.grl-list li a {
                color: #000;
                text-decoration: underline;
            }

            ul.grl-list {
                max-width: 620px;
                text-align: left;
                margin: 10px auto;
            }

            ul.grl-list li a {
                background-color: #dbdbdb;
                padding: 10px 20px;
                display: block;
                border-radius: 3px;
            }
        </style>
        <div class="row">
            <div class="col">
                <div class="generated-reports-lists">
                    <ul class="grl-list">
                        <li><a href="/admin/reports/report1">i. Vehicle Route wise Packaging Material issue report print</a></li>
                        <li><a href="/admin/reports/report2">ii. Movement report by quantity (both central and sub store)</a></li>
                        <li><a href="/admin/reports/report3">iii. Movement report by value (both central and sub store)</a></li>
                        <li><a href="/admin/reports/report4">iv. Movement report by Product Category, Sub-category, Product Name & Code</a></li>
                        <li><a href="/admin/reports/report5">v. Receipt by vendor (central store only)</a></li>
                        <li><a href="/admin/reports/report6">vi. Report by Requestor</a></li>
                        <li><a href="/admin/reports/report7">vii. Price fluctuation report</a></li>
                        <li><a href="/admin/reports/report8">viii. Stock report by customer, vehicle and sub-store etc.</a></li>
                        <li><a href="/admin/reports/report9">ix. Free Analysis Report</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="row mt-4">
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                @lang("report::text.name")
                            </th>
                            <th>
                                @lang("report::text.updated_at")
                            </th>
                            <th class="text-end">
                                @lang("report::text.action")
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div> --}}
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div>
            <div class="col-5">
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">

@endpush

@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="module" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

<script type="module">
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: true,
        responsive: true,
        ajax: '{{ route("backend.$module_name.index_data") }}',
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'updated_at',
                name: 'updated_at'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });
</script>
@endpush