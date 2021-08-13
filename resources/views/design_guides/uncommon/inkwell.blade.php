<?php
    $marking_icon = 'Uncommon_Inkwell';
    $marking_name = 'Inkwell';
    $marking_code = 'nIn/InIn';
    $marking_desc = "A piebald marking that presents normally in a black or grey coloration leaving patches of white over the genetic design below. Color modifiers have been seen to effect this marking, making it different colors. It gets it name for its darker variation of Tobiano.";
    $layers_above_or_below = 'Tobiano, Painted, Appaloosa';
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
    $color_any = 'no';
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
        'Is allowed up to a 24 value point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base. It is allowed a 24 saturation point difference if it is being affected by a color modifier.',
        'Inkwell be modified by color modifiers to change the color of inkwell from black to any shade of the modifier (i.e. applying crimson to make it red).',
        'Can have an outline with the border marking that is slightly darker or lighter than the color of inkwell (along with allowed to have a border with it).',
        'Can have a mottled effect, especially on the feet/gums/flesh, causing covered areas to appear in different colors, and even have the mottled look to them. These flesh areas MUST have a visible difference between where this marking appears on the skin around the flesh in order to appear on the flesh itself.',
        'Heterochromia is allowed in all dragon designs, and especially so in this gene.',
        'This gene may have coloration changes for the markings below it, i.e. being black in coloration except for the blanket below it, which may appear as a very subtle greyer or slightly darker/lighter shade of black where blanket is.',
        'Inkwell is allowed to have an extra layer beneath it that is lighter or darker shade of its color.',
        'Inkwell may hide any marking that sits beneath it.',

    ];

    $marking_cannot = [
        'Cannot be used to mimic other markings, it needs to appear erratic and non uniform.',
        'Inkwell cannot be under any other markings except for Tobiano and painted. All other markings it must be over (It can layer over or under inkwell/etc)',
        'If affected by a color modifier, this marking cannot be pastel or pale shades of colors like on the Tobiano guide. ',

    ];

    $marking_must = [
        'Recessive: Covers up to 75% of the body',
        'Dominant: Covers up to 95% of the body',
        'Unless modified with a color modifier, this marking must be blacks or shades of grey',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'ink_1', 'alt' => '...', 'label' => 'SB-0466', 'caption' => 'Designer: @Soljem'],
        ['image_name' => 'ink_2', 'alt' => '...', 'label' => 'SB-0819', 'caption' => 'Designer: @FallingFireX'],
        ['image_name' => 'ink_3', 'alt' => '...', 'label' => 'SB-0475', 'caption' => 'Designer: @Ebonmere'],
    ];
?>

@include('design_guides.templates._gene_template')