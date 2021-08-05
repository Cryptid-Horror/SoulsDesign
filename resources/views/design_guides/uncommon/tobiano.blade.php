<?php
    $marking_icon = 'Uncommon_Tobiano';
    $marking_name = 'Tobiano';
    $marking_code = 'nTo/ToTo';
    $marking_desc = "A piebald marking that presents in white coloration, leaving patches of white over the genetic design below.";
    $layers_above_or_below = 'Inkwell, Painted, Appaloosa';
    $layers_above = 'All Other Markings';
    $layers_below = 'None';
    $affected_by = 'Iridescent(only makes it shiny), Border, Dripping, Color Modifiers';
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
    $color_dependant = 'no';

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
        'Can have an outline with the border marking that is slightly darker or lighter than the color of tobiano (along with allowed to have a border with it).',
        'Can have a mottled effect, especially on the feet/gums/flesh, causing covered areas to appear in different colors, and even have the mottled look to them. These flesh areas MUST have a visible difference between where this marking appears on the skin around the flesh in order to appear on the flesh itself.',
        'Heterochromia is allowed in all dragon designs, and especially so in this gene.',
        'This gene may have coloration changes for the markings below it, i.e. being white in coloration except for the blanket below it, which may appear as a very subtle pinker/creamer or slightly darker/lighter shade of white where blanket is.',
        'Tobiano is allowed to have an extra layer beneath it that is lighter or darker shade of its color.',
        'Tobiano is allowed to be effected by color modifiers, however the colors must be pale and pastel in color. Refer to the provided swatches for example of good colors for this!',
        'Tobiano may hide any marking that sits beneath it.',
    ];

    $marking_cannot = [
        'Cannot be used to mimic other markings, it needs to appear erratic and non uniform.',
        'Tobiano cannot be under any other markings except for inkwell and painted. All other markings it must be over (It can layer over or under inkwell/etc)'

    ];

    $marking_must = [
        'Recessive: Covers up to 75% of the body',
        'Dominant: Covers up to 95% of the body',
        'Tobiano is allowed shades of white, very bright/white cream, and bright white/pink unless modifierd by a color modifier. Then it is only allowed pastel or pale colors of that modifier.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'tob_1', 'alt' => '...', 'label' => 'SB-0588', 'caption' => 'Designer: @Akllozz + Lich-ARPG'],
        ['image_name' => 'tob_2', 'alt' => '...', 'label' => 'SB-0852', 'caption' => 'Designer: @Nek0ura'],
        ['image_name' => 'tob_3', 'alt' => '...', 'label' => 'SB-0114', 'caption' => 'Designer: @Sankko'],
    ];
?>

@include('design_guides.templates._gene_template')