<div class="profile__ids" style="margin-top: var(--space-md)">
    <button type="button" class="profile__id-copy"
        data-copy="{{ $steam3 }}"
        data-tooltip="{{ __('steam-info.steam.copy') }}">
        <div>
            <div class="profile__id-copy-label">{{ __('steam-info.steam.steam3') }}</div>
            <div class="profile__id-copy-value">{{ $steam3 }}</div>
        </div>
        <x-icon path="ph.regular.copy" class="profile__id-copy-icon" />
    </button>

    <button type="button" class="profile__id-copy"
        data-copy="{{ $steam64 }}"
        data-tooltip="{{ __('steam-info.steam.copy') }}">
        <div>
            <div class="profile__id-copy-label">{{ __('steam-info.steam.steam64') }}</div>
            <div class="profile__id-copy-value">{{ $steam64 }}</div>
        </div>
        <x-icon path="ph.regular.copy" class="profile__id-copy-icon" />
    </button>

    <button type="button" class="profile__id-copy"
        data-copy="{{ $steam32 }}"
        data-tooltip="{{ __('steam-info.steam.copy') }}">
        <div>
            <div class="profile__id-copy-label">{{ __('steam-info.steam.steam32') }}</div>
            <div class="profile__id-copy-value">{{ $steam32 }}</div>
        </div>
        <x-icon path="ph.regular.copy" class="profile__id-copy-icon" />
    </button>
</div>
