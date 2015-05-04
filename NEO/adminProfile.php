<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 4/29/15
 * Time: 1:08 PM
 */

/* when we finish implementing the php page
if(!isset($_SESSION['username'])){
    header("Location: login.html");
}
*/

require "adminFunctions.php";
?>
<div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
          <?php require "taskPanel.php"?>

        <div class="col-sm-9 col-md-10 main">

          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>

		  <h1 class="page-header">Administrator Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder text-center">
                <img id='profile' src='<?=$_SESSION['profile_picture']?>' width='100px' class="center-block img-responsive img-circle">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <hr>

          <h2 class="sub-header">Evacuees</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Given Name</th>
                  <th>Surname</th>
                  <th>Date of Birth</th>
                  <th>Sex</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    getEvacTables();
                ?>
              </tbody>
            </table>
          </div>


      </div><!--/row-->
	</div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2015 NEO</p>
</footer>
