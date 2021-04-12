<div class="zippylinks">
    <?php if ($action !== 'list_vehicles') { ?>
        <?php 
        // or this complex way if no default action :)
        /*
        $url = $_SERVER['REQUEST_URI'];
        $pos = strpos($url,'_id');
        if (!$pos && substr($_SERVER['REQUEST_URI'], -6) !== 'admin/') { 
        */?> 
    <p><a href=".">View Full Vehicle List</a></p>
    <?php } ?>
    <?php if ($action !== 'show_add_form') { ?>
    <p><a href=".?action=show_add_form">Click here</a> to add a vehicle.</p>
    <?php } ?>
    <?php if ($action !== 'list_makes') { ?>
    <p><a href=".?action=list_makes">View/Edit Vehicle Makes</a></p>
    <?php } ?>
    <?php if ($action !== 'list_types') { ?>
    <p><a href=".?action=list_types">View/Edit Vehicle Types</a></p>
    <?php } ?>
    <?php if ($action !== 'list_classes') { ?>
    <p><a href=".?action=list_classes">View/Edit Vehicle Classes</a></p>
    <?php } ?>

    <?php
    // New link for register -- note to self, is the controller file already included here?
   // if (!$username) { ?>

    <p><a href=".?action=show_register">Register New Admin User</a></p>
    

    <?php //} ?>



</div>

<footer>
    <p>&copy; <?= date("Y"); ?> Zippy Used Autos</p>
</footer>
</main>
</body>

</html>