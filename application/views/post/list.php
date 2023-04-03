<div class="container">
    <div class="card">
    <div class="card-header">
        Create Post
    </div>
    <div class="card-body">
        <a href="<?php echo base_url('index.php/post/create')?>" class="btn btn-primary">Add Post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($post as $key => $value) {
                ?>
                <tr>
                <th scope="row"><?php echo $key ?></th>
                <td><?php echo $value->title ?></td>
                <td><?php echo $value->description ?></td>
                <td>
                    <img src="<?php echo base_url('uploads/post/'.$value->image) ?>" width="150" height="150" alt="">
                </td>
                <td><?php echo $value->tendanhmuc ?></td>
               
                <td>
                <a onclick ="return confirm('Are u sure?')" class="btn btn-danger" href="<?php echo base_url('index.php/post/delete/'.$value->id)?>">Delete</a>
                <a class="btn btn-warning" href="<?php echo base_url('index.php/post/edit/'.$value->id)?>">Edit</a>
                </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    </div>    
</div>