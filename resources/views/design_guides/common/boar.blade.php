<?php
    $marking_icon = 'Common_Boar';
    $marking_name = 'Boar';
    $marking_code = 'nBr/BrBr';
    $marking_desc = "Marking Origin: 2018 Genetics Contest; Submitted by user Sciain.
A marking that originates from the Warden bloodlines from before the fall of the Shimmering Isles. The marking appears the same as the markings found on baby wild boars, and has been documented to be seen on all parts of the body of a dragon. An interesting behavior of the gene is the gradient that is sometimes present beneath the barring and spots.";
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
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'boar_yes1',
        'boar_yes2',
        'boar_no1',
        'boar_no2'
    ];

    // You can use html!
    $marking_can = [
        'Contains three individual parts; see behaviors. Barrings properties are shown under the Properties section.',
        'Barring is allowed an outline around the bars, much like how the marking Border creates. Border can also stack on this marking to create two borders. The Border does not have to be present, or can appear as the same color as the base.',
        'Small dots may accompany the bars, and also can have borders. They should not be in excess, or appear to look like other shapes, or be so small as to look like Dusted.',
        'When affected by a color modifier gene, or gene with these properties such as iridescence, all portions of boar (bars, gradient, and border) may be shades of that color, or otherwise affected as well.',
        'The gradient portion of this marking can apear under the bars, and can only slightly extend beyond to blend nicely into the base coat. It is only allowed to be a smooth gradient. It cannot cover the whole body unless dominant.'
    ];

    $marking_cannot = [
        'To avoid the appearance of trailing, barring must be thick, but can have tapered, or non tapered ends. Bars may have irregular, but smooth, flow in their line, such as creating smoother squiggle motions or indents.',
        ' Boar must either have a graident present, or a border present, or both.'
    ];

    $marking_must = [
        'Boars Border portion of the marking (not the barring), may only have these properties: Solid Edge, Soft Edge, Textured Edge, Feathered Edge, Blurred Edge, Graident Edge, and Edge Blending. Natural colors, Lighter, Darker, Marking/Base Dependant.',
        ' Recessive: Barring may appear in 3 zones, the gradient may fall into other zones slightly.',
        'Dominant: Barring may appear in all zones.'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'boar_1', 'alt' => '...', 'label' => 'SB-0836', 'caption' => 'Designer: @PenumbralWolf'],
        ['image_name' => 'boar_2', 'alt' => '...', 'label' => 'SB-0564', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'boar_3', 'alt' => '...', 'label' => 'SB-0683', 'caption' => 'Designer: @FlawedEmperor'],
    ];
?>

@include('design_guides.templates._gene_template')