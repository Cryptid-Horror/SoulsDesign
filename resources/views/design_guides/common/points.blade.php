<?php
    $marking_icon = 'Common_Points';
    $marking_name = 'Points';
    $marking_code = 'nPo/PoPo';
    $marking_desc = "Marking Origin: 2018 Genetics Contest; Submitted by user horsefreek151
A darker or lighter marking found on the legs, tail, wings, head, and chest of the dragon in specific spots. The marking is noted for its likeness to that of a doberman, and is often sought out for as a more conservative option to underbelly.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Dipped, Pigeon, Plasma, Rosettes, Roan, Shaped, Skink, Tabby Toxin, Glass, Eyes, Lustrous, Luminescent, Petal, Vignette, Gemstone, Lepir, Rune, Triquetra Aurora, Shimmer, Blooded, Lustrous, Aether Marked';
    $layers_above = ' Brindled, Bokeh, Cloud, Marbled, Merle, Smoke';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Points',
        'Warden' => 'Warden_Points',
        'Greater' => 'Gemp_Points',
        'Ravager' => 'Ravager_Points',
        'Stalker' => 'Stalker_Points',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'points_yes',
        'points_yes2',
        'points_no',
        'points_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 value and saturation point gradient difference inside the marking',
        'Is allowed to gradient into the base, or a marking it sits over.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
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