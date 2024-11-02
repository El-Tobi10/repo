document.addEventListener("DOMContentLoaded", function() {
    Dropzone.options.myDropzone = { 
        url: "/repo/PHP/Juegos/admin_juegos/val_juego.php",
        dictDefaultMessage: "Arrastre y suelte o cargue sus imagenes (4 max)",
        dictRemoveFile : "Eliminar Imagen",
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 4,
        maxFiles: 4,
        minFiles: 1,
        maxFilesize: 10,
        addRemoveLinks: true,
        acceptedFiles: "image/*",

        init: function() {
            this.on("success", function(file, response) {
                Swal.fire({
                    title: "Imagen subida correctamente",
                    text: "La imagen ha sido cargada exitosamente: " + response,
                    icon: "success",
                    confirmButtonText: "Aceptar"    
                });
                
            });
            this.on("error", function(file, response) {
                Swal.fire({
                    title: "Error al subir la imagen",
                    text: "Hubo un problema al cargar la imagen: " + response,
                    icon: "error",
                    confirmButtonText: "Aceptar"
                })
            });
        }
    }
})