/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                'roboto': ['Roboto', 'sans-serif'],
            },
            boxShadow: {
                '00dp': '0 4px 4px rgba(0, 0, 0, 0.25)',
                '01dp': '0 1px 1px rgba(0, 0, 0, 0.14), 0 2px 1px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.20)',
                '02dp': '0 2px 2px rgba(0, 0, 0, 0.14), 0 3px 1px rgba(0, 0, 0, 0.12), 0 1px 5px rgba(0, 0, 0, 0.20)',
                '03dp': '0 3px 4px rgba(0, 0, 0, 0.14), 0 3px 3px rgba(0, 0, 0, 0.12), 0 1px 8px rgba(0, 0, 0, 0.20)',
                '04dp': '0 4px 5px rgba(0, 0, 0, 0.14), 0 1px 10px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.20)',
                '06dp': '0 6px 10px rgba(0, 0, 0, 0.14), 0 1px 18px rgba(0, 0, 0, 0.12), 0 3px 5px rgba(0, 0, 0, 0.20)',
                '08dp': '0 8px 10px rgba(0, 0, 0, 0.14), 0 3px 14px rgba(0, 0, 0, 0.12), 0 5px 5px rgba(0, 0, 0, 0.20)',
                '09dp': '0 9px 12px rgba(0, 0, 0, 0.14), 0 3px 16px rgba(0, 0, 0, 0.12), 0 5px 6px rgba(0, 0, 0, 0.20)',
                '12dp': '0 12px 17px rgba(0, 0, 0, 0.14), 0 5px 22px rgba(0, 0, 0, 0.12), 0 7px 8px rgba(0, 0, 0, 0.20)',
                '16dp': '0 16px 24px rgba(0, 0, 0, 0.14), 0 6px 30px rgba(0, 0, 0, 0.12), 0 8px 10px rgba(0, 0, 0, 0.20)',
                '24dp': '0 24px 38px rgba(0, 0, 0, 0.14), 0 9px 46px rgba(0, 0, 0, 0.12), 0 11px 15px rgba(0, 0, 0, 0.20)',
            },
            colors: {
                'primary': '#0D6EFD', // primary color
                'anti-flash-white': '#F2F2F2', // background light
                'chinese-black': '#121212', // background dark
                'charleston-green': '#272727', // card dark
                'dark-charcoal': '#323232', // toast | tooltip light
                'lotion': '#FAFAFA', // toast | tooltip dark
                'chinese-white': '#E0E0E0', // border light
                'dark-liver': '#515151', // border dark
                'error': '#DC2626', // error color
            },
        },
    },
    darkMode: 'class',
    plugins: [
        require('tw-elements/dist/plugin.cjs'),
        require('tailwind-clip-path'),
    ],
}

