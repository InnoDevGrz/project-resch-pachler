/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/***/ (function() {

eval("function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== \"undefined\" && o[Symbol.iterator] || o[\"@@iterator\"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === \"number\") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it[\"return\"] != null) it[\"return\"](); } finally { if (didErr) throw err; } } }; }\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }\nfunction DomReady(fn) {\n  if (typeof fn !== 'function') {\n    return;\n  }\n  if (document.readyState === 'interactive' || document.readyState === 'complete') {\n    return fn();\n  }\n  document.addEventListener('DOMContentLoaded', fn, false);\n}\nfunction jsLoaded() {\n  var htmlTag = document.querySelector('html');\n  htmlTag.classList.remove('no-js');\n  htmlTag.classList.add('js');\n}\nfunction addMenuToggle() {\n  var menuHasChildrean = document.querySelectorAll('#main-nav .menu-item-has-children > a');\n  for (var i = 0; i < menuHasChildrean.length; i++) {\n    var id = menuHasChildrean[i].parentNode.getAttribute('id') + '-toggle';\n    menuHasChildrean[i].insertAdjacentHTML('afterend', '<input type=\"checkbox\" id=\"' + id + '\">' + '<label for=\"' + id + '\" class=\"menu-toggle\">' + '<em aria-hidden=\"true\"></em>' + '<span class=\"screen-reader-text\">more</span>' + '</label>');\n  }\n}\nfunction currentMenu() {\n  var checkboxes = document.querySelectorAll('.current-menu-parent > input[type=\"checkbox\"], .current-menu-ancestor > input[type=\"checkbox\"]');\n  var _iterator = _createForOfIteratorHelper(checkboxes),\n    _step;\n  try {\n    for (_iterator.s(); !(_step = _iterator.n()).done;) {\n      checkbox = _step.value;\n      checkbox.checked = true;\n    }\n  } catch (err) {\n    _iterator.e(err);\n  } finally {\n    _iterator.f();\n  }\n}\nfunction scrollTopButtonVisible() {\n  var scrollTop = document.getElementById('scroll-top');\n  if (window.pageYOffset > 300) {\n    scrollTop.classList.add(\"visible\");\n  } else {\n    scrollTop.classList.remove(\"visible\");\n  }\n}\nfunction navbarRecolor() {\n  var scrollTop = document.getElementById('navbar');\n  if (window.pageYOffset > 350) {\n    scrollTop.classList.add(\"recolor\");\n  } else {\n    scrollTop.classList.remove(\"recolor\");\n  }\n}\nfunction elementInViewport(elem, classToAdd) {\n  var window_height = window.innerHeight || document.documentElement.clientHeight;\n  var window_top_position = window.pageYOffset;\n  var window_bottom_position = window_top_position + window_height;\n  var elemLength = elem.length;\n  var i;\n  for (i = 0; i < elemLength; ++i) {\n    var element_height = elem[i].clientHeight;\n    var element_top_position = elem[i].getBoundingClientRect().top + window_top_position;\n    var element_bottom_position = element_top_position + element_height;\n    if (element_bottom_position > window_top_position && element_top_position < window_bottom_position) {\n      elem[i].classList.add(classToAdd);\n\n      /* if (!hasClass(elem[i], classToAdd)) {\n           addClass(elem[i], classToAdd);\n        }\n      } else {\n        delClass(elem[i], classToAdd);\n      }  */\n    }\n  }\n}\n\nfunction tsc_toggleMenuScrollUp() {\n  var navbar = document.getElementById('navbar');\n  window.onscroll = function (e) {\n    // print \"false\" if direction is down and \"true\" if up\n    //console.log(this.oldScroll > this.scrollY);\n\n    if (this.oldScroll > this.scrollY + 25) {\n      navbar.classList.add(\"scroll-up\");\n      navbar.classList.remove(\"scroll-down\");\n    } else if (this.oldScroll < this.scrollY - 25) {\n      navbar.classList.add(\"scroll-down\");\n      navbar.classList.remove(\"scroll-up\");\n    }\n    this.oldScroll = this.scrollY;\n  };\n}\nfunction elementAddAnimate() {\n  var elements = document.querySelectorAll('h1, h2, h3, p');\n  for (var i = 0; i < elements.length; i++) {\n    elements[i].classList.add('animate', 'fade-in-up');\n  }\n}\nfunction initParallax() {\n  //var cover = document.querySelector('.simplyparallax');\n  //var image = cover.querySelector('.wp-block-cover__image-background');\n  var image = document.querySelectorAll(' .has-parallax .wp-block-cover__image-background');\n  new simpleParallax(image, {\n    delay: 0.2,\n    scale: 1.7,\n    orientation: 'down'\n  });\n}\nDomReady(function () {\n  jsLoaded();\n  scrollTopButtonVisible();\n  tsc_toggleMenuScrollUp();\n  navbarRecolor();\n  addMenuToggle();\n  currentMenu();\n  elementAddAnimate();\n  initParallax();\n  elementInViewport(document.querySelectorAll('.animate'), 'animated');\n});\nwindow.addEventListener(\"resize\", function () {\n  tsc_toggleMenuScrollUp();\n  elementInViewport(document.querySelectorAll('.animate'), 'animated');\n  scrollTopButtonVisible();\n  navbarRecolor();\n});\nwindow.addEventListener('scroll', function () {\n  tsc_toggleMenuScrollUp();\n  scrollTopButtonVisible();\n  navbarRecolor();\n  elementInViewport(document.querySelectorAll('.animate'), 'animated');\n}, false);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJEb21SZWFkeSIsImZuIiwiZG9jdW1lbnQiLCJyZWFkeVN0YXRlIiwiYWRkRXZlbnRMaXN0ZW5lciIsImpzTG9hZGVkIiwiaHRtbFRhZyIsInF1ZXJ5U2VsZWN0b3IiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJhZGRNZW51VG9nZ2xlIiwibWVudUhhc0NoaWxkcmVhbiIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJpIiwibGVuZ3RoIiwiaWQiLCJwYXJlbnROb2RlIiwiZ2V0QXR0cmlidXRlIiwiaW5zZXJ0QWRqYWNlbnRIVE1MIiwiY3VycmVudE1lbnUiLCJjaGVja2JveGVzIiwiX2l0ZXJhdG9yIiwiX2NyZWF0ZUZvck9mSXRlcmF0b3JIZWxwZXIiLCJfc3RlcCIsInMiLCJuIiwiZG9uZSIsImNoZWNrYm94IiwidmFsdWUiLCJjaGVja2VkIiwiZXJyIiwiZSIsImYiLCJzY3JvbGxUb3BCdXR0b25WaXNpYmxlIiwic2Nyb2xsVG9wIiwiZ2V0RWxlbWVudEJ5SWQiLCJ3aW5kb3ciLCJwYWdlWU9mZnNldCIsIm5hdmJhclJlY29sb3IiLCJlbGVtZW50SW5WaWV3cG9ydCIsImVsZW0iLCJjbGFzc1RvQWRkIiwid2luZG93X2hlaWdodCIsImlubmVySGVpZ2h0IiwiZG9jdW1lbnRFbGVtZW50IiwiY2xpZW50SGVpZ2h0Iiwid2luZG93X3RvcF9wb3NpdGlvbiIsIndpbmRvd19ib3R0b21fcG9zaXRpb24iLCJlbGVtTGVuZ3RoIiwiZWxlbWVudF9oZWlnaHQiLCJlbGVtZW50X3RvcF9wb3NpdGlvbiIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsInRvcCIsImVsZW1lbnRfYm90dG9tX3Bvc2l0aW9uIiwidHNjX3RvZ2dsZU1lbnVTY3JvbGxVcCIsIm5hdmJhciIsIm9uc2Nyb2xsIiwib2xkU2Nyb2xsIiwic2Nyb2xsWSIsImVsZW1lbnRBZGRBbmltYXRlIiwiZWxlbWVudHMiLCJpbml0UGFyYWxsYXgiLCJpbWFnZSIsInNpbXBsZVBhcmFsbGF4IiwiZGVsYXkiLCJzY2FsZSIsIm9yaWVudGF0aW9uIl0sInNvdXJjZXMiOlsid2VicGFjazovL3ZvZ2wvLi9zcmMvanMvc2NyaXB0cy5qcz9hYjhmIl0sInNvdXJjZXNDb250ZW50IjpbImZ1bmN0aW9uIERvbVJlYWR5KGZuKSB7XG4gICAgaWYgKHR5cGVvZiBmbiAhPT0gJ2Z1bmN0aW9uJykge1xuICAgICAgICByZXR1cm47XG4gICAgfVxuICAgIGlmIChkb2N1bWVudC5yZWFkeVN0YXRlID09PSAnaW50ZXJhY3RpdmUnIHx8IGRvY3VtZW50LnJlYWR5U3RhdGUgPT09ICdjb21wbGV0ZScpIHtcbiAgICAgICAgcmV0dXJuIGZuKCk7XG4gICAgfVxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmbiwgZmFsc2UpO1xufVxuXG5cbmZ1bmN0aW9uIGpzTG9hZGVkKCkge1xuICAgIGNvbnN0IGh0bWxUYWcgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdodG1sJylcbiAgICBodG1sVGFnLmNsYXNzTGlzdC5yZW1vdmUoJ25vLWpzJyk7XG4gICAgaHRtbFRhZy5jbGFzc0xpc3QuYWRkKCdqcycpO1xufVxuXG5mdW5jdGlvbiBhZGRNZW51VG9nZ2xlKCkge1xuICAgIGNvbnN0IG1lbnVIYXNDaGlsZHJlYW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcjbWFpbi1uYXYgLm1lbnUtaXRlbS1oYXMtY2hpbGRyZW4gPiBhJyk7XG4gICAgZm9yICh2YXIgaSA9IDA7IGkgPCBtZW51SGFzQ2hpbGRyZWFuLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgIGxldCBpZCA9IG1lbnVIYXNDaGlsZHJlYW5baV0ucGFyZW50Tm9kZS5nZXRBdHRyaWJ1dGUoJ2lkJykgKyAnLXRvZ2dsZSc7XG4gICAgICAgIG1lbnVIYXNDaGlsZHJlYW5baV0uaW5zZXJ0QWRqYWNlbnRIVE1MKCdhZnRlcmVuZCcsICc8aW5wdXQgdHlwZT1cImNoZWNrYm94XCIgaWQ9XCInICsgaWQgKyAnXCI+JyArXG4gICAgICAgICAgICAnPGxhYmVsIGZvcj1cIicgKyBpZCArICdcIiBjbGFzcz1cIm1lbnUtdG9nZ2xlXCI+JyArXG4gICAgICAgICAgICAnPGVtIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvZW0+JyArXG4gICAgICAgICAgICAnPHNwYW4gY2xhc3M9XCJzY3JlZW4tcmVhZGVyLXRleHRcIj5tb3JlPC9zcGFuPicgK1xuICAgICAgICAgICAgJzwvbGFiZWw+Jyk7XG4gICAgfVxufVxuXG5mdW5jdGlvbiBjdXJyZW50TWVudSgpIHtcbiAgICBjb25zdCBjaGVja2JveGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmN1cnJlbnQtbWVudS1wYXJlbnQgPiBpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0sIC5jdXJyZW50LW1lbnUtYW5jZXN0b3IgPiBpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0nKTtcbiAgICBmb3IgKGNoZWNrYm94IG9mIGNoZWNrYm94ZXMpIHtcbiAgICAgICAgY2hlY2tib3guY2hlY2tlZCA9IHRydWU7XG4gICAgfVxufVxuXG5mdW5jdGlvbiBzY3JvbGxUb3BCdXR0b25WaXNpYmxlKCkge1xuICAgIGNvbnN0IHNjcm9sbFRvcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzY3JvbGwtdG9wJyk7XG4gICAgaWYgKHdpbmRvdy5wYWdlWU9mZnNldCA+IDMwMCkge1xuICAgICAgICBzY3JvbGxUb3AuY2xhc3NMaXN0LmFkZChcInZpc2libGVcIik7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgc2Nyb2xsVG9wLmNsYXNzTGlzdC5yZW1vdmUoXCJ2aXNpYmxlXCIpO1xuICAgIH1cbn1cblxuXG5mdW5jdGlvbiBuYXZiYXJSZWNvbG9yKCkge1xuICAgIGNvbnN0IHNjcm9sbFRvcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXInKTtcbiAgICBpZiAod2luZG93LnBhZ2VZT2Zmc2V0ID4gMzUwKSB7XG4gICAgICAgIHNjcm9sbFRvcC5jbGFzc0xpc3QuYWRkKFwicmVjb2xvclwiKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBzY3JvbGxUb3AuY2xhc3NMaXN0LnJlbW92ZShcInJlY29sb3JcIik7XG4gICAgfVxufVxuXG5mdW5jdGlvbiBlbGVtZW50SW5WaWV3cG9ydChlbGVtLCBjbGFzc1RvQWRkKSB7XG5cbiAgICB2YXIgd2luZG93X2hlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodCB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xpZW50SGVpZ2h0O1xuICAgIHZhciB3aW5kb3dfdG9wX3Bvc2l0aW9uID0gKHdpbmRvdy5wYWdlWU9mZnNldCkgO1xuICAgIHZhciB3aW5kb3dfYm90dG9tX3Bvc2l0aW9uID0gKHdpbmRvd190b3BfcG9zaXRpb24gKyB3aW5kb3dfaGVpZ2h0ICk7XG5cbiAgICB2YXIgZWxlbUxlbmd0aCA9IGVsZW0ubGVuZ3RoO1xuICAgIHZhciBpO1xuXG4gICAgZm9yIChpID0gMDsgaSA8IGVsZW1MZW5ndGg7ICsraSkge1xuXG4gICAgICAgIHZhciBlbGVtZW50X2hlaWdodCA9IGVsZW1baV0uY2xpZW50SGVpZ2h0O1xuICAgICAgICB2YXIgZWxlbWVudF90b3BfcG9zaXRpb24gPSBlbGVtW2ldLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcCArIHdpbmRvd190b3BfcG9zaXRpb247XG4gICAgICAgIHZhciBlbGVtZW50X2JvdHRvbV9wb3NpdGlvbiA9IChlbGVtZW50X3RvcF9wb3NpdGlvbiArIGVsZW1lbnRfaGVpZ2h0KTtcbiAgICAgICAgaWYgKChlbGVtZW50X2JvdHRvbV9wb3NpdGlvbiAgPiB3aW5kb3dfdG9wX3Bvc2l0aW9uKSAmJiAoIGVsZW1lbnRfdG9wX3Bvc2l0aW9uICA8IHdpbmRvd19ib3R0b21fcG9zaXRpb24pKSB7XG4gICAgICAgICAgICBlbGVtW2ldLmNsYXNzTGlzdC5hZGQoY2xhc3NUb0FkZClcblxuICAgICAgICAgICAgLyogaWYgKCFoYXNDbGFzcyhlbGVtW2ldLCBjbGFzc1RvQWRkKSkge1xuICAgICAgICAgICAgICAgICBhZGRDbGFzcyhlbGVtW2ldLCBjbGFzc1RvQWRkKTtcbiAgICAgICAgICAgICAgfVxuICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgIGRlbENsYXNzKGVsZW1baV0sIGNsYXNzVG9BZGQpO1xuICAgICAgICB9ICAqL1xuICAgICAgICB9XG5cbiAgICB9XG5cbn1cblxuXG5mdW5jdGlvbiB0c2NfdG9nZ2xlTWVudVNjcm9sbFVwKCkge1xuICAgIGNvbnN0IG5hdmJhciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXInKTtcblxuICAgIHdpbmRvdy5vbnNjcm9sbCA9IGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIC8vIHByaW50IFwiZmFsc2VcIiBpZiBkaXJlY3Rpb24gaXMgZG93biBhbmQgXCJ0cnVlXCIgaWYgdXBcbiAgICAgICAgLy9jb25zb2xlLmxvZyh0aGlzLm9sZFNjcm9sbCA+IHRoaXMuc2Nyb2xsWSk7XG5cbiAgICAgICAgaWYgKHRoaXMub2xkU2Nyb2xsID4gKHRoaXMuc2Nyb2xsWSArIDI1KSkge1xuICAgICAgICAgICAgbmF2YmFyLmNsYXNzTGlzdC5hZGQoXCJzY3JvbGwtdXBcIik7XG4gICAgICAgICAgICBuYXZiYXIuY2xhc3NMaXN0LnJlbW92ZShcInNjcm9sbC1kb3duXCIpO1xuICAgICAgICB9IGVsc2UgaWYgKHRoaXMub2xkU2Nyb2xsIDwgKHRoaXMuc2Nyb2xsWSAtIDI1KSkge1xuICAgICAgICAgICAgbmF2YmFyLmNsYXNzTGlzdC5hZGQoXCJzY3JvbGwtZG93blwiKTtcbiAgICAgICAgICAgIG5hdmJhci5jbGFzc0xpc3QucmVtb3ZlKFwic2Nyb2xsLXVwXCIpO1xuICAgICAgICB9XG4gICAgICAgIHRoaXMub2xkU2Nyb2xsID0gdGhpcy5zY3JvbGxZO1xuICAgIH1cbn1cblxuZnVuY3Rpb24gZWxlbWVudEFkZEFuaW1hdGUoKSB7XG4gICAgbGV0IGVsZW1lbnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnaDEsIGgyLCBoMywgcCcpXG4gICAgZm9yIChsZXQgaSA9IDA7IGkgPCBlbGVtZW50cy5sZW5ndGg7IGkrKykge1xuICAgICAgICBlbGVtZW50c1tpXS5jbGFzc0xpc3QuYWRkKCdhbmltYXRlJywgJ2ZhZGUtaW4tdXAnKVxuICAgIH1cbn1cblxuZnVuY3Rpb24gaW5pdFBhcmFsbGF4KCkge1xuICAgIC8vdmFyIGNvdmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNpbXBseXBhcmFsbGF4Jyk7XG4gICAgLy92YXIgaW1hZ2UgPSBjb3Zlci5xdWVyeVNlbGVjdG9yKCcud3AtYmxvY2stY292ZXJfX2ltYWdlLWJhY2tncm91bmQnKTtcbiAgICB2YXIgaW1hZ2UgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcgLmhhcy1wYXJhbGxheCAud3AtYmxvY2stY292ZXJfX2ltYWdlLWJhY2tncm91bmQnKTtcbiAgICBuZXcgc2ltcGxlUGFyYWxsYXgoaW1hZ2UsIHtcbiAgICAgICAgZGVsYXk6IDAuMixcbiAgICAgICAgc2NhbGU6IDEuNyxcbiAgICAgICAgb3JpZW50YXRpb246ICdkb3duJyxcbiAgICB9KTtcbn1cblxuXG5cblxuXG5cbkRvbVJlYWR5KCgpID0+IHtcbiAgICBqc0xvYWRlZCgpO1xuICAgIHNjcm9sbFRvcEJ1dHRvblZpc2libGUoKTtcbiAgICB0c2NfdG9nZ2xlTWVudVNjcm9sbFVwKCk7XG4gICAgbmF2YmFyUmVjb2xvcigpO1xuICAgIGFkZE1lbnVUb2dnbGUoKTtcbiAgICBjdXJyZW50TWVudSgpO1xuICAgIGVsZW1lbnRBZGRBbmltYXRlKCk7XG4gICAgaW5pdFBhcmFsbGF4KCk7XG4gICAgZWxlbWVudEluVmlld3BvcnQoZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmFuaW1hdGUnKSwgJ2FuaW1hdGVkJyk7XG59KTtcblxuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcInJlc2l6ZVwiLCBmdW5jdGlvbiAoKSB7XG4gICAgdHNjX3RvZ2dsZU1lbnVTY3JvbGxVcCgpO1xuICAgIGVsZW1lbnRJblZpZXdwb3J0KGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5hbmltYXRlJyksICdhbmltYXRlZCcpO1xuXG4gICAgc2Nyb2xsVG9wQnV0dG9uVmlzaWJsZSgpO1xuICAgIG5hdmJhclJlY29sb3IoKTtcbn0pO1xuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24gKCkge1xuICAgIHRzY190b2dnbGVNZW51U2Nyb2xsVXAoKTtcbiAgICBzY3JvbGxUb3BCdXR0b25WaXNpYmxlKCk7XG4gICAgbmF2YmFyUmVjb2xvcigpO1xuICAgIGVsZW1lbnRJblZpZXdwb3J0KGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5hbmltYXRlJyksICdhbmltYXRlZCcpO1xuXG59LCBmYWxzZSk7XG5cbiJdLCJtYXBwaW5ncyI6Ijs7O0FBQUEsU0FBU0EsUUFBUUEsQ0FBQ0MsRUFBRSxFQUFFO0VBQ2xCLElBQUksT0FBT0EsRUFBRSxLQUFLLFVBQVUsRUFBRTtJQUMxQjtFQUNKO0VBQ0EsSUFBSUMsUUFBUSxDQUFDQyxVQUFVLEtBQUssYUFBYSxJQUFJRCxRQUFRLENBQUNDLFVBQVUsS0FBSyxVQUFVLEVBQUU7SUFDN0UsT0FBT0YsRUFBRSxDQUFDLENBQUM7RUFDZjtFQUNBQyxRQUFRLENBQUNFLGdCQUFnQixDQUFDLGtCQUFrQixFQUFFSCxFQUFFLEVBQUUsS0FBSyxDQUFDO0FBQzVEO0FBR0EsU0FBU0ksUUFBUUEsQ0FBQSxFQUFHO0VBQ2hCLElBQU1DLE9BQU8sR0FBR0osUUFBUSxDQUFDSyxhQUFhLENBQUMsTUFBTSxDQUFDO0VBQzlDRCxPQUFPLENBQUNFLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLE9BQU8sQ0FBQztFQUNqQ0gsT0FBTyxDQUFDRSxTQUFTLENBQUNFLEdBQUcsQ0FBQyxJQUFJLENBQUM7QUFDL0I7QUFFQSxTQUFTQyxhQUFhQSxDQUFBLEVBQUc7RUFDckIsSUFBTUMsZ0JBQWdCLEdBQUdWLFFBQVEsQ0FBQ1csZ0JBQWdCLENBQUMsdUNBQXVDLENBQUM7RUFDM0YsS0FBSyxJ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\n//# sourceURL=webpack-internal:///./src/js/scripts.js\n");

/***/ }),

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc2Nzcy9zdHlsZS5zY3NzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL3ZvZ2wvLi9zcmMvc2Nzcy9zdHlsZS5zY3NzPzM3OTgiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/scss/style.scss\n");

