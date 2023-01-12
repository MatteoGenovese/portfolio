<?php $__env->startSection("title", "Messaggi"); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome utente</th>
                        <th scope="col">Email</th>
                        <th scope="col">Messaggio</th>
                        <th scope="col">Arrivato il</th>
                        <th scope="col">Vai a</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="align">
                            <th scope="row"><?php echo e($message->id); ?></th>
                            <td><?php echo e(isset($message->username) ?$message->username : "Nome sconosciuto"); ?></td>
                            <td><?php echo e($message->email); ?></td>
                            <td><?php echo e(strlen($message->message) > 30 ? substr($message->message, 0, 30) ."..." : $message->message); ?></td>
                            <td><?php echo e($message->created_at); ?></td>
                            <td>                               
                                <a class="btn btn-primary m-1" href="<?php echo e(route('user.apartments.showMessage', $message->id)); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                </tbody>
            </table>
            Non ci sono messaggi per questo appartamento.
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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolBnb/messages/index.blade.php ENDPATH**/ ?>