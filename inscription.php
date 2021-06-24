<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title>inscription</title>
</head>
<body>
    <img src="src/images/logo_5.png" alt="logo">
    <h1 class="titleA">Bulletin de pré-inscription - Colloque AFFECT 2021</h1>
    <h2 class="titleB">Ce formulaire est destiné à la saisie de votre pré-inscription. Nous ne manquerons pas de revenir vers vous pour vous conﬁrmer sa bonne prise en compte.</h2>
    <div class="container" style="margin: 15px 20%;">
        <form action="recap.php" method="$_GET">
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" placeholder="Email">
                </div>
            </div>
            <div class="field">
                <label class="label">Nom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nom">
                </div>
            </div>
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Prénom">
                </div>
            </div>
            <div class="field">
                <label class="label">Adresse</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Adresse">
                </div>
            </div>
            <div class="field">
                <label class="label">Code postal</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Code postal">
                </div>
            </div>
            <div class="field">
                <label class="label">Ville</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Ville">
                </div>
            </div>
            <div class="field">
                <label class="label">Situation Professionnelle</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Situation Professionnelle">
                </div>
            </div>
            <div class="field">
                <label class="label">Numéro de Téléphone</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Numéro de Téléphone">
                </div>
            </div>

            <h1>Vous souhaitez participer au Colloque 2021</h1>
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="price" value="160" checked>
                        Participation Colloque - Non Adhérent AFFECT (Cocktail de clôture non compris) - 160 €
                    </label>
                    <label class="radio">
                        <input type="radio" name="price" value="130">
                        Participation Colloque - Adhérent AFFECT (Cocktail de clôture non compris) - 130 €
                    </label>
                    <label class="radio">
                        <input type="radio" name="price" value="35">
                        Participation Colloque - Candidat AFFECT 2019-2020 (Cocktail de clôture compris) - 35 €
                    </label>
                    <label class="radio">
                        <input type="radio" name="price" value="0">
                        Participation Congrès - Etudiant extérieur se rapprocher du secrétariat
                    </label>
                </div>
            </div>

            <h1>Optionnel</h1>
            <div class="field">
                <div class="control">
                    <label class="checkbox" >
                        <input type="checkbox" name="optionnel[]" value="40">
                        Repas Midi - 40 €
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="optionnel[]" value="15">
                        Cocktail de clôture - 15 €
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="optionnel[]" value="80">
                        Cotisation annuelle - Adhésion à AFFECT (facultative) - 80 €
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="optionnel[]" value="0">
                        Visioconférence - sans surcoût
                    </label>
                </div>
            </div>

            <div class="field">
                <label class="label">Nombre de personnes à inscrire</label>
                <div class="control">
                <input class="input" type="number" placeholder="Nombre de personnes à inscrire">
                </div>
            </div>
            
            <div class="field">
                <label class="label">Information complémentaire que vous souhaitez porter à notre connaissance :</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Textarea"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label">Afin d’enrichir la réflexion globale engagée, n’hésitez pas à nous adresser vos questions sur ce formulaire ou par mail : celles-ci seront traitées anonymement à la tribune par l’intervenant concerné par le sujet.</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Textarea"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <footer>

    </footer>
</body>
</html>