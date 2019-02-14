<template>
  <div class="chat_area" v-show="texts.length > 0">
    <ul>
      <li v-for="(item, index) in display" :key="index">
        <div v-if="item" style="padding: 2px; background-color: rgba(255, 255, 255, 0.8);">{{ item }}</div>
        <div style="padding: 2px; " v-else>&nbsp;</div>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  data () {
    return {
      texts: []
    }
  },
  props: ['rows', 'duration'],
  mounted () {
    this.$on('push', this.pushText)
  },
  computed: {
    display () {
      let item = new Array(this.rows)
      let diff = this.rows - this.texts.length

      for (let i = 0; i < this.texts.length; i++) {
        item[i + diff] = this.texts[i].name + ': ' +this.texts[i].text
      }

      return item
    }
  },
  methods: {
    pushText ({ color, text }) {
      if (text !== '') {
        let timer = setTimeout(this.shift, this.duration)

        if (this.texts.length >= this.rows) {
          clearTimeout(this.texts[0].timer, this.shift)
          this.shift()
        }

        this.texts.push({ text, timer, name: '玩家' })
      }
    },
    shift () {
      this.texts.shift()
    }
  }
}
</script>
<style>
  .chat_area > ul > li {
    color: blue;
    font-size: 17px;
    line-height: 17px;
  }

  .chat_area > ul {
    list-style-type: none;
  }

  .chat_area {
    z-index: 1001;
    position: fixed;
    top: 100px;
    left: 4px;
  }
</style>