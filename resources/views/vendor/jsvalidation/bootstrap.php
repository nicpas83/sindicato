<script>
    jQuery(document).ready(function(){

        $("<?= $validator['selector']; ?>").validate({
            errorElement: 'div',
            errorClass: 'invalid-feedback',

            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length ||
                    element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element.parent());
                    // else just place the validation message immediately after the input
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element) {
                $(element).addClass('is-invalid'); // add the Bootstrap error class to the control group
                $(element).siblings(".invalid-feedback").remove();
            },

            <?php if (isset($validator['ignore']) && is_string($validator['ignore'])): ?>

            ignore: "<?= $validator['ignore']; ?>",
            <?php endif; ?>


            // Uncomment this to mark as validated non required fields
            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
                $(element).siblings(".invalid-feedback").remove();
            },

            success: function(element) {
                $(element).removeClass('is-invalid'); // remove the Boostrap error class from the control group
            },

            focusInvalid: false, // do not focus the last invalid input

            invalidHandler: function(form, validator) {
                if (!validator.numberOfInvalids()) {
                    return;
                } else {
                  validator.showErrors();
                  $(".tab-pane").each(function() {
                    var tabId = $(this).attr("aria-labelledby");
                    var errores = $(this).find(".is-invalid").length;
                    $("[id='" + tabId + "'] span").text(errores > 0 ? errores : "");
                  });
                }
                if (!$(".container-fluid .alert.alert-danger").length) {
                    $(".container-fluid").prepend('<div class="alert alert-danger">Por favor corrige los errores del formulario.</div>');
                }
            },

            rules: <?= json_encode($validator['rules']); ?>
        })
    })
</script>
