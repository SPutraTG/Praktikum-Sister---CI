<html>
  <head>
    <title>Form Tambah - CRUD Codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/aset/css/style.css">
	<style type="text/css">
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
    <h1 align="center">Form Tambah Data Mahasiswa</h1>
    <hr/>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("mahasiswa/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>NIM</td>
          <td><input type="text" name="input_nim" value="<?php echo set_value('input_nim'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp'); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>