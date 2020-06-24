<?php  
session_start();
if ($_SESSION['jenisuser']=="") {
    header("location:login.php?pesan=gagal");
    # code...
}
?>

<?php  
session_start();
if ($_SESSION['status']=="") {
    header("location:login.php?pesan=gagal");
    # code...
}
?>

<html>

<head>
    <title>Coba CSS Float</title>
    <link rel="stylesheet" href="prodi.css">
</head>
<body>

    <div id="topbar">

        <div id="topnav">
            <div class="">
                <a href="#"></a>
            </div>
            <ul class="link">
                <li class="current"><a href="#">home</a></li>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="login.php">LOGOUT</a></li>
                        <li><a href="#">sublink2</a></li>
                        <li><a href="#">sublink2</a></li>
                    </ul>
            </ul>
            
            <ul class="social">
                <li>
                    <a href="#">
                        <img src="images/facebook.png">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/twitter.png">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/gplus.png">
                    </a>
                </li>
            </ul>

        </div>

</body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akreditasi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<br>
<br>
<br>
    <div class="wrap">
        <aside class="sidebar">
            <div class="widget">
            <h2>Akun</h2>
            <p>username :<b><?php echo $_SESSION['username'];?></b><br>user :<b><?php echo $_SESSION['jenisuser'];?></b><br>status :<b><?php echo $_SESSION['status'];?></b>.</p>
            <p></p>
            <p></p>
           <h2>Anggota Kelompok:</h2>
                <p>1. Patria Deny Saputra</p>
                <p>2. Nurafrudin</p>
                <p>3. Irma Adelia</p>
                <p>4. Tigris Elbatafi</p>
                <p>5. Dicko Abiyu</p>
               
       
        
        </aside>
 
        
    
    
        <div class="blog">
            <div class="conteudo">
                <?php
                    require("../sistem/koneksi.php");

                    $hub = open_connection();
                    read_data();
                    mysqli_close($hub);

                     ?>

                    <?php
                    function read_data()
                    {
                        global $hub;
                        $query = "select * from dt_prodi";
                        $result = mysqli_query($hub, $query);?>
                        <div class="container">
                            <h2>Read Data Program Studi</h2>
                            <table>
                                <thead> 
                                    <tr>
                                        <td style="text-align : center;"><b>KODE</b></td>
                                        <td style="text-align : center;"><b>NAMA PRODI</b></td>
                                        <td style="text-align : center;"><b>AKREDITASI</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row=mysqli_fetch_array($result)) {?>
                                    <tr>
                                        <td style="text-align : center;"><?php echo $row['kdprodi'];?></td>
                                        <td><?php echo $row['nmprodi'];?></td>
                                        <td style="text-align : center;"><?php echo $row['akreditasi'];?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                    <?php } ?>
                    </div>
            </div>
        </div>
</body>
</html>