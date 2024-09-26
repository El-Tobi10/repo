const form = document.getElementById('formRegister');
const emailInput = document.getElementById('exampleInputEmail1');

let data = JSON.parse(sessionStorage.getItem('formData')) || [];

if (form){ 
    form.addEventListener("submit",function (event) {
        const email = emailInput.value;   
        if(email){
            const newData = email;
            data.push(newData);
            saveDataToLocalStorage();
            window.location ="../PHP/login/val_ingreso.php";
        }else{
            Swal.fire({
                title: 'Campos incompletos',
                text: `Tienes que ingresar todos los datos antes de aceptar. Intente de nuevo.`,
                icon: 'error',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#038dac',
                allowOutsideClick: false
            });
        }
    })
}

function saveDataToLocalStorage() {
    sessionStorage.setItem('formData',JSON.stringify(data));
}