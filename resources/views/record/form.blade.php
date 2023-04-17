<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.url')) }}
            {{ Form::text('url', $record->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Url')]) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.recordeable_type')) }}
            {{ Form::text('recordeable_type', $record->recordeable_type, ['class' => 'form-control' . ($errors->has('recordeable_type') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Recordeable Type')]) }}
            {!! $errors->first('recordeable_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.recordeable_id')) }}
            {{ Form::text('recordeable_id', $record->recordeable_id, ['class' => 'form-control' . ($errors->has('recordeable_id') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Recordeable Id')]) }}
            {!! $errors->first('recordeable_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('adminlte::adminlte.Submit')}}</button>
    </div>
</div>