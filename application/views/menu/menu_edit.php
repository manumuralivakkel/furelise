<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>
    <?php
//        print_r($menudata);
                    foreach ($menudata as $key => $vals) {

                        $menu_id = $vals->menu_id;
                        $parent_id = $vals->parent_id;
                        $link_title = $vals->link_title;
                        $link_title_ar = $vals->link_title_ar;
                        $template_id = $vals->template_id;
                        $status = $vals->status;
                    }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Menu
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="<?= base_url() . 'menu/edit' ?>" method="post" enctype="multipart/form-data">                                       
                                <div class="form-group">
                                    <label>Menu Category</label>
                                    <select class="form-control" name="parent_id" required>
                                        <option value="">Select</option>
                                        <option value="0" style="font-size: medium;font-weight: bold;" <?= ($parent_id == 0 ) ? 'selected' : '' ?>>Main Menu</option>
                                        <option value="NM" style="font-size: medium;font-weight: bold;" <?= ($parent_id == 'NM' ) ? 'selected' : '' ?>>Not in Menu</option>
                                        <? foreach ($options as $key => $vals) { ?>
                                                            <option value="<?= $vals->menu_id ?>" style="font-size: medium;font-weight: bold;" <?= ($parent_id == $vals->menu_id ) ? 'selected' : '' ?>><?= $vals->link_title ?></option>
                                                            <?
                                                            $menu_id_sub = $vals->menu_id;
                                                            foreach ($results as $key => $vals) {
                                                                foreach ($vals as $key => $val) {
                                                                    if ($val->parent_id == $menu_id_sub) {
                                                                        ?>
                                                                        <option value="<?= $val->menu_id ?>" <?= ($parent_id == $val->menu_id ) ? 'selected' : '' ?>><?= $val->link_title ?></option>
                                                                        <?
                                                                    }
                                                                }
                                                            }
                                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Menu Title</label>
                                    <input class="form-control" name="link_title" value="<?= $link_title ?>">
                                    <input type="hidden" name="menu_id" value="<?= $menu_id ?>"/>
                                    <input type="hidden" name="status" value="<?= $status ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Menu Title Arabic</label>
                                    <input class="form-control" name="link_title_ar" value="<?= $link_title_ar ?>">
                                </div>

                                <div class="form-group">
                                    <label>Selects</label>
                                    <select class="form-control" name="template_id">
                                        <option value="">Select</option>
                                        <? foreach ($templates as $key => $vals) { ?>
                                                            <option value="<?= $vals->url ?>" <?= ($template_id == $vals->url ) ? 'selected' : '' ?>><?= $vals->link_title ?></option>
                                                        <? } ?>
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Submit" />
                                <!--                                        <button type="submit"class="btn btn-default" name="submit">Submit</button>-->
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