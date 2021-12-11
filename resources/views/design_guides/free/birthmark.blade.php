<?php
    $marking_icon = 'Free_Birthmark';
    $marking_name = 'Birthmark';
    $marking_code = 'BI';
    $marking_desc = "A free marking that can only be 5% in individual size, but can appear in three places on the body at once. This marking is a birthmark, meaning it was born with the mark.";
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
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'birthmark_yes1',
        'birthmark_yes2',
        'birthmark_yes3',
        'birthmark_no2',
        'birthmark_no1',
        'free_mark'

    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Can blend into the base.',
        'Since this is a free marking, appearing like other free markings is ok.',
        'Birthmarks can appear as any shape, including hearts, diamonds, moons, etc.'

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section.',
        'Should only appear with three instances of the marking, else it will look like shaped.',
        'Cannot appear to look like any copyrighted/trademarked icons or symbols.'
    ];

    $marking_must = [
        'This marking must only be up to 5% in size.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'birth_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'birth_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'birth_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')