<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>archive.org embed generator</title>
    </head>
    
    <body>
        <div>
            <label for="url">URL do archive.org: </label>
            <input style="width: 60%;" class="to_copy" type="text" name="url" value="https://archive.org/details/ezln-20-anos-de-autonomia-e-resistencia " id="url" placeholder="ex.: https://archive.org/details/acorda-pra-viola-quadrilha-junina"/>
            <div id="status">ex.: https://archive.org/details/ezln-20-anos-de-autonomia-e-resistencia</div>
            <br/>
        </div>
        
        
        <div id="result" style="display: none;">
            <h1 id="">Informações</h1>
            <div>
                <label for="title">Título</label>
                <input type="text" name="title" value="" id="title" readonly="true" class="to_copy"/>
            </div>
            <div>
                <label for="description">Descrição</label>
                <textarea name="description" id="description" rows="8" cols="40" readonly="true" class="to_copy"></textarea>
            </div>
            <div>
                <label for="tags">Tags</label>
                <input type="text" name="tags" value="" id="tags" readonly="true" class="to_copy"/>
                <br/><br/>
            </div>
            
            <input type="hidden" name="identifier" value="" id="identifier"/>
            
            <div id="elements"></div>
        </div>
    
        <script src="assets/lightbox/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
        <link href="assets/lightbox/css/lightbox.css" rel="stylesheet" />
        <script src="assets/lightbox/js/lightbox.min.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>