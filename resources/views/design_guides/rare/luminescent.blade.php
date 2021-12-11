<?php
    $marking_icon = 'Rare_Luminescent';
    $marking_name = 'Luminescent';
    $marking_code = 'nLu/LuLu';
    $marking_desc = "A bio-luminescent marking that creates or causes markings or parts of the body to glow. This gene was thought to develop in the colder frigid areas where darkness is eternal, as a hunting method for dragons with the gene. It's also thought to be found in the ocean as many sailors tell stories of dragons that move in the sea, glowing beneath the waves.";
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
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'luminescent_yes',
        'luminescent_yes2',
        'luminescent_no',
        'luminescent_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. It can affect the marking as a whole, and/or the individual parts',
        'Luminescent can fade into the base coat/marking it sits over.',
        'Luminescents stand alone shape can be a variety of shapes, such as ovals, circles, tear drops, or diamonds. If it is not affecting a marking, or is only affecting one of the allowe dmarks out of its alloted state (i.e. affecting only 1 of two marks in recessive) it can create its own marking with these shapes. Luminescent is on of the few only markings allowed to mimic another marking, in this case Shaped.',
        'Luminescent may affect the teeth, claws, and horns to give them unnatural coloration, but only the horns and claws may have the soft glow. Paw pads and the gums of the mouth/throat can have a soft glow. All other extras can only be changed into different colors, they cannot glow.',
        'Luminescent can be up to 3 chosen colors in variation between the shapes it makes without affecting a marking.',
    ];

    $marking_cannot = [
        'Luminescent may not affect the eyes.',
        'Luminescent may not mimic any other marking except for Shaped, due to the nature of its standalone marking.',
    ];

    $marking_must = [
        'Recessive: Can be in up to 4 zones or affect two allowed markings. It can affect 1 marking, and present stand alone.',
        'Dominant: Can appear in all zones or affect all allowed markings. It can affect all markings and present stand alone.',
        'Luminescent must behave with the rules of markings it can affect, applying only color and a subtle glow.',
        'Luminescent must be either a bright color, or a vibrant pastel color (for coats like ivory).',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'lumi_1', 'alt' => '...', 'label' => 'SB-0649', 'caption' => 'Designer: @Livard + Cryptid-Horror'],
        ['image_name' => 'lumi_2', 'alt' => '...', 'label' => 'SB-0763', 'caption' => 'Designer: @TwistedLunatic'],
        ['image_name' => 'lumi_3', 'alt' => '...', 'label' => 'SB-0023', 'caption' => 'Designer: @Kre-Kael'],
    ];
?>

@include('design_guides.templates._gene_template')