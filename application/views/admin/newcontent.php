<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
              

                <div class="row">
                    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Slide Creation</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <form action="" method="post" enctype="multipart/form-data">
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>


                      <tr>
                        <td>Image / الصورة</td>
                        <td><input type="file" name="userfile['image']" required>
                        </td>
                      </tr>

                     
                    </tbody>
                  </table>
                  </form>
                  
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
               
              </div>
            </div>
            <?php if (isset($error)): ?>
              <div class="alert alert-danger " role="alert">
                      <?= $error; ?> 
              </div>
            <?php endif ?>
           
            
          </div>
        </div>
      </div>
                    </div>
                </div>
       

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

<?php include('footer.php') ?>