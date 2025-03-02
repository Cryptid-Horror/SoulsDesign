<?php
    $marking_icon = 'Common_Collar';
    $marking_name = 'Collar';
    $marking_code = 'nCl/ClCl';
    $marking_type = 'Variable';
    $marking_desc = "The collar marking originated from the Radiant wyvern, and breeders prized the wyverns that had the cleanest collar markings. There is a lot of debate whether the full collar is superior to the half collar, but everyone agrees that it is a stylish gene on any dragon. The markings are found only on the neck of the dragon and can appear singularly or have up to 3 total rings. A single ring can also cover the whole neck.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Collar',
        'Warden' => 'Warden_Collar',
        'Greater' => 'Gemp_Collar',
        'Ravager' => 'Ravager_Collar',
        'Stalker' => 'Stalker_Collar',
        'Ridgewalker' => 'Ridgewalker_Collar',
        'Abyssal' => 'Abyssal_Collar',
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
    $edge_gradient = 'dominant';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'collar_yes1',
        'collar_yes2',
        'collar_yes3',
        'collar_yes4',
        'collar_no2',
        'collar_no3',
        'collar_no4',
        'collar_dom',
        'collar_no1'

    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 value and saturation point gradient difference inside the marking',
        'Can appear as a full ring, or a half ring/band around the neck. Can also cover the entire range, but does not have to connect all the way around the neck.',
        'Is allowed to fade vertically into the base coat',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Dominant collor may have a gradient beneath the collar, or may gradient in edge.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'collar_1', 'alt' => '...', 'label' => 'SB-0829', 'caption' => 'Designer: @Nek0ura'],
        ['image_name' => 'collar_2', 'alt' => '...', 'label' => 'SB-0625', 'caption' => 'Designer: @PenumbralWolf'],
        ['image_name' => 'collar_3', 'alt' => '...', 'label' => 'SB-0198', 'caption' => 'Designer: @CappuccinoDragon'],
    ];
?>

@include('design_guides.templates._gene_template')