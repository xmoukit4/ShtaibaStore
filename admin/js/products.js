
const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#closeBtn");

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

Orders1.forEach(order => {
    const tr = document.createElement('tr');
    const trContent = ` 
    <td><input type="checkbox" name="checkboxname" id="delete"></td>
    <td>${order.n}</td>
    <td>${order.nomProduit}</td>
    <td>${order.categorie}</td>
    <td>${order.stock}</td>
    <td class ="danger">${order.prix}</td>
    <td class ="primary"><a href="#" class="Editer">Editer</a></td>

    `
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})
