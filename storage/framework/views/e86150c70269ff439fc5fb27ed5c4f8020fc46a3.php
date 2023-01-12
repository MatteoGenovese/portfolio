<?php $__env->startSection('title', '| Modifica: ' . $apartment->title ); ?>

<?php $__env->startSection('content'); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo e(route('user.apartments.update', $apartment->id )); ?>" method="post" autocomplete="off" class="crud-form" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <?php echo $__env->make('user.boolbnb.apartments.includes.form', [$isRequired = ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("bottom-scripts"); ?>
    <?php echo $__env->make("user.boolbnb.apartments.includes.form-scripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolbnb/apartments/edit.blade.php ENDPATH**/ ?>