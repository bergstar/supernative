<native:refreshable @refresh="refresh" class="w-full h-full bg-theme-background">
    <native:column class="w-full p-4 gap-3">

        <native:text class="text-xs uppercase tracking-wider text-theme-on-surface-variant px-1">
            Refreshed {{ $refreshCount }}x — pull down ↓
        </native:text>

        @foreach ($cards as $card)
            <native:column :class="'w-full p-4 rounded-2xl bg-' . $card['color']">
                <native:text class="text-white text-base font-semibold">{{ $card['title'] }}</native:text>
                <native:text class="text-white text-xs">{{ $card['subtitle'] }}</native:text>
            </native:column>
        @endforeach

    </native:column>
</native:refreshable>
