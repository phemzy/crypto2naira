<?php $__env->startSection('content'); ?>
	<main id="main-container">
		<div class="content bg-gray-lighter">
			<div class="row items-push">
				<div class="col-md-8 col-md-offset-2">
					<div class="block">
						<div class="block-header bg-themed">
							<div class="h5 lead">
								<?php 

									switch ($t->status) {
										case 'pending':
											# code...
											echo "Your transaction has been received and being processed. You'll be matched with a seller soon! Please check your email for more info.";
											break;

										case 'matched':
											echo "You have been matched with a seller!";
											break;

										case 'complete':
											# code...
											echo "This transaction has been completed";
											break;
										
										default:
											# code...
											break;
									}

								 ?>
							</div>
						</div>
						<div class="block-content">
							<?php if($t->status == 'pending'): ?>
								<div class="progress active">
		                            <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50% processed</div>
		                        </div>
	                        <?php elseif($t->status == 'matched'): ?>
								<div class="progress active">
		                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70% processed</div>
		                        </div>
	                        <?php elseif($t->status == 'complete'): ?>
								<div class="progress active">
		                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100% Complete</div>
		                        </div>
	                        <?php endif; ?>
 
						</div>
					</div>
					<!-- Email Center Widget -->
                    <div class="block block-bordered">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Transaction Details</h3>
                        </div>
                        <div class="block-content">
                            <div class="pull-r-l pull-t push">
                                <table class="block-table text-center bg-gray-lighter border-b">
                                    <tbody>
                                        <tr>
                                            <td class="border-r" style="width: 50%;">
                                                <div class="h1 font-w500"><?php echo e($t->market->abbr_name); ?></div>
                                                <div class="h6 text-muted text-uppercase push-5-t">Market</div>
                                            </td>
                                            <td>
                                                <div class="push-30 push-30-t">
                                                    <i class="si si-basket fa-3x text-black-op"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="list-group">
                                <a class="list-group-item active" href="javascript:void(0)">
                                    <span class="badge"><?php echo e(number_format($t->package->amount / $t->market->naira_value, 5)); ?> <?php echo e($t->market->abbr_name); ?></span>
                                    <i class="fa fa-fw fa-inbox push-5-r"></i> Amount
                                </a>
                                <a class="list-group-item" href="javascript:void(0)">
                                	<span class="badge"> &#8358; <?php echo e(number_format($t->package->amount, 2)); ?></span>
                                    <i class="fa fa-fw fa-send push-5-r"></i> Naira Value
                                </a>
                                <a class="list-group-item" href="javascript:void(0)">
                                	<span class="badge text-capitalize"><?php echo e($t->type); ?></span>
                                    <i class="fa fa-fw fa-edit push-5-r"></i> Type
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Email Center Widget -->

					<!-- Material Lock -->
	                <div class="block block-themed">
	                    <div class="block-header bg-success">
	                        <ul class="block-options">
	                            <li>
	                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
	                            </li>
	                        </ul>
	                        <h3 class="block-title">Seller Info</h3>
	                    </div>
	                    <div class="block-content">
	                        <div class="text-center push-10-t push-30">
	                            <img class="img-avatar img-avatar96" src="<?php echo e($t->recipient() ? Storage::url($t->recipient()->profile->profile_pic) : asset('assets/img/avatars/avatar10.jpg')); ?>" alt="">
	                        </div>
	                        <div class="row">
		                        <div class="col-md-6 col-md-offset-3">
		                        	<form class="form-horizontal push-10" onsubmit="return false;">
			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                    <div class="form-material">
			                                        <input class="form-control" type="text" disabled="" id="name" name="name" value="<?php echo e($t->recipient() ?$t->recipient()->fullname() : ''); ?>">
			                                        <label for="name">Name</label>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                    <div class="form-material">
			                                        <input class="form-control" type="text" disabled="" id="name" name="name" value="<?php echo e($t->recipient() ?$t->recipient()->profile->city : ''); ?>">
			                                        <label for="name">City</label>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                    <div class="form-material">
			                                        <input class="form-control" type="text" disabled="" id="name" name="name" value="<?php echo e($t->recipient() ?$t->recipient()->profile->number : ''); ?>">
			                                        <label for="name">Mobile</label>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                    <div class="form-material">
			                                        <input class="form-control" type="text" disabled="" id="name" name="name" value="<?php echo e($t->recipient() ?$t->recipient()->account->bank_name : ''); ?>">
			                                        <label for="name">Bank Name</label>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                    <div class="form-material">
			                                        <input class="form-control" type="text" disabled="" id="name" name="name" value="<?php echo e($t->recipient() ?$t->recipient()->account->account_name : ''); ?>">
			                                        <label for="name">Account Name</label>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                    <div class="form-material">
			                                        <input class="form-control" type="text" disabled="" id="name" name="name" value="<?php echo e($t->recipient() ?$t->recipient()->account->account_number : ''); ?>">
			                                        <label for="name">Account Number</label>
			                                    </div>
			                                </div>
			                            </div>

										<?php if($t->recipient()): ?>
											<div class="form-group">
				                                <div class="col-xs-12">
				                                	<?php if($t->matched_transaction->proof_of_payment == NULL): ?>
				                                    	<button class="btn btn-sm btn-primary" disabled="" type="button"><i class="fa fa-lock push-5-r"></i> <?php echo e($t->recipient()->fullname()); ?> has not uploaded proof</button>
				                                    <?php else: ?>
				                                    	<a href="<?php echo e(Storage::url($t->matched_transaction->proof_of_payment)); ?>" class="btn btn-success btn-rounded">View Confirmation</a>
				                                    <?php endif; ?>
				                                </div>
				                            </div>
										<?php endif; ?>

			                            <div class="form-group">
			                                <div class="col-xs-12">
			                                	<?php if($t->status == 'complete'): ?>
			                                    	<button class="btn btn-sm btn-success" disabled="" type="submit"><i class="fa fa-unlock push-5-r"></i>Confirmed</button>
			                                    <?php else: ?>
													<button class="btn btn-sm btn-danger" disabled="" type="submit"><i class="fa fa-lock push-5-r"></i>Not confirmd yet!</button>
			                                    <?php endif; ?>
			                                </div>
			                            </div>
			                        </form>
			                        <hr>
									<?php if($t->proof_of_payment == NULL): ?>
			                        <form action="<?php echo e(route('upload.proof', $t->id)); ?>" method="post" enctype="multipart/form-data">
			                        	<?php echo e(csrf_field()); ?>

			                        	<br>
			                        	<div class="form-group">
			                                <div class="form-material">
		                                        <input class="form-control" type="file" id="name" name="proof">
		                                        <label for="name">Upload Your Proof of Payment</label>
		                                    </div>
			                            </div>
			                            <input type="hidden" name="type" value="naira">
			                            <div class="form-group">
			                            	<div class="form-material">
			                            		<input type="submit" value="Upload" class="btn btn-primary">
			                            	</div>
			                            </div>
			                        </form>
			                        <?php else: ?>
			                        	<p>You've successfully uploaded!</p>
			                        <?php endif; ?>
		                        </div>	                        	 
	                        </div>	                       
	                    </div>
	                    <hr>
	                    <div class="block-content" style="padding-bottom: 50px;">
	                    	<div class="row text-center">
	                    		<div class="col-xs-4"><a href="<?php echo e(route('home')); ?>" class="btn btn-rounded btn-danger">Dashboard</a></div>
	                    		<div class="col-xs-4"><a href="<?php echo e(route('history.all')); ?>" class="btn btn-rounded btn-primary">Transactions</a></div>
	                    		<div class="col-xs-4"><a href="<?php echo e(route('market.buy', $t->market->abbr_name)); ?>" class="btn btn-rounded btn-success">Market</a></div>	                    		
	                    	</div>	
	                    </div>
	                </div>
	                <!-- END Material Lock -->
				</div>
			</div>
		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>