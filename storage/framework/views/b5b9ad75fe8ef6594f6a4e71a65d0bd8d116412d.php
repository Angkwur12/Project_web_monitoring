

<?php $__env->startSection('content'); ?>
    <!-- /. START PAGE CONTENT  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Riwayat <small>Data Tangki A</small>
                    </h1>
                </div>
            </div>
        
       
        <!-- /. START TABLE  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Advanced Tables
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php if(count($errors)>0): ?>
                                        <div class="alert alert-danger">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $tangki1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form action="/tangki_a/edit/proses/<?php echo e($e -> id); ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tanggal Pengecekan</label>
                                                    <input type="date" name="tanggal_cek" class="form-control" value="<?php echo e($e->tanggal_cek); ?>" required="required">
                                                </div>
                                            </div>                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tinggi cairan <sup>m</sup></label>
                                                    <input type= "text" name="tinggi_cairan" class="form-control" value="<?php echo e($e->tinggi_cairan); ?>" required="required"></input>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Volume Cairan <sup>m<sup>3</sup></sup></label>
                                                    <input type="text" name="volume_cairan" class="form-control" value="<?php echo e($e->volume_cairan); ?>" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Suhu Cairan <sup><sup>o</sup></sup><sup>C</sup></label>
                                                    <input type="text" name="suhu_cairan" class="form-control" value="<?php echo e($e->suhu_cairan); ?>" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12" align="right">
                                                <button type="submit" class="btn btn-warning">edit</button>
                                                <a href="/tangki_a" class="btn btn-secondary">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. END TABLE  -->
        

    </div>               
    <!-- /. END PAGE CONTENT  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ujicobalaravel1\resources\views/tangki1/edit.blade.php ENDPATH**/ ?>