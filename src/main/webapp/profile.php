<?php 

ob_start();
session_start();
include('db.php');

$id = $_SESSION['s_id']; 
$select = "SELECT * FROM users WHERE id = '".$id."'";
$res = mysqli_query($conn,$select);
$row = mysqli_fetch_assoc($res);

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
                    <h1>Profile</h1>                    
                  </header>
                </div>
              </div>
            </div>
          </div>
          <div id="content" class="container-fluid">
            <div class="content-body">
            <div class="row">
              <div class="col-xs-12 col-sm-10">
                <div class="card">
                  <header class="card-heading ">
                    <h2 class="card-title">Your Profile</h2>                   
                  </header>
                  <form action="saveprofile.php" method="POST" role="form" enctype="multipart/form-data">
                  <div class="card-body">

                   <div class="form-group">                     
                      <div class="col-sm-6">                        
                          <input type="text" name="name" class="form-control" id="" value="<?php echo $row['name']; ?>"  placeholder="Name" required/>
                            
                      </div><br>                                            
                    </div>
                    <div class="form-group">                     
                      <div class="col-sm-6">                        
                          <input type="text" name="email" class="form-control"  value="<?php echo $row['email']; ?>"  id="" placeholder="Email" required/>
                            
                      </div><br>                                            
                    </div>
                     <div class="form-group">                     
                      <div class="col-sm-6">                        
                          <input type="number" name="phone" class="form-control" value="<?php echo $row['phone']; ?>"  id="" placeholder="Phone Number" required/>
                            
                      </div><br>                                            
                    </div>
                     <div class="form-group">                     
                      <div class="col-sm-6">                        
                          <input type="text" name="password" placeholder="password" class="form-control" value="<?php echo $row['password']; ?>"  id="" required/>
                            
                      </div><br>                                            
                    </div>
                    <div class="form-group">                     
                      <div class="col-sm-6">                        
                          <input type="text" name="address" placeholder="Address" class="form-control"
                           value="<?php echo $row['address']; ?>"  id="" required/>
                            
                      </div><br>                                            
                    </div>
                    <div class="form-group">                     
                      <div class="col-sm-6">  
                      <select class="form-control" class="form-control"  name="blood_group" required>
                      <option value="">Select Blood Group</option>
                      <option value="A+(Positive)" <?php if($row['blood_group'] ==   "A+(Positive)"){ ?>selected <?php } ?>>A+(Positive)</option>
                      <option value="A-(Negative)" <?php if($row['blood_group'] ==   "A-(Negative)"){ ?>selected <?php } ?>>A-(Negative)</option>
                      <option value="B+(Positive)" <?php if($row['blood_group'] ==   "B+(Positive)"){ ?>selected <?php } ?>>B+(Positive)</option>
                      <option value="B-(Negative)" <?php if($row['blood_group'] ==   "B-(Negative)"){ ?>selected <?php } ?>>B-(Negative)</option>
                      <option value="AB+(Positive)" <?php if($row['blood_group'] ==  "AB+(Positive)" ){ ?>selected <?php } ?>>AB+(Positive)</option>
                      <option value="AB-(Negative)" <?php if($row['blood_group'] ==  "AB-(Negative)" ){ ?>selected <?php } ?>>AB-(Negative)</option>
                      <option value="O+(Positive)" <?php if($row['blood_group'] ==   "O+(Positive)"){ ?>selected <?php } ?>>O+(Positive)</option>
                      <option value="O-(Negative)" <?php if($row['blood_group'] ==   "O-(Negative)"){ ?>selected <?php } ?>>O-(Negative)</option>
                      
                    </select>                          
                   </div><br>                                            
                </div>
                    <div class="form-group">                     
                      <div class="col-sm-6">  
                      <select class="form-control" class="form-control"  name="act" required>
                      <option value="">Select Availability</option>
                      <option value="0" <?php if($row['active'] == "0"){ ?>selected <?php } ?>  >Not A Donor</option>
                      <option value="1" <?php if($row['active'] == "1"){ ?>selected <?php } ?>>Be A Donor</option>
                      
                      
                    </select>                          
                   </div><br>                                            
                </div>
                  
  
                      
                   
                  <div class="card-footer text-right">
                    <input type="submit" name="submit"  class="btn btn-primary"/>
                  </div>
                </form>
                </div>
              </div>

                 <div id="content" class="container-fluid">
            <div class="content-body">
              <div class="row">
                <div class="col-xs-12">
                  <div class="card card-data-tables product-table-wrapper">
             
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