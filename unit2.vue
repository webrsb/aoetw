<template>
  <UnitInfo></UnitInfo>
</template>
<script>
import UnitInfo from '@/components/UnitInfo.vue'
export default { components: {
  UnitInfo
} }
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
