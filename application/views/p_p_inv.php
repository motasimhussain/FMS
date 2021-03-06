 <?php if (!isset($top_tables)) {
  $row2=NULL;
   }else {
    $row2=$top_tables->row(0); 
   }
?>

 <!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">


<section class="content-header">
            <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/gen_purchase_serial">
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

              <li>
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
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
        <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
    </div>
</div>

<section class="content invoice">

<div style="padding-right:70px;padding-left:70px;">

<?php if($row2->w_name == "Pak Japan Textile"){ ?>
<div class="row">
  <div style="float:left;"><img src="<?=base_url(); ?>img/pjt.png"> </div>
    <div class="pull-right" style="display:inline-block;">
      <h2 class="text-center" style="margin-top: 3px;" >
        <strong>INVOICE</strong>
      </h2>
    </div>
</div>

<?php }else if($row2->w_name == "Pak Japan Ink Chemical"){ ?>
<div class="row">
    <div style="float:left;">
      <img src="<?=base_url(); ?>img/pjic.png">
    </div>
    <div class="pull-right" style="display:inline-block;">
      <h2 class="text-center" style="margin-top: 3px;" >
        <strong>INVOICE</strong>
      </h2>
    </div>
</div>
 
 <?php }else{ ?>
 <h3 class="pull-left"><strong><?php echo $row2->w_name;?></strong></h3>
    <h2 class="pull-right" style="display:inline-block;" ><strong>INVOICE</strong></h2>
 <?php } ?>
 <h5 class="text-center" style="clear:both;"><strong><?php echo $row2->w_address ?></strong></h5>
<br>

<table class="table" class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='font-size:14px;border-collapse:collapse;border:none'>

 <tr>
  <td width=162 colspan=1 valign=top style='font-size:14px;width:121.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Tel / Fax #:</p>
  </td>
  <td width=268 colspan=2 valign=top style='font-size:14px;width:201.25pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php if($row2->tot_tax != 0){echo $row2->w_tel;}else{echo "...";}?></p>
  </td>
  <td width=63 valign=top style='font-size:14px;width:47.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Serial #:</p>
  </td>
  <td width=108 valign=top style='font-size:14px;width:80.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row2->serial;?></p>
  </td>
 </tr>
 <tr>
  <td width=162 colspan=1 valign=top style='font-size:14px;width:121.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Sales Tax Registration #:</p>
  </td>
  <td width=268 colspan=2 valign=top style='font-size:14px;width:201.25pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php if($row2->tot_tax != 0){echo $row2->w_gst;}else{echo "...";}?></p>
  </td>
  <td width=63 valign=top style='font-size:14px;width:47.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Dated:</p>
  </td>
  <?php 
        $phpdate = strtotime( $row2->date );
        $mysqldate = date( 'd-m-Y', $phpdate );
  ?>
  <td width=108 valign=top style='font-size:14px;width:80.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $mysqldate;?></p>
  </td>
 </tr>
 <tr>
  <td width=162 colspan=1 valign=top style='font-size:14px;width:121.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>NTN #:</p>
  </td>
  <td width=268 colspan=2 valign=top style='font-size:14px;width:201.25pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php if($row2->tot_tax != 0){ echo $row2->w_ntn;}else{echo "...";}?></p>
  </td>
  <td width=63 valign=top style='font-size:14px;width:47.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Bill #:</p>
  </td>
  <td width=108 valign=top style='font-size:14px;width:80.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row2->bill_num;?></p>
  </td>
 </tr>
</table>


<table class="table" class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='font-size:14px;border-collapse:collapse;border:none'>
 <tr>
  <td width=102 valign=top style='font-size:14px;width:76.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Buyers Name:</p>
  </td>
  <td width=500 valign=top style='font-size:14px;width:374.7pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row2->c_name;?></p>
  </td>
 </tr>
 <tr>
  <td width=102 valign=top style='font-size:14px;width:76.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Address:</p>
  </td>
  <td width=500 valign=top style='font-size:14px;width:374.7pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row2->c_address;?></p>
  </td>
 </tr>
 <!-- <tr>
  <td width=102 valign=top style='font-size:14px;width:76.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  </td>
  <td width=500 valign=top style='font-size:14px;width:374.7pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  </td>
 </tr> -->
 <tr>
  <td width=102 valign=top style='font-size:14px;width:76.25pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'>Reference #:</p>
  </td>
  <td width=500 valign=top style='font-size:14px;width:374.7pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row2->ref_num;?></p>
  </td>
 </tr>
