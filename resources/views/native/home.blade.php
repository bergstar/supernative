<native:scroll-view class="w-full bg-theme-background">
    <native:column class="w-full p-5 gap-6">

        <native:column class="gap-1">
            <native:text class="text-2xl font-bold text-theme-on-background">NativePHP iOS Starter</native:text>
            <native:text class="text-sm text-theme-on-surface-variant">A minimal boilerplate for iOS apps built in PHP. Native NavigationStack header, native TabView bar, and four input primitives ready to wire up to your own state.</native:text>
        </native:column>

        <native:column class="gap-2">
            <native:text class="text-base font-semibold text-theme-on-background">Slider</native:text>
            <native:slider native:model.live="sliderValue" :min="0" :max="100" class="w-full" />
            <native:text class="text-sm text-theme-on-surface-variant">Value: {{ number_format($sliderValue, 0) }}</native:text>
        </native:column>

        <native:divider />

        <native:column class="gap-2">
            <native:text class="text-base font-semibold text-theme-on-background">Text input</native:text>
            <native:outlined-text-input class="w-full" label="Name" placeholder="Jane Doe" native:model="name" />
        </native:column>

        <native:divider />

        <native:column class="gap-2">
            <native:text class="text-base font-semibold text-theme-on-background">Checkbox</native:text>
            <native:checkbox native:model="notifications" label="Enable notifications" class="w-full" />
        </native:column>

        <native:divider />

        <native:column class="gap-2">
            <native:text class="text-base font-semibold text-theme-on-background">Selector</native:text>
            <native:select
                native:model="material"
                label="Material"
                placeholder="Pick a material"
                :options="['Liquid Glass', 'Frosted', 'Clear', 'Tinted']"
                class="w-full"
            />
            <native:text class="text-sm text-theme-on-surface-variant">Selected: {{ $material }}</native:text>
        </native:column>

    </native:column>
</native:scroll-view>
