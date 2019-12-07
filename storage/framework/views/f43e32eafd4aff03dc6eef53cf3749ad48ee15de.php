<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	<div class="row">
		
		<table class="table" id="example">
		<h3>Recent post send to Buffer</h3>

		<input type="text" id="myInput" placeholder="search">
    <br>
    <label>Group Search</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option><?php echo e($group->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

  <thead class="thead-dark">
    <tr>
      <th scope="col">Group Name</th>
      <th scope="col">Account Name</th>
      <th scope="col">Post Text</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    
      
      <td><?php echo e($post->group->name); ?></td>
      <td><?php echo e($post->user->name); ?></td>
      <td><?php echo e($post->details); ?></td>
      <td><?php echo e($post->created_at); ?></td>
     
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>

</table>
<?php echo e($posts->links()); ?>


</form>
		</div>
	</div>
</div>



<script>
var table = $('#example').DataTable();
 
// #myInput is a <input type="text"> element
$('#myInput').on( 'keyup', function () {
    table.search( this.value ).draw();
} );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>