<?php
    $marking_icon = 'Common_Trailing';
    $marking_name = 'Trailing';
    $marking_code = 'nTr/TrTr';
    $marking_desc = "Trailing is a horizontal marking that appear as lines flowing along the body. Along the tip if the tail the marking can appear vertical. On the wings, the marking must appear horizontal.";
    $layers_above_or_below = 'Blanket, Boar, Collar, dunstripe, frog eye, hood, leaf, masked, pangare, points, python, rimmed, ringed, sable, scaled, skink, Stained, underbelly, banded, border, Brindled, cloud, crested, dipped, dripping, marbled, merle, pigeon, plasma, roan, rosettes, shaped, tabby, toxin, blooded, eyes, glass, luminescent, lustrous, petal, vignette, aether marked, gemstome, lepir, rune, truqetra';
    $layers_above = 'Bokeh, Cloud, Smoke,';
    $layers_below = ' Inkwell, tobiano, painted, appaloosa';
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
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'trailing_yes',
        'trailing_yes2',
        'trailing_no',
        'trailing_no2'
    ];

    // You can use html!
    $marking_can = [
        'Trailing in recessive may have a 12 point value or saturation gradient, however in dominant the marking may blend between two different colors (and then even blend into the base if utilizing gradient).',
        'Trailing may blend into the base coat, or what it sits over.',
        'Trailing can appear as broken up lines, but should not be so broken up that it appears like boar. The lines should still be clearly lines, and not appear as ovals or circles.',
        'The natural border can fade and blend with the rest of the edges.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zone',
        'Dominant: Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)
In dominant, this marking can blend between to colors.',
        'At least three lines must be present, cannot be in the same spots solely as skink would appear.',
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