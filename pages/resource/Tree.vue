﻿<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>樹木列表</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            在世紀帝國II中，一般樹木每單位產量是125<nuxt-link
              to="/resource/Wood"
              >木材</nuxt-link
            >，而森林的樹木每單位產量則是100木材。總共有十種不同種類的樹，每種樹對應不同類型的地形，這些樹都可在地圖編輯器中找到。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            樹木的<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >是20，<nuxt-link to="/units/Villager">村民</nuxt-link
            >通常兩下可以砍倒樹木並開始採集，而研發<nuxt-link
              to="/techs/Sappers"
              >兵工學</nuxt-link
            >後村民只需一擊就能砍倒一棵樹。
          </p>
          <p>
            除了村民能砍樹外，以下單位也可打掉樹木開出路，有時可做為偷襲敵人後方使用，<nuxt-link
              to="/maps/Black_Forest"
              >黑森林</nuxt-link
            >尤其常出現這招，要注意的是樹被這些單位擊倒後不能由村民收集會直接消失。樹倒之後可以在原本的位置蓋任何<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >。
          </p>
          <ul>
            <img class="gg" src="~assets/OnagerIcon.png" alt="" /><nuxt-link
              to="/units/Onager"
              >中型投石車</nuxt-link
            >(從<nuxt-link to="/games/aof">失落的帝國</nuxt-link
            >版本開始)→
            <img
              class="gg"
              src="~assets/SiegeOnagerIcon.png"
              alt=""
            /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
            <li>
              <img
                class="gg"
                src="~assets/TrebuchetUnpackedIcon.png"
                alt=""
              /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link>→
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">精銳弩砲象</nuxt-link
              >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3></h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>木材相關<nuxt-link to="/techs">科技</nuxt-link></p>
          <ul>
            <li>
              <nuxt-link to="/techs/Double-Bit_Axe">雙面斧</nuxt-link
              >:村民伐木速度快20%
            </li>
            <li>
              <nuxt-link to="/techs/Bow_Saw">弓形鋸</nuxt-link
              >:村民伐木速度快20%
            </li>
            <li>
              <nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link
              >:村民伐木速度快20%
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >:村民資源攜帶量+5。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:村民伐木速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>:<nuxt-link
                to="/building/Farm"
                >農田</nuxt-link
              >成本便宜33%。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >成本減少15%。(<nuxt-link to="/elements/Team_Bonus"
                >團隊加分</nuxt-link
              >)
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >:遊戲一開始多50木材。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >:市場建造只要100木材。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>:<nuxt-link
                to="/building/Lumber_Camp"
                >伐木場</nuxt-link
              >、<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>、
              <nuxt-link to="/building/Mill">磨坊</nuxt-link>建造成本減少50%。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>:<nuxt-link
                to="/building/Fish_Trap"
                >漁網</nuxt-link
              >成本便宜33%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>:<nuxt-link
                to="/building/Lumber_Camp"
                >伐木場</nuxt-link
              >科技免費研發。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:自然資源存量+15%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>:<nuxt-link
                to="/building"
                >建築</nuxt-link
              >成本便宜15%。(<nuxt-link to="/building/Farm">農田</nuxt-link
              >除外)
            </li>
          </ul>
        </div>

        <table class="table-bordered" border="1">
          <tr>
            <td
              style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
              height="40"
              colspan="7"
              align="center"
              valign="middle"
              class="unit"
            >
              <div id="B"><strong>樹木列表</strong></div>
            </td>
          </tr>
          <tr>
            <td style="border: 1px solid #495057;" width="3%">
              <div class="unititle">
                <img src="~assets/Acacia_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>金合歡樹（Acacia Tree）</strong><br />
              最大收穫量：150木材
            </td>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Bamboo.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>竹林（Bamboo）<br /></strong>最大收穫量：100木材
            </td>
          </tr>
          <tr>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Baobab.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>猴麵包樹/猢猻樹（Baobab）<br /></strong
              >最大收穫量：200木材
            </td>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Dragon_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>龍血樹（Dragon Tree）<br /></strong>最大收穫量：100木材
            </td>
          </tr>
          <tr>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Jungle_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>叢林樹木（Jungle Tree）<br /></strong>最大收穫量：100木材
            </td>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Forest_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>樹林（Forest Tree）<br /></strong>最大收穫量：100木材
            </td>
          </tr>
          <tr>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Oak_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>橡樹林（Oak Tree）<br /></strong>最大收穫量：100木材
            </td>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Palm_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>棕梠樹林（Palm Tree）<br /></strong>最大收穫量：100木材
            </td>
          </tr>
          <tr>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Pine_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>松樹林（Pine Tree）<br /></strong>最大收穫量：100木材
            </td>
            <td style="border: 1px solid #495057;">
              <div class="unititle">
                <img src="~assets/Snow_Pine_Tree.png" width="220" alt="" />
              </div>
            </td>
            <td width="25%" valign="middle" style="border: 1px solid #495057;">
              <strong>雪松樹林（Snow Pine Tree）<br /></strong
              >最大收穫量：100木材
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allre' })

export default {
  components: {}
}
</script>
<style></style>
