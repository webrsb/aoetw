<template>
  <table class="table-bordered" width="100%">
    <tr>
      <td class="unit" colspan="2" style="background-color:#3c763d;">
        <div class="unititle2">{{ locale[target.LanguageNameId] }}</div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div class="unititle">
          <img :src="id.img" class="img-fluid" alt="" />
        </div>
      </td>
    </tr>
    <tr>
      <td class="unit" colspan="2" style="background-color:#3c763d;">
        <div class="unititle2">概要</div>
      </td>
    </tr>
    <tr>
      <td class="unit3">類型</td>
      <td class="unit4">
        <!-- <nuxt-link to="/units/Archer_Units">射手</nuxt-link> -->
      </td>
    </tr>
    <tr>
      <td class="unit3">文明</td>
      <td class="unit4">
        <!-- 除了<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>之外的所有文明 -->
      </td>
    </tr>
    <tr v-if="age">
      <td class="unit3">時代</td>
      <td class="unit4">
        <img class="gg" :src="age.img" alt="" /><nuxt-link :to="age.page">{{
          age.zh
        }}</nuxt-link>
      </td>
    </tr>
    <tr v-if="type !== Type.Building">
      <td class="unit3">訓練於</td>
      <td class="unit4">
        {{ getTrainLocation(target.TrainLocationID) }}
      </td>
    </tr>
    <tr>
      <td v-if="type === Type.Building" class="unit3">建造時間</td>
      <td v-else-if="type === Type.Unit" class="unit3">訓練時間</td>
      <td v-else-if="type === Type.Tech" class="unit3">研發時間</td>
      <td class="unit4">
        <PerAgeData
          :target="target"
          :perAge="perAge"
          dataKey="TrainTime"
          unit="秒"
        />
      </td>
    </tr>
    <tr>
      <td class="unit" colspan="2" style="background-color:#3c763d;">
        <div class="unititle2">成本</div>
      </td>
    </tr>
    <tr v-for="(item, index) in costData(target)" :key="index">
      <td class="unit3">
        <nuxt-link :to="item.link" v-if="item.link">{{
          item.locale
        }}</nuxt-link>
      </td>
      <td class="unit4">{{ item.value }}</td>
    </tr>
    <tr>
      <td class="unit" colspan="2" style="background-color:#3c763d;">
        <div class="unititle2">數據</div>
      </td>
    </tr>
    <tr v-if="target.Size">
      <td class="unit3">尺寸</td>
      <td class="unit4">{{ target.Size.X }} × {{ target.Size.Y }}</td>
    </tr>
    <tr v-if="target.GarrisonCapacity > 0">
      <td class="unit3">駐軍</td>
      <td class="unit4">{{ target.GarrisonCapacity }}</td>
    </tr>
    <tr>
      <td class="unit3">生命值</td>
      <td class="unit4">
        <PerAgeData :target="target" :perAge="perAge" dataKey="HP" />
      </td>
    </tr>
    <tr v-if="target.AttackMelee !== null || target.AttackPierce !== null">
      <td class="unit3">
        攻擊
      </td>
      <td class="unit4">
        <span v-if="target.AttackMelee !== null">近程</span
        ><PerAgeData
          :target="target"
          :perAge="perAge"
          dataKey="AttackMelee"
        /><br
          v-if="target.AttackMelee !== null && target.AttackPierce !== null"
        />
        <span v-if="target.AttackPierce !== null">遠程</span
        ><PerAgeData :target="target" :perAge="perAge" dataKey="AttackPierce" />
      </td>
    </tr>
    <tr v-if="target.Attack > 0">
      <td class="unit3">攻擊加成</td>
      <td class="unit4" v-for="(ba, idx) in [bonusAttack(target)]" :key="idx">
        <span v-for="(item, index) in ba" :key="index">
          <template v-for="(s, is) in item.values"
            ><img
              :key="is"
              v-if="item.values.length > 1"
              class="gg"
              :src="s.age.img"
              alt=""
            />+{{ s.value }}</template
          >對<nuxt-link v-if="item.link" :to="item.link">{{
            item.locale
          }}</nuxt-link>
          <span v-else>{{ item.locale }}</span
          ><template v-if="index < ba.length - 1"
            ><br
          /></template>
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
    <tr v-if="target.Attack > 0">
      <td class="unit3">命中率</td>
      <td class="unit4">{{ target.AccuracyPercent }}%</td>
    </tr>
    <tr v-if="target.ProjectileSpeed">
      <td class="unit3">投射物速度</td>
      <td class="unit4">{{ target.ProjectileSpeed }}</td>
    </tr>
    <tr>
      <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
      <td class="unit4">
        <PerAgeData :target="target" :perAge="perAge" dataKey="MeleeArmor" />
      </td>
    </tr>
    <tr>
      <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
      <td class="unit4">
        <PerAgeData :target="target" :perAge="perAge" dataKey="PierceArmor" />
      </td>
    </tr>
    <tr>
      <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
      <td class="unit4">
        <span v-for="(item, index) in armourTypes(target)" :key="index">
          <nuxt-link v-if="item.link" :to="item.link">{{
            item.locale
          }}</nuxt-link>
          <span v-else>{{ item.locale }}</span
          ><template v-if="index < armourTypes(target).length - 1"
            ><br
          /></template>
        </span>
      </td>
    </tr>
    <tr v-if="target.Speed">
      <td class="unit3">跑速</td>
      <td class="unit4">
        <PerAgeData :target="target" :perAge="perAge" dataKey="Speed" />
      </td>
    </tr>
    <tr v-if="target.LineOfSight">
      <td class="unit3">視野</td>
      <td class="unit4">
        <PerAgeData :target="target" :perAge="perAge" dataKey="LineOfSight" />
      </td>
    </tr>
    <tr v-if="preId || nextId">
      <td class="unit" colspan="2" style="background-color:#3c763d;">
        <div class="unititle2">建築演變</div>
      </td>
    </tr>
    <tr v-if="preId">
      <td class="unit3">從升級</td>
      <td class="unit4">
        <img class="gg" :src="preId.img" alt="" /><nuxt-link :to="preId.page">{{
          locale[pre.LanguageNameId]
        }}</nuxt-link>
      </td>
    </tr>
    <tr v-if="nextId">
      <td class="unit3">升級到</td>
      <td class="unit4">
        <img class="gg" :src="upTechId.img" alt="" /><nuxt-link
          :to="nextId.page"
          >{{ locale[next.LanguageNameId] }}</nuxt-link
        >
      </td>
    </tr>
    <tr v-if="tech">
      <td class="unit3">升級成本</td>
      <td class="unit4">
        <span v-for="(item, index) in costData(tech)" :key="index">
          {{ item.value }}{{ item.locale }}
        </span>
      </td>
    </tr>
    <tr v-if="tech">
      <td class="unit3">升級時間</td>
      <td class="unit4">{{ tech.ResearchTime }}秒</td>
    </tr>
  </table>
