<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add User
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
                                    <h3 class="box-title">Add User</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/add_usr" method="post">
                                    <fieldset>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="username">Username</label>
                                        <div class="col-md-4">
                                        <input id="username" name="username" placeholder="Enter Username" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Password input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Password</label>
                                        <div class="col-md-4">
                                          <input id="password" name="password" placeholder="Enter Password" class="form-control input-md" type="password">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="f_name">First name</label>
                                        <div class="col-md-4">
                                        <input id="f_name" name="name" placeholder="Enter First name" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="l_name">Last name</label>
                                        <div class="col-md-4">
                                        <input id="l_name" name="l_name" placeholder="Enter Last name" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="fathername">Fathers Name</label>
                                        <div class="col-md-4">
                                        <input id="fathername" name="f_name" placeholder="" class="form-control input-md" required type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="address">Address</label>
                                        <div class="col-md-4">
                                        <input id="address" name="address" placeholder="" class="form-control input-md" required type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="dob">Date of birth</label>
                                        <div class="col-md-4">
                                        <input id="dob" name="dob" placeholder="Enter Date of Birth" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="nic">N.I.C #</label>
                                        <div class="col-md-4">
                                        <input id="nic" name="nic" placeholder="Enter NIC" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="is_admin">Is Admin?</label>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline" for="is_admin-0">
                                            <input name="is_admin" id="is_admin-0" value="1" type="checkbox">
                                          </label>
                                        </div>
                                      </div>

                                      <!-- Button -->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="add_usr"></label>
                                        <div class="col-md-4">
                                          <button id="add_usr" name="add_usr" class="btn btn-primary">Create</button>
                                        </div>
                                      </div>

                                    </fieldset>
                                  </form>

                                  <?php echo form_open_multipart('upload/do_upload');?>
<fieldset>

<!-- Form Name -->
<legend>Add User Display Picture</legend>

<!-- File Button -->
<div class="form-group">
<div class="row">

<label class="col-md-4 control-label" for="userfile">Choose a picture:</label>

<div class="col-md-4">
<input type="file" id="userfile" name="userfile" size="20" class="input-file" required/>
</div>

</div>

<div class="row">

<label class="col-md-4 control-label" for="selectUser">Image for user:</label>
<div class="col-md-4">
<select id="selectUser" name="user_id" class="form-control">
<?php foreach($names as $row): ?>
<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
<?php endforeach; ?>
</select>
</div>
<input type="submit" value="upload" class="btn btn-success" />
</div>

</div>

</fieldset>
</form>


</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
</div> <!-- /.row -->
</section><!-- /.content -->
</aside><!-- /.right-side -->