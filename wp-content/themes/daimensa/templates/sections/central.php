<?php
/*********************************
 * SECTION: CENTRAL
 *********************************/
// The title, description and image are horizontally centered
?>
<section class="central">

    <!-- SECTION TITLE -->
    <h2><?php echo $sectionTitle; ?></h2>

    <!-- SECTION DESCRIPTION -->
    <?php if ($sectionDescription) { ?>
        <p class="description"><?php echo $sectionDescription; ?></p>
    <?php } ?>

    <!-- SECTION IMAGE -->
    <?php if ($sectionImage) { ?>
        <img src="<?php echo $sectionImage; ?>" />
    <?php } ?>

</section>