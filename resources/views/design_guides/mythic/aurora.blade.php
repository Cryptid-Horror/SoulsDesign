<?php
    $marking_icon = 'Mythic_Aurora';
    $marking_name = 'Aurora';
    $marking_code = 'nAu/AuAu';
    $marking_desc = "A gene that is thought to be bestowed on dragons for their affinity for the night. The marking often appears looking like the aurora borealis. ";
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'aurora_yes',
        'aurora_yes2',
        'aurora_no',
        'aurora_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'The pattern of aurora can vary between swirls, bands, patches, gradients, or lines. They can be connected or disconnected.',
        'Up to 5 colors can be present in the marking, and it can have an iridescent look to it',
        'Aurora can affect almost every marking, fitting into that markings range.',
    ];

    $marking_cannot = [
        'Aurora has to look different from Shimmer. While the markings are similar, some differences exist between the two.',
       'Shimmer can be any color, including dark colors. However Aurora must be brighter colorations, it cannot be blacks or dark greys or other dark colorations. It can have these darker colorations as small accents to create depth in the marking. It just can not be a large part of the marking.',
       'Shimmer has to have stars/glitter in it, Aurora cannot have this, but if dusted is present on the dragons geno, then aurora can have dusted in it. ',
       'Shimmer has to be fully connected, while Aurora can be disconnected.',
    ];

    $marking_must = [
        'Recessive: Can cover up to 75% of the body',
        'Dominant: Can cover up to 95% of the body',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'aurora_1', 'alt' => '...', 'label' => 'SB-1025', 'caption' => 'Designer: @DartingDragon-ARPG'],
        ['image_name' => 'aurora_2', 'alt' => '...', 'label' => 'SB-0876', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'SB-', 'caption' => 'Designer: @'],
    ];
?>

@include('design_guides.templates._gene_template')