import defaultTheme from 'tailwindcss/defaultTheme';

module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    darkMode: 'class',
    theme: {
      extend: {
        backgroundColor: {
            'ffe7d7': '#ffe7d7',
            'ffc7a0': '#ffc7a0',
            'ffa666': '#ffa666',
            'ff8e47': '#ff8e47',
            'ff731c': '#ff731c'
        },
        colors: {
          custom: {
            'ffe7d7': '#ffe7d7',
            'ffc7a0': '#ffc7a0',
            'ffa666': '#ffa666',
            'ff8e47': '#ff8e47',
            'ff731c': '#ff731c'
          }
        },
        hover: {
          'C1CFFF': '#C1CFFF',
          '4D52BC': '#4D52BC',
        },
        transitionDuration: {
          '0.5s': '0.5s',
          '0.3s': '0.3s',
        },
        border: {
          '4D52BC': '#4D52BC',
        }
      },
    },
    
    
  }
