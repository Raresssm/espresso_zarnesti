document.addEventListener('DOMContentLoaded', function () {
    // Sample coffee menu data
    const coffeeMenu = [
        { name: 'Espresso', priceSmall: '5 RON', priceMedium: '7 RON', priceLarge: '10 RON', ingredients: 'Boabe de cafea măcinate', imageUrl: 'https://www.thespruceeats.com/thmb/prtYTmfvrVzT7cwqiCAX1TMn6oI=/425x300/filters:max_bytes(150000):strip_icc():format(webp)/SES-cuban-coffee-4796807-hero-01-d7eb7e7987984a5690b290c69dc3c0db.jpg' },
        { name: 'Cappuccino', priceSmall: '8 RON', priceMedium: '10 RON', priceLarge: '13 RON', ingredients: 'Espresso, lapte aburit, spumă', imageUrl: 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Cappuccino_at_Sightglass_Coffee.jpg/1200px-Cappuccino_at_Sightglass_Coffee.jpg' },
        { name: 'Latte', priceSmall: '9 RON', priceMedium: '11 RON', priceLarge: '15 RON', ingredients: 'Espresso, lapte aburit', imageUrl: 'https://www.thespruceeats.com/thmb/LqZQgEYjnBSXcfIW7WkqrwhitcE=/425x300/filters:max_bytes(150000):strip_icc():format(webp)/how-to-make-caffe-latte-765372-hero-01-2417e49c4a9c4789b3abdd36885f06ab.jpg' },
        { name: 'Americano', priceSmall: '6 RON', priceMedium: '8 RON', priceLarge: '11 RON', ingredients: 'Espresso, apă fierbinte', imageUrl: 'https://www.clarocafe.ro/modules/xipblog/img/large-cum-sa-faci-un-americano.jpg' },
        { name: 'Macchiato', priceSmall: '8 RON', priceMedium: '10 RON', priceLarge: '12 RON', ingredients: 'Espresso, o bucată de lapte spumat', imageUrl: 'https://www.roastycoffee.com/wp-content/uploads/Latte-Macchiato.jpg' },
        { name: 'Mocha', priceSmall: '10 RON', priceMedium: '12 RON', priceLarge: '15 RON', ingredients: 'Espresso, lapte aburit, sirop de ciocolată', imageUrl: 'https://athome.starbucks.com/sites/default/files/2021-06/1_CAH_CaffeMocha_Hdr_2880x16602.jpg' },
        { name: 'Flat White', priceSmall: '9 RON', priceMedium: '11 RON', priceLarge: '14 RON', ingredients: 'Espresso, spumă fină', imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVu4FOMX2NVjOU_wWOCWDKufTqRL6fF4MMkA&usqp=CAU' },
        { name: 'Café au Lait', priceSmall: '8 RON', priceMedium: '10 RON', priceLarge: '12 RON', ingredients: 'Parti egale de cafea preparată și lapte aburit', imageUrl: 'https://www.thespruceeats.com/thmb/YEI_JAfLHd6fbfCYUukcW5E2TYg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-cafe-au-lait-recipe-1374920-hero-01-b1463e806a7947e7b8b17979ab70eab3.jpg' },
        { name: 'Turkish Coffee', priceSmall: '8 RON', priceMedium: '10 RON', priceLarge: '12 RON', ingredients: 'Cafea măcinată fin, apă, zahăr (opțional)', imageUrl: 'https://perfectdailygrind.com/wp-content/uploads/2019/11/7053045385_96bd088e72_k.jpg' },
        { name: 'Iced Coffee', priceSmall: '7 RON', priceMedium: '9 RON', priceLarge: '12 RON', ingredients: 'Cafea turnată peste gheață', imageUrl: 'https://www.allrecipes.com/thmb/Hqro0FNdnDEwDjrEoxhMfKdWfOY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/21667-easy-iced-coffee-ddmfs-4x3-0093-7becf3932bd64ed7b594d46c02d0889f.jpg' },
        // Adăugați mai multe elemente dacă este nevoie
    ];

    const menuContainer = document.getElementById('menu');

    // Populate the menu
    coffeeMenu.forEach(item => {
        const coffeeBox = document.createElement('div');
        coffeeBox.classList.add('coffee-box');

        const coffeeImageBox = document.createElement('div');
        coffeeImageBox.classList.add('coffee-image-box');

        const coffeeImage = document.createElement('img');
        coffeeImage.src = item.imageUrl;
        coffeeImage.alt = item.name;
        coffeeImage.classList.add('coffee-image');

        const coffeeButton = document.createElement('button');
        coffeeButton.classList.add('coffee-button');
        coffeeButton.textContent = item.name;
        coffeeButton.addEventListener('click', () => toggleDetails(coffeeDetails));

        const coffeeDetails = document.createElement('div');
        coffeeDetails.classList.add('coffee-details');
        coffeeDetails.innerHTML = `
            <p><strong>Mic:</strong> ${item.priceSmall}</p>
            <p><strong>Mediu:</strong> ${item.priceMedium}</p>
            <p><strong>Mare:</strong> ${item.priceLarge}</p>
            <p><strong>Ingrediente:</strong> ${item.ingredients}</p>
        `;

        coffeeImageBox.appendChild(coffeeImage);
        coffeeBox.appendChild(coffeeImageBox);
        coffeeBox.appendChild(coffeeButton);
        coffeeBox.appendChild(coffeeDetails);

        menuContainer.appendChild(coffeeBox);
    });

    function toggleDetails(detailsElement) {
        detailsElement.style.display = detailsElement.style.display === 'none' ? 'block' : 'none';
    }
});