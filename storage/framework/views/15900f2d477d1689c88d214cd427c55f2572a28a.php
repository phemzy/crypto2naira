<?php $__env->startSection('content'); ?>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        <div class="content bg-image overflow-hidden" style="background-image: url(<?php echo e(asset('assets/img/photos/photo3@2x.jpg')); ?>);">
            <div class="push-50-t push-15">
                <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Stats -->
        <div class="content bg-white border-b">
            <div class="row items-push text-uppercase">
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Completed</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href=""><?php echo e($trans->where('status' , 'complete')->count()); ?></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Failed</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href=""><?php echo e($trans->where('status' , 'failed')->count()); ?></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Pending</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href=""><?php echo e($trans->where('status' , 'pending')->count()); ?></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Matched</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href=""><?php echo e($trans->where('status' , 'matched')->count()); ?></a>
                </div>
            </div>
        </div>
        <!-- END Stats -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"> Updates</h3>
                        </div>
                        
                    </div>
                    <!-- END News -->
                </div>
                <div class="col-lg-4">
                    <!-- Content Grid -->
                    <div class="content-grid">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Author of the Month -->
                                <a class="block block-link-hover2" href="base_pages_profile.html">
                                    <div class="block-header">
                                        <h3 class="block-title text-center">Admin</h3>
                                    </div>
                                    <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo e(asset('assets/img/photos/photo2.jpg')); ?>');">
                                        <div>
                                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="<?php echo e(asset('assets/img/avatars/avatar1.jpg')); ?>" alt="">
                                        </div>
                                        <div class="h5 text-white push-15-t push-5">Ashley Welch</div>
                                        <div class="h5 text-white-op">Web Developer</div>
                                    </div>
                                    <div class="block-content">
                                        <div class="row items-push text-center">
                                            <div class="col-xs-6">
                                                <div class="push-5"><i class="si si-user fa-2x"></i></div>
                                                <div class="h5 font-w300 text-muted">Profile</div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="push-5"><i class="si si-action-redo fa-2x"></i></div>
                                                <div class="h5 font-w300 text-muted">Logout</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Author of the Month -->

                                <!-- Mini Stats -->
                                <a class="block block-link-hover3" href="javascript:void(0)">
                                    <table class="block-table text-center">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <div class="push-30 push-30-t">
                                                        <i class="si si-graph fa-3x text-primary"></i>
                                                    </div>
                                                </td>
                                                <td class="bg-gray-lighter" style="width: 50%;">
                                                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> <?php echo e($trans->count()); ?></div>
                                                    <div class="h5 text-muted text-uppercase push-5-t">Transactions</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                                <a class="block block-link-hover3" href="javascript:void(0)">
                                    <table class="block-table text-center">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <div class="push-30 push-30-t">
                                                        <i class="si si-social-dribbble fa-3x text-smooth"></i>
                                                    </div>
                                                </td>
                                                <td class="bg-gray-lighter" style="width: 50%;">
                                                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> <?php echo e($admins->count()); ?></div>
                                                    <div class="h5 text-muted text-uppercase push-5-t">Admins</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                                <a class="block block-link-hover3" href="javascript:void(0)">
                                    <table class="block-table text-center">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <div class="push-30 push-30-t">
                                                        <i class="si si-social-youtube fa-3x text-city"></i>
                                                    </div>
                                                </td>
                                                <td class="bg-gray-lighter" style="width: 50%;">
                                                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> <?php echo e($sub->count()); ?></div>
                                                    <div class="h5 text-muted text-uppercase push-5-t">Subscribers</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                                <a class="block block-link-hover3" href="javascript:void(0)">
                                    <table class="block-table text-center">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <div class="push-30 push-30-t">
                                                        <i class="si si-users fa-3x text-primary-dark"></i>
                                                    </div>
                                                </td>
                                                <td class="bg-gray-lighter" style="width: 50%;">
                                                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> <?php echo e($users->count()); ?></div>
                                                    <div class="h5 text-muted text-uppercase push-5-t"> Users</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                                <!-- END Mini Stats -->
                            </div>
                        </div>
                    </div>
                    <!-- END Content Grid -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>