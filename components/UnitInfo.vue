<template>
  <div>
    <table
      class="table-bordered"
      width="100%"
      v-for="(target, inx) in getTarget(id.ID, type)"
      :key="inx"
    >
      <tr>
        <td class="unit" colspan="2" style="background-color:#3c763d;">
          <div class="unititle2">{{ locale[target.LanguageNameId] }}</div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="unititle">
            <img :src="target.img" class="img-fluid" alt="" />
          </div>
        </td>
      </tr>
      <tr>
        <td class="unit" colspan="2" style="background-color:#3c763d;">
          <div class="unititle2">單位介紹</div>
        </td>
      </tr>
      <tr>
        <td class="unit3">類型</td>
        <td class="unit4">
          <!-- <nuxt-link to="/units/Archer_Units">射手</nuxt-link> -->
          <span v-for="(item, index) in unitClass(target)" :key="index">
            <nuxt-link v-if="item.link" :to="item.link">{{
              item.locale
            }}</nuxt-link>
            <span v-else>{{ item.locale }}</span
            ><span v-if="index < unitClass(target).length - 1">、</span>
          </span>
        </td>
      </tr>
      <tr>
        <td class="unit3">文明</td>
        <td class="unit4">
          <!-- 除了<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>之外的所有文明 -->
        </td>
      </tr>
      <tr>
        <td class="unit3">時代</td>
        <td class="unit4">
          <img class="gg" :src="img" alt="" /><nuxt-link
            to="/techs/age/Castle_Age"
            >{{ ageId.zh }}</nuxt-link
          >
        </td>
      </tr>
      <tr>
        <td class="unit3">訓練於</td>
        <td class="unit4">
          <!-- <img
            class="gg"
            width="25px"
            src="~assets/archery_range.png"
            alt=""
          /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link> -->
          {{ getTrainLocation(target.TrainLocationID) }}
        </td>
      </tr>
      <tr>
        <td class="unit3">訓練時間</td>
        <td class="unit4">{{ target.TrainTime }}秒</td>
      </tr>
      <tr>
        <td class="unit" colspan="2" style="background-color:#3c763d;">
          <div class="unititle2">成本</div>
        </td>
      </tr>
      <tr v-for="(item, index) in costData(target)" :key="index">
        <td class="unit3">
          <nuxt-link :to="item.link">{{ item.locale }}</nuxt-link>
        </td>
        <td class="unit4">{{ item.value }}</td>
      </tr>
      <tr>
        <td class="unit" colspan="2" style="background-color:#3c763d;">
          <div class="unititle2">數據</div>
        </td>
      </tr>
      <tr>
        <td class="unit3">血量</td>
        <td class="unit4">{{ target.HP }}</td>
      </tr>
      <tr>
        <td class="unit3">攻擊</td>
        <td class="unit4">
          {{ target.Attack
          }}<!-- (遠程) -->
        </td>
      </tr>
      <tr>
        <td class="unit3">攻擊加成</td>
        <td class="unit4">
          <span v-for="(item, index) in bonusAttack(target)" :key="index"
            >+{{ item.value }}對<nuxt-link v-if="item.link" :to="item.link">{{
              item.locale
            }}</nuxt-link>
            <span v-else>{{ item.locale }}</span
            ><span v-if="index < bonusAttack(target).length - 1">、</span>
          </span>
        </td>
      </tr>
      <tr>
        <td class="unit3">射速</td>
        <td class="unit4">{{ target.ReloadTime }}</td>
      </tr>
      <tr v-if="target.FrameDelay > 0">
        <td class="unit3">
          <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
        </td>
        <td class="unit4">{{ target.FrameDelay }}</td>
      </tr>
      <tr v-if="target.Range > 0">
        <td class="unit3">射程</td>
        <td class="unit4">{{ target.Range }}</td>
      </tr>
      <tr>
        <td class="unit3">命中率</td>
        <td class="unit4">{{ target.AccuracyPercent }}%</td>
      </tr>
      <tr v-if="target.ProjectileSpeed">
        <td class="unit3">投射物速度</td>
        <td class="unit4">{{ target.ProjectileSpeed }}</td>
      </tr>
      <tr>
        <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
        <td class="unit4">{{ target.MeleeArmor }}</td>
      </tr>
      <tr>
        <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
        <td class="unit4">{{ target.PierceArmor }}</td>
      </tr>
      <tr>
        <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
        <td class="unit4">
          <span v-for="(item, index) in armourTypes(target)" :key="index">
            <nuxt-link v-if="item.link" :to="item.link">{{
              item.locale
            }}</nuxt-link>
            <span v-else>{{ item.locale }}</span
            ><span v-if="index < armourTypes(target).length - 1">、</span>
          </span>
        </td>
      </tr>
      <tr>
        <td class="unit3">跑速</td>
        <td class="unit4">{{ target.Speed }}</td>
      </tr>
      <tr>
        <td class="unit3">視野</td>
        <td class="unit4">{{ target.LineOfSight }}</td>
      </tr>
      <tr>
        <td class="unit" colspan="2" style="background-color:#3c763d;">
          <div class="unititle2">單位演變</div>
        </td>
      </tr>
      <tr v-for="(item, inx) in getTarget(preId.ID, type)" :key="inx">
        <td class="unit3">從升級</td>
        <td class="unit4">
          <img class="gg" :src="preId.img" alt="" /><nuxt-link
            :to="preId.page"
            >{{ locale[item.LanguageNameId] }}</nuxt-link
          >
        </td>
      </tr>
      <tr v-for="(item, inx) in getTarget(nextId.ID, type)" :key="inx">
        <td class="unit3">升級到</td>
        <td class="unit4">
          <img class="gg" :src="nextId.img" alt="" /><nuxt-link
            :to="nextId.page"
            >{{ locale[item.LanguageNameId] }}</nuxt-link
          >
        </td>
      </tr>
      <tr v-for="(item, inx) in getTarget(upTechId.ID, Type.Tech)" :key="inx">
        <td class="unit3">升級成本</td>
        <td class="unit4">
          <span v-for="(cost, inx2) in costData(item)" :key="inx2">
            <img class="gg" :src="upTechId.img" alt="" />{{ cost.value
            }}{{ cost.locale }}
          </span>
          <!-- <img class="gg" src="~assets/arbalest.png" alt="" />350<nuxt-link
            to="/resource/Food"
            >食物</nuxt-link
          >300黃金 -->
        </td>
      </tr>
      <tr>
        <td class="unit3">升級時間</td>
        <!-- <td class="unit4">50秒</td> -->
      </tr>
    </table>
  </div>
