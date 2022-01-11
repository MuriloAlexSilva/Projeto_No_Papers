<?php if(isset($lista)): ?>
    <div class="row">
        <?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="<?php echo e(asset($car->foto)); ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo e($car->nome); ?> - R$ <?php echo e($car->valor); ?></h6>
                        <a href="<?php echo e(route('adicionar_carrinho',['idcarro' => $car->id])); ?>" class="btn btn-sm btn-secondary">Adicionar Carro</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\PHP\Projeto_No_Papers\projeto_no_papers\resources\views/layouts/_carros.blade.php ENDPATH**/ ?>