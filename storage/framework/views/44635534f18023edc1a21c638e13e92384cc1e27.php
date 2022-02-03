

<?php $__env->startSection('content'); ?>
    <!-- /. START PAGE CONTENT  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Riwayat <small>Data Tangki B</small>
                    </h1>
                </div>
            </div>
        
       
        <!-- /. START TABLE  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/tangki_b/tambah" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pengecekan</th>
                                        <th>Tinggi Cairan <sup>m</sup></th>
                                        <th>Volume Cairan <sup>m<sup>3</sup></sup></th>
                                        <th>Suhu Cairan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $tangki2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo e($e->tanggal_cek); ?></td>
                                        <td><?php echo e($e->tinggi_cairan); ?></td>
                                        <td><?php echo e($e->volume_cairan); ?></td>
                                        <td class="center"><?php echo e($e->suhu_cairan); ?></td>
                                        <td class="center">                                            
                                            <a href="/tangki_b/edit/<?php echo e($e -> id); ?>" class="btn btn-warning btn-sm">Edit</a>
                                            |
                                            <a href="/tangki_b/hapus/<?php echo e($e -> id); ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ujicobalaravel1\resources\views/tangki2/tampil.blade.php ENDPATH**/ ?>