<?php 

ob_start();
session_start();
include('db.php');

$id = $_SESSION['s_id']; 
$select = "SELECT * FROM users WHERE role_id = '2' AND id != '".$_SESSION['s_id']."' AND active = '1' ORDER BY id ASC ";
$res = mysqli_query($conn,$select);


if($_SESSION['id']==''){

  header("Location:index.php");
}

include('header.php');
include('menu.php');
  
 



?>
<head>
<style>

</style>
</head>
<body>
<!--   <input type='file' onchange="readURL(this);" />
    <img id="blah" src="#" alt="your image" />
 -->
<section id="content_outer_wrapper">
        <div id="content_wrapper" class="simple">
          <div id="header_wrapper" class="header-sm">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12">
                  <header id="header">
                    <h1>View Donors</h1>                    
                  </header>
                </div>
              </div>
            </div>
          </div>
          <div id="content" class="container-fluid">
            <div class="content-body">
            
              <div class="row">
                  <div class="col-xs-12">
                    <div class="card card-data-tables product-table-wrapper">
                    <header class="card-heading">
                      
                      <h2></h2>
                    
                      
                      <div class="card-search">
                        <div id="productsTable_wrapper" class="form-group label-floating is-empty">
                          <i class="zmdi zmdi-search search-icon-left"></i>
                          <input type="text" class="form-control filter-input" placeholder="Search Docters..." autocomplete="off">
                          <a href="javascript:void(0)" class="close-search" data-card-search="close" data-toggle="tooltip" data-placement="top" title="Close"><i class="zmdi zmdi-close"></i></a>
                        </div>
                      </div>
                      <ul class="card-actions icons right-top">
                        <li id="deleteItems" style="display: none;">
                          <span class="label label-info pull-left m-t-5 m-r-10 text-white"></span>
                          <a href="javascript:void(0)" id="confirmDelete" data-toggle="tooltip" data-placement="top" data-original-title="Delete Product(s)">
                            <i class="zmdi zmdi-delete"></i>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip" data-placement="top" data-original-title="Filter Products">
                            <i class="zmdi zmdi-filter-list"></i>
                          </a>
                        </li>
                       
                       
                      </ul>
                    </header>
                     <div class="card-body p-0">
                     
                      <div class="table-responsive">
                        <br><br>
                  <div class="card card-data-tables product-table-wrapper">
                        <table id="example1" class="display" style="width:100%;text-align:left !important;font-size:15px !important;overflow:auto !important;">
             <thead>
                <tr >
                  <th>Sno</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number </th> 
                  <th>Address</th>
                  <th>Blood Group</th>
              
                </tr>
              </thead>
               <tbody>
                
                <?php 
                
                $i=0;
                while($row=mysqli_fetch_assoc($res)){
                $i++  ?>
                <tr >
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['phone']; ?></td> 
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['blood_group']; ?></td>
                  
                 
                  
                  
                  
                </tr>
                <?php } ?>
               </tbody>
           
                      </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>


        <script type="text/javascript">
          table.destroy();

                $(document).ready(function() {
          $('#example1').DataTable( {
              "scrollY":        true,
              "scrollX":        true,
              "scrollCollapse": true,
              "paging":         true
          } );
      } );
        </script>