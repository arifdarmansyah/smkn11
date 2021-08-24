<?php

require('validasi.php');

if(isset($_POST['submit'])){
    //validasi
    
    $valid = new validate($_POST);
    $eror = $valid->validasiform();
    

}

?>

<html>
<head>
    <title>Form pendaftaran mahasiswa baru</title>
</head>
<body>
    <div>
        <h2>Form pendaftaran mahasiswa baru</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label>username : </label>
            <input type="text" name="username">
            <div>
                <?php 
                    echo $eror['username'] ?? ''
                    
                ?>
            </div>
                        
            <label>email : </label>
            <input type="text" name="email" >
            <div>
                <?php 
                    echo $eror['email'] ?? ''
                ?>
            </div>
            
            <label>nama : </label>
            <input type="text" name="nama" >
            <div>
                <?php 
                    echo $eror['nama'] ?? ''
                ?>
            </div>

            <label>tempat lahir : </label>
            <input type="text" name="tmplahir" >
            <div>
                <?php 
                    echo $eror['tmplahir'] ?? ''
                ?>
            </div>

            <label>tanggal lahir : </label>
            <input type="text" name="tgllahir" >
            <div>
                <?php 
                    echo $eror['tgllahir'] ?? ''
                ?>
            </div>

            <label>asal sekolah : </label>
            <input type="text" name="aslsekolah" >
            <div>
                <?php 
                    echo $eror['aslsekolah'] ?? ''
                ?>
            </div>

            <input type="submit" name="submit" value="submit">
        </form>
</div>
</body>
</html>
