<?php
    $marking_icon = 'Uncommon_Roan';
    $marking_name = 'Roan';
    $marking_code = 'nRo/RoRo';
    $marking_type = 'Variable Modifier';
    $marking_desc = "A gene that lightens or darkens the design with patches of color. The gene often does not affect the legs, tail, or head, but it can do so in some cases. Roans allowed coverage is determiend by whether it is recessive or dominant.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Range',
        'Warden' => 'Warden_Range',
        'Greater' => 'Gemp_Range',
        'Ravager' => 'Ravager_Range',
        'Stalker' => 'Stalker_Range',
        'Ridgewalker' => 'Ridgewalker_Range',
        'Abyssal' => 'Abyssal_Range',
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
        ['image_name' => 'roan_1', 'alt' => '...', 'label' => 'SB-0717', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'roan_2', 'alt' => '...', 'label' => 'SB-0881', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'roan_3', 'alt' => '...', 'label' => 'SB-0376', 'caption' => 'Designer: @KarasuShade'],
    ];
?>

@include('design_guides.templates._gene_template')