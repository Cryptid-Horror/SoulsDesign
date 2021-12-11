<?php
    $marking_icon = 'Common_Dusted';
    $marking_name = 'Dusted';
    $marking_code = 'nDt/DtDt';
    $marking_desc = "Originally thought to be a companion look to the Rosettes gene, Dusted struggled to become its own classified gene until it was found on dragons who did not come from rosettes bloodlines. Dusted can appear as either a speckling of dots, or ticking marks along the body. It has appeared both sporadically and in flowing lines along the body. However it has never been seen to create inorganic shapes like hearts or stars.";
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
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
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
        'dusted_yes1',
        'dusted_yes2',
        'dusted_no1',
        'dusted_dom'
    ];

    // You can use html!
    $marking_can = [
        'Dusted can present both darker and lighter colors at the same time on a design. You do not have to use one or the other. In addition, if dusted over a blue Stained, and a black base coat, the dusted over the blue coloration can be affected by the azure marking. However it has to be not blue over the black base coat (a natural coat, altered by a different color mod, or if dominant utilizing the dominant trait). This applies to different combinations, this is only one an example.',
       ' Dusted can appear as both a dotted design, or a "ticked" design.' ,
    ];

    $marking_cannot = [
        'You cannot apply two seperate color modifiers to dusted itself, without duo-tone.',
        'Dusted spots should not appear bigger than the eye on the dragon.',
    ];

    $marking_must = [
        'Recessive: No change from property values',
        'Dominant: Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'dust_1', 'alt' => '...', 'label' => 'SB-1071', 'caption' => 'Designer: @Thundercat'],
        ['image_name' => 'dust_2', 'alt' => '...', 'label' => 'SB-0985', 'caption' => 'Designer: @Firedragoran'],
        ['image_name' => 'dust_3', 'alt' => '...', 'label' => 'SB-0828', 'caption' => 'Designer: @PenumbralWolf'],
    ];
?>

@include('design_guides.templates._gene_template')