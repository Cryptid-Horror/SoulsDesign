<?php
    $marking_icon = 'Common_Ripples';
    $marking_name = 'Ripples';
    $marking_code = 'nRip/RipRip';
    $marking_type = 'Variable';
    $marking_desc = "Ripples appear as curved lines on the dragon's body that are close to each other. Suggested by Oreleth.";
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
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'dominant';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'rip_yes1',
        'rip_yes2',
        'rip_yes3',
        'rip_no1',
        'rip_no2',
        'rip_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'Ripples appear as a series of curved lines that are close to each other. they can appear as simple curves or as wavey lines on the body and wings.',
        'Ripples may gradient into the base.',
    ];

    $marking_cannot = [
        'Ripples cannot appear horizontal, else they will look like trailing.',
        'Ripples cannot connect in any place, else they may appear too much like banded.',
     
    ];

    $marking_must = [
        'Recessive: May appear in all zones but must be natural colors or modified by a color marking. Can be shades of the base coat.',
        'Dominant: May appear in all zones or be any chosen color.',
        'Ripples must be vertical in direction.',
        'Ripples must be thin lines, they cannot be overly thick.',
        'At a minimum, three to four ripple lines must be present.',

    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
    ];
?>

@include('design_guides.templates._gene_template')