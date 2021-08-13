<?php
    $marking_icon = 'Uncommon_Smoke';
    $marking_name = 'Smoke';
    $marking_code = 'nSm/SmSm';
    $marking_desc = "A misty or smoke like marking that is fully blended and smooth on the body.";
    $layers_above_or_below = 'All markings except those listed in layers Below.';
    $layers_above = 'None';
    $layers_below = 'Tobiano, Inkwell,Appaloosa, Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent';
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
    $edge_solid = 'no';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'smoke_yes',
        'smoke_yes2',
        'smoke_no',
        'smoke_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Smoke can appear as a mist like or smoke like marking, but should refrain from looking too "cloud like".',
    ];

    $marking_cannot = [
        'Be used to look like cloud, with newer rules in place that restrict this marking, it should not appear like cloud.',
    ];

    $marking_must = [
        'Recessive: May appear in up to 3 zones.',
        'Dominant: May appear in all zones, and be any one single color without the presence of a color modifier gene.',
        'Smoke must be cleanly blended or blurred together, to avoid it looking like smoke it cannot have "soft" edges or solid edges.',
        'Smoke must appear to be a misty marking, and can only be made of one color. Different shades of the color are fine, to give the design nuanced shades of lighter or darker portions.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'smoke_1', 'alt' => '...', 'label' => 'SB-0908', 'caption' => 'Designer: @wherearethpistachios'],
        ['image_name' => 'smoke_2', 'alt' => '...', 'label' => 'SB-0972', 'caption' => 'Designer: @monkfishlover'],
        ['image_name' => 'smoke_3', 'alt' => '...', 'label' => 'SB-0700', 'caption' => 'Designer: @PenumbralWolf'],
    ];
?>

@include('design_guides.templates._gene_template')