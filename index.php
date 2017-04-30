<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Instagram Resim İndirme </title>
<meta name="application-name" content="" />
<meta name="author" content="" />
<meta name="distributor" content="" />
<meta name="robots" content="All" />
<meta name="description" content="Instagram Resim Adresinizi Boşluğa Girin, Ardından Fotoğraf İndir Butonuna basınız." />
<meta name="keywords" content="Instagram, instagram, resim, resim indir, indir, instagram resim indir, fotoğraf, fotoğraf indir, fotograf, foto, foto indir, instagramdan bedava indir, bedava, free, indir" />
<meta name="rating" content="General" />
<meta name="dcterms.title" content="Instagram Resim İndirme" />
<meta name="dcterms.contributor" content="" />
<meta name="dcterms.creator" content="" />
<meta name="dcterms.publisher" content="" />
<meta name="dcterms.description" content="Instagram Resim Adresinizi Boşluğa Girin, Ardından Fotoğraf İndir Butonuna basınız." />
<meta name="dcterms.rights" content="" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Instagram Resim İndirme" />
<meta property="og:description" content="Instagram Resim Adresinizi Boşluğa Girin, Ardından Fotoğraf İndir Butonuna basınız." />
<meta property="twitter:title" content="Instagram Resim İndirme" />
<meta property="twitter:description" content="Instagram Resim Adresinizi Boşluğa Girin, Ardından Fotoğraf İndir Butonuna basınız." />


    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

</head>

<body>


    <div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="index.php">Instagram Resim İndir</a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                  <li class="active" role="presentation">
                        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Ana Sayfa</a></li>
                    <li role="presentation">
                        <a href="" data-toggle="modal" data-target="#iletisim" ><i class="fa fa-phone" aria-hidden="true"></i> İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="well well-lg">
<center>
<img src="assets/img/resim.png" height="200" class="img-responive" alt="instagram resim indir, instagram fotoğraf indir">
<h1> Instagram Fotoğraf İndir </h1>

<?php

if(isset($_POST['Gonder']))
{/*
  echo $_POST['Ad'].'<br>';
  echo $_POST['Soyad'].'<br>';
  echo $_POST['EMail'].'<br>';
  echo $_POST['Tur'].'<br>';
  echo $_POST['Konu'].'<br>';
  echo $_POST['Mesaj'].'<br>';
  echo $_POST['ResimEk'].'<br>';
*/
}
  ?>

<p>Instagram Resim Adresinizi Boşluğa Girin, Ardından <kbd>Fotoğraf İndir</kbd> Butonuna basınız
<br>
<font color="red"><b>Yeni!</b></font> <kbd>Gizli fotoğrafları indirmez.</kbd></p>
<b>Not:</b> <kbd>Instagramın yeni getirdiği sola doğru kaydırmalı resimleri indiremez.</kbd></p>

    <form action="" method="POST">
    <input class="form-control" type="url" name="Resim" placeholder="https://www.instagram.com/p/BTS1BcPDJ6N/" required="required">
<p></p>
  <button type="submit" class="btn btn-success">Fotoğraf İndir</button>

    </form>

<?php

if(isset($_POST['Resim']))
{
    echo '<br>';

@$veri = file_get_contents(strip_tags(addslashes(trim(htmlspecialchars($_POST['Resim'], ENT_QUOTES, 'utf-8')))));

@preg_match('@ <meta property="og:image" content="(.*?)" />@si',$veri,$Resim);
@preg_match('@ <meta property="og:title" content="(.*?)" />@si',$veri,$Yayimci);
@preg_match('@ <meta content="(.*?)" />@si',$veri,$Icerik);

@$file = get_headers($Resim[1]);
if($file['0'] == 'HTTP/1.1 200 OK') {
 echo @'<img src='.$Resim[1].' width="350px" class="bounceInLeft animated img-responsive">';



    $Yayimci = explode("Instagram post by",$Yayimci[1]);
      

        @$Yayimci = explode("@",$Yayimci[1]);

if(@$Yayimci[0] != " ")
        {

       @$Yayimci = explode("•",$Yayimci[0]); 
}
else
{
           @$Yayimci = explode("•",$Yayimci[1]); 
}

         echo '<div class="bounceInRight animated"><br><font size=5>Gönderen: '.$Yayimci[0].' </font></a></div> <br>';


    @$Icerik = explode("on Instagram: “",$Icerik[1]);

      @$Icerik = explode('”" name="description',$Icerik[1]); 
echo '<div class="zoomIn animated"> <h4>'.@$Icerik[0].'</h4></div>';

echo '<a href='.$Resim[1].' class="zoomIn animated btn btn-warning btn-md" download>Tıkla İndir</a>';


}
else
{
    echo '
<br>

<div class="bounceIn animated alert alert-danger fade in alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    Resim Bulunamadı, Adres Hatalı Olabilir. Yanlışlık Olduğunu Düşünüyorsanız <b><a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#iletisim" >İletişim</a></b> bölümünden bizimle <b><a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#iletisim" >İletişim</a></b>e geçin
</div>
    ';
}
}

?>
</center>

    </div>

<?php


//}

    ?>
 






<!-- Modal -->
<div class="modal fade" id="iletisim" tabindex="-1" role="dialog" aria-labelledby="iletisimLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="iletisimLabel">İletişim</h4>
      </div>
      <div class="modal-body">
 


<form action="" method="POST">
<div class="form-group">
  <label>Ad:</label>
  <input type="text" class="form-control" name="Ad" required="required">
</div>
<div class="form-group">
  <label>Soyad:</label>
  <input type="text" class="form-control" name="Soyad" required="required">
</div>
<div class="form-group">
  <label>E-Posta:</label>
  <input type="email" class="form-control" name="EMail" required="required">
</div>
<div class="form-group">
  <label>Tür:</label>
<select class="form-control" name="Tur" required="required">
        <option value="Oneri">Öneri</option>
        <option value="Sorun">Sorun Bildir</option>
</select>
</div>
<div class="form-group">
  <label>Konu:</label>
  <input type="text" class="form-control" name="Konu" required="required">
</div>
<div class="form-group">
  <label>Mesajınız:</label>
  <textarea class="form-control" rows="3" name="Mesaj" required="required"></textarea>-
</div>
<div class="form-group">
  <label>Varsa Resim (Hizliresim.com a yükleyiniz.):</label>
  <input type="text<" class="form-control" name="ResimEk">
</div>
<div class="form-group">
  <button type="submit" name="Gonder" class="btn btn-primary">Gönder</button>
</div>
</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" onclick='' data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>  

    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>