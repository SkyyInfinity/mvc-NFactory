<?php
$title = 'Booking des commandes';
?>

<div class="wrap">
    <table class="generic-table">
        <caption>Table Réservée</caption>
        <tr class="colorful">
            <th>Booking Date</th>
            <th>Booking Time</th>
            <th>Number Of Seats</th>
            <th>User_id</th>
            <th>Date de Commande</th>
        </tr>
        <?php foreach($admins as $admin) : ?>
            <tr>
                <td><?php if(isset($admin->BookingDate)){echo $admin->BookingDate;} ?></td>
                <td><?php if(isset($admin->BookingTime)){echo $admin->BookingTime;} ?></td>
                <td><?php if(isset($admin->NumberOfSeats)){echo $admin->NumberOfSeats;} ?></td>
                <td><?php if(isset($admin->FirstName)){echo $admin->FirstName;} ?></td>

                
                <td><?php if(isset($admin->CreationTimestamp)){echo $admin->CreationTimestamp;} ?></td>
            </tr>
            <?php endforeach; ?>
    </table>

    <table class="generic-table">
        <caption>Dernières commandes</caption>
        <tr class="colorful">
            <th>Prénom</th>
            <th>Prix total</th>
            <th>CreationTimestamp</th>
        </tr>
        <?php foreach($orders as $order) : ?>
            <tr>
            <td><?php if(isset($order->FirstName)){echo $order->FirstName;} ?></td>

                <td><?php if(isset($order->TotalAmount)){echo $order->TotalAmount;} ?></td>
                
                <td><?php if(isset($order->CreationTimestamp)){echo $order->CreationTimestamp;} ?></td>
            </tr>
            <?php endforeach; ?>
    </table>


</div>


