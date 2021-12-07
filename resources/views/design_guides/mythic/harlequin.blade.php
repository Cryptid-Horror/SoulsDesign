<?php
    $marking_icon = 'Mythic_Harlequin';
    $marking_name = 'Harlequin';
    $marking_code = 'nHar/HarHar';
    $marking_desc = "Harlequin, like Lepir, is allowed to be simple or complex. Simple Harlequin presents as a cluster of lines or dots like on a Harlequin toad. Complex lets you override the geno to make
                    the dragons design look like any toad or frog. A reference image is necessary during design approval. Suggested by MadDog.";
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
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'sometimes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'har_yes1',
        'har_yes2',
        'har_yes3',
        'har_no1',
        'har_no2',
        'har_no3',
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Complex Harlequin can override the geno and appear as any frog or toad design.', 
        'Simple Harlequin does not override the geno, all markings must be present either above or beneath harlequin.',
        'Simple harlequin can appear as clusters of squiggly lines, or as clusters of hollowed out dots/shops that show the base and markings beneath it.',
        'The gradient on simple harlequin can appear anywhere.', 

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Complex Harlequin cannot be made to look like non toads or frogs.', 
        'Complex Harlequin needs to be based on real toads and frogs.',
         
    ];

    $marking_must = [
        'Recessive: Either complex, or can appear in all zones as any colors with one gradient color allowed on harlequin.',
        'Dominant: Either complex, or can appear in all zones with two gradient colors on Harlequin itself.'
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