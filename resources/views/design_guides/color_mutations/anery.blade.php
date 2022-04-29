<?php
    $marking_icon = 'Color_mutations_Anery';
    $marking_name = 'Anery';
    $marking_code = 'Null';
    $marking_type = 'Prime Modifier';
    $marking_desc = "A mutation that causes the entire body to be black, and only certain markings are shown based on player choice.";
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
    $color_darker = 'no';
    $color_lighter = 'no';
    $color_natural = 'no';
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'anery_yes',
        'anery_yes2',
        'anery_no',
        'anery_no2'
    ];

    // You can use html!
    $marking_can = [
        'Anery may either come from vanta sliders, or it may be from the provided slider below.',
        'You may decide what markings show on anery.', 
        'White markings can/will present on Anery as white unless modifier with a color gene.',
    ];

    $marking_cannot = [
    ];

    $marking_must = [
       'There is no dominant form of this mutation.',
       'Unlike Albinism, Anery does not effect the eyes.',

    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'rainbow_dark',
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'anery_1', 'alt' => '...', 'label' => 'SB-0665', 'caption' => 'Designer: @The-Shellcat'],
        ['image_name' => 'anery_2', 'alt' => '...', 'label' => 'SB-0007', 'caption' => 'Designer: @Desert-Wyvern'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')