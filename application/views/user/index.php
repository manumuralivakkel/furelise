<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="description"content="">
        <meta name="author"content="">

        <title>Administrator</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.css"rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url() ?>assets/admin/dist/css/sb-admin-2.css"rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon.ico" />

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css"rel="stylesheet"type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .btn-success {
                color: #fff;
                background-color: #999999;
                border-color: #999999;
            }
            .btn-success:hover {
                color: #fff;
                background-color: #999999;
                border-color: #999999;
            }
            .btn-lg {
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333;
                border-radius: 0;
            }
        </style>
    </head>

    <body onload="document.forms[0].username.focus()">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" style="float: right"> <center>Administrator </center></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
            </ul>
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <p><img src="<?= base_url() ?>assets/images/home-n-garden.png"></p>
                            <p></p>
                            <!-- Notification-->
                            <? if ($this->session->flashdata('status_message') <> "") { ?>

                                                <div class="alert alert-info alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                    <?= $this->session->flashdata('status_message'); ?>
                                                </div> <? } ?>
                            <!-- Notification-->
                        </div>
                        <div class="panel-body">
                            <form name="frmLogin" method="post" action="<?= base_url() . 'user/login' ?>" >
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control"placeholder="Username" name="mm_user_name" placeholder="Username" type= "username" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control"placeholder="Password" name="mm_user_password" type="password" placeholder="Password"  required>
                                    </div>
                                    <div class="checkbox">
                                        <!--  <label>
                                             <input name="remember"type="checkbox"value="Remember Me">Remember Me
                                         </label> -->
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                    <!-- <a href="dashboard.php"class="btn btn-lg btn-success btn-block">Login</a> -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>assets/admin/dist/js/sb-admin-2.js"></script>

    </body>

</html>
