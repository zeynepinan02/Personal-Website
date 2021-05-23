<html lang="tr-TR">
    <head>
	    <meta charset="utf-8">
	    <title>Zeynep İnan Kişisel Web Sitesi</title> 
		
		<meta name="viewport" content="width=device-width , initial-scale=1.0"> 
		<meta name="discription" content="Zeynep İnan hakkında kişisel web sitesi">
		<meta name="keywords" content="kişisel,web,sitesi">
		
		<link rel="stylesheet" href="still.css">
		
		<link rel="shortcut icon" href="Resimler/logo.ico">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
    <body class="iletisimArka">
	    <nav class="navbar navbar-expand-sm nav">			
			<a class="nav-link" href="index.html">Ana Sayfa</a>
            <a class="nav-link" href="hakkimda.html">Hakkımda</a>
			<a class="nav-link" href="ozgecmis.html">Öz Geçmiş</a>
			<a class="nav-link" href="sehrim.html">Şehrim</a>
			<a class="nav-link" href="mirasimiz.html">Mirasımız</a>
			<a class="nav-link" href="ilgiAlanlarim.html">İlgi Alanlarım</a>
			<a class="nav-link" href="iletisim.html">İletişim</a>
			<a class="nav-link" href="giris.html">Giriş Yap</a>
		</nav>			
		
		<header><h1>Bilgileriniz</h1></header>
			<section class="sayfaTasma">
			    <article class="row justify-content-md-center ">
		            <div class="col-sm-4 col-s-6 iletisim">
				        <table>
						    <tr class="cvBilgileri">
			                    <th>Ad-Soyad</th>
				                <td>:</td>
				                <td> <?php echo" ".$_GET["ad"]." "; ?></td>
			                </tr>
			                <tr class="cvBilgileri">
			                    <th>Cinsiyet</th>
				                <td>:</td>
				                <td>  <?php if(isset($_GET["cinsiyet"])) 
								                echo" ".$_GET["cinsiyet"]." ";
											else
                                                echo" - ";											
								      ?></td>
			                </tr>
							<tr class="cvBilgileri">
			                    <th>E-mail</th>
				                <td>:</td>
				                <td> <?php echo" ".$_GET["e-mail"]." "; ?></td>
			                </tr>
			                <tr class="cvBilgileri">
			                    <th>Mesaj</th>
				                <td>:</td>
				                <td> <?php echo" ".$_GET["message"]." "; ?> </td>
			                </tr>			
	                    </table>          						
			        </div>
		        </article> 
            </section>				
		<footer class="py-4 iletFooter">		 
			<div class="text-center">Web-Teknolojileri-Projesi Zeynep İnan 2021</div>
	    </footer>
		
    </body>
</html>