//akses API resep makanan 
fetch("https://www.themealdb.com/api/json/v1/1/filter.php?c=Beef")
.then(response => response.json())
.then(data => {
    console.log(data);
    data.meals.forEach( (meal) => {
        document.getElementById("meals").innerHTML += `<li class="list-group-item" onclick='detail("${meal.idMeal}")'> ${meal.idMeal} ${meal.strMeal} </li>`
        const mealList = document.getElementById("meal-list");
        const mealDetail = document.getElementById("meal-detail");
    })
})
function detail(id) {
    console.log(id);
    fetch("https://www.themealdb.com/api/json/v1/1/lookup.php?i=${id}")
        .then(response => response.json())
        .then(data => {
            data.meals.forEach(meal => {
                const card = document.createElement("div");
                card.className = "d-flex align-items-center mb-3";
                card.innerHTML =`
                <img src="${meal.strMealThub}" alt="${meal.strMeal}" class=me-2-rounded" style="width: 70px; height: 70px;">
                <div>
                <h6>${meal.strMeal}</h6>
                <button class="btn btn-primary" onclick="showDetail([${meal.idMeal}')">Lihat Resep</button>
                </div>`;
                mealList.appendChild(card);
})
        })
    }