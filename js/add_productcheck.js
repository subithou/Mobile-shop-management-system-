function checkdata() {
  var p_id,p_name,b_name,p_price,p_quantity,t_price,
  p_id=document.add_product.product_id.value;
  if(p_id == "")
  {
    alert("Please enter Product id");
    window.Location="add_product.html"
  }

}
