<?php
function modal($id){
    echo    '<div class="m-2 text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-Warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Supprimer
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attention !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Confirmer-vous la suppression du client !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <a href="deleteCustomer.php?clientID='.$id.'" class="btn btn-Warning">Supprimer</a>
                </div>
                </div>
            </div>
            </div>
        </div>';
}
?>