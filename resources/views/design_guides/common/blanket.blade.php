<?php
    $marking_icon = 'Common_Blanket';
    $marking_name = 'Blanket';
    $marking_code = 'nBl/BlBl';
    $marking_desc = "A marking found on the dorsal region of a dragon and extending to the wings.
                    Its name is given for the way it covers the body. The marking originated in
                    the Radiant Empire bloodlines of the Stalker Wyvern.";
    $layers_above_or_below = 'Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Python, Rimmed, Ringed,
                            Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Mist, Roan,
                            Toxin, Glass, Luminescent, Petal, Aurora, Shimmer';
    $layers_above = 'Pangare, Bokeh, Cloud, Marbled, Merle, Tabby';
    $layers_below = 'Masked, Skink, Crested, Inkwell, Pigeon, Plasma, Rosettes, Shaped, Tobiano,
                    Appaloosa, Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'placeholder',
        'Warden' => 'Warden_Blanket',
        'Greater' => 'Gemp_Blanket',
        'Ravager' => 'Ravager_Blanket',
        'Stalker' => 'Stalker_Blanket',
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
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'blanket_yes',
        'blanket_yes2',
        'blanket_no',
        'blanket_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed a 4 - 6 value and saturation point gradient difference inside the marking'
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes and cutouts are not allowed, the marking must be fully connected.'
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