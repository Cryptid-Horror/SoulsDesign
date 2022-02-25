<ul>
    <li class="sidebar-header"><a href="{{ $character->url }}" class="card-link">{{ $character->slug }}</a></li>
   
    
        <li class="sidebar-section">
            <div class="sidebar-section-header">Character</div>
            <div class="sidebar-item"><a href="{{ $character->url . '/level-area' }}" class="{{ set_active('character/'.$character->slug.'/level-area') }}">Celestial Experience</a></div>
            <div class="sidebar-item"><a href="{{ $character->url . '/stats-area' }}" class="{{ set_active('character/'.$character->slug.'/stats-area') }}">Health Tracker</a></div>
            <div class="sidebar-item"><a href="{{ $character->url . '/profile' }}" class="{{ set_active('character/'.$character->slug.'/profile') }}">Profile</a></div>
            <div class="sidebar-item"><a href="{{ $character->url . '/status-effects' }}" class="{{ set_active('character/'.$character->slug.'/status-effects') }}">Status Effects</a></div>
            @if(Auth::user()->id == $character->user_id)
                <div class="sidebar-item"><a href="{{ $character->url . '/approval' }}" class="{{ set_active('character/'.$character->slug.'/approval') }}">Update Design</a></div>
            @endif
        @if(Auth::check() && (Auth::user()->id == $character->user_id || Auth::user()->hasPower('manage_characters')))
            <div class="sidebar-item"><a href="{{ $character->url . '/profile/edit' }}" class="{{ set_active('character/'.$character->slug.'/profile/edit') }}">Edit Profile</a></div>
            <div class="sidebar-item"><a href="{{ $character->url . '/transfer' }}" class="{{ set_active('character/'.$character->slug.'/transfer') }}">Transfer</a></div>
        </li>
    @endif
    <li class="sidebar-section">
        <div class="sidebar-section-header">Inventory</div>
        <div class="sidebar-item"><a href="{{ $character->url . '/gallery' }}" class="{{ set_active('character/'.$character->slug.'/gallery') }}">Gallery</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/inventory' }}" class="{{ set_active('character/'.$character->slug.'/inventory') }}">Inventory</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/bank' }}" class="{{ set_active('character/'.$character->slug.'/bank') }}">Bank</a></div>
        @if($character->getLineageBlacklistLevel() < 1)
            <div class="sidebar-item"><a href="{{ $character->url . '/lineage' }}" class="{{ set_active('character/'.$character->slug.'/lineage') }}">Lineage</a></div>
        @endif
        <div class="sidebar-item"><a href="{{ $character->url . '/breeding-permissions' }}" class="{{ set_active('character/'.$character->slug.'/breeding-permissions') }}">Breeding Permissions</a></div>
    </li>
    <div id="accordion">
    <li class="sidebar-section">
        <div class="sidebar-section-header pointer collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fas fa-sort-down"></i> Character Logs</div>
    <div class="__web-inspector-hide-shortcut__ collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion" style="">
        <div class="sidebar-item"><a href="{{ $character->url . '/images' }}" class="{{ set_active('character/'.$character->slug.'/images') }}">Images</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/level' }}" class="{{ set_active('character/'.$character->slug.'/level') }}">Celestial Logs</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/change-log' }}" class="{{ set_active('character/'.$character->slug.'/change-log') }}">Change Log</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/ownership' }}" class="{{ set_active('character/'.$character->slug.'/ownership') }}">Ownership History</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/item-logs' }}" class="{{ set_active('character/'.$character->slug.'/item-logs') }}">Item Logs</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/currency-logs' }}" class="{{ set_active('character/'.$character->slug.'/currency-logs') }}">Currency Logs</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/skill-logs' }}" class="{{ set_active('character/'.$character->slug.'/skill-logs') }}">Skill Logs</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/status-effect-logs' }}" class="{{ set_active('character/'.$character->slug.'/status-effect-logs') }}">Status Effect Logs</a></div>
        <div class="sidebar-item"><a href="{{ $character->url . '/submissions' }}" class="{{ set_active('character/'.$character->slug.'/submissions') }}">Submissions</a></div>
        </div>
    </li>
</ul>
