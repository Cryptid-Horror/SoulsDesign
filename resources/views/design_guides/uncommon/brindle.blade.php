<?php
    $marking_icon = 'Uncommon_Brindle';
    $marking_name = 'Brindled';
    $marking_code = 'nBrd/BrdBrd';
    $marking_type = 'Variable';
    $marking_desc = "A marking that appears of three colors presenting as very thin broken up streaks on the body in a vertical pattern. Unlike banded however, these lines are incredibly thinned. (This marking used to be called 'Somatic'.) ";
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
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'brindled_yes',
        'brindled_yes2',
        'brindled_no',
        'brindled_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Is allowed to blend into the base',
        'Can have up to 3 shades of color in it',
        'Should follow the flow of the body in a vertical direction',
    ];

    $marking_cannot = [
        'Cannot appear as it used to, where it is white patches on the body, it now must present as a brindled marking. ',
    ];

    $marking_must = [
        'Recessive: may appear in all zones',
        'Dominant: May appear in all zones, as well as be any other color other than natural/darker or lighter.',
        'Must be thin lines, in a vertical direction.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'brin_1', 'alt' => '...', 'label' => 'SB-1072', 'caption' => 'Designer: @CopperWired'],
        ['image_name' => 'brin_2', 'alt' => '...', 'label' => 'SB-0336', 'caption' => 'Designer: @Cryptid-Horror'],
        ['image_name' => 'brin_3', 'alt' => '...', 'label' => 'SB-0799', 'caption' => 'Designer: @TipToeToads'],
    ];
?>

@include('design_guides.templates._gene_template')