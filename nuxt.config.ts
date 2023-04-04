import pkg from './package.json'

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  app: {
    head: {
      title: pkg.name,
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', content: pkg.description },
        { hid: 'keywords', name: 'keywords', content: '世紀帝國, 世紀帝國百科, Age of empire, 征服者入侵, 失落的帝國, 非洲王國, 王者崛起'},
      ],
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
      ]
    },
  },

  css: [
    '@/static/style.css',
    'codemirror/lib/codemirror.css',
    '@fortawesome/fontawesome-free/css/all.css',
    'bootstrap/dist/css/bootstrap.css'
  ],

  plugins: [
    { src: '@/plugins/ga.js', ssr: false }
  ]
})
