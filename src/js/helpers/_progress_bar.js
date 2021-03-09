document.addEventListener('DOMContentLoaded', () =>{
    let form = document.getElementById("form_subir");

    form.addEventListener('submit', (event)=>{
        event.preventDefault();
        upload_archive(form);
    });
});

function upload_archive(form){
    let state_bar = form.children[1].children[0],
    span = state_bar.children[0],
    btn_cancel = form.children[2].children[1];

    state_bar.classList.remove('barra_verde','barra_roja');

    let petition = new XMLHttpRequest();

    petition.upload.addEventListener("progress", (event)=>{
        let porcentaje = Math.round((event.loaded / event.total) * 100);
        //console.log(porcentaje);
        
        state_bar.style.width = porcentaje + "%";

        span.innerHTML = porcentaje + "%";
    });

    petition.addEventListener('load',()=>{
        state_bar.classList.add("barra_verde");
        span.innerHTML = "Proceso Completado";
    });


    //enviar desde la ruta de donde esta el archivo.html que contiene el formulario
    petition.open('post', '../../config/_upload.php');
    petition.send(new FormData(form));

    //cancelar
    btn_cancel.addEventListener('click',()=>{
        petition.abort();
        state_bar.classList.remove('barra_verde');
        state_bar.classList.add('barra_roja');
        span.innerHTML = "Proceso Cancelado";
    });
}