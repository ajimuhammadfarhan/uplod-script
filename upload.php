<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<HTML>
<head>
<title>Upload Persyaratan</title>
</head>
<body>

<?php echo form_open_multipart('dashboard/Upload/do_upload_multi');?>
<div class="container">
    <div class="jumbotron">
<h2>Silahkan Upload Persyaratan</h2>
<hr>

<div style="border: 0px dotted #000;margin:10px 0;padding:10px;">
<input type="file" name="images[]" />
<input type="file" name="images[]"/>
<input type="file" name="images[]"/>
</div>


<input type="submit" value="upload" name="upload" />

</form>
<br>
<br><font color="red">
<strong>Keterangan :<br></strong>
1. Upload Bukti Pembayaran<br>
2. Upload Nilai Rapot<br>
3. Upload Ijazah<br>
</body>
</HTML>