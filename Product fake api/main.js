//fetch data 
async function getProductData(){
    const url = "https://fakestoreapi.com/products";
    const response =await fetch(url),
    productdata = response.json();
    return productdata
}

//display
//display
async function displayData(){
    const row = document.querySelector('.row')
    const prdData = await getProductData()
    for(let DATA of prdData){
        const div = document.createElement('div')
        div.className = "col-lg-4 col-md-6 col-sm-12 my-4"
        div.innerHTML = `
        <div class="card" style="width: 22rem;">
        <img src="${DATA.urlToImage ? DATA.urlToImage : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAAAk1BMVEUAAAAAljn////tLjgSEhISmkHz8/Pz+/cAmjn0LzoAmDnwKzjtJzLtLDbsHCn0Jzj95+j5v8FxFhupISjUKTLsEyPzgIUtiznUPTj4Ijg0CgxvFRo4Cw0tCAvvUFf0h4zvRk7sFybvTFOnWThxdDmsVjhsdjk4iDklBwk6FhcQJSTrqq3sABfyc3nstLLXOTgljTnTP6nVAAADoUlEQVR4nO2ciXrSQBRGU6/aJdC4tArutdZd6/s/nUkpAiHLzNyZRHLPeYJwvh5/SCZmzzNQcHrxdexLOGRE5NnY13DAlPpOCTgYqfxdvBr7Mg4VWUHAYdzrI+AwZO3v4u3Yl3KIyD/mBOzPRh8BByDb/lhgX2QXAvajpo+A/ZC6PwL2oa6PgL1o0EfA7jToI2B3mvSVvB77ug6EFn0E7EaLPgJ2o00fATvRoY+A++nQR8D9dOkj4F569BFwNz36yoDfjH2J/zN9+gi4Ewd9BNyOgz4eI7Xjok8k5yZWM276CLgFR30scDOu+oQFbsJDHwHv46GPBd7HR5/wGKmOpz4C3sVTHzexdvHVJyzwNgH6CHhDgD4WeEOIPmGB1wTqI+AVgfpY4BWh+oSAKxT6CFiljwXW6RMCVuqzHrBSn/WAtfrEdsAR9FkOOIK+MuBv3x+aJIo+yeXH8WOLxNEn86v3DywSSZ/I+bsnY3+WEYimT2bnT8f+MMMTT5/ML+0FHFFfGfAHawFH1SezmbGA4+orA34x9icalMj6rC1wdH0yuzQUcHx9phY4gT5LC5xEn50FTqPPzAIn0mdlgZPps7HA6fSZWOCE+sqAP0494KT6pn8TK62+yS9wYn1TX+Dk+mR2NeGA0+ub9AIPoG/KCzyIvun+Bh5G32QXeCB9Mv/5a+yPmoLB/vqmOR/826eC5VXB9z4V/OpQwW9eFdxxUcH9PhXcbVbBsw4VPGlTwXNeFZwyUMEZFxWcsFLB+T4VnC5VwdlmFZysV8F7HSp4q0gF77Sp4I1KFbzPq4K3yVXE+r8Mfh+bJIq+4vbLI5vE0Le8Pjs7soleXy6fTqza0+srFi9Pxv4Q46HVV1wfmf3TO9LqMx1uhUpfcWs53AqNvqXtcCvC9ZkPtyJYX/lV2Xi4FaH6jC/umjB9eU64dwTps/1VeZsQfcsbwr3HXx+Lu4W3PhZ3G199hd2bU0346WNxa3jpY3Hr+Ohjcfdw15fLZ8Kt46yPxW3CVV9xw+I24KYvL1jcRpz0sbhtuOhbEm4b/frynMVtpVdfsWBx2+nTx+J20q2P37g9dOpjcfvo0ke4vbTrY3EdaNXH4rrQpq/g5pQLzfpYXEca9RGuK036WFxn9vURrgd7+viq7ENdH0cevdjVxwEMT3b0sbi+bOtjcb3Z6GNxA8g24bK4/qz1sbhBZCyuhjt9HMAIpdLHkcdgMhZXQ1Ys/hBuMBmLq+EvhMMsCJZiTNUAAAAASUVORK5CYII="}" class="card-img-top" alt="Fake Image">
        <div class="card-body">
          <h5 class="card-title">${DATA.title}</h5>
          <p class="card-text">${DATA.price}</p>
          <a href="${DATA.url}" target = "_blank"
           class="btn btn-danger">Go To Sourse</a>
        </div>
      </div>
        `
        row.appendChild(div);

    }
  }

document.addEventListener('DOMContentLoaded',displayData)