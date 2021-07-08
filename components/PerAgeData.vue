<template>
  <span>
    <span v-for="(item, inx) in show" :key="inx">
      <img v-if="show.length > 1" class="gg" :src="item.age.img" alt="" />
        <span v-if="Number.isInteger(item.value)">
          {{ item.value }}{{ unit }}
        </span>
        <span v-else-if="item.value">{{ item.value.toFixed(2) }}{{ unit }}</span>
        <span v-else>{{ item.value }}{{ unit }}</span>
    </span>
  </span>
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

export default {
  props: {
    target: {},
    perAge: {},
    dataKey: {},
    unit: {}
  },
  computed: {
    show() {
      if (this.perAge == null) {
        return [
          {
            value: this.target[this.dataKey]
          }
        ]
      }

      const ageValues = this.perAge.map(ageItem => {
        return ageItem ? ageItem[this.dataKey] : null
      })

      const comepareAgeValues = []

      ageValues.forEach(value => {
        if (value != null) {
          comepareAgeValues.push(value)
        }
      })

      if (comepareAgeValues.every(v => v === comepareAgeValues[0])) {
        return [
          {
            value: comepareAgeValues[0]
          }
        ]
      }

      const result = []
      const ageOrder = [
        Age.DarkAge,
        Age.FeudalAge,
        Age.CastleAge,
        Age.ImperialAge
      ]

      for (let i = 0; i < ageOrder.length; i++) {
        if (ageValues[i] !== null) {
          if (i > 0 && ageValues[i] === ageValues[i-1]) {
            continue
          }

          result.push({
            age: ageOrder[i],
            value: ageValues[i]
          })
        }
      }

      return result
    }
  }
}
</script>
<style></style>
