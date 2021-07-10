
try {
    // ton code
}
catch(\Stripe\Exception\CardException $e) {
    $invoice = \Stripe\Invoice::retrieve(['id' => $_SESSION['latest_invoice']]);
    $payment_intent = \Stripe\PaymentIntent::retrieve(
        $invoice->payment_intent
    );
}
// si c'est en AJAX tu renvoies le payment_intent_secret au js
if(isset($payment_intent_secret)) {
    $msg['pis'] = $payment_intent_secret;
}
header('Content-Type: application/json');
echo json_encode($msg);
// exemple de ma fonction en JS pour gérer l'authentification 3D secure
// ne fait pas attention au data.rec et data.abo car ce sont des variables
// que je lui passe dans le php que je ne t'ai pas mis dans le php qui sont
// les conditions d'abonnement
// idem pour siteUrl[0] c'est une url que je passe dans le functions.php vers
// le fichier JS, n'en tiens pas compte
function display3DSecure(stripe, data, cardElement, loader, submitBtn) {
        loader.addClass('display_flex');
        stripe.confirmCardPayment(
          data.pis,
          {
            // payment_method: {card: cardElement},
            // return_url: window.location.href = siteUrl[0] + '/confirmation-' + data.rec + '-' + data.abo + '/'
          },
          // Disable the default next action handling.
          {handleActions: true}
        ).then(function(result) {
            if(result.error) {
                loader.removeClass('display_flex');
                submitBtn.prop('disabled',false);
                $("#payment_text").html("l'authentification a échoué, merci de retenter votre réglement");
            }
            else {
                if(result.paymentIntent.status === 'succeeded') {
                    window.location.href = siteUrl[0] + '/confirmation-' + data.rec + '-' + data.abo + '/'
                }
                else if (result.paymentIntent.status === 'requires_payment_method') {
                    $("#payment_text").html("l'authentification a échoué, merci d'essayer un autre mode de réglement");
                }
                
            }
            
        });
    }