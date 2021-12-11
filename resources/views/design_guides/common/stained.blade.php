<?php
    $marking_icon = 'Common_Stained';
    $marking_name = 'Stained';
    $marking_code = 'nSn/SnSn';
    $marking_desc = "Important Notes: This marking is a combination of two prior markings, Fading (nFd/FdFd) and Scorching (nSo/SoSo). The marking has the versality of both, while still giving it more freedom in designs. All dragons with these markings together prior were given Dominant Stained, however genos are not given dominant markings from combined markings. A gradient or blur marking that starts from the end of joints and travels inward on the body. Stained can be lighter or darker, and is often reminescent of markings found on siamese cats, and can be seen with a darker or lighter gradient overlapping a secondary gradient on the body.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Stained',
        'Warden' => 'Warden_Stained',
        'Greater' => 'Gemp_Stained',
        'Ravager' => 'Ravager_Stained',
        'Stalker' => 'Stalker_Stained',
        'Ridgewalker' => 'Ridgewalker_Stained',
        'Abyssal' => 'Abyssal_Stained',
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
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'stained_yes',
        'stained_yes2',
        'stained_no',
        'stained_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 value and saturation point gradient difference inside the marking',
        ' Stained, having previously been two markings - scorching and fading, can now appear as either a darker or a lighter shade of what it resides over. The marking can have both lighter or darker present on different points of the body as well. Both light and dark do no have to be present together! You can choose one or the other, or use both.',
        'Stained can have a dark gradient cover a light gradient, that is over top the base coat or other markings. Vice versa, the light gradient can reside over the dark gradient.',
    ];

    $marking_cannot = [
        'Edges cannot be complex, they need to gradient or blur in an arc or line at their edge, or can have very subtle flow with feathers or fur. They cannot be heavily textured at the edges, mottled, or otherwise complex.',
        'Holes, breaks, cutouts, or floating portions of the marking are not allowed. Stained must be fully connected for each point. You can overlap other markings ontop of it, such as masked, rimmed, or even minimal markings to create an illusion of a cutout.',
    ];

    $marking_must = [
        'Recessive: No change from property values',
        ' Dominant: Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'stain_1', 'alt' => '...', 'label' => 'SB-0981', 'caption' => 'Designer: @SomeSunnyBunny'],
        ['image_name' => 'stain_2', 'alt' => '...', 'label' => 'SB-0865', 'caption' => 'Designer: @LadyLirriea'],
        ['image_name' => 'stain_3', 'alt' => '...', 'label' => 'SB-0846', 'caption' => 'Designer: @DalekFell'],
    ];
?>

@include('design_guides.templates._gene_template')