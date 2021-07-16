<script src="../table/tableExport.min.js"></script>
<script src="../table/bootstrap-table.min.js"></script>
<script src="../table/bootstrap-table-export.min.js"></script>
<style type="text/css">
.hover-trigger .hover-target {
   visibility: hidden;
   opacity: 0;
   transition: visibility 0s, opacity 0.5s linear;
}

.hover-trigger:hover .hover-target {
    visibility: visible;
    opacity: 1;
}
</style>
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
    <th data-visible="false">Agama</th>     
    <th >Alamat</th> 
    <th data-visible="false">Status user</th>  
    <th data-visible="false">Nama Instansi</th> 
    <th data-visible="false">Sejak</th>      
    <th data-visible="false">No Telpon</th>  
   
    <th data-sortable="true">Status</th>     
    <th >Pengingat</th>      
  </tr>
</thead>
<tbody>
 <?php

 include '../komponen/koneksi.php';
 $see =$_SESSION['status'];
 $filter_tahun="";
 $filter_bulan="";
 if (isset($_POST['filter_tahun'])) {
  $filter_tahun = $_POST['filter_tahun'];
  $filter_bulan = $_POST['filter_bulan'];
}
$filter_rekap_t = $filter_tahun;
$filter_rekap_b = $filter_bulan;
$no = 1;
if ($see=="Admin") {
  if (($filter_rekap_t=="Tahun") OR ($filter_rekap_b=="Bulan") OR ($filter_rekap_t=="")) {
    $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.*,login.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' ORDER BY siswa.jurusan DESC");  

  }else{
   $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.*,login.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn  INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' AND month(siswa.create_at)='".$filter_rekap_b."' AND year(siswa.create_at)='".$filter_rekap_t."' ORDER BY siswa.create_at DESC");  

 }
}else{
  if (($filter_rekap_t=="Tahun") OR ($filter_rekap_b=="Bulan") OR ($filter_rekap_t=="")) {
   $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.*,login.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn AND siswa.status_tracker='1' INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' ORDER BY siswa.jurusan DESC");  
 }else{
  $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.*,login.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' AND month(siswa.create_at)='".$filter_rekap_b."' AND year(siswa.create_at)='".$filter_rekap_t."' AND siswa.status_tracker='1' ORDER BY siswa.create_at DESC");  
}

}
if (!empty($query)) {

  while ($row = mysqli_fetch_array($query))      
  {

    $tgl= date_create($row['tgl_lahir']);
    $tgl_lahir=date_format($tgl,"d-M-Y");
    if (empty($row['status_tracker'])) {
      $status="<span class='text-yellow-600 font-semibold'>On progress</span>";
    }else{
      $status= "<span class='text-green-500 font-semibold'>Done</span>";
    }
    // $create_at = date_create($row['create_at']);
    // $create_at = date_format($create_at,"Y-m-d");
    // $tempo = date('Y-m-d', strtotime('-3 month', strtotime($create_at)));
    // $akhir = date_create();
    // $jatuh_tempo= date_diff(date_create($tempo),$akhir);
    // if ($jatuh_tempo->d<=0) {
    //   $jatuh_tempo = "<b>Expired</b>";
    // }else{
    //   $jatuh_tempo = $jatuh_tempo->d." Hari";
    // }
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
    <td>'.$row['no_hp'].'</td> 
  
    <td>'.$status.'</td>   

    ';
    if  (!empty($row['status_tracker'])) {

    }else{

        ?>
        <td>
          <div class='flex items-center space-x-2 text-white font-semibold pengingat'> 
            <button class='bg-blue-400 relative hover:opacity-100 opacity-75  px-2 py-1 rounded-lg duration-300 
            <?php if($row['reminder']=='2' || $row['reminder']=='3'){ echo "bg-green-400 hover-trigger";} ?>' 
            name="sms" id="sms" 
            value="<?php echo $row['no_hp']; ?>"
            <?php if((empty($row['no_hp']))OR($row['reminder']=='2' || $row['reminder']=='3' )){ echo "disabled"; } ?>
            >SMS
            <?php if($row['reminder']=='2' || $row['reminder']=='3'){ ?>
            <div class="absolute  -top-5 w-max shadow-lg right-0 px-3 py-1 rounded-lg bg-white border text-gray-700 font-semibold hover-target z-50">Pengingat via SMS sudah dikirim </div>
            <?php } ?>
            </button>

            <button class='relative hover:opacity-100 opacity-75 px-2 py-1 rounded-lg duration-300 
            <?php if($row['reminder']=='1' || $row['reminder']=='3'){ echo "bg-green-400 hover-trigger";}else{echo "bg-blue-400 ";} ?>' 
            name="mail" id="mail" 
            value="<?php echo $row['email'] ?>" <?php if($row['reminder']=='1' || $row['reminder']=='3'){ echo "disabled"; } ?>
            >MAIL
            <?php if($row['reminder']=='1' || $row['reminder']=='3'){ ?>
            <div class="absolute  -top-5 w-max shadow-lg right-0 px-3 py-1 rounded-lg bg-white border text-gray-700 font-semibold hover-target z-50">Pengingat via MAIL sudah dikirim </div>
           <?php } ?>
          </button></div>
          </td>   
         

         
           <?php
         
       }
       $no++;
     }
   }else{
    echo "<tr><td>data empty</td></tr>";
  }

  ?> 
</tbody>
</table>
</div>
</div> 
