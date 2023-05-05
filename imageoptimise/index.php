  
<?php if(isset($_POST["download"])){ 
$path=dirname(__FILE__)."\uploads";

array_map('unlink', glob("$path/*.*"));
    rmdir($path);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Employee Availability Form</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: black;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 40px;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #EF233C; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("https://plus.unsplash.com/premium_photo-1666184129932-e443a8de06e9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60");  
      background-size: cover;
      background-position-y: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #EF233C;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #EF233C;
      color: #EF233C;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #EF233C;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #EF233C;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #EF233C;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #EF233C;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #EF233C;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: black;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
      #download, #file_url{display: none;}
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="banner">
          <h1>Image optimisation</h1>
        </div>
        <div class="item">
          <label for="name">Upload your image here<span>*</span></label>
          <p><b>Files supported *.jpg, *.jpeg</b></p>
          <div class="name-item" style="border:none">
            <input id="name" type="file" name="image_file">
            <div>
            <img id="preview" src="https://cutewallpaper.org/24/image-placeholder-png/emoji.png" width="300" height="300" >
            <button type="submit" id="download" name="download">Delete</button>
            <a download id="file_url">Download</a>
                        <!-- <input type="hidden" value="" name="file_url" id="file_url"> -->
        	</div>
          </div>
        </div>
        <div class="item">
          <label for="name">Enter your image resoultion (px)<span>*</span></label>
          <div class="name-item" style="border:none">
            <input id="im_width" type="number" name="image_width" placeholder="Desired Width">
            <input id="im_height" type="number" name="image_height" placeholder="Desired Height">
            <input id="im_height" type="number" name="image_quality" min=1 max=100 placeholder="Desired Height">
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>

<?php


if(isset($_POST["submit"]))
{
  if(pathinfo($_FILES['image_file']['name'],PATHINFO_EXTENSION)=="jpg" || pathinfo($_FILES['image_file']['name'],PATHINFO_EXTENSION)=="jpeg"){
if( is_dir(__FILE__)."uploads"){mkdir(dirname(__FILE__)."/uploads");}
else{}
	$name='uploads/img_'.uniqid().".jpg";
	$im = imagecreatefromjpeg($_FILES["image_file"]["tmp_name"]);
	$im_w=intval(imagesx($im));
	$im_h=intval(imagesy($im));
	if(isset($_POST['image_width']) && isset($_POST['image_height']) && !empty($_POST['image_height']) && !empty($_POST['image_width'])){
		$im_w_new=intval($_POST['image_width']);
		$im_h_new=intval($_POST['image_height']);
		$im_php = imagecreatetruecolor($im_w_new,$im_h_new);
    $im_quality=$_POST['image_quality'];
	imagecopyresampled( $im_php, $im, 0, 0, 0, 0, $im_w_new, $im_h_new, $im_w, $im_h );
	}else{
    $im_php=$im;
    $im_quality=30;
  }
	imagejpeg($im_php, $name, $im_quality);
	imagedestroy($im);
	echo "<script>document.getElementById('preview').src='".$_SERVER['REQUEST_URI']."/".$name."'; document.getElementById('file_url').href='".$_SERVER['REQUEST_URI']."/".$name."'; document.getElementById('download').style.display='block'; document.getElementById('file_url').style.display='block';</script>";
}
else{
  echo "<script>alert('Please check the file type');</script>";
}
}
?>
<div style="width:100%; background-color: black; color: white;"><center>&copy; 2023 Designed and Developed By <a style="color:#EF233C" href="https://geebamore.github.io"> Geebamore</a></center></div>
  </body>
</html>
