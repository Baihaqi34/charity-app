<div class="overflow-x-auto w-full max-w-4xl mx-auto p-4">
    <table {{ $attributes->merge(['class' => 'table-auto min-w-full divide-y divide-zinc-300 dark:divide-zinc-700']) }}>
        <thead class="bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-200 text-left text-sm font-semibold">
            <tr>
                {{ $thead ?? '' }}
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-zinc-900 divide-y divide-zinc-300 dark:divide-zinc-700 text-sm text-zinc-800 dark:text-zinc-100">
            {{ $slot }}
        </tbody>
    </table>
</div>
