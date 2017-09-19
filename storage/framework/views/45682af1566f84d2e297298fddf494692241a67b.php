
    
    


<?php $m=0; ?>
<?php while($listQuran[$m]->IDSurat === $listQuran[$m+1]->IDSurat): ?>
    <?php $m++; ?>
<?php endwhile; ?>
<?php $m++; ?>



<p>
        <?php $n=0; $random=rand(0,$m-1);?>
    <?php while($listQuran[$n]->IDSurat === $listQuran[$n+1]->IDSurat): ?>
        <?php if($n=$random): ?>
            
                <?php echo e($jawaban = $listQuran[$random]); ?>

            <?php $n++; ?>
        <?php endif; ?>
        <?php echo e($listQuran[$n]->Word); ?>

        <?php $n++; ?>
    <?php endwhile; ?>
            <?php if($n===$m): ?>
                <?php echo e($listQuran[$n]->Word); ?>

                <?php $n=0; ?>
            <?php endif; ?>
</p>
<?php if($jawaban->Word): ?>
<p><?php echo e($jawaban->Word); ?></p>
<?php endif; ?>