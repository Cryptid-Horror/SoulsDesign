<?php
    $marking_icon = 'Common_Frog_Eye';
    $marking_name = 'Frog Eye';
    $marking_code = 'nFe/FeFe';
    $marking_type = 'Variable';
    $marking_desc = "Marking Origin: 2019 Genetics Contest; submitted by user Athena-Tivnan. Frog Eye was a strange marking to pop up, in fact it frightened most people for its direct appearance to a frog’s actual eye. What makes this marking so different from the Eyes gene though, is its limitations and the fact that it always appears as a circle, and can never appear as an oval or a teardrop.";
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
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
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
        'frogeye_yes1',
        'frogeye_yes2',
        'frogeye_yes3',
        'frogeye_no1',
        'frogeye_guide'
    ];

    // You can use html!
    $marking_can = [
        'The sizing of the three components to this marking can differ, so long as all the parts are there and visible on each "eye."',
        'A gradient is allowed to radiant from the pupil into the iris, but it cannot be the same color as the pupil or blend into the pupil.',
        'Frog eye pupil may mimic any allow eye shape.',
        'Frog eye can be affected by three different color modifiers (border, iris, and pupil).'
    ];

    $marking_cannot = [
        'Frog Eye border and iris may not be oval, tear drop, etc in shape. It must appear as a circle.',
    ];

    $marking_must = [
        'Recessive: Can appear in 3 zones',
        'Dominant: Can appear in all zones',
        'Must have three separated colors, one for the pupil, iris, and the border around the marking itself. The border may be darker or lighter than the iris and pupil, but cannot be the same color as the iris.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'frog_1', 'alt' => '...', 'label' => 'SB-0988', 'caption' => 'Designer: @FallingFireX'],
        ['image_name' => 'frog_2', 'alt' => '...', 'label' => 'SB-0831', 'caption' => 'Designer: @Imagi-Nethat'],
        ['image_name' => 'frog_3', 'alt' => '...', 'label' => 'SB-0861', 'caption' => 'Designer: @TemporalSorceress'],
    ];
?>

@include('design_guides.templates._gene_template')