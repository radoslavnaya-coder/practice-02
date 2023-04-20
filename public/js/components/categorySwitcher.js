function categorySwitcher() {
    const category = document.getElementById("category");
    let i = 0;
        if (i === 0) {
        i=i + 1;
        category.className = "categoryActive";
    }
    else if(i===1) {
        i=i - 1;
        category.className = "category";
    }
    }