module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        e179darkblue: '#2B324C',
        e179blue: '#164B6B',
        e179lightblue: '#75AABC',
        e179rust: '#EBB378',
        e179darkrust: '#D28541'
      },
    },
  },
  plugins: [],
};
