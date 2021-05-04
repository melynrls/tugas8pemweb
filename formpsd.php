<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" intregity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
.warning{color: #FF0000;}
</style>
</head>
<body>
	<h2>Formulir Peserta Didik</h2>
	<form method="post" action="kirim.php">
		<table>
			<tr><td>Jenis Pendaftaran</td><td>
				<input type="radio" name="jenisdaftar" value="01">Siswa Baru
				<input type="radio" name="jenisdaftar" value="02">Pindahan
			</td></tr>
			<tr><td>Tanggal Masuk Sekolah</td><td><input type="text" name="tglmasuk"></td></tr>
			<tr><td>NIS</td><td><input type="text" name="nis"></td></tr>
			<tr><td>No. Peserta Ujian</td><td><input type="text" name="noujian"></td></tr>
			<tr><td>Apakah Pernah PAUD</td><td>
					<input type="radio" name="paud" value="Y">Ya
					<input type="radio" name="paud" value="T">Tidak
				</td></tr>
			<tr><td>Apakah Pernah TK</td><td>
					<input type="radio" name="tk" value="Y">Ya
					<input type="radio" name="tk" value="T">Tidak
				</td></tr>
			<tr><td>No. Seri SKHUN Sebelumnya</td><td><input type="text" name="noskhun"></td></tr>
			<tr><td>No. Seri Ijazah Sebelumnya</td><td><input type="text" name="noijazah"></td></tr>
			<tr><td>Hobi</td><td>
					<select name="hobi">
						<option value="A">Olahraga</option>
						<option value="B">Kesenian</option>
						<option value="C">Membaca</option>
						<option value="D">Menulis</option>
						<option value="E">Travellin</option>
						<option value="F">Lainnya</option>
					</select>
			<tr><td>Cita-cita</td><td>
					<select name="citacita">
						<option value="A">PNS</option>
						<option value="B">TNI/POLRI</option>
						<option value="C">Guru/Dosen</option>
						<option value="D">Dokter</option>
						<option value="E">Politikus</option>
						<option value="F">Wiraswasta</option>
						<option value="G">Seni/Lukis/Artis/Sejenis</option>
						<option value="H">Lainnya</option>
					</select>
				</td></tr>
			<tr><td>Nama Lengkap</td><td><input type="text" name="namalengkap"></td></tr>
			<tr><td>Jenis Kelamin</td><td>
					<input type="radio" name="jkel" value="L">Laki-Laki
					<input type="radio" name="jkel" value="P">Perempuan
				</td></tr>
			<tr><td>NISN</td><td><input type="text" name="nisn"></td></tr>
			<tr><td>NIK</td><td><input type="text" name="nik"></td></tr>
			<tr><td>Tempat Lahir</td><td><input type="text" name="tempatlahir"></td></tr>
			<tr><td>Tanggal Lahir</td><td><input type="text" name="tgllahir"></td></tr>
			<tr><td>Agama</td><td>
					<select name="agama">
						<option value="01">Islam</option>
						<option value="02">Kristen/Protestan</option>
						<option value="03">Katholik</option>
						<option value="04">Hindu</option>
						<option value="05">Budha</option>
						<option value="06">Khong Hu Chu</option>
						<option value="99">Lainnya</option>
					</select>
			<tr><td>Berkebutuhan Khusus</td><td>
					<select name="kebutuhankhusus">
						<option value="01">Tidak</option>
						<option value="02">Netra (A)</option>
						<option value="03">Rungu (B)</option>
						<option value="04">Grahita Ringan(C)</option>
						<option value="05">Grahita Sedang(D)</option>
						<option value="06">Daksa Ringan(E)</option>
						<option value="07">Daksa Sedang(F)</option>
						<option value="08">Laras(G)</option>
						<option value="09">Wicara(H)</option>
						<option value="10">Tuna ganda(I)</option>
						<option value="11">Hiper aktif(J)</option>
						<option value="12">Cerdas Istimewa(K)</option>
						<option value="13">Bakat Istimewa(L)</option>
						<option value="14">Kesulitan Belajar(M)</option>
						<option value="15">Narkoba(N)</option>
						<option value="16">Indigo(O)</option>
						<option value="17">Down Sindrome(P)</option>
						<option value="18">Autis(Q)</option>
					</select>
			<tr><td>Alamat Jalan</td><td><input type="text" name="jalan"></td></tr>
			<tr><td>RT</td><td><input type="text" name="rt"></td></tr>
			<tr><td>RW</td><td><input type="text" name="rw"></td></tr>
			<tr><td>Nama Dusun</td><td><input type="text" name="dusun"></td></tr>
			<tr><td>Nama Kelurahan/Desa</td><td><input type="text" name="kel"></td></tr>
			<tr><td>Kecamatan</td><td><input type="text" name="kec"></td></tr>
			<tr><td>Kode Pos</td><td><input type="text" name="pos"></td></tr>
			<tr><td>Tempat Tinggal</td><td>
					<select name="tinggal">
						<option value="1">Bersama Orang Tua</option>
						<option value="2">Wali</option>
						<option value="3">Kos</option>
						<option value="4">Asrama</option>
						<option value="5">Panti Asuhan</option>
						<option value="9">Lainnya</option>
					</select>
			<tr><td>Moda Transportasi</td><td>
					<select name="transportasi">
						<option value="01">Jalan Kaki</option>
						<option value="02">Kendaraan Pribadi</option>
						<option value="03">Kendaraan Umum/Angkot/Pete-pete</option>
						<option value="04">Jemputan Sekolah</option>
						<option value="05">Kereta Api</option>
						<option value="06">Ojek</option>
						<option value="07">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
						<option value="08">Perahu penyebrangan/Rakit/Getek</option>
						<option value="99">Lainnya</option>
					</select>
			<tr><td>Nomor HP</td><td><input type="text" name="nohp"></td></tr>
			<tr><td>Nomor Telepon</td><td><input type="text" name="notelp"></td></tr>
			<tr><td>E-mail Pribadi</td><td><input type="text" name="email"></td></tr>
			<tr><td>Penerima KPS/PKH/KIP</td><td>
					<input type="radio" name="kps" value="Y">Ya
					<input type="radio" name="kps" value="T">Tidak
				</td></tr>
			<tr><td>No. KPS/KKS/PKH/KIP</td><td><input type="text" name="nokps"></td></tr>
			<tr><td>Kewarganegaraan</td><td>
					<input type="radio" name="kwn" value="WNI">Indonesia (WNI)
					<input type="radio" name="kwn" value="WNA">Asing (WNA)
				</td></tr>	

			<td><td colspan="2"><button type="submit" value="kirim">KIRIM</button></td></tr>
		</table>
	</form>

</body>
</html>