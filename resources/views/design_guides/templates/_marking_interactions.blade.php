<?php
    // 0 is the lowest layer, markings here are always layered below other markings, except those in the same group
    // Groups 0, 10, and 20 are default - the space between these numbers may be useful in the future for markings
    // requiring a special layer order
    // Please DO NOT use negative numbers
    $marking_layers = [
        0 => ['Pangare', 'Bokeh', 'Cloud', 'Marbled', 'Merle', 'Tabby'],
        10 => ['Blanket', 'Boar', 'Collar', 'Dunstripe', 'Dusted', 'Frog Eye', 'Hood', 'Leaf', 'Points', 'Python',
               'Rimmed', 'Ringed', 'Sable', 'Scaled', 'Stained', 'Trailing', 'Underbelly', 'Banded', 'Brindled',
               'Dipped', 'Mist', 'Roan', 'Toxin', 'Glass', 'Luminescent', 'Petal', 'Aurora', 'Shimmer'],
        20 => ['Masked', 'Skink', 'Crested', 'Inkwell', 'Pigeon', 'Plasma', 'Rosettes', 'Shaped', 'Tobiano',
               'Appaloosa', 'Blooded', 'Eyes', 'Lustrous', 'Painted', 'Vignette', 'Aether Marked', 'Gemstone',
               'Lepir', 'Rune', 'Triquetra'],
        // Add more groups as necessary; example:
        // 30 => [],
    ];
    $modifier_affects = [
        'Duotone' => ['All Markings'],
        'Flaxen' => ['All Markings'],
        'Dripping' => ['Blanket', 'Boar', 'Collar', 'Dunstripe', 'Frog Eye', 'Hood', 'Leaf', 'Points', 'Python', 'Rimmed',
                       'Ringed', 'Scaled', 'Trailing', 'Underbelly', 'Banded', 'Toxin', 'Glass', 'Petal', 'Aurora', 'Marbled',
                       'Tabby', 'Masked', 'Skink', 'Crested', 'Inkwell', 'Pigeon', 'Plasma', 'Rosettes', 'Shaped', 'Tobiano', 'Appaloosa',
                       'Blooded', 'Eyes', 'Lustrous', 'Painted', 'Vignette', 'Aether Marked', 'Gemstone', 'Lepir', 'Rune', 'Triquetra'],
        // Special groupings for some modifiers
        'Inherits' => ['Dripping'],
        'Color' => ['Flaxen']
    ];
    // Layering
    // First get the marking name and look for its layer group
    $layer_group = -1;
    foreach($marking_layers as $num=>$group) {
        if(in_array($marking_name, $group)) {
            $layer_group = $num;
            $layers_above_or_below = array_diff($group, [$marking_name]);
            // sort($layers_above_or_below);
            if(!count($layers_above_or_below)) $layers_above_or_below = ['None'];
            $layers_above_or_below = implode(', ', $layers_above_or_below);
        }
    }
    // Check if marking was not found
    if($layer_group < 0) {
        $layers_above_or_below = 'None';
        $layers_above = 'None';
        $layers_below = 'None';
    }
    else {
        // Generate the corresponding relations
        $layers_above = [];
        $layers_below = [];
        foreach($marking_layers as $num=>$group) {
            if($num < $layer_group) $layers_above = array_merge($layers_above, $group);
            if($num > $layer_group) $layers_below = array_merge($layers_below, $group);
        }
        // sort($layers_above);
        // sort($layers_below);
        if(!count($layers_above)) $layers_above = ['None'];
        if(!count($layers_below)) $layers_below = ['None'];
        $layers_above = implode(', ', $layers_above);
        $layers_below = implode(', ', $layers_below);
    }
    // Modifiers
    $affected_by = [];
    $can_affect = $modifier_affects[$marking_name] ?? ['None']; // None is the default for non-modifiers
    foreach($modifier_affects as $modifier=>$targets) {
        if(in_array($marking_name, $targets) || $targets[0] == 'All Markings') {
            if($modifier == 'Inherits') {
                $affected_by = ['None, this marking takes on the behavior of what it is affecting'];
                break;
            }
            else if($modifier == 'Color') {
                $layers_above_or_below = 'Null, must affect the base coat or a marking';
                $layers_above = 'Null, must affect the base coat or a marking';
                $layers_below = 'Null, must affect the base coat or a marking';
                $affected_by = ['Null, must affect the base coat or a marking'];
                break;
            }
            else {
                if($modifier != $marking_name) array_push($affected_by, $modifier);
            }
        }
    }
    $affected_by = implode(', ', $affected_by);
    $can_affect = implode(', ', $can_affect);
?>
<a class="btn btn-secondary" href="This marking can appear above or below the following markings: {{ $layers_above_or_below }}" data-featherlight="text">Above or Below These Markings</a>
<a class="btn btn-secondary" href="This marking has to appear above the following markings: {{ $layers_above }}" data-featherlight="text">Always Above These Markings</a>
<a class="btn btn-secondary" href="This marking has to appear below these markings: {{ $layers_below }}" data-featherlight="text">Always Below These Markings</a>
<a class="btn btn-secondary" href="This marking can be affected or modified by the following markings (such as being able to be modified by a color marking): {{ $affected_by }}" data-featherlight="text">Affected By These Markings</a>
<a class="btn btn-secondary" href="This marking can affect or modify the following the markings (such as making them a different color): {{ $can_affect }}" data-featherlight="text">Can Affect These Markings</a>