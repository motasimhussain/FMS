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
<div style="font-size:13px;">	
<div class="row" style="padding-right:30px;padding-left:30px;">

	<?php if($row2->w_name == "Pak Japan Textile"){ ?>
	<div class="row">
	  	<div style="float:left;">
	  		<img src="<?=base_url(); ?>img/pjt.png">
	  	</div>
	    <div class="pull-right" style="display:inline-block;">
	      <h2 class="text-left" style="margin-top: 20px;" >
	        <strong>Sales Tax Invoice</strong>
	      </h2>
	    </div>
	</div>

	<?php }else if($row2->w_name == "Pak Japan Ink Chemical"){ ?>
	<div class="row">
	    <div style="float:left;">
	      <img src="<?=base_url(); ?>img/pjic.png">
	    </div>
	    <div class="pull-right" style="display:inline-block;">
	      <h2 class="text-right" style="margin-top: 3px;" >
	        <strong>Sales Tax Invoice</strong>
	      </h2>
	    </div>
	</div>
	<?php }else{ ?>
	 	<h3 class="pull-left"><strong><?php echo $row2->w_name;?></strong></h3>
	 	<h2 class="pull-right" style="display:inline-block;" ><strong>INVOICE</strong></h2>
	<?php } ?>

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
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_name;?></strong></td>
				<td class="col-xs-2"><b>Buyers name</b> </td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_name;?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>Address</b></td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_address; ?></strong></td>
				<td class="col-xs-2"><b>Address</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_address; ?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>Telephone #:</b></td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_tel; ?></strong></td>
				<td class="col-xs-2"><b>Telephone #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_tel; ?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>GST #:</b></td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_gst; ?></strong></td>
				<td class="col-xs-2"><b>GST #:</b></td>
				<td class="col-xs-4 border-bottom"><?php echo $row2->c_gst; ?></td>
			</tr>
			<tr>
				<td class="col-xs-2"><b>NTN #:</b></td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_ntn ?></strong></td>
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
			<td class="col-xs-3 text-center "><?php echo $row->i_name; ?></td>
			<td class="col-xs-1 text-center "><?php echo $row->price; ?></td>
			<td class="col-xs-2 text-center price"><?php echo $row->amnt; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->sales_tax; ?>%</td>
			<td class="col-xs-1 text-center totTax"><?php echo $row->sales_tax_tot; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->fed_tax; ?></td>
			<td class="col-xs-2 text-center totAmnt"><?php echo $row->tot_amnt;?></td>
		</tr>

		<?php $s_num++; endforeach; ?>
		  <tr  height='
		    <?php 
		      $num = sizeof($gen_inv);
		      echo (300-($num*15)); 
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
			<th class="col-xs-2 text-center" id="price"></th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-1 text-center" id="totTax"></th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-2 text-center" id="totAmnt"></th>
</tfoot></table>
<strong><p id="amntWrd"></p></strong>
&nbsp;
<div class="row">
	<div class="text-left" style="padding-left:15px;display:inline-block">
		<p><b><?php echo $row2->w_name; ?></b></p>
	</div>
	<div class="pull-right" style="padding-right:15px;display:inline-block">
		<p><b>Signature</b></p>
	</div>
	

</div>
	</div>
</section>

<script type="text/javascript">
(function(){
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
	TtotAmnt.innerHTML = tAmnt;


    function calc_tot(tAmnt){
    console.log("triggered");
    var num = Math.floor(Number(tAmnt));
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
    document.getElementById("amntWrd").innerHTML = inWords(num);
    }
    calc_tot(tAmnt);
    
})();
</script>




</aside>
<?php endif;?>