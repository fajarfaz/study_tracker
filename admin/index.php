<?php session_start(); 
if (empty($_SESSION['status'])) {
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Study Tracker</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>

    <style>
      /* Center the loader */
      #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 120px;
        height: 120px;
        margin: -76px 0 0 -76px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
      }

      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

      /* Add animation to "page content" */
      .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
      }

      @-webkit-keyframes animatebottom {
        from { bottom:-100px; opacity:0 } 
        to { bottom:0px; opacity:1 }
      }

      @keyframes animatebottom { 
        from{ bottom:-100px; opacity:0 } 
        to{ bottom:0; opacity:1 }
      }

      #myDiv {
        display: none;
        text-align: center;
      }
    </style>


    <body onload="loaderFunc()">
      <div id="loader-bk" >
        <div id="loader">
          <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
          </div>
        </div>
      </div>
        <div style="display:none;" id="load_page" class="animate-bottom">
       <section
  class="h-full w-full border-box transition-all duration-500 linear relative"
  style="background-color: #FAFCFF;"
  >
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .btn-no-fill-header-3-3{
      color: #8B9CAF;
    }
    .btn-no-fill-header-3-3:hover{
      color: #243142;
    }
    .btn-outline-header-3-3:hover{
      border: 1px solid #6DA4F9;
      color: #6DA4F9;
    }
    .card-header-3-3{
      box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
      transition: 0.4s;
      top: 0px;
      left: 0px;
      position: relative;
    }
    .card-header-3-3:hover{
      box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
      top: -3px;
      left: -3px;
      position: relative;
      transition: 0.4s;
    }
    .navigation-header-3-3 .active { 
      position: relative;
      padding-bottom: 3px;
      padding-top: 3px;
    }
    .navigation-header-3-3 .active:before {
      content: "";
      position: absolute;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      text-align: center;
      bottom: 0;
      height: 0px;
      width: 80%;  /* or 100px */
      border-bottom: 2px solid #4E91F9;
    }
    .btn-fill-header-3-3{
      border: 1px solid #4E91F9;
      background-color: #4E91F9;
      transition: 0.3s;
    }
    .btn-fill-header-3-3:hover{
      background-color: #6DA4F9;
      border: 1px solid #6DA4F9;

    }
    .btn-outline-header-3-3{
      border: 1px solid #A6B1BE;
      color: #A6B1BE;
      transition: 0.3s;
    }
    .btn-outline-header-3-3:hover div path{
      fill: #6DA4F9;
    }
    .btn-outline-header-3-3:hover div rect{
      stroke: #6DA4F9;
    }
    .navigation-header-3-3 a:hover{
      color: #243142 !important;
      font-weight: 500;
    }
    #form-header-3-3{
        width: 100%;
      }
    #form-header-3-3 input[type="text"] {
      width: 100%;
      background-color: #eef4fd;
      box-sizing: border-box;
      font-size: 14px;
      padding: 0.375rem 0.5rem;
      -webkit-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
    }
    .search-icon-header-3-3:hover path{
      fill: #243142;
    }
    @media(max-width:640px){
      #hero-header-3-3 {
        height:fit-content
      }
    }
    @media (max-width: 1023px) { 
      #form-header-3-3 input[type="text"] {
      width: 100%;
      }
    }
    @media(min-width:1024px) {
    .center-search-header-3-3{
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
    }      
    #form-header-3-3{
      width: 320px;
    }
  }
  </style>
      <!-- Navbar -->
    <div style="font-family: 'Poppins', sans-serif;">
      <?php include 'navbar.php' ?>
      <div class="lg:px-24 md:px-16 sm:px-8 px-8 ">
        <hr style="border-color: #F3F8FF;">
      </div>
      <div class="badan" ></div> 
      <!-- Hero-header-3-3 -->      
    </div>
  </section>    
  <script type="text/javascript">
    $(document).ready(function(){
      $('.klik_menu').click(function(){
        var menu = $(this).attr('id');
        if(menu == "dash"){
          $('.badan').load('pages.php?page=dash');
        }else if(menu == "stat"){
          $('.badan').load('pages.php?page=stat');            
        }else if(menu == "approval"){
          $('.badan').load('pages.php?page=approval');             
        }else if(menu == "users"){
          $('.badan').load('pages.php?page=users');            
        }else if(menu == "feature"){
          $('.badan').load('pages.php?page=feature');           
        }else if(menu == "siswa"){
          $('.badan').load('pages.php?page=siswa');            
        }else if(menu == "report"){
          $('.badan').load('pages.php?page=report');            
        }

      });
      $('.badan').load('pages.php?page=dash');  
    })
    //complete_profile
     $(".badan").on("submit", "#complete_profile", function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action_users.php?action=complete_profile',
        type: 'post',
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          $('.modal-backdrop.show').hide();
          $(".modal-open").css("overflow","auto");         
          $('.badan').load('pages.php?page=feature');
        }
      });
    });

    $(".badan").on("submit", "#AddUsers", function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action_users.php?action=insert',
        type: 'post',
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          $('.modal-backdrop.show').hide();
          $(".modal-open").css("overflow","auto");
          $('.badan').load('pages.php?page=users');
        }
      });
    });


    $(".badan").on("click", "#DeleteUsers", function() {
      var username_nisn = $(this).attr("value");
      $.ajax({
        url: 'action_users.php?action=delete',
        type: 'post',
        data: {
          username_nisn: username_nisn
        },
        success: function(data) {
          alert(data);
          $('.badan').load('pages.php?page=users');
        }
      });
    });

    $(".badan").on("click", "#approve", function() {
      var nisn = $(this).attr("value");
      $.ajax({
        url: 'action_users.php?action=approve',
        type: 'post',
        data: {
          nisn: nisn
        },
        success: function(data) {
          alert(data);
          $('.badan').load('pages.php?page=approval');
        }
      });
    });
  </script>
  <script type="text/javascript">

    var myVar;
    function loaderFunc() {
      myVar = setTimeout(showPage, 300);
    }

    function showPage() {
      document.getElementById("loader-bk").style.display = "none";
      document.getElementById("loader").style.display = "none";  
      document.getElementById("load_page").style.display = "block";
    }


  </script>
    </body>
  </html>