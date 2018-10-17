const webpack = require('webpack');
const VueLoaderPlugin = require('vue-loader/lib/plugin')
module.exports = {
    mode: 'development',
    entry: './resources/assets/js/app.js',
    module: {
    rules: [
      {
        test: /\.vue$/,
        loader: "vue-loader"
      }
    ]
  },
    output: {
        filename: 'bundle.js',
        path: __dirname + '/public'
    },
    resolve: {
  alias: {
    vue: 'vue/dist/vue.js'
  }
},
     plugins: [
    // make sure to include the plugin for the magic
    new VueLoaderPlugin()
  ]
}

//module: {
//    loaders: {
//        test: 'jsx?$',
//    }
//}
//'./resources/assets/js/bootstrap.js'
