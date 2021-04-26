<header
        x-data="{ open: false }"
        class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8 "
        >
        <div class="flex items-center justify-between">
          <a href="#">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png" alt="">
          </a>
          <div class="flex justify-end items-center lg:hidden cursor-pointer">
            <svg
              class="w-6 h-6"
              @click="open = !open"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
          </div>
        </div>
        <!-- Backdrop -->
        <!-- Backdop -->
        <div
          :class="{'hidden': !open}"
          class="bg-black fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60"
          @click="open = !open"
        ></div>
        
        <nav
          :class="{'flex': open, 'hidden': !open}"
          class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation-header-3-3 items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 bg-white"
          
        >
          <a href="#">  
            <img class="m-0 lg:hidden mb-3" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png" alt="">
          </a>
          <?php  
          if($_SESSION['status']=="Admin"){?>
          <a
            href="#"
            class="text-sm font-medium mx-0 lg:mx-5 my-4 lg:my-0  relative active klik_menu"   id="dash"
            style="color: #243142"
            >Home</a
          >
           <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="stat"
            style="color: #8B9CAF"
            >Statistik</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="approval"
            style="color: #8B9CAF"
            >Approval</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="siswa"
            style="color: #8B9CAF"
            >Siswa</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="users"
            style="color: #8B9CAF"
            >Users</a>

          <?php }elseif($_SESSION['status']=="Disnaker"){ ?>
            <a
            href="#"
            class="text-sm font-medium mx-0 lg:mx-5 my-4 lg:my-0  relative active klik_menu"   id="dash"
            style="color: #243142"
            >Home</a
          >
          <a
          href="#"
          class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="stat"
          style="color: #8B9CAF"
          >Statistik</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="siswa"
            style="color: #8B9CAF"
            >Siswa</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="report"
            style="color: #8B9CAF"
            >Reporting</a
          >
          
          <?php }else{ ?>

                   
           <a
            href="#"
            class="text-sm font-medium mx-0 lg:mx-5 my-4 lg:my-0  relative active klik_menu"   id="dash"
            style="color: #243142"
            >Home</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative klik_menu"   id="feature"
            style="color: #8B9CAF"
            >Feature</a
          >
          <a
            href="#"
            class="text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0  relative"
            style="color: #8B9CAF"
            >Pricing</a
          >
       
         
          

          <?php } ?>
          <div class="mx-0 lg:mx-5 my-4 lg:my-0" x-data="{ search: false }">
            <svg @click="search = !search" class="hidden cursor-pointer search-icon-header-3-3" :class="{'flex': !search, 'hidden': search}" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z" fill="#8B9CAF"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z" fill="#8B9CAF"/>
            </svg>  
            <form id="form-header-3-3" :class="{'flex lg:absolute center-search-header-3-3': search, 'hidden': !search}" class="hidden items-center rounded-full focus:outline-none px-3" style="background-color: #eef4fd;">
              <input type="text" class="rounded-full focus:outline-none" placeholder="Search">
              <button type="button"><svg
                @click="search = !search"
                style="width: 20px; height: 20px;"
                class="focus:outline-none cursor-pointer"
                fill="none"
                stroke="#243142"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg></button>
            </form>  
          </div>          
          <div class="flex items-center justify-end w-full lg:hidden mt-3">
            <button
              class="btn-no-fill-header-3-3 text-sm font-medium py-3 px-8 focus:outline-none">
              Sign In
            </button>
            <button onclick="window.location='../komponen/logout.php';"
              class="btn-fill-header-3-3 text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none "
            >
              Logout
            </button>
          </div>
          <svg
            @click="open = !open"
            class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
        </nav>
        <div class="hidden items-center justify-end lg:flex">
          <button
            class="btn-no-fill-header-3-3 text-sm font-medium py-3 px-8 focus:outline-none"
          >
            Hello, <?php echo  $_SESSION['username']; ?>!
          </button>
          <button onclick="window.location='../komponen/logout.php';"
            class="btn-fill-header-3-3 text-white font-medium text-sm  py-3 px-6 rounded-full focus:outline-none">
            Logout
          </button>
        </div>
      </header>