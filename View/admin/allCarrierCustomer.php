<?php require_once('inc/header.php');



?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h2 class="page-header">  All Carrier Customer</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
               <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover customerTbl" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sr.no.</th>
                                            <th>User Name</th>
                                            <th>Company Name</th>
                                            <th>Email</th>
                                            <th>Contact No.</th>
                                            <th>Status</th>
                                            <th>Join</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                          $i = 1;
                                          foreach ($users as $val) { ?>
                                           
                                       
                                        <tr class="row<?=$val->id;?>">
                                            <td><?=$i;?></td>
                                            <td><?= ucwords($val->first_name)." ".$val->last_name;?></td>
                                            <td><?=$val->company_name;?></td>
                                            <td><?=$val->email;?></td>
                                            <td><?=$val->mobile;?></td>
                                            <td class="statusBg<?=$val->id;?>">
                                               <?php 
                                                   if($val->status == 0){
                                                  
                                                     echo "<span class='btn btn-primary'>Pendding</span>";
                                                   }elseif ($val->status == 1) {
                                                      echo "<span class='btn btn-success'>Active</span>";
                                                   }elseif ($val->status == 2) {
                                                       echo "<span class='btn btn-warning'>Suspend</span>";
                                                   }
                                               ?>
                                            </td>
                                            <td><?=date("d-m-Y",$val->join_date);?></td>
                                            <td class="center">

                                                 <div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    Action
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu actionBx" aria-labelledby="dropdownMenu1">
                                                    
                                                    <li><a href="javascript:;" class="deleteItme" data-id="<?=$val->id;?>" data-action="deleteCarrier">Delete</a></li>
                                                    
                                                  </ul>
                                                </div>
                                            </td>
                                          <?php $i++; } ?>  
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

<?php require_once('inc/footer.php');?>