<template>
  <b-tabs class="play" @activate-tab="tabChangeEvent">
    <b-tab title="程式碼" active>
      <div class="editer">
        <div>
          <div v-if="loading" class="alert alert-info show text-center">
            <strong>Loading JavaScript Compiler...</strong>
          </div>
          <div v-else class="clearfix">
            <form
              class="d-inline-block ml-2 mr-0 p-0 float-right"
              method="post"
              action="https://jsfiddle.net/api/post/library/pure/"
              target="_blank"
            >
              <input type="hidden" name="html" :value="fiddle_html" />
              <input type="hidden" name="js" :value="fiddle_js" />
              <input
                type="hidden"
                name="resources"
                :value="fiddle_dependencies"
              />
              <input type="hidden" name="css" value="body { padding: 1rem; }" />
              <input type="hidden" name="js_wrap" value="l" />
              <!-- <b-button size="sm" type="submit" :disabled="!isOk">導出至 JSFiddle</b-button> -->
              <b-button
                size="sm"
                variant="danger"
                :disabled="isDefault"
                @click="reset"
              >
                還原預設
              </b-button>
              <b-button size="sm" @click="jspanelClickEvent">{{
                jspanel.text
              }}</b-button>
            </form>
            <div
              class="d-inline-flex bd-highlight"
              style="font-size: 15px; padding-left: 10px; margin-top: 5px;"
            >
              目前編輯頁面：<a :href="github_page" target="_blank">{{
                $route.query.page
              }}</a>
            </div>
          </div>
        </div>

        <transition-group class="row" tag="div" name="flip">
          <div key="A" :class="full ? 'col-12' : 'col'">
            <transition-group class="row" tag="div" name="flip">
              <div key="A1" :class="`col-md-12 col-sm-12`">
                <!--Template-->
                <div class="card mt-2">
                  <div class="card-header card-outline-info">
                    <span>貼上程式</span>
                    <b-button
                      style="margin-left: 10px"
                      size="sm"
                      variant="outline-info"
                      class="float-right d-none d-md-inline-block"
                      @click="toggleFull"
                    >
                      <span>{{ full ? '半寬' : '全寬' }}</span>
                    </b-button>
                    <b-button
                      size="sm"
                      variant="outline-info"
                      class="float-right d-none d-md-inline-block"
                      @click="_run"
                    >
                      <span>檢查</span>
                    </b-button>
                  </div>
                  <codemirror
                    v-model="html"
                    id="code-editor"
                    mode="vue"
                  />
                </div>
              </div>
              <div
                key="A2"
                :class="`col-md-12 col-sm-12`"
                v-show="jspanel.show"
              >
                <div class="card mt-2">
                  <div class="card-header card-outline-warning">
                    <span>JS</span>
                    <b-button
                      size="sm"
                      variant="outline-info"
                      class="float-right d-none d-md-inline-block"
                      @click="toggleFull"
                    >
                      <span>{{ full ? '半寬' : '全寬' }}</span>
                    </b-button>
                  </div>
                  <codemirror v-model="js" mode="javascript" />
                </div>
              </div>
            </transition-group>
          </div>

          <div key="B" :class="`col-md-${vertical || full ? 12 : 6} col-sm-12`">
            <!--Console-->
            <div class="card mt-2">
              <div class="card-header card-outline-secondary">
                <span>錯誤顯示區</span>
                <b-button
                  v-if="messages.length"
                  size="sm"
                  variant="outline-danger"
                  class="float-right"
                  @click="clear"
                >
                  <span>清空</span>
                </b-button>
              </div>
              <transition-group
                tag="ul"
                name="flip-list"
                class="list-group list-group-flush play-log"
              >
                <li
                  v-if="!messages.length"
                  key="empty-console"
                  class="list-group-item"
                >
                  &nbsp;
                </li>
                <li
                  v-for="msg in messages"
                  :key="`console-${msg[2]}`"
                  class="list-group-item py-2 d-flex"
                  style="max-height: 500px;overflow-y: auto;"
                >
                  <b-badge
                    :variant="msg[0]"
                    class="mr-1"
                    style="font-size:90%;"
                  >
                    {{
                      msg[0] === 'danger'
                        ? '錯誤'
                        : msg[0] === 'warning'
                        ? '警告'
                        : '記錄'
                    }}
                  </b-badge>
                  <div
                    :class="[`text-${msg[0]}`, 'text-monospace', 'small']"
                    style="white-space: pre-wrap;"
                  >
                    {{ msg[1] }}
                  </div>
                </li>
              </transition-group>
            </div>
          </div>
        </transition-group>
      </div>
    </b-tab>
    <b-tab title="預覽">
      <div ref="result" id="style_change" />
    </b-tab>
    <b-tab title="提交修改">
      <div class="container" style="margin-top: 30px;">
        <div class="mb-3 row">
          <div class="col-12">
            <div class="spw">
              <em
                ><img
                  src="~assets/Prithviicon.png"
                  width="50px;"
                  alt=""
                  style="margin-right:20px;"
                />提交修改之前，請務必預覽修改後的程式是否如預期呈現，否則會被拒絕的哦！</em
              >
            </div>
            <ol>
              <li>
                複製所有程式碼 <b-button class="clip-btn" size="sm">點擊複製</b-button>
              </li>
              <li>
                <a :href="github_page" target="_blank">進入 github 頁面</a>
              </li>
              <li>
                點選編輯鈕(若沒註冊會進入登入頁面，完成註冊或登入後即可跳到此頁面)<br />
                <img src="~/assets/github_01.png" />
              </li>
              <li>
                刪除編輯區內所有程式碼，然後貼上剛剛複製的程式碼
              </li>
              <li>
                視窗拉到最下面，輸入修改內容概要，然後點選按鈕Propose file
                change<br />
                <img src="~/assets/github_02.png" />
              </li>
              <li>
                點選 Create pull request
              </li>
              <li>
                再次點選 Create pull request
              </li>
              <li>
                等待審核通過後會更新上網頁
              </li>
            </ol>
          </div>
        </div>
      </div>
    </b-tab>
  </b-tabs>
