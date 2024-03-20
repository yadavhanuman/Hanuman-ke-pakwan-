// CAROUSEL LOGIC STARTS HERE
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })

// CART LOGIC STARTS HERE
$(document).ready(function(){
    $("#flip").click(function(){
     
      $("#panel").toggleClass('pan' );
      
  });
});
// $(document).ready(function(){
//     $("#flip").click(function(){
     
//       $(".orderlist").toggleClass('inline' );
      
//   });
// });



var number=1;
var container = document.getElementById('container');
var change=document.getElementById('change_click')
var flip=document.getElementById('flip');
var orderlist=document.getElementById('orderlist');
var panel=document.getElementById('panel');


        Array.from(document.getElementsByClassName('btn')).forEach((e)=>{
e.addEventListener('click',()=>{
    change_click.innerHTML=number++;
  
})
        })

     flip.addEventListener('click',()=>{
       


        if( orderlist.style.display==='initial'){
            orderlist.style.display='none';
            container.style.opacity='1';
        }else{
            orderlist.style.display='initial';
            container.style.opacity='0.2';
        }

    })


    var listOrder=document.getElementById('listOrder');
    var listOrder2=document.getElementById('listOrder2');
    var listOrder3=document.getElementById('listOrder3');
    var listOrder3=document.getElementById('listOrder4');
    var listOrder3=document.getElementById('listOrder5');
    var Panelcount=document.getElementById('count');
   let num=0;

    Array.from(document.getElementsByClassName('item')).forEach((div)=>{
        var btn=div.querySelector('.btn');
   var itemtxt=div.querySelector('.itemtxt');
   var rupee=div.querySelector('.rupee');
        btn.addEventListener('click',()=>{
            if(listOrder.innerHTML.trim()===''){
         listOrder.innerHTML= itemtxt.textContent;
        }
         else if (listOrder2.innerHTML.trim()===''){
            listOrder2.innerHTML= itemtxt.textContent;
         }
else if(listOrder3.innerHTML.trim()===''){
    listOrder3.innerHTML= itemtxt.textContent;
}
else if(listOrder4.innerHTML.trim()===''){
    listOrder4.innerHTML= itemtxt.textContent;
}
else if(listOrder5.innerHTML.trim()===''){
    listOrder5.innerHTML= itemtxt.textContent;
}
         num+=25;
// Panelcount.innerHTML=num;
// Panelcount.innerHTML+=rupee.textContent;

updatePanel();



        })
    })


    // place your order
    let place=document.getElementById('place');
    
place.addEventListener('click',()=>{
    setTimeout(function() {
        alert('Processing order...');
      }, 500);

      setTimeout(function() {
        alert(`Order placed! Total amount: Rupees${Panelcount.innerHTML}`);
        // cartItems.length = 0; // Clear the cart items array
        // updateCart();
         // Redirect to the next page
        window.location.href = 'Payment.html';
      }, 1500);
})
    



    const btn=document.getElementsByClassName('btn');
    var animation=document.getElementsByClassName('animation');
    Array.from(document.getElementsByClassName('btn')).forEach((e)=>{
        // var animation=document.getElementsByClassName('animation');
e.addEventListener('click',()=>{
animation.classList.add('animate');
});
    });

// const bag =('click',(flip)=>{
   
// alert('kaklf');
// })

// flip.addEventListener('click',()=>{
//    prompt('hello gyus')
// })



// tiffing adding in cart into panel


let tiffrupee=0;

Array.from(document.getElementsByClassName('tiff')).forEach((div)=>{
    var tiffhead=div.querySelector('.m-button-heading');
    var btn=div.querySelector('.btn');
    btn.addEventListener('click',()=>{
        if(listOrder.innerHTML.trim()===''){
            listOrder.innerHTML= tiffhead.textContent;
           }
            else if (listOrder2.innerHTML.trim()===''){
               listOrder2.innerHTML= tiffhead.textContent;
            }
   else if(listOrder3.innerHTML.trim()===''){
       listOrder3.innerHTML= tiffhead.textContent;
   }
   else if(listOrder4.innerHTML.trim()===''){
       listOrder4.innerHTML= tiffhead.textContent;
   }
   else if(listOrder5.innerHTML.trim()===''){
       listOrder5.innerHTML= tiffhead.textContent;
   }
   tiffrupee+=100;
   updatePanel();
  
    })
})
function updatePanel() {
    let total = num + tiffrupee;
    Panelcount.innerHTML = total;
  }