<?php require_once 'navbar.php' ?>
<main class="reservation">
    <h2 class="titleA">Bulletin de pré-inscription - Colloque AFFECT 2021</h2>
    <div class="container-fluid">
        <form id="payment-form" action="recap.php" method="post">
            <div class="civilite row g-3">
                <div class="form-check col-md-1">
                    <input class="form-check-input" type="radio" name="civilite" id="mme" value="mme" checked>
                    <label class="form-check-label" for="mme">
                        Mme
                    </label>
                </div>
                <div class="form-check col-md-1">
                    <input class="form-check-input" type="radio" name="civilite" id="monsieur" value="monsieur">
                    <label class="form-check-label" for="monsieur">
                        M.
                    </label>
                </div>
                <div class="form-check col-md-10">
                    <input class="form-check-input" type="radio" name="civilite" id="raison" value="raison">
                    <label class="form-check-label" for="raison">
                        Raison sociale
                    </label>
                </div>
            </div>
            <div class="info row g-3">
                <div class="col-md-12 blocks">
                    <div id="BlockPhysique" class="row g-3">
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control" id="prenom" name="prenom" minlength="2" maxlength="50" placeholder="Prénom *" required>
                            <small></small>
                            <label for="prenom" class="form-label">Prénom *</label>
                        </div>
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control" id="nom" name="nom" minlength="1" maxlength="50" placeholder="Nom *" required>
                            <small></small>
                            <label for="nom" class="form-label">Nom *</label>
                        </div>
                        <div class="form-floating col-md-4" style="overflow:hidden;">
                            <input type="text" class="form-control" id="situation" name="situation" minlength="2" maxlength="100" placeholder="Situation Professionnelle *" required>
                            <small></small>
                            <label for="situation" class="form-label"><span style="white-space: nowrap;">Situation Professionnelle *</span></label>
                        </div>
                    </div>
                    <div id="BlockMoral" class="row g-3">
                        <div class="form-floating col-md-8">
                            <input type="text" class="form-control" id="raisons" name="raisons" minlength="1" maxlength="100" placeholder="entreprise, association..." required>
                            <small></small>
                            <label for="raisons" class="form-label">entreprise, association...*</label>
                        </div>
                        <div class="form-floating col-md-4" style="overflow:hidden;">
                            <input type="number" class="form-control" id="nbPartic" name="nbPartic" minlength="1" maxlength="2" value="1" >
                            <small id="more" style="white-space: nowrap;color:white;background-color:red;"></small>
                            <label for="nbPartic" class="form-label">Nombre de personnes à inscrire *</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row g-3 adress">
                        <div class="form-floating col-md-6">
                            <input type="email" class="form-control" id="email" name="email" minlength="5" maxlength="50"  aria-describedby="inputGroupPrepend2" placeholder="Email *" required>
                            <label for="email" class="form-label">Email *</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input type="tel" class="form-control" id="tel" name="tel" minlength="10" maxlength="14"  aria-describedby="inputGroupPrepend2" placeholder="Numéro de Téléphone *" required>
                            <small></small>
                            <label for="tel" class="form-label">Numéro de Téléphone *</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="adress" name="adress" minlength="3" maxlength="100" placeholder="Adresse *" required>
                            <small></small>
                            <label for="adress" class="form-label">Adresse *</label>
                        </div>
                        <div class="form-floating col-md-3">
                            <input type="text" class="form-control" id="city" name="ville" minlength="2" maxlength="60" placeholder="Ville *" required>
                            <small></small>
                            <label for="city" class="form-label">Ville *</label>
                        </div>
                        <div class="form-floating col-md-3">
                            <input type="text" class="form-control" id="cp" name="cp" minlength="5" maxlength="5" placeholder="Code postal *" required>
                            <small></small>
                            <label for="cp" class="form-label">Code postal *</label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div style="min-height: 30px;">

            </div>
            <div class="col-md-12" id="allProducts">
                <div class="procucts row g-3">
                    <h1>Vous souhaitez participer au Colloque 2021</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="price" value="160" id="firstPrice">
                        <label class="form-check-label" for="firstPrice">
                            Non Adhérent AFFECT (Cocktail de clôture non compris) - <strong>160 €</strong> 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="price" value="130" id="secondePrice">
                        <label class="form-check-label" for="secondePrice">
                            Adhérent AFFECT (Cocktail de clôture non compris) - <strong>130 €</strong> 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="price" value="35" id="thirdPrice">
                        <label class="form-check-label" for="thirdPrice">
                            Candidat AFFECT 2019-2020 (Cocktail de clôture compris) - <strong>35 €</strong> 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="price" value="0" id="free">
                        <label class="form-check-label" for="free">
                            Etudiant extérieur se rapprocher du secrétariat
                        </label>
                    </div>
                    <hr>
                    <h1>Optionnel</h1>
                    <div class="form-check">
                        <input class="form-check-input" name="optionnel[]" type="checkbox" value="40" id="repasmidi">
                        <label class="form-check-label" for="repasmidi">
                        Repas Midi - <strong>40 €</strong> 
                        </label>
                    </div>
                    <div class="form-check" id="cocktail">
                        <input class="form-check-input" name="optionnel[]" type="checkbox" value="15" id="cocktailCloture">
                        <label class="form-check-label" for="cocktailCloture">Cocktail de clôture - <strong>15 €</strong></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="optionnel[]" type="checkbox" value="80" id="cotisation">
                        <label class="form-check-label" for="cotisation">
                        Cotisation annuelle - Adhésion à AFFECT (facultative) - <strong>80 €</strong> 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="optionnel[]" type="checkbox" value="0" id="vision">
                        <label class="form-check-label" for="vision">
                        Visioconférence - sans surcoût
                        </label>
                    </div>
                </div>
            </div>
            
            <div style="min-height: 30px;">

            </div>
            <div class="col-md-12">
                <div class="other row g-3">
                    <div class="mb-3">
                        <label for="infoA">Information complémentaire que vous souhaitez porter à notre connaissance :</label>
                        <textarea class="form-control" id="infoA" name="areaone" rows="6"></textarea>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="infoB">Afin d’enrichir la réflexion globale engagée, n’hésitez pas à nous adresser vos questions sur ce formulaire ou par mail : celles-ci seront traitées anonymement à la tribune par l’intervenant concerné par le sujet.</label>
                        <textarea class="form-control" id="infoB" name="areatwo" rows="6"></textarea>
                    </div>
                </div>
            </div>
            <h1 class=" text-center">
                <span class="badge bg-info"> Total</span>
                <span class="badge bg-info" id="totalPrice"></span>
                <span class="badge bg-info"> €</span>
            </h1>
            <div class="d-grid col-md-3 mx-auto">
                <button type="submit" class="btn btn-primary" name="send">Valider</button>
            </div>
        </form>
    </div>
</main>
<footer>

</footer>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="src/js/toggle.js"></script>
    <script src="./src/js/swi_bis.js"></script>
    <script src="./src/js/sum.js"></script>
    <script src="./src/js/formValidate.js"></script>
</body>
</html>