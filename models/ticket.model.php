<?php
require "database/database.php";

function getTicket() : array
{
  global $connection;
  $statement = $connection->query("SELECT * FROM tickets");
  $ticketItems = $statement->fetchAll();
  return $ticketItems;
}


