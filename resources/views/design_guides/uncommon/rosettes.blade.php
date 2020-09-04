<?php
    $marking_icon = 'Uncommon_Rosettes';
    $marking_name = 'Rosettes';
    $marking_code = 'nRs/RsRs';
    $marking_desc = "A gene that appears like the pattern on a Jaguar. These spots, called 'Rosettes' can be circlular, square, oval, or slightly irregaular in shape. They feature a border around them, that can be disconnected, and a few small dots or filled in circles in the center of the marking. ";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped,  Marbled,, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = ' Crested, Inkwell, Tobiano, Appaloosa, Painted, ';
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
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'rosettes_yes',
        'rosettes_yes2',
        'rosettes_no',
        'rosettes_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'The rosettes can fade into the base coat gradually.',
        'If the base coat is affected by a color modifier, the gene can have one part of it that is a shade of that color.',
        'The marking can have circles, oval, square/rectangulare dots in the center that are filled in.', 
        'The center can be any color, so long as its not the same exact color as the base (slightly darker/lighter than the base is fine!), The border must be darker or lighter than the center, and the dots can be lighter or darker than either as well. All parts of the marking can have individual gradients that follow the 12 point rule.', 
    ];

    $marking_cannot = [
        'Must appear in patches, and cannot create patterns. The marking can however flow in lines.',
    ];

    $marking_must = [
        'Recessive may be in all zones.',
        'Dominant can be in all zones and any single color without the presence of a color modifier gene.',
        'Rosettes is made of up to at least 2, but up to 3 parts. The inner circle, the border, and the allowed dots/shapes in the center. The inner circle and border have to be there. The border ca nbe fully connected or broken up in multiple spots.',
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