/***/ }),

/***/ "./src/scss/login.scss":
/*!*****************************!*\
  !*** ./src/scss/login.scss ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc2Nzcy9sb2dpbi5zY3NzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL3ZvZ2wvLi9zcmMvc2Nzcy9sb2dpbi5zY3NzPzk4MmMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/scss/login.scss\n");

/***/ }),

/***/ "./src/scss/slider.scss":
/*!******************************!*\
  !*** ./src/scss/slider.scss ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc2Nzcy9zbGlkZXIuc2NzcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly92b2dsLy4vc3JjL3Njc3Mvc2xpZGVyLnNjc3M/Y2NmZCJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/scss/slider.scss\n");

/***/ }),

/***/ "./src/scss/style-editor.scss":
/*!************************************!*\
  !*** ./src/scss/style-editor.scss ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc2Nzcy9zdHlsZS1lZGl0b3Iuc2NzcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly92b2dsLy4vc3JjL3Njc3Mvc3R5bGUtZWRpdG9yLnNjc3M/NmI1MiJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/scss/style-editor.scss\n");

/***/ }),

/***/ "./src/scss/custom-menu-colors.scss":
/*!******************************************!*\
  !*** ./src/scss/custom-menu-colors.scss ***!
  \******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc2Nzcy9jdXN0b20tbWVudS1jb2xvcnMuc2NzcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly92b2dsLy4vc3JjL3Njc3MvY3VzdG9tLW1lbnUtY29sb3JzLnNjc3M/Mjk4YyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/scss/custom-menu-colors.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	!function() {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = function(result, chunkIds, fn, priority) {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every(function(key) { return __webpack_require__.O[key](chunkIds[j]); })) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	!function() {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/scripts": 0,
/******/ 			"assets/css/slider": 0,
/******/ 			"assets/css/custom-menu-colors": 0,
/******/ 			"assets/css/style-editor": 0,
/******/ 			"assets/css/login": 0,
/******/ 			"style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = function(chunkId) { return installedChunks[chunkId] === 0; };
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = function(parentChunkLoadingFunction, data) {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some(function(id) { return installedChunks[id] !== 0; })) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkvogl"] = self["webpackChunkvogl"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/slider","assets/css/custom-menu-colors","assets/css/style-editor","assets/css/login","style"], function() { return __webpack_require__("./src/js/scripts.js"); })
/******/ 	__webpack_require__.O(undefined, ["assets/css/slider","assets/css/custom-menu-colors","assets/css/style-editor","assets/css/login","style"], function() { return __webpack_require__("./src/scss/style.scss"); })
/******/ 	__webpack_require__.O(undefined, ["assets/css/slider","assets/css/custom-menu-colors","assets/css/style-editor","assets/css/login","style"], function() { return __webpack_require__("./src/scss/login.scss"); })
/******/ 	__webpack_require__.O(undefined, ["assets/css/slider","assets/css/custom-menu-colors","assets/css/style-editor","assets/css/login","style"], function() { return __webpack_require__("./src/scss/slider.scss"); })
/******/ 	__webpack_require__.O(undefined, ["assets/css/slider","assets/css/custom-menu-colors","assets/css/style-editor","assets/css/login","style"], function() { return __webpack_require__("./src/scss/style-editor.scss"); })
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/slider","assets/css/custom-menu-colors","assets/css/style-editor","assets/css/login","style"], function() { return __webpack_require__("./src/scss/custom-menu-colors.scss"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;