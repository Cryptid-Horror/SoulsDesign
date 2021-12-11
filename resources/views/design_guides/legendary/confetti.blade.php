<?php
    $marking_icon = 'Legendary_Confetti';
    $marking_name = 'Confetti';
    $marking_code = 'nFti/FtiFti';
    $marking_desc = "A marking that resembles confetti- it can appear as dots, small splotches/bars, etc and look like confetti. However to keep it from looking dusted, it needs to be at least 3 different colors.";
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'confetti_yes1',
        'confetti_yes2',
        'confetti_yes3',
        'confetti_no1',
        'confetti_no2',
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Confetti can be any color you desire, and appear in small parts or large parts of the body. It can be dense or sparse.',
        'Confetti can appear as dots that are the size of the eye or smaller, but not bigger. It can also appear as traditional confetti shapes.',
        'Confetti can follow paths on the body.'

    ];

    $marking_cannot = [
        'Confetti cannot be one or two single colors, to avoid looking like dusted (or dusted modified by duotone).',
        'Confetti cannot be super tiny.',    
        'Confetti Cannot be affected by color modifiers.',
    ];

    $marking_must = [
        'Recessive Confetti can be 3 to 5 colors.',
        'Dominant Confetti can be up to 7 colors.',
        'Confetti must have 3 seperate colors present (not shades of a single color).'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
    ];
?>

@include('design_guides.templates._gene_template')