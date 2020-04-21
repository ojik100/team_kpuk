<BR>
<div class="container"><BR><BR><BR><BR><BR><BR>
    <div class="col-md-offset-3 col-md-5">

        <?php if ($_POST) include 'aksi.php'; ?>
        <img src="images/voting.jpg" align="left" width="70">
        <form class="form-signin" action="?m=login_pemilih" method="post">
             <img src="images/logo.jpg" align="left" width="70">
             
            <h2 align="center">Login Pemilihan Peresma<hr></h2><BR>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" placeholder="NIM " name="user" autofocus />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary form-control" type="submit"><span class=""></span> Masuk</button>
            </div>
           
        </form>
    </div>
</div>