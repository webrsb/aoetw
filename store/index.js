import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const state = () => ({
  chat: {
    show: false,
    text: ''
  }
})

export const mutations = {
  toggleShow (state) {
    state.chat.show = !state.chat.show
  },
  setText (state, payload) {
    state.chat.text = payload
  }
}