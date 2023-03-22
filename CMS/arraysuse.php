<?php
include('config.php'); 
?>

<?php foreach($regions_list as $region) { ?> 
    <option value="<?php echo $region; ?>"> <?php echo $region; ?> </option>
<?php } ?>



<?php foreach($cities_list as $citiy) { ?> 
    <option value="<?php echo $citiy; ?>"> <?php echo $citiy; ?> </option>
<?php } ?>

<?php foreach($employee_job_list as $employee_job) { ?> 
    <option value="<?php echo $employee_job; ?>"> <?php echo $employee_job; ?> </option>
<?php } ?>

<?php foreach($countries_list as $country) { ?> 
    <option value="<?php echo $country; ?>"> <?php echo $country; ?> </option>
<?php } ?>

<?php foreach($usernames_list as $username) { ?> 
    <option value="<?php echo $username; ?>"> <?php echo $username; ?> </option>
<?php } ?>

<?php foreach($reportcategories_list as $reportcategory) { ?> 
    <option value="<?php echo $reportcategory; ?>"> <?php echo $reportcategory; ?> </option>
<?php } ?>


<?php foreach($services_list as $service) { ?> 
    <label class="checkbox" style="margin-bottom: 0; margin-top: 0;">
    <input type="checkbox" name="Checkboxes2">
    <span></span> <?php echo $service; ?> </label>
<?php } ?>
                                                            


