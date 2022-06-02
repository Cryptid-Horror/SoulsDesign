<?php
    $marking_icon = 'Legendary_Solar_Flare';
    $marking_name = 'Solar Flare';
    $marking_code = 'nSf/SfSf';
    $marking_type = 'Variable';
    $marking_desc = "A marking that causes a brilliant wave color to cascade from a point on the character's body. Suggested by PlusBacon.";
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
    $edge_solid = 'no';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'no';
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
        'solarflare_yes1',
        'solarflare_yes2',
        'solarflare_yes3',
        'solarflare_yes4',
        'solarflare_yes5',
        'solarflare_yes6',
        'solarflare_no1',
        'solarflare_no2',
        'solarflare_no5',
        'solarflare_no6',
        'solarflare_no7',
    ];

    // You can use html!
    $marking_can = [
        '<b>Value and Saturation Gradient Blend</b> = Yes; 12 Points.<br>
        ♦ Solar flare should appear as a gradient with a minimum 3 to 4 colors blending into the base coat. <br>
        ♦ Solar flare can be any color, affected by a color marking, or affected by duotone and tritone to give it more color options.<br>
        ♦ Dark colors are allowed so long as there are at least 3 or 4 different colors present in the gradient.<br> 
        ♦ An <i>optional</i> glow is allowed only <b>behind</b> the dragon. It may have a secondary glow spot to create a lens flare effect.',
    ];

    $marking_cannot = [
        'There should be no metallic shine effect on the dragon.<br>
        ♦ Mimicing another marking is not allowed. Be especially wary of mimicing stained or dipped by only have one color.<br> 
        ♦ The <i>optional</i> glow must be behind the dragon and should not be on top of it. Neither should the lens flare effect. <br> 
        ♦ Unlike Solar flares original design, it may not cause the horn, claws, or spikes to glow. However the <i>optional</i> glow may be behind the horns/etc.<br>
        ♦ While you can use different shades of colors, there needs to be at least enough variation so that it is not just three or four shades of the same color. I.e. using a orange red, yellow red, red, and a more purple tone will be correct, while simply using four shades of red will not be correct.',
    ];

    $marking_must = [
        '<b>Recessive Coverage:</b> 40% of the body and from only a single "point."<br>
        ♦ <b>Dominant Coverage:</b> 60% of the body and can be from two "points."<br>
        ♦ <i>Points</i> Refer to one of the following parts of the character: Head, Front Legs, Back Legs, Wings, Tail. Front legs would count as one point, same as back legs and wings.<br>
        ♦ In the case of <i>dominant</i> solar flare, two glows may be present <b>behind</b> the body with two lens flares also behind the body.<br>
        ♦ Solar flare must have a minimum of 3 or 4 colors present in the marking, however it can up to 7 colors maximum.',
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