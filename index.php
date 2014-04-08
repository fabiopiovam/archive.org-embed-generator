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
            body{
                background-image: url('img/logo.png');
                background-position: center 190px;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
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
                                <input class="to_copy input-block-level" type="url" name="url" value="" id="url"/>
                                <button type="button" class="btn btn-primary"><i class="icon-search icon-white"></i></button>
                            </div>
                            <span class="help-block" id="status"></span>
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
        
        <a href="https://github.com/laborautonomo/archive.org-embed-generator" target="_blank">
            <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png">
        </a>
        <script src="assets/lightbox/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/lightbox/js/lightbox.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/bootstrap-2.3.2/js/bootstrap.min.js"></script>
    </body>
</html>