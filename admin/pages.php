<link rel="stylesheet" type="text/css" href="../css/bootstrapcustom.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Datatable -->

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script src="../table/tableExport.min.js"></script>
<script src="../table/bootstrap-table.min.js"></script>
<script src="../table/bootstrap-table-export.min.js"></script>

<!-- DataTable -->

<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../table/tableExport.min.js"></script>   
<script src="../table/bootstrap-table-export.min.js"></script>
<script src="../js/modal.js"></script>
<style type="text/css">
	.bootstrapiso .form-control{
		height: auto;
	}
</style>
<?php 
include '../komponen/koneksi.php';
$nisn = $_SESSION['username'];

$query = mysqli_query($conn,"SELECT siswa.*,data_alumni.* FROM siswa INNER JOIN data_alumni ON siswa.nisn = data_alumni.nisn WHERE siswa.nisn = '$nisn'");

$Datadiri = mysqli_fetch_array($query);
$page = $_GET['page'];
if (isset($_GET['page'])) {
  switch ($_GET['page']) { 
    case 'dash':
    ?>
    <div>
      <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
        <!-- Left Column -->
        <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
          <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold"
          style="color: #243142; line-height: 1.25;">The Study Tracker<br>
          <span style="color: #4E91F9;">Application</span> For<br> 
          SMK Ketintang<br>
        </h1>
        <h1 class="lg:hidden block title-font sm:text-5xl lg:text-6xl text-4xl mb-5 lg::px-10 md:px-10 sm:px-6 px-0 font-semibold"
        style="color: #243142; line-height: 1.25;">The New Way
        <span style="color: #4E91F9;">Learn Skills</span> From 
        Our Best Mentor
      </h1>
      <p class="text-base font-light leading-6 tracking-wide mb-20" style="color: #8B9CAF;">Hard to find a good mentor according to your wishes?<br>Don't worry because we are here to help you</p>
      <div class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2   space-x-0">
        <button class="btn-fill-header-3-3 inline-flex font-semibold text-white  text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none klik_menu"  id="stat"
        
        >Get Started</button>

        <button class="btn-outline-header-3-3 font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
          <div class="flex items-center"> 
            <svg class="mr-2.5" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.9295 13L11.6668 10.158V15.842L15.9295 13ZM17.9175 13.2773L10.8515 17.988C10.8013 18.0214 10.743 18.0406 10.6828 18.0434C10.6225 18.0463 10.5627 18.0328 10.5095 18.0044C10.4563 17.9759 10.4119 17.9336 10.3809 17.8818C10.3499 17.8301 10.3335 17.771 10.3335 17.7107V8.28933C10.3335 8.22904 10.3499 8.16988 10.3809 8.11816C10.4119 8.06644 10.4563 8.0241 10.5095 7.99564C10.5627 7.96718 10.6225 7.95367 10.6828 7.95655C10.743 7.95943 10.8013 7.9786 10.8515 8.012L17.9175 12.7227C17.9631 12.7531 18.0006 12.7943 18.0265 12.8427C18.0524 12.8911 18.0659 12.9451 18.0659 13C18.0659 13.0549 18.0524 13.1089 18.0265 13.1573C18.0006 13.2057 17.9631 13.2469 17.9175 13.2773Z" fill="#A6B1BE"/>
              <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A6B1BE"/>
            </svg>                                        
            Watch the video
          </div>
        </button>              
      </div>
    </div>
    <!-- Right Column -->
    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">           
      <img class="absolute bottom-0 lg:block hidden lg:right-24 md:right-16 sm:right-8 right-8" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png" alt="">          
      <div class="flex items-end lg:pl-16 pl-0" style="z-index:1;">
        <div class="container mx-auto flex flex-wrap items-center">
          <div class="card-header-3-3 rounded-xl p-5 flex flex-col md:ml-auto w-full mt-10 md:mt-0 space-y-5" style="background-color: #FFFFFF;">
            <div class="flex items-center space-x-4">
              <div>
                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-3.png" alt="">                                                     
              </div>
              <div class="text-left">
                <p class="font-semibold text-base mb-1">
                  <?php if($_SESSION['status']=='Admin'){echo $nisn;}else{ echo $Datadiri['nama'];} ?>                    
                </p>
                <p class="font-light text-xs" style="color: #AAA6A6;">
                  <?php if($_SESSION['status']=='Admin'){echo $_SESSION['status'];}else{echo $nisn;} ?></p>
                </div>                        
              </div>
              <div class="grid grid-cols-2 text-left">
                <div>
                  <p class="font-medium text-base mb-0.5" style="color: #1B8171;">
                   <?php if($_SESSION['status']=='Admin'){echo "-";}else{ echo $Datadiri['tahun_lulus'];} ?>       
                  </p>
                  <p class="font-light text-xs" style="color: #AAA6A6;">Angkatan</p>
                </div>
                <div>
                  <p class="font-medium text-base mb-0.5" style="color: #FF7468;">
                    <?php if($_SESSION['status']=='Admin'){echo "-";}else{ echo $Datadiri['jurusan'];} ?>  
                  </p>
                  <p class="font-light text-xs" style="color: #AAA6A6;">Jurusan</p>
                </div>
              </div>
              <button class="btn-fill-header-3-3 font-semibold text-white text-base py-3 px-16 mb-0.5 rounded-xl ">Hire Me</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <?php
  break;
  case 'stat':  
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js" integrity="sha512-BqNYFBAzGfZDnIWSAEGZSD/QFKeVxms2dIBPfw11gZubWwKUjEgmFUtUls8vZ6xTRZN/jaXGHD/ZaxD9+fDo0A==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js"></script>
  <div class="lg:px-24 md:px-16 sm:px-8 px-8 pt-16">
   <div class="flex justify-between items-center">
    <h2 class="title-font sm:text-5xl lg:text-6xl text-4xl font-semibold leading-8 mb-8">Statistik <span style="color: #4E91F9;">Study Tracker</span></h2>
    </div>  
   
    <div class="border rounded-xl grid grid-cols-2 items-center py-4 mb-20 h-full">
      <div class="w-full text-center">
        <label class="text-2xl font-semibold"> Pengisian Form</label>
        <canvas class="mx-auto mt-6" id="pengisianChart" width="300" height="300"></canvas>
      </div>
       <div class="w-full text-center">
        <label class="text-2xl mb-4 font-semibold"> Status Setelah Lulus </label>
        <canvas class="mx-auto mt-6" id="LulusChart" width="300" height="300"></canvas>
      </div>
        <div class="w-full text-center col-span-2">
        <label class="text-2xl mb-4 font-semibold"> Chart Tahunan </label>
        <canvas class="mx-auto mt-6" id="ChartTahun" width="900" height="400"></canvas>
      </div>
    </div>
     <?php
    $rowSta = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(status_tracker) FROM siswa WHERE status_tracker='1'"));
    $rowAllSta = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(status_tracker) FROM siswa WHERE status_tracker IS NULL"));
    $rowLanjut = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(status) FROM data_alumni WHERE status='melanjutkan'"));
    $rowPegawai = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(status) FROM data_alumni WHERE status='pegawai'"));
    $rowWira = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(status) FROM data_alumni WHERE status='wirausaha'"));
    $rowPra = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(status) FROM data_alumni WHERE status='prakerja'"));    
    ?>

      <script type="text/javascript">
       var ctx = document.getElementById("ChartTahun");

        var ChartTahun = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Januari', 'Februari','Maret','April','Mei','Juni','Agustus','September','Oktober','Nopember','Desember'],
            datasets: [{
              label: '# of Tomatoes',
              data:[<?php echo $rowSta[0] ?>,<?php echo $rowAllSta[0] ?>],
              backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
      //cutoutPercentage: 40,
      responsive: true,

    }
  });
      </script>
        <script>

          var ctx = document.getElementById("pengisianChart");
          var pengisianChart = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: ['Sudah Mengisi', 'Belum Mengisi'],
              datasets: [{
                label: '# of Tomatoes',
                data:[<?php echo $rowSta[0] ?>,<?php echo $rowAllSta[0] ?>],
                backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
      //cutoutPercentage: 40,
      responsive: true,

    }
  });
      </script>

      <script>
        var ctx = document.getElementById("LulusChart");
        var LulusChart = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['Melanjutkan', 'Pegawai', 'Wirausaha', 'Prakerja'],
            datasets: [{
              label: '# of Tomatoes',
              data:[<?php echo $rowLanjut[0] ?>,<?php echo $rowPegawai[0] ?>,<?php echo $rowWira[0] ?>,<?php echo $rowPra[0] ?>],
              backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
      //cutoutPercentage: 40,
      responsive: true,

    }
  });
      </script>

  
