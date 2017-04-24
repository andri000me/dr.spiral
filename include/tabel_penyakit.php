<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="sandhi" />

	<title>SPIRAL</title>
    <style>
    /* Di bawah ini adalah style yang di gunakan untuk tabel */
    th{font-size: 15px;}
    .td{border: 1px solid #999; background:#FFF; height:25px; width:150px; font-size:16px; text-align:center;}
    .td:hover{1px solid #000;}
    @-moz-document url-prefix() {
    select{
        border-radius: 5px;
        background-image: url(../images/arrow.png);
        background-position: center right;
        background-repeat: no-repeat;
        border: 1px solid #CCC;
        color: #000;
        font-size: 15px;
        font-family:Comfortaa, Arial, Helvetica, sans-serif;
        margin: 0;
        height:auto;
        padding:10px;
    }}
    /* style di bawah ini untuk tampilan tombol PROSES */
    .proses{border: 1px solid #999; background:#FFF; height:35px; width:415px; font-size:16px; text-align:center;}
    .proses:hover {border: 1px solid #000;background:#787878;color: #FFF;}
    .proses:active {border: 1px solid #F0F0F0;}
    </style>

</head>

<body>
<table class="table table-bordered">
<caption style="font-size: 15px;"></caption>
<form action="include/prosespenyakit.php" method="post">
    <tr>
        <th>Suhu Tubuh</th>
        <th>Tekanan Darah</th>
        <th>Bintik Merah</th>
        <th>Musim</th>
    </tr>
    <tr>
        <td>
        <select style="width: 100px;" name="suhu_tubuh">
              <option value="suhu_tubuh_tinggi">Tinggi</option>
              <option value="suhu_tubuh_rendah">Rendah</option>
              <option value="suhu_tubuh_normal">Normal</option>
        </select>
        </td>
        <td>
         <select style="width: 100px;" name="tekanan_darah">
              <option value="tekanan_darah_tinggi">Tinggi</option>
              <option value="tekanan_darah_rendah">Rendah</option>
              <option value="tekanan_darah_normal">Normal</option>
         </select>
         </td>
          <td>
         <select style="width: 100px;" name="bintik_merah">
              <option value="bintik_merah_banyak">Banyak</option>
              <option value="bintik_merah_sedikit">Sedikit</option>
              <option value="bintik_merah_tidak_ada">Tidak Ada</option>
         </select>
         </td>
         <td>
         <select style="width: 100px;" name="musim">
              <option value="musim_hujan">Hujan</option>
              <option value="musim_kemarau">Kemarau</option>
              <option value="musim_pancaroba">Pancaroba</option>
         </select>
         </td>
    </tr>
    </tr>
        <td colspan="4">
					<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Proses" />
				</td>
    </tr>
		<tr>
			<td colspan="4">
				<a class="btn btn-default btn-lg btn-block" style="float: left; font-size: 20px;" href="index.php">Reset </a>
			</td>
		</tr>
</form>
</table>

</body>
</html>
