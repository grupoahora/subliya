


<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contentbody'); ?>
    <div class="container-fluid" id="diseno-section">
        <div class="row flex-lg-row justify-content-between ">
            <div class="col-10 col-lg-2  bg-disenos my-2 my-lg-0 ">
                <h4 class=" text-white my-2"><?php echo e($designdetail->name); ?></h4>
            </div>
            <div class="col-10 col-lg-2 ms-auto  bg-disenos-volver my-2 my-lg-0 ">
                <a class="my-2 text-white" href="<?php echo e(url()->previous()); ?>"  rel="noopener noreferrer">Volver Atrás</a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 card-diseno-detail mt-2">
            <div class="col-12 col-lg-3 col-xl-2 mb-auto">
                <h4 class="fw-bold d-none d-lg-block">
                    REF: <?php echo e($designdetail->reference); ?>

                </h4>
                <?php $__currentLoopData = $designdetail->records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->first): ?>
                        <img src="../<?php echo e($record->url); ?>" alt="">
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="col-12 mx-auto mx-lg-0 col-lg-5 info-detail h-auto ">
                <div class="row  justify-content align-items-center g-2">
                    <div class="card diseno-detail  bg-transparent ">
                        <h3 class="card-title fw-bold text-center text-lg-end"><?php echo e(strtoupper($designdetail->name)); ?></h3>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center  g-2 mx-1">
                                
                                <?php $__currentLoopData = $designdetail->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->even): ?>
                                        <div class="col-6 diseno-detail-border-two  mb-auto ">
                                            <h4 class="text-start fw-bold  mt-2 ">
                                                <?php echo e(strtoupper($attribute->name)); ?>

                                            </h4>
                                            <p class="text-start">
                                                <?php echo e($attribute->pivot->attroptions); ?>

                                            </p>
                                        </div>
                                        <hr class="" style="color: #000; opacity: 1; border: #000 1px solid;">
                                    <?php endif; ?>
                                    <?php if($loop->odd): ?>
                                        <div class="col-6 mb-auto  diseno-detail-border-one mo-auto ">
                                            <h4 class="text-start fw-bold  mt-2">
                                                <?php echo e(strtoupper($attribute->name)); ?>

                                            </h4>
                                            <p class="text-start">
                                                <?php echo e($attribute->pivot->attroptions); ?>

                                            </p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="row description-diseno-detail description-diseno-detail-destock mt-4 me-lg-5 me-0  justify-content-center align-items-center g-2">
                    <div class="card py-2 px-4 m-0 bg-transparent border-0">
                        <div class="card-body">
                            <p class="card-text fw-bolder ">
                                <?php echo e($designdetail->description); ?>

                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.subliyamaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\subliya\resources\views/web/diseno-detail.blade.php ENDPATH**/ ?>