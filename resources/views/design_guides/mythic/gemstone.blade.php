<?php
    $marking_icon = 'Mythic_Gemstone';
    $marking_name = 'Gemstone';
    $marking_code = 'nGm/GmGm';
    $marking_desc = "Gemstone creates patterns that look like precious stones on the dragons body. It can have cracks coming off the pattern to create a look that the gemstone pattern is embedded into the scales/skin of the dragon. ";
     $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra, Crested, Inkwell, Tobiano, Appaloosa, Painted';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'None';
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
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'gemstone_yes',
        'gemstone_yes2',
        'gemstone_no',
        'gemstone_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'Gemstone does not need to fit any particular shape or pattern, but it can mimic shapes or pattern, such as being a swirl, circle, diamond, etc.',
        'Up to 2 main base colors can be present in the marking (which can gradient between each other), and then up to 3 colors to create accented shapes and patterns in the gemstone itself.',
        'The patterns inside the gemstone can be gradient, blurred, soft, or solid edges, as well as textured, feathered, and mottled in appearance.',
        'Can have small cracks coming off the gemstone itself so that it appears like the skin/scales are cracking.',
        'The gemstones can appear to be beneath the scales/skin by creating a translucent effect on the skin. Bones and organs can be shown through the translucent skin, but only where the gemstones are present.',
        'A shine or iridescent affect can be added to the marking.',
        'Border/Outline is optional and does not have to cover the whole marking. It can also gradient into the base.',
    ];

    $marking_cannot = [
        'Gemstone cannot be used to look like other markings, like plasma. It needs to appear as chunks of "rock" or gemstones inside the body.',
    ];

    $marking_must = [
        'Recessive: Can cover up to 40% of the body, allows for different patterns in separated gemstones, but the colors must be the same.',
        'Dominant: Can cover up to 80% of the body, allowed for separated gemstones to be different color combinations, as well as different patterns.',
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