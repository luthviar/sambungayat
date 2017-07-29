<?php $__env->startSection('title','SambungAyat'); ?>

<?php $__env->startSection('content'); ?>

<header>
  <h2>
    <?php 
    if(isset($_SESSION["user"])){  
        echo   "Assalamu'alaikum " . $_SESSION["user"]. "!";
    }
                        //jika belum login
    else {
     header( "refresh:0;/login" );
     return "";
 }
 ?>
</h2>
</header>





<div class="row">
    <div class="12u">


<?php 
//cek pengisian profil
if(isset($_SESSION["is_profil_terisi"])){
if($_SESSION["is_profil_terisi"]){
$is_terisi = false;
}
else{
$is_terisi = true;
}
}
 ?>

<?php if($is_terisi == true): ?>

<div class="alert alert-warning">
  <strong>Warning!</strong> Anda belum mengisi profil anda. Silahkan ganti profil anda <a a href= "<?php echo e(route('/ganti_profil')); ?>">
disini
</a>.
</div>

<?php endif; ?>

<section class="box">
    <h3>Menu</h3>

    <div class="box alt">

        <div class="row no-collapse 50% uniform">
            <div class="6u"><a href="<?php echo e(route('/quiz')); ?>"><span class="image fit"><img src="images/menu1.png" alt="" /></span></a></div>
            <div class="6u"><a href="<?php echo e(route('/quiz_time')); ?>"><span class="image fit"><img src="images/menu2.png" alt="" /></span></a></div>
        </div>

         <div class="row no-collapse 50% uniform">
            <div class="6u"><a href="#"><span class="image fit"><img src="images/menu3.png" alt="" /></span></a></div>
            <div class="6u"><a href="#"><span class="image fit"><img src="images/menu4.png" alt="" /></span></a></div>
        </div>

    </div>


</section>

</div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>