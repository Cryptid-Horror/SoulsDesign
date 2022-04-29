<?php
    $marking_icon = 'Rare_Painted';
    $marking_name = 'Painted';
    $marking_code = 'nPn/PnPn';
    $marking_type = 'Prime';
    $marking_desc = "A piebald marking that can be any color possible, and also affected by other markings.";
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
        'tobi_yes',
        'tobi_yes2',
        'tobi_no',
        'tobi_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'Painted can be any chosen color. Color modifier genes can also be applied to painted.',
        'Painted can be modified by iridescent, shimmer, and aurora to appear with those marking properities.',
        'Can have an outline with the border marking that is slightly darker or lighter than the color of inkwell (along with allowed to have a border with it).',
        'Can have a mottled effect, especially on the feet/gums/flesh, causing covered areas to appear in different colors, and even have the mottled look to them. These flesh areas MUST have a visible difference between where this marking appears on the skin around the flesh in order to appear on the flesh itself.',
        'Heterochromia is allowed in all dragon designs, and especially so in this gene.',
        'This gene may have coloration changes for the markings below it, i.e. being black in coloration except for the blanket below it, which may appear as a very subtle greyer or slightly darker/lighter shade of black where blanket is.',
    ];

    $marking_cannot = [
        'Cannot be used to mimic other markings, it needs to appear erratic and non uniform.',
    ];

    $marking_must = [
        'Recessive: Covers up to 75% of the body',
        'Dominant: Covers up to 95% of the body',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'paint_1', 'alt' => '...', 'label' => 'SB-0933', 'caption' => 'Designer: @Askila-Deamon'],
        ['image_name' => 'paint_2', 'alt' => '...', 'label' => 'SB-0917', 'caption' => 'Designer: @GlacialFalls'],
        ['image_name' => 'paint_3', 'alt' => '...', 'label' => 'SB-0895', 'caption' => 'Designer: @lilwyverngirl'],
    ];
?>

@include('design_guides.templates._gene_template')