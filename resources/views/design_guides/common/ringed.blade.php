<?php
    $marking_icon = 'Common_Ringed';
    $marking_name = 'Ringed';
    $marking_code = 'nRn/RnRn';
    $marking_desc = "This marking has been shown to present two different ways on the body of a dragon. Either as unfilled circles, or as complete bands that wrap around the body of a dragon. The gene was first found on the Wardens, and quickly spread throughout different species, with the banding presentation appearing more on wyvern bloodlines. Both versions of the marking can appear at once, and are not dictated by dominant or recessive properties.";
    $layers_above_or_below = 'Blanket, Boar, Collar, dunstripe, frog eye, hood, masked, pangare, points, python, rimmed, sable, scaled, skink, Stained, trailing, underbelly, banded, border, crested, dipped, dripping, pigeon, plasma, roan, rosettes, shaped, tabby, toxin, blooded, eyes, glass, luminescent, lustrous, Triquetra, Vignette, lepir, aether marked, gemstome, rune, petal';
    $layers_above = 'Bokeh, Brindled, Cloud, Marbled, Merle, Smoke';
    $layers_below = 'Inkwell, tobiano, painted, appaloosa ';
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
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'ringed_yes',
        'ringed_yes2',
        'ringed_no',
        'ringed_no2'
    ];

    // You can use html!
    $marking_can = [
        'Ringed can have a 12 point gradient of value or saturation. It is allowed to fade into the base coat or the marking it sits over.',
        ' Ringed can fade into the base coat, or the marking it sits over.',
        'Thickness, or thinness, of the marking can vary greatly. However it cannot be used to cover the entire body or a limb.',
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        'Recessive: Can Appear in all zones',
        ' Dominant: Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)',
        'Ringed can be both versions of the marking on the body, but the banded form cannot wrap around wing membranes.',
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