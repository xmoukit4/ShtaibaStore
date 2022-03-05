const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#closeBtn");
const page = document.querySelector(".container");
const main = document.querySelector("#wholepage");





menuBtn.addEventListener(
    'click',()=>{
        sideMenu.style.display='block';
    }
)


closeBtn.addEventListener(
    'click',()=>{
        sideMenu.style.display='none';
    }
)
Orders.forEach(order => {
    const tr = document.createElement('tr');
    const trContent = ` 
    <td>${order.productName}</td>
    <td>${order.productNumber}</td>
    <td>${order.paymentStatus}</td>
    <td class ="danger">${order.shipping}</td>
    <td class ="primary">Details</td>

    `
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})

