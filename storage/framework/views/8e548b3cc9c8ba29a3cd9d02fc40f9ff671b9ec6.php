<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-12 col-lg-10  ">
                <div class="row">

                    <div class="col-6">

                        <div class="form-group ">
                            <?php echo e(Form::label(__('adminlte::adminlte.Name'))); ?>

                            <?php echo e(Form::text('name', $design->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')])); ?>

                            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <?php echo e(Form::label(__('adminlte::adminlte.Reference'))); ?>

                            <?php echo e(Form::text('reference', $design->reference, ['class' => 'form-control' . ($errors->has('reference') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Reference')])); ?>

                            <?php echo $errors->first('reference', '<div class="invalid-feedback">:message</div>'); ?>

                        </div>

                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <?php echo e(Form::label(__('adminlte::adminlte.description'))); ?>

                            <?php echo e(Form::textarea('description', $design->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.description')])); ?>

                            <?php echo $errors->first('description', '<div class="invalid-feedback">:message</div>'); ?>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div action="" id="frmAttr" class="frmAttr">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group<?php echo e($errors->has('attribute') ? ' has-error' : ''); ?>">
                                        <?php echo Form::label('Atributos', 'Atributos'); ?>

                                        <?php echo Form::select('attribute', $attributes, $design->attributes, [
                                            'id' => 'attribute',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                        ]); ?>

                                        <small class="text-danger"><?php echo e($errors->first('attribute')); ?></small>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6" id="inputCloneParent">
                                    <div class="row" id="inputCloneParentOption">
                                        <div class="col-12">
                                            <?php echo Form::label('Opciones', 'Opciones'); ?>

                                        </div>
                                        <div class="col-6 col-lg-2" id="inputClone">
                                            <div class="form-group<?php echo e($errors->has('Opciones') ? ' has-error' : ''); ?>">

                                                <?php echo Form::text('inputname[]', null, ['class' => 'form-control']); ?>

                                                <small class="text-danger"><?php echo e($errors->first('inputname')); ?></small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2" id="inputClone">
                                            <div class="form-group<?php echo e($errors->has('Opciones') ? ' has-error' : ''); ?>">

                                                <?php echo Form::text('inputname[]', null, ['class' => 'form-control']); ?>

                                                <small class="text-danger"><?php echo e($errors->first('inputname')); ?></small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2 d-none" id="lastChild">

                                        </div>

                                    </div>


                                </div>
                                <div class="col-4 col-lg-1 ">
                                    <div class="form-group<?php echo e($errors->has('Opciones') ? ' has-error' : ''); ?>">
                                        <label for="">+ opción</label>
                                        <input type="button" value="+" id="btnOp"
                                            class="form-control btn btn-success d-block" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="col-4 col-lg-1 ">
                                    <div class="form-group<?php echo e($errors->has('Opciones') ? ' has-error' : ''); ?>">
                                        <label for="">- opción</label>
                                        <input type="button" value="-" id="btnOffOp"
                                            class="form-control btn btn-danger d-block" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="col-4 col-lg-1">
                                    <div class="form-group<?php echo e($errors->has('Opciones') ? ' has-error' : ''); ?>">
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
                                            <?php if(isset($design)): ?>
                                                <?php $__currentLoopData = $design->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($attribute->id); ?></td>
                                                        <td><input type="text" class="d-none" name="attributos[]"
                                                                value="<?php echo e($attribute->name); ?>"><?php echo e($attribute->name); ?></td>
                                                        <td><input type="text" class="form-control"
                                                                oninput="inputAttr();" name="attroptions[]"
                                                                id="<?php echo e(str_replace(' ', '', $attribute->name)); ?>"
                                                                value="<?php echo e($attribute->pivot->attroptions); ?>"></td>
                                                        <td><button type="button" name="remove" id="<?php echo e($attribute->id); ?>"
                                                                class="btn btn-danger btn_remove">Quitar</button></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php endif; ?>
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
                                <input type="hidden" id="csrf_token" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <label for="files">Galería de imàgenes</label>
                                <div class="file-loading" id="sortable">
                                    <input id="files" name="files[]" type="file" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
            <div class="col-12 col-lg-2">
                <div class="form-group w-100 d-flex flex-column">
                    <?php echo e(Form::label(__('adminlte::adminlte.Category Id'))); ?>

                    <select name="category_id" id="category_id" class="js-example-basic-multiple"
                        data-actions-box="true" data-live-search="true" required>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option data-content="<span class='badge badge-success'><?php echo e($category->name); ?></span>"
                                value="<?php echo e($category->id); ?>"
                                <?php echo e(collect(old('category_id', $design->category_id))->contains($category->id) ? 'selected' : ''); ?>>
                                <?php echo e($category->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <?php echo $errors->first('category_id', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group w-100 d-flex flex-column">
                    <?php echo e(Form::label(__('adminlte::adminlte.Subcategory Id'))); ?>

                    <select name="subcategory_id" id="subcategory_id" class="js-example-basic-multiple"
                        data-actions-box="true" data-live-search="true" required>
                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option data-content="<span class='badge badge-success'><?php echo e($subcategory->name); ?></span>"
                                value="<?php echo e($subcategory->id); ?>"
                                <?php echo e(collect(old('subcategory_id', $design->subcategory_id))->contains($subcategory->id) ? 'selected' : ''); ?>>
                                <?php echo e($subcategory->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <?php echo $errors->first('subcategory_id', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group w-100 d-flex flex-column">
                    <?php echo e(Form::label(__('adminlte::adminlte.Catalog Id'))); ?>

                    <?php if(isset($design)): ?>
                        <select name="catalog_id[]" id="catalog_id" class="js-example-basic-multiple"
                            data-actions-box="true" data-live-search="true" multiple>
                            <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-content="<span class='badge badge-success'><?php echo e($catalog->name); ?></span>"
                                    value="<?php echo e($catalog->id); ?>"
                                    <?php echo e(collect(old('catalog_id', $design->catalogs->pluck('id')))->contains($catalog->id) ? 'selected' : ''); ?>>
                                    <?php echo e($catalog->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    <?php else: ?>
                        <select name="catalog_id[]" id="catalog_id" class="js-example-basic-multiple"
                            data-actions-box="true" data-live-search="true" multiple>
                            <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-content="<span class='badge badge-success'><?php echo e($catalog->name); ?></span>"
                                    value="<?php echo e($catalog->id); ?>">
                                    <?php echo e($catalog->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    <?php endif; ?>


                    <?php echo $errors->first('catalog_id', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>



        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('adminlte::adminlte.Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\subliya\resources\views/design/form.blade.php ENDPATH**/ ?>