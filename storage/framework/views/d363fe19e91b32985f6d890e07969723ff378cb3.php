<?php $__env->startSection('content'); ?>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- User Header -->
            <div class="block">
                <!-- Basic Info -->
                <?php echo $__env->make('partials.profile_banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- END Basic Info -->
            </div>
            <!-- END User Header -->

            <!-- Main Content -->
            <div class="row">
                <div class="col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8">
                    <!-- Follow -->
                    
                    <!-- END Follow -->

                    <!-- About -->
                    
                    <!-- END About -->

                    <!-- Followers -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Followers</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>Your followers appear here</li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- END Followers -->

                    <!-- Products -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-bar-chart"></i> Your markets</h3>
                        </div>
                        <div class="block-content">
                            <ul class="list list-simple list-li-clearfix">
                                <?php $__currentLoopData = $user_markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a class="item item-rounded pull-left push-10-r bg-info" href="javascript:void(0)">
                                            <i class="si si-rocket text-white-op"></i>
                                        </a>
                                        <h5 class="push-10-t"><?php echo e($market->abbr_name); ?></h5>
                                        <div class="font-s13"><?php echo e($market->name); ?></div>
                                        <a class="btn btn-sm btn-danger btn-xs" href="javascript:void(0)" onclick="event.preventDefault();joinMarket(<?php echo e($market->id); ?>)" id="<?php echo e($market->id); ?>"><?php echo e(Auth::user()->hasJoined($market) ? 'Leave' : 'JOIN'); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END Products -->

                    <!-- Ratings -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-star"></i> Ratings</h3>
                        </div>
                        <div class="block-content">
                            <ul class="list list-simple">
                                <li>When anyone rates you, the rating will appear here. Make your trading transactions easy and smooth to get good ratings</li>
                                
                            </ul>
                            
                        </div>
                    </div>
                    <!-- END Ratings -->
                </div>
                <div class="col-sm-7 col-sm-pull-5 col-lg-8 col-lg-pull-4">
                    <!-- Timeline -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Updates</h3>
                        </div>
                        <div class="block-content" style="padding-bottom: 50px">
                            <?php if(count($transactions) <= 0): ?>
                            <h4 class="text-center">All your transactional details and market updates will appear here. <br> <small>
                                Get your account rolling!
                            </small></h4>
                                <?php if(Auth::user()->profile->tbc_wallet_id == null || Auth::user()->profile->account_number == null): ?>
                                    <h5 class="text-center">
                                        Some of your trading details are not filled. Like your bank account details and TBC wallet ID. You need these for complete transaction. Click <a href="<?php echo e(route('trading.bank')); ?>" class="btn-link">HERE</a> to edit them.
                                    </h5>
                                <?php endif; ?>
                            <?php else: ?>

                                <div class="block block-themed">
                                    <div class="block-header bg-danger">
                                    </div>
                                    <div class="block-content">

                                        <?php if(Auth::user()->profile->tbc_wallet_id == null || Auth::user()->profile->account_number == null): ?>

                                            <h5 class="text-center">
                                                Some of your trading details are not filled. Like your bank account details and TBC wallet ID. You need these for complete transaction. Click <a href="<?php echo e(route('trading.bank')); ?>">HERE</a> to edit them.
                                            </h5>
                                            <br><hr>
                                        <?php endif; ?>
                                        
                                        <ul class="list list-timeline pull-t">
                                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <!-- Photo Notification -->
                                            <?php echo $__env->make('partials.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <!-- END Photo Notification -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>

                                        <?php echo e($transactions->links()); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- Generic Notification -->
                            
                            <!-- END Generic Notification -->

                            <!-- Twitter Notification -->
                            
                            <!-- END Twitter Notification -->
                        </div>
                    </div>
                    <!-- END Timeline -->
                </div>
            </div>
            <!-- END Main Content -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
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
                        document.getElementById(market).innerHTML = 'Leave'
                    }
                    else 
                        document.getElementById(market).innerHTML = 'JOIN'
                    
                },
            })
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>