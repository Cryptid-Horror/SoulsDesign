<?php
    $marking_icon = 'Rare_Appaloosa';
    $marking_name = 'Appaloosa';
    $marking_code = 'nAp/ApAp';
    $marking_desc = "A 'tobiano' style marking, this marking differences itself in color allowance, as well as having to be patches on the body with visible holing.";
    $layers_above_or_below = 'Tobiano, Inkwell, Painted';
    $layers_above = 'All Other Markings';
    $layers_below = 'None';
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
    $edge_mottled = 'yes';
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
        'appaloosa_yes',
        'appaloosa_yes2',
        'appaloosa_no',
        'appaloosa_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        ' Appaloosa can be any chosen color, or affected by a color modifier gene.',
        'Can have an outline with the border marking that is slightly darker or lighter than the color of inkwell (along with allowed to have a border with it).',
        'Can have a mottled effect, especially on the feet/gums/flesh, causing covered areas to appear in different colors, and even have the mottled look to them. These flesh areas MUST have a visible difference between where this marking appears on the skin around the flesh in order to appear on the flesh itself.',
        'Heterochromia is allowed in all dragon designs, and especially so in this gene.',
        'This gene may have coloration changes for the markings below it, i.e. being black in coloration except for the blanket below it, which may appear as a very subtle greyer or slightly darker/lighter shade of black where blanket is.',
    ];

    $marking_cannot = [
        'Cannot be used to mimic other markings, it needs to appear erratic and non uniform.',
    ];

    $marking_must = [
        'Recessive: Can only appear on the head, legs, thighs/shoulders, and tail of the dragon.',
        'Dominant: can appear anywhere and cover up to 50% of the design.',
        'This gene must have sizable "holes" in the marking.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'app_1', 'alt' => '...', 'label' => 'SB-0753', 'caption' => 'Designer: @PenumbralWolf'],
        ['image_name' => 'app_2', 'alt' => '...', 'label' => 'SB-0238', 'caption' => 'Designer: @lilwyverngirl'],
        ['image_name' => 'app_3', 'alt' => '...', 'label' => 'SB-0717', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')