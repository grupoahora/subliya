<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label(__('adminlte::adminlte.name')) }}
                    {{ Form::text('name', $catalog->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')]) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label(__('adminlte::adminlte.Description')) }}
                    {{ Form::text('description', $catalog->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Description')]) }}
                    {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group d-flex flex-column">
                    {{ Form::label(__('adminlte::adminlte.Ownerscategories')) }}
                    <br>
                    @foreach ($catalog->designs->groupBy('category_id') as $key => $design)
                    {{ Form::text('ownerscategories', $catalog->get_category_name_by_design_and_catalog($key), ['class' => '' . ($errors->has('ownerscategories') ? ' is-invalid' : ''), 'disabled', 'placeholder' => __('adminlte::adminlte.Ownerscategories')]) }}
                    @endforeach
                    {!! $errors->first('ownerscategories', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group d-flex flex-column">
                    {{ Form::label(__('adminlte::adminlte.Ownerssubcategories')) }}
                    <br>
                    @foreach ($catalog->designs->groupBy('subcategory_id') as $key => $design)
                        @if ($key == "")
                        {{ Form::text('ownerssubcategories', 'sin categoría', ['class' => '' . ($errors->has('ownerssubcategories') ? ' is-invalid' : ''), 'disabled', 'placeholder' => __('adminlte::adminlte.Ownerssubcategories')]) }}
                            @else

                            {{ Form::text('ownerssubcategories', $catalog->get_subcategory_name_by_design_and_catalog($key), ['class' => '' . ($errors->has('ownerssubcategories') ? ' is-invalid' : ''), 'disabled', 'placeholder' => __('adminlte::adminlte.Ownerssubcategories')]) }}
                        @endif
                    @endforeach
                    {!! $errors->first('ownerssubcategories', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row justify-content-start align-items-center g-2">
            <div class="col-12 col-lg-2">

                <h2 class="font-weight-bold"> Diseños</h2>
            </div>
            <div class="col-12 col-lg-5 px-2">
                <div class="form-group w-100 d-flex flex-column">
                    {{ Form::label(__('adminlte::adminlte.Category Id')) }}
                    {!! Form::select('category_id', $categories, null, [
                        'id' => 'category_id',
                        'name' => '',
                        'class' => 'js-example-basic-multiple',
                        'multiple',
                    ]) !!}

                </div>

            </div>
            <div class="col-12 col-lg-5 px-2">
                <div class="form-group w-100 d-flex flex-column">

                    {{ Form::label(__('adminlte::adminlte.Subcategory Id')) }}
                    <select class="js-example-basic-multiple" name="" id="subcategory_id" multiple>

                    </select>

                    {!! $errors->first('subcategory_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>


            @if (!isset($desings))
            <div class="col-12  px-2">
                <h2 class="font-weight-bold" id="disenosActuales">
                    Diseños Actuales
                </h2>
            </div>
                <div class="creatediseno col-12"
                    id="designs_by_categories_or_subcategories_selects">

                    @foreach ($catalog->designs as $key => $design)
                        <div class="col    mx-auto" id="designsactualcotainer">
                            <img src="{{ '../../../' . $design->records->first()->url }}"
                                class="rounded-circle mx-auto" style="width:240px; height: auto;" alt="">
                            <input type="checkbox" class=" m-0" style="width: 40px" name="designsactual[]"
                                value="{{ $design->id }}" id="designsactual{{ $key }}" checked="true">
                        </div>
                        @push('js')
                            <script>
                                const designsactualtrue{{ $key }} = $('#designsactual{{ $key }}');
                                designsactualtrue{{ $key }}.change(function() {


                                    designsactualtrue{{ $key }}.parent().fadeOut(1500, function() {
                                        $(this).remove();
                                    });


                                });

                                function ocultar(offcheck) {


                                }
                            </script>
                        @endpush
                    @endforeach
                </div>
                <h2 class="font-weight-bold d-none" id="disenosNuevos">
                    Diseños Nuevos
                </h2>
                <div class="creatediseno"
                    id="designs_by_categories_or_subcategories">

                </div>
            @else
            <div class="col-12  px-2">
                <h2 class="font-weight-bold" id="disenosActuales">
                    Diseños Actuales
                </h2>
            </div>
                <div class="creatediseno col-12"
                    id="designs_by_categories_or_subcategories">
                    @foreach ($designs as $design)
                        <div class="    mx-auto">
                            <img src="{{ '../../' . $design->records->first()->url }}" class="rounded-circle mx-auto"
                                style="width:240px; height: auto;" alt="">
                            <input type="checkbox" class=" m-0" style="width: 40px" name="" id="">
                        </div>
                    @endforeach
                </div>
            @endif




        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">{{ __('adminlte::adminlte.Submit') }}</button>
        </div>
    </div>
