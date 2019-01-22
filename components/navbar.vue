<template>
  <b-navbar toggleable="md" type="dark" variant="dark">
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
          <b-form-input size="sm" class="mr-sm-2" type="text" placeholder="請輸入關鍵字"/>
          <b-button size="sm" class="my-2 my-sm-0" type="submit">搜尋</b-button>
        </b-nav-form>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<style>
    .hrn1{
    margin-top: 10px;
    margin-bottom: 10px;
    border: 0;
    border-top: 1px solid #b3b1b1;
  }      
</style>