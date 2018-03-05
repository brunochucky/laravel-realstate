@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.properties.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.properties.fields.transaction')</th>
                            <td field-key='transaction'>{{ $property->transaction }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.type')</th>
                            <td field-key='type'>{{ $property->type }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.cep')</th>
                            <td field-key='cep'>{{ $property->cep }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.state')</th>
                            <td field-key='state'>{{ $property->state }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.city')</th>
                            <td field-key='city'>{{ $property->city }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.neighborhood')</th>
                            <td field-key='neighborhood'>{{ $property->neighborhood }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.address')</th>
                            <td field-key='address'>{{ $property->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.number')</th>
                            <td field-key='number'>{{ $property->number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.complement')</th>
                            <td field-key='complement'>{{ $property->complement }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.rooms')</th>
                            <td field-key='rooms'>{{ $property->rooms }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.suites')</th>
                            <td field-key='suites'>{{ $property->suites }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.parking-slots')</th>
                            <td field-key='parking_slots'>{{ $property->parking_slots }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.bathrooms')</th>
                            <td field-key='bathrooms'>{{ $property->bathrooms }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.size')</th>
                            <td field-key='size'>{{ $property->size }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.land-size')</th>
                            <td field-key='land_size'>{{ $property->land_size }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.description')</th>
                            <td field-key='description'>{{ $property->description }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.properties.fields.price')</th>
                            <td field-key='price'>{{ $property->price }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.properties.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
