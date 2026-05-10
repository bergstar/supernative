@php
    use Native\Mobile\Edge\Layouts\Builders\NavAction;
    use App\Icons\Material;
    use App\Icons\SF;

    $pressableMenu = [
        NavAction::make('record')
            ->label('Record audio')
            ->icon(sf: SF::Mic, material: Material::Mic)
            ->press('logRecord'),
        NavAction::make('upload')
            ->label('Upload file')
            ->icon(sf: SF::ArrowUp, material: Material::ArrowUpward)
            ->press('logUpload'),
        NavAction::divider(),
        NavAction::make('settings')
            ->label('Audio settings')
            ->icon(sf: SF::Gear, material: Material::Settings)
            ->press('logSettings'),
    ];

    $buttonMenu = [
        NavAction::make('export_pdf')
            ->label('Export as PDF')
            ->icon(sf: SF::DocText, material: Material::Description)
            ->press('logExportPdf'),
        NavAction::make('export_csv')
            ->label('Export as CSV')
            ->icon(sf: SF::Doc, material: Material::FileCopy)
            ->press('logExportCsv'),
        NavAction::divider(),
        NavAction::make('print')
            ->label('Print')
            ->icon(sf: SF::Printer, material: Material::Print)
            ->press('logPrint'),
    ];

    $listItemMenu = [
        NavAction::make('mark_read')
            ->label('Mark as read')
            ->icon(sf: SF::CheckmarkCircle, material: Material::CheckCircle)
            ->press('logMarkRead'),
        NavAction::make('mute')
            ->label('Mute notifications')
            ->icon(sf: SF::BellSlash, material: Material::NotificationsOff)
            ->press('logMute'),
        NavAction::divider(),
        NavAction::make('archive')
            ->label('Archive')
            ->icon(sf: SF::Archivebox, material: Material::Archive)
            ->press('logArchive'),
        NavAction::make('delete')
            ->label('Delete')
            ->icon(sf: SF::Trash, material: Material::Delete)
            ->destructive()
            ->press('logDelete'),
    ];
@endphp

<native:scroll-view class="w-full h-full bg-theme-background">
    <native:column class="w-full p-5 gap-6">

        {{-- ── Pressable menu ── --}}
        <native:column class="w-full gap-2">
            <native:text class="text-lg font-semibold text-theme-on-background">Pressable + `:menu`</native:text>
            <native:text class="text-sm text-theme-on-surface-variant">
                Any pressable becomes a menu trigger. Tap fires the menu
                instead of `@press`. iOS 26+ gets Liquid Glass for free;
                Compose's `DropdownMenu` anchors to the same Box.
            </native:text>

            <native:row class="w-full gap-3 items-center">
                <native:pressable
                    class="glass:interactive android:dark:bg-theme-surface-variant rounded-full p-3 items-center justify-center"
                    :menu="$pressableMenu">
                    <native:icon name="mic" :size="22" />
                </native:pressable>

                <native:text class="text-sm text-theme-on-surface-variant">Tap the mic →</native:text>
            </native:row>
        </native:column>

        <native:divider class="my-2"/>

        {{-- ── Button menu ── --}}
        <native:column class="w-full gap-2">
            <native:text class="text-lg font-semibold text-theme-on-background">Button + `:menu`</native:text>
            <native:text class="text-sm text-theme-on-surface-variant">
                Same attribute on `<native:button>`. Variant + size are
                preserved; the dropdown anchors to the button's bounds.
            </native:text>

            <native:row class="w-full gap-2">
                <native:button label="Export…" variant="primary" :menu="$buttonMenu"/>
                <native:button label="Export…" variant="secondary" :menu="$buttonMenu"/>
            </native:row>
        </native:column>

        <native:divider class="my-2"/>

        {{-- ── ListItem trailing-menu ── --}}
        <native:column class="w-full gap-2">
            <native:text class="text-lg font-semibold text-theme-on-background">ListItem + `:trailing-menu`</native:text>
            <native:text class="text-sm text-theme-on-surface-variant">
                Row-level overflow menu — the trailing icon button becomes
                a Menu trigger. iMessage / Mail / Spotify pattern.
            </native:text>

            <native:column class="w-full bg-theme-surface rounded-xl">
                <native:list-item
                    headline="Sarah Miller"
                    supporting="Did you see the new design specs?"
                    leadingMonogram="SM"
                    leadingMonogramColor="#0EA5E9"
                    :trailing-menu="$listItemMenu"/>
                <native:divider/>
                <native:list-item
                    headline="Design Team"
                    supporting="Alex: Looks good to me!"
                    leadingMonogram="DT"
                    leadingMonogramColor="#A855F7"
                    :trailing-menu="$listItemMenu"/>
                <native:divider/>
                <native:list-item
                    headline="Marcus James"
                    supporting="Thanks for the heads up!"
                    leadingMonogram="MJ"
                    leadingMonogramColor="#10B981"
                    :trailing-menu="$listItemMenu"/>
            </native:column>
        </native:column>

        <native:divider class="my-2"/>

        {{-- ── Last-action echo ── --}}
        <native:column class="w-full p-4 rounded-xl bg-theme-surface-variant gap-1">
            <native:text class="text-[11] font-semibold text-theme-on-surface-variant">LAST ACTION</native:text>
            <native:text class="text-base text-theme-on-surface">{{ $lastAction !== '' ? $lastAction : '—' }}</native:text>
        </native:column>

    </native:column>
</native:scroll-view>
