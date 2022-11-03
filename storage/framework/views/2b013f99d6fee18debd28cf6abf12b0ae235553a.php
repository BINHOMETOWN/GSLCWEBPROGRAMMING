<?php $__env->startSection("container"); ?>
    <div class="text-center mb-4">
        <h2>Nilaimu Adalah.. </h2>
        21
    </div>
    <div class="d-flex justify-content-center">
        <?php if(($nilai >= 0) and ($nilai <= 20)): ?>
            <div>
                Wih kamu masih muda, main main main
            </div>
        <?php else: ?>
            <div>
               Wih udah tua, gimana enak idup?
            </div>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>'

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\binta\Downloads\New folder (12)\project1\resources\views/umur.blade.php ENDPATH**/ ?>