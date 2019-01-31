# aoetw

> 完整、準確的世紀帝國百科全書

## Build Setup

``` bash
# 安裝依賴檔
$ yarn install

# 啟動開發熱重載模式 localhost:3000
$ yarn run dev

# 編譯生產環境檔，並執行伺服器
$ yarn run build
$ yarn start

# generate static project
$ yarn run generate
```

# 資料夾說明
pages 資料夾 - 頁面檔案
layouts 資料夾 - 模版檔
components 資料夾 - 元件檔
assets 資料夾 - 圖片及相關資源檔

## pages 內的檔案結構
`<template>` 頁籤是網頁編輯區
`<script>` 程式區，可載入元件或設定模版
```
export default {
  layout: 'civ',
}
```
表示使用 layouts 中的 civ 模版檔
`<style>` 樣式表

## 預設路徑設定
目前編譯的預設網址為 http://127.0.0.1:3000/next/
進入資料夾 router/router.js 修改預設路徑
