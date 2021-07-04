<?php

class validateLogic
{
    protected $pageOfReservation = 'Location: reservation.php';

    public function requiredRadio($radio, array $fields)
    {
        if (!in_array($radio ,$fields) || $radio === null) {
            header($this->pageOfReservation);
        }
    }

    public function fieldNotEmpty(array $fields)
    {
        if (in_array('',$fields)) {
            header($this->pageOfReservation);
        }
    }

    public function numberOfparticipants($nb)
    {
        if (!is_numeric($nb)) {
            return 1;
        }
        else if ($nb<1 || $nb>21) {
            header($this->pageOfReservation);
        }
        else{
            return $nb;
        }
    }

    /*---- validate prices-----*/
    public function validatePrice(string $price, array $allPrices):string
    {
        if (in_array($price, $allPrices)) {
            return array_search($price, $allPrices);
        }else{
            header($this->pageOfReservation);
        }
    }

}
?>