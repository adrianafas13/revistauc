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

$("#colorPicker").colorpicker({
    el: ".color-picker",
    theme: "classic", // or 'monolith', or 'nano'

    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
        "rgba(0, 188, 212, 0.7)",
        "rgba(0, 150, 136, 0.75)",
        "rgba(76, 175, 80, 0.8)",
        "rgba(139, 195, 74, 0.85)",
        "rgba(205, 220, 57, 0.9)",
        "rgba(255, 235, 59, 0.95)",
        "rgba(255, 193, 7, 1)",
    ],

    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true,
        },
    },
});
