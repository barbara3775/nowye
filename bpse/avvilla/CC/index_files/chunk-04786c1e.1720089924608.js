(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-04786c1e"],{"2b82":function(a,e,t){"use strict";t("4256")},4256:function(a,e,t){},bbaa:function(a,e,t){"use strict";t.r(e);var n=function(){var a=this,e=a._self._c;return a.tabShow?e("div",{attrs:{id:"buyNavTab-container"}},[e("div",{staticClass:"buyNavTab_content"},[e("div",{staticClass:"text"},[a._v(a._s(a.$t("buyNavTab.step",[a.currentStep])))]),e("div",{staticClass:"line-box"},[e("div",{staticClass:"line",class:{ac:a.currentStep>=1}}),e("div",{staticClass:"line",class:{ac:a.currentStep>=2}}),e("div",{staticClass:"line",class:{ac:a.currentStep>=3}})])])]):a._e()},i=[],s=t("2f62"),r={name:"BuyNavTab",data(){return{}},computed:{...Object(s["b"])({buyTabState:a=>a.buyPayProcessTab.tabState}),tabShow(){return!(!["receivingMode","paymentMethod","creditCardConfig","otherWays-VA","otherWayPay","binancePay","googlePay","applePay","euroPay","BrazilPay","phpPayment","PSEWayPay","pagsmilePay","nigeriaPay","ArgentinaPay","cashierDesk-bankTransfer"].includes(this.$route.name)||!this.buyTabState)},currentStep(){return"receivingMode"===this.$route.name?1:"paymentMethod"===this.$route.name?2:["creditCardConfig","paymentResult","otherWays-VA","otherWayPay","binancePay","googlePay","applePay","phpPayment","BrazilPay","PSEWayPay","pagsmilePay","nigeriaPay","ArgentinaPay","cashierDesk-bankTransfer"].includes(this.$route.name)?3:1}},mounted(){}},c=r,y=(t("2b82"),t("2877")),u=Object(y["a"])(c,n,i,!1,null,"6e3f59fd",null);e["default"]=u.exports}}]);