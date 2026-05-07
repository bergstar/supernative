<native:scroll-view class="w-full bg-theme-background">
    <native:column class="w-full p-5 gap-4">

        <native:checkbox native:model="newsletter" label="Subscribe to newsletter" class="w-full" />
        <native:checkbox native:model="marketing"  label="Marketing emails"        class="w-full" />
        <native:checkbox native:model="terms"      label="I accept the terms"      class="w-full" />

        <native:divider />

        <native:text class="text-sm text-theme-on-surface-variant">
            newsletter: {{ $newsletter ? 'yes' : 'no' }} ·
            marketing: {{ $marketing ? 'yes' : 'no' }} ·
            terms: {{ $terms ? 'yes' : 'no' }}
        </native:text>

    </native:column>
</native:scroll-view>
