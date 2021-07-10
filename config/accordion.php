<?php
function accordion($param,$key){
    echo '<div class="accordion accordion-flush" id="accordionFlushExample'.$key.'">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne'.$key.'">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#flush-collapseOne'.$key.'" aria-expanded="false"    aria-controls="flush-collapseOne'.$key.'">
                Afficher
            </button>
        </h2>
        <div id="flush-collapseOne'.$key.'" class="accordion-collapse collapse"aria-labelledby="flush-headingOne'.$key.'" data-bs-parent="#accordionFlushExample'.$key.'">
            <div class="accordion-body">'."$param".'</div>
        </div>
    </div>
</div>';
}