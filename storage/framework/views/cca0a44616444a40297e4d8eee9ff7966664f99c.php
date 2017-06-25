<?php $__env->startSection('content'); ?>

 <!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- All Products -->
        <div class="block">
            <div class="block-header bg-gray-lighter">
                <h1 class="block-title"><span class="text-capitalize"> 
                TBC MARKET MULTI MATCHER</span></h1>
            </div>
            <div class="block-content">
                <form action="<?php echo e(route('match')); ?>" method="post">
                    <input type="hidden" name="market" value="TBC">
                    <?php echo e(csrf_field()); ?>

                <button type="submit" class="btn btn-danger btn-block">MATCH</button>
                <hr>
                <div>
                    <select name="matching-type" id="" class="form-control">
                        <option value="">Select matching type</option>
                        <option value="seller-2-1">2 Seller to 1 buyer</option>
                        <option value="1-1" selected="">1 Buyer to 1 Seller</option>
                        <option value="buyer-2-1">1 Seller to 2 buyer</option>
                    </select>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left">Buyers <span class="badge"><?php echo e($tbc_buy->count()); ?></span></h3>
                        <table class="table table-borderless table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center" style="">ID</th>
                                    <th>
                                        User
                                    </th>
                                    <th>Package</th>
                                    <th class="">Amount</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tbc_buy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="buyer[]" value="<?php echo e($t->id); ?>">
                                        </td>
                                        <td><?php echo e($t->id); ?></td>
                                        <td><?php echo e($t->user->fullname()); ?></td>
                                        <td><?php echo e($t->package->name); ?></td>
                                        <td><?php echo e($t->package->amount); ?></td>
                                        <td><?php echo e($t->created_at->diffForHumans()); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-left">Sellers <span class="badge"><?php echo e($tbc_sell->count()); ?></span></h3>
                        <table class="table table-borderless table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center" style="">ID</th>
                                    <th>
                                        User
                                    </th>
                                    <th>Package</th>
                                    <th class="">Amount</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tbc_sell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="seller[]" value="<?php echo e($t->id); ?>">
                                        </td>
                                        <td><?php echo e($t->id); ?></td>
                                        <td><?php echo e($t->user->fullname()); ?></td>
                                        <td><?php echo e($t->package->name); ?></td>
                                        <td><?php echo e($t->package->amount); ?></td>
                                        <td><?php echo e($t->created_at->diffForHumans()); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="block">
            <div class="block-header bg-gray-lighter">
                <h1 class="block-title"><span class="text-capitalize"> 
                GRC MARKET MULTI MATCHER</span></h1>
            </div>
            <div class="block-content">
                <form action="<?php echo e(route('match')); ?>" method="post">
                    <input type="hidden" name="market" value="GRC">
                    <?php echo e(csrf_field()); ?>

                <button type="submit" class="btn btn-info btn-block">MATCH</button>
                <hr>
                <div>
                    <select name="matching-type" id="" class="form-control">
                        <option value="">Select matching type</option>
                        <option value="seller-2-1">2 Seller to 1 buyer</option>
                        <option value="buyer-2-1">1 Seller to 2 buyer</option>
                        <option value="1-1" selected="">1 Buyer to 1 Seller</option>                        
                    </select>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left">Buyers <span class="badge"><?php echo e($grc_buy->count()); ?></span></h3>
                        <table class="table table-borderless table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center" style="">ID</th>
                                    <th>
                                        User
                                    </th>
                                    <th>Package</th>
                                    <th class="">Amount</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $grc_buy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="buyer[]" value="<?php echo e($t->id); ?>">
                                        </td>
                                        <td><?php echo e($t->id); ?></td>
                                        <td><?php echo e($t->user->fullname()); ?></td>
                                        <td><?php echo e($t->package->name); ?></td>
                                        <td><?php echo e($t->package->amount); ?></td>
                                        <td><?php echo e($t->created_at->diffForHumans()); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-left">Sellers <span class="badge"><?php echo e($grc_sell->count()); ?></span></h3>
                        <table class="table table-borderless table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center" style="">ID</th>
                                    <th>
                                        User
                                    </th>
                                    <th>Package</th>
                                    <th class="">Amount</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $grc_sell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="seller[]" value="<?php echo e($t->id); ?>">
                                        </td>
                                        <td><?php echo e($t->id); ?></td>
                                        <td><?php echo e($t->user->fullname()); ?></td>
                                        <td><?php echo e($t->package->name); ?></td>
                                        <td><?php echo e($t->package->amount); ?></td>
                                        <td><?php echo e($t->created_at->diffForHumans()); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- END All Products -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    jQuery(function () {
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>