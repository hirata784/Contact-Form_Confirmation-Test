<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="attendance__alert">
    // メッセージ機能
</div>

<div class="attendance__content">
    <div class="attendance__panel">
        <form class="attendance__button">
            <button class="attendance__button-submit" type="submit">勤務開始</button>
        </form>
        <form class="attendance__button">
            <button class="attendance__button-submit" type="submit">勤務終了</button>
        </form>
    </div>
    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">名前</th>
                <th class="attendance-table__header">開始時間</th>
                <th class="attendance-table__header">終了時間</th>
            </tr>
            <tr class="attendance-table__row">
                <td class="attendance-table__item">サンプル太郎</td>
                <td class="attendance-table__item">サンプル</td>
                <td class="attendance-table__item">サンプル</td>
            </tr>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>