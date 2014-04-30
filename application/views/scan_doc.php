 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Scan Documents
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
                        <div class="col-md-4">

                        <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Scan Documents</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <?php echo form_open_multipart('upload/do_upload');?>

                                    <div class="form-group">
                                        
                                        <label>Scan Documents For</label>                                        
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                            <?php foreach($select_workplace as $row): ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->w_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>  

                                        <!-- Select Basic -->
                                    <div class="form-group">
                                        
                                        <label>Company Name</label>                                        
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                            <?php foreach($select_company as $row): ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>

                                    <div class="form-group">
                                        
                                        <label>Description</label>  
                                        <textarea class="form-control" rows="3"></textarea>

                                    </div>

                                    <legend>Add User Display Picture</legend>

                                      <!-- File Button --> 
                                        <div class="form-group">
                                            <div class="row">

                                              <label class="col-md-4 control-label" for="userfile">Choose a picture:</label>

                                              <div class="col-md-4">
                                                <input type="file" id="userfile" name="userfile" size="20" class="input-file" required />
                                              </div>

                                            </div>
                                       
                                      </div>

                                       

                                    <div class="form-group">
                                        <input type="submit" class="btn" name="sub_invoice" value="Submit" />
                                    </div>

                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->