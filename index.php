<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>archive.org embed generator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        
        <link href="<?php echo HOST; ?>/assets/lightbox/css/lightbox.css" rel="stylesheet" />
        <link href="<?php echo HOST; ?>/assets/bootstrap-2.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo HOST; ?>/assets/bootstrap-2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo HOST; ?>/css/custom.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9">
                    <div class="row-fluid">
                        <div class="span12"></div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="input-append input-block-level">
                                <input class="to_copy input-block-level" type="url" name="url" placeholder="Cole aqui a URL do archive.org" value="<?php echo (isset($_GET['p']) && $_GET['p']) ? 'https://archive.org/details/' . $_GET['p'] : '' ?>" id="url"/>
                                <button type="button" class="btn btn-primary"><i class="icon-search icon-white"></i></button>
                            </div>
                            <span class="help-block" id="status"></span>
                        </div>
                    </div>
                    
                    <div id="result">
                        <br/>
                        <h1 id="section-info">Informações</h1>
                        <div>
                            <label for="title">Título</label>
                            <input type="text" name="title" value="" id="title" readonly="true" class="to_copy input-block-level"/>
                        </div>
                        <div>
                            <label for="description">Descrição</label>
                            <textarea name="description" id="description" rows="5" readonly="true" class="to_copy input-block-level"></textarea>
                        </div>
                        <div>
                            <label for="tags">Tags</label>
                            <input type="text" name="tags" value="" id="tags" readonly="true" class="to_copy input-block-level"/>
                            <br/><br/>
                        </div>
                        
                        <input type="hidden" name="identifier" value="" id="identifier"/>
                        
                        <div id="elements"></div>
                    </div>                    
                </div>
                <div class="bs-docs-sidebar hidden-phone span3" id="arch-navbar-spy">
                    <ul id="arch-navbar" class="nav nav-list bs-docs-sidenav affix"></ul>
                </div>
            </div>
        </div>
        
        <a href="https://github.com/laborautonomo/archive.org-embed-generator" target="_blank">
            <img style="position: absolute; top: 0; right: 0; border: 0;" src="<?php echo HOST; ?>/img/fork-me.png" alt="Fork me on GitHub">
        </a>
        <script src="<?php echo HOST; ?>/assets/lightbox/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo HOST; ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo HOST; ?>/assets/lightbox/js/lightbox.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo HOST; ?>/assets/bootstrap-2.3.2/js/bootstrap.min.js"></script>
        <script src="<?php echo HOST; ?>/assets/bootstrap-2.3.2/js/bootstrap-scrollspy.js"></script>
    </body>
</html>