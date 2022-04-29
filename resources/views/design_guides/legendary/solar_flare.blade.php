<?php
    $marking_icon = 'Legendary_Solar_Flare';
    $marking_name = 'Solar Flare';
    $marking_code = 'nSf/SfSf';
    $marking_type = 'Variable';
    $marking_desc = "A marking that causes the horns, claws, or spikes on the dragon to glow and allows the horns to be any color.";
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
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'solarflare_yes1',
        'solarflare_yes2',
        'solarflare_yes3',
        'solarflare_yes4',
        'solarflare_no1',
        'solarflare_no2',
        'solarflare_no5',
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Solar flare is allowed to make the horns, spikes, and claws any color. The horns, claws, spikes can alternate in color and do not have to all be the same color.',
        'Solar Flare can cause a gradient of colors based on if it is recessive or dominant.',
        'Solar flare causes a gold, which can appear behind or in front of the horns, claws, and spikes.',
        'Solar flare can effect only one, or all horns/claws/spikes, including one or the other horn or alternating spikes/etc.',

    ];

    $marking_cannot = [
        'Solar flare cannot have a metallic shine effect (It can have shading though)',
        'Solar flare cannot obstruct too much of the design.',    
        'Solar flare can ONLY affect the horns, claws, and spikes',
    ];

    $marking_must = [
        'Recessive can allow the horns/spikes/claws to gradient up to four colors.',
        'Dominant can allow the horns/spikes/claws gradient up to seven colors.',
        'Solar Flare must have a glow.',
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