!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);

$("document").ready(function()
{
    // document.addEventListener("click", function(e){
    //     console.log(e.target);
    // });
    const mMenuOpenBtn = document.querySelector("#mMenuOpenBtn");
    const mobileMenu = document.querySelector("#mobileMenu");
    const mMenuCloseBtn = document.querySelector("#mobileMenuCloseBtn");
    const mainDiv = document.querySelector("#main");
    const header = document.querySelector("#header");
    const mobileLeftMenuBtn = document.querySelector("#mobileLeftMenuBtn");
    const mobileLeftMenu = document.querySelector("#mobileLeftMenu");
    const magnificPopup = $.magnificPopup.instance;

    mMenuOpenBtn.addEventListener("click", MobileMenuToggler);
    mMenuCloseBtn.addEventListener("click", MobileMenuToggler);
    function MobileMenuToggler(e)
    {
        header.classList.toggle("visualHide");
        mobileMenu.classList.toggle("visualHide");
        mainDiv.classList.toggle("main_blur");
    }

    if(mobileLeftMenuBtn !== null && mobileLeftMenuBtn !== undefined)
    {
        mobileLeftMenuBtn.addEventListener("click", function (e)
        {
            mobileLeftMenuBtn.classList.toggle("mobileLeftMenuBtn_open");
            mobileLeftMenu.classList.toggle("mobileLeftMenu_open");
            document.addEventListener("click", function(e)
            {
                if(e.path.indexOf(mobileLeftMenuBtn) == -1 && e.path.indexOf(mobileLeftMenu) == -1)
                {
                    if (mobileLeftMenu.classList.contains("mobileLeftMenu_open"))
                    {
                        mobileLeftMenu.classList.remove("mobileLeftMenu_open");
                        mobileLeftMenuBtn.classList.remove("mobileLeftMenuBtn_open");
                    }
                    
                }
            });
        });
    }
    
    $(".about__slider").owlCarousel(
    {
        items: 1,
        loop: true,
        nav: false,
        dots: true,
    });

    $.extend(true, $.magnificPopup.defaults, {
        tClose: 'Закрыть (Esc)', // Alt text on close button
        tLoading: 'Згрузка...', // Text that is displayed during loading. Can contain %curr% and %total% keys
        gallery: {
          tPrev: 'Предыдущее изображение (Стрелочка влево на клавиатуре)', // Alt text on left arrow
          tNext: 'Следующее изображение (Стрелочка вправо на клавиатуре)', // Alt text on right arrow
          tCounter: '%curr% of %total%' // Markup for "1 of 7" counter
        },
        image: {
          tError: '<a href="%url%">Изображение</a> не найдено.' // Error message when image could not be loaded
        },
        ajax: {
          tError: '<a href="%url%">Содержимое</a> не найдено.' // Error message when ajax request failed
        }
      });
    $('.gallery__list').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: { enabled:true},
            callbacks: {
                buildControls: function() {
                  this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                }
            }
        });
    });
    $('.reviewsList').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: { enabled:true},
            callbacks: {
                buildControls: function() {
                  this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                }
            }
        });
    });
    function getInner(array, regExpString)
    {
        for (const key in array)
        {
            if (array.hasOwnProperty(key))
            {
                const element = array[key];
                if(element.className)
                {
                    let flag = element.className.search(regExpString);
                    if (flag == 0){
                        return element.innerHTML;
                    }
                }
            }
        }
        return false;
    }
    $('.ourWork__item_detail').each(function()
    {
        $(this).magnificPopup(
        {
            delegate: 'a',
            type: 'image',
            gallery: 
            {
                enabled:true,
                arrowMarkup: '<div title="%title%" class="mfpBtn mfpBtn_%dir% mfp-arrow-%dir%"><div class="mfpBtn__arrow mfpBtn__arrow_%dir%"><span class="mfpBtn__inner mfpBtn__inner_%dir%"></span></div></div>'
            },
            callbacks:
            {
                buildControls: function() {
                  this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                },
                open: function ()
                {
                    const desc = magnificPopup.st.mainEl.children();
                    const descText = getInner(desc, "ourWork__desc");
                    let mfpDesc = document.createElement("div");
                    mfpDesc.className = "mfp__desc";
                    mfpDesc.innerHTML = descText;
                    magnificPopup.content[0].parentElement.appendChild(mfpDesc);
                }
            }
        });
    });
});