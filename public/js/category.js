categoryChange = () => {
    d = document.getElementById("category").value;
    location.href = `http://127.0.0.1:8000/category/${d}`
}