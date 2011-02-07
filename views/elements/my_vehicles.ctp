<div class="actions">
    <h3>My Vehicles</h3>
    <ul>
    <?php
        $bikes = $this->requestAction('/vehicles/myRides');
        foreach($bikes as $bike) {
    ?>
            <li><?php echo $bike['Vehicle']['year'] .' '. $bike['Manufacturer']['name'] .' '. $bike['Vehicle']['model'] .' ('. $bike['Vehicle']['color'] .')'; ?></li>
    <?php
        }
    ?>
    </ul>
</div>