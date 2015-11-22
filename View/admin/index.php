<?php require_once('inc/header1.php');
$key = md5(microtime().rand());
$_SESSION['key'] = $key;
?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admimistrator Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?=BASEURL;?>administrator/login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="key" value="<?=$_SESSION['key'];?>">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                                               <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('inc/footer.php');?>