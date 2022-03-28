<!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDITAR</h2>
                            
                        </div>
                        <?php //debug($id); ?>
                        <div class="body">
                           <?php echo $this->Form->create('User',array("autocomplete"=>"false"));
                            echo $this->Form->input('id');
                            ?>
                          
                        <div class="row">
                        <div class="col-md-12">
                           <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('username', array("class"=>"form-control"));?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                    	<input type="password" name="data[User][password]" class="form-control">
                                        
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">GUARDAR</button>
                         </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->