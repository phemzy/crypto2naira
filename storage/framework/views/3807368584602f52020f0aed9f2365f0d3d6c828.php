<?php $__env->startSection('content'); ?>

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Material Register -->
        <div class="block block-themed col-md-10 col-md-offset-1 col-xs-12">
            <!-- Icon Based -->
            <h2 class="content-heading">Sellings Transactions History</h2>
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Sellings</h3>
                </div>
                <div class="block-content">
                    <ul class="list list-timeline pull-t">
                       <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('partials.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo e($transactions->links()); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <!-- END Icon Based -->
        </div>
        <!-- END Material Register -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>