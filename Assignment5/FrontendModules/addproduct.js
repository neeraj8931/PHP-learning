const addProduct = ()=>{
    console.log("Add product called");
    const productName = document.getElementById("productname").value;
    const productPrice = document.getElementById("productprice").value;
    const productSKU = document.getElementById("productsku").value;

    if(!productName || !productPrice || !productSKU){
        alert("All Fields are required!!!!!");
    }else{
        const product = {
            "name":productName,
            "price":productPrice,
            "sku":productSKU
        }
        console.log("ready to send product data", product)
    }
}

export default addProduct;