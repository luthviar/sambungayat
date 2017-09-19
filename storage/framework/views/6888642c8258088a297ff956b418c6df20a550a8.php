
<p>Apakah sambungan  dari ayat ini?  </p>


<p> Akhir <?php echo e($sisaAyatAwal); ?> 
	<span> ...<span> 
				<?php echo e($sisaAyatAkhir); ?> Awal
</p>


	
 
	</p>



	

						 <table style="width:50%">
						  
						  <tr>
							<?php if($randomPosisi == 1): ?>
							<td>
								<a href = "<?php echo e(route('test/', 1 )); ?>">A.</a>
							 </td>
							<td><?php echo e($substringAyat); ?></td>
							<?php else: ?>
							<td>
								<a href = "<?php echo e(route('test/', 0 )); ?>">A.</a>
							 </td>
							<td><?php echo e($opsi1); ?></td>
							<?php endif; ?>
						  </tr>
						  <tr>
								<?php if($randomPosisi == 2): ?>
							<td>
								<a href = "<?php echo e(route('test/', 1 )); ?>">B.</a>
							 </td>
							<td><?php echo e($substringAyat); ?></td>
							<?php else: ?>
							<td>
								<a href = "<?php echo e(route('test/', 0 )); ?>">B.</a>
							 </td>
							<td><?php echo e($opsi2); ?></td>
							<?php endif; ?>
						  </tr>
						  <tr>
							<?php if($randomPosisi == 3): ?>
							<td>
								<a href = "<?php echo e(route('test/', 1 )); ?>">C.</a>
							 </td>
							<td><?php echo e($substringAyat); ?></td>
							<?php else: ?>
							<td>
								<a href = "<?php echo e(route('test/', 0 )); ?>">C.</a>
							 </td>
							<td><?php echo e($opsi3); ?></td>
							<?php endif; ?>
						  
						  </tr>
						  
						  <tr>
							<?php if($randomPosisi == 4): ?>
							<td>
								<a href = "<?php echo e(route('test/', 1 )); ?>">D.</a>
							 </td>
							<td><?php echo e($substringAyat); ?></td>
							<?php else: ?>
							<td>
								<a href = "<?php echo e(route('test/', 0 )); ?>">D.</a>
							 </td>
							<td><?php echo e($opsi4); ?></td>
							<?php endif; ?>
						  
						  </tr>


						  
						  
						 </table> 
						 
						 <p><?php echo e($_SESSION["counterBenar"]); ?></p>
