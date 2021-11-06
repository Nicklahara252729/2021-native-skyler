<!DOCUMENT HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link href="../img/logo-sponsor/icon-hitam.png" rel="icon">
        <title>SKYLER | Welcome Admin</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/skyler-admin.css" rel="stylesheet">
        <script src="../js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="../js/skyler-admin.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-atas">
                <div class="content">
                    <div class="login">
                        <div class="login-atas">
                            <div class="shadow-login">
                                <img src="../img/logo-sponsor/logoputih.png">
                                <p>WELCOME ADMIN</p>
                            </div>
                        </div>
                        <form action="" method="post">
                    <input type="text" name="" placeholder="ID Admin" required>
                    <input type="password" name="" placeholder="Password" required>
                    <button type="submit"><span class="glyphicon glyphicon-send"></span></button>
                </form>
                        <button type="button" title="Forgot ?" class="btn-forgot"><span class="glyphicon glyphicon-question-sign"></span></button>
                    </div>
                    <div class="forgot">
                        <span class="glyphicon glyphicon-triangle-left"></span>
                        <ul>
                            <li class="li-login-by">Login With Privacy</li>
                            <li class="li-tell-sa">Tell Super Admin</li>
                            <li class="li-tell-reg">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-bawah">
                <div class="content-bawah">
                    <div class="column">
                    <div class="atas">KODE ETIK ADMIN</div>
                        <p>admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin adminadminadminadmin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin adminadmin admin admin admin admin admin admin admin admin admin admin admin admin admin admin
                        admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin adminadminadminadmin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin adminadmin admin admin admin admin admin admin admin admin admin admin admin admin admin admin
                        admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin adminadminadminadmin admin admin admin admin admin admin admin admin admin admin admin admin admin admin admin adminadmin admin admin admin admin admin admin admin admin admin admin admin admin admin admin</p>
                    </div>
                </div>
            </div>
            <div class="login-by">
                <div class="forms-login-by">
                    <div class="in-forms">
                        <div class="sub-in-forms">
                            <img src="../img/logo-sponsor/logoputih.png">
                            <p>LOGIN WITH DETAIL ACCOUNT</p>
                        </div>
                    </div>
                    <form action="" method="post">
                    <input type="text" name="" placeholder="Username">
                    <input type="text" name="" placeholder="Username">
                    <input type="text" name="" placeholder="Username">
                    <input type="text" name="" placeholder="Username">
                    <input type="text" name="" placeholder="Username">
                    <input type="text" name="" placeholder="Username">
                    <a href="index.php"><button type="button"><span class="glyphicon glyphicon-remove"></span></button></a>
                    <button type="submit"><span class="glyphicon glyphicon-send"></span></button>
                </form>
                </div>
                
            </div>
            <div class="tell-superadmin">
                <div class="forms-tell-superadmin">
                    <div class="in-forms-tell">
                        <div class="sub-in-tell">
                            <img src="../img/logo-sponsor/logoputih.png">
                            <p>TELL SUPERADMIN</p>
                        </div>
                    </div>
                    <form action="" method="post">
                        <input type="text" name="" placeholder="Masukkan nama lengkap">
                        <input type="text" name="" placeholder="Masukkan Email">
                        <textarea placeholder="What's your problem ?"></textarea>
                        <a href="index.php"><button type="button"><span  class="glyphicon glyphicon-remove"></span></button></a>
                        <button type="submit"><span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
            <div class="admin-register">
                <div class="content-register">
                    <div class="sub-cr">
                        <div class="in-sub-cr">
                            <img  src="../img/logo-sponsor/logoputih.png">
                            <p>ADMIN REGISTER</p>
                        </div>
                    </div>
                    <form action="" method="post">
                        <input type="text" name="" placeholder="Nama Lengkap" required>
                        <select name="" class="jenkel">
                            <?php
                            $jenkel=array('Laki -laki','Perempuan');
                            for($i=0;$i<=1;$i++){
                                echo"
                                <option value='$jenkel[$i]'>$jenkel[$i]</option>
                                ";
                            }
                            ?>
                        </select>
                        <select name="" class="tgl">
                            <?php
                            for($i=1;$i<=31;$i++){
                                echo"<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="" class="bulan">
                            <?php
                            $bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                            for($i=0;$i<=11;$i++){
                                echo"<option value='$bulan[$i]'>$bulan[$i]</option>";
                            }
                            ?>
                        </select>
                        <select name="" class="tahun">
                            <?php
                            for($i=1970;$i<=2000;$i++){
                                echo"<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <input type="text" name="" placeholder="Kota Asal" required>
                        <textarea name="" placeholder="Alamat">
                        </textarea>
                        <input type="text" name="" placeholder="Masukkan Email" required>
                        <input type="text" name="" placeholder="Username" required>
                        <input type="password" name="" placeholder="Password" required>
                        <button type="reset"><span class="glyphicon glyphicon-remove"></span> &nbsp; CANCEL</button>
                        <button type="submit"><span class="glyphicon glyphicon-send"></span> &nbsp; SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>