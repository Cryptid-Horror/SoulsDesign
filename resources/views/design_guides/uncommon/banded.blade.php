<?php
    $marking_icon = 'Uncommon_Banded';
    $marking_name = 'Banded';
    $marking_code = 'nBa/BaBa';
    $marking_type = 'Variable';
    $marking_desc = "Much like that of a tiger, this marking presents vertical stripes, unless it is presenting on the legs, which will show horizontal. The marking originates from the gloom empire.";
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
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'banded_yes',
        'banded_yes2',
        'banded_no',
        'banded_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'Is allowed to fade into the base coat, or marking it sits over.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive may appear in all zones',
        'Dominant may appear in all zones as well become base/marking dependant',
        'Must present as vertical, tiger like stripes, unless it is on the feet/legs in which case it can appear horizontal on the legs/feet only.',
        'Banded must appear as a thicker line, but can vary in degree of thickness and thinness, it simply cannot be misconstrued as the marking plasma in its shape or design.'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'band_1', 'alt' => '...', 'label' => 'SB-0295', 'caption' => 'Designer: @Cittyy'],
        ['image_name' => 'band_2', 'alt' => '...', 'label' => 'SB-0911', 'caption' => 'Designer: @Unfeelingmetal5'],
        ['image_name' => 'band_3', 'alt' => '...', 'label' => 'SB-0854', 'caption' => 'Designer: @HigureGinhane'],
    ];
?>

@include('design_guides.templates._gene_template')