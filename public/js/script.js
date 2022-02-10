$("message").ready(function () {
    setTimeout(function () {
        $("div.alert").remove();
    }, 3000);
});

$("message-modify").ready(function () {
    setTimeout(function () {
        $("div.alert").remove();
    }, 3000);
});
$("message-delete").ready(function () {
    setTimeout(function () {
        $("div.alert").remove();
    }, 3000);
});

//sweetalert2
$("#btnregister").on("click", function () {
    swal("¡Bienvenido!", "Ha sido registrado con éxito", "success");
});
//comentatios
$("#post-comment").on("click", function () {
    swal("Su comentario ha sido enviado con éxito");
});

//data picker
$(function () {
    $("#datepicker").datepicker({
        format: "dd/mm/yyyy",
        orientation: "bottom",
    });
});

//summernote scripts
$("#summernote_spanish").summernote({
    placeholder: "Resumen del Artículo",
    tabsize: 2,
    height: 200,
});
$("#summernote_english").summernote({
    placeholder: "Resume of the Article",
    tabsize: 2,
    height: 200,
});

/*informacion del autor*/
$("#summernote_author_spanish").summernote({
    placeholder: "Informacion del Autor",
    tabsize: 2,
    height: 200,
});
$("#summernote_author_english").summernote({
    placeholder: "Informacion del Autor",
    tabsize: 2,
    height: 200,
});

/*area de informacion*/
$("#summernote_information").summernote({
    placeholder: "Información a publicar",
    tabsize: 2,
    height: 200,
});
$("#summernote_information_english").summernote({
    placeholder: "Información a publicar",
    tabsize: 2,
    height: 200,
});

/*textbox descripcion de las ediciones*/
$("#summernote_edition_description").summernote({
    placeholder: "Descripción de la edición",
    tabsize: 2,
    height: 200,
});
$("#summernote_edition_description_en").summernote({
    placeholder: "Description of the edition",
    tabsize: 2,
    height: 200,
});

/*EDITORIAL*/
$("#summernote_edition_editorial_es").summernote({
    placeholder: "Editorial de la edicion",
    tabsize: 2,
    height: 200,
});
$("#summernote_edition_editorial_en").summernote({
    placeholder: "Editorial of the edition",
    tabsize: 2,
    height: 200,
});
/*textbox aviso*/
$("#summernote_aviso").summernote({
    placeholder: "Descripción de la edición",
    tabsize: 2,
    height: 200,
});
$("#summernote_notice").summernote({
    placeholder: "Description of the edition",
    tabsize: 2,
    height: 200,
});
