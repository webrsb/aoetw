<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>文明勝率</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>文明勝率</b>原始資料由
            <a href="https://aoe2.net/" target="_blank">aoe2.net</a> 提供。並由
            <a href="https://aoestats.io/" target="_blank">aoestats.io</a>
            計算整理。若要查詢更詳細資料，請點選文明旁邊的圖示。
          </p>
          <b-button-group>
            <b-button
              size="sm"
              v-for="(btn, idx) in scoreBtn"
              :key="idx"
              :pressed.sync="btn.state"
              variant="primary"
              @click="changeElo(idx)"
              >{{ btn.caption }}</b-button
            >
          </b-button-group>
          <b-table
            :items="items"
            :fields="fields"
            :sort-by.sync="sortBy"
            :sort-desc.sync="sortDesc"
            :busy="isLoadData"
            striped
            small
          >
            <template v-slot:cell(civilization)="data">
              <a
                :href="
                  `https://aoestats.io/civ/${
                    data.item.civilization
                  }/${currentElo}`
                "
                target="_blank"
                ><img class="gg" :src="getCivImg(data.item.civilization)"
              /></a>
              <nuxt-link :to="'/civs/' + data.item.civilization">{{
                getCivChinese(data.item.civilization)
              }}</nuxt-link>
            </template>
            <template v-slot:cell(win_rate)="data">
              <span :style="{ color: getColor(data.item.win_rate) }">{{
                data.item.win_rate
              }}</span>
            </template>
            <template v-slot:table-busy>
              <div class="text-center text-dark my-2">
                <b-spinner class="align-middle" variant="dark"></b-spinner>
                <strong>載入中...</strong>
              </div>
            </template>
          </b-table>
          <em
            >此表格每2小時從<a href="https://aoestats.io/stats" target="_blank"
              >aoestats.io</a
            >更新資料</em
          >
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios'
import Britons from '@/assets/LongbowmanIcon.png'

const civ_wrap = {
  Aztecs: { name: '阿茲特克', img: require('@/assets/aztecs.png') },
  Berbers: { name: '柏柏', img: require('@/assets/berbers.png') },
  Britons: { name: '不列顛', img: require('@/assets/britons.png') },
  Burmese: { name: '緬甸', img: require('@/assets/burmese.png') },
  Byzantines: { name: '拜占庭', img: require('@/assets/byzantines.png') },
  Celts: { name: '塞爾特', img: require('@/assets/celts.png') },
  Chinese: { name: '中國', img: require('@/assets/chinese.png') },
  Ethiopians: { name: '衣索比亞', img: require('@/assets/ethiopians.png') },
  Franks: { name: '法蘭克', img: require('@/assets/franks.png') },
  Goths: { name: '哥德', img: require('@/assets/goths.png') },
  Huns: { name: '匈人', img: require('@/assets/huns.png') },
  Incas: { name: '印加', img: require('@/assets/incas.png') },
  Indians: { name: '印度', img: require('@/assets/indians.png') },
  Italians: {
    name: '義大利',
    img: require('@/assets/italians.png')
  },
  Japanese: { name: '日本', img: require('@/assets/japanese.png') },
  Khmer: { name: '高棉', img: require('@/assets/khmer.png') },
  Koreans: { name: '朝鮮', img: require('@/assets/koreans.png') },
  Magyars: { name: '馬札爾', img: require('@/assets/magyars.png') },
  Malay: { name: '馬來', img: require('@/assets/malay.png') },
  Malians: { name: '馬利', img: require('@/assets/malians.png') },
  Mayans: { name: '馬雅', img: require('@/assets/mayans.png') },
  Mongols: { name: '蒙古', img: require('@/assets/mongols.png') },
  Persians: { name: '波斯', img: require('@/assets/persians.png') },
  Portuguese: { name: '葡萄牙', img: require('@/assets/portuguese.png') },
  Saracens: { name: '薩拉森', img: require('@/assets/saracens.png') },
  Slavs: { name: '斯拉夫', img: require('@/assets/slavs.png') },
  Spanish: { name: '西班牙', img: require('@/assets/spanish.png') },
  Teutons: { name: '條頓', img: require('@/assets/teutons.png') },
  Turks: { name: '土耳其', img: require('@/assets/turks.png') },
  Vietnamese: { name: '越南', img: require('@/assets/vietnamese.png') },
  Vikings: { name: '維京', img: require('@/assets/vikings.png') },
  Lithuanians: { name: '立陶宛', img: require('@/assets/lithuanians.png') },
  Tatars: { name: '韃靼', img: require('@/assets/tatars.png') },
  Bulgarians: { name: '保加利亞', img: require('@/assets/bulgarians.png') },
  Cumans: { name: '庫曼', img: require('@/assets/cumans.png') }
}

export default {
  layout: 'allciv',
  head() {
    return {
      meta: [{ name: 'viewport', content: '' }]
    }
  },
  data() {
    return {
      sortBy: 'win_rate',
      sortDesc: true,
      fields: [
        { key: 'civilization', label: '文明', sortable: true },
        { key: 'win_rate', label: '勝率', sortable: true },
        { key: 'win_rate_diff', label: '', sortable: false },
        { key: 'play_rate', label: '遊玩率', sortable: true },
        { key: 'play_rate_diff', label: '', sortable: false },
        { key: 'avg_game_length', label: '遊戲時間', sortable: true }
      ],
      items: [],
      scoreBtn: [
        { caption: 'All', state: true },
        { caption: '<1000', state: false },
        { caption: '1000-1250', state: false },
        { caption: '1250-1650', state: false },
        { caption: '1650+', state: false }
      ],
      isLoadData: false
    }
  },
  mounted() {
    this.updateData()
  },
  computed: {
    currentElo() {
      let result = this.scoreBtn.find(item => {
        return item.state
      })

      return result.caption
    }
  },
  methods: {
    getCivChinese: origin => civ_wrap[origin].name,
    getCivImg: origin => civ_wrap[origin].img,
    getColor(data) {
      let rate = parseFloat(data)

      if (rate >= 50) {
        return 'green'
      } else if (rate < 40) {
        return 'red'
      } else {
        return '#806000'
      }
    },
    updateData(elo = 0) {
      var that = this
      this.isLoadData = true
      axios
        .get(`http://aoetw.com/aoestats/getdata.php?elo=${elo}`)
        .then(res => {
          that.items = res.data
          this.isLoadData = false
        })
        .catch(err => {
          this.$bvToast.toast(`資料載入失敗 ${this.toastCount}`, {
            autoHideDelay: 5000,
            appendToast: false
          })
        })
    },
    changeElo(idx) {
      // this.items = []
      this.updateData(idx)

      for (let key in this.scoreBtn) {
        this.scoreBtn[key].state = false
      }

      this.scoreBtn[idx].state = true
    }
  }
}
</script>
<style>
.table th,
.table td {
  white-space: nowrap;
}

.table.b-table > thead > tr > th[aria-sort]::before,
.table.b-table > tfoot > tr > th[aria-sort]::before {
  content: '';
}
</style>
