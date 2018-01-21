<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include "sidebar.php"; ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Maintenance
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Country Details</h3>

        </div>
        <div class="box-body">
          <button class="btn btn-primary" href="modals.php #modal-default" data-toggle="modal" data-target="#countrymodal" style="padding: 10px; width: 100px;"><strong>Add</strong>  <span class="fa fa-plus"></span></button>
          <div class="row">
        <div class="col-xs-12">
            <div class="box-header">

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Country ID</th>
                  <th>Country</th>
                  <th>No. of Requirements</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>Japan</td>
                  <td>###</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>China</td>
                  <td>###</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>USA</td>
                  <td>###</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
      </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

  <!-- modal -->
  <div class="modal fade text-center" id="countrymodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Country</h4>
      </div>
        <div class="modal-body">
          <div class= "form-group">
          <label>Country Name: </label> <input type="text" class="form-control" placeholder="Country Name">
        </div>
        <div class="form-group">
          <label>Requirement Name: </label>
          <select class="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>

  <?php include "footer.php"; ?>
  <?php include "scripts.php"; ?>
</body>
</html>
