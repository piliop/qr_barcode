<!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <title>Qr barcode</title>
      </head>
      <body>
        <div class="container">
        <?php 
          $width=500;
          $height=500;

          if (!empty($_POST['url']) && $_POST['qr']=='qr' ) { ?>
            <div class="row h-100 ">
              <div class="col-12 d-flex align-content-center align-items-center justify-content-center h-100">            
                <?php $qrcode = '<img src="https://chart.googleapis.com/chart?chs='.$width.'x'.$height.'&cht=qr&chl='.$_POST['url'].'" title="'.$_POST['url'].'"class="img-fluid" >'; ?>
                <?php echo $qrcode;?>              
              </div>
            </div>
          <?php } ?>
          <div class="row mt-5">
            <div class="col-12 d-flex align-content-center align-items-center justify-content-center h-100">
              <a href="index.php" class="btn btn-info" tab-index="0"> << Πίσω</a>
            </div>
          </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      </body>

    </html>