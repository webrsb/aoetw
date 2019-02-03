const router = require('./router/router.js')
const pkg = require('./package')

module.exports = {
  mode: 'universal',

  /*
  ** Headers of the page
  */
  head: {
    title: pkg.name,
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },

  /*
  ** Global CSS
  */
  css: [
    { src: '@static/style.css', lang: 'css' },
    { src: 'codemirror/lib/codemirror.css', lang: 'css' }
  ],

  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    '~plugins/codemirror.js'
  ],

  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://github.com/nuxt-community/axios-module#usage
    '@nuxtjs/axios',
    // Doc: https://bootstrap-vue.js.org/docs/
    'bootstrap-vue/nuxt'
  ],
  /*
  ** Axios module configuration
  */
  axios: {
    // See https://github.com/nuxt-community/axios-module#options
  },

  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    quiet: false,
    extend(config, ctx) {
      config.resolve.alias.vue = 'vue/dist/vue.common'
      config.resolveLoader.alias = config.resolveLoader.alias || {}

      if (process.env.NODE_ENV === 'development') {
        return Object.assign({}, config, {
          devtool: 'source-map'
        })
      }
    }
  },
  router,
  generate: {
    concurrency: 50
  }
}
