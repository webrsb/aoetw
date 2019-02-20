<template>
  <div>
    <div>
      <show-chat :rows="6" :duration="10000" ref="show_chat"></show-chat>
    </div>
    <div v-show="show" class="chat-component">
      <div>
        <input class="chat-input" v-model="text" ref="input" />
        <img src="~assets/chat.png" draggable="false" />
      </div>
    </div>
  </div>
</template>

<script>
import taunts_mappning from '~/utils/taunts-mapping.json'
import showChat from '~/components/show_chat'

export default {
  data() {
    return {}
  },
  mounted() {
    document.addEventListener('keydown', this.emitEnterEvent)
  },
  destroyed() {
    document.removeEventListener('keydown', this.emitEnterEvent)
  },
  computed: {
    show() {
      return this.$store.state.chat.show
    },
    text: {
      get() {
        return this.$store.state.chat.text
      },
      set(text) {
        this.$store.commit('setText', text)
      }
    },
    STATIC_PATH() {
      let base = this.$router.options.base
      return base.charAt(base.length - 1) === '/' ? base : base + '/'
    }
  },
  methods: {
    emitEnterEvent(e) {
      if (e.keyCode === 13) {
        this.$store.commit('toggleShow')

        if (this.show) {
          this.$nextTick(() => {
            this.$refs.input.focus()
          })
        } else {
          console.log(this.$refs.show_chat)
          this.$refs.show_chat.$emit('push', { text: this.text })
          this.soundEffect(this.text)
          this.$store.commit('setText', '')
        }
      }
    },
    soundEffect(text) {
      if (text === '' || text.trim() === '' || isNaN(text.charAt(0))) {
        return
      }

      let file_name = taunts_mappning[parseInt(text)]

      if (typeof file_name !== 'undefined') {
        let audio = new Audio()

        audio.src = `${this.STATIC_PATH}voice/${file_name}`
        audio.currentTime = 0
        audio.play()
      }
    }
  },
  components: {
    showChat
  }
}
</script>

<style>
.chat-component {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 546px;
  height: 31px;
  margin-top: -15px; /*set to a negative number 1/2 of your height*/
  margin-left: -273px; /*set to a negative number 1/2 of your width*/
  z-index: 1000;
}

.chat-input {
  position: absolute;
  left: 134px;
  top: 4px;
  width: 400px;
  color: white;
  outline: none;
  right: -3px;
  -webkit-appearance: textfield;
  background-color: inherit;
  -webkit-rtl-ordering: logical;
  border-style: none;
  font-size: 16px;
}
</style>
