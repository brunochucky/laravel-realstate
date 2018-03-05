@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.properties.title')</h3>
    
    {!! Form::model($property, ['method' => 'PUT', 'route' => ['admin.properties.update', $property->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('transaction', trans('quickadmin.properties.fields.transaction').'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('transaction'))
                        <p class="help-block">
                            {{ $errors->first('transaction') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('transaction', 'rent', false, ['required' => '']) !!}
                            Rent
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('transaction', 'sell', false, ['required' => '']) !!}
                            Sell
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type', trans('quickadmin.properties.fields.type').'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('type'))
                        <p class="help-block">
                            {{ $errors->first('type') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('type', 'Apartamento Padrão', false, ['required' => '']) !!}
                            Apartamento Padrão
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Kitchenette/Conjugados', false, ['required' => '']) !!}
                            Kitchenette/Conjugados
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Loft', false, ['required' => '']) !!}
                            Loft
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Casa Padrão', false, ['required' => '']) !!}
                            Casa Padrão
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Terreno Padrão', false, ['required' => '']) !!}
                            Terreno Padrão
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Box/Garagem', false, ['required' => '']) !!}
                            Box/Garagem
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Casa Comercial', false, ['required' => '']) !!}
                            Casa Comercial
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Casa de Condomínio', false, ['required' => '']) !!}
                            Casa de Condomínio
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Casa de Vila', false, ['required' => '']) !!}
                            Casa de Vila
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Chácara', false, ['required' => '']) !!}
                            Chácara
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Conjunto Comercial/Sala', false, ['required' => '']) !!}
                            Conjunto Comercial/Sala
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Fazenda', false, ['required' => '']) !!}
                            Fazenda
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Flat', false, ['required' => '']) !!}
                            Flat
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Galpão/Depósito/Armazém', false, ['required' => '']) !!}
                            Galpão/Depósito/Armazém
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Haras', false, ['required' => '']) !!}
                            Haras
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Hotel', false, ['required' => '']) !!}
                            Hotel
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Indústria', false, ['required' => '']) !!}
                            Indústria
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Loja Shopping/ Ct Comercial', false, ['required' => '']) !!}
                            Loja Shopping/ Ct Comercial
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Loja/Salão', false, ['required' => '']) !!}
                            Loja/Salão
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Loteamento/Condomínio', false, ['required' => '']) !!}
                            Loteamento/Condomínio
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Motel', false, ['required' => '']) !!}
                            Motel
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Pousada/Chalé', false, ['required' => '']) !!}
                            Pousada/Chalé
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Prédio Inteiro', false, ['required' => '']) !!}
                            Prédio Inteiro
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Sítio', false, ['required' => '']) !!}
                            Sítio
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type', 'Studio', false, ['required' => '']) !!}
                            Studio
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cep', trans('quickadmin.properties.fields.cep').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('cep', old('cep'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cep'))
                        <p class="help-block">
                            {{ $errors->first('cep') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('state', trans('quickadmin.properties.fields.state').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('state', old('state'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('state'))
                        <p class="help-block">
                            {{ $errors->first('state') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('city', trans('quickadmin.properties.fields.city').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('city', old('city'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('neighborhood', trans('quickadmin.properties.fields.neighborhood').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('neighborhood', old('neighborhood'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('neighborhood'))
                        <p class="help-block">
                            {{ $errors->first('neighborhood') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', trans('quickadmin.properties.fields.address').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('number', trans('quickadmin.properties.fields.number').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('number', old('number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('number'))
                        <p class="help-block">
                            {{ $errors->first('number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('complement', trans('quickadmin.properties.fields.complement').'', ['class' => 'control-label']) !!}
                    {!! Form::text('complement', old('complement'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('complement'))
                        <p class="help-block">
                            {{ $errors->first('complement') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rooms', trans('quickadmin.properties.fields.rooms').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('rooms', old('rooms'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rooms'))
                        <p class="help-block">
                            {{ $errors->first('rooms') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('suites', trans('quickadmin.properties.fields.suites').'', ['class' => 'control-label']) !!}
                    {!! Form::text('suites', old('suites'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('suites'))
                        <p class="help-block">
                            {{ $errors->first('suites') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('parking_slots', trans('quickadmin.properties.fields.parking-slots').'', ['class' => 'control-label']) !!}
                    {!! Form::text('parking_slots', old('parking_slots'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('parking_slots'))
                        <p class="help-block">
                            {{ $errors->first('parking_slots') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bathrooms', trans('quickadmin.properties.fields.bathrooms').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('bathrooms', old('bathrooms'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bathrooms'))
                        <p class="help-block">
                            {{ $errors->first('bathrooms') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('size', trans('quickadmin.properties.fields.size').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('size', old('size'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('size'))
                        <p class="help-block">
                            {{ $errors->first('size') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('land_size', trans('quickadmin.properties.fields.land-size').'', ['class' => 'control-label']) !!}
                    {!! Form::text('land_size', old('land_size'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('land_size'))
                        <p class="help-block">
                            {{ $errors->first('land_size') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('quickadmin.properties.fields.description').'', ['class' => 'control-label']) !!}
                    {!! Form::text('description', old('description'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('price', trans('quickadmin.properties.fields.price').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('price', old('price'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('price'))
                        <p class="help-block">
                            {{ $errors->first('price') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

