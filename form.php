<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/vi.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="text-align: center;">Phiếu báo cáo sự cố y khoa</h1>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Giới thiệu</a></li>
    <li><a data-toggle="tab" href="#menu0">Tự nguyện</a></li>
    <li><a data-toggle="tab" href="#menu1">Bắt buộc</a></li>
    <li><a data-toggle="tab" href="#menu2">Báo cáo</a></li>
    <li><a data-toggle="tab" href="#menu3">Lịch sử</a></li>
  </ul>

  <div class="tab-content">
   <div id="home" class="tab-pane fade in active">
      <?php include "form_gt.php"; ?>
    </div>
    <div id="menu0" class="tab-pane fade">
      <?php include "form_tn.php"; ?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <?php include "form_bb.php"; ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <?php include "form_bc.php"; ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <?php include "form_ls.php"; ?>
    </div>
  </div>
</div>

</body>
</html>
