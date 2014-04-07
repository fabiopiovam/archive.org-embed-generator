/**
 * @author LaborAutonomo.org
 */

$(document).on('focus',".to_copy",function(){
    $(this).select();
});

$(document).on('change',"#col_options",function(){
    wp_gallery_items($(this).val());
});

function get_audio(arr){
    
    identifier  = $('#identifier').val();
    embed_base  = 'https://archive.org/embed/' + identifier;
    link_base   = 'https://archive.org/download/' + identifier;
    audios      = '';
    unique_embed= '';
    $.each(arr, function(k,v) {
        val = v[1];
        
        //title
        if (val.title) {
            title_audio = val.title;
            if (val.artist) title_audio += " (" + val.artist + ")"
        }
        else{
            title_audio = v[0].substr(1).replace(/\.(mp3|ogg)$/gi,"");
        }
        
        //embed
        embed   = ' [iframe ' + embed_base + v[0] + ' 500 30]';
        iframe  = '<iframe frameborder="0" style="height:30px;width:100%;" src="' + embed_base + v[0] + '">Please upgrade your browser</iframe>';
        
        //link download
        link = ' Download: ';
        link += "<a href='" + link_base + v[0] + "' target='_blank'>" + val.format + "</a>";
        if (typeof v.optional != 'undefined') link += " | <a href='" + link_base + v.optional[0] + "' target='_blank'>" + v.optional[1].format + "</a>";
        
        text = title_audio + embed + link;
        audios += '<div class="span5">' + title_audio + '<br/>' + iframe + '<br/>' + link + '<br/>' + ' <textarea id="' + v[0] + '" class="to_copy input-block-level" rows="4" readonly="true">' + text + '</textarea><br/></div>';
    });
    
    if (arr.length > 1){
        unique_embed = '<div class="span8"><h3>Lista com todos os audios agrupados</h3>';
        unique_embed += '<iframe src="' + embed_base + '&playlist=1" class="input-block-level" height="120" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe> <br/>';
        unique_embed += '<input type="text" value="[iframe ' + embed_base + '&playlist=1 500 120]" class="to_copy input-block-level" readonly="true" /> <br/><br/> </div>';
    } 
    
    $('#wp-audio').append('<div id="content_audio" class="row-fluid"></div>');
    $('#wp-audio #content_audio').append('<h1>Audios</h1>');
    $('#wp-audio #content_audio').append(audios);
    $('#wp-audio #content_audio').append(unique_embed);
}


function get_image(arr){
    identifier = $('#identifier').val();
    link = 'https://archive.org/download/' + identifier;
    img = '';
    $.each(arr, function(k,v) {
        text = '<a target="_blank" rel="lightbox" href=" ' + link + v[0] + ' "><img src=" ' + link + v.thumb[0] + ' " title="clique para aumentar"></a><br/><br/>';
        img += '<div class="span3"> ' + text + ' <textarea id="' + v[0] + '" class="to_copy input-block-level" rows="4" readonly="true">' + text + '</textarea> <br/></div>';
    });
    
    $('#wp-photos').append('<div id="img_content" class="row-fluid"></div>');
    $('#wp-photos #img_content').append('<h1>Imagens</h1>');
    $('#wp-photos #img_content').append(img);
}


function wp_gallery_items(cols){
    identifier = $('#identifier').val();
    link = 'https://archive.org/download/' + identifier;
    imgs = '';
    n = 0;
    gallery = '<table border="0" align="center"><tr>';
    $.each(arr_image, function(k,v) {
        n++;
        gallery += '<td> <a rel="lightbox" href=" ' + link + v[0] + ' " class="cboxElement"><img alt="" src="' + link + v.thumb[0] + '"></a> </td>';
        if (n % parseInt(cols) == 0) gallery += '</tr><tr>'; 
    });
    gallery += '</tr></table><br/>';
    
    $('#wp-gallery #content').remove();
    $('#wp-gallery').append('<div id="content" class="row-fluid"></div>');
    
    $('#wp-gallery #content').append(gallery);
    $('#wp-gallery #content').append('<textarea id="gallery" name="gallery" rows="5" class="to_copy input-block-level" readonly="true">' + gallery + '</textarea>');
}


function wp_gallery_generate(){
    col_options = '<label for="col_options" class="help-inline">Selecione o número de colunas: </label> ';
    col_options += '<select id="col_options" class="span1"><option value="2">2</option><option value="3">3</option><option value="4">4</option></select> <br/>';
    
    $('#wp-gallery').empty();
    $('#wp-gallery').append('<h1>Galeria de imagens</h1>');
    $('#wp-gallery').append(col_options);
    wp_gallery_items(2);
}


function screen_initialize(){
    $('#elements').empty();
    $('#elements').append('<div id="wp-audio"></div> <div id="wp-photos"></div> <div id="wp-gallery"></div>');
}

var arr_image;

$(document).ready(function() {
    $('#url').change(function() {
        url = $.trim($(this).val());
        arr_image = new Array();
        arr_audio = new Array();
        n_images = 0;
        n_audios = 0;
        
        if (!url) {
            $('#status').text('Por favor, digite a URL do archive.org!').attr('class','text-error');
            $('#url').val('');
            return false;
        }
        
        $('#result').css('display','none');
        $('#status').text('buscando dados, aguarde...').attr('class','help-block');
        
        $.ajax({
            url         : 'archive-api-client.php',
            type        : 'post',
            data        : 'url=' + url,
            dataType    : 'json',
            error       : function(jqXHR,textStatus,errorThrown ){
                $('#status').text('Erro! Por favor, verifique a URL').attr('class','text-error');
                console.log(jqXHR,textStatus,errorThrown);
            },
            success     : function(data) {
                
                screen_initialize();
                
                $('#result').css('display','block');
                $('#status').text('Pronto!').attr('class','text-success');
                
                $('#title').val(data.metadata.title[0]);
                                            
                $('#description').text(data.metadata.description[0]);
                $('#tags').val( $.each(data.metadata.subject, function(i_tag, v_tag) {return v_tag+','}) );
                $('#identifier').val(data.metadata.identifier[0]);
                
                $.each(data.files, function(key, value) {
                    
                    //image
                    if (value.format.match(/jpeg|png/gi)) {
                        if (value.format.match(/thumb/gi)) {
                            arr_image[n_images-1]['thumb'] = [key,value];
                        }
                        else {
                            arr_image[n_images] = [key,value];
                            n_images++;
                        }
                        return true;
                    }
                    
                    //audio
                    if (value.format.match(/(ogg|mp3)/gi)) {
                        if (value.source == 'derivative') {
                            arr_audio[n_audios-1]['optional'] = [key,value];
                        }
                        else {
                            arr_audio[n_audios] = [key,value];
                            n_audios++;
                        }
                        return true;
                    }
                });
                
                if (arr_audio.length) get_audio(arr_audio);
                
                if (arr_image.length) {
                    get_image(arr_image);
                    wp_gallery_generate();
                }
            }
        });
    });
});