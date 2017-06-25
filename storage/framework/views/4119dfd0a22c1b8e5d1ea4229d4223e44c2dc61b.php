<?php $__env->startSection('content'); ?>
<main id="main-container">
    <!-- Page Header -->
    <div class="bg-image overflow-hidden" style="background-image: url('<?php echo e(asset("assets/img/photos/photo31@2x.jpg")); ?>');">
        <div class="bg-black-op">
            <div class="content content-narrow">
                <div class="block block-transparent">
                    <div class="block-content block-content-full">
                        <h1 class="h1 font-w300 text-white animated fadeInDown push-50-t push-5"><?php echo e($market->abbr_name); ?> Market</h1>
                        <h2 class="h4 font-w300 text-white-op animated fadeInUp">Welcome, <?php echo e(Auth::user()->first_name); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-narrow" id="app">
		<div class="row">
			<div class="col-md-4">
                <div class="block">
                    <ul class="nav nav-tabs" data-toggle="tabs">
                        <li class="active">
                            <a href="#btabs-animated-slideleft-home"><?php echo e($market->abbr_name); ?> Balance</a>
                        </li>
                        <li class="pull-right">
                            <a href="#btabs-animated-slideleft-settings" data-toggle="modal" data-target="#modal-buy"><i class="si si-action-redo"></i></a>
                        </li>
                    </ul>
                    <div class="block-content text-center block-content-full tab-content">
                        <div class="tab-pane fade fade-left in active" id="btabs-animated-slideleft-home">
                            <h4 class="font-w300 push-15">
                            	<?php echo e(($a->loop == 1 || $a->loop ==2) && $a->package != null ? number_format(($a->package->amount * $a->loop) / $market->naira_value , $market->abbr_name == 'TBC' ? 5 : 2) : 0); ?> <?php echo e($market->abbr_name); ?>

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="block">
                	<?php if(($a->loop == 2 || $a->loop == 1) && $a->package != null): ?>
	                	<div class="block-content block-content-full text-center">
	                        <i class="si si-check fa-4x text-success"></i>
	                        <div class="font-w600 push-15-t">You have <?php echo e($a->loop); ?> <?php echo e(str_plural('package', $a->loop)); ?> to sell.</div>
	                    </div>
	                <?php else: ?>
	                	<div class="block-content block-content-full text-center">
	                        <i class="si si-ban fa-4x text-danger"></i>
	                        <div class="font-w600 push-15-t">Nothing to Sell</div>
	                    </div>		                
	                <?php endif; ?>
                </div>
			</div>
			<div class="col-sm-8">
				<converter crypto="<?php echo e($market->abbr_name); ?>" naira_value="<?php echo e($market->naira_value); ?>"></converter>
				<?php if(($a->loop == 2 || $a->loop == 1) && $a->package != null): ?>
					<?php for($i = 1; $i <= $a->loop; $i++): ?>
						<div class="col-xs-6">
		                    <div class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
		                        <div class="block-content block-content-full bg-modern">
		                            <p class="h5 text-white"><?php echo e($a->package->name); ?></p>
		                            <div class="h2 font-w700 text-white">

		                                <?php echo e(number_format($a->package->amount / $market->naira_value, $market->abbr_name == 'TBC' ? 5 : 2)); ?>

		                                <?php echo e($market->abbr_name); ?>

		                            </div>
		                            <form action="<?php echo e(route('crypto.sell', ['market' => $market->id])); ?>" method="post">
		                                <?php echo e(csrf_field()); ?>

		                                <input type="submit" class="h5 text-white-op text-uppercase push-5-t btn btn-danger" value="SELL">
		                            </form>
		                        </div>
		                        <div class="block-content block-content-full block-content-mini">
		                            <i class="fa fa-arrow-up text-success"></i> valued at &#8358;<b><?php echo e(number_format($a->package->amount, 2)); ?></b>
		                        </div>
		                    </div>
		                </div>
					<?php endfor; ?>
				<?php endif; ?>
			</div>
		</div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script src="<?php echo e(URL::to('assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>

    <!-- Page JS Code -->
    <script src="<?php echo e(URL::to('assets/js/pages/base_forms_wizard.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>