import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#4A90E2', // Light Blue - used for main actions or important elements (e.g., buttons, links)
                secondary: '#50E3C2', // Teal - used for secondary actions, accent elements, or highlights

                // Light theme colors
                light: {
                  background: '#FFFFFF', // White - main background color for light theme
                  surface: '#F5F7FA', // Very light gray - used for card or surface backgrounds
                  textPrimary: '#333333', // Dark Gray - primary text color for readability
                  textSecondary: '#7F8C8D', // Medium Gray - secondary text, less important
                  error: '#E74C3C', // Red - used for error messages or important alerts
                  success: '#2ECC71', // Green - used for success messages or indicators
                  warning: '#F39C12', // Yellow - used for warning messages or indicators
                },

                // Dark theme colors
                dark: {
                  background: '#1E1E1E', // Very dark gray - background color for dark mode
                  surface: '#2A2A2A', // Darker gray - used for surface elements like cards, modals
                  textPrimary: '#E4E4E4', // Light Gray - primary text color for dark mode
                  textSecondary: '#B0B0B0', // Medium Light Gray - secondary text in dark mode
                  error: '#E74C3C', // Red - used for error messages or important alerts (same as light mode)
                  success: '#2ECC71', // Green - used for success messages or indicators (same as light mode)
                  warning: '#F39C12', // Yellow - used for warning messages or indicators (same as light mode)
                },
              },
            fontFamily: {
                sans: ['Inter', 'Roboto', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