</div>
  <?php  
  break;
  case 'approval':   
  ?>

  <div class="lg:px-24 md:px-16 sm:px-8 px-8 pt-16">
   <div class="flex justify-between items-center">
    <h2 class="title-font sm:text-5xl lg:text-6xl text-4xl font-semibold leading-8 mb-8">Approval <span style="color: #4E91F9;">Siswa</span></h2>  

  </div>

  <div class="bootstrapiso border p-4 mb-4" > 
   <div class="table-responsive-md">
   
    <table class="bootstrapiso table table-bordered table-hover table-light" style="text-align: center;border: none;padding: 20px;"
    id="table"        
    data-locale="en-US"
    data-show-toggle="true"        
    data-show-columns="true"        
    data-show-export="true"
    data-click-to-select="true"
    data-toggle="table"
    data-search="true"
    data-detail-formatter="detailFormatter"
    data-page-list="[10, 25, 50, 100, all]"    
    data-pagination="true"
    data-minimum-count-columns="2"
    data-response-handler="responseHandler"
    data-export-types= "['excel']">
    
    <thead class="thead-rainbow">
     <tr>
      <th data-sortable="true">No.</th>  
      <th >Nisn </th>            
      <th >Nama </th>       
      <th data-visible="false">Tahun Lulus</th>             
      <th >Jurusan</th>     
      <th >Tempat, Tanggal Lahir</th>          
      <th >Agama</th>     
      <th >Alamat</th> 
      <th data-visible="false">Status</th>  
      <th data-visible="false">Nama Instansi</th> 
      <th data-visible="false">Sejak</th>      
      <th >Approval</th>      

    </tr>
  </thead>
  <tbody>
   <?php
   $query = mysqli_query($conn,"SELECT data_alumni.*,siswa.*,login.status FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' AND siswa.status_tracker='' AND siswa.alamat!='' ORDER BY siswa.create_at DESC");  
   $no=1;
   while ($row = mysqli_fetch_array($query))      
   {

    $tgl= date_create($row['tgl_lahir']);
    $tgl_lahir=date_format($tgl,"d-M-Y");

    echo '<tr>
    <td>'.$no.'.</td>
    <td>'.$row['nisn'].'</td>         
    <td>'.$row['nama'].'</td>
    <td>'.$row['tahun_lulus'].'</td>
    <td>'.$row['jurusan'].'</td>
    <td>'.$row['tpt_lahir'].", ".$tgl_lahir.'</td> 
    <td>'.$row['agama'].'</td>         
    <td>'.$row['alamat'].'</td> 
    <td>'.$row['status'].'</td> 
    <td>'.$row['instansi'].'</td> 
    <td>'.$row['sejak'].'</td> 
    ';
    if (!empty($row['jurusan'])) {
     echo "<td class='text-center'>   

    <button id='approve' value='".$row['nisn']."' class='text-2xl border-2 border-success px-2 py-1 rounded-circle text-green-600 hover:bg-green-500 hover:text-white duration-300 focus:outline-none'><i class='fas fa-check-circle'></i></button>

    
    </td></tr> ";   

    }else{

     echo "<td></td></tr>";        
    }

    $no++;
  }


  ?>
