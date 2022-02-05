<?php
    $marking_icon = 'Common_Greying';
    $marking_name = 'Greying';
    $marking_code = 'nGr/GrGr';
    $marking_desc = "Greying has always been a weird color modifying gene that many people of Empyrean don’t consider to be a ‘real’ gene. This is because of its properties being so similar to the Ivory base coat, however Greying is capable of being darker shades than Ivory can be. Arguments are made on both sides of the debate, but most people just chose to let it exist and accept it as a marking.";
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
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'grey_yes1',
        'grey_yes2',
        'frey_yes3',
        'grey_yes4',
        'grey_dom'
    ];

    // You can use html!
    $marking_can = [
        'If you pick a color modifier for the base coat, then it has to be picked from the sliders provided below. However, if you apply it on a marking, it can be any shade of allowed colors in that modifiers range, not just from a slider!',
        'If a design has no markings, you either have to apply the color modifier to the base or to minimal marks. Unlike Duo-tone, it is not allowed to not appear under these conditions.',
        'Greying has a very special ability where it can modify other color genes, when modifying other color genes, you can use the slides below for the base coats (or markings! You do not need to use the sliders for the marking).'
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        'Recessive: Can either effect the base coat and all marking/base dependant colors, or two markings (or one marking and the base).',
        'Dominant: Can effect the base and ALL markings.',
        ' Greying is shades of light grey, to dark grey. It also has small tints of color to create incredibly desaturated forms of colors, far more desaturated than the Haze base coat can create.',
        ' Color modifier markings like this one can only affect certain markings when the color modifier is applied to the base. A marking that has the "marking/base dependant" swatch as allowed is a marking that can be altered to be shades of the color modifier, if the color modifier is applied to the base coat. Otherwise, it is not allowed.
A huge example of the power behind a color modifier marking is in this kind of combination, however keep in mind we cannot detail every possible combination! This example uses flaxen, but applies to all color modifiers. This examples is even for a Recessive gene!
Flaxen is applied to the base. Smoke is base dependant and is now shades of flaxen. Stained is layered above smoke and is now also shades of flaxen overtop of smoke. Duotone is applied to stained, and now stained has two shades of flaxen applies. Ontop of this, dusted is residing above all these markings, and is allowed to be shades of flaxen as well.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'GREYING', 'Grey_lilac_single', 'Grey_lilac_double', 'Grey_lilac_abundism'
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'greying_1', 'alt' => '...', 'label' => 'SB-0919', 'caption' => 'Designer: @aarushiiroosh'],
        ['image_name' => 'greying_2', 'alt' => '...', 'label' => 'SB-0752', 'caption' => 'Designer: @Cameil'],
        ['image_name' => 'greying_3', 'alt' => '...', 'label' => 'SB-0928', 'caption' => '@Lich-ARPG and @ModernBeatnik'],
    ];
?>

@include('design_guides.templates._gene_template')