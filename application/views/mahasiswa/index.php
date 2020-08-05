<html>
  <head>
    <title>CRUD Codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/aset/css/style.css">
	<style type="text/css">
	table{
		font-family: verdana, arial, sans-serif;
		font-size: 11px;
		color: #333333;
		border-width: 1px;
		border-color: #3A3A3A;
		border-collapse: collapse;
	}
	
	table th{
		border-width: 1px;
		padding: 8px;
		border-style: solid;
		border-color: #FFA6A6;
		background-color: #ffffff;
		
	}
	
	table tr:hover td{
		cursor: pointer;
	}
	
	table tr:nth-child(even) td{
		background-color: #F7CFCF;
	}
	
	table td{
		border-width: 1px;
		padding: 8px;
		border-style: solid;
		border-color: #FFA6A6;
		background-color: #ffffff;
	}
	
	p{
		font-family: verdana, arial, sans-serif;
		font-size: 25px;
		color: Dodgerblue;
	}
	</style>
  </head>
  <body>
		<div id="header">
    <p>PT. Djarum Indonesia
	<br/>
	Berkontribusi untuk membangun negeri</p>
		</div>
		<hr/>
	<br/>
	<h1 align="center">Data Mahasiswa Penerima Beasiswa</h1>
		<hr width="45%">
	  <h1 align="center">Praktikum Sister</h1>
		<hr width="45%">
    <a href='<?php echo base_url("mahasiswa/tambah"); ?>'><img src="<?php echo base_url();?>application/aset/gambar/add.png" width="50px"></a><br><br>
    <table border="1" cellpadding="7" align="center">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
      if( ! empty($mahasiswa)){ 
        foreach($mahasiswa as $data){
          echo "<tr>
          <td>".$data->nim."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("mahasiswa/ubah/".$data->nim)."'>Edit</a></td>
          <td><a href='".base_url("mahasiswa/hapus/".$data->nim)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>
