    $(document).ready(function () {
    $(".provincia").change(function () {
        $.ajax({
            type: "POST",
            url: "../municipios.php",
            dataType: "json",
            data: {id: $(".provincia").val()},
            success: function (data) {
                $(".ciudad option").remove();
                $.each(data, function () {
                    $(".ciudad").append('<option value="' + this.id + '">' + this.municipio + '</option>');
                });
            }
        });
    });
    jQuery.validator.addMethod("regex", function (value, element, regexp) {
        return this.optional(element) || regexp.test(value);
    });
    $("#musico-profile").validate({
        focusCleanup: true,
        errorElement: "span",
        rules: {
            name: {
                required: true,
                maxlength: 60,
                regex: /^[-!$@%/ºª?&*,~.()_+=\s\w.]+$/
            },
            members: {
                required: true,
                digits: true,
            },
            city: "required",
            gender: "gender",
            tlf: {
                digits: true,
                maxlength: 9
            },
            web: {
                url: true,
                maxlength: 80
            },
            email: {
                maxlength: 80,
                email: true,
                remote: {
                    url: "../validateEmail.php",
                    type: "post"
                }
            },
            confirmEmail: {
                equalTo: "#email"
            },
            currentPass: {
                maxlength: 100,
                minlength: 4,
                regex: /^[-!$@%/ºª?&*,~.()_+=\w.]+$/,
                remote: {
                    url: "../validatePass.php",
                    type: "post",
                    data: {
                        id: function () {
                            return $("#userid").val();
                        }
                    }
                }
            },
            newPass: {
                maxlength: 100,
                minlength: 4,
                regex: /^[-!$@%/ºª?&*,~.()_+=\w.]+$/,
                required: {
                    depends: function () {
                        return $("#currentPass").val() !== "";
                    }
                }
            },
            confirmNewPass: {
                equalTo: "#newPass"
            }
        },
        messages: {
            name: {
                required: "Este campo es obligatorio",
                maxlength: "Por favor, introduce no más de 60 caracteres",
                regex: "El nombre contiene caracteres no permitidos"
            },
            members: {
                required: "Este campo es obligatorio",
                digits: "Por favor, introduce solo digitos"
            },
            city: {
                required: "Este campo es obligatorio"
            },
            gender: {
                required: "Este campo es obligatorio"
            },
            tlf: {
                minlength: "Por favor, intruduce 9 caracteres como minimo",
                maxlength: "Por favor, introduce no más de 9 caracteres",
                digits: "Por favor, introduce solo digitos"
            },
            web: {
                url: "Introduce una url valida",
                maxlength: "Por favor, introduce no más de 80 caracteres"
            },
            email: {
                required: "Este campo es obligatorio",
                maxlength: "Por favor, introduce no más de 80 caracteres",
                email: "Introduce una direccion de email valida",
                remote: "Este correo ya está en uso"
            },
            confirmEmail: {
                required: "Este campo es obligatorio",
                equalTo: "Los correos no son iguales",
                email: "Introduce una direccion de email valida"
            },
            currentPass: {
                required: "Este campo es obligatorio",
                regex: "La contraseña contiene caracteres no permitidos",
                maxlength: "Por favor, introduce no más de 100 caracteres",
                minlength: "Por favor, introduce por lo menos 4 caracteres",
                remote: "Contraseña incorrecta"
            },
            newPass: {
                required: "Este campo es obligatorio",
                regex: "La contraseña contiene caracteres no permitidos",
                maxlength: "Por favor, introduce no más de 100 caracteres",
                minlength: "Por favor, introduce por lo menos 4 caracteres"
            },
            confirm_password: {
                equalTo: "Las contraseñas no son iguales",
                required: "Este campo es obligatorio"
            }
        }
    });
});