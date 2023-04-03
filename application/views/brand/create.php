<div class="container">
    <div class="card">
        <div class="card-header">
            Create Brand
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
            <form action="<?php echo base_url('index.php/brand/store')?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo '<span class="text text-danger">'.form_error('title').'</span>'; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">'.form_error('description').'</span>'; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleInputPassword1">
                    <small><?php if(isset($error)){ echo $error; } ?></small>
                </div>
                <button type="submit" class="btn btn-primary">Add Brand</button>
            </form>
        </div>
    </div>    
</div>