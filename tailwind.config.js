/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        "fond-portefolio":
          "url('./../src/Assets/redBk.jpg)",

        "fond-luxe": "url('./../src/Assets/luxe.jpg')",
        "fond-redblack" : "url('./../src/Assets/luxe.jpg')",
      },

      fontFamily: {
        com: "Oxygen",
        dev: "Tektur",
        screen: "Revalia",
      },
    },
  },
  plugins: [],
};
