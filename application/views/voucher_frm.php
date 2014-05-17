<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                   <h1>
                        Voucher
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
                                    <h3 class="box-title">Voucher</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/set_credit_limit" method="post">
                                      <fieldset>
                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="serial">Serial:</label>  
                                        <div class="col-md-4">
                                        <input id="serial" name="serial" placeholder="Credit Limit" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>
                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="v_type">Voucher type:</label>
                                        <div class="col-md-4">
                                            <select id="v_type" name="v_type" class="form-control">
                                                <option value="purchase">Payment</option>
                                                <option value="sale">Recieved</option>
                                            </select>
                                        </div>
                                    </div>


                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="method">Method:</label>
                                        <div class="col-md-4">
                                            <select id="v_type" name="method" class="form-control">
                                                <option>Cheque</option>
                                                <option>Cash</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="inv_for">Workplace:</label>
                                        <div class="col-md-4">
                                            <select id="inv_for" name="inv_for" class="form-control">
                                                <option>Payment</option>
                                                <option>Recieved</option>
                                            </select>
                                        </div>

                                       <div class="form-group">
                                        <label class="col-md-4 control-label" for="cmp_name">Company:</label>
                                        <div class="col-md-4">
                                            <select id="cmp_name" name="cmp_name" class="form-control">
                                                <option>Payment</option>
                                                <option>Recieved</option>
                                            </select>
                                        </div>


                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="chq_num">Cheque Number:</label>  
                                        <div class="col-md-4">
                                        <input id="chq_num" name="chq_num" placeholder="Credit Limit" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="tot_amnt">Amount:</label>  
                                        <div class="col-md-4">
                                        <input id="tot_amnt" name="tot_amnt" placeholder="Credit Limit" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="dscr">Description:</label>  
                                        <div class="col-md-4">
                                        <input id="dscr" name="dscr" placeholder="Credit Limit" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label" for="apply"></label>
                                        <div class="col-md-4">
                                          <button id="apply" name="apply" class="btn btn-primary" type="sumbit">Apply</button>
                                        </div>
                                      </div>

                                      </fieldset>
                                      </form>
                                      </div>
                                      </div>
                                      </section>
                                      </aside>