</tbody>
</table>
</div>
</div> 

</div>


<?php
$query = mysqli_query($conn, "SELECT login.*,siswa.* FROM login INNER JOIN siswa ON login.username = siswa.nisn ORDER BY id DESC"); 
while ($row = mysqli_fetch_array($query))     
{
  ?>

  <div class="container bootstrapiso">

    <!-- Button to Open the Modal -->

    <!-- The Modal -->
    <div class="modal" style="background-color: rgb(75 85 99 / 71%);" id="editmodal<?php echo $row['id']; ?>">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
           <h2 class="text-xl font-bold text-gray-600">Editing <font class="text-orange-500 font-semibold">User</font></h2>
           <button type="button" class="close" data-dismiss="modal">
             <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </button>
        </div>

        <!-- Modal body -->
        <form  method="POST" id="AddUsers">
          <div class="modal-body">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="id_siswa" value="<?php echo $row['no']; ?>">
            <div class="flex flex-wrap -mx-3 ">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  NISN / NIP
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="username" value="<?php echo  $row['username']; ?>" type="text" placeholder="NISN/NIP">

              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Nama
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama" value="<?php echo  $row['nama']; ?>" type="text" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Status
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status" id="status">
                    <option><?php echo  $row['status']; ?></option>
                    <option>Siswa</option>
                    <option>Disnaker</option>
                    <option>Admin</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
             <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
               Email
             </label>
             <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email"  type="email" placeholder="Email Users" value="<?php echo  $row['email']; ?>" required>
           </div>
         </div>
          <div class="mb-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">Jurusan</label>
            <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
             <i class="fab fa-searchengin mr-4 text-gray-400"></i>

             <select class="w-full focus:outline-none text-base font-light " name="jurusan" id="jurusan" required >
              <option><?php echo $row['jurusan']; ?></option>
              <option>ADM. PERKANTORAN</option>
              <option>AKUNTANSI</option>
              <option>PEMASARAN</option>  
              <option>TEK. KOMP & JARINGAN</option> 
              <option>MULTIMEDIA</option>                      
            </select>                                        

          </div>
        </div>
         <!--Footer-->


       </div>

       <!-- Modal footer -->
       <div class="modal-footer flex justify-between">
        <button type="submit" name="save" class=" px-4 bg-indigo-500 py-2 rounded-lg text-white hover:bg-indigo-400">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>
    </form>
  </div>
</div>
</div>

</div>
<?php  
}
break;
case 'users':   
?>

