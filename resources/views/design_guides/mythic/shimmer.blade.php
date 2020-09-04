<?php
    $marking_icon = 'Mythic_Shimmer';
    $marking_name = 'Shimmer';
    $marking_code = 'nSh/ShSh';
    $marking_desc = "A marking that appears as a colorful blend of colors creating a sort of 'Cloud' pattern. Shimmer is known to come from Shimmering Isles in royal dragon bloods. ";
     $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted, ';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'All Markings, except for Inkwell, Tobiano, Painted, and Appaloosa.';

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
    $edge_solid = 'no';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'shimmer_yes',
        'shimmer_yes2',
        'shimmer_no',
        'shimmer_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'Shimmer can present in a wide variety of patterns from cloud like, to mist, or just a large section of color with swirls/etc in it.',
        'Up to 4 colors can be present in the marking, and it can have an iridescent look to it',
        'Shimmer can affect almost every marking, fitting into that markings range.',
    ];

    $marking_cannot = [
        'Shimmer has to look different from Aurora, while the markings are similar, some differences exist between the two.',
        'Shimmer is allowed to be any colors, including dark colors, while Aurora can only be bright colorations with some darker variations as small accents to create depth. Shimmer is allowed to be black, dark greys, or dark versions of colors.',
        'Shimmer cannot be disconnected, like Aurora can.',
    ];

    $marking_must = [
        'Recessive: Can cover up to 75% of the body',
        'Dominant: Can cover up to 100% of the body',
        'Shimmer must have stars/dusting/glitter within it.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'First Slide Label', 'caption' => 'Lorem ipsum'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Second Slide Label', 'caption' => '???'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')