@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.properties.title')</h3>
    @can('property_create')
    <p>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('property_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.properties.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.properties.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($properties) > 0 ? 'datatable' : '' }} @can('property_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('property_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.properties.fields.transaction')</th>
                        <th>@lang('quickadmin.properties.fields.type')</th>
                        <th>@lang('quickadmin.properties.fields.cep')</th>
                        <th>@lang('quickadmin.properties.fields.state')</th>
                        <th>@lang('quickadmin.properties.fields.city')</th>
                        <th>@lang('quickadmin.properties.fields.neighborhood')</th>
                        <th>@lang('quickadmin.properties.fields.address')</th>
                        <th>@lang('quickadmin.properties.fields.number')</th>
                        <th>@lang('quickadmin.properties.fields.complement')</th>
                        <th>@lang('quickadmin.properties.fields.rooms')</th>
                        <th>@lang('quickadmin.properties.fields.suites')</th>
                        <th>@lang('quickadmin.properties.fields.parking-slots')</th>
                        <th>@lang('quickadmin.properties.fields.bathrooms')</th>
                        <th>@lang('quickadmin.properties.fields.size')</th>
                        <th>@lang('quickadmin.properties.fields.land-size')</th>
                        <th>@lang('quickadmin.properties.fields.description')</th>
                        <th>@lang('quickadmin.properties.fields.price')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($properties) > 0)
                        @foreach ($properties as $property)
                            <tr data-entry-id="{{ $property->id }}">
                                @can('property_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='transaction'>{{ $property->transaction }}</td>
                                <td field-key='type'>{{ $property->type }}</td>
                                <td field-key='cep'>{{ $property->cep }}</td>
                                <td field-key='state'>{{ $property->state }}</td>
                                <td field-key='city'>{{ $property->city }}</td>
                                <td field-key='neighborhood'>{{ $property->neighborhood }}</td>
                                <td field-key='address'>{{ $property->address }}</td>
                                <td field-key='number'>{{ $property->number }}</td>
                                <td field-key='complement'>{{ $property->complement }}</td>
                                <td field-key='rooms'>{{ $property->rooms }}</td>
                                <td field-key='suites'>{{ $property->suites }}</td>
                                <td field-key='parking_slots'>{{ $property->parking_slots }}</td>
                                <td field-key='bathrooms'>{{ $property->bathrooms }}</td>
                                <td field-key='size'>{{ $property->size }}</td>
                                <td field-key='land_size'>{{ $property->land_size }}</td>
                                <td field-key='description'>{{ $property->description }}</td>
                                <td field-key='price'>{{ $property->price }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('property_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.properties.restore', $property->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('property_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.properties.perma_del', $property->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('property_view')
                                    <a href="{{ route('admin.properties.show',[$property->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('property_edit')
                                    <a href="{{ route('admin.properties.edit',[$property->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('property_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.properties.destroy', $property->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="22">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('property_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.properties.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection