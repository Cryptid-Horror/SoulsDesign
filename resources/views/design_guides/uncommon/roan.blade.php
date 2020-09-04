<?php
    $marking_icon = 'Uncommon_Roan';
    $marking_name = 'Roan';
    $marking_code = 'nRo/RoRo';
    $marking_desc = "A gene that lightens or darkens the design with patches of color. The gene often does not affect the legs, tail, or head, but it can do so in some cases. Roans allowed coverage is determiend by whether it is recessive or dominant.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted ';
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
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'roan_yes',
        'roan_yes2',
        'roan_no',
        'roan_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
    ];

    $marking_cannot = [
        'Edges can be mottled, but the marking cannot be used to look like inkwell, tobiano, painted, or appaloosa. Top make it appear different, the marking has to be blurred/soft/gradient.',
        'Avoid having too many holes or cut outs in the marking so that it does not appear like Bokeh. The marking should be mostly connected, but you can have small patches of the marking appearing disconnected.',
    ];

    $marking_must = [
        'Recessive: Can cover up to 75% of the dragon.',
        'Dominant: can cover up to 95% of the dragon.',
        'At least 5% of the dragon (roughly half the face) must have roan. This is the smallest the marking can be.',
        'This marking must be lighter or darker than what it is sitting over. This can be blacks, white, greys, natural colors, or a darker/lighter shade of what it sits over. It can also be slightly greyer/desaturated colors of what it sitting over, and can chnage color based on what is under it, or cases like Stained, over it.',
        'Must have holes or cut outs in the marking that are soft or blurred edged. at least 4 of these must be present.',

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