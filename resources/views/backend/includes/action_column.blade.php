<div class="text-end">
    {{-- @if($module_name == 'products')
        @if(auth()->user()->email == "central@store.com")
        <a href="{{route("backend.$module_name.accept", $data)}}" class="btn btn-info btn-sm mt-1" data-toggle="tooltip" aria-label="Change Password" data-coreui-original-title="Change Password"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        @endif
        @if($data->accept == 0)
            <a href="{{route("backend.$module_name.accept", $data)}}" class="btn btn-info btn-sm mt-1" data-toggle="tooltip" aria-label="Change Password" data-coreui-original-title="Change Password"><i class="fa fa-paper-plane"></i></a>
        @endif
    @endif --}}
    @can('edit_'.$module_name)
    <x-buttons.edit route='{!!route("backend.$module_name.edit", $data)!!}' title="{{__('Edit')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    @endcan
    <x-buttons.show route='{!!route("backend.$module_name.show", $data)!!}' title="{{__('Show')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
</div>
