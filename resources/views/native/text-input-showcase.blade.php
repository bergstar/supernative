<native:scroll-view class="w-full bg-theme-background">
    <native:column class="w-full p-5 gap-5">

        <native:outlined-text-input class="w-full" label="Name" placeholder="Jane Doe" native:model="name" />
        <native:outlined-text-input class="w-full" label="Email" placeholder="you@example.com" keyboard="email" leading-icon="email" native:model="email" />
        <native:outlined-text-input class="w-full" label="Bio" placeholder="Tell us about yourself..." multiline :max-lines="4" native:model="bio" />

        <native:divider />

        <native:column class="gap-1">
            <native:text class="text-sm text-theme-on-surface-variant">Name: {{ $name ?: '—' }}</native:text>
            <native:text class="text-sm text-theme-on-surface-variant">Email: {{ $email ?: '—' }}</native:text>
        </native:column>

    </native:column>
</native:scroll-view>
