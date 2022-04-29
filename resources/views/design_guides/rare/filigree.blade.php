<?php
    $marking_icon = 'Rare_Filigree';
    $marking_name = 'Filigree';
    $marking_code = 'nFi/FiFi';
    $marking_type = 'Variable';
    $marking_desc = "Filigree are often swirling patterns on the dragon, in a vector ornament style. They are often thin in appearance, but can be a thicker design made up of multiple swirling designs. The marking can be small, or large, made of long swirling lines, or small symbols.";
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
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'filigree_yes',
        'filigree_yes2',
        'filigree_no',
        'filigree_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. It can blend into the base.',
        'This marking can fade into the base coat/marking it sits over.',
        'Filigree may have a thin border that can fade.',
        'Small dots or lines can flow off or around the main designs.',
        'Multiple main designs may exist across the body.',

    ];

    $marking_cannot = [
        'Filigree cannot mimic other markings like tabby or brindled or banded/etc.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zones and up to three individual colors.',
        'Dominant: Can appear in all zones as well be any number of colors',
        'Filigree must be delicate swirling designs, for inspiration look up "Vector Ornaments".',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'vig_1', 'alt' => '...', 'label' => 'SB-0700', 'caption' => 'Designer: @PenumbralWolf'],
        ['image_name' => 'vig_2', 'alt' => '...', 'label' => 'SB-0142', 'caption' => 'Designer: @Snowvoice'],
        ['image_name' => 'vig_3', 'alt' => '...', 'label' => 'SB-0859', 'caption' => 'Designer: @Mloking'],
    ];
?>

@include('design_guides.templates._gene_template')