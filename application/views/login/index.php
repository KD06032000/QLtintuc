<div class="container">
    <h3>LOGIN ADMIN</h3>
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
        <form action="<?php echo base_url('index.php/login-user')?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <?php echo form_error('email'); ?>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <?php echo form_error('password'); ?>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>