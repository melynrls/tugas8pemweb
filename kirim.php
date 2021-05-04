<?php
include 'connect.php';
// menyimpan data kedalam variabel
$jenisdaftar		=$_POST['jenisdaftar'];
$tglmasuk			=$_POST['tglmasuk'];
$nis				=$_POST['nis'];
$noujian			=$_POST['noujian'];
$paud				=$_POST['paud'];
$tk					=$_POST['tk'];
$noskhun			=$_POST['noskhun'];
$noijazah			=$_POST['noijazah'];
$hobi				=$_POST['hobi'];
$citacita			=$_POST['citacita'];
$namalengkap		=$_POST['namalengkap'];
$jkel				=$_POST['jkel'];
$nisn				=$_POST['nisn'];
$nik				=$_POST['nik'];
$tempatlahir		=$_POST['tempatlahir'];
$tgllahir			=$_POST['tgllahir'];
$agama				=$_POST['agama'];
$kebutuhankhusus	=$_POST['kebutuhankhusus'];
$jalan				=$_POST['jalan'];
$rt					=$_POST['rt'];
$rw					=$_POST['rw'];
$dusun				=$_POST['dusun'];
$kel				=$_POST['kel'];
$kec				=$_POST['kec'];
$pos				=$_POST['pos'];
$tinggal			=$_POST['tinggal'];
$transportasi		=$_POST['transportasi'];
$nohp				=$_POST['nohp'];
$notelp				=$_POST['notelp'];
$email				=$_POST['email'];
$kps				=$_POST['kps'];
$nokps				=$_POST['nokps'];
$kwn				=$_POST['kwn'];
// query SQL untuk insert data
$query="INSERT INTO pesertadidik SET jenisdaftar='$jenisdaftar',tglmasuk='$tglmasuk',nis='$nis',noujian='$noujian',paud='$paud', tk='$tk',noskhun='$noskhun',noijazah='$noijazah',hobi='$hobi',citacita='$citacita', namalengkap='$namalengkap',jkel='$jkel',nisn='$nisn',nik='$nik',tempatlahir='$tempatlahir', tgllahir='$tgllahir',agama='$agama',kebutuhankhusus='$kebutuhankhusus',jalan='$jalan',rt='$rt', rw='$rw',dusun='$dusun',kel='$kel',kec='$kec',pos='$pos', tinggal='$tinggal',transportasi='$transportasi',nohp='$nohp',notelp='$notelp',email='$email', kps='$kps',nokps='$nokps',kwn='$kwn' ";
mysqli_query($konek,$query);
?>