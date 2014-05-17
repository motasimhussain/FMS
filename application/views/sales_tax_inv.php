<?php 	if (!isset($top_tables)) {
			$row2=NULL;
		}else {
			$row2=$top_tables->row(0); 
		}
?>

    <aside class="right-side">

    <section class="content-header">
            <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/gen_sales_tax_inv">
              <ul class="list-inline">
              <li>
                <label class="control-label" for="serial">Serial #</label>
              </li>
              <li>  
                <input type="text" class="form-control" id="serial" name="serial">
              </li>

              <li>
                <button class="btn btn-success" value="submit">Generate</button>
              </li>
              </ul>
            </form>
        </section><!-- Main content -->


<?php
if(!empty($row2)):

 ?>


<div class="pad margin no-print">
    <div class="alert alert-info" style="margin-bottom: 0!important;">
        <i class="fa fa-info"></i>
        <b>Note:</b> This page has been enhanced for printing. Click the print button at the top of the invoice to print.
    </div>
</div>
<section class="content invoice">
<div style="font-size:13px;">	<div class="row text-center">
			<h2>Sales Tax Invoice</h2>
</div>

	<table class="table-bordered">
		
				<tr>
					<td class="col-xs-2"><b>Serial #:</b> <?php echo $row2->s_serial;?></td>
					<td class="col-xs-2"><b>Dated:</b> <?php echo date('d-m-Y');?></td>
					<td class="col-xs-3"><b>Time of supply:</b> 00:00</td>
					<td class="col-xs-3"><b>Term of sale:</b> CREDIT</td>
					<td class="col-xs-2"><b>Ref.:</b><?php echo $row2->ref_num;?></td>
				</tr>
		</table>	
		<table class="table-bordered">
			
			<tr>
				<td class="col-xs-2"><b>Suppliers name</b> </td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->w_name;?></td>
				<td class="col-xs-2"><b>Buyers name</b> </td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_name;?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>Address</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->w_address; ?></td>
				<td class="col-xs-2"><b>Address</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_address; ?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>Telephone #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->w_tel; ?></td>
				<td class="col-xs-2"><b>Telephone #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_tel; ?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>GST #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->w_gst; ?></td>
				<td class="col-xs-2"><b>GST #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_gst; ?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>NTN #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->w_ntn ?></td>
				<td class="col-xs-2"><b>NTN #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_ntn ?></td>
			</tr>
		</table>
		<table class="table-bordered">
	<thead>
		<tr>
			<th class="col-xs-1 text-center">Quantity</th>
			<th class="col-xs-3 text-center">Description of goods</th>
			<th class="col-xs-1 text-center">Rate</th>
			<th class="col-xs-2 text-center">Value Excluding Taxs Rs.Ps</th>
			<th class="col-xs-1 text-center">Rate of S.tax %</th>
			<th class="col-xs-1 text-center">Sales Tax Charged</th>
			<th class="col-xs-1 text-center">F.E.D. @ 2.5%</th>
			<th class="col-xs-2 text-center">Value including Taxs Rs.Ps</th>

		</tr>

	</thead>
	<tbody>

		<?php 
		    $s_num = 1;
		    foreach ($gen_inv as $row): 
		?>
		<tr>
			<td class="col-xs-1 text-center qty"><?php echo $row->qunty; ?></td>
			<td class="col-xs-3 text-center "><?php echo $row->dscr; ?></td>
			<td class="col-xs-1 text-center "><?php echo $row->price; ?></td>
			<td class="col-xs-2 text-center price"><?php echo $row->amnt; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->sales_tax; ?>%</td>
			<td class="col-xs-1 text-center totTax"><?php echo $row->sales_tax_tot; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->fed_tax; ?>%</td>
			<td class="col-xs-2 text-center totAmnt"><?php echo $row2->tot_amnt;?></td>
		</tr>

		<?php $s_num++; endforeach; ?>
		  <tr  height='
		    <?php 
		      $num = sizeof($gen_inv);
		      echo (280-($num*15)); 
		    ?> '>

		    <td class="col-xs-1 text-center"></td>
			<td class="col-xs-3 text-center "></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-2 text-center"></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-2 text-center"></td>

		    </tr>
	</tbody>
	<tfoot><th class="col-xs-1 text-center" id="qty">Quantity</th>
			<th class="col-xs-3 text-center">Total</th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-2 text-center" id="price">123456</th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-1 text-center" id="totTax">123456</th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-2 text-center" id="totAmnt">123456</th>
</tfoot></table>
	</div>
</section>

<script type="text/javascript">
	var qty = document.getElementsByClassName("qty");
	var price = document.getElementsByClassName("price");
	var totTax = document.getElementsByClassName("totTax");
	var totAmnt = document.getElementsByClassName("totAmnt");

	var Tqty = document.getElementById("qty");
	var Tprice = document.getElementById("price");
	var TtotTax = document.getElementById("totTax");
	var TtotAmnt = document.getElementById("totAmnt");

	var qunty = 0,pr=0,tTax=0,tAmnt=0;

	for (var i = 0;i<qty.length; i++) {
		qunty = qunty + Number(qty[i].innerText);
	}

	for (var i = 0;i<price.length; i++) {
		pr = pr + Number(price[i].innerText);
	}

	for (var i = 0;i<totTax.length; i++) {
		tTax = tTax + Number(totTax[i].innerText);
	}

	for (var i = 0;i<totAmnt.length; i++) {
		tAmnt = tAmnt + Number(totAmnt[i].innerText);
	}


	Tqty.innerHTML = qunty;
	Tprice.innerHTML = pr;
	TtotTax.innerHTML = tTax;
	totAmnt.innerHTML = tAmnt;



</script>

</aside>
<?php endif;?>