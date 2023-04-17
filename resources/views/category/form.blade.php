<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.Name')) }}
            {{ Form::text('name', $category->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')]) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="csrf_token" name="_token" value="{{ csrf_token() }}">
                    <label for="files">Galería de imàgenes</label>
                    <div class="file-loading" id="sortable">
                        <input id="files" name="files[]" type="file" multiple>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('adminlte::adminlte.Submit') }}</button>
    </div>
</div>
