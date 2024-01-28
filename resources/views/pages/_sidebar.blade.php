<ul class="text-center">
    <li class="sidebar-section d-flex flex-column justify-content-center p-2" style="min-height: 260px;">
        @if (isset($featured) && $featured)
            <div>
                <a href="{{ $featured->url }}"><img src="{{ $featured->image->thumbnailUrl }}"
                        class="img-thumbnail" /></a>
            </div>
            <div class="mt-1">
                <a href="{{ $featured->url }}" class="h5 mb-0">
                    @if (!$featured->is_visible)
                        <i class="fas fa-eye-slash"></i>
                    @endif {{ $featured->fullName }}
                </a>
            </div>
            <div class="small">
                {!! $featured->image->species_id ? $featured->image->species->displayName : 'No Species' !!} ・ {!! $featured->image->rarity_id ? $featured->image->rarity->displayName : 'No Rarity' !!} ・ {!! $featured->displayOwner !!}
            </div>
        @else
            <p>There is no featured character.</p>
        @endif
    </li>
</ul>
