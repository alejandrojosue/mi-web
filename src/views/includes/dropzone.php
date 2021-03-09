<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="../../assets/css/dropzone.min.css">
<link rel="stylesheet" href="../../scss/config/style.css">
<style>
    .container{
        font-family: sans-serif;
    }

    .form-container{
        width: 80%;
        margin: 20px auto;
    }
    .form-container .dropzone{
        border: 2px dashed #c3c3c3;
        padding: 40px;
    }

    .form-container .icon .icon-cloud-upload{
        font-size: 2em;
        text-align: center;
        color: #696767;
        background: #dfdddd;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        padding: 20px;
    }

    a.dz-remove{text-decoration: none; color:#696767;}
    
</style>

<div class="container">
    
    <div class="form-container">
        <form action="upload.php" id="formUploadFile" class="dropzone">
            <div class="dz-message">
            <div class="icon">
                <span class="icon-cloud-upload"></span>
                <h2>Suelta tus archivos aquí</h2>
                <span class="note">No hay archivos seleccionados</span>
            </div>
            </div>
            
            <div class="fallback">
                <input type="file" name="file" multiple>
            </div>
        </form>
        
    </div>
</div>

<script src="../../assets/js/dropzone.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../../js/helpers/_messagebox.js"></script>

<script>
    let can='lar';
    Dropzone.options.formUploadFile = {
        paraName: 'file',
        maxFilesize: 1024*2,
        timeout: 100000,
        retryChunks: true,
        //addRemoveLinks: true,
        dictCancelUpload: 'Cancelar',
        dictUploadCanceled: 'Proceso cancelado!',
        //dictRemoveFile: 'Quitar vista',
        uploadMultiple: true,
        dictCancelUploadConfirmation: '¿Desea cancelar la subida del archivo?',
        successmultiple:()=>{
            guardar('');
        },

    };
</script>