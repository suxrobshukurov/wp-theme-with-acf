!function(t){var e={};function n(s){if(e[s])return e[s].exports;var a=e[s]={i:s,l:!1,exports:{}};return t[s].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=t,n.c=e,n.d=function(t,e,s){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:s})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var s=Object.create(null);if(n.r(s),Object.defineProperty(s,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)n.d(s,a,function(e){return t[e]}.bind(null,a));return s},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=82)}({82:function(t,e,n){t.exports=n(83)},83:function(t,e){new function(){var t=this;this.textExpandsHeights=[],this.textExpanded=[],this.setChanges=function(){t.setBackground(),t.TextExpands()},this.setBackground=function(){t.backgrounds&&t.backgrounds.forEach((function(t){window.innerWidth>767&&t.dataset.bg_desktop?t.dataset.bg_desktop.includes("url")?(t.style.backgroundImage=t.dataset.bg_desktop,t.style.backgroundPosition=t.dataset.bg_pos_desktop,t.style.backgroundRepeat="no-repeat"):t.style.backgroundColor=t.dataset.bg_desktop:window.innerWidth<=767&&t.dataset.bg_mobile?t.dataset.bg_desktop.includes("url")?(t.style.backgroundImage=t.dataset.bg_mobile,t.style.backgroundPosition=t.dataset.bg_pos_mobile,t.style.backgroundRepeat="no-repeat"):t.style.backgroundColor=t.dataset.bg_mobile:t.style.backgroundImage&&(t.style.background=null)}))},this.TextExpands=function(){t.textExpands&&t.textExpands.forEach((function(e,n){if(!e.classList.contains("active")){var s=e.offsetHeight;e.style.height=null;var a=e.offsetHeight;e.style.height=s+"px",t.textExpandsHeights[n]=a,t.setTextExpands(e)}}))},this.setTextExpands=function(t){window.innerWidth>767&&t.dataset.limit_desktop?t.style.height=t.dataset.limit_desktop+"px":window.innerWidth<=767&&t.dataset.limit_mobile?t.style.height=t.dataset.limit_mobile+"px":t.style.height=null},this.toggleTextExpands=function(){t.btnsTextExpands&&t.btnsTextExpands.forEach((function(e,n){t.textExpanded[n]=!1,e.addEventListener("click",(function(){var s=t.textExpands[n];t.textExpanded[n]?t.setTextExpands(s):s.style.height=t.textExpandsHeights[n]+"px",t.textExpands[n].classList.toggle("active"),e.classList.toggle("active"),t.textExpanded[n]=!t.textExpanded[n]}))}))},this.backgrounds=document.querySelectorAll("[data-bg_desktop], [data-bg_mobile]"),this.textExpands=document.querySelectorAll("[data-limit_desktop], [data-limit_mobile]"),this.btnsTextExpands=document.querySelectorAll(".js-text-expand"),this.setChanges(),this.toggleTextExpands(),window.addEventListener("resize",this.setChanges)}}});