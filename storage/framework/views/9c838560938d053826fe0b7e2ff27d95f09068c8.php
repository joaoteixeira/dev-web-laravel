<?php $__env->startSection('conteudo'); ?>

<h1 class="mt-5" style="margin-bottom:30px">Lista de contatos</h1>

<table class="table table-hover table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Whatsapp</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <td><?php echo e($loop->iteration); ?></td>
      <td><?php echo e($item->nome); ?></td>
      <td><?php echo e($item->whatsapp); ?></td>
      <td><?php echo e($item->email); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>