<?php include "includes/header.php";

$id = $_GET['id'];
 include "includes/config.php";
$result = $conn->query("SELECT *FROM products where id = '$id'");
$row = $result->fetch_assoc();

 ?>
 <input type="hidden" class="form-control" name="id" placeholder="id" value="<?php echo $row['id'];?>">
<div id="banner-area" class="banner-area" style="background-image: url(images/banner/banner5.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="banner-heading">
                        <h1 class="banner-title">Our products</h1>
                    </div>
                </div>
                <!-- Col end -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </div>
    <!-- Banner text end -->
</div>
<!-- pdf_part -->

<div class="part">
  
    <div class="container">
        <div class="row">
		
            <div class="col-lg-12">
                
                    <h3 class="main_topic mb-0">Products</h3>
                    <h4 class="sub_topic  mb-0 "><?php echo $row['sub_name'];?></h4>
              
            </div>
        
        </div>


    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
	
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="pdf_view">
                <div>
                <a href="admin/image/<?php echo $row['image'];?>" target="_blank"><img src="images/pdf_img.svg" alt=""></a>
                </div>
                <div>
               <a href="admin/image/<?php echo $row['image'];?>" target="_blank"> <h5 class="tile  mt-2"><?php echo $row['sub_name'];?></h5></a>
                </div>
            </div>

        </div>
    
    </div>
</div>



<?php include "includes/footer.php"; ?>