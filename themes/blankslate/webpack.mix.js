const mix = require('laravel-mix');

mix.setPublicPath('./');

mix.js('src/js/app.js', 'dist/js')
   .postCss('src/css/app.css', 'dist/css', [
      require('postcss-import'),
      require('tailwindcss'),
      require('autoprefixer'),
   ])
   .sourceMaps();

// Disable notifications
mix.disableNotifications();

// Configure browsersync for local development
if (!mix.inProduction()) {
   mix.browserSync({
      proxy: 'socialura.local', // Change this to your local WordPress URL
      files: [
         '**/*.php',
         'dist/css/*.css',
         'dist/js/*.js',
      ]
   });
}