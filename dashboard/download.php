<?php
session_start();
require('../function.php');
header("X-XSS-Protection: 1; mode=block");
if (!isset($_SESSION['login']) > 0) {
    echo "<script>location.href='../'</script>";
}

?>


<html>
<head>
  <style>
  
    </style>
<title>&ensp;</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  

<body>

<a href="accounts.php">  <img src="../src/assets/img/new-text.png"  alt="Logo">
</a>

  </body>


  <style>


c {
  position: absolute;
  top: 77;
  left: 90;
  width: 400px;
  height: 45px;
  font-size: 17px;
}
 

</style>
<body>
<c class="time"><?= gmdate("l, jS F Y ", time()); ?></c>

</body>


<style>

c1 {
  position: absolute;
  top: 50;
  left: 580;
  color: black;
  font-size: 30px;
}
</style>

<div style="margin-left:5%">

<div class="w3-container">
<c1> Download List Complaint
</c1> 
</div>

<br>
<br>
<br>





</body>
<style>
img {
  position: absolute;
  top: 25;
  left: 90;
  width: 220px;
  height: 45px;
}
  body {
      background-color:#F5F5F5;
    }

</style>
</head>
<body>




<style>
   
.tombol {



                 /* Hidden by default */
              position: absolute; /* Fixed/sticky position */
             
              top: 25px;
             
              right: 30px; /* Place the button 30px from the right */
              z-index: 99; /* Make sure it does not overlap */
              border: none; /* Remove borders */
              outline: none; /* Remove outline */
              background-color: #0B1BB7; /* Set a background color */
              color: white; /* Text color */
              cursor: pointer; /* Add a mouse pointer on hover */
              padding: 7px 27px;
              border-radius: 8px; /* Rounded corners */
              font-size: 15px; /* Increase font size */
              }

              #myBtn:hover {
              background-color: #555; /* Add a dark-grey background on hover */
              }




          


  /* position: absolute;
  top: 10px;
  right: 30px;
  background-color: #0D47A1;
 
  
  padding: 6px 20px;

  border-radius: 8px;
  border-color: white;
  color:#F5F5F5;
} */
</style>
</head>
<body>
<form action="listcomplaint.php" method="GET" class="" >
            
              <input class="tombol" type="submit" value="Go Back" title=List&ensp;Complaint  to top”></input>
</form>
            
                
                 
</body>                  
                 
        
         

 




<div class="container">
    <br>
    <br>
    <br>
    <br>
    <style>
  
p  {
  color: black;
  font-family: bebas neue;
  font-size: 160%;
}


.back {
    position: absolute;
  top: 20;
  left: 30;
  width: 55px;
  height: 55px;
  background-image: url('../src/assets/img/logo-icon.png');
  background-size: cover;
  /* animation-name: back; */
  /* animation-duration: 5s; */
  /* animation-iteration-count: infinite; */
}

/* @keyframes back { */
  /* from {opacity: .30;} */
  /* to {opacity: 1;} */
  
/* } */
</style>
</head>
<body>

   
        <div class="back"></div>
       
    <div class="data-tables datatable-dark">
        <div class="row mt-4">
            
        

        <style>
           
.box {
  position: absolute;
  top: 220px;
  left: 250px;
  width: 510px;
  height: 110px;
  background-color: #E1E1E3;
  border: 0px  #FFF6F4;
  color: black;
  border-radius: 4px;
  align-items: center;
  justify-content: center;
  animation-name: example;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  
}


.box a {
  position: absolute;
  top: 18;
  left: 20px;
    color: black;
    font-family:bebas neue ;
    font-size: 19px;
    display: flex;
  justify-content: center;
  align-items: center;
}

.box form {
  position: absolute;
  top: 50;
  left: 13px;
    align-items: center;
  justify-content: center;

}
p {
  
  height: 44px;
}
</style>  

<br>
<br>
<br>

