<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Welcome to Repository Sekolah Tinggi Agama Islam
    Nurul Ilmi - Tanjung Balai</title>
  <link href='<?= base_url('img/logo.png') ?>' rel='shortcut icon' />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>



  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

  <style>
    body {
      background-color: grey;
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .containers {
      width: 100%;
      max-width: 1431px;
      margin: 0 auto;
      position: relative;
    }

    .content {
      width: 100%;
      max-width: 1431px;
      margin: 0 auto;
      position: relative;
    }

    @media screen and (max-width: 1500px) {
      .containers {
        width: 100%;
        max-width: 1070px;
        margin: 0 auto;
        position: relative;
      }

      .content {
        width: 100%;
        max-width: 1070px;
        margin: 0 auto;
        position: relative;
      }
    }

    @media screen and (max-width: 1700px) {
      .containers {
        width: 100%;
        max-width: 1270px;
        margin: 0 auto;
        position: relative;
      }

      .content {
        width: 100%;
        max-width: 1270px;
        margin: 0 auto;
        position: relative;
      }
    }
  </style>
  <title>Repository</title>
</head>

<body>

  <div class="containers">

    <div class="header" style="background:#1ce31c">
      <br>
      <div class="col-sm-20 col-xs-20 text-center">
        <marquee bgcolor="yellow" style="font-family: impact; font-size:24px; color:#cc0000;">Selamat Datang Repository Sekolah Tinggi Agama Islam Nurul Ilmi Tanjungbalai <img src="<?= base_url('img/logo.png') ?>" width="24px" height="24px" alt="STAI Nurul Ilmi Tanjungbalai" /> Jl. Jend Soeprapto, Kel. Muara Sentosa, Kec. Sei Tualang Raso, Kota Tanjungbalai, Sumatera Utara 21333 </marquee> </a>
      </div>

      <br>
      <img src="<?php echo base_url('img/header2.png') ?>" style="margin-top: 10px; width:100%;min-height:50px; margin-left: 0px">
    </div>

    <div class="row" style="margin: 0px">

      <div class="col-md-9" style="background-color: white">
        <br>
        <h2 style='font-family:"Arial Black", Gadget, sans-serif'>Repository STAI NURUL ILMI</h2>
        <hr style="height:1px;border:none;color:#333;background-color:#333;" />
        <br>

        <?php echo "$contents"; ?>



      </div>

      <div class="col-md-3" style="background-color: white">
        <br>
        <?php echo form_open('home/search_rdr'); ?>
        <div class="input-group mb-3">

          <input type="text" name="keyword" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button type="submit"> <i class="fas fa-search"></i> </button>
          </div>
          </form>
        </div>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            <b> Navigation </b>
          </a>
          <a href="<?= base_url() ?>" class="list-group-item list-group-item-action">Home</a>

        </div>

        <br>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            Browse
          </a>
          <a href="<?= base_url() ?>home/browse_title" class="list-group-item list-group-item-action">Titles</a>
          <a href="<?= base_url() ?>home/browse_author" class="list-group-item list-group-item-action">Authors</a>
          <a href="<?= base_url() ?>home/browse_prodis" class="list-group-item list-group-item-action">Prodi</a>
          <a href="<?= base_url() ?>home/browse_type" class="list-group-item list-group-item-action">Metode</a>
        </div>

        <br>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            Prodi
          </a>

          <?php foreach ($prodi->result() as $row1) : ?>
            <a href="<?= base_url() ?>home/single_prodis/<?= $row1->id ?>" class="list-group-item list-group-item-action"><?php echo $row1->program_studi; ?></a>
          <?php endforeach; ?>


        </div>

        <br>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            My Account
          </a>
          <a href="<?= base_url() ?>auth/login" class="list-group-item list-group-item-action">Login</a>
        </div>
        <br>

      </div>

    </div>

    <div class="footer" style="background:#1ce31c; margin:0px">
      <br>

      <div class="col-sm-20 col-xs-20 text-center">Copyright &copy; 2022 <img src="<?= base_url('img/logo.png') ?>" width="20px" height="20px" />Sekolah Tinggi Agama Islam Nurul Ilmi Tanjung Balai </a></div>
      <br>

    </div>

  </div>




</body>

</html>