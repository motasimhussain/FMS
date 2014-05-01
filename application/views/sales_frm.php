<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Sales Form
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
                    <h3 class="box-title">Invoice Form</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/form_process/sales_frm">
                            <fieldset>
                                <!-- Form Name -->
                                <!-- Select Basic -->
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="inv_for">Invoice for:</label>
                                        <div class="col-md-7">
                                            <select id="inv_for" name="inv_for" class="form-control">
                                                <?php foreach($select_workplace as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->w_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cmp_name">Company Name:</label>
                                        <div class="col-md-7">
                                            <select id="cmp_name" name="cmp_name" class="form-control">
                                                <?php foreach($select_company as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="acc">Account:</label>
                                        <div class="col-md-7">
                                            <select id="acc" name="acc" class="form-control">
                                                <?php foreach($select_company as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        </div>                  
                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="serial">Serial #:</label>
                                        <div class="col-md-7">
                                                <input id="serial" name="serial" placeholder="" class="form-control input-md" required="" type="text" value="SO0000">
                                                
                                            </div>
                                    </div>              <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ref_num">Ref #:</label>
                                            <div class="col-md-7">
                                                <input id="ref_num" name="ref_num" placeholder="" class="form-control input-md" required="" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
  
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="bill_num">Bill #:</label>
                                            <div class="col-md-7">
                                                <input id="bill_num" name="bill_num" placeholder="" class="form-control input-md" required="" type="text">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="textinput">Date:</label>
                                            <div class="col-md-7 input-append date" id="dp3" data-date="" data-date-format="dd-mm-yyyy">
                                                <input id="pickdate" name="date" placeholder="" class="form-control input-md" type="text">
                                            </div>
                                        </div>
  
                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="desc">Description:</label>
                                            <div class="col-md-7">
                                                <textarea class="form-control" id="desc" name="desc"></textarea>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="wght">Unit Weight:</label>
                                            <div class="col-md-7">
                                                <select id="wght" name="wght" placeholder="" class="form-control input-md" required=""  class="form-control">
                                                    <option>Kilograms</option>
                                                    <option>Grams</option>
                                                    <option>Tons</option>
                                                    <option>Milligrams</option>
                                                    <option>Pounds</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="qunty">Quantity:</label>
                                            <div class="col-md-7">
                                                <input id="qunty" name="qunty" placeholder="" class="form-control input-md" required="" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="price">Unit Price</label>
                                            <div class="col-md-7">
                                                <input id="price" name="price" placeholder="" class="form-control input-md" required="" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Prepended checkbox -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="sales_tax">Sales Tax:</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <input type="checkbox" id="sales_tax_check">
                                                    </span>
                                                    <input id="sales_tax" name="sales_tax" class="form-control" placeholder="" type="text">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- Prepended checkbox -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="fed_tax">F.E.D Tax:</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <input type="checkbox" id="fed_tax_check">
                                                    </span>
                                                    <input id="fed_tax" name="fed_tax" class="form-control" placeholder="" type="text">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="amnt">Amount</label>
                                            <div class="col-md-7">
                                                <input id="amnt" name="amnt" placeholder="" class="form-control input-md" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="amnt_wrd">Amount in Words</label>
                                            <div class="col-md-7">
                                                <input id="amnt_wrd" name="amnt_wrd" placeholder="" class="form-control input-md" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Button -->
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="gen_inv"></label>
                                        <div class="col-md-11">
                                            <button id="gen_inv" name="gen_inv" class="btn btn-primary pull-right">Save</button>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- Script to dynamically generate words from numbers -->
                                <script type="text/javascript">
                                var getNum = document.getElementById("amnt");
                                function calc_tot(){
                                console.log("triggered");
                                var num = Math.floor(getNum.value);
                                var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
                                var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];
                                function inWords (num) {
                                if ((num = num.toString()).length > 9) return 'overflow';
                                n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
                                if (!n) return; var str = '';
                                str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
                                str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
                                str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
                                str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
                                str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
                                return str;
                                }
                                document.getElementById("amnt_wrd").value = inWords(num);
                                }
                                </script>
                                <script type="text/javascript">
                                var quantity = document.getElementById('qunty');
                                var ppu = document.getElementById('price');
                                var tot_amnt = document.getElementById('amnt');
                                var sales_tax_check = document.getElementById('sales_tax_check');
                                var sales_tax = document.getElementById('sales_tax');
                                ppu.onkeyup = function(){
                                var total = quantity.value * ppu.value;
                                if(total>0){
                                if(sales_tax_check.checked){
                                var tax = (total/100)*sales_tax.value;
                                tot_amnt.value = total+tax;
                                }else{
                                tot_amnt.value = quantity.value * ppu.value;
                                }
                                calc_tot();
                                }
                                }
                                quantity.onkeyup = function(){
                                var total = quantity.value * ppu.value;
                                if(total>0){
                                if(sales_tax_check.checked){
                                var tax = (total/100)*sales_tax.value;
                                tot_amnt.value = total+tax;
                                }else{
                                tot_amnt.value = quantity.value * ppu.value;
                                }
                                calc_tot();
                                }
                                }
                                sales_tax.onkeyup = function(){
                                var total = quantity.value * ppu.value;
                                if(total>0){
                                if(sales_tax_check.checked){
                                var tax = (total/100)*sales_tax.value;
                                tot_amnt.value = total+tax;
                                }else{
                                tot_amnt.value = quantity.value * ppu.value;
                                }
                                calc_tot();
                                }
                                }
                                </script>
                            </form>
                            
                            </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Hover Data Table</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive">
                                        <div role="grid" class="dataTables_wrapper form-inline" id="example2_wrapper"><div class="row"><div class="col-xs-6"></div><div class="col-xs-6"></div></div><table class="table table-bordered table-hover dataTable" id="example2" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
                                        </thead>
                                        
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                        </tfoot>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                            <td class="  sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class=" ">1.7</td>
                                            <td class=" ">A</td>
                                        </tr><tr class="even">
                                        <td class="  sorting_1">Gecko</td>
                                        <td class=" ">Firefox 1.5</td>
                                        <td class=" ">Win 98+ / OSX.2+</td>
                                        <td class=" ">1.8</td>
                                        <td class=" ">A</td>
                                    </tr><tr class="odd">
                                    <td class="  sorting_1">Gecko</td>
                                    <td class=" ">Firefox 2.0</td>
                                    <td class=" ">Win 98+ / OSX.2+</td>
                                    <td class=" ">1.8</td>
                                    <td class=" ">A</td>
                                </tr><tr class="even">
                                <td class="  sorting_1">Gecko</td>
                                <td class=" ">Firefox 3.0</td>
                                <td class=" ">Win 2k+ / OSX.3+</td>
                                <td class=" ">1.9</td>
                                <td class=" ">A</td>
                            </tr><tr class="odd">
                            <td class="  sorting_1">Gecko</td>
                            <td class=" ">Camino 1.0</td>
                            <td class=" ">OSX.2+</td>
                            <td class=" ">1.8</td>
                            <td class=" ">A</td>
                        </tr><tr class="even">
                        <td class="  sorting_1">Gecko</td>
                        <td class=" ">Camino 1.5</td>
                        <td class=" ">OSX.3+</td>
                        <td class=" ">1.8</td>
                        <td class=" ">A</td>
                    </tr><tr class="odd">
                    <td class="  sorting_1">Gecko</td>
                    <td class=" ">Netscape 7.2</td>
                    <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                    <td class=" ">1.7</td>
                    <td class=" ">A</td>
                </tr><tr class="even">
                <td class="  sorting_1">Gecko</td>
                <td class=" ">Netscape Browser 8</td>
                <td class=" ">Win 98SE+</td>
                <td class=" ">1.7</td>
                <td class=" ">A</td>
            </tr><tr class="odd">
            <td class="  sorting_1">Gecko</td>
            <td class=" ">Netscape Navigator 9</td>
            <td class=" ">Win 98+ / OSX.2+</td>
            <td class=" ">1.8</td>
            <td class=" ">A</td>
        </tr><tr class="even">
        <td class="  sorting_1">Gecko</td>
        <td class=" ">Mozilla 1.0</td>
        <td class=" ">Win 95+ / OSX.1+</td>
        <td class=" ">1</td>
        <td class=" ">A</td>
        </tr></tbody></table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example2_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
        </div><!-- /.box-body -->
    </div>
    </div>   <!-- /.row -->
    </section><!-- /.content -->
    </aside><!-- /.right-side -->