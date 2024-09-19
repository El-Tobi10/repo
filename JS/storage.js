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
            alert('Todos los datos son obligatorios')
        }
    })
}

function saveDataToLocalStorage() {
    sessionStorage.setItem('formData',JSON.stringify(data));
}