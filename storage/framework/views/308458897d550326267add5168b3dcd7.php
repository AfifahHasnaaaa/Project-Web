

<?php $__env->startSection('judul'); ?>
    Form Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
    <form action="<?php echo e(url('login')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>Username</td>
                <td>
                <input class="form-control form-user-input" type="text" name="username" required="">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color: red"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                <input class="form-control form-user-input" type="password" name="password" required="">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_custom'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\cart_22.02.0803_Afifah\resources\views/login/form.blade.php ENDPATH**/ ?>