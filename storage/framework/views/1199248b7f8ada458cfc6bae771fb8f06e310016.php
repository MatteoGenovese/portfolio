<?php $__env->startSection('title', '| ' . "Messaggi" ); ?>

<?php $__env->startSection("content"); ?>
    <div class="container">
        <div class="row">

            <div class="col-12 d-flex flex-column align-items-center justify-content-center card py-5">
                    <h2><?php echo e($message->email); ?></h2>

                    <h4><?php echo e(isset($message->username) ?$message->username : "Utente"); ?></h4>
                    <p><?php echo e($message->message); ?></p>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolBnb/messages/show.blade.php ENDPATH**/ ?>