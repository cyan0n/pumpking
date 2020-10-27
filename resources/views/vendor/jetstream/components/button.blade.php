<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-orange-dark border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-darker active:bg-orange-darker focus:outline-none focus:border-orange-darker focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
