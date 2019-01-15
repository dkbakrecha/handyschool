            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Enquery List</h3>
                  <a class='btn btn-primary btn-sm pull-right' href='<?php echo $this->Html->url(array('controller' => 'academic_enquiries', 'action' => 'add', 'admin' => true)); ?>'>Add New Post</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>For Class</th>
                            <th>Father Name</th>
                            <th>Contact Number</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                    //prd($academicEnquries);
                        foreach($academicEnquries as $enq){
                            ?>
                            <tr>        
                                <td><?php echo $enq['AcademicEnquiry']['student_name']; ?></td>
                                <td><?php echo $enq['AcademicEnquiry']['class_id']; ?></td>
                                <td><?php echo $enq['AcademicEnquiry']['father_name']; ?></td>
                                <td><?php echo $enq['AcademicEnquiry']['contact_number']; ?></td>
                                <td>
                                    <?php
                                    if($enq['AcademicEnquiry']['enquiry_source'] == 1){
                                        ?><span class="label label-info">Online</span><?php
                                    }elseif ($enq['AcademicEnquiry']['enquiry_source'] == 0) {
                                        ?><span class="label label-info">Offline</span><?php
                                    }else{
                                        ?><span class="label label-info">Other</span><?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($enq['AcademicEnquiry']['status'] == 1){
                                        ?><span class="label label-success">Open</span><?php
                                    }elseif ($enq['AcademicEnquiry']['status'] == 2) {
                                        ?><span class="label label-info">Complete</span><?php
                                    }elseif ($enq['AcademicEnquiry']['status'] == 3) {
                                        ?><span class="label label-info">Pending</span><?php
                                    }else{
                                        ?><span class="label label-info">Close</span><?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-sm"> Edit </button>
                                    </a>

                                    <a href="">
                                        <button class="btn btn-sm"> Delete </button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                        
                    </tbody>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
      })
    })
</script>