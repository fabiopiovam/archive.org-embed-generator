<!DOCTYPE html>
<html>
    <head>
        <title>archive.org embed generator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        
        <link href="assets/lightbox/css/lightbox.css" rel="stylesheet" />
        <link href="assets/bootstrap-2.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/bootstrap-2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        <style type="text/css" media="screen">
            #result { display: none; }
            
            #wp-gallery table {
                background-color: #EAEAEA;
            }
            #wp-gallery table tr td {
                padding: 5px
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <div class="row-fluid">
                        <div class="span12"></div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="input-append input-block-level">
                                <input class="to_copy input-block-level" type="url" name="url" value="" id="url" placeholder="Digite a URL do archive.org (ex.: https://archive.org/details/ezln-20-anos-de-autonomia-e-resistencia)"/>
                                <button type="button" class="btn btn-primary"><i class="icon-search icon-white"></i></button>
                            </div>
                            <span class="help-block" id="status">ex.: https://archive.org/details/ezln-20-anos-de-autonomia-e-resistencia</span>
                        </div>
                    </div>
                    
                    <div id="result">
                        <br/>
                        <h1 id="">Informações</h1>
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
            </div>
        </div>
        
        <script src="assets/lightbox/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/lightbox/js/lightbox.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/bootstrap-2.3.2/js/bootstrap.min.js"></script>
    </body>
</html>