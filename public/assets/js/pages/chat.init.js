(()=>{var e="assets/images/users/user-dummy-img.jpg",t="assets/images/users/multi-user.jpg",r=!1;Array.from(document.querySelectorAll(".favourite-btn")).forEach((function(e){e.addEventListener("click",(function(e){this.classList.toggle("active")}))}));var s=document.getElementsByClassName("user-chat");Array.from(document.querySelectorAll(".chat-user-list li a")).forEach((function(e){e.addEventListener("click",(function(e){Array.from(s).forEach((function(e){e.classList.add("user-chat-show")}));var t=document.querySelector(".chat-user-list li.active");t&&t.classList.remove("active"),this.parentNode.classList.add("active")}))})),Array.from(document.querySelectorAll(".user-chat-remove")).forEach((function(e){e.addEventListener("click",(function(e){Array.from(s).forEach((function(e){e.classList.remove("user-chat-show")}))}))}));GLightbox({selector:".popup-img",title:!1});var n="users-chat";function c(e){setTimeout((function(){var t=document.getElementById(e).querySelector("#chat-conversation .simplebar-content-wrapper")?document.getElementById(e).querySelector("#chat-conversation .simplebar-content-wrapper"):"",r=document.getElementsByClassName("chat-conversation-list")[0]?document.getElementById(e).getElementsByClassName("chat-conversation-list")[0].scrollHeight-window.innerHeight+335:0;r&&t.scrollTo({top:r,behavior:"smooth"})}),100)}c(n);var a=document.querySelector("#chatinput-form"),o=document.querySelector("#chat-input"),l=document.querySelector(".chat-input-feedback");function i(){var e=(new Date).getHours()>=12?"pm":"am",t=(new Date).getHours()>12?(new Date).getHours()%12:(new Date).getHours(),r=(new Date).getMinutes()<10?"0"+(new Date).getMinutes():(new Date).getMinutes();return t<10?"0"+t+":"+r+" "+e:t+":"+r+" "+e}setInterval(i,1e3);var d=0;a&&a.addEventListener("submit",(function(e){e.preventDefault();var t=n,s=n,a=o.value;0===a.length?(l.classList.add("show"),setTimeout((function(){l.classList.remove("show")}),2e3)):(1==r?(x(s,a),r=!1):b(t,a),c(t)),o.value="",document.getElementById("close_toggle").click()})),Array.from(document.querySelectorAll("#userList li")).forEach((function(t){t.addEventListener("click",(function(){var r=t.querySelector(".text-truncate").innerHTML,s=t.querySelector(".avatar-xxs .userprofile").getAttribute("src");document.querySelector(".user-chat-topbar .text-truncate .username").innerHTML=r,document.querySelector(".profile-offcanvas .username").innerHTML=r,s?(document.querySelector(".user-chat-topbar .avatar-xs").setAttribute("src",s),document.querySelector(".profile-offcanvas .avatar-lg").setAttribute("src",s)):(document.querySelector(".user-chat-topbar .avatar-xs").setAttribute("src",e),document.querySelector(".profile-offcanvas .avatar-lg").setAttribute("src",e));var n=document.getElementById("users-conversation");Array.from(n.querySelectorAll(".left .chat-avatar")).forEach((function(t){s?t.querySelector("img").setAttribute("src",s):t.querySelector("img").setAttribute("src",e)}))}))})),Array.from(document.querySelectorAll("#channelList li")).forEach((function(r){r.addEventListener("click",(function(){var s=r.querySelector(".text-truncate").innerHTML;document.querySelector(".user-chat-topbar .text-truncate .username").innerHTML=s,document.querySelector(".profile-offcanvas .username").innerHTML=s,document.querySelector(".user-chat-topbar .avatar-xs").setAttribute("src",t),document.querySelector(".profile-offcanvas .avatar-lg").setAttribute("src",t);var n=document.getElementById("users-conversation");Array.from(n.querySelectorAll(".left .chat-avatar")).forEach((function(t){t.querySelector("img").setAttribute("src",e)}))}))}));var u=document.querySelector(".chat-conversation-list"),m=u.querySelectorAll(".copy-message");Array.from(m).forEach((function(e){e.addEventListener("click",(function(){var t=e.closest(".ctext-wrap").children[0]?e.closest(".ctext-wrap").children[0].children[0].innerText:"";navigator.clipboard.writeText(t)}))})),document.getElementById("copyClipBoard").style.display="none";var y=document.querySelectorAll(".copy-message");Array.from(y).forEach((function(e){e.addEventListener("click",(function(){document.getElementById("copyClipBoard").style.display="block",setTimeout((function(){document.getElementById("copyClipBoard").style.display="none"}),1e3)}))}));var f=u.querySelectorAll(".delete-item");Array.from(f).forEach((function(e){e.addEventListener("click",(function(){2==e.closest(".user-chat-content").childElementCount?e.closest(".chat-list").remove():e.closest(".ctext-wrap").remove()}))}));var p=u.querySelectorAll(".chat-list");Array.from(p).forEach((function(e){Array.from(e.querySelectorAll(".delete-image")).forEach((function(e){e.addEventListener("click",(function(){1==e.closest(".message-img").childElementCount?e.closest(".chat-list").remove():e.closest(".message-img-list").remove()}))}))}));var g=u.querySelectorAll(".reply-message"),v=document.querySelector(".replyCard"),h=document.querySelector("#close_toggle");Array.from(g).forEach((function(e){e.addEventListener("click",(function(){r=!0,v.classList.add("show"),h.addEventListener("click",(function(){v.classList.remove("show")}));var t=e.closest(".ctext-wrap").children[0].children[0].innerText;document.querySelector(".replyCard .replymessage-block .flex-grow-1 .mb-0").innerText=t;var s=document.querySelector(".user-chat-topbar .text-truncate .username").innerHTML,n=e.closest(".chat-list")?e.closest(".chat-list").classList.contains("left")?s:"You":s;document.querySelector(".replyCard .replymessage-block .flex-grow-1 .conversation-name").innerText=n}))}));var b=function(e,t){d++;var s=document.getElementById(e).querySelector(".chat-conversation-list");null!=t&&s.insertAdjacentHTML("beforeend",'<li class="chat-list right" id="chat-list-'+d+'" >                <div class="conversation-list">                    <div class="user-chat-content">                        <div class="ctext-wrap">                            <div class="ctext-wrap-content">                                <p class="mb-0 ctext-content">                                    '+t+'                                </p>                            </div>                            <div class="dropdown align-self-start message-box-drop">                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                    <i class="ri-more-2-fill"></i>                                </a>                                <div class="dropdown-menu">                                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" data-bs-toggle="collapse" data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-'+d+'">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" id="delete-item-'+d+'" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                            </div>                        </div>                    </div>                    <div class="conversation-name">                        <small class="text-muted time">'+i()+'</small>                        <span class="text-success check-message-icon"><i class="bx bx-check"></i></span>                    </div>                </div>            </div>        </li>');var n=document.getElementById("chat-list-"+d);Array.from(n.querySelectorAll(".delete-item")).forEach((function(e){e.addEventListener("click",(function(){s.removeChild(n)}))})),Array.from(n.querySelectorAll(".copy-message")).forEach((function(e){e.addEventListener("click",(function(){var e=n.childNodes[1].firstElementChild.firstElementChild.firstElementChild.firstElementChild.innerText;navigator.clipboard.writeText(e)}))})),Array.from(n.querySelectorAll(".copy-message")).forEach((function(e){e.addEventListener("click",(function(){document.getElementById("copyClipBoard").style.display="block",setTimeout((function(){document.getElementById("copyClipBoard").style.display="none"}),1e3)}))})),Array.from(n.querySelectorAll(".reply-message")).forEach((function(e){e.addEventListener("click",(function(){var t=document.querySelector(".replyCard"),s=document.querySelector("#close_toggle"),n=e.closest(".ctext-wrap").children[0].children[0].innerText,c=document.querySelector(".replyCard .replymessage-block .flex-grow-1 .conversation-name").innerHTML;r=!0,t.classList.add("show"),s.addEventListener("click",(function(){t.classList.remove("show")}));var a=e.closest(".chat-list")?e.closest(".chat-list").classList.contains("left")?c:"You":c;document.querySelector(".replyCard .replymessage-block .flex-grow-1 .conversation-name").innerText=a,document.querySelector(".replyCard .replymessage-block .flex-grow-1 .mb-0").innerText=n}))}))},x=function(e,t){var r=document.querySelector(".replyCard .replymessage-block .flex-grow-1 .conversation-name").innerHTML,s=document.querySelector(".replyCard .replymessage-block .flex-grow-1 .mb-0").innerText;d++;var n=document.getElementById(e).querySelector(".chat-conversation-list");null!=t&&(n.insertAdjacentHTML("beforeend",'<li class="chat-list right" id="chat-list-'+d+'" >                <div class="conversation-list">                    <div class="user-chat-content">                        <div class="ctext-wrap">                            <div class="ctext-wrap-content">                            <div class="replymessage-block mb-0 d-flex align-items-start">                        <div class="flex-grow-1">                            <h5 class="conversation-name">'+r+'</h5>                            <p class="mb-0">'+s+'</p>                        </div>                        <div class="flex-shrink-0">                            <button type="button" class="btn btn-sm btn-link mt-n2 me-n3 font-size-18">                            </button>                        </div>                    </div>                                <p class="mb-0 ctext-content mt-1">                                    '+t+'                                </p>                            </div>                            <div class="dropdown align-self-start message-box-drop">                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                    <i class="ri-more-2-fill"></i>                                </a>                                <div class="dropdown-menu">                                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" data-bs-toggle="collapse"  data-bs-target=".replyCollapse">Reply <i class="bx bx-share ms-2 text-muted"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">Forward <i class="bx bx-share-alt ms-2 text-muted"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-'+d+'">Copy <i class="bx bx-copy text-muted ms-2"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i></a>                                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" id="delete-item-'+d+'" href="#">Delete <i class="bx bx-trash text-muted ms-2"></i></a>                            </div>                        </div>                    </div>                    <div class="conversation-name">                        <small class="text-muted time">'+i()+'</small>                        <span class="text-success check-message-icon"><i class="bx bx-check"></i></span>                    </div>                </div>            </div>        </li>'));var c=document.getElementById("chat-list-"+d);Array.from(c.querySelectorAll(".delete-item")).forEach((function(e){e.addEventListener("click",(function(){u.removeChild(c)}))})),Array.from(c.querySelectorAll(".copy-message")).forEach((function(e){e.addEventListener("click",(function(){document.getElementById("copyClipBoard").style.display="block",document.getElementById("copyClipBoardChannel").style.display="block",setTimeout((function(){document.getElementById("copyClipBoard").style.display="none",document.getElementById("copyClipBoardChannel").style.display="none"}),1e3)}))})),Array.from(c.querySelectorAll(".reply-message")).forEach((function(e){e.addEventListener("click",(function(){var t=e.closest(".ctext-wrap").children[0].children[0].innerText,r=document.querySelector(".user-chat-topbar .text-truncate .username").innerHTML;document.querySelector(".replyCard .replymessage-block .flex-grow-1 .mb-0").innerText=t;var s=e.closest(".chat-list")?e.closest(".chat-list").classList.contains("left")?r:"You":r;document.querySelector(".replyCard .replymessage-block .flex-grow-1 .conversation-name").innerText=s}))})),Array.from(c.querySelectorAll(".copy-message")).forEach((function(e){e.addEventListener("click",(function(){c.childNodes[1].children[1].firstElementChild.firstElementChild.getAttribute("id"),isText=c.childNodes[1].children[1].firstElementChild.firstElementChild.innerText,navigator.clipboard.writeText(isText)}))}))};new FgEmojiPicker({trigger:[".emoji-btn"],removeOnSelection:!1,closeButton:!0,position:["top","right"],preFetch:!0,dir:"assets/js/pages/plugins/json",insertInto:document.querySelector(".chat-input")});document.getElementById("emoji-btn").addEventListener("click",(function(){setTimeout((function(){var e=document.getElementsByClassName("fg-emoji-picker")[0];if(e){var t=window.getComputedStyle(e)?window.getComputedStyle(e).getPropertyValue("left"):"";t&&(t=(t=t.replace("px",""))-40+"px",e.style.left=t)}}),0)}))})();