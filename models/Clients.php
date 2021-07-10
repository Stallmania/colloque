<?php
require_once __DIR__.'/../lib/pdo_db.php'; //require_once('../lib/pdo_db.php');
class Clients{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    /////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////
    public function addClient($data) {
      // Prepare Query
        $this->db->query('INSERT INTO clients (customerID, transactionID, civility, lastName, firstName, situation, raisons, nbPartic, email, tel, adress, city, cp, price, optionnel, areaone, areatwo, total, currency, status) VALUES(:customerID, :transactionID, :civility, :lastName, :firstName, :situation, :raisons, :nbPartic, :email, :tel, :adress, :city, :cp, :price, :optionnel, :areaone, :areatwo, :total, :currency, :status)');

      // Bind Values
        $this->db->bind(':customerID', $data['customerID']);
        $this->db->bind(':transactionID', $data['transactionID']);
        $this->db->bind(':civility', $data['civility']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':firstName', $data['firstName']);
        $this->db->bind(':situation', $data['situation']);
        $this->db->bind(':raisons', $data['raisons']);
        $this->db->bind(':nbPartic', $data['nbPartic']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':tel', $data['tel']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':cp', $data['cp']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':optionnel', $data['optionnel']);
        $this->db->bind(':areaone', $data['areaone']);
        $this->db->bind(':areatwo', $data['areatwo']);
        $this->db->bind(':total', $data['total']);
        $this->db->bind(':currency', $data['currency']);
        $this->db->bind(':status', $data['status']);

      // Execute
        if($this->db->execute()) {
        return true;
        } else {
        return false;
        }
    }

    public function getClient() {
        $this->db->query('SELECT * FROM clients ORDER BY created_at DESC');

        $results = $this->db->resultset();

        return $results;
    }

    public function deleteCus($clientID)
    {
        $this->db->query('DELETE FROM clients WHERE customerID = :id LIMIT 1');
        $this->db->bind(':id', $clientID);
        // Execute
        if($this->db->execute()) {
          return true;
          } else {
          return false;
          }
    }

}