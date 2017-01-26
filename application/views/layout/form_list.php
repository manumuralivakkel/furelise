<?include 'include.header.php'; ?>
<div id="page-wrapper">
            <?include 'include.statistics.php'; ?>
            
            <div class="row"><div style="float:right;margin-right:15px;padding-bottom:5px;"><a href="form.add.php"><button type="button" class="btn btn-outline btn-primary" >
            <i class="fa fa-plus"></i> Add Page</button></a></div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        
                           
                             
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="5%">Serial </th>
                                            <th width="28%">Rendering engine</th>
                                            <th width="21%">Browser</th>
                                            <th width="14%">Platform(s)</th>
                                            <th width="18%">Engine version</th>
                                            <th width="14%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                        <td>01</td>
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center"><i class="fa fa-trash-o" style="font-size: large;"></i> <i class="fa fa-edit" style="font-size: large;"></i> <i class="fa fa-check-square-o" style="font-size: large;"></i> <i class="fa fa-share-square-o" style="font-size: large;"></i></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>02</td>
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center"><i class="fa fa-trash-o"></i> <i class="fa fa-edit"></i> <i class="fa fa-check-square-o"></i> <i class="fa fa-share-square-o"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <!-- /.table-responsive --></div>
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate" style="float: right">
                        <ul class="pagination">
                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                        <a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                        <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
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
        <?include 'include.footer.php'; ?>