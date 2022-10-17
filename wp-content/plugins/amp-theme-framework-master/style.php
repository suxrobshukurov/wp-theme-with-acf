/**** 
* AMP Framework Reset
*****/
    body{ font-family: sans-serif; font-size: 16px; line-height:1.4; }
    ol, ul{ list-style-position: inside }
    p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
    a, a:active, a:visited{ color:#ed1c24; text-decoration: none }
    a:hover, a:active, a:focus{}
    pre{ white-space: pre-wrap;}
    .left{float:left}
    .right{float:right}
    .hidden{ display:none }
    .clearfix{ clear:both }
    blockquote{ background: #f1f1f1; margin: 10px 0 20px 0; padding: 15px;}
    blockquote p:last-child {margin-bottom: 0;}
    .amp-wp-unknown-size img {object-fit: contain;}
    .amp-wp-enforced-sizes{ max-width: 100% }
    /* Image Alignment */
    .alignright {
        float: right;
    }
    .alignleft {
        float: left;
    }
    .aligncenter {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    amp-iframe { max-width: 100%; margin-bottom : 20px; }

    /* Captions */
    .wp-caption {
        padding: 0;
    }
    .wp-caption-text {
        font-size: 12px;
        line-height: 1.5em;
        margin: 0;
        padding: .66em 10px .75em;
        text-align: center;
    }

    /* AMP Media */
    amp-iframe,
    amp-youtube,
    amp-instagram,
    amp-vine {
        margin: 0 -16px 1.5em;
    }
    amp-carousel > amp-img > img {
        object-fit: contain;
    }


/****
* Container
*****/
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 0px 10px;
}

/****
* AMP Sidebar
*****/
    amp-sidebar {
        width: 250px;
    }

    /* AMP Sidebar Toggle button */
    .amp-sidebar-button{
        position:relative;
    }
    .amp-sidebar-toggle  {
    }
    .amp-sidebar-toggle span  {
        display: block;
        height: 2px;
        margin-bottom: 5px;
        width: 22px;
        background: #000;
    }
    .amp-sidebar-toggle span:nth-child(2){
        top: 7px;
    }
    .amp-sidebar-toggle span:nth-child(3){
        top:14px;
    }

    /* AMP Sidebar close button */
    .amp-sidebar-close{
        background: #333;
        display: inline-block;
        padding: 5px 10px;
        font-size: 12px;
        color: #fff;
    }

/****
* AMP Navigation Menu with Dropdown Support
*****/
    .toggle-navigation ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: inline-block;
        width: 100%
    }
    .toggle-navigation ul li{
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.11);
        padding: 11px 0px;
        width: 25%;
        float: left;
        text-align: center;
        margin-top: 6px
    }
    .toggle-navigation ul ul{
        display: none
    }
    .toggle-navigation ul li a{
        color: #eee;
        padding: 15px;
    }
    .toggle-navigation{
        display: none;
        background: #444;
    }


/**** 
* Header
*****/
.amp-logo {
    width:190px;
    height:36px;
}
    .header h1{
        font-size: 1.5em;
    }
    .header .right{
        margin: 16px 5px 0px 5px;
    }
    .amp-phone, .amp-social, .amp-sidebar-button{
        display:inline-flex 
    }
    .amp-phone{
        top: 4px;
    }
    .header .amp-social{
        margin: 0px 19px;
    }
    .amp-sidebar-button{
        top: 6px;
    }


/**** 
* Loop
*****/
    .loop-post{
        display: inline-block;
        width: 100%;
        margin: 6px 0px;
    }
    .loop-post .loop-img{
        float: left;
        margin-right: 15px;
    }
    .loop-post h2{
        font-size: 1.2em;
        margin: 0px 0px 8px 0px;
    }
    .loop-post p{
        font-size: 14px;
        color: #333;
        margin-bottom:6px;
    }
    .loop-post ul{
        list-style-type: none;
        display: inline-flex;
        margin: 0px;
        font-size: 14px;
        color: #666;
    }
    .loop-post ul li{
        margin-right:2px;
    }
    .loop-date{
        font-size:12px;
    }


/****
* Single
*****/
    /** Related Posts **/
    .amp-related-posts ul{
        list-style-type:none;
    }
    .amp-related-posts ul li{
        display: inline-block;
        line-height: 1.3;
        margin-bottom: 5px;
    }
    .amp-related-posts amp-img{
        float: left;
        width: 100px;
        margin: 0px 10px 0px 0px;
    }


/**** 
* Comments
*****/
	.comments_list ul{
	    margin:0;
	    padding:0
	}
	.comments_list ul.children{
	    padding-bottom:10px;
		margin-left: 4%;
		width: 96%;
	}
	.comments_list ul li p{
        margin: 0;
        font-size: 14px;
        clear: both;
        padding-top: 5px;
	}
    .comments_list ul li .says{
        margin-right: 4px;
    }
	.comments_list ul li .comment-body{
	    padding: 10px 0px 15px 0px;
	}
	.comments_list li li{
	    margin: 20px 20px 10px 20px;
	    background: #f7f7f7;
	    box-shadow: none;
	    border: 1px solid #eee;
	}
	.comments_list li li li{
	    margin:20px 20px 10px 20px
	}
	.comment-author{ float:left }


/**** 
* Footer
*****/
    .footer{
        padding: 30px 0px 20px 0px;
        font-size: 12px;
        text-align: center;
    }


/****
* RTL Styles
*****/


