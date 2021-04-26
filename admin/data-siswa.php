<script src="../table/tableExport.min.js"></script>
<script src="../table/bootstrap-table.min.js"></script>
<script src="../table/bootstrap-table-export.min.js"></script>
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
    <th >Status</th>      
    
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
      $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' ORDER BY siswa.jurusan DESC");  
     
    }else{
       $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn  INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' AND month(siswa.create_at)='".$filter_rekap_b."' AND year(siswa.create_at)='".$filter_rekap_t."' ORDER BY siswa.create_at DESC");  
      
    }
  }else{
    if (($filter_rekap_t=="Tahun") OR ($filter_rekap_b=="Bulan") OR ($filter_rekap_t=="")) {
     $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn AND siswa.status_tracker='1' INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' ORDER BY siswa.jurusan DESC");  
    }else{
      $query = mysqli_query($conn, "SELECT data_alumni.*,siswa.* FROM data_alumni INNER JOIN siswa ON data_alumni.nisn = siswa.nisn INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa' AND month(siswa.create_at)='".$filter_rekap_b."' AND year(siswa.create_at)='".$filter_rekap_t."' AND siswa.status_tracker='1' ORDER BY siswa.create_at DESC");  
    }
   
  }
  if (!empty($query)) {
  
  while ($row = mysqli_fetch_array($query))      
  {

    $tgl= date_create($row['tgl_lahir']);
    $tgl_lahir=date_format($tgl,"d-M-Y");
    if (empty($row['status_tracker'])) {
      $status="On progress";
    }else{
      $status= "Done";
    }
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
    <td>'.$status.'</td>   
    ';


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