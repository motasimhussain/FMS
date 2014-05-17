<aside class="right-side">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/acc_ledger">

          <ul class="list-inline">
            <li><label class="control-label" for="reservation">Pick Date</label></li>
            <li>
              <input type="text" class="form-control getLedger" id="reservation" name="led_date" style="width:10em;">
            </li>
            <li><label class="control-label" for="led_for">Pick Workplace</label> </li>
            <li> 
              <select id="led_for" name="led_for" class="form-control" style="width:10em;">
                <?php foreach($select_workplace as $row): ?>
                  <option value="<?php echo $row->id; ?>"><?php echo $row->w_name; ?></option>
                <?php endforeach; ?>
              </select>
            </li>
            <li> <label class="control-label" for="coname">Pick Company</label></li>
            <li>
              <select id="coname" name="coname" class="form-control" style="width:10em;">
                <?php foreach($select_company as $row): ?>
                  <option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
                <?php endforeach; ?>
              </select>
            </li>

            <li>
              <button class="btn btn-success" value="submit">Generate</button>
            </li>
            
          </ul>
          
        </form>
        
        <!-- <ol class="breadcrumb">
            <li><a href="#">Home</a></li>

            <li><a href="#">Forms</a></li>

            <li class="active">General Elements</li>
        </ol> -->
    </section><!-- Main content -->


    <script type="text/javascript">
        var getLedgerDate = document.getElementById('reservation');
        getLedgerDate.onblur = function(){
          console.log("wololo");

          // ajax will go here //

        }
    </script>


    <section class="content">
        <div class="row">
            <!-- left column -->
        </div><!--/.col (left) -->

        <?php if($data != "no entries"): ?>

       <div style="padding-right:5px;padding-left:5px;">
           <h1 class="text-center" >Accounts Ledger</h1>
           <?php foreach($data as $row): ?>
           <table class="MsoTableGrid table" border=0 cellspacing=0 cellpadding=0
             style='border-collapse:collapse;border:none'>
             <tr>
              <td width=426 colspan=3 valign=top style='width:319.25pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->w_name; ?></p>
              </td>
              <td width=78 valign=top style='width:58.8pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Date:</p>
              </td>
              <td width=97 valign=top style='width:72.9pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo date('d-m-Y');?></p>
              </td>
             </tr>
             <tr>
              <td width=426 colspan=3 valign=top style='width:319.25pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>ACCOUNTS LEDGER</p>
              </td>
              <td width=78 valign=top style='width:58.8pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Page #:</p>
              </td>
              <td width=97 valign=top style='width:72.9pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>1</p>
              </td>
             </tr>
             <tr>
              <td width=282 valign=top style='width:211.25pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->c_name; ?></p>
              </td>
              <td width=54 valign=top style='width:40.5pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>From:</p>
              </td>
              <td width=90 valign=top style='width:67.5pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo date('d-m-Y',strtotime($this->session->userdata('st_date'))); ?></p>
              </td>
              <td width=78 valign=top style='width:58.8pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>To:</p>
              </td>
              <td width=97 valign=top style='width:72.9pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo date('d-m-Y',strtotime($this->session->userdata('en_date'))); ?></p>
              </td>
             </tr>
             <tr height=0>
              <td width=282 style='border:none'></td>
              <td width=54 style='border:none'></td>
              <td width=90 style='border:none'></td>
              <td width=78 style='border:none'></td>
              <td width=97 style='border:none'></td>
             </tr>
            </table>

            <?php
              $this->session->unset_userdata('st_date');
              $this->session->unset_userdata('en_date');
              break; endforeach; 
            ?>

            <table class="MsoTableGrid table" border=1 cellspacing=0 cellpadding=0
             style='border-collapse:collapse;border:none;font-size:13px;'>
             <tr>
              <td width=66 valign=top style='width:40pt;border-top:2.25pt;border-left:
              2.25pt;border-bottom:1.0pt;border-right:1.0pt;border-color:windowtext;
              border-style:solid;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Ref #:</p>
              </td>
              <td width=87 valign=top style='width:65.4pt;border-top:solid windowtext 2.25pt;
              border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Date</p>
              </td>
              <!-- <td width=85 valign=top style='width:63.9pt;border-top:solid windowtext 2.25pt;
              border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Main Ref #:</p>
              </td> -->
              <td width=95 colspan=4 valign=top style='width:71.3pt;border-top:solid windowtext 2.25pt;
              border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Description</p>
              </td>
              <td width=85 valign=top style='width:63.4pt;border-top:solid windowtext 2.25pt;
              border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Debit</p>
              </td>
              <td width=86 colspan=1 valign=top style='width:64.85pt;border-top:solid windowtext 2.25pt;
              border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Credit</p>
              </td>
              <td width=75 valign=top style='width:56.45pt;border-top:solid windowtext 2.25pt;
              border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Balance</p>
              </td>
             </tr>
             <tr>
              <td width=306 colspan=4 valign=top style='width:229.25pt;border-top:none;
              border-left:solid windowtext 2.25pt;border-bottom:solid windowtext 2.25pt;
              border-right:none;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Opening Balance:</p>
              </td>
              <td width=296 colspan=5 valign=top style='width:221.7pt;border-top:none;
              border-left:none;border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>$op_bal</p>
              </td>
             </tr>
             <?php foreach($data as $row): ?>
             <tr>
              <td width=66 valign=top style='width:40pt;border-top:none;border-left:
              solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->ref_num; ?></p>
              </td>
              <td width=87 valign=top style='width:65.4pt;border:none;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo date('d-m-Y',strtotime($row->date)); ?></p>
              </td>
              <!-- <td width=85 valign=top style='width:63.9pt;border:none;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'></p>
              </td> -->
              <td width=95 colspan=4 valign=top style='width:71.3pt;border:none;border-right:
              solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->dscr;?></p>
              </td>
              <td width=85 valign=top style='width:63.4pt;border:none;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->debit; ?></p>
              </td>
              <td width=86 colspan=1 valign=top style='width:64.85pt;border:none;
              border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->credit; ?></p>
              </td>
              <td width=75 valign=top style='width:56.45pt;border:none;border-right:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><?php echo $row->balance ?></p>
              </td>
             </tr>
           <?php endforeach; ?>
             <tr>
              <td width=355 colspan=6 valign=top style='width:266.25pt;border:solid windowtext 1.0pt;
              padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>Total:</p>
              </td>
              <td width=85 colspan=1 valign=top style='width:64.1pt;border:solid windowtext 1.0pt;
              border-left:none;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>$tot_debit</p>
              </td>
              <td width=86 valign=top style='width:64.15pt;border:solid windowtext 1.0pt;
              border-left:none;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>$tot_credit</p>
              </td>
              <td width=75 valign=top style='width:56.45pt;border:solid windowtext 1.0pt;
              border-left:none;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'>$tot_bal</p>
              </td>
             </tr>
             <tr height=0>
              <td width=66 style='border:none'></td>
              <td width=87 style='border:none'></td>
              <td width=85 style='border:none'></td>
              <td width=46 style='border:none'></td>
              <td width=49 style='border:none'></td>
              <td width=85 style='border:none'></td>
              <td width=1 style='border:none'></td>
              <td width=86 style='border:none'></td>
              <td width=75 style='border:none'></td>
             </tr>
            </table>
          </div>

        <?php endif; ?>

    </section>
</aside>