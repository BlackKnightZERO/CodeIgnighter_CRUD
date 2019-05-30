<?php include_once('header.php'); ?>


<div class="container">
  <h3>View all posts</h3>
  <div>
  <?php if($msg = $this->session->flashdata('msg')): ?>
    <?php echo $msg; ?>
  <?php endif; ?>
</div>
  

  <?php echo anchor('welcome/create', 'Add Post', ['class'=>'btn btn-primary']); ?>
  <table class="table table-hover">
   <thead>
     <tr>
       <th scope="col">Title</th>
       <th scope="col">Description</th>
       <th scope="col">Creation Date</th>
       <th scope="col">Action</th>
     </tr>
   </thead>
   <tbody>
    <?php if (count($posts)): ?>
      <?php foreach ($posts as $post ): ?>
     <tr>
       <td><?php echo $post->title; ?></td>
       <td><?php echo $post->description; ?></td>
       <td><?php echo $post->date_created; ?></td>
       <td>
         <?php echo anchor("welcome/view/{$post->id}", 'View', ['class'=>'btn btn-primary btn-sm']); ?>
         <?php echo anchor("welcome/update/{$post->id}", 'Update', ['class'=>'btn btn-warning btn-sm']); ?>
         <?php echo anchor("welcome/delete/{$post->id}", 'Delete', ['class'=>'btn btn-danger btn-sm']); ?>

       </td>
     </tr>
   <?php endforeach; ?>
     <?php else: ?>
      <tr>
        <td>No Records Found!</td>
      </tr>
     <?php endif; ?>
   </tbody>
 </table></div> 



<?php include_once('footer.php'); ?>