<div class="modal z-50 opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="reviewModal">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
      <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
      <span class="text-sm">(Esc)</span>
    </div>

    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content pt-4 text-left ">
      <!--Title-->
      <div class="flex justify-between items-center border-b pb-3 px-6">
        <p class="text-2xl font-bold text-gray-600">Form <font class="text-orange-500 font-semibold">Register User</font></p>
        <div class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
        </div>
      </div>

      <!--Body-->
      <form class="w-full font-semibold mt-4 " method="POST" id="AddUsers">
       <div class="px-8">
        <input type="hidden" name="id" value="">
        <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
           NISN / NIP
         </label>
         <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4  leading-tight focus:outline-none focus:bg-white" name="username"  type="text" placeholder="NISN/NIP">
       </div>
     </div>
     <div class="flex flex-wrap -mx-3 mb-6">
       <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         Nama
       </label>
       <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama"  type="text" placeholder="Nama Lengkap">
     </div>
   </div>

   <div class="flex justify-between  mb-6 gap-2"  >
    <div class="flex flex-wrap w-6/12 ">
      <div class="w-full">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          Status
        </label>
        <div class="relative">
          <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status" id="status">  
            <option>Siswa</option>
            <option>Disnaker</option>
            <option>Admin</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap w-6/12 ">
     <div class="w-full ">
       <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         jurusan
       </label>
       <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="jurusan" id="jurusan">  

          <option>ADM. PERKANTORAN</option>
          <option>AKUNTANSI</option>
          <option>PEMASARAN</option>  
          <option>TEK. KOMP & JARINGAN</option> 
          <option>MULTIMEDIA</option>       
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>                        
    </div>
  </div>
</div>
<script type="text/javascript">
  document.getElementById("status").onchange = function () {
  document.getElementById("jurusan").setAttribute("disabled", "disabled");
  if (this.value == 'Siswa')
    document.getElementById("jurusan").removeAttribute("disabled");
};
</script>

<div class="flex flex-wrap -mx-3 mb-6">
 <div class="w-full px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
   Email
 </label>
 <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email"  type="email" placeholder="Email Users" required>
</div>
</div>

</div>
<!--Footer-->
<div class="flex justify-end py-2 bg-gray-50 px-7">
 <button type="submit" name="save" class=" px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Save</button>
</div>

</form>
</div>
</div>
</div>



