<?php
    $marking_icon = 'Common_Rhodonite';
    $marking_name = 'Rhodonite';
    $marking_code = 'nRd/RdRd';
    $marking_desc = "Despite being a common gene found among dragons, Rhodonite is a cherished color modifying gene prized for its ability to create brilliantly soft pink dragons. The horrible flip side of the coin is that it creates dragons who are impossible to camouflage themselves. This originally wasn’t an issue because the dragons that were carrying the gene were domesticated, but over time the gene found a way into the wild population.";
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
        'rhodonite_yes1',
        'rhodonite_yes2',
        'rhodonite_yes3',
        'rhodonite_yes4',
        'rhodonite_dom'
    ];

    // You can use html!
    $marking_can = [
        'If you pick a color modifier for the base coat, then it has to be picked from the sliders providered below. However, if you apply it on a marking, it can be any shade of allowed colors in that modifiers range, not just from a slider!',
        'If a design has no markings, you either have to apply the color modifier to the base or to minimal marks. Unlike Duo-tone, it is not allowed to not appear under these conditions.',
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        'Recessive: Can either effect the base coat and all marking/base dependant colors, or two markings  (or one marking and the base).',
        'Dominant: Can effect the base and ALL markings.',
        ' rhodonite is shades of pink. It can bleed into "pinkish-reds" but the pink tint must overpower the red coloration. The same applies to "pinkish-purples" ranges.',
        ' Color modifier markings like this one can only affect certain markings when the color modifier is applied to the base. A marking that has the "marking/base dependant" swatch as allowed is a marking that can be altered to be shades of the color modifier, if the color modifier is applied to the base coat. Otherwise, it is not allowed.
A huge example of the power behind a color modifier marking is in this kind of combination, however keep in mind we cannot detail every possible combination! This example uses citrine, but applies to all color modifiers. This examples is even for a Recessive gene!
citrine is applied to the base. Smoke is base dependant and is now shades of citrine. Stained is layered above smoke and is now also shades of citrine overtop of smoke. Duotone is applied to stained, and now stained has two shades of citrine applies. Ontop of this, dusted is residing above all these markings, and is allowed to be shades of citrine as well.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'rhodonite_1','rhodonite_2','rhodonite_3'
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'rhodonite_1', 'alt' => '...', 'label' => 'SB-0543', 'caption' => '@Sour-Sam'],
        ['image_name' => 'rhodonite_2', 'alt' => '...', 'label' => 'SB-0942', 'caption' => '@Imagi-Nethat'],
        ['image_name' => 'rhodonite_3', 'alt' => '...', 'label' => 'SB-0598', 'caption' => '@PenumbralWolf'],
    ];
?>

@include('design_guides.templates._gene_template')