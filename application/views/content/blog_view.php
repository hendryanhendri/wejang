
<div class="row justify-content-md-center">
    <div class="col-md-8">
    <br>
    <h3>Add New Topics</h3>
        <form action="<?php echo site_url('blog/publish');?>" method="post">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            
            <div class="form-group">
            <select class="form-control" name="id_category">
            <option value="#">--Choose Category--</option>
            <?php foreach ($getCategory as $value) {?>
            <option value="<?php  echo $value->id_category; ?>"><?php echo $value->category_name; ?></option>
            <?php }?>
            </select>
            </div>

            <div class="form-group">
                <textarea name="content" id="ckeditor" required></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Publish</button>
            <div class="form-group"  style="visibility: hidden;">
            <?php foreach ($getId as $value) {?>
                <input type="text" name="id_users" class="form-control" placeholder="Id Users" value="<?php echo $value->id_users ?>">
                <?php   }  ?>
                </div>

        </form>
        <br>
    <br>
    </div>
    

<script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.js');?>"></script>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
<script type="text/javascript">
$(function () {
        CKEDITOR.replace('ckeditor',{
            filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder/browse.php');?>',
            height: '400px'             
        });
    });
</script>