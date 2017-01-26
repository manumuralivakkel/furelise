<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Menu
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="<?= base_url() . 'menu/add' ?>" method="post" enctype="multipart/form-data">                                       
                                <div class="form-group">
                                    <label>Menu Category</label>
                                    <select class="form-control" name="parent_id" required>
                                        <option value="">Select</option>
                                        <option value="0" style="font-size: 14px;font-weight: bold;color: black;">Main Menu</option>
                                        <option value="NM" style="font-size: 14px;font-weight: bold;color: black;" >Not in Menu</option>
                                        <? foreach ($options as $key => $vals) { ?>
                                                            <option value="<?= $vals->menu_id ?>" style="font-size: medium;font-weight: bold;color: black;"><?= $vals->link_title ?></option>
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
                                    <label>Menu Title</label>
                                    <input class="form-control" name="link_title" value="">
                                    <input type="hidden" name="status" value="1"/>

                                </div>
                                <div class="form-group">
                                    <label>Menu Title Arabic</label>
                                    <input class="form-control" name="link_title_ar" value="">
                                </div>

                                <div class="form-group">
                                    <label>Page Template</label>
                                    <select class="form-control" name="template_id">
                                        <option value="">Select</option>
                                        <? foreach ($templates as $key => $vals) { ?>
                                                            <option value="<?= $vals->url ?>"><?= $vals->link_title ?></option>
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