
const buyNft = (nftId) => {
  console.log("BUY")
  fetch(`/buyNft.php?nftid=${nftId}`)


}

const addToCart = (nftId) => {
  console.log("ADD")
  fetch(`/addToCart.php?nftid=${nftId}`)
}

window.onload = () => {
  const buttons = document.querySelectorAll('.action-buttons')

  buttons.forEach((butn) => {
    const cartbtn = butn.children[0];
    const buybtn = butn.children[1];
    const nftid = buybtn.id.replace("-2", "")

    cartbtn.onclick = () => addToCart(nftid);
    buybtn.onclick = () => buyNft(nftid);
  })
}

function deleteAllCookies() {
  const cookies = document.cookie.split(";");

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i];
    const eqPos = cookie.indexOf("=");
    const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
}
