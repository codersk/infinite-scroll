<?php
include('conn.php');

$last_id=(isset($_GET['last_id']))? $_GET['last_id'] : 0;
$action= "post";

if($action <> "get") {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="functions.js"></script>
  </head>
  <body>
    <div class="container">
      <h3>Infinite Scroll</h3>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-clock-o fa-fw"></i>
              <button id="load" class="btn btn-primary">Load more</button>
            </div>
            <div class="card-body">
              <div class="list-group">
                <?php include('load.php'); ?>
                <div id="loader" style="margin: 0 auto;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
<?php
} else {
  include('load_more.php');
}
?>