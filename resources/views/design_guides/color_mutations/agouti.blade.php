<?php
    $marking_icon = 'placeholder';
    $marking_name = 'Agouti';
    $marking_code = 'nAg/AgAg';
    $marking_desc = "A color modifier mutation that causes a random color marking to pass to the offspring if one or both parents have the Augoti gene. Similar to the Radiance gene, this gene is thought to come from the Frigid reaches of the empires. However, unlike Radiance, Agouti MUST be applied to the base coat, and cannot be applied to non base dependant markings.";
    $layers_above_or_below = 'Null, must affect the base coat or a marking.';
    $layers_above = 'Null, must affect the base coat or a marking.';
    $layers_below = ' Null, must affect the base coat or a marking.';
    $affected_by = ' Null, must affect the base coat or a marking.';
    $can_affect = 'All Markings';

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
        'ColorMod_yes',
        'ColorMod_yes2',
        'ColorMod_no',
        'ColorMod_no2'
    ];

    // You can use html!
    $marking_can = [
        'Agouti color is picked from the sliders of the agouti color that passes plus the base coat that the color is, for example, nAg-Azure on a Vanta dragon will be any Vanta Azure Slider.',
        'Agouti when paired with another color modifier, if they are the same, can create a dominant color modifier effect. Example, having nAg-Azure and nAz in the same genome, you can have dominate Azure effects on the dragon. The base coat still needs to be the appropriate azure color though.',
        'If a design has albino or anery Agouti will not present.',
    ];

    $marking_cannot = [
        'Agouti cannot effect markings by itself on the marking is base coat color depedant allowed - i.e. like Stained or Sable.',
    ];

    $marking_must = [
        'Recessive: Can only affect the base coat.',
        'Dominant: Can effect the base and ALL markings.',
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