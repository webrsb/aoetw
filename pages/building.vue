<template>
  <BuildingInfo
    :id="234"
    :image="image"
    :preId="79"
    :nextId="235"
    :upTechId="63"
    :age="102"
    :type="Type.Building"
  ></BuildingInfo>
</template>
<script>
import { Type } from '../constant/enums.js'
import BuildingInfo from '@/components/InfoCard.vue'
import image from '@/assets/guard_tower.png'
export default {
  components: {
    BuildingInfo
  },
  data () {
    return {
      image,
      Type
    }
  }
}
</script>
<style>
.tit {
  background: url(~assets/title3.jpg);
  width: 100%;
  height: 284px;
  text-align: center;
  color: aliceblue;
  padding-top: 50px;
}
.tt2 {
  font-size: 30px;
  font-weight: bold;
  margin-right: 530px;
}
.tt {
  font-size: 45px;
  font-weight: bold;
}
@media (max-width: 576px) {
  .ititle {
    flex: 0 0 50%;
    max-width: 50%;
  }
}
</style>
