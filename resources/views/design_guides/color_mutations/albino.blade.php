<?php
    $marking_icon = 'Color_mutations_Albino';
    $marking_name = 'Albino';
    $marking_code = 'Null';
    $marking_desc = "A mutation that causes the entire body to be white, and only certain markings are shown based on player choice.";
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
        'albino_yes',
        'albino_yes2',
        'albino_no',
        'albino_no2'
    ];

    // You can use html!
    $marking_can = [
        'Markings can be present or hidden by albino.',
    ];

    $marking_cannot = [
    ];

    $marking_must = [
       'There is no dominant form of this mutation.',
       'Albino causes the base to be from the ivory sliders.',
       'You may choose which markings show on albino.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'albino_1', 'alt' => '...', 'label' => 'SB-0682', 'caption' => 'Designer: @Lich-ARPG'],
        ['image_name' => 'albino_2', 'alt' => '...', 'label' => 'SB-0925', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'albino_3', 'alt' => '...', 'label' => 'SB-0408', 'caption' => 'Designer: @Dragonpunk15'],
    ];
?>

@include('design_guides.templates._gene_template')