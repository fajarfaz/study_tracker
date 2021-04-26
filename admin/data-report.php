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
    <th >Program Keahlian </th>            
    <th >Jumlah Lulusan </th>       
    <th >Terserap di Industri</th>             
    <th >Belum Bekerja</th>     
    <th >Tidak Diketahui</th>          
    <th >Wirausaha</th>     
    <th >Melanjutkan Jenjang</th> 
    <th >Jumlah</th>   
    
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
 
    if (($filter_rekap_t=="Tahun") OR ($filter_rekap_b=="Bulan") OR ($filter_rekap_t=="")) {
      $query= mysqli_query($conn,"
        SELECT siswa.jurusan, COUNT(siswa.status_tracker) AS jumlah_sis, 
        SUM(if(data_alumni.status = 'melanjutkan',1,0)) AS melanjutkan,
        SUM(if(data_alumni.status = 'pegawai',1,0)) AS pegawai,
        SUM(if(data_alumni.status = 'wirausaha',1,0)) AS wirausaha,
        SUM(if(data_alumni.status = 'prakerja',1,0)) AS prakerja,
        SUM(if(data_alumni.status IS NULL,1,0)) AS tdk_diket
        FROM siswa INNER JOIN data_alumni ON siswa.nisn = data_alumni.nisn
        INNER JOIN login ON login.username = siswa.nisn WHERE login.status='Siswa'
        GROUP BY siswa.jurusan
        ORDER BY COUNT(siswa.status_tracker) DESC
        ");
    }else{
      $query= mysqli_query($conn,"
        SELECT siswa.jurusan, COUNT(siswa.status_tracker) AS jumlah_sis, 
        SUM(if(data_alumni.status = 'melanjutkan',1,0)) AS melanjutkan,
        SUM(if(data_alumni.status = 'pegawai',1,0)) AS pegawai,
        SUM(if(data_alumni.status = 'wirausaha',1,0)) AS wirausaha,
        SUM(if(data_alumni.status = 'prakerja',1,0)) AS prakerja,
        SUM(if(data_alumni.status IS NULL,1,0)) AS tdk_diket
        FROM siswa INNER JOIN data_alumni ON siswa.nisn = data_alumni.nisn
        INNER JOIN login ON login.username = siswa.nisn 
        WHERE login.status='Siswa' AND month(siswa.create_at)='".$filter_rekap_b."' AND year(siswa.create_at)='".$filter_rekap_t."' GROUP BY siswa.jurusan  ORDER BY COUNT(siswa.status_tracker) DESC
        ");     
    }
   
  
  if (!empty($query)) {
  
  while ($row = mysqli_fetch_array($query))      
  {

    
    echo '<tr>
    <td>'.$no.'.</td>
    <td>'.$row['jurusan'].'</td>         
    <td>'.$row['jumlah_sis'].'</td>
    <td>'.$row['pegawai'].'</td>
    <td>'.$row['prakerja'].'</td>
    <td>'.$row['tdk_diket'].'</td> 
    <td>'.$row['wirausaha'].'</td>         
    <td>'.$row['melanjutkan'].'</td> 
    <td>'.$row['jumlah_sis'].'</td> 
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