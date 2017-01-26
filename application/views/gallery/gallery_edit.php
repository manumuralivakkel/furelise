<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>
    <?php
//                           print_r($galleryNo);
//                           echo $galleryNo;
                    foreach ($gallerydata as $key => $vals) {

                        $mm_gallery_id = $vals->mm_gallery_id;
                        $menu_id = $vals->menu_id;

                        $mm_gallery_title = $vals->mm_gallery_title;
                        $mm_gallery_title_arabic = $vals->mm_gallery_title_arabic;

                        $image = $vals->image;
                        $status = $vals->status;
                    }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Gallery
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <form action="<?= base_url() . 'gallery/edit' ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Menu Category</label>
                                    <select class="form-control" name="menu_id" required>
                                        <option value="">Select</option>
                                        <? foreach ($options as $key => $vals) { ?>
                                                            <option value="<?= $vals->menu_id ?>" style="font-size: medium;font-weight: bold;" <?= ($menu_id == $vals->menu_id ) ? 'selected' : '' ?>><?= $vals->link_title ?></option>
                                                            <?
                                                            $menu_id_sub = $vals->menu_id;
                                                            foreach ($results as $key => $vals) {
                                                                foreach ($vals as $key => $val) {
                                                                    if ($val->parent_id == $menu_id_sub) {
                                                                        ?>
                                                                        <option value="<?= $val->menu_id ?>" <?= ($menu_id == $val->menu_id ) ? 'selected' : '' ?>><?= $val->link_title ?></option>
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
                                    <input class="form-control" name="mm_gallery_title" value="<?= $mm_gallery_title ?>">
                                    <input type="hidden" name="mm_gallery_id" value="<?= $mm_gallery_id ?>"/>
                                    <input type="hidden" name="image" value="<?= $image ?>"/>
                                    <input type="hidden" name="status" value="<?= $status ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Gallery title Arabic</label>
                                    <input class="form-control" name="mm_gallery_title_arabic" value="<?= $mm_gallery_title_arabic ?>">
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="userfile" class="form-control" value="<?= ($image <> '') ? $image : '' ?>">
                                </div>
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