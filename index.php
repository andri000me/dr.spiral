<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Kamis, 15 Nop 2012 19:03:09 GMT">
    <meta name="description" content="Naive Bayer Classified dalam penentuan penyakit dbd">
    <meta name="keywords" content="data mining, naive bayer classified">
    <title>Dr. Spiral</title>
    <!-- Di bawah adalah pemanggilan file style yang berada pada satu direktori dengan file ini -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="js/jquery-latest.js" type="text/javascript"></script> -->

    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		 <p style="text-align:center;font-size:20px;color: black;">Naive Bayer Classifier<br />dalam Penentuan Penyakit DBD</p>
        <table style="margin: auto;">
           <tr>
             <td>
               <img src="images/line.png" align="middle"/>
             </td>
          </tr>
        </table>

        <div class="row">
          <div class="col-md-4 col-md-offset-3">
            <table class="table" style="background-image:url('images/chalkboard.jpg')">
               <tr>
               <td>
               <p class="ampersand" style="text-align: justify; font-size:20px; line-height: 150%; color:#FFF" id="isi">
               Hi...saya adalah dr. SPIRAL<br />
               mari kita periksa kesehatan anda dalam hal kemungkinan terkena DBD atau Tidak..<br />
               Silahkan pilih Gejala apa saja yang anda rasakan pada pilihan di bawah...
               </p>
               <script type="text/javascript">
               <?php
               if (!empty($_GET['proses'])) { // jika nilai dari proses tidak kosong, maka lanjutkan
             if ($_GET['proses'] == 1) {?> /* jika yang di dapatkan nilai proses == 1, maka isi tabel dengan nilai di bawah ini */
                   document.getElementById("isi").innerHTML = "<p style='font-size:25px;'> dari pilihan yang anda lakukan, dapat disimpulkan jika anda memiliki kemungkinan <span style='color:white; text-decoration: underline;'>terkena</span> penyakit <span style='color:white;text-decoration: underline;'>DBD</span></p>";

             <?php } elseif ($_GET['proses'] == 2) {?> /* jika yang di dapatkan nilai proses == 2, maka isi tabel dengan nilai di bawah ini */
               document.getElementById("isi").innerHTML = "<p style='font-size:25px;'> dari pilihan yang anda lakukan, dapat disimpulkan jika anda memiliki kemungkinan <span style='color:white;text-decoration: underline;'>tidak terkena</span> penyakit <span style='color:white;text-decoration: underline;'>DBD</span></p>";
             <?php }
            }
              ?>
              </script>
               </td>
               </tr>
            </table>
            <?php require ('include/tabel_penyakit.php');?>

          </div>
          <div class="col-md-3">
            <img style="margin-left: 10px;" src="images/Doctor.png" />
          </div>
        </div>
         <div style="height: 100px;"></div>
         <!-- memanggil file footer.php dengan fungsi PHP pada file directory yang sama -->
         <?php require('include/footer.php');?>
  </body>
</html>