<div class="lg:px-24 md:px-16 sm:px-8 px-8 pt-16">
 <div class="flex justify-between items-center">
  <h2 class="title-font sm:text-5xl lg:text-6xl text-4xl font-semibold leading-8 mb-8">Manage  <span style="color: #4E91F9;">Users</span></h2>  
  <button type="button" class="bg-green-400 hover:bg-green-600 duration-300 py-3 px-8 text-white font-semibold text-base flex gap-2 items-center modal-open rounded-3xl focus:outline-none" data-toggle="modal" data-target="reviewModal" style="font-weight: 500;">
   <i class="fa fa-plus "></i>User</button>
 </div>

 <div class="bootstrapiso border p-4 mb-4" > 

   <div class="table-responsive-md">
    <table class="bootstrapiso table table-bordered table-hover table-light" style="text-align: center;border: none;padding: 20px;"
    id="table"        
    data-locale="en-US"
    data-show-toggle="true"        
    data-show-columns="true"        
    data-show-export="true"
    data-click-to-select="true"
    data-toggle="table"
    data-search="true"
    data-detail-formatter="detailFormatter"
    data-page-list="[10, 25, 50, 100, all]"    
    data-pagination="true"
    data-minimum-count-columns="2"
    data-response-handler="responseHandler"
    data-export-types= "['excel']">
    <thead class="thead-rainbow">
     <tr>
      <th data-sortable="true">No.</th>							
      <th >Nama </th>	
      <th >Username</th>							
      <th >Status User</th>						
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php
   $no = 1;
   $query = mysqli_query($conn, "SELECT login.*,siswa.* FROM login INNER JOIN siswa ON login.username = siswa.nisn ORDER BY id DESC");	
   while ($row = mysqli_fetch_array($query))			
   {

    echo '<tr>
    <td>'.$no.'.</td>
    <td>'.$row['nama'].'</td>					
    <td>'.$row['nisn'].'</td>
    <td>'.$row['status'].'</td>
    ';
    echo "<td>
    <div class='flex gap-2 items-center'>	 		


    <i data-toggle='modal' data-target='#editmodal".$row['id']."' class='fas fa-pencil-ruler border-2 border-warning px-2 py-2 mr-2 modal-open rounded-circle text-yellow-600 hover:bg-yellow-500 hover:text-white duration-300 cursor-pointer'></i>
    <button id='DeleteUsers' value='".$row['nisn']."' class='border-2 border-danger px-2 py-1 mr-2 modal-open rounded-circle text-red-600 hover:bg-red-500 hover:text-white duration-300 focus:outline-none'><i class='fas fa-trash-alt'></i></button>

    </div>
    </td>								
    </tr>";


    $no++;
  }
  ?>
</tbody>
</table>
</div>
</div> 

</div>


<?php
$query = mysqli_query($conn, "SELECT login.*,siswa.* FROM login INNER JOIN siswa ON login.username = siswa.nisn ORDER BY id DESC");	
while ($row = mysqli_fetch_array($query))			
{
  ?>

  <div class="container bootstrapiso">

    <!-- Button to Open the Modal -->

    <!-- The Modal -->
    <div class="modal" style="background-color: rgb(75 85 99 / 71%);" id="editmodal<?php echo $row['id']; ?>">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header leading-none">
           <h3 class="text-lg font-bold text-gray-600">Editing <font class="text-orange-500 font-semibold">User</font></h3>
           <button type="button" class="close" data-dismiss="modal">
             <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </button>
        </div>

        <!-- Modal body -->
        <form  method="POST" id="AddUsers">
          <div class="modal-body">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="id_siswa" value="<?php echo $row['no']; ?>">
            <div class="flex flex-wrap -mx-3 ">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  NISN / NIP
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-2 px-3 mb-3 leading-tight focus:outline-none focus:bg-white" name="username" value="<?php echo $row['username']; ?>" type="text" placeholder="NISN/NIP">

              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Nama
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama" value="<?php echo  $row['nama']; ?>" type="text" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="flex justify-between mx-1 mb-6 gap-2">
            <div class="flex flex-wrap  w-6/12 ">
              <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Status
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status" id="status">
                    <option><?php echo  $row['status']; ?></option>
                    <option>Siswa</option>
                    <option>Disnaker</option>
                    <option>Admin</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap w-6/12 ">
             <div class="w-full ">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                 jurusan
               </label>
               <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="jurusan" id="jurusan"
                <?php if(($row['status']=='Disnaker')OR($row['status']=='Admin')){echo "disabled";} ?>>
                  <option><?php echo $row['jurusan']; ?></option>
                  <option>ADM. PERKANTORAN</option>
                  <option>AKUNTANSI</option>
                  <option>PEMASARAN</option>  
                  <option>TEK. KOMP & JARINGAN</option> 
                  <option>MULTIMEDIA</option>       
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>                        
            </div>
          </div>
          </div>
            <div class="flex flex-wrap -mx-3 mb-6">
             <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
               Email
             </label>
             <input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email"  type="email" placeholder="Email Users" value="<?php echo  $row['email']; ?>" required>
           </div>
         </div>

         <!--Footer-->


       </div>

       <!-- Modal footer -->
       <div class="modal-footer flex justify-between items-center gap-2">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class=" px-4 bg-indigo-500 py-2 rounded-lg text-white hover:bg-indigo-400">Save</button>
      

      </div>
    </form>
  </div>
</div>
</div>

</div>

<?php
}

