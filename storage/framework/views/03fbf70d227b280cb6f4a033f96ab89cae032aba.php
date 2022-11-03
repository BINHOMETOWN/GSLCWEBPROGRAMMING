<?php $__env->startSection('container'); ?>
    <div class="text-center mb-4">
        <h3>Nilaimu Adalah.. </h3>
        <?php echo e($nilai); ?>

    </div>
    <div class="d-flex justify-content-center">
        <?php if(($nilai >= 0) and ($nilai <= 30)): ?>
            <div>
                Mohon Maaf, nilai kamu belum memenuhi passing grade.
            </div>
        <?php else: ?>
            <div>
               Pertahankan! Nilaimu diatas rata-rata
            </div>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>'

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\binta\Downloads\New folder (12)\project1\resources\views/child.blade.php ENDPATH**/ ?>