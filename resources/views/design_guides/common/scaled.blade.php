<?php
    $marking_icon = 'Common_Scaled';
    $marking_name = 'Scaled';
    $marking_code = 'nSc/ScSc';
    $marking_desc = "A marking that presents crescent patterns on the body, as if they were bordering scales or feathers. Originally appearing alongside the plated and feathered coat types of dragons, the marking has solidified its place in the genetic diversity of dragons with its ability to be an accent to a design, or to be the spotlight of a design.
";
    $layers_above_or_below = 'Blanket, Boar, Collar, dunstripe, frog eye, hood, masked, pangare, points, python, rimmed, sable, skink, Stained, trailing, underbelly, banded, border, crested, dipped, dripping, marbled, merle, pigeon, plasma, roan, rosettes, shaped, tabby, toxin, blooded, eyes, glass, luminescent, lustrous, Triquetra, Vignette, lepir, aether marked, gemstome, rune, petal';
    $layers_above = 'Cloud, Smoke, bokeh, Brindled';
    $layers_below = ' Inkwell, tobiano, painted, appaloosa';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
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
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'scaled_yes',
        'scaled_yes2',
        'scaled_no',
        'scaled_no2'
    ];

    // You can use html!
    $marking_can = [
        ' Scales can have a 12 point value or saturation gradient to them.',
        'Scales can be found on tips of feathers, plated scales, or present the idea of scales. It can flow in patterns and lines or be found in clustered spots.',
        'Scaled can present both darker and lighter colors at the same time on a design. You do not have to use one or the other. In addition, if scales is over a blue Stained, and a black base coat, the dusted over the blue coloration can be affected by the azure marking. However it has to be not blue over the black base coat (a natural coat, altered by a different color mod, or if dominant utilizing the dominant trait). This applies to different combinations, this is only one an example.',
        ' Scales can gradient into the base coat or the marking it sits over.',
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        'Recessive: Can appear in all zones',
        'Dominant: Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)',
        
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'scale_1', 'alt' => '...', 'label' => 'SB-0576', 'caption' => 'Designer: @Owlapin'],
        ['image_name' => 'scale_2', 'alt' => '...', 'label' => 'SB-0524', 'caption' => 'Designer: @TheInfiniteChaos'],
        ['image_name' => 'scale_3', 'alt' => '...', 'label' => 'SB-0255', 'caption' => 'Designer: @oOTundraOo'],
    ];
?>

@include('design_guides.templates._gene_template')