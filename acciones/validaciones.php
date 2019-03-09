<html>
<!-- Validaciones Formulario -->
<script type="text/javascript">
$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            txtNombre: "required",
            txtApellido: "required",
            txtMovil: {
                required: true,
                maxlength: 9
            },
            txtTelefono: {
                required: true,
                maxlength: 9,
                minlength: 8
            },

            txtCorreo: {
                required: true,
                email: true
            },
            txtMensaje: "required"
        },
        messages: {
            txtNombre: "No puede ingresar su Nombre en blanco",
            txtApellido: "No puede ingresar su Apellido en blanco",
            txtTelefono: {
                required: "Porfavor, Ingrese su Numero Telefonico",
                maxlength: "Numero demasiado Largo",
                minlength: "Numero demasiado Corto"
            },
            txtCorreo: "Porfavor, Ingrese un Correo Electronico válido",
            txtMensaje: "No puede ingresar un Mensaje en blanco"
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            // Add the `invalid-feedback` class to the error element
            error.addClass("invalid-feedback");
            
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

});
</script>

</html>