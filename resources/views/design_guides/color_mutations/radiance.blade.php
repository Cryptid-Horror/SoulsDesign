<?php
    $marking_icon = 'Color_mutations_Radiance';
    $marking_name = 'Radiance';
    $marking_code = 'nRad/RadRad';
    $marking_type = 'Modifier';
    $marking_desc = "A color modifier mutation that causes a random color marking to pass to the offspring if one or both parents have the radiance gene. The gene originates from the radiant wyverns, and is seen as a gift to newborn dragons who receive it.";
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
        'ColorMod_yes',
        'ColorMod_yes2',
        'ColorMod_no',
        'ColorMod_no2'
    ];

    // You can use html!
    $marking_can = [
        'Radiance color is picked from the sliders of the radiance color that passes, for example, nRad-Azure you would use the azure sliders.',
        'If you pick a color modifier for the base coat, then it has to be picked from the sliders providered on the color genes page. However, if you apply it on a marking, it can be any shade of allowed colors in that modifiers range, not just from a slider!',
        'If a design has no markings, you either have to apply the color modifier to the base or to minimal marks. Unlike Duo-tone, it is not allowed to not appear under these conditions.',
        'Unlike recessive color modifiers, you can use recessive radiance as a dominant color modifier. However you do not have to - you can choose what markings are modified by Radiance and what are not.'
    ];

    $marking_cannot = [
        'Radiance cannot effect a percentage of the base coat. It must affect 100% of the coat color. When paired with Agouti, agouti can affect a percentage of the radiance coat.',
    ];

    $marking_must = [
        'Recessive: Can act as a dominant color modifier.',
        'Dominant: Along with acting as a dominant color modifier, you may add a second color to Radiance of your choice.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'rad_1', 'alt' => '...', 'label' => 'SB-0504', 'caption' => 'Designer: @Mizie-Wolf'],
        ['image_name' => 'rad_2', 'alt' => '...', 'label' => 'SB-0417', 'caption' => 'Designer: @Monotone-Heroes'],
        ['image_name' => 'rad_3', 'alt' => '...', 'label' => 'SB-0179', 'caption' => 'Designer: @Voidtech'],
    ];
?>

@include('design_guides.templates._gene_template')