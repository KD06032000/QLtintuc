<div class="container">
    <div class="card">
        <div class="card-header">
            Update Post
        </div>
        <div class="card-body">
            <?php 
                if($this->session->flashdata('success')) {
            ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php 
                } else if($this->session->flashdata('error')) {
            ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('error');?>
                </div>
            <?php }?>
            <form action="<?php echo base_url('index.php/post/update/'.$post->id)?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" value="<?php echo $post->title ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo '<span class="text text-danger">'.form_error('title').'</span>'; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" value="<?php echo $post->description ?>" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">'.form_error('description').'</span>'; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleInputPassword1">
                    <img src="<?php echo base_url('uploads/post/'.$post->image) ?>" width="150" height="150" alt="">
                    <small><?php if(isset($error)){ echo $error; } ?></small>
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </div>
    </div>    
</div>