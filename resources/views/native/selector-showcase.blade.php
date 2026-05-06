<native:scroll-view class="w-full bg-theme-background">
    <native:column class="w-full p-5 gap-5">

        <native:select
            native:model="material"
            label="Material"
            placeholder="Pick a material"
            :options="$materials"
            class="w-full"
        />

        <native:select
            native:model="tint"
            label="Tint"
            placeholder="Pick a tint"
            :options="$tints"
            class="w-full"
        />

        <native:select
            label="Locked"
            placeholder="Disabled"
            :value="$disabledChoice"
            :options="['Locked']"
            disabled
            class="w-full"
        />

        <native:divider />

        <native:text class="text-sm text-theme-on-surface-variant">Material: {{ $material }} · Tint: {{ $tint }}</native:text>

    </native:column>
</native:scroll-view>
