<?php
class validateForm
{
    protected $pageOfReservation = 'Location: reservation.php';
    protected $patternAutorized ='#^[\p{Latin}\' -]+$#u';
    protected $patternForCompany ='#^[0-9\p{Latin}\' -.]+$#u';
    protected $patternForCP = '#^[0-9]+$#';

    public function xssEscape($string){
        return trim(htmlentities($string, ENT_QUOTES));
    }
    
    public function validatingNomberOfChar($field,int $NbMinOfCharAutorized = 1, int $NbMaxOfCharAutorized = 50)
    {
        if (($field !== null) && ((strlen($field) < $NbMinOfCharAutorized) || (strlen($field) > $NbMaxOfCharAutorized))) {
            header($this->pageOfReservation);
        }
    }
    public function validateName($field){
        if (is_string($field) && (preg_match($this->patternAutorized , $field)) !== 1) {
            header($this->pageOfReservation);
        }
    }
    public function validateNameOfCompany($field){
        if (is_string($field) && (preg_match($this->patternForCompany , $field)) !== 1) {
            header($this->pageOfReservation);
        }
    }

    public function validateEmail($field){
        if (filter_var($field, FILTER_VALIDATE_EMAIL) === false) {
            header($this->pageOfReservation);
        }
        
    }
    public function validatingPhone($field){
        $valid_number = filter_var($field, FILTER_SANITIZE_NUMBER_INT);
        $valid_number = str_replace("-", "", $valid_number);
        if (strlen($valid_number) < 10 || strlen($valid_number) > 14) {
            header($this->pageOfReservation);
        }
    }
    public function cp($field){
        if  (preg_match($this->patternForCP, $field) !== 1) {
            header($this->pageOfReservation);
        }
    }
}