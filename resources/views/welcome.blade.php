<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="title m-b-md">
                    Keycash
                </div>
                




    <h3 class="page-title">@lang('quickadmin.properties.title')</h3>
    
    <p>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($properties) > 0 ? 'datatable' : '' }} @can('property_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                       

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
                        
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($properties) > 0)
                        @foreach ($properties as $property)
                            <tr data-entry-id="{{ $property->id }}">
                                

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

    <script>
        @can('property_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.properties.mass_destroy') }}'; @endif
        @endcan

    </script>

                
            </div>
        </div>
    </body>
</html>