</template>

<script>
import { Type, ArmourClass, UnitClass, Resource } from '../constant/enums.js'
import data from '../constant/output.json'
import locale from '../constant/locale.json'

export default {
  props: {
    type: {
      require: true
    },
    id: {
      require: true
    },
    image: {},
    preId: {},
    nextId: {},
    upTechId: {},
    ageId: {}
  },
  data() {
    return {
      data,
      locale,
      Type
    }
  },
  methods: {
    getArmourData(data) {
      const result = []

      data.forEach(val => {
        const ac = val.Class

        if (ac in ArmourClass) {
          result.push({
            locale: ArmourClass[ac].zh || ArmourClass[ac].name,
            value: val.Amount,
            link: ArmourClass[ac].page
          })
        }
      })

      return result
    },
    getTrainLocation(trainLocationId) {
      const building = data.buildings[trainLocationId]
      if (typeof building !== 'undefined') {
        return locale[building.LanguageNameId]
      } else {
        return ''
      }
    },
    getTarget(id, type) {
      const typeData = data[type]
      if (typeof typeData !== 'undefined') {
        return typeData[id]
        if (typeof item !== 'undefined') {
          return [item]
        }
      }

      return []
    },
    costData(target) {
      const costs = target.Cost
      const result = []

      Object.keys(costs).forEach(val => {
        if (val in Resource) {
          result.push({
            locale: Resource[val],
            value: costs[val],
            link: '/resource/' + val
          })
        }
      })

      return result
    },
    bonusAttack(target) {
      const attacks = target.Attacks

      return this.getArmourData(attacks)
    },
    armourTypes(target) {
      const armours = target.Armours

      return this.getArmourData(armours)
    },
    unitClass(target) {
      const result = []
      if (target.Class in UnitClass) {
        UnitClass[this.target.Class].forEach(cl => {
          result.push({
            locale: cl.zh || cl.name,
            link: cl.page
          })
        })
      }

      return result
    }
  },
  computed: {},
  mounted() {
    console.log(this.target)
  }
}
</script>
<style></style>
