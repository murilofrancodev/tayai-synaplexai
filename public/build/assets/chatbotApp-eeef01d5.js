import{f as t,e as o,m as a,L as i}from"./fetch-701d0618.js";import{c}from"./clipboard-f64d1f4d.js";window.fetchEventSource=t;window.Alpine=o;o.plugin(a);console.log("chatbotApp yüklendi");document.addEventListener("alpine:init",()=>{o.data("clipboard",e=>c(e))});i.start();document.querySelectorAll("[magic-load]").forEach(function(e){e.removeAttribute("magic-load")});