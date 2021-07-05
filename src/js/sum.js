$("#payment-form").change(function() {
    var numberPartici  = 0,
        totalPrice   = 0,
        values       = [];
        
    $('input[type=checkbox], input[type=radio]').each( function() {
    if( $(this).is(':checked') ) {
        if (!isNaN($(this).val()) ) {
            values.push($(this).val());
            totalPrice += parseInt($(this).val());
            }
        }
    });

    $("#raison").each( function() {
        if($(this).is(':checked')) {
            $('input[type=number]').each(function(){
                numberPartici = parseInt($(this).val())
                if (numberPartici > 20) {
                    $("#more").html("si plus de 20 participants merci de nous contactez")
                    numberPartici = 20
                }
                else if ( numberPartici < 1 ) {
                    $("#more").html(" Merci de saisir un nombre entre 1 et 20")
                    numberPartici = 1
                }else{
                    $("#more").html("<small></small>")
                    numberPartici + 0
                }
            })
        }else{
            numberPartici = 1
        }
    });
    $("#totalPrice").text(totalPrice * numberPartici);  
});
