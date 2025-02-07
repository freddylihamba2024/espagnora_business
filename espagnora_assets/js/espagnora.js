$(function(){
    //textarea_modal($('.textarea.modal'),'Description');
    //textarea_modal($('.textarea.modal2'),'Message');
    //textarea($('.textarea'),'Description');

    $('#import_img').on('change',function(){
        var files = $(this)[0].files;
        upload(files,'.get_import_img','img');
    });

    $('#icon_categ_mobile').on('change',function(){
        var files = $(this)[0].files;
        upload(files,'.get_icon_categ_mobile','img','.icon_categ_mobile');
    });

    $('.profile_admin').on('change',function(){
        var files = $(this)[0].files;
        upload(files,'.profile_getimg','img');
    });

    // function pour uploader l'image
    function upload(files,getimg,ident,fileput){
        if (files.length>0){
            var Image = files[0];
            $(getimg).html("<img src=" + window.URL.createObjectURL(Image) + " style='width:100%;' id='"+ ident +"' />");
            $(fileput).attr('value',files[0]['name']);
        }
    }
    // function modal summernonte textarea 
    /*function textarea_modal(textarea,holder){
        textarea.summernote({
            placeholder: holder,
            tabsize: 2,
            height: 150
        });
    }*/
    // function pour summernonte textarea
    /*function textarea(textarea,holder){
        textarea.summernote({
            placeholder: holder,
            tabsize: 2,
            height: 300
        });
    }*/
});