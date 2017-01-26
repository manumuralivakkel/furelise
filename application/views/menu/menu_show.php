<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>

    <div class="row">
        <div style="float:right;margin-right:15px;padding-bottom:5px;"><a href="<?= base_url() . 'menu/add/' ?>"><button type="button" class="btn btn-outline btn-primary" >
                    <i class="fa fa-plus"></i> Add Menu</button></a></div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show Menu
                </div>

                <?
//                                print_r($menu);
                ?>
                <h1>

                </h1> 

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">

                        <form action="<?= base_url() . 'menu/priority' ?>" method="post" enctype="multipart/form-data">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="5%">Serial </th>
                                        <th width="80%">Menu Title</th>
                                        <th width="5%"><input type="submit" name="submit" value="Set Priority" class="button" /></th>
                                        <th width="10%">Actions</th>
                                    </tr>
                                </thead>

                                <? foreach ($menu['options'] as $key => $vals) { ?>
                                                    <tbody>
                                                        <tr class="<?= (($key + 1) % 2 == 0) ? 'odd gradeX' : 'even gradeC' ?>" style="font-weight: bold;font-size: 14px;">
                                                            <td><?= $key + 1 ?></td>
                                                            <td><?= $vals->link_title ?></td>
                                                            <td><input type="text"  name="priority[]" size="3"  value="<?= $vals->priority ?>" /><input type="hidden" name="uid[]" value="<?= $vals->menu_id ?>" /></td>
                                                            </td>
                                                            <td class="center">

                                                                <a href="<?= base_url() . 'menu/edit/' . $vals->menu_id ?>"><i class="fa fa-edit" style="font-size: large;"></i></a>
                                                                <a href="<?= base_url() . 'menu/status/' . $vals->menu_id . '/' . $vals->status . '/menu_show' ?>"><i class="<?= ($vals->status == '1') ? 'fa fa-check-square-o' : 'fa fa-share-square-o' ?>" style="font-size: large;"></i> </a>
                                                            </td>
                                                        </tr>

                                                        <?
                                                        $menu_id = $vals->menu_id;
                                                        foreach ($menu['results'] as $key => $vals) {
                                                            foreach ($vals as $key => $val) {
                                                                if ($val->parent_id == $menu_id) {
                                                                    ?>
                                                                <tbody>
                                                                    <tr class="<?= (($key + 1) % 2 == 0) ? 'odd gradeX' : 'even gradeC' ?>">
                                                                        <td>&nbsp;&nbsp;&nbsp;<?= $key + 1 ?></td>
                                                                        <td><?= $val->link_title ?></td>
                                                                        <td><input type="text"  name="priority[]" size="3"  value="<?= $val->priority ?>" /><input type="hidden" name="uid[]" value="<?= $val->menu_id ?>" /></td>
                                                                        <td class="center">

                                                                            <a href="<?= base_url() . 'menu/edit/' . $val->menu_id ?>"><i class="fa fa-edit" style="font-size: large;"></i></a>
                                                                            <a href="<?= base_url() . 'menu/status/' . $val->menu_id . '/' . $val->status . '/menu_show' ?>"><i class="<?= ($val->status == '1') ? 'fa fa-check-square-o' : 'fa fa-share-square-o' ?>" style="font-size: large;"></i> </a>
                                                                        </td>
                                                                    </tr>
                                                                    <?
                                                                }
                                                            }
                                                        }
                                                        ?>

                                                    <? }
                                    ?>
                                <input type="hidden" name="redirecturl" value="menu/show" />
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <!-- /.table-responsive --></div>

                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- /.col-lg-6 -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- /.col-lg-6 -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- /.col-lg-6 -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<? $this->load->view('layout/footer'); ?>