                    <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Enquery Add</h3>
                          <a class='btn btn-default btn-sm pull-right' href='<?php echo $this->Html->url(array('controller' => 'academic_enquiries', 'action' => 'index', 'admin' => true)); ?>'>Back</a>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <?php echo $this->Form->create('Post',array('class' => 'form-horizontal')); ?>    
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Student name</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('student_name',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Student name'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Student Gender</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('student_gender',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Student Gender'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Birth-date</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('student_dob',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Birth-date'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Class apply for</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('class_id',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Class apply for'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Current Institute</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('current_institute',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Current Institute'
                                ));
                                ?>
                            </div>
                        </div>

                        <hr class="dotted">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Father Name</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('father_name',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Father Name'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mother Name</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('mother_name',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Mother Name'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email Address</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('email',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Email Address'
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Contact Number</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('contact_number',array(
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Contact Number'
                                ));
                                ?>
                            </div>
                        </div>

                        <hr class="dotted">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Remark</label>
                            <div class="col-sm-7">
                                <?php 
                                echo $this->Form->input('Remark',array(
                                    'type' => 'textarea',
                                    'class' => 'form-control wysihtml',
                                    'placeholder' => 'Remark',
                                    'label' => false
                                ));
                                ?>
                            </div>
                        </div>

                        <hr class="dotted">
                        <button type="submit" class="btn btn-primary col-lg-offset-2">Submit</button>
                        <?php echo $this->Form->end(); ?>
                    </div>
                    <!-- /.box-body -->
                </div>