<template>
  <b-form-input
    size="sm"
    class="mr-sm-3"
    id="algolia"
    type="text"
    placeholder="搜尋"
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
    if (scriptInjected) {
      return window.docsearch ? scriptLoaded() : null
    }
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
        apiKey: '6dafd30e17d18a8243b814b94ece126f',
        appId: 'YDP87BGJ2G',
        indexName: 'aoetw',
        inputSelector: '#algolia',
        debug: true // Set debug to true if you want to inspect the dropdown
      })
    }
  }
}
</script>
<style>
@media (max-width: 768px) {
  .algolia-autocomplete .ds-dropdown-menu {
    min-width: 365px !important;
  }

  input#algolia {
    width: 9em !important;
  }
}

@media (max-width: 375px) {
  .algolia-autocomplete .ds-dropdown-menu {
    min-width: 300px !important;
  }
}

@media (min-width: 1200px) {
  input#algolia {
    width: 12em !important;
  }
}

input#algolia {
  background-color: #343a40;
  font-size: 16px;
  width: 7em;
  border-color: #7b7b7b;
  color: #e0e0e0;
}

input#algolia::placeholder {
  color: #828282;
}
</style>
