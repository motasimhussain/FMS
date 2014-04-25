<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Invoice Form
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        </div><!--/.col (left) -->
                        <!-- right column -->

                        <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Add Company</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url(); ?>index.php/form_process/add_co" method="post" class="form-horizontal">
                                        <fieldset>
                                        
                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Company ID</label>  
                                          <div class="col-md-4">
                                          <input id="textinput" name="c_id" placeholder="0000" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Company Description</label>  
                                          <div class="col-md-4">
                                          <input id="textinput" name="c_desc" placeholder="abcd" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Company Address</label>  
                                          <div class="col-md-4">
                                          <input id="textinput" name="c_address" placeholder="abcd123" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Dealer Name</label>  
                                          <div class="col-md-4">
                                          <input id="textinput" name="c_dealer" placeholder="abcd" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="singlebutton"></label>
                                          <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="sumbit">Add</button>
                                          </div>
                                        </div>

                                        </fieldset>
                                        </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->