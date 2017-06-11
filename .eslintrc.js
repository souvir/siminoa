module.exports = {
  env: {
    browser: true,
    commonjs: true,
    es6: true,
    node: true,
  },
  extends: ["vue", 'eslint:recommended'],
  plugins: ["vue"],
  parserOptions: {
    sourceType: 'script',
  },
  rules: {
    'vue/jsx-uses-vars': 2,
    'comma-dangle': ['error', 'always-multiline'],
    indent: ['error', 2],
    'linebreak-style': ['error', 'unix'],
    quotes: ['error', 'single'],
    semi: ['error', 'always'],
    'no-unused-vars': ['warn'],
    'no-console': 0,
  },
};
