(()=>{var t=document.querySelectorAll(".team-list");if(t){var e=document.querySelectorAll(".filter-button");e&&Array.from(e).forEach((function(t){t.addEventListener("click",i)}))}function i(e){"list-view-button"===e.target.id||"list-view-button"===e.target.parentElement.id?(document.getElementById("list-view-button").classList.add("active"),document.getElementById("grid-view-button").classList.remove("active"),Array.from(t).forEach((function(t){t.classList.add("list-view-filter"),t.classList.remove("grid-view-filter")}))):(document.getElementById("grid-view-button").classList.add("active"),document.getElementById("list-view-button").classList.remove("active"),Array.from(t).forEach((function(t){t.classList.remove("list-view-filter"),t.classList.add("grid-view-filter")})))}})();