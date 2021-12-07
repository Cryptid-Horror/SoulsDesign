<?php
    $marking_icon = 'Uncommon_Toxin';
    $marking_name = 'Toxin';
    $marking_code = 'nTx/TxTx';
    $marking_desc = "Toxin is a marking that appears like a posion dart frog. It has a very bright color layered over the base with darker bars, dots, or thick stripes layered over it. Most dragons are not poisonous to the touch, and many believe this marking serves more as a warning, designed by evolution, to protect dragons from being hunted by other things. This marking has two different properities based on the base gradient and the bars. The section in this guide for edges covers the bars.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Smoke, Marbled, Tabby, Roan, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell,  Tobiano, Appaloosa,  Painted,';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Range',
        'Warden' => 'Warden_Range',
        'Greater' => 'Gemp_Range',
        'Ravager' => 'Ravager_Range',
        'Stalker' => 'Stalker_Range',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'yes';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'toxin_yes',
        'toxin_yes2',
        'toxin_no',
        'toxin_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Toxin is made of a gradient base and bars/dots/stripe markings. The gradient must be either fully gradient/blended into the base below it or blurred into the base.', 
        'The Gradient may be any single color bright color or vibrant pastel color, or may be up to 2 colors blending into each other and then into the base coat/what it sits over. In the case of dominant, the gradient base can cover the whole body but needs to gradient into at least 5% of the normal coat color (roughly half the face).', 
        'The bars/dots/stripes in the toxin gradient may be any color that is darker or lighter than the gradient it sits over. In cases where the gradient is two colors, the bars can be two colors as well as they sit over the different colors. The bars/etc can also gradient into the gradient base.',
        'Bars/dots/stripes may have a small border around them that is lighter/darker than that feature. The border can be solid, soft, blurred, or gradient. It can have edge blending.',
        'Toxin does not have to be connected fully, and can appear as patches in different areas of the body.',
    ];

    $marking_cannot = [
        'Toxin cannot be used to look like boar, but has much more freeing uses in terms of color that if anything, boar cannot be used to look like toxin.', 
        'Toxins bars/stripes/dots cannot be used to look like dusted, trailing, banded, etc.',
    ];

    $marking_must = [
        'Recessive: Toxin can appear in 3 zones',
        'Dominant: Toxin can appear in all zones, and have 3 colors in its gradient blend, instead of 2. The bars/etc can also be iridescent and have up to 3 colors present in them to pull off the iridescent look.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'toxin_1', 'alt' => '...', 'label' => 'SB-0833', 'caption' => 'Designer: @DartingDragon-ARPG'],
        ['image_name' => 'toxin_2', 'alt' => '...', 'label' => 'SB-0888', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'toxin_3', 'alt' => '...', 'label' => 'SB-0538', 'caption' => 'Designer: @Kubari'],
    ];
?>

@include('design_guides.templates._gene_template')