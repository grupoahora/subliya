<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-12 col-lg-10  ">
                <div class="row">

                    <div class="col-6">

                        <div class="form-group ">
                            {{ Form::label(__('adminlte::adminlte.Name')) }}
                            {{ Form::text('name', $design->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')]) }}
                            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label(__('adminlte::adminlte.Reference')) }}
                            {{ Form::text('reference', $design->reference, ['class' => 'form-control' . ($errors->has('reference') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Reference')]) }}
                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label(__('adminlte::adminlte.description')) }}
                            {{ Form::textarea('description', $design->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.description')]) }}
                            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div action="" id="frmAttr" class="frmAttr">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group{{ $errors->has('attribute') ? ' has-error' : '' }}">
                                        {!! Form::label('Atributos', 'Atributos') !!}
                                        {!! Form::select('attribute', $attributes, $design->attributes, [
                                            'id' => 'attribute',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                        ]) !!}
                                        <small class="text-danger">{{ $errors->first('attribute') }}</small>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6" id="inputCloneParent">
                                    <div class="row" id="inputCloneParentOption">
                                        <div class="col-12">
                                            {!! Form::label('Opciones', 'Opciones') !!}
                                        </div>
                                        <div class="col-6 col-lg-2" id="inputClone">
                                            <div class="form-group{{ $errors->has('Opciones') ? ' has-error' : '' }}">

                                                {!! Form::text('inputname[]', null, ['class' => 'form-control']) !!}
                                                <small class="text-danger">{{ $errors->first('inputname') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2" id="inputClone">
                                            <div class="form-group{{ $errors->has('Opciones') ? ' has-error' : '' }}">

                                                {!! Form::text('inputname[]', null, ['class' => 'form-control']) !!}
                                                <small class="text-danger">{{ $errors->first('inputname') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2 d-none" id="lastChild">

                                        </div>

                                    </div>


                                </div>
                                <div class="col-4 col-lg-1 ">
                                    <div class="form-group{{ $errors->has('Opciones') ? ' has-error' : '' }}">
                                        <label for="">+ opción</label>
                                        <input type="button" value="+" id="btnOp"
                                            class="form-control btn btn-success d-block" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="col-4 col-lg-1 ">
                                    <div class="form-group{{ $errors->has('Opciones') ? ' has-error' : '' }}">
                                        <label for="">- opción</label>
                                        <input type="button" value="-" id="btnOffOp"
                                            class="form-control btn btn-danger d-block" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="col-4 col-lg-1">
                                    <div class="form-group{{ $errors->has('Opciones') ? ' has-error' : '' }}">
                                        <label for="">+ atributo</label>
                                        <input type="button" value="+" id="btnAdd"
                                            class="form-control btn btn-success d-block" style="width: 50px;">
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div id="divElements">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-resposive" id="tableAttr">
                                        <thead>
                                            <tr>
                                                <th>
                                                    id
                                                </th>
                                                <th>
                                                    atributo
                                                </th>
                                                <th>
                                                    opciones
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($design)
                                                @foreach ($design->attributes as $attribute)
                                                    <tr>
                                                        <td>{{ $attribute->id }}</td>
                                                        <td><input type="text" class="d-none" name="attributos[]"
                                                                value="{{ $attribute->name }}">{{ $attribute->name }}</td>
                                                        <td><input type="text" class="form-control"
                                                                oninput="inputAttr();" name="attroptions[]"
                                                                id="{{ str_replace(' ', '', $attribute->name) }}"
                                                                value="{{ $attribute->pivot->attroptions }}"></td>
                                                        <td><button type="button" name="remove" id="{{ $attribute->id }}"
                                                                class="btn btn-danger btn_remove">Quitar</button></td>
                                                    </tr>
                                                @endforeach

                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                {{-- <div class="row">

                    <div class="col-12">
                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            {!! Form::label('photo', 'File label') !!}
                            @if (isset($design))
                                {!! Form::file('photo', []) !!}
                                <small class="text-danger">{{ $errors->first('photo') }}</small>
                            @else
                                {!! Form::file('photo', ['required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('photo') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            @foreach ($design->records as $record)
                                @if ($loop->last)
                                 

                                    <img src="{{ $record->url }}" alt="" width="100%" height="200px">
                                @else
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div> --}}


            </div>
            <div class="col-12 col-lg-2">
                <div class="form-group w-100 d-flex flex-column">
                    {{ Form::label(__('adminlte::adminlte.Category Id')) }}
                    <select name="category_id" id="category_id" class="js-example-basic-multiple"
                        data-actions-box="true" data-live-search="true" required>
                        @foreach ($categories as $category)
                            <option data-content="<span class='badge badge-success'>{{ $category->name }}</span>"
                                value="{{ $category->id }}"
                                {{ collect(old('category_id', $design->category_id))->contains($category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group w-100 d-flex flex-column">
                    {{ Form::label(__('adminlte::adminlte.Subcategory Id')) }}
                    <select name="subcategory_id" id="subcategory_id" class="js-example-basic-multiple"
                        data-actions-box="true" data-live-search="true" required>
                        @foreach ($subcategories as $subcategory)
                            <option data-content="<span class='badge badge-success'>{{ $subcategory->name }}</span>"
                                value="{{ $subcategory->id }}"
                                {{ collect(old('subcategory_id', $design->subcategory_id))->contains($subcategory->id) ? 'selected' : '' }}>
                                {{ $subcategory->name }}
                            </option>
                        @endforeach
                    </select>

                    {!! $errors->first('subcategory_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group w-100 d-flex flex-column">
                    {{ Form::label(__('adminlte::adminlte.Catalog Id')) }}
                    @if (isset($design))
                        <select name="catalog_id[]" id="catalog_id" class="js-example-basic-multiple"
                            data-actions-box="true" data-live-search="true" multiple>
                            @foreach ($catalogs as $catalog)
                                <option data-content="<span class='badge badge-success'>{{ $catalog->name }}</span>"
                                    value="{{ $catalog->id }}"
                                    {{ collect(old('catalog_id', $design->catalogs->pluck('id')))->contains($catalog->id) ? 'selected' : '' }}>
                                    {{ $catalog->name }}
                                </option>
                            @endforeach
                        </select>
                    @else
                        <select name="catalog_id[]" id="catalog_id" class="js-example-basic-multiple"
                            data-actions-box="true" data-live-search="true" multiple>
                            @foreach ($catalogs as $catalog)
                                <option data-content="<span class='badge badge-success'>{{ $catalog->name }}</span>"
                                    value="{{ $catalog->id }}">
                                    {{ $catalog->name }}
                                </option>
                            @endforeach
                        </select>
                    @endif


                    {!! $errors->first('catalog_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>



        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('adminlte::adminlte.Submit') }}</button>
    </div>
</div>
