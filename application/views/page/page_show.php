<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <?
                    $this->load->view('layout/statistics');
//                    print_r($this->data);
    ?>

    <div class="row">
        <div style="float:right;margin-right:15px;padding-bottom:5px;"><a href="<?= base_url() . 'page/add/' ?>"><button type="button" class="btn btn-outline btn-primary" >
                    <i class="fa fa-plus"></i> Add Page</button></a></div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show Pages
                </div>



                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="1%">Serial </th>
                                    <th width="90%">Page Title</th>
                                    <th width="9%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <? foreach ($articles as $key => $val) { ?>
                                                    <tr class="<?= (($key + 1) % 2 == 0) ? 'odd gradeX' : 'even gradeC' ?>">
                                                        <td><?= $key + 1 ?></td>
                                                        <td><?= $val->mm_page_title ?></td>
                                                        <td class="center">
                                                            <a href="<?= base_url() . 'page/edit/' . $val->mm_page_id . '/' . $this->uri->segment(3, 0); ?>"> 
                                                                <i class="fa fa-edit" style="font-size: large;">
                                                                </i></a>
                                                            <a href="<?= base_url() . 'page/status/' . $val->mm_page_id . '/' . $val->status . '/page_show' . '/' . $this->uri->segment(3, 0) ?>">
                                                                <i class="<?= ($val->status <> 1) ? 'fa fa-share-square-o' : 'fa fa-check-square-o' ?>" style="font-size: large;">
                                                                </i> </a>
                                                        </td>
                                                    </tr>

                                                <? } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive --></div>
                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate" style="float: right">
                    <ul class="pagination">
                        <!--                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                                    <a href="#">Previous</a></li>-->
                        <? print_r($pagination) ?>
                        <!--                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                                                <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>-->
                    </ul></div>
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