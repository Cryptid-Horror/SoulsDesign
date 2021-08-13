<?php
    $marking_icon = 'placeholder';
    $marking_name = 'Anery';
    $marking_code = 'Null';
    $marking_desc = "A mutation that causes the entire body to be black, and only rare and mythic markings can be shown on the body.";
     $layers_above_or_below = 'Null';
    $layers_above = 'Null';
    $layers_below = 'Null';
    $affected_by = 'Null';
    $can_affect = 'Null';

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
        'Rare and mythic markings are allowed to be present on the design at choice.',
    ];

    $marking_cannot = [
    ];

    $marking_must = [
       'There is no dominant form of this mutation.',
       'Anery causes the base to be from the vanta sliders.',
       'All common and uncommon markings must be hidden, rare and mythic markings are allowed to present.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'anery_1', 'alt' => '...', 'label' => 'SB-0665', 'caption' => 'Designer: @The-Shellcat'],
        ['image_name' => 'anery_2', 'alt' => '...', 'label' => 'SB-0007', 'caption' => 'Designer: @Desert-Wyvern'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')