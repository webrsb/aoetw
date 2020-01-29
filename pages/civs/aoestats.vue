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
            <a href="https://voobly.com/" target="_blank">Voobly</a> 提供。並由
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
            <template slot="civilization" slot-scope="data">
              <a
                :href="
                  `https://aoestats.io/civ/${data.value}?elo=${currentElo}`
                "
                target="_blank"
                ><img class="gg" :src="getCivImg(data)"
              /></a>
              <nuxt-link :to="'/civs/' + data.value">{{
                getCivChinese(data)
              }}</nuxt-link>
            </template>
            <template slot="win_rate" slot-scope="data">
              <span :style="{ color: getColor(data) }">{{ data.value }}</span>
            </template>
            <div slot="table-busy" class="text-center text-dark my-2">
              <b-spinner class="align-middle" variant="dark"></b-spinner>
              <strong>載入中...</strong>
            </div>
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
  Aztecs: { name: '阿茲特克', img: require('@/assets/JaguarWarriorIcon.png') },
  Berbers: { name: '柏柏', img: require('@/assets/CamelArcherIcon.png') },
  Britons: { name: '不列顛', img: require('@/assets/LongbowmanIcon.png') },
  Burmese: { name: '緬甸', img: require('@/assets/Arambaiicon.png') },
  Byzantines: { name: '拜占庭', img: require('@/assets/CataphractIcon.png') },
  Celts: { name: '塞爾特', img: require('@/assets/WBRSK.png') },
  Chinese: { name: '中國', img: require('@/assets/ChuKoNuIcon.png') },
  Ethiopians: { name: '衣索比亞', img: require('@/assets/ShotelIcon.png') },
  Franks: { name: '法蘭克', img: require('@/assets/TAXEM.png') },
  Goths: { name: '哥德', img: require('@/assets/HuskarlIcon.png') },
  Huns: { name: '匈人', img: require('@/assets/TarkanIcon.png') },
  Incas: { name: '印加', img: require('@/assets/Kamayuk_Icon.jpg') },
  Indians: { name: '印度', img: require('@/assets/ElephantArcherIcon.png') },
  Italians: {
    name: '義大利',
    img: require('@/assets/New_Genoese_Crossbowman.png')
  },
  Japanese: { name: '日本', img: require('@/assets/SMURI.png') },
  Khmer: { name: '高棉', img: require('@/assets/Ballistaelephanticon.png') },
  Koreans: { name: '朝鮮', img: require('@/assets/WarWagonIcon.png') },
  Magyars: { name: '馬札爾', img: require('@/assets/Magyar_Huszar_icon.png') },
  Malay: { name: '馬來', img: require('@/assets/Karambitwarrioricon.png') },
  Malians: { name: '馬利', img: require('@/assets/GbetoIcon.png') },
  Mayans: { name: '馬雅', img: require('@/assets/PlumedArcherIcon.png') },
  Mongols: { name: '蒙古', img: require('@/assets/MangudaiIcon.png') },
  Persians: { name: '波斯', img: require('@/assets/WarElephantIcon.png') },
  Portuguese: { name: '葡萄牙', img: require('@/assets/OrganGunIcon.png') },
  Saracens: { name: '薩拉森', img: require('@/assets/Saracenmamluk_icon.png') },
  Slavs: { name: '斯拉夫', img: require('@/assets/New_Boyar.png') },
  Spanish: { name: '西班牙', img: require('@/assets/ConquistadorIcon.png') },
  Teutons: { name: '條頓', img: require('@/assets/Crusade_avatar.png') },
  Turks: { name: '土耳其', img: require('@/assets/JanissaryIcon.png') },
  Vietnamese: { name: '越南', img: require('@/assets/RattanarcherIcon2.png') },
  Vikings: { name: '維京', img: require('@/assets/VBRSK.png') }
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
        { key: 'play_rate', label: '遊玩率', sortable: true },
        { key: 'avg_total_score', label: '分數', sortable: true },
        { key: 'avg_research_count', label: '研發數', sortable: true },
        { key: 'avg_feudal_time', label: '升封建時間', sortable: true },
        { key: 'avg_castle_time', label: '升城堡時間', sortable: true },
        { key: 'avg_imperial_time', label: '升帝王時間', sortable: true },
        { key: 'avg_game_length', label: '遊戲時間', sortable: true }
      ],
      items: [],
      scoreBtn: [
        { caption: 'All', state: true },
        { caption: '<1500', state: false },
        { caption: '1500-1600', state: false },
        { caption: '1600-1750', state: false },
        { caption: '1750-2000', state: false },
        { caption: '2000+', state: false }
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
    getCivChinese: origin => civ_wrap[origin.value].name,
    getCivImg: origin => civ_wrap[origin.value].img,
    getColor(data) {
      let rate = parseFloat(data.value)

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
  },
  components: {}
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
