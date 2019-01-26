<template>
  <b-navbar
    ref="navbar"
    toggleable="md"
    type="dark"
    variant="dark"
    sticky
  >
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <b-navbar-brand to="/">Aoetw</b-navbar-brand>
    <b-collapse is-nav id="nav_collapse">
      <b-navbar-nav>
        <b-nav-item to="/civs">文明</b-nav-item>
        <b-nav-item to="/units">單位</b-nav-item>
        <b-nav-item to="/techs">科技</b-nav-item>
        <b-nav-item to="/building">建築</b-nav-item>
        <b-nav-item to="/armor">護甲分類</b-nav-item>
        <b-nav-item to="/batt">戰役</b-nav-item>
        <b-nav-item to="/ar">戰術技巧</b-nav-item>
        <b-nav-item to="/qa">常見問題</b-nav-item>
        <b-nav-item to="/talk">討論區</b-nav-item>
        <b-nav-item to="#">記錄檔區</b-nav-item>
        <b-nav-item to="/techs/tree">科技樹</b-nav-item>
        <b-nav-item to="/maps">地圖</b-nav-item>
      </b-navbar-nav>
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <header_search />
        </b-nav-form>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>
<script>
import header_search from '~/components/header_search.vue'

export default {
  components: {
    header_search
  }
}
</script>
<style scoped>
.hrn1 {
  margin-top: 10px;
  margin-bottom: 10px;
  border: 0;
  border-top: 1px solid #b3b1b1;
}

li {
  display: flex;
  align-items: center;
}

@media (min-width: 768px){
  .navbar-expand-md {
      max-height: 86px;
      overflow: hidden;
  }
}
</style>