</table>

<table class="table" class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='font-size:14px;border-collapse:collapse;border:none'>
 <tr class="text-center">
  <td width=100 valign=top style='font-size:14px;width:75.15pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>S. No.</b></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Description</b></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Quantity</b></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Weight</b></p>
  </td>
  <td width=100 valign=top style='font-size:14px;width:75.15pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Unit Price</b></p>
  </td>
  <td width=100 valign=top style='font-size:14px;width:75.2pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Amount</b></p>
  </td>
 </tr>
 <?php $s_num = 1; foreach ($gen_inv as $row): ?>
 <tr class="text-center">
  <td width=100 valign=top style='font-size:14px;width:75.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $s_num; ?></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row->i_name; ?></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row->qunty; ?></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row->wght; ?></p>
  </td>
  <td width=100 valign=top style='font-size:14px;width:75.15pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row->price; ?></p>
  </td>
  <td width=100 valign=top style='font-size:14px;width:75.2pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row->amnt; ?></p>
  </td>
 </tr>
<?php $s_num++; endforeach; ?>
  <tr  height='
    <?php 
      $num = sizeof($gen_inv);
      echo (280-($num*10)); 
    ?> '>

  <td width=100 valign=top style='font-size:14px;width:75.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td width=100 colspan=2 valign=top style='font-size:14px;width:75.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td width=100 valign=top style='font-size:14px;width:75.15pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td width=100 valign=top style='font-size:14px;width:75.2pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  </tr>
 <tr>
  <td  colspan=7 valign=top style='font-size:14px;width:150.3pt;border:solid windowtext 1.0pt;
  border-bottom:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal' id='amntWrd'></p>
  </td>
  <td  colspan=0 valign=top style='font-size:14px;width:150.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Total Amount:</b></p>
  </td>
  <td  colspan=0 valign=top style='font-size:14px;width:150.35pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo abs($row2->tot_amnt);?></p>
  </td>
 </tr>
 <tr>
  <td  colspan=7 valign=top style='font-size:14px;width:150.3pt;border:solid windowtext 1.0pt;
  border-top:none;border-bottom:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <?php if($row2->tot_tax != 0): ?>
  <td  colspan=0 valign=top style='font-size:14px;width:150.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Add Sales Tax:</b></p>
  </td>
  <td  colspan=0 valign=top style='font-size:14px;width:150.35pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row2->tot_tax;?></p>
  </td>
  <?php endif; ?>
 </tr>
 <tr>
  <td  colspan=7 valign=top style='font-size:14px;width:150.3pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td  colspan=0 valign=top style='font-size:14px;width:150.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Total Amount Of Bill:</b></p>
  </td>
  <td  colspan=0 valign=top style='font-size:14px;width:150.35pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal' id="totAmnt"><?php echo $row2->tot_bill;?></p>
  </td>
 </tr>
 <tr height="50">
  <td width=601 colspan=9 valign=top style='font-size:14px;width:450.95pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>For <?php echo $row2->w_name;?></b></p>
  </td>
 </tr>
 <tr>
  <td width=114 colspan=2 valign=top style='font-size:14px;width:85.25pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Prepared by:</b></p>
  </td>
  <td width=181 colspan=2 valign=top style='font-size:14px;width:136.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
  <td width=95 colspan=3 valign=top style='font-size:14px;width:71.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b>Checked by:</b></p>
  </td>
  <td width=212 colspan=2 valign=top style='font-size:14px;width:158.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p  style='font-size:14px;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr height=0>
  <td width=100 style='font-size:14px;border:none'></td>
  <td width=13 style='font-size:14px;border:none'></td>
  <td width=87 style='font-size:14px;border:none'></td>
  <td width=95 style='font-size:14px;border:none'></td>
  <td width=6 style='font-size:14px;border:none'></td>
  <td width=89 style='font-size:14px;border:none'></td>
  <td width=11 style='font-size:14px;border:none'></td>
  <td width=100 style='font-size:14px;border:none'></td>
  <td width=100 style='font-size:14px;border:none'></td>
 </tr>
</table>
</div>
        </section>

        <script type="text/javascript">

        (function(){
            var getNum = document.getElementById("totAmnt");
            function calc_tot(){
            console.log("triggered");
            var num = Math.floor(Number(getNum.textContent));
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
            calc_tot();
        })();
        </script>


      <?php endif;?>
</aside><!-- /.right-side -->