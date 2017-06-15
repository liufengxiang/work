;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-yonghuming" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M213.6 1008.576c0.288-0.064 0.448-0.064-0.352-0.064-0.768 0-0.64 0.064-0.32 0.064-0.16 0.064-0.032 0.064 0.32 0.064C213.632 1008.64 213.792 1008.64 213.6 1008.576z"  ></path>' +
    '' +
    '<path d="M1020 977.472C1022.368 981.888 1024 986.656 1024 992c0 17.664-14.624 32-32.64 32s-32.672-14.336-32.672-32l-0.8 0C913.024 790.72 730.56 640 512 640 293.408 640 110.88 790.72 66.08 992L65.248 992c0 17.664-14.656 32-32.64 32S0 1009.664 0 992c0-5.344 1.6-10.112 4-14.528 40.352-179.328 175.168-323.904 351.904-378.08C254.976 544.928 185.792 440.928 185.792 320 185.792 143.264 331.84 0 512 0c180.128 0 326.176 143.264 326.176 320 0 120.928-69.184 224.928-170.08 279.36C844.832 653.568 979.552 798.112 1020 977.472L1020 977.472zM772.928 320c0-141.376-116.832-256-260.928-256-144.16 0-260.96 114.624-260.96 256s116.832 255.968 260.96 255.968C656.096 575.968 772.928 461.376 772.928 320L772.928 320z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)