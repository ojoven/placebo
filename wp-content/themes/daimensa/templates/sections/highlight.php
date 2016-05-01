<?php
/*********************************
 * SECTION: HIGHLIGHT
 *********************************/
// A simple horizontal bar to highlight a slogan / some short text

// Additional class (for variants)
$additionalClassRender = (isset($additionalClass)) ? " " . $additionalClass : " ";
?>
<section class="highlight<?php echo $additionalClassRender; ?>">

    <!-- SECTION HIGHLIGHT TEXT -->
    <p class="description"><?php echo $sectionDescription; ?></p>

</section>