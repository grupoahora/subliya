var checkAll=document.getElementById("checkAll");checkAll&&(checkAll.onclick=function(){var e=document.querySelectorAll('.form-check-all input[type="checkbox"]');1==checkAll.checked?Array.from(e).forEach((function(e){e.checked=!0,e.closest("tr").classList.add("table-active")})):Array.from(e).forEach((function(e){e.checked=!1,e.closest("tr").classList.remove("table-active")}))});var perPage=8,options={valueNames:["id","project_name","tasks_name","client_name","assignedto","due_date","status","priority"],page:perPage,pagination:!0,plugins:[ListPagination({left:2,right:2})]},tasksList=new List("tasksList",options).on("updated",(function(e){0==e.matchingItems.length?document.getElementsByClassName("noresult")[0].style.display="block":document.getElementsByClassName("noresult")[0].style.display="none";var t=1==e.i,a=e.i>e.matchingItems.length-e.page;document.querySelector(".pagination-prev.disabled")&&document.querySelector(".pagination-prev.disabled").classList.remove("disabled"),document.querySelector(".pagination-next.disabled")&&document.querySelector(".pagination-next.disabled").classList.remove("disabled"),t&&document.querySelector(".pagination-prev").classList.add("disabled"),a&&document.querySelector(".pagination-next").classList.add("disabled"),e.matchingItems.length<=perPage?document.querySelector(".pagination-wrap").style.display="none":document.querySelector(".pagination-wrap").style.display="flex",e.matchingItems.length==perPage&&document.querySelector(".pagination.listjs-pagination").firstElementChild.children[0].click(),e.matchingItems.length>0?document.getElementsByClassName("noresult")[0].style.display="none":document.getElementsByClassName("noresult")[0].style.display="block"}));const xhttp=new XMLHttpRequest;xhttp.onload=function(){var e=JSON.parse(this.responseText);Array.from(e).forEach((function(e){var t='<div class="avatar-group">';Array.from(e.assignedto).forEach((function(e){t+=`\n                <a href="javascript: void(0);" class="avatar-group-item" data-img="${e}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">\n                    <img src="assets/images/users/${e}" alt="" class="rounded-circle avatar-xxs" />\n                </a>\n            `})),t+="</div>",tasksList.add({id:'<a href="apps-tasks-details" class="fw-medium link-primary">#VLZ'+e.id+"</a>",project_name:'<a href="apps-projects-overview" class="fw-medium link-primary">'+e.project_name+"</a>",tasks_name:e.tasks_name,client_name:e.client_name,assignedto:t,due_date:e.due_date,status:isStatus(e.status),priority:isPriority(e.priority)}),tasksList.sort("id",{order:"desc"}),refreshCallbacks()})),tasksList.remove("id",'<a href="apps-tasks-details" class="fw-medium link-primary">#VLZ501</a>')},xhttp.open("GET","assets/json/tasks-list.json"),xhttp.send(),isCount=(new DOMParser).parseFromString(tasksList.items.slice(-1)[0]._values.id,"text/html");var isValue=isCount.body.firstElementChild.innerHTML,idField=document.getElementById("tasksId"),projectNameField=document.getElementById("projectName-field"),tasksTitleField=document.getElementById("tasksTitle-field"),clientNameField=document.getElementById("clientName-field"),assignedtoNameField="Demo Assign",dateDueField=document.getElementById("duedate-field"),priorityField=document.getElementById("priority-field"),statusField=document.getElementById("ticket-status"),addBtn=document.getElementById("add-btn"),editBtn=document.getElementById("edit-btn"),removeBtns=document.getElementsByClassName("remove-item-btn"),editBtns=document.getElementsByClassName("edit-item-btn");function filterOrder(e){var t=e;tasksList.filter((function(e){matchData=(new DOMParser).parseFromString(e.values().status,"text/html");var a=matchData.body.firstElementChild.innerHTML;return"All"==a||"All"==t||a==t})),tasksList.update()}function updateList(){var e=document.querySelector("input[name=status]:checked").value;data=userList.filter((function(t){return"All"==e||t.values().sts==e})),userList.update()}refreshCallbacks(),document.getElementById("showModal").addEventListener("show.bs.modal",(function(e){e.relatedTarget.classList.contains("edit-item-btn")?(document.getElementById("exampleModalLabel").innerHTML="Edit Task",document.getElementById("showModal").querySelector(".modal-footer").style.display="block",document.getElementById("add-btn").style.display="none",document.getElementById("edit-btn").style.display="block"):e.relatedTarget.classList.contains("add-btn")?(document.getElementById("exampleModalLabel").innerHTML="Add Task",document.getElementById("showModal").querySelector(".modal-footer").style.display="block",document.getElementById("edit-btn").style.display="none",document.getElementById("add-btn").style.display="block"):(document.getElementById("exampleModalLabel").innerHTML="List Task",document.getElementById("showModal").querySelector(".modal-footer").style.display="none")})),document.getElementById("showModal").addEventListener("hidden.bs.modal",(function(){clearFields()})),document.querySelector("#tasksList").addEventListener("click",(function(){refreshCallbacks(),ischeckboxcheck()}));var table=document.getElementById("tasksTable"),tr=table.getElementsByTagName("tr"),trlist=table.querySelectorAll(".list tr"),count=11;addBtn.addEventListener("click",(function(e){e.preventDefault(),""!==projectNameField.value&&""!==tasksTitleField.value&&""!==clientNameField.value&&""!==dateDueField.value&&""!==priorityField.value&&""!==statusField.value&&(tasksList.add({id:'<a href="apps-tasks-details" class="fw-medium link-primary">#VLZ'+count+"</a>",project_name:'<a href="apps-projects-overview" class="fw-medium link-primary">'+projectNameField.value+"</a>",tasks_name:tasksTitleField.value,client_name:clientNameField.value,assignedto:assignToUsers(),due_date:fomateDate(dateDueField.value),status:isStatus(statusField.value),priority:isPriority(priorityField.value)}),tasksList.sort("id",{order:"desc"}),document.getElementById("close-modal").click(),clearFields(),refreshCallbacks(),count++,Swal.fire({position:"center",icon:"success",title:"Task inserted successfully!",showConfirmButton:!1,timer:2e3,showCloseButton:!0}))})),editBtn.addEventListener("click",(function(e){document.getElementById("exampleModalLabel").innerHTML="Edit Order";var t=tasksList.get({id:idField.value});Array.from(t).forEach((function(e){isid=(new DOMParser).parseFromString(e._values.id,"text/html"),isid.body.firstElementChild.innerHTML==itemId&&e.values({id:'<a href="javascript:void(0);" class="fw-medium link-primary">'+idField.value+"</a>",project_name:'<a href="apps-projects-overview" class="fw-medium link-primary">'+projectNameField.value+"</a>",tasks_name:tasksTitleField.value,client_name:clientNameField.value,assignedto:assignToUsers(),due_date:fomateDate(dateDueField.value),status:isStatus(statusField.value),priority:isPriority(priorityField.value)})})),document.getElementById("close-modal").click(),clearFields(),Swal.fire({position:"center",icon:"success",title:"Task updated Successfully!",showConfirmButton:!1,timer:2e3,showCloseButton:!0})}));var example=new Choices(priorityField,{searchEnabled:!1}),statusVal=new Choices(statusField,{searchEnabled:!1});function SearchData(){var e=document.getElementById("idStatus").value,t=document.getElementById("demo-datepicker").value,a=t.split(" to ")[0],s=t.split(" to ")[1];tasksList.filter((function(i){matchData=(new DOMParser).parseFromString(i.values().status,"text/html");var n=matchData.body.firstElementChild.innerHTML,l=!1,r=!1;return l="all"==n||"all"==e||n==e,r=new Date(i.values().due_date.slice(0,12))>=new Date(a)&&new Date(i.values().due_date.slice(0,12))<=new Date(s),l&&r?l&&r:l&&""==t?l:r&&""==t?r:void 0})),tasksList.update()}function ischeckboxcheck(){Array.from(document.getElementsByName("checkAll")).forEach((function(e){e.addEventListener("click",(function(e){e.target.checked?e.target.closest("tr").classList.add("table-active"):e.target.closest("tr").classList.remove("table-active")}))}))}function refreshCallbacks(){Array.from(removeBtns).forEach((function(e){e.addEventListener("click",(function(e){e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText;var t=tasksList.get({id:itemId});Array.from(t).forEach((function(e){deleteid=(new DOMParser).parseFromString(e._values.id,"text/html");var t=deleteid.body.firstElementChild;deleteid.body.firstElementChild.innerHTML==itemId&&document.getElementById("delete-record").addEventListener("click",(function(){tasksList.remove("id",t.outerHTML),document.getElementById("deleteOrder").click()}))}))}))})),Array.from(editBtns).forEach((function(e){e.addEventListener("click",(function(e){e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText;var t=tasksList.get({id:itemId});Array.from(t).forEach((function(e){isid=(new DOMParser).parseFromString(e._values.id,"text/html");var t=isid.body.firstElementChild.innerHTML;if(t==itemId){idField.value=t,project=(new DOMParser).parseFromString(e._values.project_name,"text/html");var a=project.body.firstElementChild.innerHTML;statusVal.setChoiceByValue(s),projectNameField.value=a,tasksTitleField.value=e._values.tasks_name,clientNameField.value=e._values.client_name,dateDueField.value=e._values.due_date,statusVal&&statusVal.destroy(),statusVal=new Choices(statusField,{searchEnabled:!1}),val=(new DOMParser).parseFromString(e._values.status,"text/html");var s=val.body.firstElementChild.innerHTML;statusVal.setChoiceByValue(s),example&&example.destroy(),example=new Choices(priorityField,{searchEnabled:!1}),val=(new DOMParser).parseFromString(e._values.priority,"text/html");var i=val.body.firstElementChild.innerHTML;example.setChoiceByValue(i),flatpickr("#duedate-field",{dateFormat:"d M, Y",defaultDate:e._values.due_date})}}))}))}))}function clearFields(){projectNameField.value="",tasksTitleField.value="",clientNameField.value="",assignedtoNameField.value="",dateDueField.value="",example&&example.destroy(),example=new Choices(priorityField),statusVal&&statusVal.destroy(),statusVal=new Choices(statusField)}function isStatus(e){switch(e){case"Pending":return'<span class="badge badge-soft-warning text-uppercase">'+e+"</span>";case"Inprogress":return'<span class="badge badge-soft-secondary text-uppercase">'+e+"</span>";case"Completed":return'<span class="badge badge-soft-success text-uppercase">'+e+"</span>";case"New":return'<span class="badge badge-soft-info text-uppercase">'+e+"</span>"}}function isPriority(e){switch(e){case"High":return'<span class="badge bg-danger text-uppercase">'+e+"</span>";case"Low":return'<span class="badge bg-success text-uppercase">'+e+"</span>";case"Medium":return'<span class="badge bg-warning text-uppercase">'+e+"</span>"}}function fomateDate(e){var t=new Date(e),a=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"][t.getMonth()];return t.getDate()+" "+a+", "+t.getFullYear()}function assignToUsers(){var e=document.querySelectorAll('input[name="assignedTo[]"]:checked'),t='<div class="avatar-group">';return e.length>0?Array.from(e).forEach((function(e){t+=`<a href="javascript: void(0);" class="avatar-group-item" data-img="${e.value}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">\n                    <img src="assets/images/users/${e.value}" alt="" class="rounded-circle avatar-xxs" />\n                </a>`})):t+='<a href="javascript: void(0);" class="avatar-group-item" data-img="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Title">\n                <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-3.jpg" alt="" class="rounded-circle avatar-xxs" />\n            </a>',t+="</div>"}function deleteMultiple(){ids_array=[];var e=document.getElementsByName("chk_child");if(Array.from(e).forEach((function(e){if(1==e.checked){var t=e.parentNode.parentNode.parentNode.querySelector(".id a").innerHTML;ids_array.push(t)}})),"undefined"!=typeof ids_array&&ids_array.length>0){if(!confirm("Are you sure you want to delete this?"))return!1;Array.from(ids_array).forEach((function(e){tasksList.remove("id",`<a href="apps-tasks-details" class="fw-medium link-primary">${e}</a>`)})),document.getElementById("checkAll").checked=!1}else Swal.fire({title:"Please select at least one checkbox",confirmButtonClass:"btn btn-info",buttonsStyling:!1,showCloseButton:!0})}document.querySelector(".pagination-next").addEventListener("click",(function(){document.querySelector(".pagination.listjs-pagination")&&(document.querySelector(".pagination.listjs-pagination").querySelector(".active")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click())})),document.querySelector(".pagination-prev").addEventListener("click",(function(){document.querySelector(".pagination.listjs-pagination")&&(document.querySelector(".pagination.listjs-pagination").querySelector(".active")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click())}));