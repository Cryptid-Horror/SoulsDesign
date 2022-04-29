<?php
    $marking_icon = 'Legendary_Constellation';
    $marking_name = 'Constellation';
    $marking_code = 'nCn/CnCn';
    $marking_type = 'Variable';
    $marking_desc = "Constellation is a marking that presents as glowing connected stars on a dragon's body. Constellation does not have to glow, and can have a layer of gradient beneath it.";
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
    $edge_gradient = 'sometimes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'constellation_yes1',
        'constellation_yes2',
        'constellation_no1',
        'constellation_no2',
        'constellation_no3',
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 value and saturation point gradient difference inside the marking',
        'Constellation can have a subtle glow',
        'Constellation is allowed a dark, or bright, gradient under the stars and connecting lines',
        'The dots/stars can appear as either a dot shape, or a star/sparkle shape.',
        'Constellations can be made up, or based on real constellations.',
    ];

    $marking_cannot = [
        'Constellation cannot have free floating dots/shapes. They must be connected and not be too dense.',
    ];

    $marking_must = [
        'Recessive Constellation may have up to 3 colors present.',
        'Dominant Constellation may have up to 7 colors present, and may have a dusted effect around each constellation in a limited range. The dusted is allowed to be different colors to match the constellation. Additionally, the constellation itself may be iridescent.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
    ];
?>

@include('design_guides.templates._gene_template')