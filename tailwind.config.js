module.exports = {
    content: [
        './components/*.php',
        './components/**/*.php',
        './assets/js/*.ts',
        './assets/js/**/*.ts',
        './assets/php/*.php',
        './assets/php/**/*.php',
        './pages/**/*.php',
        './index.php',
        './footer.php',
        './header.php',
        './functions.php'
    ],
    theme: {
        colors: {
            'dark' : '#212121',
            'white' : '#ffffff',
            'current' : 'currentColor',
            'yellow' : '#e4e84c',
            'yellow-dark' : '#cece25',
            'yellow-darker' : '#BCB820',
            'yellow-light' : '#f1f3a5',
            'gray' : '#e5e0db',
            'gray-light' : '#f1f1f1',
            'gray-lighter' : '#fafafa',
            'red' : '#f84444'
        },
        screens: {
            sm: '700px',
            md: '1000px',
            lg: '1300px',
            xl: '1600px',
            '2xl': '1800px'
        },
        container: {
            padding: '1rem',
            screens: {
                sm: '768px',
                md: '991px',
                lg: '1240px',
                xl: '1440px',
                '2xl': '1720px'
            }
        }
    },
    plugins: [
    ],
}