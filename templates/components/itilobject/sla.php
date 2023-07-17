<?php
require('../../../src/db_config.php');

$sqlTicket = 'SELECT * FROM glpi_tickets where id = $_SESSION["itens_id"]';

?>
<h4><?php echo $_SESSION["glpiID"]; ?></h4>
<p><?php echo $_SESSION["glpilistitems['Ticket']"] ?> </p>