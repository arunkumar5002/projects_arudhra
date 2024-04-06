<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8" />
  <title>Arudhara Technology</title>
  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Construction Html5 Template" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/jpg" href="images/favicon.jpg" />
  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" />
  <!-- image-mini-ani -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css" />
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css" />
  <link rel="stylesheet" href="plugins/slick/slick-theme.css" />
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css" />
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css" />

</head>

<body>
<?php 

include "config.php";
   
?>


  <div class="body-inner">
    <!-- Header start -->

    <header>
      <div class="nav_bar">
        <div class="container mt-2">
          <div class="row d-flex justify-content-around" style="align-items:center;">
            <div class="logo"><a href="index.php"><img src="images/arudhra_logo.jpeg" alt="logo" style="height:55px;!important"></a></div>
            <nav id='cssmenu'>


              <div class="button" id="nav_btn"></div>
              <ul>
                <li><a href='index.php'>HOME</a></li>

                <li id="categoryList"><a href='products.php'>OUR PRODUCTS</a>
				
<ul>
    <?php
    $result_parent = $conn->query("SELECT * FROM category WHERE status = 1 AND parent_id = 0");
    
    while ($row_parent = $result_parent->fetch_assoc()) {
        ?>
        <li>
            <a href="#"><?php echo $row_parent['name']; ?></a>
            <ul>
                <?php
                $result_child = $conn->query("SELECT * FROM category WHERE status = 1 AND parent_id = " . $row_parent['id']);
                
                if ($result_child->num_rows > 0) {
                    while ($row_child = $result_child->fetch_assoc()) {
                        ?>
                        <li>
                            <a href="./products_view.php?id=<?php echo $row_child['id']; ?>"><?php echo $row_child['name']; ?></a>
                            <ul>
                                <?php
                                $stmt_products = $conn->prepare("SELECT products.* 
                                                                FROM products 
                                                                LEFT JOIN category ON products.category_id = category.id 
                                                                WHERE category.id = ? AND category.status = 1");
                                $stmt_products->bind_param("i", $row_child['id']);
                                $stmt_products->execute();
                                $result_products = $stmt_products->get_result();

                                while ($row_product = $result_products->fetch_assoc()) {
                                    ?>
                                    <li><a href="./products_view.php?id=<?php echo $row_product['id']; ?>"><?php echo $row_product['sub_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php }
                } else {
                    $stmt_products = $conn->prepare("SELECT products.* 
                                                    FROM products 
                                                    LEFT JOIN category ON products.category_id = category.id 
                                                    WHERE category.id = ? AND category.status = 1");
                    $stmt_products->bind_param("i", $row_parent['id']);
                    $stmt_products->execute();
                    $result_products = $stmt_products->get_result();

                    while ($row_product = $result_products->fetch_assoc()) {
                        ?>
                        <li><a href="./products_view.php?id=<?php echo $row_product['id']; ?>"><?php echo $row_product['sub_name']; ?></a></li>
                    <?php }
                }
                ?>
            </ul>
        </li>
    <?php } ?>
</ul>


                </li>
                <li><a href='galery.php'>GALERY</a></li>
                <li><a href='clients.php'>CLIENTS</a></li>
                <li><a href='partners.php'>PARTNERS</a></li>
                <li><a href='contact.php'>CONTACT US</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </header>


    <script src="js/jquery.min.js"></script>
    <script src="js/jqyery_17.min.js"></script>
    <script type="text/javascript">
      (function($) {
        $.fn.menumaker = function(options) {
          var cssmenu = $(this),
            settings = $.extend({
              format: "dropdown",
              sticky: false
            }, options);
          return this.each(function() {
            $(this).find(".button").on('click', function() {
              $(this).toggleClass('menu-opened');
              var mainmenu = $(this).next('ul');
              if (mainmenu.hasClass('open')) {
                mainmenu.slideToggle().removeClass('open');
              } else {
                mainmenu.slideToggle().addClass('open');
                if (settings.format === "dropdown") {
                  mainmenu.find('ul').show();
                }
              }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function() {
              cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
              cssmenu.find('.submenu-button').on('click', function() {
                $(this).toggleClass('submenu-opened');
                if ($(this).siblings('ul').hasClass('open')) {
                  $(this).siblings('ul').removeClass('open').slideToggle();
                } else {
                  $(this).siblings('ul').addClass('open').slideToggle();
                }
              });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function() {
              var mediasize = 1000;
              if ($(window).width() > mediasize) {
                cssmenu.find('ul').show();
              }
              if ($(window).width() <= mediasize) {
                cssmenu.find('ul').hide().removeClass('open');
              }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
          });
        };
      })(jQuery);

      (function($) {
        $(document).ready(function() {
          $("#cssmenu").menumaker({
            format: "multitoggle"
          });
        });
      })(jQuery);
    </script>