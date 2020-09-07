<?php include('../admin_inc/header.php');?>
<?php include('../admin_inc/navbar.php');?>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="category.php"><i class="fa fa-desktop"></i> Category</a>
            </li>
            <li>
                <a href="makepost.php"><i class="fa fa-bar-chart-o"></i> Charts</a>
            </li>
            <li>
                <a href="tab-panel.php"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
            </li>

            <li>
                <a href="table.php"><i class="fa fa-table"></i> Responsive Tables</a>
            </li>
            <li>
                <a href="form.php" class="active-menu"><i class="fa fa-edit"></i> Forms </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
            <li>
                <a href="empty.php"><i class="fa fa-fw fa-file"></i> Empty Page</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Forms Page <small>Best form elements.</small>
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Text Input</label>
                                        <input class="form-control">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Text Input with Placeholder</label>
                                        <input class="form-control" placeholder="Enter text">
                                    </div>
                                    <div class="form-group">
                                        <label>Static Control</label>
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                    <div class="form-group">
                                        <label>File input</label>
                                        <input type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Checkboxes</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Checkbox 1
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Checkbox 2
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Checkbox 3
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Inline Checkboxes</label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox">1
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox">2
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox">3
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Radio Buttons</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                    value="option1" checked="">Radio 1
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                    value="option2">Radio 2
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios3"
                                                    value="option3">Radio 3
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Inline Radio Buttons</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1"
                                                value="option1" checked="">1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2"
                                                value="option2">2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3"
                                                value="option3">3
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Selects</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Multiple Selects</label>
                                        <select multiple="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <h4>Disabled Form States</h4>
                                <form role="form">
                                    <fieldset disabled="">
                                        <div class="form-group">
                                            <label for="disabledSelect">Disabled input</label>
                                            <input class="form-control" id="disabledInput" type="text"
                                                placeholder="Disabled input" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledSelect">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-control">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">Disabled Checkbox
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Disabled Button</button>
                                    </fieldset>
                                </form>
                                <h4>Form Validation States</h4>
                                <form role="form">
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess">Input with success</label>
                                        <input type="text" class="form-control" id="inputSuccess">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning">Input with warning</label>
                                        <input type="text" class="form-control" id="inputWarning">
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label" for="inputError">Input with error</label>
                                        <input type="text" class="form-control" id="inputError">
                                    </div>
                                </form>
                                <h4>Input Groups</h4>
                                <form role="form">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-eur"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php include('admin_inc/footer.php'); ?>
        <script src="assets/js/jquery-1.10.2.js"></script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/jquery.metisMenu.js"></script>

        <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="assets/js/morris/morris.js"></script>


        <script src="assets/js/easypiechart.js"></script>
        <script src="assets/js/easypiechart-data.js"></script>

        <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

        <script src="assets/js/custom-scripts.js"></script>
        <!-- /. ROW  -->