<?php
if (!$login) {
  header("Location: /login.php");
  exit();
} else {

  include "get_data_admin.php";
  include "model_get_data.php";
}
?>
<?php
include "connection.php";

$model_query = mysql_query("SELECT * FROM model");
$model_data = mysql_fetch_array($model_query, MYSQL_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HY ADMIN</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  
</head>

<body>
  <main>
    <section class="title">
      <h3>HY ADMIN</h3>
    </section>
    <section class="box-container">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs mt-3">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="links-tab" data-bs-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="true">Links</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="mobile-main-tab" data-bs-toggle="tab" href="#mobile-main" role="tab" aria-controls="mobile-main" aria-selected="false">Mobile Main</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="mobile-live-tab" data-bs-toggle="tab" href="#mobile-live" role="tab" aria-controls="mobile-live" aria-selected="false">Mobile Live</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="mobile-goddess-tab" data-bs-toggle="tab" href="#mobile-goddess" role="tab" aria-controls="mobile-goddess" aria-selected="false">Mobile Goddess</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="links" role="tabpanel" aria-labelledby="links-tab">
          <h2>梦幻直播app_官方下载</h2>
          <form class="d-flex flex-row align-items-center flex-wrap mb-2 form1 gap-3">
            <input type="hidden" name="data_id" value="1">
            <input type="hidden" name="title" value="android_app">
            <div class="form-group col-xs-12 col-md-5">
              <label for="email">下载 APP/免费下载 安卓:</label>
              <input type="text" class="form-control" id="title" value="下载 APP/免费下载 安卓" disabled>
            </div>
            <div class="form-group col-xs-12 col-md-5">
              <label for="pwd">下载 APP/免费下载 安卓:</label>
              <input type="text" class="form-control mr-2" id="link" value="<?= $link_url[1] ?>" name="link" placeholder="下载 APP/免费下载 安卓">
            </div>
            <div class="form-group col-xs-12 col-md-1">
              <label for="btn"> &nbsp;</label>
              <button type="button" data-form_number="form1" class="form-control btn btn-success btn_save_link">保存</button>
            </div>
          </form>



          <!--/////////////////////////////////form inputs per links///////////////////////////////-->



          <form class="d-flex flex-row align-items-center flex-wrap mb-2 form2 gap-3">
            <input type="hidden" name="data_id" value="2">
            <input type="hidden" name="title" value="ios_app">
            <div class="form-group col-xs-12 col-md-5">
              <label for="email">下载 APP/免费下载 苹果:</label>
              <input type="text" class="form-control mr-2" id="title" value="下载 APP/免费下载 苹果" disabled>
            </div>
            <div class="form-group col-xs-12 col-md-5">
              <label for="pwd">下载 APP/免费下载 苹果:</label>
              <input type="text" class="form-control" id="link" value="<?= $link_url[2] ?>" name="link" placeholder="下载 APP/免费下载 苹果">
            </div>
            <div class="form-group col-xs-12 col-md-1">
              <label for="btn"> &nbsp;</label>
              <button type="button" data-form_number="form2" class="form-control btn btn-success btn_save_link">保存</button>
            </div>
          </form>




          <!--/////////////////////////////////form inputs per links///////////////////////////////-->



          <form class="d-flex flex-row align-items-center flex-wrap mb-2 form3 gap-3">
            <input type="hidden" name="data_id" value="3">
            <input type="hidden" name="title" value="m_customer_service">
            <div class="form-group col-xs-12 col-md-5">
              <label for="email">7X24 在线客服:</label>
              <input type="text" class="form-control mr-2" id="title" value="7X24 在线客服 " disabled>
            </div>
            <div class="form-group col-xs-12 col-md-5">
              <label for="pwd">7X24 在线客服 :</label>
              <input type="text" class="form-control" id="link" value="<?= $link_url[3] ?>" name="link" placeholder="7X24 在线客服 ">
            </div>
            <div class="form-group col-xs-12 col-md-1">
              <label for="btn"> &nbsp;</label>
              <button type="button" data-form_number="form3" class="form-control btn btn-success btn_save_link">保存</button>
            </div>
          </form>




          <!--/////////////////////////////////form inputs per links///////////////////////////////-->



          <form class="d-flex flex-row align-items-center flex-wrap mb-2 form4 gap-3">
            <input type="hidden" name="data_id" value="4">
            <input type="hidden" name="title" value="customer_service">
            <div class="form-group col-xs-12 col-md-5">
              <label for="email">官方客服 :</label>
              <input type="text" class="form-control mr-2" id="title" value="官方客服 " disabled>
            </div>
            <div class="form-group col-xs-12 col-md-5">
              <label for="pwd">官方客服 :</label>
              <input type="text" class="form-control" id="link" value="<?= $link_url[4] ?>" name="link" placeholder="官方客服">
            </div>
            <div class="form-group col-xs-12 col-md-1">
              <label for="btn"> &nbsp;</label>
              <button type="button" data-form_number="form4" class="form-control btn btn-success btn_save_link">保存</button>
            </div>
          </form>
        </div>
        <div class="tab-pane" id="mobile-main" role="tabpanel" aria-labelledby="mobile-main-tab">
          <h2>梦幻直播app_官方下载- MOBILE - MAIN</h2>
          <div class="col-12">
            <table class="table table-bordered">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th scope="col" style="width:80px;">Image</th>
                  <th scope="col">Upload</th>
                  <th scope="col" style="width:80px;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 7; $i <= 13; $i++) : ?>
                  <form class="d-flex flex-row align-items-center flex-wrap mb-2 formM0<?= $i ?>" enctype="multipart/form-data" autocomplete="off">
                    <tr>
                      <th hidden><input type="hidden" name="data_id" value="<?= $i ?>"></th>
                      <td><img src="../data/goddess/<?= $model_url[$i]['images'] ?>" height="50" width="100"> </td>
                      <td><input type="file" class="form-control" id="images" name="images"></td>
                      <td style="width: 50px;">
                        <button type="button" data-form_number="formM0<?= $i ?>" class="btn btn-success btn_save_model">保存</button>
                      </td>
                    </tr>
                  </form>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="mobile-live" role="tabpanel" aria-labelledby="mobile-live-tab">
          <h2>梦幻直播app_官方下载- MOBILE - LIVE</h2>
          <div class="col-12">
            <table class="table table-bordered">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th scope="col" style="width:150px;">UID</th>
                  <th scope="col" style="width:180px;">Name</th>
                  <th scope="col" style="width:80px;">Age</th>
                  <th scope="col" style="width:100px;">Distance</th>
                  <th scope="col" style="width:80px;">Attention</th>
                  <th scope="col" style="width:80px;">Live</th>
                  <th scope="col" style="width:80px;">Tag</th>
                  <th scope="col" style="width:80px;">True user</th>
                  <th scope="col" style="width:80px;">Video</th>
                  <th scope="col" style="width:200px;">Description</th>
                  <th scope="col">Image</th>
                  <th scope="col" style="width:270px;">Upload</th>
                  <th scope="col" style="width:80px;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                  <form class="d-flex flex-row align-items-center flex-wrap mb-2 formM0<?= $i ?>" enctype="multipart/form-data" autocomplete="off">
                    <tr>
                      <th hidden><input type="hidden" name="data_id" value="<?= $i ?>"></th>
                      <th scope="row"><input type="text" class="form-control" id="uid" name="uid" value="<?= $model_url[$i]['uid'] ?>" disabled></th>
                      <td><input type="text" class="form-control" id="name" name="name" value="<?= $model_url[$i]['name'] ?>"></td>
                      <td><input type="text" class="form-control" id="age" name="age" value="<?= $model_url[$i]['age'] ?>" placeholder="Age"></td>
                      <td><input type="text" class="form-control" id="distance" name="distance" value="<?= $model_url[$i]['distance'] ?>" placeholder="Distance"></td>
                      <td><input type="text" class="form-control" id="attention" name="attention" value="<?= $model_url[$i]['attention'] ?>" placeholder="Attention"></td>
                      <td><input type="text" class="form-control" id="live" name="live" value="<?= $model_url[$i]['live'] ?>" placeholder="Live"></td>
                      <td><input type="text" class="form-control" id="tag" name="tag" value="<?= $model_url[$i]['tag'] ?>" placeholder="Tag"></td>
                      <td><input type="text" class="form-control" id="trueuser" name="trueuser" value="<?= $model_url[$i]['trueuser'] ?>" placeholder="True user"></td>
                      <td><input type="text" class="form-control" id="surevideo" name="surevideo" value="<?= $model_url[$i]['surevideo'] ?>" placeholder="Sure video"></td>
                      <td><input type="text" class="form-control" id="des" name="des" value="<?= $model_url[$i]['des'] ?>" title="<?= $model_url[$i]['des'] ?>" placeholder="Description"></td>
                      <td><img src="../data/live/<?= $model_url[$i]['images'] ?>" height="50" width="50"> </td>
                      <td><input type="file" class="form-control" id="images" name="images"></td>
                      <td style="width: 50px;">
                        <button type="button" data-form_number="formM0<?= $i ?>" class="btn btn-success btn_save_model">保存</button>
                      </td>
                    </tr>
                  </form>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="mobile-goddess" role="tabpanel" aria-labelledby="mobile-goddess-tab">
          <h2>梦幻直播app_官方下载- MOBILE - GODDESS</h2>
          <div class="col-12">
            <table class="table table-bordered">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th scope="col">Description</th>
                  <th scope="col" style="width:80px;">Image</th>
                  <th scope="col" style="width:270px;">Upload</th>
                  <th scope="col" style="width:80px;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 111; $i <= 114; $i++) : ?>
                  <form class="d-flex flex-row align-items-center flex-wrap mb-2 formM0<?= $i ?>" enctype="multipart/form-data" autocomplete="off">
                    <tr>
                      <th hidden><input type="hidden" name="data_id" value="<?= $i ?>"></th>
                      <td><input type="text" class="form-control" id="des" name="des" value="<?= $model_url[$i]['des'] ?>" title="<?= $model_url[$i]['des'] ?>" placeholder="Description"></td>
                      <td><img src="../data/goddess/<?= $model_url[$i]['images'] ?>" height="50" width="50"> </td>
                      <td><input type="file" class="form-control" id="images" name="images"></td>
                      <td style="width: 50px;">
                        <button type="button" data-form_number="formM0<?= $i ?>" class="btn btn-success btn_save_model">保存</button>
                      </td>
                    </tr>
                  </form>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/admin.js"></script>
</body>

</html>
