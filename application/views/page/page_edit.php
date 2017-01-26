<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>
    <?php
//                           print_r($pageNo);
//                           echo $pageNo;
                    foreach ($pagedata as $key => $vals) {

                        $mm_page_id = $vals->mm_page_id;
                        $menu_id = $vals->menu_id;
                        $mm_page_text = $vals->mm_page_text;
                        $mm_page_text_arabic = $vals->mm_page_text_arabic;
                        $mm_page_title = $vals->mm_page_title;
                        $mm_page_title_arabic = $vals->mm_page_title_arabic;
                        $mm_page_content = $vals->mm_page_content;
                        $mm_page_content_arabic = $vals->mm_page_content_arabic;
                        $mm_page_url = $vals->mm_page_url;
                        $image = $vals->image;
                        $status = $vals->status;
                    }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Pages
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <form action="<?= base_url() . 'page/edit' ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Menu Category</label>
                                    <select class="form-control" name="menu_id" required>
                                        <option value="">Select</option>
                                        <option value="0" style="font-size: medium;font-weight: bold;" <?= ($menu_id == 0 ) ? 'selected' : '' ?>>Main Menu</option>
                                        <option value="NM" style="font-size: medium;font-weight: bold;" <?= ($menu_id == 'NM' ) ? 'selected' : '' ?>>Not in Menu</option>
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
                                    <label>Page title</label>
                                    <input class="form-control" name="mm_page_title" value="<?= $mm_page_title ?>">
                                    <input type="hidden" name="mm_page_id" value="<?= $mm_page_id ?>"/>
                                    <input type="hidden" name="pageNo" value="<?= $pageNo ?>"/>
                                    <input type="hidden" name="image" value="<?= $image ?>"/>
                                    <input type="hidden" name="status" value="<?= $status ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Page title Arabic</label>
                                    <input class="form-control" name="mm_page_title_arabic" value="<?= $mm_page_title_arabic ?>">
                                </div>


                                <div class="form-group">
                                    <label>Page Content</label>
                                    <?php echo $this->ckeditor->editor('mm_page_content', $mm_page_content); ?>
                                </div>
                                <div class="form-group">
                                    <label>Page Content Arabic</label>
                                    <?php echo $this->ckeditor->editor('mm_page_content_arabic', $mm_page_content_arabic); ?>
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