var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir.config.assetsPaths = 'themes/basic-uikit-theme/assets';
elixir.config.publicPath = 'themes/basic-uikit-theme/assets';

elixir(function(mix){
     mix.sass('main.scss');
})
