<template>
    <div class="container">
      <VueShowdown>
---
title: Assets
description: By default, Nuxt uses vue-loader, file-loader and url-loader webpack loaders for strong assets serving. You can also use Static directory for static assets.
---

> By default, Nuxt uses vue-loader, file-loader and url-loader webpack loaders for strong assets serving. You can also use the `static` directory for static assets.

## Webpack

[vue-loader](http://vue-loader.vuejs.org/) automatically processes your style and template files with `css-loader` and the Vue template compiler out of the box.
In this compilation process, all asset URLs such as , `background: url(...)` and CSS `@import` are resolved as module dependencies.

For example, we have this file tree:

```bash
-| assets/
----| image.png
-| pages/
----| index.vue
```




Or if you reference that image in your `pages/index.vue`:

```html
<template>
</template>
```

It will be compiled into:

```js
createElement('img', { attrs: { src: require('~/assets/image.png') }})
```

Because `.png` is not a JavaScript file, Nuxt.js configures webpack to use [file-loader](https://github.com/webpack/file-loader) and [url-loader](https://github.com/webpack/url-loader) to handle them for you.

The benefits of these loaders are:

- `file-loader` lets you designate where to copy and place the asset file, and how to name it using version hashes for better caching. In production, you will benefit from long-term caching by default!
- `url-loader` allows you to conditionally inline a file as base-64 data URL if they are smaller than a given threshold. This can reduce a number of HTTP requests for trivial files. If the file is larger than the threshold, it automatically falls back to file-loader.

For those two loaders, the default configuration is:

```js
// https://github.com/nuxt/nuxt.js/blob/dev/packages/builder/src/webpack/base.js#L204-L229
[
  {
    test: /\.(png|jpe?g|gif|svg|webp)$/,
    loader: 'url-loader',
    query: {
      limit: 1000, // 1kB
      name: 'img/[name].[hash:7].[ext]'
    }
  },
  {
    test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
    loader: 'url-loader',
    query: {
      limit: 1000, // 1kB
      name: 'fonts/[name].[hash:7].[ext]'
    }
  }
]
```

Which means that every file below 1 KB will be inlined as base-64 data URL.
Otherwise, the image/font will be copied in its corresponding folder (under the `.nuxt` directory)
with a name containing a version hash for better caching.

When launching our application with `nuxt`, our template in `pages/index.vue`:


Will be transformed into:

If you want to change the loader configurations, please use [build.extend](/api/configuration-build#extend).


## Static

If you don't want to use Webpack assets from the `assets` directory, you can create and use the `static` directory (in your project root folder).

All included files will be automatically served by Nuxt and are accessible through your project root URL. (`static/favicon.ico` will be available at `localhost:3000/favicon.ico`)

This option is helpful for files like `robots.txt`, `sitemap.xml` or `CNAME` (which is important for GitHub Pages deployment).

In your code, you can then reference these files relative to the root (`/`):

```html
<!-- Static image from static directory -->

<!-- webpacked image from assets directory -->
```

      </VueShowdown>
      <div class="row" style=" margin-top: 50px;">
        <div class="col-md-12">
           <h1>不列顛</h1>

          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>不列顛是西歐的弓兵文明，可使用的最初文明之一。它們代表了中世紀和中世紀後期的英國人和盎格魯‧諾曼人。</p>
            <p>不列顛的特殊單位是<a href="Longbowman.php">長弓兵</a>。長弓兵是弓箭手，比起其他所有弓兵單位來，有更高的攻擊力和射程。英格蘭有一段時間禁止其他運動，只允許射箭，因此不列顛的弓箭遠比其他文明來的熟練和更具破壞力。英格蘭遍布各地的小村莊使得城鎮中心擁有50%木材減免，另外有著遠近馳名的牧羊技術。</p>
            <p>不列顛的後代與蘇格蘭、愛爾蘭、塞爾特..等文明組成了現今的英國(大不列顛與北愛爾蘭聯合王國)。</p>
          </div>
           <h3>概要</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <p>不列顛的主要優勢就是他的步行弓兵系統(不包含矛兵)，因他們的<a href="Archery_Range.php">射箭場</a>工作效率高、文明又給予攻擊距離的增加使得弓兵的使用更多元。</p>不列顛的特殊單位長弓兵，是遊戲中唯一可以超越城堡的弓兵單位在對付緩慢的兵種時可以有效的給予傷害，相對的快速的騎兵是一大要害因此擁有完整個軍營兵種與科技好保護弓兵，此外不列顛的馬廄科技是非常不完善的。另外在海軍上不列顛除了
            <a
            href="Elite_Cannon_Galleon.php">精銳火砲戰船</a>以外科技是相當完善的，在<a href="Siege_Weapons.php">攻城單位</a>上缺乏<a href="Siege_Ram.php">重型衝撞車</a>與
              <a
              href="" Siege_Onager.php>重型投石車</a>相對應的給予獨特的<a href="Trebuchet.php">投石機</a>(要研發科技)</p>
                 <h3>戰術</h3>

                <p>不列顛擁有相當優秀的<a href="Archer_Units.php">弓箭手</a>，但必須在城堡時代開始射程才+1，因此黑跳城堡的打法相當不錯具有威脅性。一般封建來說都是以弓箭場弓兵搭配矛兵為主。</p>
                 <h3>特殊單位</h3>

                <p>長弓兵:有全遊戲裡最遠的攻擊距離的<a href="Archer_Units.php">弓兵單位</a>。</p>
                 <h3>特殊科技</h3>

                <p>
                  <img class="gg" src="~assets/CastleAgeUnique.png">:<a href="Yeomen.php">義勇騎兵</a>:步行弓兵射程+1，箭塔攻擊+2</p>
                <p>
                  <img class="gg" src="~assets/Unique-tech.jpg"><a href="Warwolf.php">戰狼</a>:投石機有面的殺傷力(意指攻擊範圍加大)</p>
          </div>
           <h3>文明加成</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>城堡時代<a href="Town_Center.php">城鎮中心</a>木材成本減免50%</li>
              <li>步行弓兵單位(矛兵除外)城堡時代攻擊距離+1，<a href="Imperial_Age.php">帝王時代</a>攻擊距離再+1(累計+2)</li>
              <li>牧羊工作效率+25%(綿羊、母牛、水牛、火雞)</li>
              <li><strong>團隊加分</strong>:射箭場工作效率+20%</li>
            </ul>
          </div>
         <h3>科技樹</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <em><a href="bri.php">不列顛科技樹</a></em>
          </div>
          <br/>
           <h3>更新日誌</h3>

          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><a href="aof.php">失落的帝國</a></em></h3>

            <ul>
              <li>獲得<a href="Cannon_Galleon .php">火砲戰船</a>。</li>
              <li><a href="Longbowman.php">長弓兵</a>訓練時間減少到17秒。</li>
              <li>獲得<a href="Heavy_Scorpion.php">重型弩砲</a>。</li>
              <li><a href="Yeomen.php">義勇騎兵</a>搬到<a href="" 城堡時代></a>。</li>
              <li>新的<a href="Imperial_Age.php">帝王時代</a>特殊科技<a href="">戰狼</a>。</li>
            </ul>
          </div>
           <h3>圖庫</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <a href="img/Wonderbritons.png"><img  class="imgn hg" width="250" src="~assets/Wonderbritons.png" alt=""></a> 
                <p><em>不列顛的<a href="Wonder.php">世界奇觀</a>-<a href="http://tinyurl.com/y7b3ntp5">亞琛主教座堂</a></em></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <civbox>
            <template slot="name">不列顛</template>
            <template slot="image"><img src="~assets/Richard_coeur_de_lion.jpg"></template>
            <template slot="caption">獅心王理查一世</template>
            <template slot="arch">西歐</template>
            <template slot="continent">弓兵</template>
            <template slot="focus"><img class="gg" src="~assets/LongbowmanIcon.jpg">長弓兵</template>
            <template slot="strategy">封建弓兵</template>
            <template slot="tech">
              <img class="gg" src="~assets/CastleAgeUnique.png">義勇騎兵
              <br/>
              <img class="gg" src="~assets/Unique-tech.jpg">戰狼
            </template>
          </civbox>
          <div class="thanks">感謝! 此頁面由熊協助編輯</div>
        </div>
      </div>
    </div>
</template>

<script>
import axios from 'axios'
import civbox from '~/components/infobox_civilization'

export default {
  layout: 'allciv',
  async asyncData({ route, store, error }) {
    // Default data
    let data = {
      attrs: {},
      body: '',
      docLink: ''
    }
    const slug = route.params.slug || 'index'
    const path = `https://raw.githubusercontent.com/nuxt/docs/master/en/guide/assets.md`
    let res
    try {
      res = await axios.get(path)
    } catch (err) {
      if (err.response.status !== 404) {
        return error({ statusCode: 500, message: store.state.lang.text.an_error_occured })
      }
      return error({ statusCode: 404, message: store.state.lang.text.api_page_not_found })
    }
    data.attrs = res.data.attrs
    data.body = res.data.body
    console.log(data)
    return data
  },
  components: {
    civbox
  }
}
</script>
<style>
</style>