<?php $__env->startSection("content"); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <h2 class="my-2">Sponsorizzazioni</h2>
            <p class="my-5">
                Decidendo di sposorizzare un tuo annuncio ti assicuri che apparirà ai primi posti nelle ricerche degli utenti e otterrai un badge esclusivo per gli annunci sponsorizzati!
            </p>
            <?php $__currentLoopData = $sponsorships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsorship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card col-3 mx-1">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($sponsorship->name); ?></h5>
                    <h6>Durata: <?php echo e($sponsorship->duration); ?> giorni</h6>
                    <p class="card-text"><?php echo e($sponsorship->price); ?> €</p>
                    
                    
                    <form class=" d-inline" action="<?php echo e(route('user.apartments.assignSponsorship', [ 'apartment_id' => $apartment->id , 'sponsorship_id' => $sponsorship->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        
                        <button type="submit" class="btn brand-btn-1 m-1">
                            Compra
                        </button>
                    </form>
                    
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolBnb/apartments/assignSponsor.blade.php ENDPATH**/ ?>