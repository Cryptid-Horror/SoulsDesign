<?php
    $marking_icon = 'Mythic_Arcane';
    $marking_name = 'Arcane';
    $marking_code = 'nArc/ArcArc';
    $marking_type = 'Variable';
    $marking_desc = "A marking that presents as arcane circles on the body. Runes may only be present in dominant, or if rune is present on the dragon. Suggested by Oreleth.";
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
        'Ridgewalker'=> 'Ridgewalker_Range',
        'Abyssal' => 'Abyssal_Range',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'arcane_yes1',
        'arcane_yes2',
        'arcane_yes3',
        'arcane_no1',
        'arcane_no2',
        'arcane_no3',
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Arcane is allowed to be mutliple rings and shapes - it is an arcane circle and can be as complex or simple as you want it. Each "ring" can be a different color.', 
        'Arcane does not have to present as rings, it can be triangles, squares etc. It can be any shapes that are not filled in.',
        'Arcane cannot cover the entire body of the dragon.',
        'Runes may only be present if Arcane is dominant, or if rune is present on the dragon.',
        
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Even in dominant, Arcane cannot cover the entire design.', 
        'Arcane must be on the design itself, it cannot appear off the design as it will look the mutation Arcana which is also arcane circles.',
    ];

    $marking_must = [
        'Recessive: Can be in 4 zones, only 4 large runes may be present in the arcane.',
        'Dominant: can be in all zones, 6 large runes may be present, and a ring of small text or runes can be around the "rings"',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
    ];
?>

@include('design_guides.templates._gene_template')