module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    flex: {
      '1': '1 1 0%',
      auto: '1 1 auto',
      initial: '0 1 auto',
      none: 'none',
      '100': '0 1 100%',
    },
    extend: {},
  },
  variants: {
    backgroundColor: ['responsive', 'hover', 'focus', 'checked'],
  },
  plugins: [],
}
