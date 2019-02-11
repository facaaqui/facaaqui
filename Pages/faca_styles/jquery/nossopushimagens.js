

 /* =========================================================
                 FUNCTION PUSH IMAGE
   ========================================================= */
 


$(document).ready(function(){

    // Push imagem empresa
    $("#facaImagemVir").change(function(){
        readURL(this);
    });


});



 // sow imagem antes do upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#pusheCover').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}


