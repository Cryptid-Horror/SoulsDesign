<?php
    $marking_icon = 'Common_Skink';
    $marking_name = 'Skink';
    $marking_code = 'nSk/SkSk';
    $marking_desc = "Skink is a marking that presents as a line down the body of a dragon. Skink has to appear in at least 3 zones, but can appear in all zones of the body. It also has to be fully connected and travel down the body horizontally. Skink is characterized by its starting location always being on the head, with the main skink line starting from the eyes.";
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
    $edge_mottled = 'no';
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
        'skink_yes',
        'skink_yes2',
        'skink_no',
        'skink_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'Skink can flow from any part of the face down the body. It has to start at the face, or base of the face and flow down through at least the neck. Skink no longer HAS to flow from the eye.',
        'If using multiple lines, you can use up to three, and they are allowed to merge at the face or end of the tail or both.',
        'Skink is allowed to fade from one color to another as it travels down the body. In recessive it can only blend from one natural color to one random color. In dominant it can flow from any two unnatural colors.',
        'Skink can be modified by a color modifier - If the modifier is affecting the base, skink can be shades of that modifier. If the color modifier effects Skink, it can be shades from that modifier and can still have any random color that it blends into. Like most markings, if a color modifier is affecting a marking like Stained and it sits over Skink, Skink can take on the properties of that color ',
        'Skinks is allowed a thin border which can be darker or lighter than skink and can even fade like skink. The border is allowed to be solid, soft, blurred, gradient, and textured or feathered edges. The border should not exceed the width of skink or trail too far without skink being in it. It does not have to flow through all of skink and can blend into the base coat.',
        'Skink allows the color of the tongue to be any shade of blue. It is allowed to gradient from the allowed colors to blue as well.', 
        'Skink is allowed to gradient into the base coat.',
        'Duotone allows the presence of a third color in Skink.',
    ];

    $marking_cannot = [
       'Skink lines cannot be disconnected or have holes. Each line of skink must be fully connected and come to an end either somewhere down the body or end at the tip of the tail. Different lines of skink can end in different spots!',
       'Skink must appear horizontal down the body. It cannot appear on wings and it cannot be vertical.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zones and can gradient between a natural color and any other color.',
        'Dominant: Can appear in all zones, and can gradient between any two colors.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'skink_1', 'alt' => '...', 'label' => 'SB-1001', 'caption' => 'Designer: @GlacialFalls'],
        ['image_name' => 'skink_2', 'alt' => '...', 'label' => 'SB-0791', 'caption' => 'Designer: @Baaltas'],
        ['image_name' => 'skink_3', 'alt' => '...', 'label' => 'SB-0427', 'caption' => 'Designer: @Tromacom'],
    ];
?>

@include('design_guides.templates._gene_template')