break;
case 'feature':  
if ($Datadiri['status_tracker']=='1') {
  $status_tracker = "<span class='text-green-500'>Sudah Disetujui</span>";
  $lock=1;
}else{
  $status_tracker = "<span class='text-indigo-500'>Dalam Proses</span>";
  $lock=0;
}
?>
<div class="lg:px-24 md:px-16 sm:px-8 px-8 pt-16">

  <h2 class="title-font sm:text-5xl lg:text-6xl text-4xl font-semibold leading-8">Feature <span style="color: #4E91F9;">Users</span></h2>
  <div class="flex justify-between items-end">
  <h3 class="text-3xl text-gray-600 font-semibold mb-3 ">Complete your profile</h3>
  <h3 class="text-2xl text-gray-400 font-semibold mb-3 ">Status : <?php echo $status_tracker ?></h3>
  </div>
  <div class="flex w-full h-full px-8 width-right-empty-3-5 sm:px-16 py-10 lg:mx-0 mx-auto items-left justify-left border rounded-xl bg-white" >

    <div class="w-full  mx-auto lg:mx-0">

      <form method="POST" id="complete_profile" class="grid grid-cols-2 gap-8">          
        <div>
          <div class="mb-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">Nama</label>
            <div class="flex w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
              <i class="fas fa-file-signature mr-4 text-gray-400"></i>                 
              <input type="text" name="nama" id="nama" placeholder="Masukkan Nomor NISN anda" value="<?php echo $Datadiri['nama']; ?>" 
              class="w-full focus:outline-none text-base font-light bg-white" autocomplete required 
              <?php if($lock==1){ echo "readonly"; } ?>
              >
            </div>
          </div>
          <div class="mt-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">NISN</label>
            <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border">
              <svg class="mr-4 icon-empty-3-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z" fill="#CACBCE"/>
              </svg>                                           
              <input type="text" name="nisn" id="nisn" placeholder="Your Password" minlength="5" readonly
              class="w-full focus:outline-none text-base font-light " required value="<?php echo $Datadiri['nisn']; ?>"
              style="background-color: #FCFDFF;">

            </div>
          </div>

          <div class="mt-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">Tempat, Tanggal Lahir</label>
            <div class="flex gap-2">
              <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
                <i class="fas fa-city mr-4 text-gray-400"></i>                                                     
                <input type="text" name="tpt_lahir" id="tpt_lahir" placeholder="Tempat" minlength="5"
                class="w-full focus:outline-none text-base  bg-white" required value="<?php echo $Datadiri['tpt_lahir']; ?>" <?php if($lock==1){ echo "readonly"; } ?>                >

              </div>
              <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
                <i class="far fa-calendar-alt mr-4 text-gray-400"></i>
                <input type="date" value="<?php echo $Datadiri['tgl_lahir']; ?>" name="tgl_lahir" id="tgl_lahir" min="1900-01-01"
                class="w-full focus:outline-none text-base font-light " required  <?php if($lock==1){ echo "readonly"; } ?>
                >

              </div>
            </div>
          </div>
          <div class="mt-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">Agama</label>
            <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
              <i class="fas fa-pray mr-4 text-gray-400"></i>

              <select class="w-full focus:outline-none text-base font-light " name="agama" id="agama" required 
                <?php if($lock==1){ echo "disabled='true'"; } ?>>
                <option><?php echo $Datadiri['agama']; ?></option>
                <option>ISLAM</option>
                <option>KRISTEN</option>
                <option>KHATOLIK</option>
                <option>BUDHA</option>
                <option>KONGHUCHU</option>
              </select>                                        

            </div>
          </div>
          <div class="mt-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">Alamat</label>
            <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
              <i class="fas fa-map-marked-alt mr-4 text-gray-400"></i>

              <input type="text" name="alamat" id="alamat" placeholder="Alamat tempat tinggal" minlength="5"
              class="w-full focus:outline-none text-base font-light " required <?php if($lock==1){ echo "readonly"; } ?> value="<?php echo $Datadiri['alamat']; ?>"
              >

            </div>
          </div>
        </div>

        <div>
          <div class="mb-4">
            <label
            class="block text-lg font-medium" style="color: #39465B;">Jurusan</label>
            <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
             <i class="fab fa-searchengin mr-4 text-gray-400"></i>

             <select class="w-full focus:outline-none text-base font-light " name="jurusan" id="jurusan" required 
             <?php if($lock==1){ echo "disabled='true'"; } ?>>
              <option><?php echo $Datadiri['jurusan']; ?></option>
              <option>ADM. PERKANTORAN</option>
              <option>AKUNTANSI</option>
              <option>PEMASARAN</option>  
              <option>TEK. KOMP & JARINGAN</option> 
              <option>MULTIMEDIA</option>                      
            </select>                                        

          </div>
        </div>
        <div class="mt-4">
          <label
          class="block text-lg font-medium" style="color: #39465B;">Tahun Lulus</label>
          <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
            <i class="fas fa-calendar-alt mr-4 text-gray-400"></i>
            <select class="w-full focus:outline-none text-base font-light " name="tahun_lulus" id="tahun_lulus" required 
            <?php if($lock==1){ echo "disabled='true'"; } ?> >
              <option><?php echo $Datadiri['tahun_lulus']; ?></option>
              <?php
              for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                echo"<option value='$i'> $i </option>";
              }
              ?>                    

            </select>                                        

          </div>
        </div>

        <div class="mt-4">
          <label
          class="block text-lg font-medium" style="color: #39465B;">Status Sekarang</label>
          <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
            <i class="fas fa-question-circle mr-4 text-gray-400"></i>
            <select class="w-full focus:outline-none text-base font-light" name="status" id="status" required 
            <?php if($lock==1){ echo "disabled='true'"; } ?>>
              <option><?php echo $Datadiri['status']; ?></option>                      
              <option value="melanjutkan">Melanjutkan</option>
              <option value="pegawai">Pegawai</option>                                     
              <option value="wirausaha">Wirausaha</option>
              <option value="prakerja">Prakerja</option>  
            </select>                                        

          </div>
        </div>
        <div class="mt-4">
          <label
          class="block text-lg font-medium" style="color: #39465B;">Nama Instansi Bekerja/Kuliah</label>
          <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
            <i class="fas fa-place-of-worship mr-4 text-gray-400"></i>                                                   
            <input type="text" name="instansi" id="instansi" placeholder="Masukkan Nama Instansi Kuliah/Kerja/Wirausaha"  class="w-full focus:outline-none text-base font-light" <?php if($lock==1){ echo "readonly"; } ?> value="<?php echo $Datadiri['instansi']; ?>"
            >

          </div>
        </div>
        <div class="mt-4">
          <label
          class="block text-lg font-medium" style="color: #39465B;">Tahun Masuk</label>
          <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-5 border bg-white">
            <i class="fas fa-calendar-day mr-4 text-gray-400"></i>
            <select class="w-full focus:outline-none text-base font-light " name="sejak" id="sejak" 
            <?php if($lock==1){ echo "disabled='true'"; } ?> required >
              <option><?php echo $Datadiri['sejak']; ?></option>
              <?php
              for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                echo"<option value='$i'> $i </option>";
              }
              ?>                    

            </select>                                        

          </div>
        </div>


      </div>
      <button type="submit" name="save" 
      class="bg-blue-400 block w-max mx-auto px-20 py-3 mt-9 font-medium text-xl text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-blue-600 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 col-span-2"
      >Save Data</button>

    </form>

  </div>
