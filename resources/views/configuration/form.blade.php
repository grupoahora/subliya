<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.email')) }}
            {{ Form::text('email', $configuration->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Email')]) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.whatsapp')) }}
            {{ Form::text('whatsapp', $configuration->whatsapp, ['class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Whatsapp')]) }}
            {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.logo')) }}
            {{ Form::text('logo', $configuration->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Logo')]) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.facebook')) }}
            {{ Form::text('facebook', $configuration->facebook, ['class' => 'form-control' . ($errors->has('facebook') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Facebook')]) }}
            {!! $errors->first('facebook', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.twitter')) }}
            {{ Form::text('twitter', $configuration->twitter, ['class' => 'form-control' . ($errors->has('twitter') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Twitter')]) }}
            {!! $errors->first('twitter', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.youtube')) }}
            {{ Form::text('youtube', $configuration->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Youtube')]) }}
            {!! $errors->first('youtube', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.linkedin')) }}
            {{ Form::text('linkedin', $configuration->linkedin, ['class' => 'form-control' . ($errors->has('linkedin') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Linkedin')]) }}
            {!! $errors->first('linkedin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(__('adminlte::adminlte.instagram')) }}
            {{ Form::text('instagram', $configuration->instagram, ['class' => 'form-control' . ($errors->has('instagram') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Instagram')]) }}
            {!! $errors->first('instagram', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('adminlte::adminlte.Submit')}}</button>
    </div>
</div>