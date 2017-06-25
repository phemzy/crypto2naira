<?php $__env->startSection('content'); ?>

<main id="main-container">
	<div class="content content-boxed">
		<div class="block">
			<div class="block-content text-center block-content-full">
				<h3>Markets you might like to join..</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php $__currentLoopData = $markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="block">		            
			           
			            <div class="block-content block-content-full" >
			                <h3 class="h4 push-10"><?php echo e($market->abbr_name); ?> MARKET</h3>
			                <p class="text-gray-dark"><?php echo e($market->description); ?></p>
			                <a class="btn btn-sm btn-default" href="javascript:void(0)" onclick="event.preventDefault();joinMarket(<?php echo e($market->id); ?>)" id="<?php echo e($market->id); ?>"><?php echo e(Auth::user()->hasJoined($market) ? 'JOINED' : 'JOIN'); ?></a>
			            </div>
			        </div>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		        <a href="/home" class="text-center btn btn-success btn-rounded btn-block" style="margin-bottom: 100px;">Proceed to DASHBOARD</a>
			</div>
		</div>
		
	</div>
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		joinMarket = function (market){
			$.ajax({
				url: '/market/' + market + '/join',
				type: 'post',
				dataType: 'json',
				data: {
					id: market,
					_token: document.head.querySelector('meta[name="csrf-token"]').content,
				},
				success: function(resp){
					if(resp == 'true'){
						document.getElementById(market).innerHTML = 'JOINED'
					}
					else 
						document.getElementById(market).innerHTML = 'JOIN'
					
				},
			})
		}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>