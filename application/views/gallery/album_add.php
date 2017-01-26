<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Gallery
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <form action="<?= base_url() . 'gallery/add' ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Menu Category</label>
                                    <select class="form-control" name="menu_id" required>
                                        <option value="">Select</option>
                                        <? foreach ($options as $key => $vals) { ?>
                                                            <option value="<?= $vals->menu_id ?>" style="font-size: 14px;font-weight: bold;color: black;"><?= $vals->link_title ?></option>
                                                            <?
                                                            $menu_id = $vals->menu_id;
                                                            foreach ($results as $key => $vals) {
                                                                foreach ($vals as $key => $val) {
                                                                    if ($val->parent_id == $menu_id) {
                                                                        ?>
                                                                        <option value="<?= $val->menu_id ?>" >&nbsp;&nbsp;<?= $val->link_title ?></option>
                                                                        <?
                                                                    }
                                                                }
                                                            }
                                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gallery title</label>
                                    <input class="form-control" name="mm_gallery_title">
                                </div>
                                <div class="form-group">
                                    <label>Gallery title Arabic</label>
                                    <input class="form-control" name="mm_gallery_title_arabic">
                                </div>

                                
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="userfile" class="form-control">
                                </div>
                                <input type="hidden" name="status" value="1" />
                                <input type="submit" class="btn btn-default" value="Submit" name="submit" />
                            </form>

                        </div>
                        <!-- /.col-lg-6 (nested) --><!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<? $this->load->view('layout/footer'); ?>