</template>

<script>
import _ from 'lodash'
import {
  Type,
  ArmourClass,
  UnitClass,
  Resource,
  Age
} from '../constant/enums.js'
import data from '../constant/output.json'
import locale from '../constant/locale.json'
import PerAgeData from './PerAgeData'

export default {
  components: {
    PerAgeData
  },
  props: {
    type: {},
    id: {},
    preId: {},
    nextId: {},
    upTechId: {},
    age: {}
  },
  data() {
    return {
      data,
      locale,
      Age,
      Type
    }
  },
  methods: {
    getArmourData(data) {
      if (!data) {
        return []
      }

      const result = []

      data.forEach(val => {
        const ac = val.Class

        if (ac in ArmourClass) {
          result.push({
            locale: ArmourClass[ac].zh || ArmourClass[ac].name,
            value: val.Amount,
            type: ac,
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
    getTarget(type, id) {
      const typeData = data[type]
      if (typeof typeData !== 'undefined') {
        return typeData[id]
        if (typeof item !== 'undefined') {
          return item
        }
      }

      return null
    },
    costData(target) {
      if (!target) {
        return []
      }

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
      const key = 'Attacks'
      const attacks = target[key]
      let result = []

      if (this.perAge !== null) {
        const ageValues = this.perAge.map(ageItem => {
          return ageItem ? ageItem[key] : null
        })

        const comepareAgeValues = []

        ageValues.forEach(value => {
          if (value != null) {
            comepareAgeValues.push(value)
          }
        })
        if (comepareAgeValues.every(v => _.isEqual(v, comepareAgeValues[0]))) {
          result = [
            {
              value: comepareAgeValues[0]
            }
          ]
        } else {
          const ageOrder = [
            Age.DarkAge,
            Age.FeudalAge,
            Age.CastleAge,
            Age.ImperialAge
          ]

          for (let i = 0; i < ageOrder.length; i++) {
            if (ageValues[i] !== null) {
              if (i > 0 && _.isEqual(ageValues[i], ageValues[i - 1])) {
                continue
              }

              result.push({
                age: ageOrder[i],
                value: ageValues[i]
              })
            }
          }
        }
      } else {
        result = [
          {
            value: attacks
          }
        ]
      }

      /**
       * 不顯示預設值
       * class 3 = pierce
       * class 4 = melee
       */
      const data = this.getArmourData(attacks).filter(item => {
        return item.type !== 3 && item.type !== 4
      })

      const good = []

      data.forEach(r => {
        let pre = null
        const values = []

        result.forEach(rx => {
          const f = rx.value.find(v => v.Class === r.type)

          if (pre !== f.Amount) {
            values.push({
              age: rx.age,
              value: f.Amount
            })
          }

          pre = f.Amount
        })

        if (values.length === 1 && values[0].value <= 0) {
          return null
        }

        good.push(
          Object.assign(
            {
              values
            },
            r
          )
        )
      })

      return good
    },
    armourTypes(target) {
      const armours = target.Armours

      return this.getArmourData(armours).filter(item => {
        return item.type !== 3 && item.type !== 4
      })
    }
  },
  computed: {
    target() {
      return this.getTarget(this.type, this.id.ID) ?? {}
    },
    pre() {
      return this.preId ? this.getTarget(this.type, this.preId.ID) : null
    },
    next() {
      return this.nextId ? this.getTarget(this.type, this.nextId.ID) : null
    },
    tech() {
      return this.upTechId ? this.getTarget(Type.Tech, this.upTechId.ID) : null
    },
    perAge() {
      const fi = 'feudalAge_' + this.id.ID
      const ci = 'castleAge_' + this.id.ID
      const ii = 'imperialAge_' + this.id.ID
      let flag = false

      const result = [
        null,
        this.getTarget(this.type, fi),
        this.getTarget(this.type, ci),
        this.getTarget(this.type, ii)
      ]

      for (let i = 0; i < result.length; i++) {
        if (result[i] != null) {
          result[i - 1] = this.target
          flag = true
          break
        }
      }

      if (flag) {
        return result
      } else {
        return null
      }
    }
  }
}
</script>
<style></style>
