<?php include_once('cabecalho.php'); ?>

<div class="row">
    <div class="col-md-3 col-xs-12 col-lg-3">
        <?php include_once('sidebar.php'); ?>
    </div>

    <div class="col-md-9 col-xs-12 col-lg-3">

        <form class="form-inline">
            <div class="form-group">
                <label for="tit">Titulo</label>
                <input type="text" class="form-control" id="tit" placeholder="Jane Doe">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="categoria" id="status"></select>
            </div>
        </form>



    </div>
</div>

<?php include_once('rodape.php'); ?>