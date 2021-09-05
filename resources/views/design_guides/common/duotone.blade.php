<?php
    $marking_icon = 'Common_Duotone';
    $marking_name = 'Duotone';
    $marking_code = 'nDo/DoDo';
    $marking_desc = "Marking Origin: 2018 Genetics Contest by user JemJam. Unlike the other documented color genes, duotone doesn’t introduce new colors into the genetics of dragons. The gene instead causes colors to blend on a marking, either be them natural colors, or color genes. This strange gene is often thought to have come from the Emperor species, but it has been around Empyrean for many years.";
    $layers_above_or_below = 'Null, must affect a marking';
    $layers_above = 'Null, must affect a marking';
    $layers_below = 'Null, must affect a marking';
    $affected_by = 'Flaxen, greying, rose, azure, copper, crimson, jade, prismatic, lilac';
    $can_affect = 'All markings';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Duotone',
        'Warden' => 'Warden_Duotone',
        'Greater' => 'Gemp_Duotone',
        'Ravager' => 'Ravager_Duotone',
        'Stalker' => 'Stalker_Duotone',
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
        'duotone_yes1',
        'duotone_yes2',
        'duotone_yes3',
        'duotone_no1'
    ];

    // You can use html!
    $marking_can = [
        'The behavior images for this marking are very specific to markings, except for swatch 2 which shows duotone affecting the wing membranes only. This is a way to use duotone without any marking. Adversly, the fourth swatch tells you not to use this marking on the base coat outside of the wings.',
        'This gene will follow the rules of the marking it is affecting. This means that if you use it on, for example, Stained, you can have a marking/base dependancy to it (so it can be a shade of the color beneath it). However if you use it on Blanket, then it cannot do this and it has to be a natural color.',
        'In addition to having to affect another marking, Duo Tone can be affected by a color mod! It can gradient a color modification marking into a marking not benefiting from this color mod, or you can apply the color modifier to the marking that Duo Tone is affecting and Duo Tone can be a shade of that color as well.',
        'Only two colors can blend together, and they must be a fully blended/ smooth gradient between the colors. The gradient can start at any point in the marking, but must be present.',
        'Duotone may affect the wing membrane of wings that have membranes.',
        'Duotone may affect "extra" areas such as claws, gums, tongue, horns, special zones, etc.',
    ];

    $marking_cannot = [
        ' Cannot affect the base coat, it must affect a marking, wing membranes, or other extra zones.',
    ];

    $marking_must = [
        'Recessive: Affects up to 2 markings',
        'Dominant: Affects up to 4 markings',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'duo_1', 'alt' => '...', 'label' => 'SB-0998', 'caption' => 'Designer: @GlacialFalls'],
        ['image_name' => 'duo_2', 'alt' => '...', 'label' => 'SB-0818', 'caption' => 'Designer: @DraginRaptor'],
        ['image_name' => 'duo_3', 'alt' => '...', 'label' => 'SB-1000', 'caption' => 'Designer: @Xialthia'],
    ];
?>

@include('design_guides.templates._gene_template')