/****
* main.css
*****/
*,*::before,*::after{box-sizing:border-box}figure,input,button,select,textarea,blockquote,ol,ul,p,h1,h2,h3,h4,h5,h6,body{margin:0}th,td,input,button,select,textarea{padding:0}button:focus{outline:none}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0)}article,figure,footer,header,main,nav{display:block}noscript{display:none}ol,ul{padding-left:0;list-style-position:inside}button{border-radius:0}input,button,select,textarea{color:inherit;font-family:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;border:none;background:transparent}input:focus,button:focus,select:focus,textarea:focus{outline:none}button,input{overflow:visible}button,select{text-transform:none}select{word-wrap:normal}button,[type=button],[type=reset],[type=submit]{cursor:pointer;-webkit-appearance:button}textarea{overflow:auto;resize:vertical}img{vertical-align:baseline;border-style:none;display:inline-block;max-width:100%}svg{overflow:hidden;vertical-align:baseline}table{border-collapse:collapse}th,td{height:auto}th{font-weight:bolder;text-align:inherit;text-align:-webkit-match-parent}a{color:var(--link-color);text-decoration:none}a:hover{color:var(--link-hover-color);text-decoration:underline}h6,h5,h4,h3,h2,h1{line-height:1.2;/* color:var(--headings-color); */}h6 a,h5 a,h4 a,h3 a,h2 a,h1 a{color:inherit;text-decoration:none}h6 a:hover,h5 a:hover,h4 a:hover,h3 a:hover,h2 a:hover,h1 a:hover{color:var(--link-hover-color);text-decoration:underline}body{font-family:var(--font-family),sans-serif;font-weight:var(--font-weight);line-height:1;color:var(--text-color);text-align:left;background-color:#fff}h1{font-weight:var(--h1-font-weight)}h2{font-weight:var(--h2-font-weight)}h3{font-weight:var(--h3-font-weight)}h4{font-weight:var(--h4-font-weight)}h5{font-weight:var(--h5-font-weight)}h6{font-weight:var(--h6-font-weight)}ul{list-style-type:none}ol{list-style-type:decimal}img:not(.lazyload):not(.lazyloading){height:auto}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.container .container{padding-left:0;padding-right:0}[class*=row]{margin-right:-15px;margin-left:-15px}[class*=col]{width:100%;padding-right:15px;padding-left:15px}.row{display:flex;flex-wrap:wrap}.col{flex-basis:0;flex-grow:1;max-width:100%}.col-auto{flex:0 0 auto;width:auto;max-width:100%}.col-6{flex:0 0 50%;max-width:50%}.col-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.ng{margin-right:0;margin-left:0}.ng>[class*=col]{padding-right:0;padding-left:0}.foc{display:flex;align-items:center;justify-content:center}.foc img{width:auto;max-height:100%}.field{display:block;width:100%;padding:15px 15px;height:50px;font-family:inherit;font-size:14px;line-height:1.25;color:var(--text-color);background-color:#fff;background-clip:padding-box;border:1px solid transparent;border-radius:6px}.field::-moz-placeholder{color:var(--dark);opacity:1}.field:-ms-input-placeholder{color:var(--dark);opacity:1}.field::placeholder{color:var(--dark);opacity:1}.field::-ms-expand{background-color:transparent;border:none}.field::-moz-focusring{color:transparent;text-shadow:0 0 0 var(--text-color)}.field:disabled{opacity:1}select.field{-webkit-appearance:none;-moz-appearance:none;appearance:none;padding-right:30px;background:#fff url(../images/icons/select-arrows.svg) no-repeat calc(100% - 13px) center}select.field:focus::-ms-value{color:var(--text-color);background-color:#fff}textarea.field{height:190px}.field-icon{position:absolute;top:0;left:0;bottom:0;width:50px;height:50px;z-index:2}.field--icon{padding-left:50px}[class*=btn-]{color:#fff;transition:250ms ease-in-out}.btn{display:inline-block;max-width:100%;height:50px;padding:0 14px;font-weight:700;color:var(--link-color);text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:2px solid transparent;border-radius:10px}a.btn{display:inline-flex;align-items:center;justify-content:center;white-space:normal}.btn:hover{text-decoration:none}.btn.disabled,.btn:disabled{opacity:.5}.btn--sm{height:40px}.btn--176{width:176px}.btn--250{width:250px}.btn-rm{width:120px;height:35px;font-size:12px;text-align:center;border:1px solid transparent}.btn-rm--g{color:var(--neutral);border-color:rgba(114,151,153,.15)}.btn-rm--g:hover{color:var(--primary-variant);border-color:var(--primary-variant)}.btn-rm--g:hover path{fill:var(--primary-variant)}.btn-rm--w{color:#fff;border-color:#fff}.btn-rm--w:hover{background:rgba(255,255,255,.3)}.btn-rm.active svg{transform:rotate(180deg)}.btn--m{background-color:#92959f}.btn--m:hover{background-color:#232222}.btn--w{background-color:#fff}.btn--w:hover{background-color:#e6e6e6}.btn--b{background-color:#000}.btn--b:hover{background-color:#000}.btn--p{background-color:var(--primary)}.btn--p:hover{background-color:var(--primary-hover)}.btn--pv{background-color:var(--primary-variant)}.btn--pv:hover{background-color:var(--primary-variant-hover)}.btn--s{background-color:var(--secondary)}.btn--s:hover{background-color:var(--secondary-hover)}.btn--sv{background-color:var(--secondary-variant)}.btn--sv:hover{background-color:var(--secondary-varinat-hover)}.btn--n{background-color:var(--neutral)}.btn--n:hover{background-color:var(--neutral-hover)}.btn--d{background-color:var(--dark)}.btn--d:hover{background-color:var(--dark-hover)}.btn--l{background-color:var(--light)}.btn--l:hover{background-color:var(--light-hover)}.btn-g--m{position:relative;color:#92959f;border-color:#92959f;z-index:1}.btn-g--m::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--m:hover{color:#232222;border-color:#232222}.btn-g--m:hover::before{background-color:#92959f}.btn-g--w{position:relative;color:#fff;border-color:#fff;z-index:1}.btn-g--w::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--w:hover{color:#e6e6e6;border-color:#e6e6e6}.btn-g--w:hover::before{background-color:#fff}.btn-g--b{position:relative;color:#000;border-color:#000;z-index:1}.btn-g--b::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--b:hover{color:#000;border-color:#000}.btn-g--b:hover::before{background-color:#000}.btn-g--p{position:relative;color:var(--primary);border-color:var(--primary);z-index:1}.btn-g--p::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--p:hover{color:var(--primary-hover);border-color:var(--primary-hover)}.btn-g--p:hover::before{background-color:var(--primary)}.btn-g--pv{position:relative;color:var(--primary-variant);border-color:var(--primary-variant);z-index:1}.btn-g--pv::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--pv:hover{color:var(--primary-variant-hover);border-color:var(--primary-variant-hover)}.btn-g--pv:hover::before{background-color:var(--primary-variant)}.btn-g--s{position:relative;color:var(--secondary);border-color:var(--secondary);z-index:1}.btn-g--s::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--s:hover{color:var(--secondary-hover);border-color:var(--secondary-hover)}.btn-g--s:hover::before{background-color:var(--secondary)}.btn-g--sv{position:relative;color:var(--secondary-variant);border-color:var(--secondary-variant);z-index:1}.btn-g--sv::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--sv:hover{color:var(--secondary-varinat-hover);border-color:var(--secondary-varinat-hover)}.btn-g--sv:hover::before{background-color:var(--secondary-variant)}.btn-g--n{position:relative;color:var(--neutral);border-color:var(--neutral);z-index:1}.btn-g--n::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--n:hover{color:var(--neutral-hover);border-color:var(--neutral-hover)}.btn-g--n:hover::before{background-color:var(--neutral)}.btn-g--d{position:relative;color:var(--dark);border-color:var(--dark);z-index:1}.btn-g--d::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--d:hover{color:var(--dark-hover);border-color:var(--dark-hover)}.btn-g--d:hover::before{background-color:var(--dark)}.btn-g--l{position:relative;color:var(--light);border-color:var(--light);z-index:1}.btn-g--l::before{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.3;z-index:-1;background-color:transparent;transition:250ms ease-in-out;border-radius:inherit}.btn-g--l:hover{color:var(--light-hover);border-color:var(--light-hover)}.btn-g--l:hover::before{background-color:var(--light)}.wp-editor{line-height:1.8571428571}.wp-editor h1:not(:last-child),.wp-editor h2:not(:last-child),.wp-editor h3:not(:last-child),.wp-editor h4:not(:last-child),.wp-editor h5:not(:last-child),.wp-editor h6:not(:last-child),.wp-editor blockquote:not(:last-child),.wp-editor ul:not(:last-child),.wp-editor ol:not(:last-child),.wp-editor p:not(:last-child),.wp-editor table:not(:last-child){margin-bottom:25px}.wp-editor h1,.wp-editor h2,.wp-editor h3,.wp-editor h4,.wp-editor h5,.wp-editor h6{/*color:var(--headings-color)*/}.wp-editor li:not(:last-child){margin-bottom:10px}.wp-editor table{color:#000;width:100%;border:none;overflow:auto}.wp-editor th,.wp-editor td{padding-top:10px;padding-bottom:10px;border:none;font-size:14px}.wp-editor thead th,.wp-editor thead td{white-space:nowrap;color:#fff;font-size:12px;font-weight:700;background:var(--neutral);text-transform:uppercase}.wp-editor thead th:first-child,.wp-editor thead td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px}.wp-editor thead th:last-child,.wp-editor thead td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px}.wp-editor tbody tr:nth-child(even) td{background:var(--light)}.wp-editor tbody tr:nth-child(even) td:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px}.wp-editor tbody tr:nth-child(even) td:last-child{border-top-right-radius:10px;border-bottom-right-radius:10px}.wp-editor blockquote{position:relative;font-style:italic;color:var(--dark);background:var(--secondary-variant);border-radius:10px}.wp-editor blockquote::before{content:"";position:absolute;margin:auto;background:var(--secondary) url(<?=ALFA_IMG_DIR?>/icons/quote.svg) no-repeat center;border-radius:50%}img.alignnone,img.aligncenter,img.alignleft,img.alignright{margin-bottom:20px}img.alignnone{display:block}img.aligncenter{display:block;margin-left:auto;margin-right:auto}.wp-editor ul:not(.ul--arr) li{position:relative;padding-left:20px}.wp-editor ul:not(.ul--arr) li::before{content:"";position:absolute;top:9px;left:0;width:8px;height:8px;border:2px solid var(--primary-variant);border-radius:50%}.wp-editor ul.ul--arr{position:relative;padding:20px;font-size:14px;border:2px solid var(--secondary);border-radius:10px;font-weight:500}.wp-editor ul.ul--arr li{position:relative;padding-left:20px}.wp-editor ul.ul--arr li::before{content:"";position:absolute;top:9px;left:2px;width:0;height:0;border-top:4px solid transparent;border-bottom:4px solid transparent;border-left:7px solid var(--primary)}.breadcrumbs__list{font-size:0}.breadcrumbs__list>span{display:block;padding-top:5px;padding-bottom:5px;color:#fff;font-size:11px}.breadcrumbs__list>span>span{text-decoration:underline}.breadcrumbs__list>span:not(:last-child){position:relative;padding-right:30px}.breadcrumbs__list>span:not(:last-child)::before,.breadcrumbs__list>span:not(:last-child)::after{content:"";position:absolute;top:0;right:10px;bottom:0;margin:auto;width:8px;height:2px;background:#fff;border-radius:1px}.breadcrumbs__list>span:not(:last-child)::before{transform:translate(0, -2.5px) rotate(45deg)}.breadcrumbs__list>span:not(:last-child)::after{transform:translate(0, 2.5px) rotate(-45deg)}.breadcrumbs__list a{color:#fff}.mmo .header__btn--menu::before,.sho .header__btn--search::before,.mmo .header__btn--menu::after,.sho .header__btn--search::after{content:"";position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;width:24px;height:2px;background:var(--primary-variant)}.mmo .header__btn--menu::before,.sho .header__btn--search::before{transform:rotate(45deg)}.mmo .header__btn--menu::after,.sho .header__btn--search::after{transform:rotate(-45deg)}.mmo .header__btn--menu svg,.sho .header__btn--search svg{display:none}.header{position:relative;z-index:10}.header__btn{width:42px;height:42px;font-size:0;margin-left:8px}.primary-nav a{color:#000;text-decoration:none;display:block}.primary-nav>li>a{text-transform:uppercase}.primary-nav .menu-item-has-children>a::after{content:"";display:inline-block;vertical-align:middle;width:0;height:0;margin-top:-4px;margin-left:12px;border-top:6px solid var(--primary-variant);border-left:4px solid transparent;border-right:4px solid transparent}.primary-nav .sub-menu{display:none}.sf{display:none}.bg-p+.sbb{background-image:linear-gradient(to bottom, var(--primary) 50%, var(--primary) 50%)}.bg-pv+.sbb{background-image:linear-gradient(to bottom, var(--primary-variant) 50%, var(--primary) 50%)}.bg-s+.sbb{background-image:linear-gradient(to bottom, var(--secondary) 50%, var(--primary) 50%)}.bg-sv+.sbb{background-image:linear-gradient(to bottom, var(--secondary-variant) 50%, var(--primary) 50%)}.bg-n+.sbb{background-image:linear-gradient(to bottom, var(--neutral) 50%, var(--primary) 50%)}.bg-d+.sbb{background-image:linear-gradient(to bottom, var(--dark) 50%, var(--primary) 50%)}.bg-l+.sbb{background-image:linear-gradient(to bottom, var(--light) 50%, var(--primary) 50%)}.socials a:not(:last-child){margin-right:25px}.socials a:not(:hover){opacity:.6}.recoms{background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.1), transparent)}.recoms li{opacity:.6}.f-menu a{color:inherit}.f-menu li{position:relative;padding-left:15px}.f-menu li::before{content:"";position:absolute;top:3px;left:0;width:7px;height:7px;border-top:1px solid #fff;border-right:1px solid #fff;opacity:.6;transform:rotate(45deg)}.f-menu li:not(:last-child){margin-bottom:23px}.scroll-top{position:fixed;width:40px;height:40px;right:20px;bottom:20px;z-index:999}.va-t{vertical-align:top}.va-m{vertical-align:middle}.bg-w{background-color:#fff}a.bg-w:hover{background-color:#e6e6e6}button.bg-w:hover{background-color:#e6e6e6}.bg-b{background-color:#000}a.bg-b:hover{background-color:var(--primary)}button.bg-b:hover{background-color:var(--primary)}.bg-tr-10{background-color:rgba(35,34,34,.1)}.bg-inherit{background-color:inherit}.bg-p{background-color:var(--primary)}a.bg-p:hover{background-color:var(--primary-hover)}button.bg-p:hover{background-color:var(--primary-hover)}.bg-pv{background-color:var(--primary-variant)}a.bg-pv:hover{background-color:var(--primary-variant-hover)}button.bg-pv:hover{background-color:var(--primary-variant-hover)}.bg-s{background-color:var(--secondary)}a.bg-s:hover{background-color:var(--secondary-hover)}button.bg-s:hover{background-color:var(--secondary-hover)}.bg-sv{background-color:var(--secondary-variant)}a.bg-sv:hover{background-color:var(--secondary-varinat-hover)}button.bg-sv:hover{background-color:var(--secondary-varinat-hover)}.bg-n{background-color:var(--neutral)}a.bg-n:hover{background-color:var(--neutral-hover)}button.bg-n:hover{background-color:var(--neutral-hover)}.bg-d{background-color:var(--dark)}a.bg-d:hover{background-color:var(--dark-hover)}button.bg-d:hover{background-color:var(--dark-hover)}.bg-l{background-color:var(--light)}a.bg-l:hover{background-color:var(--light-hover)}button.bg-l:hover{background-color:var(--light-hover)}.br-4{border-radius:4px}.br-6{border-radius:6px}.br-10{border-radius:10px}.br-t-10{border-top-left-radius:10px;border-top-right-radius:10px}.br-b-10{border-bottom-right-radius:10px;border-bottom-left-radius:10px}.br-15{border-radius:15px}.br-20{border-radius:20px}.br-c{border-radius:50%}.br-p{border-radius:50rem}.d-n{display:none}.d-ib{display:inline-block}.d-b{display:block}.d-f{display:flex}.d-if{display:inline-flex}.f-c{flex-direction:column}.f-w{flex-wrap:wrap}.ai-c{align-items:center}.jc-c{justify-content:center}.jc-sb{justify-content:space-between}.as-c{align-self:center}.of-a{overflow:auto}.of-h{overflow:hidden}.ps-r{position:relative}.ps-a{position:absolute}.w-100{width:100%}.h-100{height:100%}.mh-100{max-height:100%}.wa{width:auto}.mx-0{margin-right:0}.mx-0{margin-left:0}.m-5{margin:5px}.mr-5,.mx-5{margin-right:5px}.mb-5{margin-bottom:5px}.ml-5,.mx-5{margin-left:5px}.mt-10{margin-top:10px}.mr-10{margin-right:10px}.mb-10{margin-bottom:10px}.ml-10{margin-left:10px}.mt-12{margin-top:12px}.mt-15,.my-15{margin-top:15px}.mb-15,.my-15{margin-bottom:15px}.mt-20,.my-20{margin-top:20px}.mb-20,.my-20{margin-bottom:20px}.mt-25{margin-top:25px}.mb-25{margin-bottom:25px}.mt-30{margin-top:30px}.mb-30{margin-bottom:30px}.mb-40{margin-bottom:40px}.pr-0,.px-0{padding-right:0}.pl-0,.px-0{padding-left:0}.py-2{padding-top:2px}.py-2{padding-bottom:2px}.p-5{padding:5px}.py-5{padding-top:5px}.pr-5,.px-5{padding-right:5px}.py-5{padding-bottom:5px}.pl-5,.px-5{padding-left:5px}.py-8{padding-top:8px}.px-8{padding-right:8px}.py-8{padding-bottom:8px}.px-8{padding-left:8px}.p-10{padding:10px}.pt-10,.py-10{padding-top:10px}.pr-10,.px-10{padding-right:10px}.pb-10,.py-10{padding-bottom:10px}.pl-10,.px-10{padding-left:10px}.pt-12,.py-12{padding-top:12px}.px-12{padding-right:12px}.pb-12,.py-12{padding-bottom:12px}.px-12{padding-left:12px}.p-15{padding:15px}.py-15{padding-top:15px}.px-15{padding-right:15px}.pb-15,.py-15{padding-bottom:15px}.px-15{padding-left:15px}.p-20{padding:20px}.pt-20{padding-top:20px}.pr-20,.px-20{padding-right:20px}.pb-20{padding-bottom:20px}.pl-20,.px-20{padding-left:20px}.pl-25{padding-left:25px}.py-30{padding-top:30px}.pb-30,.py-30{padding-bottom:30px}.pt-40{padding-top:40px}.pb-40{padding-bottom:40px}.pr-50,.px-50{padding-right:50px}.px-50{padding-left:50px}.mt-n2{margin-top:-2px}.m-n5{margin:-5px}.mx-n5{margin-right:-5px}.mx-n5{margin-left:-5px}.mx-n8{margin-right:-8px}.mx-n8{margin-left:-8px}.mx-n10{margin-right:-10px}.mx-n10{margin-left:-10px}.my-n15{margin-top:-15px}.my-n15{margin-bottom:-15px}.mr-n20{margin-right:-20px}.m-a{margin:auto}.mt-a,.my-a{margin-top:auto}.mx-a{margin-right:auto}.my-a{margin-bottom:auto}.ml-a,.mx-a{margin-left:auto}.l-str::after{content:"";position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;background-color:rgba(0,0,0,0)}.h1{font-weight:var(--h1-font-weight)}.h2{font-weight:var(--h2-font-weight)}.h3{font-weight:var(--h3-font-weight)}.h4{font-weight:var(--h4-font-weight)}.h5{font-weight:var(--h5-font-weight)}.h6{font-weight:var(--h6-font-weight)}.tc-w,.tc-w.btn{color:#fff}.tc-b,.tc-b.btn{color:#000}.tc-in,.tc-in.btn{color:inherit}.tc-p,.tc-p.btn{color:var(--primary)}.tc-pv,.tc-pv.btn{color:var(--primary-variant)}.tc-s,.tc-s.btn{color:var(--secondary)}.tc-sv,.tc-sv.btn{color:var(--secondary-variant)}.tc-n,.tc-n.btn{color:var(--neutral)}.tc-d,.tc-d.btn{color:var(--dark)}.tc-l,.tc-l.btn{color:var(--light)}.ta-l{text-align:left}.ta-c{text-align:center}.ta-r{text-align:right}.tt-u{text-transform:uppercase}.td-u{text-decoration:underline}.fs-0{font-size:0}.fs-10{font-size:10px}.fs-11{font-size:11px}.fs-12{font-size:12px}.fs-14{font-size:14px}.fs-15{font-size:15px}.fs-16{font-size:16px}.fs-18{font-size:18px}.fs-24{font-size:24px}.fw-l{font-weight:300}.fw-n{font-weight:400}.fw-m{font-weight:500}.fw-b{font-weight:700}.fw-bl{font-weight:800}.ws-nw{white-space:nowrap}@media (min-width: 768px){body{font-size:var(--font-size-desktop)}h1{font-size:var(--h1-desktop)}h2{font-size:var(--h2-desktop)}h3{font-size:var(--h3-desktop)}h4{font-size:var(--h4-desktop)}h5{font-size:var(--h5-desktop)}h6{font-size:var(--h6-desktop)}.row-u-sm{display:flex;flex-wrap:wrap}.col-u-sm{flex-basis:0;flex-grow:1;max-width:100%}.col-u-sm-auto{flex:0 0 auto;width:auto;max-width:100%}.order-u-sm-1{order:1}.col-u-sm-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.order-u-sm-2{order:2}.col-u-sm-3{flex:0 0 25%;max-width:25%}.order-u-sm-3{order:3}.col-u-sm-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-u-sm-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-u-sm-6{flex:0 0 50%;max-width:50%}.btn{font-size:18px}.btn--sm{font-size:14px}.row-u-sm-3 .col{flex:0 0 25%;max-width:25%}.row-u-sm-4 .col{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-u-sm-6 .col{flex:0 0 50%;max-width:50%}.row-u-sm-2-3 .col:nth-child(odd){flex:0 0 66.6666666667%;max-width:66.6666666667%}.row-u-sm-2-3 .col:nth-child(even){flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-u-sm-3-2 .col:nth-child(odd){flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-u-sm-3-2 .col:nth-child(even){flex:0 0 66.6666666667%;max-width:66.6666666667%}.wp-editor h1,.wp-editor h2,.wp-editor h3,.wp-editor h4,.wp-editor h5,.wp-editor h6{clear:both}.wp-editor blockquote{margin-left:40px;padding:40px 40px 40px 80px;font-size:20px}.wp-editor blockquote::before{top:0;bottom:0;left:-40px;width:80px;height:80px}.shd{margin-top:80px}.shd .header{position:fixed;top:0;left:0;right:0;z-index:999}.header__logo{max-width:260px;height:60px}.bg-u-sm-p+.sbb{background-image:linear-gradient(to bottom, var(--primary) 50%, var(--primary) 50%)}.bg-u-sm-pv+.sbb{background-image:linear-gradient(to bottom, var(--primary-variant) 50%, var(--primary) 50%)}.bg-u-sm-s+.sbb{background-image:linear-gradient(to bottom, var(--secondary) 50%, var(--primary) 50%)}.bg-u-sm-sv+.sbb{background-image:linear-gradient(to bottom, var(--secondary-variant) 50%, var(--primary) 50%)}.bg-u-sm-n+.sbb{background-image:linear-gradient(to bottom, var(--neutral) 50%, var(--primary) 50%)}.bg-u-sm-d+.sbb{background-image:linear-gradient(to bottom, var(--dark) 50%, var(--primary) 50%)}.bg-u-sm-l+.sbb{background-image:linear-gradient(to bottom, var(--light) 50%, var(--primary) 50%)}.recoms li:not(:last-child){margin-right:35px}.bg-u-sm-w{background-color:#fff}.bg-u-sm-b{background-color:#000}.bg-u-sm-tr-10{background-color:rgba(35,34,34,.1)}.bg-u-sm-inherit{background-color:inherit}.bg-u-sm-p{background-color:var(--primary)}.bg-u-sm-pv{background-color:var(--primary-variant)}.bg-u-sm-s{background-color:var(--secondary)}.bg-u-sm-sv{background-color:var(--secondary-variant)}.bg-u-sm-n{background-color:var(--neutral)}.bg-u-sm-d{background-color:var(--dark)}.bg-u-sm-l{background-color:var(--light)}.br-u-sm-10{border-radius:10px}.br-u-sm-20{border-radius:20px}.br-u-sm-c{border-radius:50%}.d-u-sm-n{display:none}.d-u-sm-ib{display:inline-block}.d-u-sm-f{display:flex}.d-u-sm-if{display:inline-flex}.f-u-sm-c{flex-direction:column}.ai-u-sm-fe{align-items:flex-end}.ai-u-sm-c{align-items:center}.jc-u-sm-sb{justify-content:space-between}.mx-u-sm-0{margin-right:0}.mx-u-sm-0{margin-left:0}.mt-u-sm-5,.my-u-sm-5{margin-top:5px}.my-u-sm-5{margin-bottom:5px}.my-u-sm-10{margin-top:10px}.mb-u-sm-10,.my-u-sm-10{margin-bottom:10px}.mt-u-sm-15{margin-top:15px}.mb-u-sm-15{margin-bottom:15px}.mb-u-sm-20{margin-bottom:20px}.mb-u-sm-25{margin-bottom:25px}.mt-u-sm-30{margin-top:30px}.mb-u-sm-30{margin-bottom:30px}.mt-u-sm-40{margin-top:40px}.pr-u-sm-0,.px-u-sm-0{padding-right:0}.pl-u-sm-0,.px-u-sm-0{padding-left:0}.px-u-sm-5{padding-right:5px}.pb-u-sm-5{padding-bottom:5px}.px-u-sm-5{padding-left:5px}.py-u-sm-8{padding-top:8px}.py-u-sm-8{padding-bottom:8px}.pt-u-sm-10,.py-u-sm-10{padding-top:10px}.px-u-sm-10{padding-right:10px}.py-u-sm-10{padding-bottom:10px}.px-u-sm-10{padding-left:10px}.py-u-sm-15{padding-top:15px}.px-u-sm-15{padding-right:15px}.py-u-sm-15{padding-bottom:15px}.px-u-sm-15{padding-left:15px}.p-u-sm-20{padding:20px}.py-u-sm-20{padding-top:20px}.px-u-sm-20{padding-right:20px}.py-u-sm-20{padding-bottom:20px}.px-u-sm-20{padding-left:20px}.p-u-sm-25{padding:25px}.pr-u-sm-25{padding-right:25px}.pb-u-sm-25{padding-bottom:25px}.p-u-sm-30{padding:30px}.pt-u-sm-30,.py-u-sm-30{padding-top:30px}.px-u-sm-30{padding-right:30px}.pb-u-sm-30,.py-u-sm-30{padding-bottom:30px}.px-u-sm-30{padding-left:30px}.p-u-sm-40{padding:40px}.py-u-sm-40{padding-top:40px}.px-u-sm-40{padding-right:40px}.py-u-sm-40{padding-bottom:40px}.px-u-sm-40{padding-left:40px}.pt-u-sm-50,.py-u-sm-50{padding-top:50px}.pb-u-sm-50,.py-u-sm-50{padding-bottom:50px}.pt-u-sm-60,.py-u-sm-60{padding-top:60px;}main{min-height: 40vh;}.py-u-sm-60{padding-bottom:60px}.pt-u-sm-80,.py-u-sm-80{padding-top:80px}.pb-u-sm-80,.py-u-sm-80{padding-bottom:80px}.mx-u-sm-n5{margin-right:-5px}.mx-u-sm-n5{margin-left:-5px}.mx-u-sm-n10{margin-right:-10px}.mx-u-sm-n10{margin-left:-10px}.mt-u-sm-n20{margin-top:-20px}.mx-u-sm-n20{margin-right:-20px}.mx-u-sm-n20{margin-left:-20px}.mt-u-sm-a{margin-top:auto}.mx-u-sm-a{margin-right:auto}.mx-u-sm-a{margin-left:auto}.h1{font-size:var(--h1-desktop)}.h2{font-size:var(--h2-desktop)}.h3{font-size:var(--h3-desktop)}.h4{font-size:var(--h4-desktop)}.h5{font-size:var(--h5-desktop)}.h6{font-size:var(--h6-desktop)}.tc-u-sm-w,.tc-u-sm-w.btn{color:#fff}.ta-u-sm-l{text-align:left}.ta-u-sm-c{text-align:center}.ta-u-sm-r{text-align:right}.tt-u-sm-u{text-transform:uppercase}.fs-u-sm-0{font-size:0}.fs-u-sm-12{font-size:12px}.fs-u-sm-15{font-size:15px}.fs-u-sm-16{font-size:16px}.fs-u-sm-18{font-size:18px}.fs-u-sm-20{font-size:20px}.fs-u-sm-28{font-size:28px}.fw-u-sm-n{font-weight:400}.fw-u-sm-b{font-weight:700}}@media (max-width: 767.98px){body{font-size:var(--font-size-mobile)}h1{font-size:var(--h1-mobile)}h2{font-size:var(--h2-mobile)}h3{font-size:var(--h3-mobile)}h4{font-size:var(--h4-mobile)}h5{font-size:var(--h5-mobile)}h6{font-size:var(--h6-mobile)}.row-o-xs{display:flex;flex-wrap:wrap}.col-o-xs{flex-basis:0;flex-grow:1;max-width:100%}.col-o-xs-auto{flex:0 0 auto;width:auto;max-width:100%}.col-o-xs-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-o-xs-6{flex:0 0 50%;max-width:50%}.col-o-xs-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-o-xs-12{flex:0 0 100%;max-width:100%}.field{font-size:16px}.btn{font-size:18px}.btn--sm{font-size:14px}.row-o-xs-3 .col{flex:0 0 25%;max-width:25%}.row-o-xs-4 .col{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-o-xs-6 .col{flex:0 0 50%;max-width:50%}.row-o-xs-2-3 .col:nth-child(odd){flex:0 0 66.6666666667%;max-width:66.6666666667%}.row-o-xs-2-3 .col:nth-child(even){flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-o-xs-3-2 .col:nth-child(odd){flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-o-xs-3-2 .col:nth-child(even){flex:0 0 66.6666666667%;max-width:66.6666666667%}.row-u-sm-3:not([class*=row-o-xs-]) .col:not(:last-child),.row-u-sm-4:not([class*=row-o-xs-]) .col:not(:last-child),.row-u-sm-6:not([class*=row-o-xs-]) .col:not(:last-child),.row-u-sm-2-3:not([class*=row-o-xs-]) .col:not(:last-child),.row-u-sm-3-2:not([class*=row-o-xs-]) .col:not(:last-child){margin-bottom:30px}.wp-editor table{display:block}.wp-editor blockquote{margin-top:20px;padding:30px 25px 20px;font-size:17px;text-align:center}.wp-editor blockquote::before{top:-20px;left:0;right:0;width:40px;height:40px;background-size:25px auto}.shm{margin-top:72px}.shm .header{position:fixed;top:0;left:0;right:0;z-index:999}.header__logo{max-width:200px;height:40px}.bg-o-xs-p+.sbb{background-image:linear-gradient(to bottom, var(--primary) 50%, var(--primary) 50%)}.bg-o-xs-pv+.sbb{background-image:linear-gradient(to bottom, var(--primary-variant) 50%, var(--primary) 50%)}.bg-o-xs-s+.sbb{background-image:linear-gradient(to bottom, var(--secondary) 50%, var(--primary) 50%)}.bg-o-xs-sv+.sbb{background-image:linear-gradient(to bottom, var(--secondary-variant) 50%, var(--primary) 50%)}.bg-o-xs-n+.sbb{background-image:linear-gradient(to bottom, var(--neutral) 50%, var(--primary) 50%)}.bg-o-xs-d+.sbb{background-image:linear-gradient(to bottom, var(--dark) 50%, var(--primary) 50%)}.bg-o-xs-l+.sbb{background-image:linear-gradient(to bottom, var(--light) 50%, var(--primary) 50%)}.recoms li:not(:last-child){margin-right:15px}.bg-o-xs-w{background-color:#fff}.bg-o-xs-b{background-color:#000}.bg-o-xs-tr-10{background-color:rgba(35,34,34,.1)}.bg-o-xs-inherit{background-color:inherit}.bg-o-xs-p{background-color:var(--primary)}.bg-o-xs-pv{background-color:var(--primary-variant)}.bg-o-xs-s{background-color:var(--secondary)}.bg-o-xs-sv{background-color:var(--secondary-variant)}.bg-o-xs-n{background-color:var(--neutral)}.bg-o-xs-d{background-color:var(--dark)}.bg-o-xs-l{background-color:var(--light)}.br-o-xs-6{border-radius:6px}.br-o-xs-c{border-radius:50%}.d-o-xs-n{display:none}.d-o-xs-ib{display:inline-block}.d-o-xs-b{display:block}.d-o-xs-if{display:inline-flex}.f-o-xs-c{flex-direction:column}.ai-o-xs-c{align-items:center}.jc-o-xs-c{justify-content:center}.as-o-xs-c{align-self:center}.ps-o-xs-r{position:relative}.w-o-xs-100{width:100%}.h-o-xs-100{height:100%}.m-o-xs-0{margin:0}.mt-o-xs-10{margin-top:10px}.mb-o-xs-10{margin-bottom:10px}.mt-o-xs-15{margin-top:15px}.mb-o-xs-15{margin-bottom:15px}.mt-o-xs-20,.my-o-xs-20{margin-top:20px}.mb-o-xs-20,.my-o-xs-20{margin-bottom:20px}.p-o-xs-0{padding:0}.px-o-xs-0{padding-right:0}.px-o-xs-0{padding-left:0}.p-o-xs-5{padding:5px}.px-o-xs-5{padding-right:5px}.px-o-xs-5{padding-left:5px}.p-o-xs-10{padding:10px}.pt-o-xs-10,.py-o-xs-10{padding-top:10px}.px-o-xs-10{padding-right:10px}.py-o-xs-10{padding-bottom:10px}.pl-o-xs-10,.px-o-xs-10{padding-left:10px}.p-o-xs-15{padding:15px}.pt-o-xs-15,.py-o-xs-15{padding-top:15px}.py-o-xs-15{padding-bottom:15px}.p-o-xs-20{padding:20px}.py-o-xs-20{padding-top:20px}.px-o-xs-20{padding-right:20px}.pb-o-xs-20,.py-o-xs-20{padding-bottom:20px}.px-o-xs-20{padding-left:20px}.p-o-xs-25{padding:25px}.py-o-xs-25{padding-top:25px}.py-o-xs-25{padding-bottom:25px}.pt-o-xs-30,.py-o-xs-30{padding-top:30px}.pb-o-xs-30,.py-o-xs-30{padding-bottom:30px}.pt-o-xs-40,.py-o-xs-40{padding-top:40px}.pb-o-xs-40,.py-o-xs-40{padding-bottom:40px}.mt-o-xs-n5{margin-top:-5px}.mx-o-xs-n5{margin-right:-5px}.mx-o-xs-n5{margin-left:-5px}.my-o-xs-a{margin-top:auto}.my-o-xs-a{margin-bottom:auto}.ml-o-xs-a{margin-left:auto}.h1{font-size:var(--h1-mobile)}.h2{font-size:var(--h2-mobile)}.h3{font-size:var(--h3-mobile)}.h4{font-size:var(--h4-mobile)}.h5{font-size:var(--h5-mobile)}.h6{font-size:var(--h6-mobile)}.tc-o-xs-w,.tc-o-xs-w:hover{color:#fff}.tc-o-xs-b,.tc-o-xs-b:hover{color:#000}.tc-o-xs-d,.tc-o-xs-d:hover{color:var(--dark)}.ta-o-xs-l{text-align:left}.ta-o-xs-c{text-align:center}.ta-o-xs-r{text-align:right}.td-o-xs-u{text-decoration:underline}.fs-o-xs-13{font-size:13px}.fs-o-xs-14{font-size:14px}.fs-o-xs-16{font-size:16px}.fs-o-xs-18{font-size:18px}.fw-o-xs-n{font-weight:400}.row-u-sm-default .col:not(:last-child){margin-bottom: 25px}}@media (min-width: 768px)and (max-width: 991.98px){.container{max-width:768px}.col-o-sm{flex-basis:0;flex-grow:1;max-width:100%}.col-o-sm-auto{flex:0 0 auto;width:auto;max-width:100%}.col-o-sm-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-o-sm-6{flex:0 0 50%;max-width:50%}.bg-o-sm-w{background-color:#fff}.bg-o-sm-b{background-color:#000}.bg-o-sm-tr-10{background-color:rgba(35,34,34,.1)}.bg-o-sm-inherit{background-color:inherit}.bg-o-sm-p{background-color:var(--primary)}.bg-o-sm-pv{background-color:var(--primary-variant)}.bg-o-sm-s{background-color:var(--secondary)}.bg-o-sm-sv{background-color:var(--secondary-variant)}.bg-o-sm-n{background-color:var(--neutral)}.bg-o-sm-d{background-color:var(--dark)}.bg-o-sm-l{background-color:var(--light)}.mb-o-sm-30{margin-bottom:30px}.px-o-sm-5{padding-right:5px}.px-o-sm-5{padding-left:5px}.p-o-sm-10{padding:10px}.p-o-sm-15{padding:15px}.p-o-sm-20{padding:20px}.mx-o-sm-n5{margin-right:-5px}.mx-o-sm-n5{margin-left:-5px}.fs-o-sm-16{font-size:16px}}@media (min-width: 992px)and (max-width: 1229.98px){.container{max-width:990px}.col-o-md{flex-basis:0;flex-grow:1;max-width:100%}.col-o-md-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-o-md-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-o-md-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.bg-o-md-w{background-color:#fff}.bg-o-md-b{background-color:#000}.bg-o-md-tr-10{background-color:rgba(35,34,34,.1)}.bg-o-md-inherit{background-color:inherit}.bg-o-md-p{background-color:var(--primary)}.bg-o-md-pv{background-color:var(--primary-variant)}.bg-o-md-s{background-color:var(--secondary)}.bg-o-md-sv{background-color:var(--secondary-variant)}.bg-o-md-n{background-color:var(--neutral)}.bg-o-md-d{background-color:var(--dark)}.bg-o-md-l{background-color:var(--light)}.p-o-md-0{padding:0}.pr-o-md-0{padding-right:0}.p-o-md-10{padding:10px}.pr-o-md-10{padding-right:10px}.p-o-md-15{padding:15px}.fs-o-md-11{font-size:11px}}@media (min-width: 1230px){.container{max-width:1320px}.tab-item .container{max-width: 1150px}.row-u-lg{display:flex;flex-wrap:wrap}.col-u-lg{flex-basis:0;flex-grow:1;max-width:100%}.col-u-lg-auto{flex:0 0 auto;width:auto;max-width:100%}.col-u-lg-3{flex:0 0 25%;max-width:25%}.col-u-lg-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-u-lg-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-u-lg-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.primary-nav>li:not(:last-child){margin-right:25px}.bg-u-lg-w{background-color:#fff}.bg-u-lg-b{background-color:#000}.bg-u-lg-tr-10{background-color:rgba(35,34,34,.1)}.bg-u-lg-inherit{background-color:inherit}.bg-u-lg-p{background-color:var(--primary)}.bg-u-lg-pv{background-color:var(--primary-variant)}.bg-u-lg-s{background-color:var(--secondary)}.bg-u-lg-sv{background-color:var(--secondary-variant)}.bg-u-lg-n{background-color:var(--neutral)}.bg-u-lg-d{background-color:var(--dark)}.bg-u-lg-l{background-color:var(--light)}.bg-o-lg-w{background-color:#fff}.bg-o-lg-b{background-color:#000}.bg-o-lg-tr-10{background-color:rgba(35,34,34,.1)}.bg-o-lg-inherit{background-color:inherit}.bg-o-lg-p{background-color:var(--primary)}.bg-o-lg-pv{background-color:var(--primary-variant)}.bg-o-lg-s{background-color:var(--secondary)}.bg-o-lg-sv{background-color:var(--secondary-variant)}.bg-o-lg-n{background-color:var(--neutral)}.bg-o-lg-d{background-color:var(--dark)}.bg-o-lg-l{background-color:var(--light)}.f-u-lg-c{flex-direction:column}.ai-u-lg-c{align-items:center}.jc-u-lg-sb{justify-content:space-between}.mt-u-lg-15{margin-top:15px}.p-u-lg-15{padding:15px}.pr-u-lg-15{padding-right:15px}.p-u-lg-20{padding:20px}.pr-u-lg-20,.px-u-lg-20{padding-right:20px}.px-u-lg-20{padding-left:20px}.p-u-lg-25{padding:25px}.px-u-lg-25{padding-right:25px}.px-u-lg-25{padding-left:25px}.p-u-lg-30{padding:30px}.px-u-lg-30{padding-right:30px}.pl-u-lg-30,.px-u-lg-30{padding-left:30px}.px-u-lg-40{padding-right:40px}.pb-u-lg-40{padding-bottom:40px}.px-u-lg-40{padding-left:40px}.px-u-lg-50{padding-right:50px}.px-u-lg-50{padding-left:50px}.mx-u-lg-n20{margin-right:-20px}.mx-u-lg-n20{margin-left:-20px}.fs-u-lg-12{font-size:12px}}@media (max-width: 991.98px){.row-d-sm{display:flex;flex-wrap:wrap}.col-d-sm{flex-basis:0;flex-grow:1;max-width:100%}.col-d-sm-auto{flex:0 0 auto;width:auto;max-width:100%}.wp-editor th,.wp-editor td{padding-left:10px;padding-right:10px}img.alignleft,img.alignright{display:block;margin-left:auto;margin-right:auto}.mmo{position:relative}.mmo::before{content:"";position:absolute;top:0;right:0;bottom:0;left:0;z-index:5;background:rgba(106,112,109,.95)}.primary-nav{display:none;position:absolute;top:100%;left:0;right:0;z-index:5}.mmo .primary-nav{display:block}.primary-nav>li:not(:last-child){border-bottom:1px solid #f2f2fa}.primary-nav>li>a{padding-top:20px;padding-bottom:20px}.primary-nav .menu-item-has-children.open{background:#f2f2fa}.primary-nav .menu-item-has-children.open>a::after{transform:rotate(180deg)}.primary-nav .menu-item-has-children.open>.sub-menu{display:block}.primary-nav .menu-item-has-children>a{margin-right:-20px}.primary-nav .sub-menu{padding-bottom:13px;background:#f2f2fa}.primary-nav .sub-menu a{padding-top:13px;padding-bottom:13px}.f-menu-title{position:relative;border-bottom:1px solid #4f48b0}.f-menu-title.active{border-bottom-color:transparent}.f-menu-title.active::before,.f-menu-title.active::after{background:#fff}.f-menu-title.active::before{transform:translate(5px, 0) rotate(45deg)}.f-menu-title.active::after{transform:translate(-5px, 0) rotate(-45deg)}.f-menu-icon{position:absolute;top:0;right:0;bottom:0;width:30px;height:30px;background:#fff}.active .f-menu-icon{background:var(--primary);transform:rotate(180deg)}.active .f-menu-icon path{fill:#fff}.f-menu{padding-bottom:20px;display:none;border-bottom:1px solid rgba(255,255,255,.1)}.active .f-menu{display:block}.bg-d-sm-w{background-color:#fff}.bg-d-sm-b{background-color:#000}.bg-d-sm-tr-10{background-color:rgba(35,34,34,.1)}.bg-d-sm-inherit{background-color:inherit}.bg-d-sm-p{background-color:var(--primary)}.bg-d-sm-pv{background-color:var(--primary-variant)}.bg-d-sm-s{background-color:var(--secondary)}.bg-d-sm-sv{background-color:var(--secondary-variant)}.bg-d-sm-n{background-color:var(--neutral)}.bg-d-sm-d{background-color:var(--dark)}.bg-d-sm-l{background-color:var(--light)}.br-d-sm-p{border-radius:50rem}.d-d-sm-n{display:none}.d-d-sm-ib{display:inline-block}.ai-d-sm-c{align-items:center}.jc-d-sm-c{justify-content:center}.of-d-sm-h{overflow:hidden}.mt-d-sm-10{margin-top:10px}.mb-d-sm-10{margin-bottom:10px}.mb-d-sm-15{margin-bottom:15px}.mt-d-sm-20{margin-top:20px}.mb-d-sm-20{margin-bottom:20px}.py-d-sm-5{padding-top:5px}.px-d-sm-5{padding-right:5px}.py-d-sm-5{padding-bottom:5px}.px-d-sm-5{padding-left:5px}.px-d-sm-10{padding-right:10px}.px-d-sm-10{padding-left:10px}.p-d-sm-15{padding:15px}.pr-d-sm-15{padding-right:15px}.pb-d-sm-15{padding-bottom:15px}.py-d-sm-20{padding-top:20px}.py-d-sm-20{padding-bottom:20px}.py-d-sm-30{padding-top:30px}.py-d-sm-30{padding-bottom:30px}.mx-d-sm-n5{margin-right:-5px}.mx-d-sm-n5{margin-left:-5px}.mx-d-sm-n10{margin-right:-10px}.mx-d-sm-n10{margin-left:-10px}.mx-d-sm-a{margin-right:auto}.mx-d-sm-a{margin-left:auto}.tc-d-sm-w,.tc-d-sm-w.btn{color:#fff}.tc-d-sm-b,.tc-d-sm-b.btn{color:#000}.tc-d-sm-in,.tc-d-sm-in.btn{color:inherit}.tc-d-sm-p,.tc-d-sm-p.btn{color:var(--primary)}.tc-d-sm-pv,.tc-d-sm-pv.btn{color:var(--primary-variant)}.tc-d-sm-s,.tc-d-sm-s.btn{color:var(--secondary)}.tc-d-sm-sv,.tc-d-sm-sv.btn{color:var(--secondary-variant)}.tc-d-sm-n,.tc-d-sm-n.btn{color:var(--neutral)}.tc-d-sm-d,.tc-d-sm-d.btn{color:var(--dark)}.tc-d-sm-l,.tc-d-sm-l.btn{color:var(--light)}.ta-d-sm-l{text-align:left}.ta-d-sm-c{text-align:center}.tt-d-sm-u{text-transform:uppercase}.fs-d-sm-12{font-size:12px}.fs-d-sm-16{font-size:16px}.fw-d-sm-n{font-weight:400}}@media (min-width: 992px){.row-u-md{display:flex;flex-wrap:wrap}.col-u-md{flex-basis:0;flex-grow:1;max-width:100%}.col-u-md-auto{flex:0 0 auto;width:auto;max-width:100%}.order-u-md-1{order:1}.order-u-md-2{order:2}.col-u-md-3{flex:0 0 25%;max-width:25%}.order-u-md-3{order:3}.col-u-md-6{flex:0 0 50%;max-width:50%}.col-u-md-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-u-md-9{flex:0 0 75%;max-width:75%}.wp-editor th,.wp-editor td{padding-left:30px;padding-right:30px}img.alignleft{float:left;margin-right:20px}img.alignright{float:right;margin-left:20px}.primary-nav a{padding-top:14px;padding-bottom:14px}.primary-nav>li>a{padding-left:15px;padding-right:15px;border-radius:10px}.primary-nav>li>a:hover{color:#fff;background-color:var(--primary-variant)}.primary-nav>li>a:hover::after{border-top-color:#fff}.primary-nav .menu-item-has-children{position:relative}.primary-nav .menu-item-has-children:hover::after{content:"";position:absolute;bottom:-4px;right:15px;width:8px;height:8px;background:#fff;transform:rotate(45deg);border-top:1px solid #e8e8fa;border-left:1px solid #e8e8fa}.primary-nav .menu-item-has-children:hover>.sub-menu{display:block}.primary-nav .sub-menu{position:absolute;top:100%;left:0;width:288px;padding-left:15px;padding-right:15px;border:1px solid #e8e8fa;background:#fff}.primary-nav .sub-menu>li:not(:last-child){border-bottom:1px solid #f2f2fa}.primary-nav .sub-menu a:hover{color:var(--primary-variant)}.col-fl{flex:0 0 33.4848484848%;max-width:33.4848484848%}.bg-u-md-w{background-color:#fff}.bg-u-md-b{background-color:#000}.bg-u-md-tr-10{background-color:rgba(35,34,34,.1)}.bg-u-md-inherit{background-color:inherit}.bg-u-md-p{background-color:var(--primary)}.bg-u-md-pv{background-color:var(--primary-variant)}.bg-u-md-s{background-color:var(--secondary)}.bg-u-md-sv{background-color:var(--secondary-variant)}.bg-u-md-n{background-color:var(--neutral)}.bg-u-md-d{background-color:var(--dark)}.bg-u-md-l{background-color:var(--light)}.br-u-md-p{border-radius:50rem}.d-u-md-n{display:none}.d-u-md-ib{display:inline-block}.d-u-md-f{display:flex}.f-u-md-c{flex-direction:column}.ai-u-md-c{align-items:center}.jc-u-md-fe{justify-content:flex-end}.jc-u-md-c{justify-content:center}.ps-u-md-r{position:relative}.mx-u-md-0{margin-right:0}.ml-u-md-0,.mx-u-md-0{margin-left:0}.mt-u-md-10{margin-top:10px}.mb-u-md-10{margin-bottom:10px}.mb-u-md-25{margin-bottom:25px}.mb-u-md-30{margin-bottom:30px}.px-u-md-0{padding-right:0}.px-u-md-0{padding-left:0}.py-u-md-5{padding-top:5px}.px-u-md-5{padding-right:5px}.py-u-md-5{padding-bottom:5px}.px-u-md-5{padding-left:5px}.px-u-md-10{padding-right:10px}.px-u-md-10{padding-left:10px}.p-u-md-20{padding:20px}.px-u-md-30{padding-right:30px}.px-u-md-30{padding-left:30px}.pr-u-md-40{padding-right:40px}.pb-u-md-40{padding-bottom:40px}.py-u-md-50{padding-top:50px}.py-u-md-50{padding-bottom:50px}.mx-u-md-n5{margin-right:-5px}.mx-u-md-n5{margin-left:-5px}.mx-u-md-n10{margin-right:-10px}.mx-u-md-n10{margin-left:-10px}.mt-u-md-a{margin-top:auto}.ml-u-md-a{margin-left:auto}.tc-u-md-pv,.tc-u-md-pv.btn{color:var(--primary-variant)}.ta-u-md-c{text-align:center}.tt-u-md-u{text-transform:uppercase}.fs-u-md-12{font-size:12px}.fs-u-md-14{font-size:14px}.fw-u-md-n{font-weight:400}}@media (max-width: 1229.98px){.bg-d-md-w{background-color:#fff}.bg-d-md-b{background-color:#000}.bg-d-md-tr-10{background-color:rgba(35,34,34,.1)}.bg-d-md-inherit{background-color:inherit}.bg-d-md-p{background-color:var(--primary)}.bg-d-md-pv{background-color:var(--primary-variant)}.bg-d-md-s{background-color:var(--secondary)}.bg-d-md-sv{background-color:var(--secondary-variant)}.bg-d-md-n{background-color:var(--neutral)}.bg-d-md-d{background-color:var(--dark)}.bg-d-md-l{background-color:var(--light)}.ai-d-md-c{align-items:center}.mt-d-md-15{margin-top:15px}.pr-d-md-10,.px-d-md-10{padding-right:10px}.px-d-md-10{padding-left:10px}.p-d-md-15{padding:15px}.px-d-md-15{padding-right:15px}.px-d-md-15{padding-left:15px}.p-d-md-20{padding:20px}.ml-d-md-a{margin-left:auto}.tc-d-md-w,.tc-d-md-w.btn{color:#fff}.tc-d-md-b,.tc-d-md-b.btn{color:#000}.tc-d-md-in,.tc-d-md-in.btn{color:inherit}.tc-d-md-p,.tc-d-md-p.btn{color:var(--primary)}.tc-d-md-pv,.tc-d-md-pv.btn{color:var(--primary-variant)}.tc-d-md-s,.tc-d-md-s.btn{color:var(--secondary)}.tc-d-md-sv,.tc-d-md-sv.btn{color:var(--secondary-variant)}.tc-d-md-n,.tc-d-md-n.btn{color:var(--neutral)}.tc-d-md-d,.tc-d-md-d.btn{color:var(--dark)}.tc-d-md-l,.tc-d-md-l.btn{color:var(--light)}}.wp-editor ol{margin-bottom:25px;list-style:none}.wp-editor ol li{position:relative;padding-left:20px;counter-increment:wettcounter;background:0 0}.wp-editor ol li::before{content:counter(wettcounter) '.';position:absolute;left:0;width:8px;height:8px;color:var(--primary-variant);font-weight:900}.tab-item{display: none}.tab-item.active{display: block}.ht__step, .ub__box{background: #fff}.default-img{background-repeat: no-repeat;background-position: center;background-size: contain;}.widget-content ul li {position: relative;padding-left: 15px}.widget-content ul li{margin-bottom:23px}.widget-content ul li a {color:white}.widget-content ul li::before{content: "";position: absolute;top: 3px;left: 0;width: 7px;height: 7px;border-top: 1px solid #fff;border-right: 1px solid #fff;opacity: .6;transform: rotate(45deg);}.widget-content option, .widget-content option[selected]{color: #0a0a0a;}

/****
* root.css
*****/
:root {--primary:#5eeaa7;--primary-hover:#37c686;--primary-variant:#5e34ff;--primary-variant-hover:#2700c4;--secondary:#f3fcf8;--secondary-hover:#c7fce4;--secondary-variant:#eef4f1;--secondary-variant-hover:#d9f4e8;--neutral:#6a6a70;--neutral-hover:#5d5d70;--dark:#303238;--dark-hover:#000738;--light:#f6f6f6;--light-hover:#f4e8e8;--text-color:#0e0f0e;--link-color:#5e34ff;--link-hover-color:#2700c4;--headings-color:#0e0f0e;--font-family:Montserrat;--font-size-desktop:14px;--font-size-mobile:14px;--font-weight:300;--h1-desktop:46px;--h1-mobile:30px;--h1-font-weight:800;--h2-desktop:40px;--h2-mobile:26px;--h2-font-weight:800;--h3-desktop:32px;--h3-mobile:24px;--h3-font-weight:700;--h4-desktop:24px;--h4-mobile:20px;--h4-font-weight:700;--h5-desktop:20px;--h5-mobile:20px;--h5-font-weight:700;--h6-desktop:16px;--h6-mobile:16px;--h6-font-weight:700;}
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}

/****
* search-form.css
*****/
.sho{position:relative}.sho::before{content:"";position:absolute;top:0;right:0;bottom:0;left:0;z-index:5;background:rgba(106,112,109,.95)}.sf{position:absolute;left:0;right:0;z-index:999}.sho .sf{display:block;background:#fff}.sf__hf{padding:20px 0;background:var(--light)}.sf__form button{width:60px;height:60px}.sf__form input{height:60px}.sf__form input::-moz-placeholder{color:var(--neutral)}.sf__form input:-ms-input-placeholder{color:var(--neutral)}.sf__form input::placeholder{color:var(--neutral)}.sho .sf__sg{padding-top:30px;padding-bottom:20px}.sf__lk{height:33px;color:var(--neutral);background:#fff;border:1px solid var(--light)}.sf__lk:hover{color:var(--primary-variant);border-color:var(--primary-variant);text-decoration:none}@media (min-width: 768px){.sf__form{border:2px solid rgba(35,34,34,.1)}}@media (max-width: 767.98px){.sf__form{border-top:1px solid #f2f2fa;border-bottom:1px solid #f2f2fa}}@media (min-width: 992px){.sf__thumb{width:120px;height:100px}}@media (max-width: 991.98px){.sf__thumb{height:90px}}

/****
* faq.css
*****/
.faq{background:#fff}.faq:not(.active) .wp-editor{display:none}.faq:not(:last-child){margin-bottom:20px}.faq.active{box-shadow:0 4px 14px rgba(0,0,0,.14)}.faq__q{min-height:38px;line-height:1.4;padding-right:70px}.faq__q:hover,.faq__q.active{color:var(--primary-variant)}.faq__i{position:absolute;right:0;border-radius:50%;background:var(--primary-variant);border:2px solid var(--primary-variant)}.faq__i::before,.faq__i::after{content:"";position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:16px;height:2px;background:#fff}.faq__i::after{transform:rotate(90deg)}.active .faq__i{background:transparent}.active .faq__i::before{z-index:2;background:var(--primary-variant)}@media (min-width: 768px){.faq__i{top:5px;width:38px;height:38px}}@media (max-width: 767.98px){.faq__i{top:3px;width:30px;height:30px}}


/****
* simple-header
*****/
.sh .breadcrumbs{position:absolute;top:0;left:0;right:0;z-index:2}.sh img{width:auto;max-height:130px;border-radius:12px}@media (min-width: 768px){.sh.ta-u-sm-c .sh__cnt{max-width:860px}.sh+.ts{margin-top:30px}.sh--bs{padding-bottom:100px;margin-bottom:-54px}.sh--bs+.ls{padding-top:0}.sh--bs+.ls .lsf{position:relative;z-index:2}}@media (max-width: 767.98px){.sh+.ts{margin-top:15px}}


/****
* list-casinos
****/
.cd__item{padding:8px 0}.cd__item:not(:last-child){border-bottom:1px solid rgba(35,34,34,.1)}.cd__payment{width:40px;height:27px}.cd__payment img{max-width:none;height:100%}.cf__form .field{border:1px solid rgba(35,34,34,.1)}.lc__tc{color:#92959f;font-size:10px}.lc__tc a{color:inherit}.cc__badge{position:absolute;top:9px;left:-44px;z-index:3;border-top:1px solid #fff;border-bottom:1px solid #fff;transform:rotate(-45deg)}.cc__thumb__link{position:absolute;top:0;right:0;bottom:0;left:0}.cl{border:2px solid transparent}.cl--ordered{counter-reset:item}.cl--ordered .cl{counter-increment:item}.cl--ordered .cl::before{content:counter(item);position:absolute;color:#fff;font-size:12px;font-weight:700;text-align:center;z-index:3;border-radius:50%}.cl--ordered .cl:first-child{border-color:var(--primary);background:var(--secondary)}.cl--ordered .cl:first-child::before{top:-11px;left:-16px;width:30px;height:30px;line-height:30px;color:var(--primary-variant);background:transparent}.cl--ordered .cl:not(:first-child)::before{top:-7px;left:-11px;width:26px;height:26px;line-height:26px;background-color:var(--primary-variant)}.cl--opened{border-color:var(--primary);background:var(--secondary)}.cl--opened::after{content:"";position:absolute;top:0;right:0;bottom:0;left:0;z-index:-1;box-shadow:0 8px 14px var(--primary);opacity:.15}.cl__star{position:absolute;top:-13px;left:-16px;z-index:2}.cl__res{color:#92959f}.cl__cf{width:20px;height:20px;border:2px solid #fff}.cl__cf img{width:auto;height:100% !important;max-width:none !important}.cl__btn-mi:not(.loading)::after{content:"";display:inline-block;width:0;height:0;margin-left:5px;vertical-align:middle;border-right:3px solid transparent;border-left:3px solid transparent;border-top:6px solid var(--neutral)}.cl__btn-mi:not(.loading) svg{display:none}.cl--opened .cl__btn-mi::after{border-top:none;border-bottom:6px solid var(--neutral)}.cl__btn-mi:hover{color:var(--primary-variant)}.cl__btn-mi:hover::after{border-top-color:var(--primary-variant);border-bottom-color:var(--primary-variant)}.cl__btn-mi:hover .fill{fill:var(--primary-variant)}.cl__btn-mi:hover .stroke{stroke:var(--primary-variant)}.cl__mi{display:none}.cl--opened .cl__mi{display:block}@media (max-width: 767.98px){.cf__expand{width:34px;height:34px;background:#fff;box-shadow:0 8px 14px rgba(0,0,0,.15)}.cf__expand:hover,.cf__expand.active{box-shadow:none;background:var(--primary)}.cf__expand:hover path,.cf__expand.active path{fill:#fff}.cf__expand.active svg{transform:rotate(180deg)}.cf__form{display:none}.active .cf__form{display:block}.cc__thumb{height:91px}.cc__rating{margin-top:-10px;box-shadow:0 0 0 2px #fff}.cl__thumb{height:91px}}@media (min-width: 768px){.cc{padding:2px;transition:250ms ease-in-out}.cc:hover{box-shadow:0 8px 14px rgba(0,0,0,.15)}.cc__rating{position:absolute;top:10px;right:10px;z-index:3}.cl__thumb{width:180px;height:126px}}@media (min-width: 992px){.cc__thumb{padding-bottom:70%}}@media (min-width: 768px)and (max-width: 991.98px){.cc__thumb{padding-bottom:50%}}@media (max-width: 991.98px){.cl__rec{font-size:9px}}

/***
* top-list-casinos
***/
.tlc__btn{z-index:1;background:#fff}.tlc__btn:hover{background-color:var(--secondary)}.tlc__btn.active{z-index:100;color:#fff;background:#6138ffeb}.tlc__btn__icn{width:40px;height:40px}.tlc__btn__icn--a{display:none}.active .tlc__btn__icn--a{display:block}.active .tlc__btn__icn--d{display:none}@media (min-width: 768px){.tlc__btn{z-index:100;height:120px}.tlc__btn.active::before{content:"";position:absolute;top:0;right:0;bottom:0;left:0;border-radius:inherit;z-index:-1;box-shadow:0 4px 24px var(--primary-variant);opacity:.4}}@media (max-width: 767.98px){.tlc__btn{height:90px;box-shadow:0 0 0 1px var(--light)}}


/***
* cards-graphics
***/
.cg{transition:250ms ease-in-out}.cg__gr img{width:auto;max-height:100%}@media (min-width: 768px){.cg__gr{height:100px}}@media (max-width: 767.98px){.cg__gr{height:70px}}

/****
* pros-cons
****/
.bg-p .pc__box{background:#fff}.bg-pv .pc__box{background:#fff}.bg-s .pc__box{background:#fff}.bg-sv .pc__box{background:#fff}.bg-n .pc__box{background:#fff}.bg-d .pc__box{background:#fff}.bg-l .pc__box{background:#fff}.pc__list li{line-height:1.3}.pc__list li:not(:last-child){margin-bottom:15px}.pc__list--pros li::before,.pc__list--pros li::after{content:"";position:absolute;top:8px;left:0;width:8px;height:2px;background:#7abf8b}.pc__list--pros li::after{transform:rotate(90deg)}.pc__list--cons li::before{content:"";position:absolute;top:6px;left:0;width:8px;height:2px;background:#c9415b}@media (min-width: 768px){.bg-u-sm-p .pc__box{background:#fff}.bg-u-sm-p .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}.bg-u-sm-pv .pc__box{background:#fff}.bg-u-sm-pv .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}.bg-u-sm-s .pc__box{background:#fff}.bg-u-sm-s .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}.bg-u-sm-sv .pc__box{background:#fff}.bg-u-sm-sv .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}.bg-u-sm-n .pc__box{background:#fff}.bg-u-sm-n .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}.bg-u-sm-d .pc__box{background:#fff}.bg-u-sm-d .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}.bg-u-sm-l .pc__box{background:#fff}.bg-u-sm-l .pc__box .col-u-sm:not(:last-child){border-right:1px solid var(--secondary-variant)}}@media (max-width: 767.98px){.bg-o-xs-p .pc__box{background:#fff}.bg-o-xs-pv .pc__box{background:#fff}.bg-o-xs-s .pc__box{background:#fff}.bg-o-xs-sv .pc__box{background:#fff}.bg-o-xs-n .pc__box{background:#fff}.bg-o-xs-d .pc__box{background:#fff}.bg-o-xs-l .pc__box{background:#fff}}

/****
* univeral-boxes
****/
.bg-p .ub__box{background:#fff}.bg-pv .ub__box{background:#fff}.bg-s .ub__box{background:#fff}.bg-sv .ub__box{background:#fff}.bg-n .ub__box{background:#fff}.bg-d .ub__box{background:#fff}.bg-l .ub__box{background:#fff}@media (min-width: 768px){.bg-u-sm-p .ub__box{background:#fff}.bg-u-sm-pv .ub__box{background:#fff}.bg-u-sm-s .ub__box{background:#fff}.bg-u-sm-sv .ub__box{background:#fff}.bg-u-sm-n .ub__box{background:#fff}.bg-u-sm-d .ub__box{background:#fff}.bg-u-sm-l .ub__box{background:#fff}}@media (max-width: 767.98px){.bg-o-xs-p .ub__box{background:#fff}.bg-o-xs-pv .ub__box{background:#fff}.bg-o-xs-s .ub__box{background:#fff}.bg-o-xs-sv .ub__box{background:#fff}.bg-o-xs-n .ub__box{background:#fff}.bg-o-xs-d .ub__box{background:#fff}.bg-o-xs-l .ub__box{background:#fff}}


/****
* how-to
****/
.ht__step::before{content:attr(data-step);position:absolute;top:0;left:-20px;bottom:0;margin:auto;color:#fff;width:40px;height:40px;font-size:20px;text-align:center;line-height:40px;font-weight:700;background:var(--primary-variant);border-radius:50%}.bg-p .ht__step{background:#fff}.bg-pv .ht__step{background:#fff}.bg-s .ht__step{background:#fff}.bg-sv .ht__step{background:#fff}.bg-n .ht__step{background:#fff}.bg-d .ht__step{background:#fff}.bg-l .ht__step{background:#fff}@media (min-width: 768px){.bg-u-sm-p .ht__step{background:#fff}.bg-u-sm-pv .ht__step{background:#fff}.bg-u-sm-s .ht__step{background:#fff}.bg-u-sm-sv .ht__step{background:#fff}.bg-u-sm-n .ht__step{background:#fff}.bg-u-sm-d .ht__step{background:#fff}.bg-u-sm-l .ht__step{background:#fff}}@media (max-width: 767.98px){.bg-o-xs-p .ht__step{background:#fff}.bg-o-xs-pv .ht__step{background:#fff}.bg-o-xs-s .ht__step{background:#fff}.bg-o-xs-sv .ht__step{background:#fff}.bg-o-xs-n .ht__step{background:#fff}.bg-o-xs-d .ht__step{background:#fff}.bg-o-xs-l .ht__step{background:#fff}}

/****
* simplebar
****/
[data-simplebar]{position:relative;flex-direction:column;flex-wrap:wrap;justify-content:flex-start;align-content:flex-start;align-items:flex-start}.simplebar-wrapper{overflow:hidden;width:inherit;height:inherit;max-width:inherit;max-height:inherit}.simplebar-mask{direction:inherit;position:absolute;overflow:hidden;padding:0;margin:0;left:0;top:0;bottom:0;right:0;width:auto;height:auto;z-index:0}.simplebar-offset{direction:inherit;box-sizing:inherit;resize:none;position:absolute;top:0;left:0;bottom:0;right:0 !important;padding:0;margin:0;-webkit-overflow-scrolling:touch}.simplebar-content-wrapper{direction:inherit;box-sizing:border-box;position:relative;display:block;height:100%;width:auto;max-width:100%;max-height:100%;scrollbar-width:none;-ms-overflow-style:none}.simplebar-content-wrapper::-webkit-scrollbar,.simplebar-hide-scrollbar::-webkit-scrollbar{width:0;height:0}.simplebar-content::before,.simplebar-content::after{content:" ";display:table}.simplebar-placeholder{max-height:100%;max-width:100%;width:100%;pointer-events:none}.simplebar-height-auto-observer-wrapper{box-sizing:inherit;height:100%;width:100%;max-width:1px;position:relative;float:left;max-height:1px;overflow:hidden;z-index:-1;padding:0;margin:0;pointer-events:none;flex-grow:inherit;flex-shrink:0;flex-basis:0}.simplebar-height-auto-observer{box-sizing:inherit;display:block;opacity:0;position:absolute;top:0;left:0;height:1000%;width:1000%;min-height:1px;min-width:1px;overflow:hidden;pointer-events:none;z-index:-1}.simplebar-track{z-index:1;position:absolute;right:10px;bottom:0;pointer-events:none;overflow:hidden}.simplebar-dragging .simplebar-content{pointer-events:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-user-select:none}.simplebar-dragging .simplebar-track{pointer-events:all}.simplebar-scrollbar{position:absolute;left:0;right:0}.simplebar-vertical{top:0;width:3px;background:transparent;border-radius:50rem}.simplebar-vertical .simplebar-scrollbar{top:0;bottom:0;min-height:10px;background:#dcdde3;border-radius:50rem}


/****
* table-contents
****/
.tc__i{top:0;right:0;bottom:0;background:var(--primary-variant);border:2px solid var(--primary-variant)}.tc__i::before,.tc__i::after{content:"";position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;width:16px;height:2px;background:#fff}.tc__i::after{transform:rotate(90deg)}.active .tc__i{background:transparent}.active .tc__i::before{z-index:2;background:var(--primary-variant)}.tc__list{display:none}.active .tc__list{display:block}.tc a{color:inherit}@media (min-width: 768px){.tc__title{font-size:28px}.tc__i{width:38px;height:38px}}@media (max-width: 767.98px){.tc__title{font-size:20px}.tc__i{width:30px;height:30px}}

/****
* tabs
***/
amp-selector [role="tab"][selected] .tlc__btn {
    z-index: 100;
    color: #fff;
    background: #6138ffeb;
}
/****
* footer
****/

.widget.widget_block {
    text-align:left;
}


amp-selector [option][selected]{
    outline: none;
    display:block;
}

.s_so {display:none;}
.title__sub{max-width:690px}



    <?php  if( is_rtl() ) {?> <?php } ?>
