         <script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>
                 <script src="<?=base_url(); ?>js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>

        <script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>


 <?php
 if(!isset($action))
$action = "view";
if($action == "edit"):
    ?>

<script type="text/javascript">
$(function(){
    $("input[type=text]").removeAttr('disabled');
    $("textarea").removeAttr('disabled');
});
</script>
<?php
endif;
 foreach ($inv_det as $row): 
;?>

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Invoice Profile
                        <small>Preview</small>
                    </h1>
                    <!-- <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol> -->
                </section>
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        </div><!--/.col (left) -->
                        <!-- right column -->

                        <!-- general form elements  -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Invoice Profile</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/edit_inv" method="post">
                                    <fieldset>
        
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="serial">Serial #</label>
                    <div class="col-md-7">
                    <input disabled id="serial" name="serial" value="<?php echo $row->serial;?>" class="form-control input disabled-md" type="text"  >
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="cmp_name">Company Name</label>
                    <div class="col-md-7">
                    <input disabled id="cmp_name" name="cmp_name" value="<?php echo $row->cmp_name;?>" class="form-control input disabled-md"  type="text">
                    <span class="help-block"> </span>
                    </div>
                  </div>
          
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="ref_num">Ref#</label>
                    <div class="col-md-7">
                    <input disabled id="ref_num" name="ref_num" value="<?php echo $row->ref_num;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="bill_num">Bill#</label>
                    <div class="col-md-7">
                    <input disabled id="bill_num" name="bill_num" value="<?php echo $row->bill_num;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="date">Date</label>
                    <div class="col-md-7">
                    <input disabled id="date" name="date" value="<?php echo $row->date;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="i_name">Item</label>
                    <div class="col-md-7">
                    <input disabled id="i_name" name="i_name" value="<?php echo $row->i_name;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="dscr">Description</label>
                    <div class="col-md-7">
                    <!-- <input disabled id="dscr" name="dscr" value="<?php echo $row->dscr;?>" class="form-control input disabled-md" type="text"> -->
                    <textarea disabled id="dscr" name="dscr" class="form-control input disabled-md"><?php echo $row->dscr;?></textarea>
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="wght">Unit</label>
                    <div class="col-md-7">
                    <input disabled id="wght" name="wght" value="<?php echo $row->wght;?>" class="form-control input disabled-md"  type="text">
                      
                    </div>
                  </div>

          </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="price">Price</label>
                    <div class="col-md-7">
                    <input disabled id="price" name="price" value="<?php echo $row->price;?>" class="form-control input disabled-md"  type="text">
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="qunty">Quantity</label>
                    <div class="col-md-7">
                    <input disabled id="qunty" name="qunty" value="<?php echo $row->qunty;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>


                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="sales_tax">Sales Tax</label>
                    <div class="col-md-7">
                    <input disabled id="sales_tax" name="sales_tax" value="<?php echo $row->sales_tax;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="fed_tax">FED Tax</label>
                    <div class="col-md-7">
                    <input disabled id="fed_tax" name="fed_tax" value="<?php echo $row->fed_tax;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="amnt">Amount Excl</label>
                    <div class="col-md-7">
                    <input disabled id="amnt" name="amnt" value=" <?php echo $row->amnt;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="sales_tax_tot">Sales Tax Total</label>
                    <div class="col-md-7">
                    <input disabled id="sales_tax_tot" name="sales_tax_tot" value="<?php echo $row->sales_tax_tot;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>


                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="tot_amnt">Total Amount Incl Tax</label>
                    <div class="col-md-7">
                    <input disabled id="tot_amnt" name="tot_amnt" value="<?php echo $row->tot_amnt;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>

                  <!-- Text input disabled-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="amnt_in_wrd">Amount In Words</label>
                    <div class="col-md-7">
                    <input disabled id="amnt_in_wrd" name="amnt_in_wrd" value="<?php echo $row->amnt_in_wrd;?>" class="form-control input disabled-md" type="text">
                      
                    </div>
                  </div>
          </div>

        
  </fieldset>
<?php if($action == "edit"):
?>
                                    <div class="row">
                                    <fieldset>
                                       <div class="form-group">
                                          <div class="col-md-2 pull-right">
                                            <button type="sumbit" class="btn btn-primary" name="singlebutton" id="singlebutton">Add</button>
                                          </div>
                                        </div>

                                    </fieldset>
                                <?php endif;?>
                                    </div>
                                    <input hidden type="text" name="id" value="<?php echo $inv_id ?>">
                                    <input hidden type="text" name="type" value="<?php echo $row->type ?>">
                                  </form>
</section>
</aside>
<?php endforeach; ?>