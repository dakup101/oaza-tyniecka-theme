/*! For license information please see print.theme.js.LICENSE.txt */
"use strict";(self.webpackChunkoaza_tyniecka_theme=self.webpackChunkoaza_tyniecka_theme||[]).push([["print"],{"./assets/js/sub/parallax_init.ts":(__unused_webpack_module,__webpack_exports__,__webpack_require__)=>{eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ parallax_init)\n/* harmony export */ });\n/* harmony import */ var simple_parallax_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! simple-parallax-js */ "./node_modules/simple-parallax-js/dist/simpleParallax.min.js");\n/* harmony import */ var simple_parallax_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(simple_parallax_js__WEBPACK_IMPORTED_MODULE_0__);\n\r\nfunction parallax_init(selector) {\r\n    const parallaxTarget = document.querySelectorAll(selector);\r\n    parallaxTarget.forEach((target) => {\r\n        const parallax = new (simple_parallax_js__WEBPACK_IMPORTED_MODULE_0___default())(target, {\r\n            delay: 0.5,\r\n            transition: "cubic-bezier(0,0,0,1)",\r\n        });\r\n    });\r\n}\r\n\n\n//# sourceURL=webpack://oaza-tyniecka-theme/./assets/js/sub/parallax_init.ts?')},"./assets/js/sub/scroll_init.ts":(__unused_webpack_module,__webpack_exports__,__webpack_require__)=>{eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ scroll_init)\n/* harmony export */ });\nfunction scroll_init() {\r\n    document.addEventListener("scroll", () => {\r\n        // Site Header\r\n        let siteHeader = document.querySelector("[data-site_header]");\r\n        let scrollPosition = window.scrollY;\r\n        if (scrollPosition >= 30)\r\n            siteHeader.classList.add("scrolled");\r\n        else\r\n            siteHeader.classList.remove("scrolled");\r\n    });\r\n}\r\n\n\n//# sourceURL=webpack://oaza-tyniecka-theme/./assets/js/sub/scroll_init.ts?')}}]);