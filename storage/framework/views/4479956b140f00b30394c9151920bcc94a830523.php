<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-5">
                <div class="card-header bg-info text-white">Task <?php echo e($task->id); ?></div>

                <div class="card-body">

                    <h2><?php echo e($task->name); ?></h2>
                    <h4><?php echo e($task->text); ?></h4>

                    <form>
                        <?php echo csrf_field(); ?>
                        <br><h5>Ответ:</h5>
                        <input type="text" class="form-control" name="r"><br>
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($task->id); ?>">
                        <input type="submit" class = "btn btn-primary">
                    </form>

                    <?php if(($r === true) && ($id == ($task->id))): ?>
                        Вы решили задачу правильно и заработали <?php echo e($task->price); ?> баллов!
                        <script>
                            var card = document.getElementsByClassName("card-body");
                            card[<?php echo $id-1; ?>].className += " bg-success";
                        </script>
                        <?php header('Location: /add/'.$task->id); exit; ?>
                    <?php elseif(($r === false) && ($id == ($task->id))): ?>
                        Неправильно, попробуйте еще раз
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>