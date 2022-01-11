


<?php $__env->startSection('content'); ?> 
    
    <h3>Carrinho</h3>
    <?php if(isset($cart) && count($cart) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nome); ?></td>
                        <td><img src="<?php echo e(asset($item->foto)); ?>" height="50"></td>
                        <td><?php echo e($item->valor); ?></td>
                        <td><?php echo e($item->descricao); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum carro foi selecionado</p>
    <?php endif; ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts/main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP\Projeto_No_Papers\projeto_no_papers\resources\views/carrinho.blade.php ENDPATH**/ ?>