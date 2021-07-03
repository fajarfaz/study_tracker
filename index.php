<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Study Tracker</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
        <?php @ob_start();
        session_start(); 

        if (!empty($_SESSION['status'])) {
          header("Location: admin/index.php");
        }
        ?>
        function do_login()
        {
         var email=$("#username").val();
         var pass=$("#password").val();
         if(email!="" && pass!="")
         {
          $("#loading_spinner").css({"display":"block"});
          $.ajax
          ({
            type:'POST',
            url:'komponen/check_login.php',
            data:{
             do_login:"do_login",
             email:email,
             password:pass
           },
           success:function(response) {
            if(response=="success")
            {
              window.location.href="admin/index.php";
            }
            else
            {
              $("#loading_spinner").css({"display":"none"});
              alert("NISN / Password anda Salah");
            }
          }
        });
        }

        else
        {
          alert("Please Fill All The Details");
        }

        return false;
      }
    </script>

    </head>
    
    <body >
     
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

 <section
    class="h-full w-full border-box transition-all duration-500 linear" style="background-color:#F5F5F5;"
    >

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .input-empty-3-5{
        border: 1px solid #CACBCE;
        color: #2A3240;
      }
      .input-empty-3-5:focus-within{
        border: 1px solid #2EC49C;
        color: #2A3240;
      }
      .input-empty-3-5 input::placeholder {
        color: #CACBCE;
      }
      .input-empty-3-5:focus-within input::placeholder {
        color: #2A3240;
        outline: none;
      }  
      .input-empty-3-5:focus-within .icon-empty-3-5 path{
        transition: 0.3;
        fill: #2EC49C;
      }
      .input-empty-3-5 .icon-toggle-empty-3-5 path{
        transition: 0.3;
        fill: #2EC49C;
      }
      .centered-empty-3-5{
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
      }
      .width-left-empty-3-5{
        width: 0%;
      }
      .width-right-empty-3-5{
        width: 100%;
      }
      .forgot-password-empty-3-5{
        color: #CACBCE;
        transition: 0.3s;
      }
      .forgot-password-empty-3-5:hover{
        color: #2A3240;
      }
      .btn-fill-empty-3-5{
        background-image: linear-gradient(rgba(91, 203, 173, 1), rgba(39, 194, 153, 1));
      }
      .btn-fill-empty-3-5:hover{
        background-image: linear-gradient(#2EC49C, #2EC49C);;
      }
      @media(min-width: 1024px){
        .width-left-empty-3-5{
        width: 48%;
      }
      .width-right-empty-3-5{
        width: 52%;
      }
      }
    </style>

    <div style="font-family: 'Poppins', sans-serif;">                          
    <div class="flex flex-col items-center h-full lg:flex-row ">
      <div class="relative hidden lg:block h-full width-left-empty-3-5">
        <img class="absolute object-fill centered-empty-3-5" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png" alt="">                      
      </div>   
      <div class="flex w-full h-full px-8 width-right-empty-3-5 sm:px-16 py-32 lg:mx-0 mx-auto items-left justify-left" style="background-color: #FCFDFF;">
          <div class="w-full sm:w-7/12 md:w-8/12 lg:w-9/12 xl:w-7/12 mx-auto lg:mx-0">
            <div class=" items-center justify-center lg:hidden flex">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png" alt="">  
            </div>
            <form method="post" action="do_login.php" onsubmit="return do_login();">
            <h3 class="text-3xl font-semibold mb-3">Log In to continue</h3>
            <p class="leading-7 text-sm" style="color: #A8ADB7;">Please log in using that account has<br>
              registered on the website.</p>          
              <div class="mb-7">
                <label
                    class="block text-lg font-medium" style="color: #39465B;">NISN</label>
                <div class="flex w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5">
                  <svg class="mr-4 icon-empty-3-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z" fill="#CACBCE"/>
                  </svg> 
                  <input type="text" name="username" id="username" placeholder="Masukkan Nomor NISN anda"
                  class="w-full focus:outline-none text-base font-light"
                  autocomplete required
                  style="background-color: #FCFDFF;">
                </div>
              </div>
              <div class="mt-4">
                <label
                    class="block text-lg font-medium" style="color: #39465B;">Password</label>
                <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5">
                  <svg class="mr-4 icon-empty-3-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z" fill="#CACBCE"/>
                  </svg>                                           
                  <input type="password" name="password" id="password" placeholder="Your Password" minlength="5"
                  class="w-full focus:outline-none text-base font-light" required
                  style="background-color: #FCFDFF;">
                  <div  @click="show = !show">
                    <svg :class="{'icon-toggle-empty-3-5': show}" class="cursor-pointer ml-3" width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z" fill="#CACBCE"/>
                    </svg>  
                  </div>                    
                </div>
              </div>
              <div class="mt-3 text-right">
                <a href="#"
                  class="forgot-password-empty-3-5 text-sm italic">Forgot Password?</a>
              </div>
              <button type="submit" name="login" id="login_button"
                class="btn-fill-empty-3-5 block w-full px-4 py-3 mt-9 font-medium text-xl text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"
                >Log In To My Account</button>
            </form>
          
          </div>
      </div>
    </div>                                                                  
    </div>
    </section>    


    <script>
      function showPass() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
    
    </body>
    
   <!--  <script>
    	function updateDB() {
    		$(document).ready(function(){    	
    			$("#page").load("komponen/login.php");    			
    		});
    	}
    </script> -->
  </html>