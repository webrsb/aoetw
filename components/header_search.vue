<template>
  <b-form-input
    size="sm"
    class="mr-sm-2"
    id="algolia"
    type="text"
    placeholder="請輸入關鍵字搜尋"
  />
</template>

<script>
let scriptInjected = false
let callbacks = []
let onScriptLoaded = cb => callbacks.push(cb)
let scriptLoaded = () => callbacks.forEach(cb => cb())
export default {
  mounted() {
    onScriptLoaded(() => this.addInstantSearch())
    if (scriptInjected) return
    // Load JS
    const script = document.createElement('script')
    script.setAttribute('type', 'text/javascript')
    script.setAttribute(
      'src',
      '//cdn.jsdelivr.net/docsearch.js/2/docsearch.min.js'
    )
    document.getElementsByTagName('body')[0].appendChild(script)
    script.onload = scriptLoaded
    // Load CSS
    var link = document.createElement('link')
    link.setAttribute('rel', 'stylesheet')
    link.setAttribute('type', 'text/css')
    link.setAttribute(
      'href',
      'https://cdn.jsdelivr.net/docsearch.js/2/docsearch.min.css'
    )
    document.getElementsByTagName('body')[0].appendChild(link)
    scriptInjected = true
  },
  methods: {
    addInstantSearch() {
      window.docsearch({
        apiKey: 'ffdf87071942648caf147e59d2a97368',
        appId: 'VI0DDXCIA7',
        indexName: 'aoetw',
        inputSelector: '#algolia',
        debug: true // Set debug to true if you want to inspect the dropdown
      })
    }
  }
}
</script>
