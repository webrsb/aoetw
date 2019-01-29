const scrollBehavior = function (to, from, savedPosition) {
  // if the returned position is falsy or an empty object,
  // will retain current scroll position.
  let position = false
  let hash = decodeURIComponent(to.hash)

  if (hash) {
    // scroll to anchor by returning the selector
    position = { selector: hash }
  } else if (to.matched.length < 2) 
  // if no children detected
  {
    // scroll to the top of the page
    position = { x: 0, y: 0 }
  } else if (to.matched.some((r) => r.components.default.options.scrollToTop)) {
    // if one of the children has scrollToTop option set to true
    position = { x: 0, y: 0 }
  } else 

  // savedPosition is only available for popstate navigations (back button)
  if (savedPosition) {
    position = savedPosition
  }

  return position
}

module.exports = {
  scrollBehavior,
  base: '/next',
  linkActiveClass: 'link-actived'
}
