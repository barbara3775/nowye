(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-8d094d7a"],{"51f4":function(t,e,r){"use strict";r("acd6")},8627:function(t,e,r){"use strict";r.r(e);var i=function(){var t=this,e=t._self._c;return t.navigationBarIsShow?e("div",{attrs:{id:"navigationBar"}},[t.tabStatus?e("div",{staticClass:"navigationBar_view"},[e("div",{staticClass:"navigationBar_view_left"},[t.backIconStatus&&t.AELF_Back&&t.buyPage_Back&&t.LegendTrading_IDAuthentication?e("div",{staticClass:"icon",on:{click:t.goBack}},[["/accountsDisabled"].includes(t.$route.path)?t._e():e("img",{attrs:{src:r("ea59")}})]):t._e(),t.confirmOrderStatus?t._e():e("div",{staticClass:"linkName"},[e("span",{staticClass:"linkname-text"},[t._v(t._s(t.$t(t.routerName)))]),"/receivingMode"===t.$route.path?e("div",{staticClass:"receivingMode-currency"},[t._v(" "+t._s(t.cryptoInfo.crypto)+" "+t._s(t.$t("buyReceivingMethod.networkTitle1"))+" ")]):t._e(),"/Refund"===t.$route.path?e("span",{staticClass:"currency"},[t._v(t._s(t.$route.query.cryptocurrency))]):t._e()])]),e("div",{staticClass:"navigationBar_view_right"},[t.isMenuBarVisible&&t.AELF_Menu&&t.LegendTrading_Menu&&t.isNoMexcToken?e("img",{staticClass:"closeIcon meun-icon",attrs:{src:r("168e")},on:{click:t.openMenu}}):t._e()])]):t._e()]):t._e()},s=[],a=(r("14d9"),r("ed08")),o=r("2f62"),n=r("7057"),u={name:"navigationBar",props:["confirmOrderStatus"],data(){return{routerName:"",tabState:!1,routerPath:"",routerCrypto:"",routerPath_type:"",changeCountry_state:!1,TimeOut:null}},computed:{...Object(o["b"])("cryptoBuyPage",{cryptoInfo_default:t=>t.cryptoInfo}),...Object(o["b"])("buyCryptoMerchantTwoCrypto",{cryptoInfo_twoCrypto:t=>t.cryptoInfo}),...Object(o["b"])("buyPayments",{payMethodInfo:t=>t.payMethodInfo,orderNo:t=>t.orderNo}),cryptoInfo(){let{merchantType:t,merchantStatus:e,merchantQueryInfo:r}=this.merchantInfo;return e&&"page"===t&&r.cryptoSlave?this.cryptoInfo_twoCrypto:this.cryptoInfo_default},...Object(o["b"])("buyCryptoMerchant",["merchantInfo"]),...Object(o["b"])("sellCryptoMerchantAELF",{source:t=>t.merchantInfo.source}),LegendTrading_IDAuthentication(){var t;const e=["/id_authentication"];return!(e.includes(this.$route.path)&&(null===(t=this.routerName)||void 0===t||!t.trim()))},AELF_Back(){const t=["/emailCode","/sell-formUserInfo"];return!("3"===this.source&&t.includes(this.$route.path))},AELF_Menu(){const t=["/emailCode","/verifyCode","/sell-formUserInfo","/kycStatus","/kycVerify","/accountsDisabled"];return!("3"===this.source&&t.includes(this.$route.path))},LegendTrading_Menu(){const t=["/cashierDesk-bankTransfer"];return!("buyDetails"===this.$route.query.from&&t.includes(this.$route.path))},isNoMexcToken(){const t=localStorage.getItem("apiRouterObject");return"60000"!==this.$route.query.redirectCode||!t},tabStatus(){return!["/unauthorizedAccess"].includes(this.$route.path)},buyPage_Back(){return"payPage"!==this.$route.meta.type||!this.merchantInfo.merchantStatus||"page"!==this.merchantInfo.merchantType||!this.merchantInfo.merchantQueryInfo.merchantOrderNo},navigationBarIsShow(){const{name:t,path:e}=this.$route;return!!(this.tabState&&"sellCardInfo"===t&&!this.changeCountry_state||this.tabState&&"sellOrder"!==t&&!this.$parent.routerViewState||this.tabState&&!["sellCardInfo","sellOrder"].includes(t)&&"/index"!==e)&&"/index"!==e},isMenuBarVisible(){return this.$store.state.merchantConfig.menuBarVisible&&"tradeHistory"!==this.$route.name},backIconStatus(){var t;const{merchantType:e,merchantStatus:r}=this.merchantInfo,{merchantOrderNo:i}=(null===(t=this.merchantInfo)||void 0===t?void 0:t.merchantQueryInfo)||{},{name:s}=this.$route,a="api"===e,o=["buyDetails"].includes(s),n=["paymentResult"].includes(s)&&i||["buyDetails"].includes(s)&&["payPage"].includes(this.routerPath_type)&&i;return!("payPage"!==this.$route.meta.type||!this.confirmOrderStatus)||!this.confirmOrderStatus&&(!n&&(!a||!!(a&&r&&o)))},...Object(o["b"])("userInfo",{kyc_info:t=>t.kyc_info})},deactivated(){clearTimeout(this.TimeOut)},watch:{$route:{immediate:!0,handler:function(t,e){const r=t.meta.title;r&&("Home"!==r||this.$parent.routerViewState?(this.tabState=!0,this.routerName=r,"/kycverification"==t.path.toLowerCase()&&(1==this.kyc_info.kycTips?this.routerName="nav.routerName_kycOnfido":2==this.kyc_info.kycTips&&(this.routerName="nav.routerName_kycSumsub"))):this.tabState=!1,e?(this.routerPath=e.path,this.routerPath_type=e.meta.type):(this.routerPath="",this.routerPath_type=""),!["creditCardConfig","paymentResult"].includes(t.name)&&this.$store.state.tipsStatus&&"Home"!==r&&(this.$store.commit("set_tipsStatus",!1),this.$nextTick(()=>{const t=sessionStorage.getItem("merchantType");"buy"!==t&&t||Object(a["h"])(null,null,"/#/index"),this.$router.replace("/")}),clearTimeout(this.TimeOut),this.TimeOut=setTimeout(()=>{this.$toast(this.$t("payConfig_components.double"))},1e3)))}},kyc_info:{immediate:!0,deep:!0,handler(t){"/kycverification"==this.$route.path.toLowerCase()&&(1==t.kycTips?this.routerName="nav.routerName_kycOnfido":2==t.kycTips&&(this.routerName="nav.routerName_kycSumsub"))}}},methods:{goBack(){const{path:t,name:e}=this.$route,{routerPath:r}=this,{ovo_va_mex_qrs_Status:i,routerViewState:s}=this.$store.state;if("paymentMethod"!==e)if("receivingMode"!==e)if(document.getElementById("buyPayWaitPage")&&i)this.$router.push("/tradeHistory-BuyDetails?orderId="+this.orderNo);else{if(n["l"].includes(t)&&i)return this.$parent.tipsState=!0,void(this.$parent.BuyTimeOut="backHome");if("api"!==this.merchantInfo.merchantType&&(i&&["/tradeHistory-BuyDetails","/tradeHistory"].includes(t)&&n["k"].includes(r)||i&&"/tradeHistory"===t&&["/tradeHistory-BuyDetails","/tradeHistory-details"].includes(r))){if("/tradeHistory"!==t)return this.$store.commit("set_tipsStatus",!1),clearTimeout(this.TimeOut),this.TimeOut=setTimeout(()=>{this.$parent.$refs.routerView.menuState=!1}),this.merchantInfo.merchantQueryInfo.merchantOrderNo?void this.$router.go(-1):void this.$router.push("/");if(!s)return this.$router.push("/"),clearTimeout(this.TimeOut),void(this.TimeOut=setTimeout(()=>{this.$parent.routerViewState=!1}))}if("paymentResult"===e){const t=sessionStorage.getItem("merchantType");return"buy"!==t&&t||Object(a["h"])(null,null,"/#/index"),void this.$router.push("/")}if("/verifyCode"===r&&["/sell-formUserInfo","/receivingMode","/tradeHistory","/kycStatus","/Refund","/tradeHistory-details","/sellOrder"].includes(t))this.$router.push("/");else{if("/tradeHistory"===t)return s?void this.$router.push("/"):(this.$router.go(-1),clearTimeout(this.TimeOut),void(this.TimeOut=setTimeout(()=>{this.$parent.routerViewState=!1})));if("/paymentResult"===t||"/sellOrder"===t){this.$store.state.nextOrderState=1;const t=sessionStorage.getItem("merchantType");return"buy"!==t&&t||Object(a["h"])(null,null,"/#/index"),void this.$router.push("/")}if("/emailCode"!==r||"/verifyCode"!==t)if(["/index","/verifyCode"].includes(r)&&"/emailCode"===t)this.$router.push("/index");else{try{const{useRouterViewBack:t,routerViewGoBack:e}=this.$parent.$refs.routerView;if(t&&e)return void e()}catch(o){console.log(o)}this.$router.go(-1)}else this.$router.go(-1)}}else this.$router.push("/");else this.merchantInfo.merchantStatus&&this.merchantInfo.merchantQueryInfo.address?this.$router.push("/"):this.$router.push("/receivingMode")},openMenu(){this.$store.commit("set_tipsStatus",!1),this.$parent.routerViewState=!1,this.$store.commit("set_routerViewState",!1)},sellFormBack(){this.$parent.$refs.routerView.goDown_state=!1,this.changeCountry_state=!0,this.$parent.$refs.routerView.changeCountry_state=!0}}},c=u,h=(r("51f4"),r("2877")),d=Object(h["a"])(c,i,s,!1,null,"64472b9e",null);e["default"]=d.exports},acd6:function(t,e,r){},ea59:function(t,e,r){t.exports=r.p+"static/img/goBack.c08da3a8.svg"}}]);