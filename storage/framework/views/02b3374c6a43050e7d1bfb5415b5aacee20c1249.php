<?php $__env->startSection('title', '| Abitazioni'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">

        <?php if(session('session-change')): ?>
            <div class="col-12 alert <?php echo e(session('session-class')); ?>">
                <?php echo e(session('session-change')); ?>

            </div>
        <?php endif; ?>


        <?php $__empty_1 = true; $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-12 col-lg-6 mt-3 position-relative apartment-card">
                
                <div class="p-3 align-items-center border-bottom">

                    <div class="row">
                        <a class="col-12 col-md-6 d-block text-center text-md-start mb-3" href="<?php echo e(route('user.apartments.show', $apartment->id)); ?>">
                            <h4>
                                <?php echo e(strlen($apartment->title) > 18 ? substr($apartment->title, 0, 18) ."..." : $apartment->title); ?>

                            </h4>
                            <h6>
                                <?php echo e($apartment->address); ?>

                            </h6>
                            <div class="text-secondary">
                                Id: <?php echo e($apartment->id); ?>

                            </div>
                        </a>
                        
                    

                        <div class="col-6 col-md-4 align-self-center">
                            <div class="text-center">
                                Messaggi: <br> <?php echo e($apartment->messages->count()); ?>

                            </div>
                            <div class="text-center">
                                Disponibilità: <br>
                                <?php if($apartment->is_available): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg text-success" viewBox="0 0 16 16">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                <?php else: ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg text-danger" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-6 col-md-2 align-self-center">
                            <div class="dropdown">
                                <button class="btn brand-btn-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Azioni
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('user.apartments.show', $apartment->id)); ?>">Visualizza</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('user.apartments.edit', $apartment->id)); ?>">Modifica</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route("user.apartments.messageIndex", $apartment->id)); ?>">Messaggi</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('user.data.show', $apartment->id)); ?>">Statistiche</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('user.apartments.sponsorshipPage', $apartment->id )); ?>">Sponsorizza</a></li>
                                <li>
                                    <form class="delete-index-form d-inline" action="<?php echo e(route('user.apartments.destroy', $apartment->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="dropdown-item text-danger">
                                            Cancella
                                        </button>
                                    </form>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h5>
                Non hai appartamenti.
            </h5>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
<script defer>

    document.querySelectorAll('.delete-index-form').forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let confirmDelete = false;
            
            confirmDelete = confirm("Sei sicuro di voler cancellare?");
            
            if(confirmDelete !== false){
                 form.submit();
            }
        });
     
    });

 </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolBnb/apartments/index.blade.php ENDPATH**/ ?>