<div class="box">
  <a>by Start Date</a>
                

    
       

 
    <form action="download.php" method="GET" class="form-inline ml 1">
                        
                            <input type="date" name="tglawal" class="form-control mt-1">  
                                                  
                           <input type="date" name="tglakhir" class="form-control mt-1 ml-2">
                           <br>
                            <input type="submit" value="Filter" name="filter"  class="btn btn-success  mt-1 ml-2" title=Filter&ensp;by&ensp;Start&ensp;Date  to top” ><br></input>
                            <br>
                            <input type="submit" value="Reset" name="filter"  class="btn btn-danger mt-1 ml-2" ></input>
                            <br>
                        </form>
</div>
</div>  
</div>


<br>
<br>
<br>
<br>
<br>





<hr class="mt-5">
                  <div class="table-responsive">
					
<table style="font-size: 13px;" id="myTable" class="table table-striped table-bordered no-wrap">
                                     
                                     <thead>
                                     <tr>
                                     <th>Number</th>
                                     <th>Ticket Number</th>
                                     <th>Customer Name</th>
                                     
                                     <th>Company/Institution</th>
                                     <th>Start Date</th>
                                     <th>End Date</th>
                                     <th>Complaint Title</th>
                                         <th>Description</th>
                                         <th>Solution</th>
                                        
                                         <th>Status</th>
                                        
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php

                                if(isset($_GET['filter'])){
                                    
                                    $tglawal = $_GET['tglawal'];
                                    $tglakhir = $_GET['tglakhir'];

                                    if($tglawal!=null || $tglakhir!=null){

                                    $sql = mysqli_query($conn, "SELECT * FROM complaint WHERE `dateawal`  BETWEEN  '$tglawal' and '$tglakhir' and`status` <> 0");
                                    
                                }else{
                                 $sql = mysqli_query($conn, "SELECT * FROM complaint WHERE `dateawal`and`status` <> 0");
                                }
                                }else{
                                 $sql = mysqli_query($conn, "SELECT * FROM complaint WHERE `dateawal`and`status` <> 0");
                                }
                                $no=1;
                                     while ($data = mysqli_fetch_array($sql)) {
                                     ?>

                                         <tr>
                                         <td><?php echo "$no";$no++; ?></td>
                                         <td><?= $data["id"]; ?></td>
                                         <td><?= $data["nama"]; ?></td>
                                         
                                         <td><?= $data["company"]; ?></td>
                                             <td><?= $data["dateawal"]; ?></td>
                                             <td><?= $data["dateakhir"]; ?></td>
                                             
                                             <td><?= $data["complaint"]; ?></td>
                                             <td><?= $data["penjelasan"]; ?></td>
                                             <td><?= $data["solution"]; ?></td>
                                             
                                            
                         
                                             <td>
                                                 <?php
                                                 if ($data["status"] == 0) {
                                                     echo "<i class='fas fa-circle text-success font-10 mr-2'></i>Open";
                                                 } elseif ($data["status"] == 1) {
                                                     echo "<i class='fas fa-circle text-danger font-10 mr-2'></i>close";
                                                 } else {
                                                     echo "<i class='fas fa-circle text-warning font-10 mr-2'></i>Close";
                                                 }
                                                 ?>
                                             </td>
                                            
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                                 
                             </table>
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
					
                    </div>
                    </div>
                            </div>
                            <style>
                              table {
                               
                              }
                              
                      
                     .table thead th {
                      text-align: center;
                        background-color: #E1E1E3;
                        color: black;
                        border-color: black;
                     }

                     .table tbody td {
                      text-align: center;
                        background-color: white;
                        color: black;
                        border-color: black;
                     }

                     .table tbody tr:nth-child(odd) td {
                        background-color:  white;
                     }

                     .table tbody tr:hover td {
                        background-color: #FFDABC;
                     }
                     
                     table tfoot th {
                      text-align: center;
                     }

                           .table .excel   {

                            background-color: #F5F5F5;

                              }



	</style>
<script>


$(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            ,'excel', 'pdf', 'print' 
           
        ]
    } );
} );

</script>

</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer class="footer text-center text-muted">
                    All Rights Reserved by Bank Rakyat Indonesia. Designed and Developed by <a href="#">Custodian</a>.
                </footer>


<br>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>
