/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        "fond-portefolio":
          "url('/src/Assets/kamran-abdullayev-6eGWRC-pIqI-unsplash.jpg')",

        "fond-luxe": "url('/src/Assets/luxe.jpg')",
      },
    },
  },
  plugins: [],
};