</div>

</div>



<?php
break;
case 'siswa':   
?>
<div class="lg:px-24 md:px-16 sm:px-8 px-8 pt-16">
 <div class="flex justify-between items-center mb-8">
  <h2 class="title-font sm:text-5xl lg:text-6xl text-4xl font-semibold leading-8">Manage  <span style="color: #4E91F9;">Siswa</span></h2>  
  <div class="flex items-center gap-2">
    <div class="flex items-center  px-5 py-4 text-base font-light rounded-xl input-empty-3-5 border bg-white">
      <i class="fas fa-calendar-week mr-4 text-gray-400"></i>
      <select class="w-full focus:outline-none text-base font-light " name="filter_bulan" id="filter_bulan" required>
        <option class="px-5 py-4">Bulan</option>      
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>                                      
    </div> 
    <div class="flex items-center  px-5 py-4 text-base font-light rounded-xl input-empty-3-5 border bg-white">
      <i class="fas fa-calendar-alt mr-4 text-gray-400"></i>
      <select class="w-full focus:outline-none text-base font-light " name="filter_tahun" id="filter_tahun" required>
        <option class="px-5 py-4">Tahun</option>
        <?php
        for($i=date('Y'); $i>=date('Y')-32; $i-=1){
          echo"<option value='$i'> $i </option>";
        }
        ?>                    
      </select>                                      
    </div> 
    <button id="cari" name="search" class="focus:outline-none bg-blue-400 py-4 px-6 rounded-2xl text-white duration-500 hover:bg-blue-600 text-xl"><i class="fa fa-search"></i></button>
  </div>

