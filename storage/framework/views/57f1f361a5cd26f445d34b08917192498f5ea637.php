<?php $__env->startSection('title', '| ' . $apartment->title ); ?>


<?php $__env->startSection("content"); ?>
    <div class="container">
        <div class="row">

            <canvas id="myChart"></canvas>

            <input type="number" class='d-none' value="<?php echo e($apartment->id); ?>" id='ApaID'>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("bottom-scripts"); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <?php echo $__env->make("user.boolbnb.charts.includes.chartScripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolBnb/charts/show.blade.php ENDPATH**/ ?>