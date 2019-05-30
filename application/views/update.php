    <?php include_once('header.php'); ?>

    <div class="container">
    	

    <?php	echo form_open("welcome/change/{$post->id}", ['class'=>'form-horizontal']); ?>
      <fieldset>
        <legend>Update :</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          
          <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control', 'value'=>set_value('title',$post->title)]); ?>
        </div>
        <div>
            <?php echo form_error('title', '<div class = "text-danger">', '</div>');?>

        </div>


        <div class="form-group">
          <label for="exampleTextarea">Description</label>
          
          <?php echo form_textarea(['name'=>'description','placeholder'=>'description','class'=>'form-control', 'value'=>set_value('description',$post->description)]); ?>
        </div>
        <div>
            <?php echo form_error('description', '<div class = "text-danger">', '</div>');?>

        </div>
    
        <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']);
        ?>
        <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']); ?>
        

      </fieldset>

    <?php echo form_close(); ?>

    </div>

    <?php include_once('footer.php'); ?>