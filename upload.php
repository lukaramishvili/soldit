<?

session_start();

/* receives uploaded image and redirects to the main view */

if(count($_FILES)){
    $img = $_FILES['cameraInput'];
    $imgname = $img['name'];
    $tmp_name = $img['tmp_name'];
    $error = $img['error'];
    if(!isset($_SESSION['uniq'])){ $_SESSION['uniq'] = uniqid(); }
    $updir = "uploads/".$_SESSION['uniq'];
    $upfile = "$updir/1.jpg";
    mkdir("uploads/", 0777);
    mkdir($updir, 0777);
    move_uploaded_file($tmp_name, $upfile);
    header("location:./?img=$upfile");
}
?>