</template>

<script>
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import needsTranspiler from '../utils/needs-transpiler'
import axios from 'axios'
import Clipboard from 'clipboard'

const defaultJS = ``

const defaultHTML = ``

// Maximum age of localstorage before we revert back to defaults
// 7 days
const maxRetention = 7 * 24 * 60 * 60 * 1000

// Helper function to remove a node from it's parent's children
const removeNode = node =>
  node && node.parentNode && node.parentNode.removeChild(node)

export default {
  data() {
    return {
      html: '',
      js: '',
      isOk: false,
      messages: [],
      logIdx: 1, // used as the ":key" on console section for transition hooks
      vertical: false,
      full: false,
      loading: false,
      jspanel: {
        text: '開啟程式面版',
        show: false
      }
    }
  },
  computed: {
    isDefault() {
      // Check if editors contain default JS and Template
      return (
        this.js.trim() === defaultJS.trim() &&
        this.html.trim() === defaultHTML.trim()
      )
    },
    fiddle_dependencies() {
      return [
        '//unpkg.com/bootstrap/dist/css/bootstrap.min.css',
        '//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css',
        '//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js',
        '//unpkg.com/vue@latest/dist/vue.min.js',
        '//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js'
      ].join(',')
    },
    fiddle_js() {
      let js = this.js.trim() || '{}'
      const comma = js === '{}' ? '' : ','
      js = js.replace(/^\{/, `{\r\n  el: '#app'${comma}\r\n`)
      js = `new Vue(${js})`
      return `window.onload = function() {\r\n${js}\r\n}`
    },
    fiddle_html() {
      return `<div id='app'>\r\n${this.html.trim()}\r\n</div>`
    },
    fakeConsole() {
      const logger = this.log
      const clear = this.clear
      let oConsole, oInfo, oLog, oWarn, oError, oClear
      try {
        // Native console object & methods
        oConsole = window.console
        oInfo = window.console.info
        oLog = window.console.log
        oWarn = window.console.warn
        oError = window.console.error
        oClear = window.console.clear
      } catch (e) {}
      return {
        info: function() {
          try {
            logger('info', ...arguments)
            oInfo.apply(oConsole, arguments)
          } catch (e) {}
        },
        log: function() {
          try {
            logger('info', ...arguments)
            oLog.apply(oConsole, arguments)
          } catch (e) {}
        },
        warn: function() {
          try {
            logger('warning', ...arguments)
            oWarn.apply(oConsole, arguments)
          } catch (e) {}
        },
        error: function() {
          try {
            logger('danger', ...arguments)
            oError.apply(oConsole, arguments)
          } catch (e) {}
        },
        clear: function() {
          try {
            clear()
            oClear.apply(oConsole)
          } catch (e) {}
        }
      }
    },
    github() {
      return (
        'https://raw.githubusercontent.com/webrsb/aoetw/master/pages/' +
        this.$route.query.page +
        '.vue'
      )
    },
    github_page() {
      return (
        'https://github.com/webrsb/aoetw/blob/dev/pages/' +
        this.$route.query.page +
        '.vue'
      )
    }
  },
  created() {
    // Create some non reactive properties
    this.playVM = null
    this.contentUnWatch = null
    this.run = () => {}
    // Default code "transpiler"
    this.compiler = code => code
  },
  mounted() {
    var that = this
    this.getPageSource(this.github)
    new Clipboard('.clip-btn', {
      text: function(trigger) {
        return that.html
      }
    })
    // Load CSS
    var link = document.createElement('link')
    link.setAttribute('rel', 'stylesheet')
    link.setAttribute('type', 'text/css')
    link.setAttribute('href', 'http://aoetw.com/next/style.css')

    document.getElementsByTagName('body')[0].appendChild(link)
    this.$nextTick(() => {
      if (needsTranspiler) {
        // Start the loading indicator
        this.loading = true
        window && window.$nuxt && window.$nuxt.$loading.start()
        // Lazy load the babel transpiler
        import('../utils/compile-js' /* webpackChunkName: "compile-js" */).then(
          module => {
            // Update compiler reference
            this.compiler = module.default
            // Run the setup code
            this.doSetup()
            // Stop the loading indicator
            this.loading = false
            window && window.$nuxt && window.$nuxt.$loading.finish()
          }
        )
      } else {
        this.doSetup()
      }
    })
  },
  beforeUnmount() {
    if (this.contentUnWatch) {
      this.contentUnWatch()
    }
    if (!this.$isServer) {
      this.destroyVM()
    }
  },
  methods: {
    doSetup() {
      // Create our debounced runner
      // this.run = debounce(this._run, 500)
      // Set up our editor content watcher.
      this.contentUnWatch = this.$watch(
        () => this.js.trim() + '::' + this.html.trim(),
        (newVal, oldVal) => {
          this.run()
        }
      )
      // load our content into the editors
      // this.$nextTick(this.load)
    },
    destroyVM() {
      let vm = this.playVM
      if (vm) {
        let parent
        try {
          parent = vm.$parent
          vm.unmount()
          // removeNode(vm.$el)
          // vm.$el.innerHTML = ''
        } catch (err) {}
        try {
          parent.unmount()
        } catch (err) {}
      }
      this.playVM = vm = null
      this.$refs.result.innerHTML = ''
    },
    createVM() {
      const playground = this
      const js = this.js.trim() || '{}'
      let html = this.html.trim()
      let options = {}

      // Disable the export to fiddle button
      this.isOk = false

      if (html.length <= 6000) {
        html = html.replace(/(.|[\r\n])*<template>/, '')
        html = html.replace(/<\/template>(.|[\r\n])*/, '')
      } else {
        var start_100 = html.slice(0, 100)
        var html_origin = html.slice(100, -5000)
        var end_5000 = html.slice(-5000)
        start_100 = start_100.replace(/(.|[\r\n])*<template>/, '')
        end_5000 = end_5000.replace(/<\/template>(.|[\r\n])*/, '')
        html = start_100 + html_origin + end_5000
      }
      var rand = Math.random()
      html += '\n<a style="display: none">請無視此標籤' + rand + '</a>'

      // Test and assign options JavaScript
      try {
        // Options are eval'ed in our variable scope, so we can override
        // the "global" console reference just for the user app
        const code = this.compiler(`;options = ${js};`)
        /* eslint-disable no-eval */
        eval(`console = this.fakeConsole; ${code}`)
        /* eslint-enable no-eval */
      } catch (err) {
        this.errHandler(err, 'javascript')
        window.console.error('Error in javascript', err)
        return
      }

      // Sanitize template possibilities
      if (
        !(
          html ||
          typeof options.template === 'string' ||
          typeof options.render === 'function'
        )
      ) {
        this.errHandler('No template or render function provided', 'template')
        return
      } else if (
        !html &&
        typeof options.template === 'string' &&
        options.template.charAt(0) === '#'
      ) {
        this.errHandler('Do not set template to an element ID', 'template')
        return
      }
      if (options.el) {
        this.errHandler('Do not set "el" property', 'javascript')
        return
      }
      if (options.render && typeof options.render !== 'function') {
        this.errHandler('render must be a function', 'javascript')
        return
      }
      if (!options.render) {
        options.template = `<div id="playground-app">${options.template ||
          html}</div>`
      } else {
        delete options.template
      }

      // Vue's errorCapture doesn't always handle errors in methods, so we
      // wrap any methods with a try/catch handler so we can show the error in our GUI console
      // https://github.com/vuejs/vue/issues/8568
      // Doesn't handle errors in async methods
      if (options.methods) {
        Object.keys(options.methods).forEach(methodName => {
          const fn = options.methods[methodName]
          if (typeof fn !== 'function') {
            this.errorHandler(
              `TypeError: ${methodName} is not a function`,
              'methods'
            )
          } else {
            // Replace it with a wrapped method
            options.methods[methodName] = function() {
              try {
                return fn.apply(this, arguments)
              } catch (err) {
                playground.errHandler(err, `method "${methodName}"`)
              }
            }
          }
        })
      }

      // Try and buld the user app
      try {
        let holder = document.createElement('div')
        this.$refs.result.appendChild(holder)
        this.playVM = createApp(Object.assign({}, options, {
            // Router needed for tooltips/popovers so they hide when docs route changes
            router: this.$router,
            // We set a fake parent so we can capture most runtime and render errors (error boundary)
            parent: createApp({
              template: '<span />',
              errorCaptured(err, vm, info) {
                // pass error to playground error handler
                playground.errHandler(err, info)
                // dont propegate to parent/global error handler!
                return false
              }
            }),
            components: {
              NuxtLink: {
                props: ['to'],
                template: `
                  <a :href="to"><slot></slot></a>
                `
              },
              Tree: {
                template: `
                  <h2>科技樹狀圖選單(替代)</h2>
                `
              },
              Gallery: {
                template: `
                  <div><slot></slot></div>
                `
              }
            }
          })
        )

        this.playVM.mount(
          // set the app mountpoint
          holder
        )
      } catch (err) {
        this.destroyVM()
        this.errHandler(err, 'app create')
        return
      }

      // We got this far, so save the JS/HTML changes to localStorage and enable export button
      this.isOk = true
      this.save()
      let img_tags = document
        .getElementById('style_change')
        .querySelectorAll('img')

      for (var key = 0; key < img_tags.length; key++) {
        let src = img_tags[key].getAttribute('src')

        if (src !== '') {
          src = src.replace('~assets/', 'http://www.aoetw.com/img/')
          img_tags[key].setAttribute('src', src)
        }
      }
    },
    errHandler(err, info) {
      this.log('danger', `Error in ${info}: ${String(err)}`)
      this.destroyVM()
    },
    _run() {
      if (this.$isServer) {
        return
      }
      // Destroy old VM if exists
      this.destroyVM()
      // clear the log
      this.clear()
      // create and render the instance
      this.createVM()
    },
    toggleVertical() {
      this.vertical = !this.vertical
    },
    toggleFull() {
      this.full = !this.full
    },
    log(tag, ...args) {
      // We have to ignore props mutation warning due to vue bug when we have two instances
      if (String(args[0]).indexOf('Avoid mutating a prop directly') !== -1) {
        return
      }
      const msg = args.map(String).join(' ')
      if (
        this.messages.length &&
        msg.indexOf('Error in render') !== -1 &&
        msg === this.messages[0][1]
      ) {
        // prevent duplicate render error messages
        return
      }
      if (this.messages.length > 10) {
        this.messages.splice(10)
      }
      this.messages.unshift([tag, msg, this.logIdx++])
    },
    clear() {
      this.logIdx = 1
      this.messages.splice(0)
    },
    reset() {
      // Needed to trick codemirror component to reload contents
      this.js = ''
      this.html = ''
      this.getPageSource(this.github)
      // this.$nextTick(() => {
      //   this.js = defaultJS.trim()
      //   this.html = defaultHTML.trim()
      //   this.save()
      // })
    },
    load() {
      const ls = window && window.localStorage
      if (!ls) {
        this.js = defaultJS.trim()
        this.html = defaultHTML.trim()
        return
      }
      const ts = parseInt(ls.getItem('playground_ts'), 10) || 0
      if (Date.now() - ts > maxRetention) {
        // clear local storage if it is old
        ls.removeItem('playground_js')
        ls.removeItem('playground_html')
        ls.removeItem('playground_ts')
      }
      this.js = ls.getItem('playground_js') || defaultJS.trim()
      this.html = ls.getItem('playground_html') || defaultHTML.trim()
    },
    save() {
      if (typeof window === 'undefined' || !window.localStorage) {
        return
      }
      try {
        window.localStorage.setItem('playground_js', this.js)
        window.localStorage.setItem('playground_html', this.html)
        window.localStorage.setItem('playground_ts', String(Date.now()))
      } catch (err) {
        // silently ignore errors on safari iOS private mode
      }
    },
    jspanelClickEvent() {
      if (this.jspanel.show) {
        this.jspanel.show = false
        this.jspanel.text = '開啟程式面版'
      } else {
        this.jspanel.show = true
        this.jspanel.text = '關閉程式面版'
      }
    },
    tabChangeEvent(index) {
      if (index === 1) {
        this._run()
      }
    },
    getPageSource(url) {
      axios
        .get(url)
        .then(res => {
          this.html = res.data
        })
        .catch(err => {
          if (err.response.status !== 404) {
            return error({
              statusCode: 500,
              message: store.state.lang.text.an_error_occured
            })
          }
          return error({
            statusCode: 404,
            message: store.state.lang.text.api_page_not_found
          })
        })
    }
  },
  watch: {
    '$route.query.page'(val, oldVal) {
      this.getPageSource(this.github)
    }
  }
}
</script>

<style>
.editer {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
    'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji',
    'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
  font-size: 0.7rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

.play.tabs > div:first-of-type {
  position: fixed;
  background-color: #f5f5f5;
  z-index: 300;
  width: 100%;
}

.tab-content {
  padding-top: 46px;
}

.flip-move {
  transition: all 0.3s;
}
.play-log .list-group-item {
  transition: all 0.3s;
}
.flip-list-enter,
.flip-list-leave-to {
  opacity: 0;
}
.flip-list-leave-active {
  position: absolute;
}
.flip-list-move {
  transform: 0.3s;
}
</style>
