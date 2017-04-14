
<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Bootstrap Case</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- ng-libs -->
        <script type="text/javascript" src="assets/angular-js/angular.min.js"></script>
        <script type="text/javascript" src="assets/angular-js/ui-bootstrap.min.js"></script>
    </head>
    <body>

<?php
include('final-step.php');
   // echo '<pre>'.print_r($steps,true);
// header("content-type : application/json");
//     echo json_encode($steps);
//     
//     ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-pills nav-pills-header">
                <?php foreach ($steps as $key=> $value) { ?>
                <li class="<?= isset($value['active']) && $value['active'] == true ? 'active' : '' ?>">
                    <a data-toggle="tab" data-target="#<?= $value['id'] ?>">
                        <?=$value['name'] ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="col-sm-12">
         <hr>
            <div class="tab-content">
                <?php foreach ($steps as $key=> $value) { ?>
                <div id="<?= $value['id'] ?>" class="tab-pane fade <?= isset($value['active']) && $value['active'] == true ? 'active in' : '' ?>">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs nav-pills-header">
                                <?php foreach ($value['category'] as $k=> $v) { ?>
                                <li class="<?= isset($v['active']) && $v['active'] == true ? 'active' : '' ?>">
                                    <a data-toggle="tab" data-target="#<?= $v['id'] ?>">
                                        <?=$v['name'] ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>



                        </div>

                         <div class="col-sm-12">

                            <div class="tab-content">
                               
                                <?php foreach ($value['category'] as $k=> $v) { ?>
                                 
                                 <div id="<?= $v['id'] ?>" class="tab-pane fade <?= isset($v['active']) && $v['active'] == true ? 'active in' : '' ?>">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="nav nav-pills nav-pills-header">
                                                <?php foreach ($v['categories'] as $ke=> $va) { ?>
                                                <li class="<?= isset($va['active']) && $va['active'] == true ? 'active' : '' ?>">
                                                    <a data-toggle="tab" data-target="#<?= $va['id'] ?>">
                                                        <?=$va['name'] ?>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                 </div>
                                <?php } ?>
                            </div>
                        </div>   
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>  
</div>  
        
    </body>
</html>