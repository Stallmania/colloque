<?php
require_once('navbar.php');
require_once('config/db.php');
require_once('config/accordion.php');
require_once('config/modal.php');
require_once('lib/pdo_db.php');
require_once('models/Clients.php');

// Instantiate Client
$client = new Clients();
$physicClient = $client->getClient();
?>
    <br>
    <div class="container-fluid">
        <div class="btn-group" role="group">
            <a href="personne.php" class="btn btn-secondary">Par personne</a>
            <a href="organisme.php" class="btn btn-primary">Par organisme</a>
        </div>
        <hr>
        <h2>Client : Particuliers</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> </th>
                    <th>ID_client</th>
                    <th>Civilité</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Situation professionnelle</th>
                    <th>Email</th>
                    <th>Tel.</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                    <th>Choix obligatoir</th>
                    <th>Choix optionnels</th>
                    <th>Message</th>
                    <th>Message tribune</th>
                    <th>Payé</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($physicClient as $key => $c): ?>
                <?php if ($c->civility !== 'raison') :?>
                    <tr>
                        <td><?php modal($c->customerID) ?></td>  <!-- delete button -->
                        <td><?php echo $c->customerID; ?></td>
                        <td><?php echo $c->civility; ?></td>
                        <td><?php echo $c->lastName; ?></td>
                        <td><?php echo $c->firstName; ?></td>
                        <td><?php echo $c->situation; ?></td>
                        <td><?php echo $c->email; ?></td>
                        <td><?php echo $c->tel; ?></td>
                        <td><?php echo $c->adress; ?></td>
                        <td><?php echo $c->city; ?></td>
                        <td><?php echo $c->cp; ?></td>
                        <td><?php echo $c->price; ?></td>
                        <td><?php echo $c->optionnel; ?></td>
                        <td><?php accordion("$c->areaone", $key)?></td>
                        <td><?php accordion("$c->areatwo", 'tr'.$key)?></td>
                        <td><?php echo sprintf('%.2f',$c->total / 100);?><?php echo' '. $c->currency; ?></td><!-- et devise  -->
                        <td><?php echo $c->status; ?></td>
                        <td><?php echo $c->created_at; ?></td>
                    </tr>
                <?php endif ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="src/js/toggle.js"></script>
</body>
</html>