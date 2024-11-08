document.addEventListener("DOMContentLoaded", function() {
    Dropzone.options.myDropzone = { 
        dictDefaultMessage: "Arrastre y suelte o cargue sus imagenes (4 max)",
        dictRemoveFile : "Eliminar Imagen",
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 4,
        maxFiles: 4,
        minFiles: 4,
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

            // Evento después de que todos los archivos hayan sido subidos exitosamente
            this.on("queuecomplete", function() {
                //  actualizar la galería de imágenes
                fetchImages();
            });

            //  eliminar un archivo antes de subirlo
            this.on("removedfile", function(file) {
                // Puedes manejar lo que ocurre cuando se elimina un archivo de la zona de Dropzone
                console.log(file.name + " fue eliminado.");
            });
        }
    }
})

    // Función AJAX para actualizar la galería de imágenes
    function fetchImages() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'ver_cap.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                document.getElementById('imageGallery').innerHTML = this.responseText;
            }
        };
        xhr.send();
    }

    // Cargar imágenes existentes al cargar la página
    window.onload = fetchImages;