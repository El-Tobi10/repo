document.addEventListener("DOMContentLoaded", function() {
    Dropzone.options.myDropzone = { 
        dictDefaultMessage: "Arrastre y suelte o cargue sus imagenes (4 max)",
        dictRemoveFile : "Eliminar Imagen",
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 4,
        maxFiles: 4,
        maxFilesize: 10,
        addRemoveLinks: true,
        acceptedFiles: "image/*",

        init: function() {
            var myDropzone = this;

            this.on("success", function(file, response) {
                Swal.fire({
                    title: "Imagen subida correctamente",
                    text: "La imagen ha sido cargada exitosamente" + response,
                    icon: "success",
                    confirmButtonText: "Aceptar"
                });
                
            });
            
            this.on("error", function(file, response) {
                Swal.fire({
                    title: "Error al subir la imagen",
                    text: "Hubo un problema al cargar la imagen" + response,
                    icon: "error",
                    confirmButtonText: "Aceptar"
                });
            });
            
            // Evento para el botón de "Cargar Imágenes"
            document.getElementById("uploadButton").addEventListener("click", function() {
                // Procesar la cola de archivos manualmente
                myDropzone.processQueue();
            });

            //  eliminar un archivo antes de subirlo
            this.on("removedfile", function(file) {
                // Puedes manejar lo que ocurre cuando se elimina un archivo de la zona de Dropzone
                console.log(file.name + " fue eliminado.");
            });
        }
    }
})