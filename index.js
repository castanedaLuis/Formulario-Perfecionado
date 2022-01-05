
class UI {
    showMessage(mensaje, cssClass){
        const div = document.createElement("div");
        div.className = `alert alert-${cssClass} mt-4`;
        div.appendChild(document.createTextNode(mensaje));
        //mostrando en el DOM
        const container = document.querySelector(".Despues");
        const app = document.querySelector(".App");
        container.insertBefore(div, app);
        // Remove the Message after 3 seconds
        setTimeout(function () {
            document.querySelector(".alert").remove();
            }, 3000);    
        //this.resetForm();//resetear los campos despues de un click
    }

    resetForm(){
        document.getElementById('usuario-form').reset();
    }
}


const RegistroCorrecto = document.getElementById('Registrar')
.addEventListener('click',function(e){
    const ui = new UI()
    
    const datos = document.getElementById('id_me').value;
    if( datos == ''){
        //alert('Llene los campos');
        ui.showMessage("Ingrese los datos", "danger");
        console.log('escuchando1')
    }else{
        ui.showMessage("Registro Correcto","success");
        console.log('escuchando2')
    }
    //ui.resetForm();

})