</div>

<div class="data-siswa"></div> 

</div>

<?php
break;
case 'report':   
?>
<div class="lg:px-24 md:px-16 sm:px-8 px-8 pt-16">
 <div class="flex justify-between items-center mb-8">
  <h2 class="title-font sm:text-5xl lg:text-6xl text-4xl font-semibold leading-8">Reporting<span style="color: #4E91F9;"> Study Tracker</span></h2>  
  <div class="flex items-center gap-2">
    <div class="flex items-center  px-5 py-4 text-base font-light rounded-xl input-empty-3-5 border bg-white">
      <i class="fas fa-calendar-week mr-4 text-gray-400"></i>
      <select class="w-full focus:outline-none text-base font-light " name="filter_bulan" id="filter_bulan" required>
        <option class="px-5 py-4">Bulan</option>      
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>                                      
    </div> 
    <div class="flex items-center  px-5 py-4 text-base font-light rounded-xl input-empty-3-5 border bg-white">
      <i class="fas fa-calendar-alt mr-4 text-gray-400"></i>
      <select class="w-full focus:outline-none text-base font-light " name="filter_tahun" id="filter_tahun" required>
        <option class="px-5 py-4">Tahun</option>
        <?php
        for($i=date('Y'); $i>=date('Y')-32; $i-=1){
          echo"<option>$i</option>";
        }
        ?>                    
      </select>                                      
    </div> 
    <button id="cari2" name="search" class="focus:outline-none bg-blue-400 py-4 px-6 rounded-2xl text-white duration-500 hover:bg-blue-600 text-xl"><i class="fa fa-search"></i></button>
  </div>

</div>

<div class="data-report"></div> 

</div>


<?php
}

}
?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.data-siswa').load("data-siswa.php");
    $("#cari").click(function(){
      var filter_bulan = $("#filter_bulan").val();
      var filter_tahun = $("#filter_tahun").val();
      $.ajax({
        type: 'POST',
        url: "data-siswa.php",
        data: {filter_bulan: filter_bulan, filter_tahun:filter_tahun},
        success: function(hasil) {
          $('.data-siswa').html(hasil);
        }
      });
    });
  });
  
   $(document).ready(function(){
    $('.data-report').load("data-report.php");
    $("#cari2").click(function(){
      var filter_bulan = $("#filter_bulan").val();
      var filter_tahun = $("#filter_tahun").val();
      $.ajax({
        type: 'POST',
        url: "data-report.php",
        data: {filter_bulan: filter_bulan, filter_tahun:filter_tahun},
        success: function(hasil) {
          $('.data-report').html(hasil);
        }
      });
    });
  });

</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>



