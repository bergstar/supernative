<native:scroll-view class="w-full bg-theme-background">
    <native:column class="w-full p-5 gap-6">

        <native:column class="gap-1">
            <native:text class="text-sm uppercase tracking-wide text-theme-on-surface-variant">Live</native:text>
            <native:slider native:model.live="live" :min="0" :max="100" class="w-full" />
            <native:text class="text-base text-theme-on-background">{{ number_format($live, 1) }}</native:text>
        </native:column>

        <native:divider />

        <native:column class="gap-1">
            <native:text class="text-sm uppercase tracking-wide text-theme-on-surface-variant">Debounced (150ms)</native:text>
            <native:slider native:model.debounce.150ms="debounced" :min="0" :max="100" class="w-full" />
            <native:text class="text-base text-theme-on-background">{{ number_format($debounced, 1) }}</native:text>
        </native:column>

        <native:divider />

        <native:column class="gap-1">
            <native:text class="text-sm uppercase tracking-wide text-theme-on-surface-variant">On release</native:text>
            <native:slider native:model.blur="onRelease" :min="0" :max="100" class="w-full" />
            <native:text class="text-base text-theme-on-background">{{ number_format($onRelease, 1) }}</native:text>
        </native:column>

    </native:column>
</native:scroll-view>
