
    <?php require_once 'navbar.php' ?>
    <div class="withoutn">
    </div>
    <section class="allspace">
        <div class="showcase">
            <div class="video-container" id="videosBG">
                <video src="src/videos/backroundVideo.mp4" autoplay muted loop></video>
            </div>
            <header>
                <div class="titlesAndTime">
                    <div class="titles">
                        <span>13<sup>ème</sup> Colloque</span>
                        <h2>2 OCTOBRE 2021 – PALAIS DES CONGRÈS, ARCACHON</h3>
                        <h1 class="firstT">LES FACETTES DE L'ÉTHIQUE DU MJPM</h1>
                        <h1 class="secendT">Questionnement ou évolution entre présent et avenir</h1>
                    </div>
                    <table>
                        <tr class="numbers" id="countdown" data-time="2021-10-02T08:30:24+0000">
                            <th id="days"></th>
                            <th id="hours"></th>
                            <th id="minutes"></th>
                            <th id="seconds"></th>
                        </tr>
                        <tr>
                            <td>Jours</td>
                            <td>Heures</td>
                            <td>Minutes</td>
                            <td>Secondes</td>
                        </tr>
                    </table>
                    <div class="callToAction">
                        <a href="reservation.php" class="callto">Réserver Maintenant</a>
                        <a href="#two" class="callToActionRead">En savoir plus</a>
                    </div>
                </div>
            </header>
        </div>
    </section>
    
    <section class="main-one">
        <div class="presentation">
            <p><img src="src/images/Affect-Association-Logo-Application-Color.jpg" alt="image-logo"><strong>L’Affect</strong>, association créée en 1998, se trouve aux origines des réflexions sur la nécessaire formation des mandataires judiciaires et de la professionnalisation du métier. La création de l’association découle d’une réflexion sur le manque de formation des tuteurs et curateurs.
            
            <p> En 1998, un groupe de travail s’est réuni à Arcachon autour de cette problématique. Depuis 2009, le colloque annuel de l’Affect rassemble les experts du domaine, qu’ils soient juristes, mandataires, psychologues, médecins, politiques, magistrats, philosophes… Les conférenciers sont aussi bien chercheurs et universitaires d’une part, que praticiens des mesures de protection des majeurs d’autre part. Entre analyse théorique et approche pratique, le Colloque offre une large réflexion sur le métier de MJPM. Ces aller-retours entre pratiques professionnelles et normes juridiques, sociales et éthiques se trouvent au cœur même de l’activité de protection.</p>
            
            <p>Ce grand colloque, singulier et pluriel, un et divers, tout à la fois, questionne la nature et la pratique du mandat de protection. Cet événement majeur forme le moment incontournable de l’année, permettant de mieux appréhender la spécificité et l’actualité des régimes de protection.</p>
        </div>
    </section>

    <section class="main-two" id="two">
        <h3 id="programme">Programme de la journée</h2>
        <ul class="accordion">
            <li class="has-sub">
                <label for="menu1"><h2>ACCUEIL</h2></label>
                <input id="menu1" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li>
                        Georges DECOCQ : Président d'Affect
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <label for="menu2"><h2>INTRODUCTION</h2></label>
                <input id="menu2" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li>
                        Éric FIAT : Professeur à l'Université de PARIS-EST Marne la Vallée
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <label for="menu3"><h2>I. PRÉSENTATION DES TRAVAUX SUR LES QUESTIONNEMENTS ETHIQUES DU MJPM</h2></label>
                <input id="menu3" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li><h3 class="test">Présentation des travaux sur la charte d’orientation, état des lieux, déontologie</h3>
                        <ul>
                            <li>Anne CARON-DÉGLISE : Magistrat au Ministère de la Justice à Paris</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">   
                <label for="menu4"><h2>II. L'ETHIQUE DU MJPM A L'EGARD DE LA PERSONNE PROTÉGÉE</h2></label>
                <input id="menu4" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li><h3>Éthique du MJPM et vie de couple de la personne protégée</h3>
                    <ul>
                        <li>Nathalie PETERKA : Professeur et Directrice du DIU à la faculté de droit de l’Université PARIS-EST</li>
                    </ul>
                    </li>

                    <li><h3>Éthique du MJPM, gestion et transmission patrimoniale des biens</h3>
                    <ul>
                        <li>Jean Marie PLAZY : Professeur et responsable du Master 2 à la faculté de droit de l’Université Bordeaux</li>
                        <li>Cécile LACRONIQUE : MJPM indépendante, Co-présidente de l’Association des mandataires Ile de France</li>
                    </ul>
                    </li>
                    <li><h3>Éthique du MJPM, cadre de vie et relations personnelles de la personne protégée</h3>
                    <ul>
                        <li>Sylvie MOISDON-CHATAIGNER: Maitre de conférences des Universités, HDR Présidente de l’Association pour la diffusion et la connaissance du droit dans le secteur social, médico-social et éducatif</li>
                        <li>Séverine ROY : MJPM indépendante, Présidente de la FNMJI</li>
                    </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">   
                <label for="menu5"><h2>III. L'ETHIQUE DU MJPM A L'EGARD DE LA FAMILLE DE LA PERSONNE PROTEGÉE</h2></label>
                <input id="menu5" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li>
                        <h3>Éthique du MJPM et vie familiale de la personne protégée: autorité parentale et majeur protégé en couple</h3>
                        <ul>
                            <li>Annick BATTEUR : Professeur émérite, doyen honoraire de la faculté de droit de CAEN.</li>
                            <li>Anne GOZARD: MJPM indépendante , Présidente de la Chambre Nationale des MJPM</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Éthique du MJPM et mesure partagée : co-mesures, mesures divisées, subrogées tutelles ou curatelles</h3>
                        <ul>
                            <li>Gilles RAOUL CORMEIL: Professeur à l’Université de Bretagne Occidentale, responsable du Master Protection des personnes vulnérables</li>
                            <li>Guillaume SOUTRA : MJPM indépendant</li>
                            <li>Saskia LYSSANDRE : MJPM indépendante, co-présidente de l’association des mandataires Ile de France</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">   
                <label for="menu6"><h2>IV. L'ETHIQUE DU MJPM A L'EGARD DES AUTRES INTERVENANTS PROFESSIONNELS</h2></label>
                <input id="menu6" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li>
                        <h3>Éthique et accompagnement social</h3>
                        <ul>
                            <li>Ange FINISTROSA: Président de la FNAT</li>
                            <li>Paloma MARTIN LAC : MJPM indépendante</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Éthique du MJPM et soins délivrés à la personne protégée (refus de soins, recours au juge en cas de désaccord)</h3>
                        <ul>
                            <li>Laurence GATTI : Maitre de conférences en droit privé et sciences criminelles, équipe de recherche en droit privé à l’Université de Poitiers</li>
                            <li>Alexandre LEDEME: Directeur d’une association tutélaire</li>
                            <li>Véronique LEFEBVRE DES NOETTES : Psychiatre, gériatre à l’hôpitale Émile Roux à Limeil-Brévannes, enseignant à l’Université de Paris est Creteil, membre du conseil scientifique de l’Espace national d’éthique sur les maladies</li>
                            <li>Aude GAUTHIER : MJPM, membre du bureau national de l’ANDP</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Éthique du MJPM et capacité pénale la personne protégée, auteure ou victime d’infractions</h3>
                        <ul>
                            <li>Claudia GHICA-LEMARCHAND : Professeure à la faculté de droit de l’Université PARIS-EST Creteil, Responsable du Master Droit pénal des affaires.</li>
                            <li>Aline OMEZ : MJPM Déléguée responsable pôle juridique UDAF</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <label for="menu7"><h2>RAPPORT DE SYNTHÈSE</h2></label>
                <input id="menu7" type="checkbox" name="menu"/>
                <ul class="sub">
                    <li>
                        Raymond LE GUIDEC : Professeur émérite à l'Université de NANTES
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <section class="main-three">
        <p>N'attendez plus, inscrivez-vous !</p>
        <div class="main-three">
            <a href="reservation.php" class="callto">Réserver Maintenant</a>
        </div>
    </section>
    
    <script src="src/js/countDown.js"></script>
    <script src="src/js/toggle.js"></script>

    <?php require_once 'footer.php'?>
