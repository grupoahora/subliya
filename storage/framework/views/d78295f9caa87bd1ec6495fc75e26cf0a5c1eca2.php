

<?php $__env->startSection('title', __('adminlte::adminlte.Design')); ?>

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb ">
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diseños</li>
        </ol>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('adminlte::adminlte.Design')); ?>

                            </span>

                            <div class="float-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm float-right" data-placement="left"
                                    data-toggle="modal" data-target="#staticBackdrop">
                                    <?php echo e(__('adminlte::adminlte.Create New')); ?>

                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Nuevo diseño</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="<?php echo e(route('designs.store')); ?>" role="form"
                                                    enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>

                                                    <div class="row">

                                                        <div class="col-6">

                                                            <div class="form-group ">
                                                                <?php echo e(Form::label(__('adminlte::adminlte.Name'))); ?>

                                                                <?php echo e(Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')])); ?>

                                                                <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <?php echo e(Form::label(__('adminlte::adminlte.Reference'))); ?>

                                                                <?php echo e(Form::text('reference', null, ['class' => 'form-control' . ($errors->has('reference') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Reference')])); ?>

                                                                <?php echo $errors->first('reference', '<div class="invalid-feedback">:message</div>'); ?>

                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <?php echo e(Form::label(__('adminlte::adminlte.description'))); ?>

                                                                <?php echo e(Form::textarea('description', null, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.description')])); ?>

                                                                <?php echo $errors->first('description', '<div class="invalid-feedback">:message</div>'); ?>

                                                            </div>

                                                        </div>

                                                    </div>

                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
                                                   
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="TableDesigns">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th><?php echo e(__('adminlte::adminlte.Name')); ?></th>
                                        <th><?php echo e(__('adminlte::adminlte.Reference')); ?></th>
                                        <th><?php echo e(__('adminlte::adminlte.Category Id')); ?></th>
                                        <th><?php echo e(__('adminlte::adminlte.Subcategory Id')); ?></th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($design->id); ?></td>

                                            <td><?php echo e($design->name); ?></td>
                                            <td><?php echo e($design->reference); ?></td>
                                            <td>
                                            <?php if(!isset($design->category->name)): ?>
                                                No asociada una Categoría                                               
                                            <?php else: ?>
                                                <?php echo e($design->category->name); ?>

                                            <?php endif; ?></td>
                                            <td>
                                            <?php if(!isset($design->subcategory->name)): ?>
                                                No asociada una Subcategoría                                               
                                            <?php else: ?>
                                                <?php echo e($design->subcategory->name); ?>

                                            <?php endif; ?></td>
                                            

                                            <td>
                                                <form action="<?php echo e(route('designs.destroy', $design->id)); ?>" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-success"
                                                        href="<?php echo e(route('designs.edit', $design->id)); ?>"><i
                                                            class="fa fa-fw fa-edit"></i><?php echo e(__('adminlte::adminlte.Edit')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>
                                                        <?php echo e(__('adminlte::adminlte.Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.buttons.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#TableDesigns').DataTable({
                dom: 'Bfrtip',
                autoFill: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\subliya\resources\views/design/index.blade.php ENDPATH**/ ?>