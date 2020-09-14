const mix = require('laravel-mix');
const bsFiles = [
  'public/css/**/*.css',
  'public/js/**/*.js',
  'public/images/**/*.jpg',
];

mix
  .js('resources/js/App.js', 'public/js')
  .js('resources/js/pages/Cidades.js', 'public/js/pages')
  .js('resources/js/FotoProduto.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/pages/login.scss', 'public/css/pages');

if (!mix.inProduction()) {
  mix
    .webpackConfig({ devtool: 'source-map' })
    .sourceMaps()
    .disableNotifications()
    .browserSync({
      files: process.env.LIVERELOAD_PHP
        ? ['{app,config,public,resources/{lang,views}}/**/*.php', ...bsFiles]
        : bsFiles,
      proxy: 'localhost',
      logSnippet: false,
      notify: false,
      open: false,
      port: 3000,
      ui: false,
    });
}

// Disable mix-manifest.json
Mix.manifest.refresh = () => void 0;
