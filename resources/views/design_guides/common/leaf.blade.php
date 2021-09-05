<?php
    $marking_icon = 'Common_Leaf';
    $marking_name = 'Leaf';
    $marking_code = 'nLf/LfLf';
    $marking_desc = "Marking Origin: 2018 Genetics Contest; Submitted by user Athena-Tivnan
A gene that presents itself as leaf like markings on the body of a dragon. The leaves are not often specific to a species of tree, and has a stem or an outline found on them. Their sizes vary, and can be small or large. Dragons with this gene are thought to bring good luck, but any actual cases of this have only been seen as coincidence.";
    $layers_above_or_below = 'Blanket, Boar, Collar, dunstripe, frog eye, hood, masked, pangare, points, python, rimmed, ringed, sable, scaled, skink, Stained, trailing, underbelly, banded, border, crested, dipped, dripping, marbled, merle, pigeon, plasma, roan, rosettes, shaped, tabby, toxin, blooded, eyes, glass, luminescent, lustrous, aether marked, gemstome, lepir, rune, truqetra, petal, vignette';
    $layers_above = 'Bokeh, Brindled, Smoke, Cloud';
    $layers_below = 'Inkwell, tobiano, painted, appaloosa ';
    $affected_by = 'Duo tone, flaxen, greying, rose, azure, copper, crimson, jade, lilac, prismatic, luminescent, aurora, shimmer';
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
    $edge_blurred = 'yes';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'leaf_yes1',
        'leaf_yes2',
        'leaf_yes3',
        'leaf_no1'
    ];

    // You can use html!
    $marking_can = [
        'Leaf can have up to three colors present, the leaf, border, and stem. However, 2 colors have to be present. One on the leaf, and one on the stem.',
        'Leaves can be large or small, clustered or spaced out. They can flow in any direction from each other.',
        'Leaves may have a 12 point gradient of value and saturation on them, but cannot blend into the base coat.',
        'Leaf may be affected by three different color modifiers at once (leaf, stem, border).',
        'Leaf stem may be a long line, but it should not be too complex or look like Filigree.'
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        ' Recessive: Can appear in all zones',
        'Dominant: Can appear in all zones, Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)',
        'Leaf must have a stem present on it, but it has the option for a border. The Stem can flow between different leaves, or just be present on the single leaf. The stem CAN be the same color as the base coat.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'leaf_1', 'alt' => '...', 'label' => 'SB-0888', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'leaf_2', 'alt' => '...', 'label' => 'SB-0874', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'leaf_3', 'alt' => '...', 'label' => 'SB-0854', 'caption' => 'Designer: @HigureGinhane'],
    ];
?>

@include('design_guides.templates._gene_template')