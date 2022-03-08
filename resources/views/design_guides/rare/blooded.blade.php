<?php
    $marking_icon = 'Rare_Blooded';
    $marking_name = 'Blooded';
    $marking_code = 'nBd/BdBd';
    $marking_desc = "A marking that creates a 'Wound' style marking on the body that appears as a three part marking. The gene is thought to originate from those dragons who have lost something dear to them. The properities section refers to the base, please see the rules for the mark itself.";
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
    $edge_mottled = 'yes';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'blooded_yes',
        'blooded_yes2',
        'blooded_no',
        'blooded_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'The first layer of this marking is a gradient, or heavily blurred, that is lighter or darker than the body and sits below the second and third layer. It may have varying edges.', 
        'The second layer of the marking is a flat colored marking that is allowed a single color gradient. It must sit above the first layer, but below the third.',
        'The third layer of this mark of this gene can appear as a dot, diamond, heart, or other shape. It is allowed to blend into the second layer and is allowed edge blending properities (meaning it doesnt have to blend in all spots etc)',
        'The marking does not have to be fully connected and can be in patches across the body.',
        
    ];

    $marking_cannot = [
        'Blooded should not mimic other markings.',
    ];

    $marking_must = [
        'Recessive: Can appear in 3 zones.',
        'Dominant: Can appear in all zones and the third layer is allowed to be iridescent.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'blood_1', 'alt' => '...', 'label' => 'SB-0384', 'caption' => 'Designer: @Mloking'],
        ['image_name' => 'blood_2', 'alt' => '...', 'label' => 'SB-0856', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'blood_3', 'alt' => '...', 'label' => 'SB-0887', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')