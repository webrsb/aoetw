import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const state = () => ({
  chat: {
    show: false,
    text: ''
  },
  de_tip: true
})

export const mutations = {
  toggleShow (state) {
    state.chat.show = !state.chat.show
  },
  setText (state, payload) {
    state.chat.text = payload
  },
  closeTip (state) {
    state.de_tip = false
  },
}