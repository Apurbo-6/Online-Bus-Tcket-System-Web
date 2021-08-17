<?php ob_start();
   session_start();

   if(!isset($_SESSION['valid'])){
    header('location:login.php'); 
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    
</head>
<body>
  <!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Valid Transections</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="trans" class="display" width="100%">
                     
                      <thead>
                        <tr>
                              <th>Purchase Date</th>
                              <th >Price</th>
                              <th>Quantity</th>
                        </tr>
                      </thead>
                      
                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <form>
        
        <table border="1"  width="100%">
            <?php 
             include 'header.php';
            ?>

        <tr rowspan class="web">
            <td class="vertical">
            <?php include 'nav.php';?>
            </td>   
            <td>
              <div style="width: 95%; margin-left: 20px;">
                <table id="user" class="display" width="100%">
                     
                      <thead>
                        <tr>
                              <th>Name</th>
                              <th >User Name</th>
                              <th >Email</th>
                              <th >DOB</th>
                              <th >Gender</th>
                              <th>Balance</th>
                              <th>Option</th>
                        </tr>
                      </thead>
                      
                </table>
                </div>

            </td>
        </tr>
        

        <?php include 'footer.php';?>
        

        </table>
    </form>
    
   <script src="../js/checkvalid.js"></script> 
</body>
</html>
